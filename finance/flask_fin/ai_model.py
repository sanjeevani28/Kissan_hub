from flask import Flask, request, jsonify
import pymysql
import os
import cohere
from dotenv import load_dotenv
from flask_cors import CORS  

load_dotenv()
COHERE_API_KEY = os.getenv("COHERE_API_KEY")

if not COHERE_API_KEY:
    raise ValueError("Cohere API key is missing. Ensure it is set in the .env file.")

co = cohere.Client(COHERE_API_KEY)

app = Flask(__name__)
CORS(app, resources={r"/*": {"origins": "*"}})

def get_db_connection():
    return pymysql.connect(host="localhost", user="root", password="", database="login", cursorclass=pymysql.cursors.DictCursor)

def get_farmer_transactions(farmer_id):
    try:
        conn = get_db_connection()
        with conn.cursor() as cursor:
            cursor.execute("SELECT amount, reason, type, date FROM transactions WHERE farmer_id = %s", (farmer_id,))
            transactions = cursor.fetchall()
        conn.close()
        return transactions
    except Exception as e:
        print(f"Database Error: {e}")
        return []

def generate_financial_advice(transactions):
    if not transactions:
        return "No transaction data found. Start adding transactions to receive financial advice."

    prompt = f"""
    You are a financial expert for farmers in India. Analyze the following transaction data and provide personalized financial guidance in Indian Rupees (Rs).

    Transactions:
    {transactions}

    Your advice should be specific to farming, covering cost reduction, investment tips, and financial stability.schemes for farmers, loans with low interest rate 
    and crop, equipment which are less in price but high quality. give the output in more appealing way,
    include tables and charts.
    Ensure all monetary values are expressed in Rs instead of $. Limit your response to 5-10 concise lines.
    """

    try:
        response = co.chat(model='command-r', message=prompt)
        print(f"Cohere API Response: {response}")  # Debugging API response
        advice_text = response.text.strip().replace("$", "Rs")  # Convert $ to Rs
        advice_lines = advice_text.split("\n")
        return "\n".join(advice_lines[:10])
    except Exception as e:
        print(f"Cohere API Error: {e}")
        return f"Error generating advice: {e}"

@app.route('/get_suggestions', methods=['POST'])
def get_suggestions():
    try:
        data = request.json
        farmer_id = data.get("farmer_id")

        if not farmer_id:
            return jsonify({"error": "Farmer ID is required"}), 400

        transactions = get_farmer_transactions(farmer_id)
        suggestions = generate_financial_advice(transactions)

        return jsonify({"suggestions": suggestions})

    except Exception as e:
        print(f"Server Error: {e}")
        return jsonify({"error": str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True)

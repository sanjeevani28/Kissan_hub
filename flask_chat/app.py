from flask import Flask, request, jsonify
from flask_cors import CORS
import cohere

app = Flask(__name__) 
CORS(app) 


COHERE_API_KEY = "******************************"
co = cohere.Client(COHERE_API_KEY)

@app.route("/chat", methods=["POST"])
def chat():
    try:
        user_message = request.json.get("message")
        print(f"Received message: {user_message}")

        if not user_message:
            return jsonify({"response": "Please type a message."})

       
        farming_prompt = f"""
        You are a farming expert AI. Give helpful advice in *only 3-4 complete lines*.
        Keep responses clear, concise, and easy to understand.

        Farmer: {user_message}
        AI Assistant:
        """

        response = co.generate(
            model="command",
            prompt=farming_prompt,
            max_tokens=80,
            stop_sequences=["\n\n", "\nFarmer:"],
            temperature=0.7 
        )

        ai_response = response.generations[0].text.strip()

        formatted_response = "\n".join(ai_response.split(". ")[:4])
        print(f"AI Response: {formatted_response}")

        return jsonify({"response": formatted_response})

    except Exception as e:
        print(f"Error: {e}")
        return jsonify({"response": "Error generating response. Please try again."}), 500

if __name__ == "__main__": 
    app.run(debug=True, host="0.0.0.0", port=5001)

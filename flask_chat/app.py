from flask import Flask, request, jsonify
from flask_cors import CORS
import cohere

app = Flask(__name__)  # Corrected __name__
CORS(app)  # Allow frontend to communicate with backend

# Replace with your actual Cohere API key
COHERE_API_KEY = "******************************"
co = cohere.Client(COHERE_API_KEY)

@app.route("/chat", methods=["POST"])
def chat():
    try:
        user_message = request.json.get("message")
        print(f"Received message: {user_message}")  # Debugging print

        if not user_message:
            return jsonify({"response": "Please type a message."})

        # Ensuring the response is exactly 3-4 complete lines
        farming_prompt = f"""
        You are a farming expert AI. Give helpful advice in *only 3-4 complete lines*.
        Keep responses clear, concise, and easy to understand.

        Farmer: {user_message}
        AI Assistant:
        """

        response = co.generate(
            model="command",
            prompt=farming_prompt,
            max_tokens=80,  # Allow enough tokens to form 3-4 full lines
            stop_sequences=["\n\n", "\nFarmer:"],  # Ensure responses don’t continue indefinitely
            temperature=0.7  # Balanced creativity for structured answers
        )

        ai_response = response.generations[0].text.strip()

        # Ensure response is formatted in 3-4 lines
        formatted_response = "\n".join(ai_response.split(". ")[:4])  # Extract 3-4 lines
        print(f"AI Response: {formatted_response}")  # Debugging print

        return jsonify({"response": formatted_response})

    except Exception as e:
        print(f"Error: {e}")  # Debugging print
        return jsonify({"response": "Error generating response. Please try again."}), 500

if __name__ == "__main__":  # Corrected __name__
    app.run(debug=True, host="0.0.0.0", port=5001)

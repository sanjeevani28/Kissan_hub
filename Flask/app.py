import numpy as np
import pandas as pd
from flask import Flask, render_template, request, jsonify
import pickle

# Create Flask app
app = Flask(__name__)

# Load the trained model and scaler
model = pickle.load(open(r"C:/xampp/htdocs/login/Flask/Crop.pkl", 'rb'))
scaler = pickle.load(open(r"C:/xampp/htdocs/login/Flask/scaler.pkl", 'rb'))

@app.route('/')
def home():
    return render_template("soil_AI.html")  # Ensure this file exists in the "templates" folder

@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Get input values from the form
        float_features = [float(x) for x in request.form.values()]
        features = np.array(float_features).reshape(1, -1)  # Ensure correct shape

        # Apply scaling
        features_scaled = scaler.transform(features)

        # Get probability scores for all crops
        probabilities = model.predict_proba(features_scaled)[0]

        # Get the top 5 crop predictions
        top_n = 5
        top_indices = np.argsort(probabilities)[-top_n:][::-1]
        top_crops = [(model.classes_[i], probabilities[i] * 100) for i in top_indices]

        # Send JSON response with top 5 predictions
        return jsonify({"predictions": top_crops})

    except Exception as e:
        return jsonify({"error": str(e)})

if __name__ == "__main__":
    app.run(debug=True, host="0.0.0.0", port=5005)

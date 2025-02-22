import numpy as np
import pandas as pd
from flask import Flask, request, jsonify
import joblib
from flask_cors import CORS

app = Flask(__name__)
CORS(app, resources={r"/predict": {"origins": "*"}})  # Allow all origins for '/predict'

# Load trained model
model = joblib.load(open('flu_hesitancy_logistic_regression.pkl', 'rb'))

@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Print received form data
        print("Received Form Data:", request.form)

        # Print expected feature names from model
        expected_features = model.feature_names_in_
        print("Expected Feature Order:", expected_features)

        # Define the correct order of features
        features_name = ['employment_industry_haxffmxo', 'employment_occupation_dcjcmpih',
                         'doctor_recc_seasonal_1', 'age_group_65+ Years', 'health_worker']

        # Extract input values in correct order
        input_features = [int(request.form[feature]) for feature in features_name]
        
        # Print extracted input features
        print("Extracted Input Features:", input_features)

        # Convert to DataFrame
        features_value = np.array([input_features])
        df = pd.DataFrame(features_value, columns=features_name)

        # Print DataFrame structure
        print("DataFrame for Prediction:\n", df)

        # Make prediction
        output = model.predict(df)[0]

        # Define response
        res_val = "Respondent received the flu vaccine" if output == 1 else "Respondent didn't receive the flu vaccine"

        response = jsonify({'prediction_text': res_val})
        return response

    except Exception as e:
        print("Error:", str(e))  # Print error in Flask logs
        return jsonify({'error': str(e)})

if __name__ == "__main__":
    app.run(debug=True)

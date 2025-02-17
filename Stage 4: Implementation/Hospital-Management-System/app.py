from flask import Flask, request, jsonify
import numpy as np
import pandas as pd
import pickle
from flask_cors import CORS

app = Flask(__name__)
CORS(app)
model = pickle.load(open('model.pkl', 'rb'))

@app.route('/predict', methods=['POST'])
def predict():
    input_features = [int(request.form[x]) for x in request.form.keys()]
    features_value = [np.array(input_features)]

    features_name = ['clump_thickness', 'uniform_cell_size', 'uniform_cell_shape',
                     'marginal_adhesion', 'single_epithelial_size', 'bare_nuclei',
                     'bland_chromatin', 'normal_nucleoli', 'mitoses']

    df = pd.DataFrame(features_value, columns=features_name)
    output = model.predict(df)

    res_val = "Malignant Breast Cancer" if output == 4 else "No Breast Cancer"

    return jsonify({'prediction_text': f'Patient has {res_val}'})

if __name__ == "__main__":
    app.run(debug=True)

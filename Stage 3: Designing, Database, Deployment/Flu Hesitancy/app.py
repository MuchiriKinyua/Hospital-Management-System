import numpy as np
import pandas as pd
from flask import Flask, request, render_template
import joblib

app = Flask(__name__)
model = joblib.load(open('flu_hesitancy_logistic_regression.pkl', 'rb'))

@app.route('/')
def home():
  return render_template('index.html')

@app.route('/predict',methods=['POST'])
def predict():
  input_features = [int(x) for x in request.form.values()]
  features_value = [np.array(input_features)]

  features_name = ['employment_industry_haxffmxo', 'employment_occupation_dcjcmpih', 'doctor_recc_seasonal_1',
       'age_group_65+ Years', 'health_worker']

  df = pd.DataFrame(features_value, columns=features_name)
  output = model.predict(df)

  if output == 0:
      res_val = "Respondent didn't receive the flu vaccine"
  else:
      res_val = "Respondent received the flu vaccine"


  return render_template('index.html', prediction_text=' {}'.format(res_val))

if __name__ == "__main__":
  app.run()

from flask import Flask, render_template, request, jsonify
import numpy as np
import tensorflow as tf
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Conv2D, MaxPooling2D, Flatten, Dense
from tensorflow.keras.preprocessing.image import load_img, img_to_array
import os
from werkzeug.utils import secure_filename

app = Flask(__name__)

# Define model architecture (Must match original training script!)
def build_model():
    model = Sequential([
        Conv2D(32, (3,3), activation='relu', input_shape=(64, 64, 3)),
        MaxPooling2D(2,2),
        Conv2D(64, (3,3), activation='relu'),
        MaxPooling2D(2,2),
        Flatten(),
        Dense(128, activation='relu'),
        Dense(2, activation='softmax')  # 2 neurons for 'Normal' & 'Pneumonia'
    ])
    return model

# Rebuild model and load weights
model = build_model()
model.load_weights("pneumonia_cnn/model.weights.h5")

UPLOAD_FOLDER = "static/uploads"
os.makedirs(UPLOAD_FOLDER, exist_ok=True)
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER

# Class labels
CLASS_NAMES = ['Normal', 'Pneumonia']

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/predict', methods=['POST'])
def predict():
    if 'file' not in request.files:
        return jsonify({'error': 'No file uploaded'})
    
    file = request.files['file']
    if file.filename == '':
        return jsonify({'error': 'No selected file'})
    
    filename = secure_filename(file.filename)
    filepath = os.path.join(app.config['UPLOAD_FOLDER'], filename)
    file.save(filepath)
    
    # Preprocess image
    image = load_img(filepath, target_size=(64, 64))
    image = img_to_array(image) / 255.0  # Normalize
    image = np.expand_dims(image, axis=0)
    
    # Make prediction
    prediction = model.predict(image)[0]
    predicted_class = CLASS_NAMES[np.argmax(prediction)]
    confidence = float(np.max(prediction))
    
    return jsonify({'class': predicted_class, 'confidence': confidence, 'image_url': filepath})

if __name__ == '__main__':
    app.run(debug=True)

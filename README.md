# Hospital Management System

![Screenshot from 2025-02-21 07-01-32](https://github.com/user-attachments/assets/912c0e52-83ef-46ca-ab1b-b10728937774)

# Overview

![Screenshot from 2025-02-21 05-16-07](https://github.com/user-attachments/assets/8288f08e-c975-43a8-ab43-429592bd6efb)

The Hospital Management System (HMS) is a comprehensive solution designed to streamline hospital operations. This system provides functionalities for managing patients, doctors, appointments, billing, and more. The application is built using Laravel (backend) and integrates with Flask for machine learning-based disease prediction and a ChatBot to help users navigate through the system.

# Features

User Roles & Authentication: Secure access with roles like Super Admin, Doctor, Nurse, and Receptionist.

Patient Management: CRUD operations for patient records, medical history tracking.

Doctor & Staff Management: Assign doctors, nurses, and other staff to departments.

Appointments & Scheduling: Book, update, and manage patient appointments.

Billing & Invoicing: Generate invoices for medical treatments and consultations.

Medical Reports & Diagnostics: Integration with ML models for breast cancer prediction using Flask.

Role-based Sidebar Navigation: Dynamic sidebar visibility based on user role.

Notification System: Real-time alerts for doctors and staff.

Dashboard & Reports: Admin dashboard with key hospital metrics.

IoT Integration (Future Scope): For monitoring patient vitals in real-time.

# Technologies Used

Backend: Laravel (PHP Framework)

Frontend: Blade Templates (Bootstrap, jQuery, AJAX)

Database: MySQL

Machine Learning Integration: Flask (Python, OpenCV, SHAP/LIME for explainability)

Cloud Storage: AWS S3 (for medical records, prescriptions, images)

Geofencing: Location-based attendance tracking

Authentication: Laravel Breeze/Sanctum for API security

# Installation Guide

## Prerequisites

PHP 8+

Composer

Node.js & npm

MySQL / MariaDB

Python 3.8+ (for Flask ML model)

# Steps to Install

Clone the repository:

git clone https://github.com/MuchiriKinyua/hospital-management.git

cd hospital-management

Install Laravel dependencies:

composer install

Create and configure the .env file:

cp .env.example .env
php artisan key:generate

Set up database credentials in .env.

Run migrations and seed data:

php artisan migrate --seed

Install frontend dependencies:

npm install && npm run dev

Start the Laravel server:

php artisan serve

Run Flask ML Server (For Disease Prediction):

cd flask-ml-api
python app.py

Open the application in the browser:

http://127.0.0.1:8000/

# API Endpoints (For ML Predictions)

Endpoint

Method

Description

/predict/breast-cancer

POST

Predicts if the tumor is Malignant or Benign

![Screenshot from 2025-02-21 05-17-10](https://github.com/user-attachments/assets/f5950055-b8a4-4587-9895-1b00017633a7)

/shap-importance

GET

Returns feature importance using SHAP

# Future Enhancements

Mobile App (Flutter) for patient-doctor interaction.

Blockchain-based Medical Records for better security.

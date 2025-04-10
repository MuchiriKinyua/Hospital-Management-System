<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreastCancerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FluController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified')->name('home');

Auth::routes();

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::resource('appointments', App\Http\Controllers\AppointmentController::class);
Route::resource('doctors', App\Http\Controllers\DoctorController::class);
Route::resource('notifications', App\Http\Controllers\NotificationController::class);
Route::resource('predictions', App\Http\Controllers\PredictionController::class);
Route::get('/breast-cancer', [BreastCancerController::class, 'breastcancer']);
Route::get('/flu', [FluController::class, 'flu']);
Route::resource('billings', App\Http\Controllers\BillingController::class);
Route::resource('patients', App\Http\Controllers\PatientController::class);
Route::resource('records', App\Http\Controllers\RecordController::class);
Route::resource('pharmacies', App\Http\Controllers\PharmacyController::class);
Route::resource('staff', App\Http\Controllers\StaffController::class);
Route::resource('tests', App\Http\Controllers\TestController::class);
Route::resource('wards', App\Http\Controllers\WardController::class);
Route::resource('users', UserController::class);

Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/cancelled/{id}', [AdminController::class, 'cancelled']);
Route::get('/doctor', [AdminController::class, 'doctor']);
Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);
Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);
Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);
Route::get('/emailview/{id}', [AdminController::class, 'emailview']);
Route::post('/sendemail/{id}', [AdminController::class, 'sendemail']);
Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Route::resource('emergencies', App\Http\Controllers\EmergencyController::class);
Route::resource('expenses', App\Http\Controllers\ExpenseController::class);
Route::resource('insurances', App\Http\Controllers\InsuranceController::class);
Route::resource('invoices', App\Http\Controllers\InvoiceController::class);
Route::resource('methods', App\Http\Controllers\MethodController::class);
Route::resource('notes', App\Http\Controllers\NoteController::class);
Route::resource('nurses', App\Http\Controllers\NurseController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::resource('payments', App\Http\Controllers\PaymentController::class);
Route::resource('performances', App\Http\Controllers\PerformanceController::class);
Route::resource('reports', App\Http\Controllers\ReportController::class);
Route::resource('requests', App\Http\Controllers\RequestController::class);
Route::resource('schedules', App\Http\Controllers\ScheduleController::class);
Route::resource('settings', App\Http\Controllers\SettingController::class);
Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
Route::resource('technicians', App\Http\Controllers\TechnicianController::class);
Route::resource('trails', App\Http\Controllers\TrailController::class);
Route::resource('admissions', App\Http\Controllers\AdmissionController::class);
Route::resource('prescriptions', App\Http\Controllers\PrescriptionController::class);
Route::resource('results', App\Http\Controllers\ResultController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class);


@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Date & Clock Section -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <h4 id="current-date" class="fw-bold d-inline display-5"></h4>
                <span class="fw-bold mx-2"> </span>
                <h4 id="current-time" class="fw-bold d-inline display-5"></h4>
            </div>
        </div>

        <div class="row d-flex justify-content-start">

            <!-- Total Users -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-secondary text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-user-friends fa-2x"></i> <!-- Changed to user-friends -->
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalUsers }}</h2>
                        <h4 class="lead">Users</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('users.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage users <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Doctors -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-success text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-user-md fa-2x"></i> <!-- Changed to user-md -->
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalDoctors }}</h2>
                        <h4 class="lead">Doctors</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('doctors.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Doctors <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Patients -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-primary text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-procedures fa-2x"></i> <!-- Changed to procedures -->
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalPatients }}</h2>
                        <h4 class="lead">Patients</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('patients.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Patients <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Staff -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-warning text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-user-tie fa-2x"></i> <!-- Changed to user-tie -->
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalStaff }}</h2>
                        <h4 class="lead">Staff</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('staff.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Staff <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Appointments -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-danger text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-calendar-check fa-2x"></i> <!-- Changed to calendar-check -->
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalAppointments }}</h2>
                        <h4 class="lead">Appointments</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('appointments.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Appointments <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Billings -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-orange text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-file-invoice-dollar fa-2x"></i> <!-- Changed to file-invoice-dollar -->
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalBillings }}</h2>
                        <h4 class="lead">Billings</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('billings.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Billings <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Records -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-info text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-folder-open fa-2x"></i> <!-- Changed to folder-open -->
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalRecords }}</h2>
                        <h4 class="lead">Records</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('records.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Records <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Notifications -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-dark text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-bell fa-2x"></i> <!-- Changed to bell -->
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalNotification }}</h2>
                        <h4 class="lead">Notifications</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('notifications.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Notifications <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Real-Time Date & Time Script -->
    <script>
        function updateDateTime() {
            const now = new Date();
            const optionsDate = { day: '2-digit', month: '2-digit', year: 'numeric' };
            const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };

            document.getElementById('current-date').innerText = now.toLocaleDateString('en-GB', optionsDate);
            document.getElementById('current-time').innerText = now.toLocaleTimeString('en-GB', optionsTime);
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
@endsection

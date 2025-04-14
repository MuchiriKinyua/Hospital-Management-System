<div class="container">
    <h1 class="title">{{ $patient->full_name }}</h1>

    <div class="image-container mb-4">
        <img height="200px" src="{{ asset('images/' . $patient->image) }}" alt="{{ $patient->full_name }}">
    </div>

    <div class="row">
        <!-- Full Name Field -->
        <div class="col-sm-12 mb-2">
            {!! Form::label('full_name', 'Full Name:') !!}
            <p>{{ $patient->full_name }}</p>
        </div>

        <!-- Dob Field -->
        <div class="col-sm-12 mb-2">
            {!! Form::label('dob', 'Dob:') !!}
            <p>{{ $patient->dob }}</p>
        </div>

        <!-- Gender Field -->
        <div class="col-sm-12 mb-2">
            {!! Form::label('gender', 'Gender:') !!}
            <p>{{ $patient->gender }}</p>
        </div>

        <!-- Phone Field -->
        <div class="col-sm-12 mb-2">
            {!! Form::label('phone', 'Phone:') !!}
            <p>{{ $patient->phone }}</p>
        </div>

        <!-- Email Field -->
        <div class="col-sm-12 mb-2">
            {!! Form::label('email', 'Email:') !!}
            <p>{{ $patient->email }}</p>
        </div>

        <!-- Address Field -->
        <div class="col-sm-12 mb-2">
            {!! Form::label('address', 'Address:') !!}
            <p>{{ $patient->address }}</p>
        </div>

        <!-- Blood Type Field -->
        <div class="col-sm-12 mb-2">
            {!! Form::label('blood_type', 'Blood Type:') !!}
            <p>{{ $patient->blood_type }}</p>
        </div>

        <!-- Allergies Field -->
        <div class="col-sm-12 mb-2">
            {!! Form::label('allergies', 'Allergies:') !!}
            <p>{{ $patient->allergies }}</p>
        </div>

        <!-- Medical History Field -->
        <div class="col-sm-12 mb-2">
            {!! Form::label('medical_history', 'Medical History:') !!}
            <p>{{ $patient->medical_history }}</p>
        </div>
    </div>
</div>

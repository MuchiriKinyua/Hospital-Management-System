<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $patient->full_name }}</p>
</div>

<!-- Dob Field -->
<div class="col-sm-12">
    {!! Form::label('dob', 'Dob:') !!}
    <p>{{ $patient->dob }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $patient->gender }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $patient->phone }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $patient->email }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $patient->address }}</p>
</div>

<!-- Blood Type Field -->
<div class="col-sm-12">
    {!! Form::label('blood_type', 'Blood Type:') !!}
    <p>{{ $patient->blood_type }}</p>
</div>

<!-- Allergies Field -->
<div class="col-sm-12">
    {!! Form::label('allergies', 'Allergies:') !!}
    <p>{{ $patient->allergies }}</p>
</div>

<!-- Medical History Field -->
<div class="col-sm-12">
    {!! Form::label('medical_history', 'Medical History:') !!}
    <p>{{ $patient->medical_history }}</p>
</div>


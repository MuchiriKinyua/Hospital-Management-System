<!-- Full Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_name', 'Full Name:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control', 'maxlength' => 10, 'maxlength' => 10]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Blood Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('blood_type', 'Blood Type:') !!}
    {!! Form::text('blood_type', null, ['class' => 'form-control', 'maxlength' => 10, 'maxlength' => 10]) !!}
</div>

<!-- Allergies Field -->
<div class="form-group col-sm-6">
    {!! Form::label('allergies', 'Allergies:') !!}
    {!! Form::text('allergies', null, ['class' => 'form-control', 'maxlength' => 30, 'maxlength' => 30]) !!}
</div>

<!-- Medical History Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medical_history', 'Medical History:') !!}
    {!! Form::text('medical_history', null, ['class' => 'form-control', 'maxlength' => 40, 'maxlength' => 40]) !!}
</div>
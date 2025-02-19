<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Provider Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('provider_name', 'Provider Name:') !!}
    {!! Form::text('provider_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Policy Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('policy_number', 'Policy Number:') !!}
    {!! Form::text('policy_number', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Coverage Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage_details', 'Coverage Details:') !!}
    {!! Form::text('coverage_details', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>
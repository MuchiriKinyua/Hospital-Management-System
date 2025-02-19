<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    {!! Form::number('doctor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Medicine Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medicine', 'Medicine:') !!}
    {!! Form::text('medicine', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Dosage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dosage', 'Dosage:') !!}
    {!! Form::text('dosage', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::text('duration', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Instructions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instructions', 'Instructions:') !!}
    {!! Form::text('instructions', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>
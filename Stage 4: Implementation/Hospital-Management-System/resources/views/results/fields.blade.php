<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    {!! Form::number('doctor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Test Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('test_name', 'Test Name:') !!}
    {!! Form::text('test_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Result Field -->
<div class="form-group col-sm-6">
    {!! Form::label('result', 'Result:') !!}
    {!! Form::text('result', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>
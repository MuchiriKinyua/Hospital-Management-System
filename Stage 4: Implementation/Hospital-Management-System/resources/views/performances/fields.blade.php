<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    {!! Form::number('doctor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_count', 'Patient Count:') !!}
    {!! Form::text('patient_count', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Avg Consultation Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('avg_consultation_time', 'Avg Consultation Time:') !!}
    {!! Form::text('avg_consultation_time', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>
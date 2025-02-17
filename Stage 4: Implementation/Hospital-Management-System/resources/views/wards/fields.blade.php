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

<!-- Ward Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ward_name', 'Ward Name:') !!}
    {!! Form::text('ward_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Room Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('room_number', 'Room Number:') !!}
    {!! Form::text('room_number', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>
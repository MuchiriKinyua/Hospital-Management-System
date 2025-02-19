<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    {!! Form::number('doctor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>
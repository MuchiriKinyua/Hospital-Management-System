<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Issued By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issued_by', 'Issued By:') !!}
    {!! Form::text('issued_by', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>
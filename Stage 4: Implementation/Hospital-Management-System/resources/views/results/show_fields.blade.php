<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $result->doctor_id }}</p>
</div>

<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $result->patient_id }}</p>
</div>

<!-- Test Name Field -->
<div class="col-sm-12">
    {!! Form::label('test_name', 'Test Name:') !!}
    <p>{{ $result->test_name }}</p>
</div>

<!-- Result Field -->
<div class="col-sm-12">
    {!! Form::label('result', 'Result:') !!}
    <p>{{ $result->result }}</p>
</div>


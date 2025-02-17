<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $test->patient_id }}</p>
</div>

<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $test->doctor_id }}</p>
</div>

<!-- Test Name Field -->
<div class="col-sm-12">
    {!! Form::label('test_name', 'Test Name:') !!}
    <p>{{ $test->test_name }}</p>
</div>

<!-- Test Result Field -->
<div class="col-sm-12">
    {!! Form::label('test_result', 'Test Result:') !!}
    <p>{{ $test->test_result }}</p>
</div>

<!-- Test Date Field -->
<div class="col-sm-12">
    {!! Form::label('test_date', 'Test Date:') !!}
    <p>{{ $test->test_date }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $test->status }}</p>
</div>


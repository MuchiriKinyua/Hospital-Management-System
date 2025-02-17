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

<!-- Test Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('test_name', 'Test Name:') !!}
    {!! Form::text('test_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Test Result Field -->
<div class="form-group col-sm-6">
    {!! Form::label('test_result', 'Test Result:') !!}
    {!! Form::text('test_result', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Test Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('test_date', 'Test Date:') !!}
    {!! Form::text('test_date', null, ['class' => 'form-control','id'=>'test_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#test_date').datepicker()
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>
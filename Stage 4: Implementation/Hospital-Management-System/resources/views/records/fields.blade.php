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

<!-- Diagnosis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diagnosis', 'Diagnosis:') !!}
    {!! Form::text('diagnosis', null, ['class' => 'form-control', 'maxlength' => 200, 'maxlength' => 200]) !!}
</div>

<!-- Treatment Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('treatment_plan', 'Treatment Plan:') !!}
    {!! Form::text('treatment_plan', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Prescription Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prescription', 'Prescription:') !!}
    {!! Form::text('prescription', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Visit Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    {!! Form::text('visit_date', null, ['class' => 'form-control','id'=>'visit_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#visit_date').datepicker()
    </script>
@endpush
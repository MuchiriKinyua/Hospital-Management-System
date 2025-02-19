<!-- Ward Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ward_id', 'Ward Id:') !!}
    {!! Form::number('ward_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Admitted By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admitted_by', 'Admitted By:') !!}
    {!! Form::text('admitted_by', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Reason Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reason', 'Reason:') !!}
    {!! Form::text('reason', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Admission Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_date', 'Admission Date:') !!}
    {!! Form::text('admission_date', null, ['class' => 'form-control','id'=>'admission_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#admission_date').datepicker()
    </script>
@endpush

<!-- Discharge Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discharge_date', 'Discharge Date:') !!}
    {!! Form::text('discharge_date', null, ['class' => 'form-control','id'=>'discharge_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#discharge_date').datepicker()
    </script>
@endpush
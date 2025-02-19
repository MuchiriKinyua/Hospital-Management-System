<!-- Ward Id Field -->
<div class="col-sm-12">
    {!! Form::label('ward_id', 'Ward Id:') !!}
    <p>{{ $admission->ward_id }}</p>
</div>

<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $admission->patient_id }}</p>
</div>

<!-- Admitted By Field -->
<div class="col-sm-12">
    {!! Form::label('admitted_by', 'Admitted By:') !!}
    <p>{{ $admission->admitted_by }}</p>
</div>

<!-- Reason Field -->
<div class="col-sm-12">
    {!! Form::label('reason', 'Reason:') !!}
    <p>{{ $admission->reason }}</p>
</div>

<!-- Admission Date Field -->
<div class="col-sm-12">
    {!! Form::label('admission_date', 'Admission Date:') !!}
    <p>{{ $admission->admission_date }}</p>
</div>

<!-- Discharge Date Field -->
<div class="col-sm-12">
    {!! Form::label('discharge_date', 'Discharge Date:') !!}
    <p>{{ $admission->discharge_date }}</p>
</div>


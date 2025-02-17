<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $record->patient_id }}</p>
</div>

<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $record->doctor_id }}</p>
</div>

<!-- Diagnosis Field -->
<div class="col-sm-12">
    {!! Form::label('diagnosis', 'Diagnosis:') !!}
    <p>{{ $record->diagnosis }}</p>
</div>

<!-- Treatment Plan Field -->
<div class="col-sm-12">
    {!! Form::label('treatment_plan', 'Treatment Plan:') !!}
    <p>{{ $record->treatment_plan }}</p>
</div>

<!-- Prescription Field -->
<div class="col-sm-12">
    {!! Form::label('prescription', 'Prescription:') !!}
    <p>{{ $record->prescription }}</p>
</div>

<!-- Visit Date Field -->
<div class="col-sm-12">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    <p>{{ $record->visit_date }}</p>
</div>


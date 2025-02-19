<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $prescription->patient_id }}</p>
</div>

<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $prescription->doctor_id }}</p>
</div>

<!-- Medicine Field -->
<div class="col-sm-12">
    {!! Form::label('medicine', 'Medicine:') !!}
    <p>{{ $prescription->medicine }}</p>
</div>

<!-- Dosage Field -->
<div class="col-sm-12">
    {!! Form::label('dosage', 'Dosage:') !!}
    <p>{{ $prescription->dosage }}</p>
</div>

<!-- Duration Field -->
<div class="col-sm-12">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{{ $prescription->duration }}</p>
</div>

<!-- Instructions Field -->
<div class="col-sm-12">
    {!! Form::label('instructions', 'Instructions:') !!}
    <p>{{ $prescription->instructions }}</p>
</div>


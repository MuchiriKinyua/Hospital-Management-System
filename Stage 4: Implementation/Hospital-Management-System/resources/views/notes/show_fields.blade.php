<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $note->doctor_id }}</p>
</div>

<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $note->patient_id }}</p>
</div>

<!-- Visit Id Field -->
<div class="col-sm-12">
    {!! Form::label('visit_id', 'Visit Id:') !!}
    <p>{{ $note->visit_id }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $note->notes }}</p>
</div>


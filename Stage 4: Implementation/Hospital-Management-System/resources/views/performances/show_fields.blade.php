<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $performance->doctor_id }}</p>
</div>

<!-- Patient Count Field -->
<div class="col-sm-12">
    {!! Form::label('patient_count', 'Patient Count:') !!}
    <p>{{ $performance->patient_count }}</p>
</div>

<!-- Avg Consultation Time Field -->
<div class="col-sm-12">
    {!! Form::label('avg_consultation_time', 'Avg Consultation Time:') !!}
    <p>{{ $performance->avg_consultation_time }}</p>
</div>


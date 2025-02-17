<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $ward->patient_id }}</p>
</div>

<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $ward->doctor_id }}</p>
</div>

<!-- Ward Name Field -->
<div class="col-sm-12">
    {!! Form::label('ward_name', 'Ward Name:') !!}
    <p>{{ $ward->ward_name }}</p>
</div>

<!-- Room Number Field -->
<div class="col-sm-12">
    {!! Form::label('room_number', 'Room Number:') !!}
    <p>{{ $ward->room_number }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $ward->status }}</p>
</div>


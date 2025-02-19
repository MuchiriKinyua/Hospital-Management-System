<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $schedule->doctor_id }}</p>
</div>

<!-- Available Days Field -->
<div class="col-sm-12">
    {!! Form::label('available_days', 'Available Days:') !!}
    <p>{{ $schedule->available_days }}</p>
</div>

<!-- Start Time Field -->
<div class="col-sm-12">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{{ $schedule->start_time }}</p>
</div>

<!-- End Time Field -->
<div class="col-sm-12">
    {!! Form::label('end_time', 'End Time:') !!}
    <p>{{ $schedule->end_time }}</p>
</div>


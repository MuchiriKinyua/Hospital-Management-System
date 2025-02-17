<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $doctor->name }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $doctor->phone }}</p>
</div>

<!-- Room Field -->
<div class="col-sm-12">
    {!! Form::label('room', 'Room:') !!}
    <p>{{ $doctor->room }}</p>
</div>

<!-- Speciality Field -->
<div class="col-sm-12">
    {!! Form::label('speciality', 'Speciality:') !!}
    <p>{{ $doctor->speciality }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $doctor->image }}</p>
</div>


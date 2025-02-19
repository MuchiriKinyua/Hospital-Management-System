<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $technician->department_id }}</p>
</div>

<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $technician->full_name }}</p>
</div>

<!-- Speciality Field -->
<div class="col-sm-12">
    {!! Form::label('speciality', 'Speciality:') !!}
    <p>{{ $technician->speciality }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $technician->phone }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $technician->email }}</p>
</div>


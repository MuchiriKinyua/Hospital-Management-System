<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $emergency->patient_id }}</p>
</div>

<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $emergency->full_name }}</p>
</div>

<!-- Role Field -->
<div class="col-sm-12">
    {!! Form::label('role', 'Role:') !!}
    <p>{{ $emergency->role }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $emergency->phone }}</p>
</div>


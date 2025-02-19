<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $insurance->patient_id }}</p>
</div>

<!-- Provider Name Field -->
<div class="col-sm-12">
    {!! Form::label('provider_name', 'Provider Name:') !!}
    <p>{{ $insurance->provider_name }}</p>
</div>

<!-- Policy Number Field -->
<div class="col-sm-12">
    {!! Form::label('policy_number', 'Policy Number:') !!}
    <p>{{ $insurance->policy_number }}</p>
</div>

<!-- Coverage Details Field -->
<div class="col-sm-12">
    {!! Form::label('coverage_details', 'Coverage Details:') !!}
    <p>{{ $insurance->coverage_details }}</p>
</div>


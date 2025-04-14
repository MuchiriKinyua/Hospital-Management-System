@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="title">Patients</h1>
            <a href="{{ route('patients.create') }}" class="btn btn-primary">Add a new patient</a>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        @foreach($patients as $patient)
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('images/' . $patient->image) }}" alt="Patient Image" height="200px">
                <div class="card-body">
                    <h5 class="card-title">{{ $patient->full_name }}</h5>
                    <p class="card-text"><strong>DOB:</strong> {{ $patient->dob }}</p>
                    <p class="card-text"><strong>Gender:</strong> {{ $patient->gender }}</p>
                    <p class="card-text"><strong>Phone:</strong> {{ $patient->phone }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $patient->email }}</p>
                    <p class="card-text"><strong>Address:</strong> {{ $patient->address }}</p>
                    <p class="card-text"><strong>Blood Type:</strong> {{ $patient->blood_type }}</p>
                    <p class="card-text"><strong>Allergies:</strong> {{ $patient->allergies }}</p>
                    <p class="card-text"><strong>Medical History:</strong> {{ $patient->medical_history }}</p>

                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info">View Details</a>
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>

                    {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete', 'style' => 'display:inline-block;']) !!}
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

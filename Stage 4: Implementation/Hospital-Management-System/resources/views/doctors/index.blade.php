@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="title">Doctors</h1>
            <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add a new doctor</a>
        </div>
    </div>
</section>


<div class="container">
    <div class="row">
        @foreach($doctors as $doctor)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/' . $doctor->image) }}" alt="Doctor Image" height="200px">
                <div class="card-body">
                    <h5 class="card-title">{{ $doctor->name }}</h5>
                    <p class="card-text">Phone: {{ $doctor->phone }}</p>
                    <p class="card-text">Room: {{ $doctor->room }}</p>
                    <p class="card-text">Speciality: {{ $doctor->speciality }}</p>
                    <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-info">View Details</a>
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                    {!! Form::open(['route' => ['doctors.destroy', $doctor->id], 'method' => 'delete', 'style' => 'display:inline-block;']) !!}
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Profile</h2>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <!-- Add other user details as needed -->
    </div>
@endsection
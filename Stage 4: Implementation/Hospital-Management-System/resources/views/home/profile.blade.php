{{-- resources/views/user/profile.blade.php --}}
@extends('home.profile') <!-- Assuming you have a layout for user -->
@section('content')
    <h1>User Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <!-- Add more fields as needed -->
@endsection

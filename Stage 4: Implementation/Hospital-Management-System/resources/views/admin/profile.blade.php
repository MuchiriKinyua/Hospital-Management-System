{{-- resources/views/admin/profile.blade.php --}}
@extends('layouts.admin') <!-- Assuming you have a layout for admin -->
@section('content')
    <h1>Admin Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <!-- Add more fields as needed -->
@endsection

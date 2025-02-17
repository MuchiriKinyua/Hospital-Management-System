@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <!-- Top Row: Predictions Title + Search Bar -->
            <div class="row mb-2 align-items-center">
                <div class="col-sm-6">
                    <h1 class="font-weight-bold text-dark">Predictions</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <form action="{{ route('predictions.index') }}" method="GET" class="form-inline d-inline-block">
                        <input type="text" name="search" class="form-control mr-2" placeholder="Search" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                        <a href="{{ route('predictions.index') }}" class="btn btn-secondary">Clear</a>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="{{ url('breast-cancer') }}" 
                       class="d-block p-4 bg-light text-dark text-center font-weight-bold"
                       style="text-decoration: none; font-size: 24px; border-radius: 5px;">
                        Breast Cancer
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="{{ url('breast-cancer') }}" 
                       class="d-block p-4 bg-light text-dark text-center font-weight-bold"
                       style="text-decoration: none; font-size: 24px; border-radius: 5px;">
                        Dental
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="{{ url('breast-cancer') }}" 
                       class="d-block p-4 bg-light text-dark text-center font-weight-bold"
                       style="text-decoration: none; font-size: 24px; border-radius: 5px;">
                        Diabetes
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="{{ url('breast-cancer') }}" 
                       class="d-block p-4 bg-light text-dark text-center font-weight-bold"
                       style="text-decoration: none; font-size: 24px; border-radius: 5px;">
                       Eye problems
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="{{ url('breast-cancer') }}" 
                       class="d-block p-4 bg-light text-dark text-center font-weight-bold"
                       style="text-decoration: none; font-size: 24px; border-radius: 5px;">
                       Hospital bookings
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('predictions.table')
        </div>
    </div>

@endsection

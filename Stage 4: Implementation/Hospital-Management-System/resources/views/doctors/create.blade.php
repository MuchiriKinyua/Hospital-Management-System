@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'doctors.store', 'files' => true]) !!}

            

            <div class="card-body">

                <div class="row">
                    @include('doctors.fields')
                </div>
                

            </div>



            {!! Form::close() !!}

        </div>
    </div>
@endsection

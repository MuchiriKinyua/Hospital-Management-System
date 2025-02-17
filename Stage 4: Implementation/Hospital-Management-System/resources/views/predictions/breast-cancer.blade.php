@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 text-center">
                    <h1 class="font-weight-bold text-dark">Breast Cancer Detection</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container p-4">
        <div class="card shadow-lg p-4 bg-white rounded">
            <div class="row align-items-center">
                <!-- SVG Image -->
                <div class="col-md-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="200" height="200">
                        <circle cx="50" cy="50" r="48" stroke="blue" stroke-width="4" fill="white"/>
                        <path d="M50 12c-21 0 -38 17 -38 38s17 38 38 38 38 -17 38 -38 -17 -38 -38 -38zm0 66c-15 0 -28 -13 -28 -28s13 -28 28 -28 28 13 28 28 -13 28 -28 28z" fill="blue"/>
                    </svg>
                </div>

                <!-- Form Section -->
                <div class="col-md-6">
                    <h4 class="text-center mb-3">Enter Cell Details</h4>
                    <form>
                        <div class="form-group">
                            <label for="clump_thickness">Clump Thickness</label>
                            <input type="number" class="form-control" name="clump_thickness" required>
                        </div>
                        <div class="form-group">
                            <label for="uniform_cell_size">Uniform Cell Size</label>
                            <input type="number" class="form-control" name="uniform_cell_size" required>
                        </div>
                        <div class="form-group">
                            <label for="uniform_cell_shape">Uniform Cell Shape</label>
                            <input type="number" class="form-control" name="uniform_cell_shape" required>
                        </div>
                        <div class="form-group">
                            <label for="marginal_adhesion">Marginal Adhesion</label>
                            <input type="number" class="form-control" name="marginal_adhesion" required>
                        </div>
                        <div class="form-group">
                            <label for="single_epithelial_size">Single Epithelial Cell Size</label>
                            <input type="number" class="form-control" name="single_epithelial_size" required>
                        </div>
                        <div class="form-group">
                            <label for="bare_nuclei">Bare Nuclei</label>
                            <input type="number" class="form-control" name="bare_nuclei" required>
                        </div>
                        <div class="form-group">
                            <label for="bland_chromatin">Bland Chromatin</label>
                            <input type="number" class="form-control" name="bland_chromatin" required>
                        </div>
                        <div class="form-group">
                            <label for="normal_nucleoli">Normal Nucleoli</label>
                            <input type="number" class="form-control" name="normal_nucleoli" required>
                        </div>
                        <div class="form-group">
                            <label for="mitoses">Mitoses</label>
                            <input type="number" class="form-control" name="mitoses" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Predict Cancer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="content px-3 mt-4">
        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('predictions.table')
        </div>
    </div>

    <style>
        body {
            background-color: #808080;
            background-image: linear-gradient(315deg, #de5499 19%, #a0c5ba 85%);
            color: #fff;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
        }

        .btn-primary {
            background-color: #de5499;
            border: none;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #c13b7d;
        }
    </style>
@endsection

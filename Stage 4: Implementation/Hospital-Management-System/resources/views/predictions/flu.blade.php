@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 text-center">
                    <h1 class="font-weight-bold text-dark">Flu Vaccine Hesitancy</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container p-4">
        <div class="card shadow-lg p-4 bg-white rounded">
            <div class="row align-items-center">
                <!-- Image -->
                <div>
                    <img height="500px" width="500px" src="/flu.png" alt="">
                </div>

                <!-- Form Section -->
                <div class="col-md-6">
                    <h4 class="text-center mb-3">Enter Personal Details</h4>
                    <form id="predictionForm">
                    <div class="form-group">
                            <label for="employment_industry_haxffmxo">Employment Industry</label>
                            <select class="form-control" name="employment_industry_haxffmxo" required>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="employment_occupation_dcjcmpih">Employment Occupation</label>
                            <select class="form-control" name="employment_occupation_dcjcmpih" required>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>                   
                        
                        <div class="form-group">
                            <label for="doctor_recc_seasonal_1">Doctor Recommended Seasonal Vaccine</label>
                            <select class="form-control" name="doctor_recc_seasonal_1" required>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="age_group_65+ Years">Age Group (65+ Years)</label>
                            <select class="form-control" name="age_group_65+ Years" required>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="health_worker">Health Worker</label>
                            <select class="form-control" name="health_worker" required>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">Predict Flu Vaccine Hesitancy</button>
                    </form>

                    <br />
                    <center>
                        <h1 id="prediction_result" style="background:#de5499; padding:10px; display:none;"></h1>
                    </center>
                    <br />

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $("#predictionForm").on("submit", function (e) {
                                e.preventDefault();
                                var formData = $(this).serialize(); 

                                $.ajax({
                                    url: "http://127.0.0.1:5000/predict",
                                    type: "POST",
                                    data: formData,
                                    success: function (response) {
                                        console.log("Success:", response);  // Log the response in the console
                                    $("#prediction_result").text(response.prediction_text).css("display", "block");
                                    },

                                    error: function () {
                                        $("#prediction_result").text("Error in prediction").show();
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection

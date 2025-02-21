<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <style type="text/css">
        label{
            display: inline-block;

            width: 200px;
        }
     </style>
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
     
@include('admin.navbar')

        <!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="container" align="center" style="padding-top: 100px">

        <!-- Move the success message here -->
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 50%; text-align: center;">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px;">
                <label>Doctor Name</label>
                <input type="text" style="color:black;" name="name" placeholder="Write the name" required="">
            </div>

            <div style="padding: 15px;">
                <label>Phone</label>
                <input type="number" style="color:black;" name="number" placeholder="Write the number" required="">
            </div>

            <div style="padding: 15px;">
                <label>Room No</label>
                <input type="text" style="color:black;" name="room" placeholder="Write the room number" required="">
            </div>

            <div style="padding: 15px;">
                <label>Speciality</label>
                <select name="speciality" style="width: 250px;" required="">
                    <option>--Select--</option>
                    <option value="eye">Eye</option>
                    <option value="flu">Flu</option>
                    <option value="heart">Cancer</option>
                    <option value="diabetes">Diabetes</option>
                </select>
            </div>

            <div style="padding: 15px;">
                <label>Doctor Image</label>
                <input type="file" style="color:black;" name="file" required="">
            </div>

            <div style="padding: 15px;">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </form>

    </div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
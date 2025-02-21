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

        <base href="/public">

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


        <form action="{{ url('sendemail', $data->id) }}" method="POST">
            @csrf
            <div style="padding: 15px;">
                <label>Greetings</label>
                <input type="text" style="color:black;" name="greetings" required="">
            </div>

            <div style="padding: 15px;">
                <label>Body</label>
                <input type="text" style="color:black;" name="body" required="">
            </div>

            <div style="padding: 15px;">
                <label>Action text</label>
                <input type="text" style="color:black;" name="actiontext" required="">
            </div>

            <div style="padding: 15px;">
                <label>Action Url</label>
                <input type="text" style="color:black;" name="actionurl" required="">
            </div>

            <div style="padding: 15px;">
                <label>End Part</label>
                <input type="text" style="color:black;" name="endpart" required="">
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
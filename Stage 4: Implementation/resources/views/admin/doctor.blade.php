<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
    <div align="center" style="padding-top: 100px;">
        <table>
            <tr>
                <th style="padding: 10px;">Doctor name</th>
                <th style="padding: 10px;">Phone</th>
                <th style="padding: 10px;">Speciality</th>
                <th style="padding: 10px;">Room No</th>
                <th style="padding: 10px;">Image</th>
                <th style="padding: 10px;">Update</th>
                <th style="padding: 10px;">Delete</th>
            </tr>
            @foreach($data as $doctor)
            <tr align = "center" style = "background-color: skyblue;">
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->speciality}}</td>
                <td>{{$doctor->room}}</td>
                <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                <td><a class="btn btn-success" href="{{url('updatedoctor', $doctor->id)}}">Update</a></td>
                <td><a onclick="return confirm('are you sure?')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>
            </tr>
                @endforeach
        </table>
    </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
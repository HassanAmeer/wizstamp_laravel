<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin - View-Users </title>

  <link rel="stylesheet" href="{{ asset('css/admin_css/maincss.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css" integrity="sha512-eBNnVs5xPOVglLWDGXyZnZZ2K2ixXhR/3aECgCpFnW2dGCd/yiqXZ6fcB3BubeA91kM6NX234b6Wrah8RiYAPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('js/adminjs/vendor.bundle.base.js.download') }}"></script>
  <script src="{{ asset('js/adminjs/off-canvas.js.download') }}"></script>
  <script src="{{ asset('js/adminjs/template.js.download') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="{{ asset('assets/adminassets/favicon.png') }}">
  
</head>
<style>
   .maincolor {
    color: black !important;
}
   .maincoloropacity1 {
    color: #8A0B0F57 !important;
}
   .maincoloropacity {
    color: #5E080B5B !important;
}
#catgsubmitbtn {
      border: none; /* Remove the default border */
      background-color: transparent; /* Set a transparent background */
      outline: 2px solid #5e080b; /* Default outline style */
      transition: background-color 0.3s, outline 0.3s; /* Add a smooth transition */
    }

    #catgsubmitbtn:hover {
      background-color: #5e080b; /* Change background color on hover */
      outline: none; /* Remove outline on hover */
      color: white;
    }

    .flex-item {
  padding-left: 15px;
  padding-right: 15px;
  padding-top:5px;
  padding-bottom:5px;
  background-color: #f0f0f0;
  /* border: 1px solid #ccc; */
  margin-right: 10px; /* Optional margin between items */
}
/* ---------- for add catg div start ---------------- */
.uploadcatgdiv{
    background-color: #eaeaea;
}
        .custom-form {
            background-color: #eaeaea; /* Silver background for the form */
            padding: 20px; /* Padding inside the form */
            border-radius: 10px; /* Rounded corners */
        }
        .btn-custom {
            background-color: #28a745; /* Green theme color for buttons */
            border-color: #28a745;
        }
        .btn-custom:hover {
            background-color: #218838; /* Darker green color on hover */
            border-color: #218838;
        }
/* ---------- for add catg div end ---------------- */
</style>
  <body>

  <div class="container-scroller">
     @include('admin.includes.topbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('admin.includes.sidebar')
       <!-- body area start >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>------>
       <div class="main-panel">
        @include('admin.includes.toasts')

 <!-- start a categoy table -->
<h2 class="maincolor" style=" margin-top:2rem; margin-left:1rem;"> All Users </h2>
<!-- table-striped-columns -->
<div style="padding:1rem; width:90% !mprtant;" class="maincoloropacity1">
<table class="table table-hover" style="background-color:silver, border-radius:10px; padding:20px">
  <thead style="background-color: #eaeaea;">
    <tr style="background-color: #eaeaea;">
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody class="">
    @foreach ($wizusers as $key)
    <tr>
      <th scope="row">{{$key['id']}}</th>
      <td><img src="{{asset($key['image'])}}" alt="" style="width:2.5rem"></td>
      <td scope="row" style="background-color: #DCFFD3CB; padingleft:0.2rem; padding-right:0.2rem;"> {{$key['name']}} </td>
      <td>{{$key['phone']}}</td>
      <td>{{$key['email']}}</td>
      <td><a class="btn btn-warning" href="{{ route('/wizostamp/vedituserpage', [
        'id' => $key['id']]); }}"> <i class="fa fa-edit"></i> </a>   
    </td>
      <td><a class="btn btn-danger" href="<?php echo route('/wizostamp/dusers', ['id' => $key['id']]) ?>"> <i class="fa fa-trash-alt"></i> </a></td>
    </tr> 

    @endforeach
  </tbody>
</table>
</div>
















<div>
 <!-- body area end -->
 </div>
 </div>

  </body>
</html>
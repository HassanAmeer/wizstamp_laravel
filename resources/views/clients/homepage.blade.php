<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title> Home Page </title>
</head>

<style>
  body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset('images/bg.png') }}');
    background-size: cover;
    /* background-repeat: no-repeat; */
    /* background-position: center center; */
    opacity: 0.1;
    z-index: -1; /* Ensure the pseudo-element is behind the content */
  }
</style>

<!-- ------------------------------------------------------------------ -->
<body>

<!-- include('../admin.includes.toasts') -->
<style>
  #searchfield{width: 13rem;}
</style>


<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg" style="">
  <!-- Left side of the navbar -->
  <div class="navbar-brand" style="padding-left:2rem;">
    <img src="{{asset('icons/profile.png')}}" alt="Profile Image" class="rounded-circle" width="30" height="30">
@if(session('status') == 'login')
    <span class="ml-2"> Welcome! {{ session('user_name') }}</span>
@else
<span class="ml-2">No Login </span>
@endif

  </div>

  <!-- Middle of the navbar -->
  <form class="form-inline mx-auto">
    <input class="form-control mr-sm-2 m-h-8" id="searchfield" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

  <!-- Right side of the navbar -->
  <ul class="navbar-nav ml-auto" style="padding-right:1rem;">
  @if(session('status') == 'login')
  <li class="nav-item">
      <a class="btn btn-outline-warning" href="#">Logout</a>
    </li>
  @else
  <li class="nav-item">
        <a class="btn btn-outline-green" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" href="#">Login</a>
      </li>
  @endif
   
  </ul>
</nav>

<!-- ------------------------------------------------------------ -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Login </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{ route('/login') }}" method="POST">
      @csrf
      <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"> Email:</label>
            <input type="email" name="email" placeholder="Email" class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-3">
          <label for="password" class="col-form-label"> Password:</label>
            <input type="text" name="password" placeholder="Password" class="form-control" id="password" required>
            <!-- <textarea class="form-control" id="message-text"></textarea> -->
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="loginbutton" class="btn btn-primary"> Login </button>
      </div>
     </form> 
   
    </div>
  </div>
</div>
<!-- ------------------------------------------------------------ -->

<!-- ------------------------------------------ satrt for body content -->
<div style="height:30vh;"></div>
<center>
  <h1 style="color:grey;"> Login </h1>
  <h5 style="color:grey"> need to Login For View documents </h5>
</center>
<!-- ------------------------------------------ end of body content -->


<!-- Your page content goes here -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>





<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->

<div id="notification-toastgreen"  style="position: fixed; z-index: 100; bottom: 3%; right: 4%;" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true" data-delay="2000" style="margin-left:7%;">
   <div class="d-flex">
       <div class="toast-body"> 
           {{ session('greentoast') }}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
   </div>
</div>

<!-- <h1> included toast </h1> -->
<div id="notification-toastred"  style="position: fixed; z-index: 100; bottom: 3%; right: 4%;" class="toast align-items-center text-bg-warning border-0" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true" data-delay="3000" style="margin-left:7%;">
   <div class="d-flex">
       <div class="toast-body">
           {{ session('redtoast') }}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
   </div>
</div>

<!-- end for show toast -->
<!-- end for show toast -->
<!-- end for show toast -->
<!-- end for show toast -->
<!-- end for show toast -->
<script>
    ////////// show toast start
    var successMessage = "{{ session('greentoast') }}";
    if (successMessage) {
        var toast = new bootstrap.Toast(document.querySelector('#notification-toastgreen'), {
            animation: true,
            autohide: true,
            delay: 3000
        });
        toast.show();
    }

    var failMessage = "{{ session('redtoast') }}";
    if (failMessage) {
        var toast = new bootstrap.Toast(document.querySelector('#notification-toastred'), {
            animation: true,
            autohide: true,
            delay: 3000
        });
        toast.show();
    }
 
    ///////////////// show toast end 
</script>
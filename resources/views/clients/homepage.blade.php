<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css" integrity="sha512-eBNnVs5xPOVglLWDGXyZnZZ2K2ixXhR/3aECgCpFnW2dGCd/yiqXZ6fcB3BubeA91kM6NX234b6Wrah8RiYAPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <title> Home Page </title>
  <script src="https://pdfjs.express/7.3.2/pdf.js"></script>
  <script src="https://pdfjs.express/7.3.2/pdf.worker.js"></script>
  <link rel="stylesheet" href="https://pdfjs.express/7.3.2/webviewer.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
  <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
  <!-- Specify the URL to the worker script -->
  <script>
      pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';
  </script>
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

@if(session('status') == 'login')
<!-- navbar for login start  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg" style="">
  <!-- Left side of the navbar -->
  <div class="navbar-brand" style="padding-left:2rem;">
    <img src="{{asset(session('user_data')['image'])}}" alt="Profile Image" class="rounded-circle" width="30" height="30">
    <span class="text-muted">  Welcome! </span><span class="ml-2 text-dark" style="font-Weight:bold;">  {{ session("user_data")['name'] }}</span>
  </div>

  <!-- Middle of the navbar -->
  <form class="form-inline mx-auto">
    <input class="form-control mr-sm-2 m-h-8" id="searchfield" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

  <!-- Right side of the navbar -->
  <ul class="navbar-nav ml-auto" style="padding-right:1rem;">
  <li class="nav-item">
      <a class="btn btn-outline-warning" href="{{route('/logout')}}">Logout</a>
  </li>
   
  </ul>
</nav>
<!-- navbar for no login start  -->
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg" style="">
  <!-- Left side of the navbar -->
  <div class="navbar-brand" style="padding-left:2rem;">
   <img src="{{asset('icons/profile.png')}}" alt="Profile Image" class="rounded-circle" width="30" height="30">
    <span class="ml-2">No Login! </span>
  </div>

  <!-- Middle of the navbar -->
  <form class="form-inline mx-auto">
    <input class="form-control mr-sm-2 m-h-8" id="searchfield" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

  <!-- Right side of the navbar -->
  <ul class="navbar-nav ml-auto" style="padding-right:1rem;">
  <li class="nav-item">
     <a class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" href="#">Login</a>
  </li>
   
  </ul>
</nav>
@endif



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
        <button type="submit" name="loginbutton" class="btn btn-success"> Login </button>
      </div>
     </form> 
   
    </div>
  </div>
</div>
<!-- ------------------------------------------------------------ -->

<!-- ------------------------------------------ satrt for body content -->
@if(session('status') == 'login')
<br><br>
<a href="http://127.0.0.1:8000/docs/1701336145.pdf"> <div style="position: fixed; right: 0; bottom: 10vh; border-radius:2rem 0 0 2rem; border-left: 1rem solid darkgreen; background-color: black; z-index: 100; box-shadow: 1px 1px 5px grey;">
    <div style="padding: 0.7rem; background-color: darkgreen; display: flex; flex-direction: row; align-items: center; ">
        <i class="text-light fas fa-download"> Download </i>
    </div>
</div></a>


<center>
        <div style="width: 80%; background-color: rgba(255, 255, 255, 0.4); border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">
            <h2 style="text-align: center; margin-bottom: 20px;">Documents</h2>
            
            <!-- Include your PDF viewer here -->
            <!-- <embed src="http://127.0.0.1:8000/docs/1701336145.pdf" type="application/pdf" width="100%" height="600px"> -->
     
            <center>
        <div style="width: 80%; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <h2 style="text-align: center; margin-bottom: 20px;">Simple PDF Viewer</h2>
            
            <!-- Container for the PDF -->
            <canvas id="pdf-viewer" style="border: 1px solid #000;"></canvas>
        </div>
    </center>

    <!-- Add a script to load and display the PDF -->
    <script>
        // Specify the URL to your PDF file
        const pdfUrl = 'http://127.0.0.1:8000/docs/1701336145.pdf';

        // Load the PDF using PDF.js
        pdfjsLib.getDocument(pdfUrl)
            .then(pdf => {
                // Display the first page in the container
                pdf.getPage(1).then(page => {
                    const canvas = document.getElementById('pdf-viewer');
                    const context = canvas.getContext('2d');
                    const viewport = page.getViewport({ scale: 1.5 });

                    // Set canvas dimensions to match the viewport
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    // Render the PDF page to the canvas
                    page.render({
                        canvasContext: context,
                        viewport: viewport,
                    });
                });
            })
            .catch(error => {
                console.error('Error loading PDF:', error);
            });
    </script>

            <hr style="margin: 20px 0;">
        </div>
    </center>
@else
<br><br>
<div style="height:30vh;"></div>
<center>
  <h1 style="color:grey;"> Login </h1>
  <h5 style="color:grey"> need to Login For View documents </h5>
</center>
@endif
<!-- ------------------------------------------ end of body content -->


<!-- Your page content goes here -->

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
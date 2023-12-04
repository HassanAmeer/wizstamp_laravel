


<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin - Update Profile </title>

  <link rel="stylesheet" href="{{ asset('css/admin_css/maincss.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css" integrity="sha512-eBNnVs5xPOVglLWDGXyZnZZ2K2ixXhR/3aECgCpFnW2dGCd/yiqXZ6fcB3BubeA91kM6NX234b6Wrah8RiYAPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="shortcut icon" href="{{ asset('assets/adminassets/favicon.png') }}">
  <script src="{{ asset('js/adminjs/vendor.bundle.base.js.download') }}"></script>
  <script src="{{ asset('js/adminjs/off-canvas.js.download') }}"></script>
  <script src="{{ asset('js/adminjs/template.js.download') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<style>
   .maincolor {
    color: #5e080b !important;
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
</style>
<!-- end of style -------------------------------------------------------------- -->
  <body>
    <!-- area 1 start -->
  <div class="container-scroller">
     @include('altis16.includes.topbar')
    <!-- area 2 start -->
    <div class="container-fluid page-body-wrapper">
       @include('altis16.includes.sidebar')
     <!-- body area start >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>------>
     <div class="main-panel">
     @include('altis16.includes.toasts')
      

<!-- start for body -->


<br>
<style>
        #imageContainer {
            width: 10rem;
            height: 10rem;
            border: 2px dashed #ccc;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            object-fit: fill;
        }

        #selectedImage {
            max-width: 100%;
            max-height: 100%;
            /* display: none; */
        }

        #editIcondiv {
          border-radius: 100%;
          background-color:rgba(0, 0, 0, 0.349);
          position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size:1.4rem;

        }

        #editIcon {
          padding: 10px;
          font-size:1.1rem;
          color: orange;
          text-shadow: 2px 2px black;
          /* display: none; */
        }
    </style>

    <script>
        $(document).ready(function() {
            $("#imageContainer").click(function() {
                $("#imageInput").click();
            });

            $("#imageInput").change(function() {
                const selectedFile = this.files[0];
                if (selectedFile) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        $("#selectedImage")
                            .attr("src", e.target.result)
                            .css("display", "block");

                        $("#editIcon").css("display", "block");
                    };

                    reader.readAsDataURL(selectedFile);
                }
            });

            $("#editIcon").click(function() {
                $("#imageInput").click();
            });
        });
    </script>
    
  <!-- pimage
  pname
  pemail
  pphone
  ppasword -->

<form class="row g-3 pl-4" action="{{ route('altis16/editprofile') }}" method="POST" enctype="multipart/form-data"> 
  @csrf
  
<div class="pl-4" style="display: flex;
    flex-direction: row;
    justify-content: space-between;">
<h2 style="color:#5e080b; align-self:center;"> Update Profile </h2>
<div id="imageContainer" style="width:10rem;">
     <div id="editIcondiv"><i class="fas fa-pen" id="editIcon" > </i></div>
     
    <img id="selectedImage" src="{{asset($check['profile'])}}" alt="Profile Image">
</div>
<input type="file" class="form-control-file" name="pimage" id="imageInput" accept="image/*" style="display: none;">
</div>

  <input type="hidden" name="pid" value="{{$check['id']}}" id="">
  <div class="col-md-6">
    <label for="inputName" class="form-label"> Name </label>
    <input type="text" name="pname" value="{{$check['name']}}" class="form-control" id="inputName">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label"> Email </label>
    <input type="email" name="pemail" class="form-control" value="{{$check['email']}}" id="inputEmail">
  </div>
  <div class="col-md-6">
    <label for="inputPhone" class="form-label"> Phone </label>
    <input type="text" name="pphone" value="{{$check['phone']}}" class="form-control" id="inputPhone">
  </div>
  <div class="col-md-6">
    <label for="inputPassword" class="form-label"> Password </label>
    <input type="text" name="ppasword" placeholder="Change Password" class="form-control" id="inputPassword">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-outline-warning"> Update Profile </button>
  </div>
</form>
<!-- end for body -->


     <div>
    <!-- body area end -->
   </div>
  <!-- area 2 end -->
 </div>
<!-- area 1 end -->

</body>
</html>


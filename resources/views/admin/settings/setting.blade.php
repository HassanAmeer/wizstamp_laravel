


<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin - Update Settings </title>

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

  <div class="container-scroller">
     @include('admin.includes.topbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('admin.includes.sidebar')
       <!-- body area start >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>------>
       <div class="main-panel" style="background-color:#5E080B17; width:100%;">
        @include('admin.includes.toasts')
        <div class="container-scroller">
        <!-- Include your top bar here -->

        <div class="container-fluid page-body-wrapper">
            <!-- Include your sidebar here -->

            <div class="main-panel">
                <!-- Include your toasts here -->

                <div>
                    <!-- Start of the body content -->

                    <form class="row g-3 pl-4" action="{{ url('update_stamp') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div style="display: flex; flex-direction: row; justify-content: space-between;">
                            <h2>Update Settings</h2>
                        </div>

                        <!-- Seller Fields -->
                        <div class="col-md-6">
                            <label for="inputSellerName" class="form-label">Update Document Auto Expire Time</label>
                            <input type="month" name="seller_name" class="form-control" id="inputSellerName" value="">
                        </div>
                      
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-warning">Update Setting</button>
                        </div>
                    </form>

                    <!-- End of the body content -->
                </div>
            </div>
        </div>
    </div>

</body>
</html>


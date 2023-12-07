


<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin - Update Stamp </title>

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
                            <h2>Update Stamp</h2>
                        </div>

                        <!-- Wizard Fields -->
                        <input type="hidden" name="wizid" value="">
                        <input type="hidden" name="user_id" value="">
                        <input type="hidden" name="islocked" value="">
                        <input type="hidden" name="doc_type" value="">

                        <!-- Seller Fields -->
                        <div class="col-md-6">
                            <label for="inputSellerName" class="form-label">Seller Name</label>
                            <input type="text" name="seller_name" class="form-control" id="inputSellerName" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="inputFormCreationTime" class="form-label">Form Creation Time</label>
                            <input type="text" name="form_creation_time" class="form-control" id="inputFormCreationTime" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSellerSubmitTime" class="form-label">Seller Submit Time</label>
                            <input type="text" name="seller_submit_time" class="form-control" id="inputSellerSubmitTime" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSellerDoc" class="form-label">Seller Document</label>
                            <input type="file" name="seller_doc" class="form-control" id="inputSellerDoc" accept="application/pdf">
                        </div>

                        <!-- Buyer Fields -->
                        <div class="col-md-6">
                            <label for="inputBuyerName" class="form-label">Buyer Name</label>
                            <input type="text" name="buyer_name" class="form-control" id="inputBuyerName" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="inputBuyerSubmitTime" class="form-label">Buyer Submit Time</label>
                            <input type="text" name="buyer_submit_time" class="form-control" id="inputBuyerSubmitTime" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="inputBuyerDoc" class="form-label">Buyer Document</label>
                            <input type="file" name="buyer_doc" class="form-control" id="inputBuyerDoc" accept="application/pdf">
                        </div>

                        <!-- Additional New Fields -->
                        <div class="col-md-6">
                            <label for="inputNewField1" class="form-label">New Field 1</label>
                            <input type="text" name="newfield1" class="form-control" id="inputNewField1">
                        </div>

                        <div class="col-md-6">
                            <label for="inputNewField2" class="form-label">New Field 2</label>
                            <input type="text" name="newfield2" class="form-control" id="inputNewField2">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-warning">Update Stamp</button>
                        </div>
                    </form>

                    <!-- End of the body content -->
                </div>
            </div>
        </div>
    </div>

</body>
</html>


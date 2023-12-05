<!DOCTYPE html>
<!-- saved from url=(0079)# -->
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> WizStamp Admin </title>

  <link rel="stylesheet" href="{{ asset('css/admin_css/maincss.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css" integrity="sha512-eBNnVs5xPOVglLWDGXyZnZZ2K2ixXhR/3aECgCpFnW2dGCd/yiqXZ6fcB3BubeA91kM6NX234b6Wrah8RiYAPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="shortcut icon" href="{{ asset('assets/adminassets/favicon.png') }}">

</head>
<body>
  
  <div class="container-scroller">
    <!-- top bar for nav bar here ++++++++++++++++++++++++++++++++++++-->
     @include('admin.includes.topbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
       @include('admin.includes.sidebar')
      <!-- area 1 start -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Kamran</h3>
                  <h6 class="font-weight-normal mb-0"> All Abouts WizStamps <span class="text-primary" style="color: silver !important;">Last Updates!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Options  <i class="fa fa-stream"></i> </button>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="{{url('/wizostamp/adminprofile')}}"> Profile Settings </a>
                      <a class="dropdown-item" href="{{url('wizostamp/logout')}}"> Logout </a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
              <!-- area 1 end -->

              <!-- area 2 start -->
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg" style="background-color: #E3E8EC;">
                <div class="card-people mt-auto">
                  <img src="{{ asset('icons/analytics.png') }}" alt="people" style="opacity:0.7;">
                  <!-- <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal" style="text-shadow: 2px 2px white; color: black;"><i class="fa fa-users mr-2"></i>31<sup style="text-shadow: 2px 2px white; color: black;">+</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h3 class="location font-weight-normal" style="text-shadow: 2px 2px white; color: black;"> Total </h3>
                        <h6 class="font-weight-normal" style="text-shadow: 2px 2px white; color: black;"> Visitor </h6>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card" style="background-color:  #FCFCFC;">
                    <div class="card-body">
                      <p class="mb-4">Total Users</p>
                      <p class="fs-30 mb-2"> {{$allusers}} </p>
                      <p> Last ({{$lasUserDate}}) </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card" style="background-color:  #E9EBF08F;">
                    <div class="card-body">
                      <p class="mb-4">Total Stamps</p>
                      <p class="fs-30 mb-2"> {{$alldocs}} </p>
                      <p> Last ({{$lastDocsDate}}) </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card" style="background-color:  #D0CCE631;">
                    <div class="card-body">
                      <p class="mb-4">Total Sellers Stamps</p>
                      <p class="fs-30 mb-2"> {{$sellerdocs}} </p>
                      <p> Last ({{$lastsellerDocDate}}) </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card" style="background-color:  #CBE2FC59;">
                    <div class="card-body">
                      <p class="mb-4">Total Buyer Stamps</p>
                      <p class="fs-30 mb-2">{{$buyerdocslock}}</p>
                      <p> Last ({{$lastBuyerDocDate}}) </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
             <!-- area 2 end-->









         
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('js/adminjs/vendor.bundle.base.js.download') }}"></script>
  <script src="{{ asset('js/adminjs/off-canvas.js.download') }}"></script>
  <script src="{{ asset('js/adminjs/template.js.download') }}"></script>

</body>
</html>
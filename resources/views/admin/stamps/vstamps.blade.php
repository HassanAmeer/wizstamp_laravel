<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin - View-Sale-Posts </title>

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
    color: #31292A !important;
}
   .maincoloropacity1 {
    color: #0B628A57 !important;
}
   .maincoloropacity {
    color: #5E080B5B !important;
}
   .mainbgcoloropacity1 {
    background-color: #8A0B0F57 !important;
}
   .mainbgcoloropacity {
    background-color: #5e080b !important;
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
  <body style="background-color:#F7FCFF">
  
  <div class="container-scroller">
     @include('admin.includes.topbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('admin.includes.sidebar')
       <!-- body area start >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>------>
       <div class="main-panel" style="background-color:#5E080B17; width:100%;">
        @include('admin.includes.toasts')





 <!-- start a categoy table -->
<h2 class="maincolor ml-4" style=" margin-top:2rem"> All stamps </h2>
 <hr>
<!-- table-striped-columns -->

<i class="fa-solid fa-arrow-right-from-bracket"></i>


<div style="padding: 1rem" class="maincoloropacity1">
  <div class="table-responsive">
    <table class="table table-hover" style="background-color: silver; border-radius: 10px; padding: 20px">
      <thead style="background-color: #eaeaea;">
        <tr style="background-color: #eaeaea;">
          <th scope="col">#</th>
          <th scope="col">Seller Doc</th>
          <th scope="col">Buyer Doc</th>
          <th scope="col">userid</th>
          <th scope="col">wizid</th>
          <th scope="col">isLocked</th>
          <th scope="col">Doc type</th>
          <th scope="col">Seller Name</th>
          <th scope="col">From creation Time</th>
          <th scope="col">Seller Submit Time</th>
          <th scope="col">Buyer Name</th>
          <th scope="col">Buyer Submit time</th>
          <th scope="col">Created At</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>

      
       <tbody class="">
        @if($stampstable == 'Empty Record')
        <tr>
          <td colspan="8"><center><h2>{{$stampstable}}</h2></center></td>
        </tr>
        @else
        <!-- start -->
        @foreach($stampstable as $key)
        <tr>
          <th scope="row">{{$key['id']}}</th>
          <td>
          
   <!-- <a href="#" download="{{$key['seller_doc']}}" target="_blank">
    <div style="background-color:#5E080B17; border-radius:8px;">
        <div class="dropdown-brands" data-id="" style="display:flex; flex-direction:row; justify-content:space-between; align-items:center; gap:5px;">
            <img style="max-width:3rem; min-width:1.5rem; border-radius:5px; border: 2px solid #d3a6a6; box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.2);" src="{{asset('icons/pdf.png')}}">
            <b style="padding-right:10px; align-item:center;" class="fas fa-download text-danger"></b>
        </div> 
    </div>
   </a> -->


    <a href="#" target="_blank" download="{{$key['seller_doc']}}">

      <div style="background-color:#5E080B17; border-radius:8px;">
          <div class="dropdown-brands" data-id="" style="display:flex; flex-direction:row; justify-content:space-between; align-items:center; gap:5px;">
              <img style="max-width:3rem; min-width:1.5rem; border-radius:5px; border: 2px solid #d3a6a6; box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.2);" src="{{asset('icons/pdf.png')}}">
              <b style="padding-right:10px; align-item:center;" class="fas fa-download text-danger"></b>
          </div> 
      </div>
    </a>



          </td>
          @if($key['islocked'] == true || $key['islocked'] == 1)
          <td><img style="max-width:3rem; min-width:2rem; border-radius:5px; border: 1px solid black; box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.2);padding:0.1rem;" src="{{asset('icons/pdf2.png')}}"></td>
          @else
          <td><img style="max-width:3rem; min-width:2rem; border-radius:5px; border: 1px solid orange; box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.2);padding:0.1rem;" src="{{asset('icons/pending.png')}}"></td>
          @endif
          <td><?php echo $key['user_id']; ?></td>
          <td><?php echo $key['wizid']; ?></td>
          <td><?php echo $key['islocked']; ?></td>
          <td><?php echo $key['doc_type']; ?></td>
          <td><?php echo $key['seller_name']; ?></td>
          <td><?php echo $key['form_creation_time']; ?></td>
          <td><?php echo $key['seller_submit_time']; ?></td>
          <td><?php echo $key['buyer_name']; ?></td>
          <td><?php echo $key['buyer_submit_time']; ?></td>
          <td><?php echo $key['created_at']; ?></td>
          <td><a class="btn btn-danger" href="<?php echo url('admin/stamp.delete', ['id' => $key['id']]) ?>"> <i class="fa fa-trash-alt"></i> </a></td>
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>








      <!-- id	
user_id	
wizid	
islocked	
doc_type	
seller_name	
form_creation_time	
seller_submit_time	
seller_doc	
buyer_name	
buyer_doc	
buyer_submit_time	
created_at	
updated_at -->



 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
    // Handle dropdown item click
    $('.dropdown-item').on('click', function() {
      var selectedText = $(this).text();
      $('#selected-option').text(selectedText);
    });
    });
    </script>
        <script>
    ////////// show toast start
    var successMessage = "{{ session('successtoast') }}";
    if (successMessage) {
        var toast = new bootstrap.Toast(document.querySelector('#notification-toast'), {
            animation: true,
            autohide: true,
            delay: 3000
        });
        toast.show();
    }
    var successMessage = "{{ session('faildtoast') }}";
    if (successMessage) {
        var toast = new bootstrap.Toast(document.querySelector('#notification-toastred'), {
            animation: true,
            autohide: true,
            delay: 3000
        });
        toast.show();
    }
    ///////////////// show toast end 

    // --------------------------------------------------------------------
    </script>
    <script>
  $(document).ready(function () {

$('.dropdown-item').on('click', function (){
  const catgvalue = $(this).text();
  var catgid = $(this).data("id");
  // console.log(catgid);
  // alert(catgid);

  // Check if the option is already added
  if (!$(`.button:contains('${catgvalue}')`).length) {
    const spanButton = $('<span class="button"><div style="padding: 5px;"><div style="display: flex; flex-direction: row; border-radius: 6px; align-items: center; background-color: white; padding: 4px;"><p style="margin: 0;" data-id="'+catgid+'">' + catgvalue + '</p><p class="fa fa-times maincolor unselectoptionsbtn" style="margin: 0 4px;"></p></div></div></span>');
    $('#addoptions').append(spanButton);

    addToInputcatgname(catgvalue);
    addToInputcatgid(catgid);
  } else {
    var toast = new bootstrap.Toast(document.querySelector('#optionstoast'), {
            animation: true,
            autohide: true,
            delay: 2000
        });
        toast.show();
  }
});

$(document).on('click', '.unselectoptionsbtn', function () {
  const removedOption = $(this).closest('.button').find('p:first-child').text();
  const catgid = $(this).closest('.button').find('p:first-child').data('id');
  $(this).closest('.button').remove();

  // Remove the option from the input field
  removeFromInputcatgname(removedOption);
  removeFromInputcatgid(catgid);
});
function addToInputcatgname(option) {
  const inputField = $('#selectedOptionsInputcatgname');
  const currentValue = inputField.val();
  
  if (currentValue === '') {
    inputField.val(option);
  } else {
    inputField.val(currentValue + ', ' + option);
  }
}
function addToInputcatgid(option) {
  const inputField = $('#selectedOptionsInputcatgid');
  const currentValue = inputField.val();
  
  if (currentValue === '') {
    inputField.val(option);
  } else {
    inputField.val(currentValue + ', ' + option);
  }
}

function removeFromInputcatgname(option) {
  const inputField = $('#selectedOptionsInputcatgname');
  const currentValue = inputField.val();
  
  const updatedValue = currentValue.replace(option + ', ', '').replace(', ' + option, '').replace(option, '');
  inputField.val(updatedValue);
}
function removeFromInputcatgid(catgid) {
  const inputField = $('#selectedOptionsInputcatgid');
  const currentValue = inputField.val();
  
  const updatedValue = currentValue.replace(catgid + ', ', '').replace(', ' + catgid, '').replace(catgid, '');
  inputField.val(updatedValue);
}
});
</script>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->
<script>
  $(document).ready(function () {
$('.dropdown-itemmodel').on('click', function (){
  const catgvalue = $(this).text();
  var catgid = $(this).data("idmodel");
  // console.log(catgid);
  // alert(catgid);

  // Check if the option is already added
  if (!$(`.addoptions2:contains('${catgvalue}')`).length) {
    const spanButton = $('<span class="button"><div style="padding: 5px;"><div style="display: flex; flex-direction: row; border-radius: 6px; align-items: center; background-color: white; padding: 4px;"><p style="margin: 0;" data-idmodel="'+catgid+'">' + catgvalue + '</p><p class="fa fa-times maincolor unselectoptionsbtnmodel" style="margin: 0 4px;"></p></div></div></span>');
    $('.addoptions2').append(spanButton);

    addToInputcatgnamemodel(catgvalue);
    addToInputcatgidmodel(catgid);
  } else {
    var toast = new bootstrap.Toast(document.querySelector('.optionstoastmodel'), {
            animation: true,
            autohide: true,
            delay: 2000
        });
        toast.show();
  }
});

$(document).on('click', '.unselectoptionsbtnmodel', function () {
  const removedOption = $(this).closest('.button').find('p:first-child').text();
  const catgid = $(this).closest('.button').find('p:first-child').data('idmodel');
  $(this).closest('.button').remove();

  // Remove the option from the input field
  removeFromInputcatgnamemodel(removedOption);
  removeFromInputcatgidmodel(catgid);
});
function addToInputcatgnamemodel(option) {
  const inputField = $('.selectedOptionsInputcatgnamemodel');
  const currentValue = inputField.val();
  
  if (currentValue === '') {
    inputField.val(option);
  } else {
    inputField.val(currentValue + ', ' + option);
  }
}
function addToInputcatgidmodel(option) {
  const inputField = $('.selectedOptionsInputcatgidmodel');
  const currentValue = inputField.val();
  
  if (currentValue === '') {
    inputField.val(option);
  } else {
    inputField.val(currentValue + ', ' + option);
  }
}

function removeFromInputcatgnamemodel(option) {
  const inputField = $('.selectedOptionsInputcatgnamemodel');
  const currentValue = inputField.val();
  
  const updatedValue = currentValue.replace(option + ', ', '').replace(', ' + option, '').replace(option, '');
  inputField.val(updatedValue);
}
function removeFromInputcatgidmodel(catgid) {
  const inputField = $('.selectedOptionsInputcatgidmodel');
  const currentValue = inputField.val();
  
  const updatedValue = currentValue.replace(catgid + ', ', '').replace(', ' + catgid, '').replace(catgid, '');
  inputField.val(updatedValue);
}
});
</script>
  </body>
</html>
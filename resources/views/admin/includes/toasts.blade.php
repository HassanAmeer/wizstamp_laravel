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
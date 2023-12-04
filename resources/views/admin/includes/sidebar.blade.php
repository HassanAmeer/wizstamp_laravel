

<nav class="sidebar sidebar-offcanvas" id="sidebar" style="box-shadow:1px 1px 4px silver; margin-left:-1.2rem;">
    <ul class="nav">
    <!-- B10E13 -->
    <li class="nav-item">
        <a style="background-color:#F7E5E5EA !important; " class="nav-link" href="{{route('altis16/logout')}}">
          <img style="width:1.5rem;" src="{{ asset('images/web/logout.png')}}" class="menu-icon">
          <span class="menu-title" style="padding-left:2rem; color:#B10E13B7"> Logout </span>
        </a>
      </li>
      <hr style="color:silver;">

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo route('altis16/home'); ?>">
          <i class="fa fa-house-damage menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
          <i class="fas fa-stream menu-icon"></i>
          <!-- <i class="icon-layout"></i> -->
          <span class="menu-title">Categories </span>
          <i class="fas fa-chevron-down sidetabsarrowicon"></i>
          <!-- <i class="menu-arrow"></i> -->
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?php echo route('altis16/viewcatg'); ?>">View Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo route('altis16/addcatg'); ?>">Add Category</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
          <i class="fas fa-list menu-icon"></i>
          <span class="menu-title">Brands</span>
          <i class="fas fa-chevron-down sidetabsarrowicon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?php echo route('altis16/viewbrands'); ?>">All Brands</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo route('altis16/addbrand'); ?>">Add Brand</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
          <i class="fas fa-tag menu-icon"></i>
          <span class="menu-title">Sales</span>
          <i class="fas fa-chevron-down sidetabsarrowicon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?php echo route('altis16/vsales'); ?>">All Sales</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo route('altis16/vaddsales'); ?>">Add Sales</a></li>
          </ul>
        </div>
      </li>
      
      <!-- Users -->
    <!-- Users -->
@if (Session::has('auth_data_ses'))
    @php $checkauth = Session::get('auth_data_ses'); @endphp
    @if ($checkauth['role'] == 'admin')
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title"> Users </span>
                <i class="fas fa-chevron-down sidetabsarrowicon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('altis16/viewcreateuser') }}"> Create User </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('altis16/viewusers') }}"> All User </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('altis16/vieweditors') }}"> Editor </a>
                    </li>
                </ul>
            </div>
        </li>
    @endif
@endif

       <!-- profile here -->
       <li class="nav-item">
        <a class="nav-link" href="<?php echo route('altis16/viewprofile'); ?>">
          <i class="fa fa-user menu-icon"></i>
          <span class="menu-title">Profile</span>
        </a>
      </li>
       <!-- ControlSettings here -->
       <li class="nav-item">
        <a class="nav-link" href="<?php echo route('altis16/viewcontrstngs'); ?>">
          <i class="fa fa-sliders-h menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </li>
       <!-- Nootifications here -->
       <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell menu-icon"></i>
          <span class="menu-title">Notifications</span>
        </a>
      </li>
    </ul>
  </nav>

<script>
    //////////////////////////////////
      $(document).ready(function () {
          $('.nav-item').on('click', function () {
            var $this = $(this);
            if ($this.attr("data-toggle") === "collapse") {
            $this.attr("data-toggle", "");
            $('.sidetabsarrowicon').removeClass('fa-chevron-up');
            $('.sidetabsarrowicon').addClass('fa-chevron-down');
            } else {
            $('.sidetabsarrowicon').removeClass('fa-chevron-down');
            $('.sidetabsarrowicon').addClass('fa-chevron-up');
              $this.attr("data-toggle", "collapse");
            }
            var $collapse = $this.find('.collapse');
            $collapse.collapse('toggle'); 
    
            var isExpanded = $this.attr('aria-expanded') === 'true'; 
            $this.attr('aria-expanded', !isExpanded);
          });
      });
    
    //////////////////////////////////
     </script>
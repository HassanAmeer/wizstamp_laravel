

<nav class="sidebar sidebar-offcanvas" id="sidebar" style="box-shadow:1px 1px 4px silver; margin-left:-1.2rem;">
    <ul class="nav">
    <!-- B10E13 -->
    <li class="nav-item">
        <a style="background-color: #EDF1F5 !important; " class="nav-link" href="{{url('/wizostamp/logout')}}">
          <img style="width:1.5rem;" src="{{ asset('icons/logout.png')}}" class="menu-icon">
          <span class="menu-title" style="padding-left:2rem; color:Black;font-weight: 700"> Logout </span>
        </a>
      </li>
      <hr style="color:silver;">

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo url('wizostamp/home'); ?>">
          <i class="fa fa-house-damage menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <!-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
          <i class="fas fa-stream menu-icon"></i>
          <i class="icon-layout"></i> 
          <span class="menu-title">Categories </span>
          <i class="fas fa-chevron-down sidetabsarrowicon"></i>
           <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="">View Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="">Add Category</a></li>
          </ul>
        </div>
      </li> -->


       <!-- users here -->
       <li class="nav-item">
        <a class="nav-link" href="<?php echo url('/wizostamp/stamps'); ?>">
          <i class="fa fa-stamp menu-icon"></i>
          <span class="menu-title">All Stamps</span>
        </a>
      </li>
       <!-- users here -->
       <li class="nav-item">
        <a class="nav-link" href="<?php echo url('/wizostamp/vusers'); ?>">
          <i class="fa fa-users menu-icon"></i>
          <span class="menu-title">All Users</span>
        </a>
      </li>
       <!-- profile here -->
       <li class="nav-item">
        <a class="nav-link" href="<?php echo url('/wizostamp/adminprofile'); ?>">
          <i class="fa fa-user menu-icon"></i>
          <span class="menu-title">Profile</span>
        </a>
      </li>
       <!-- ControlSettings here -->
       <li class="nav-item">
        <a class="nav-link" href="<?php echo url('admin/viewcontrstngs'); ?>">
          <i class="fa fa-sliders-h menu-icon"></i>
          <span class="menu-title">Settings</span>
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
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Eklavya Public School</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Admin/dashboard" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Admin/announcement_list" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add Announcements</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Admin/gallery_list" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add Gallery</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Admin/slider_list" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add Slider</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Admin/notification_list" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add CBSC Notification</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Admin/staff_list" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add Staff</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Admin/achievement_list" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add Achievement</p>
          </a>
        </li>

      <!-- <li class="nav-item has-treeview">
        <a href="#" class="nav-link head">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>Master<i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display: none;">
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/company_information_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Company Information
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/announcement_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Announcements</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/gallery_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/slider_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Slider</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/notification_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Notification</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/staff_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Staff</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/achievement_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Achievement</p>
            </a>
          </li>
        </ul>
      </li> -->
      <li class="nav-item">
        <a href="<?php echo base_url(); ?>Admin/contact_emails" class="nav-link">
          <i class="nav-icon fas fa-list"></i>
          <p>Enquiry Information</p>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a href="<?php echo base_url(); ?>Admin/logout" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>Logout</p>
        </a>
      </li> -->
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

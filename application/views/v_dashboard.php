
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/js/select.dataTables.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/vertical-layout-light/style.css">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <h5><a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?= base_url()?>assets/gambar/logo.png" class="mr-2" alt="logo"/>BPS Kota Malang</a></h5>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url()?>assets/gambar/logo.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            
          <li class="nav-item nav-profile dropdown">
            <a>Admin Perpustakaan </a>
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?= base_url()?>assets/images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              
            </div>
            <div class="list-wrapper px-3">
            </div>
            <div class="events pt-4 px-3">
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <?php $this->load->view('v_menu'); ?>
      <!-- partial -->
      <!-- Main content -->
    <section class="content">
      <?php $this->load->view($content);?>
      
    </section>
    </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center ">
            <center><span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © Badan Pusat Statistika Kota Malang 2022</a> All rights reserved.</span></center>
            
          </div>
          
        </footer> 
        </div>
        <!-- partial -->

  <!-- plugins:js -->
  <script src="<?= base_url()?>assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url()?>assets/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url()?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= base_url()?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?= base_url()?>assets/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url()?>assets/js/off-canvas.js"></script>
  <script src="<?= base_url()?>assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url()?>assets/js/template.js"></script>
  <script src="<?= base_url()?>assets/js/settings.js"></script>
  <script src="<?= base_url()?>assets/js/todolist.js"></script>
  <script src="<?= base_url()?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url()?>assets/js/dashboard.js"></script>
  <script src="<?= base_url()?>assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>


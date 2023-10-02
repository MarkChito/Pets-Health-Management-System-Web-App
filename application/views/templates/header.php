<?php
if ($this->session->userdata("primary_key")) {
  $user_data = $this->model->MOD_GET_USER_DATA($this->session->userdata("primary_key"));

  $user = $user_data[0];

  $user_data_session = array(
    "user_name" => $user->name,
    "user_rfid_number" => $user->rfid_number,
    "user_email" => $user->email,
    "user_password" => $user->password,
    "user_type" => $user->user_type,
    "user_image" => $user->image ? $user->image : default_user_image()
  );

  $this->session->set_userdata($user_data_session);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= TITLE ?> Pets Health Management System</title>

  <!-- Favicon -->
  <link href="<?= favicon() ?>" rel="icon">

  <!-- Google Web Fonts -->
  <link href="plugins/google/css/google_fonts.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/all.css" rel="stylesheet">
  <!-- Flaticon Font -->
  <link href="plugins/flaticon/font/flaticon.css" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Customized Bootstrap Stylesheet -->
  <link href="dist/css/style.css" rel="stylesheet">
  <!-- Custom Styles -->
  <link href="dist/css/custom_style.css" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid">
    <div class="row bg-secondary py-2 px-lg-5">
      <div class="col-lg-6 text-center text-xl-left mb-2 mb-lg-0 mt-1">
        <div class="d-inline-flex align-items-center">
          <a target="_blank" rel="noopener noreferrer" class="text-white px-3" href="https://www.facebook.com/">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a target="_blank" rel="noopener noreferrer" class="text-white px-3" href="https://www.twitter.com/">
            <i class="fab fa-twitter"></i>
          </a>
          <a target="_blank" rel="noopener noreferrer" class="text-white px-3" href="https://www.gmail.com/">
            <i class="fab fab fa-google"></i>
          </a>
          <a target="_blank" rel="noopener noreferrer" class="text-white px-3" href="https://www.instagram.com/">
            <i class="fab fa-instagram"></i>
          </a>
          <a target="_blank" rel="noopener noreferrer" class="text-white pl-3" href="https://www.youtube.com/">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 text-center text-xl-right d-none d-xl-inline">
        <div class="d-inline-flex align-items-center">
          <?php if (!$this->session->userdata("primary_key")) : ?>
            <a class="text-white pr-3" href="#" data-toggle="modal" data-target="#login_modal">Login</a>
            <span class="text-white">|</span>
            <a class="text-white px-3" href="#" data-toggle="modal" data-target="#sign_up_modal">Sign Up</a>
          <?php else : ?>
            <div class="dropdown float-left">
              <a href="#" class="dropdown-toggle text-white dec-none" data-toggle="dropdown">
                <img data-src="<?= $this->session->userdata("user_image") ? $this->session->userdata("user_image") : default_user_image() ?>" class="rounded-circle img-bordered-sm mb-1 d-none d-xl-inline lazy" style="width: 25px; height: 25px;" alt="logo">
                <span><?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?></span>
              </a>
              <div class="dropdown-menu rounded-0 m-0">
                <?php if ($this->session->userdata("user_type") != "Super Administrator") : ?>
                  <a href="appointments" class="dropdown-item <?= defined("APPOINTMENTS") ? APPOINTMENTS : null ?>"><i class="fas fa-calendar-check mr-3"></i>My Appointments</a>
                  <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#request_appointment_modal"><i class="fas fa-calendar-plus mr-3"></i>Request an Appointment</a>
                <?php endif ?>
                <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#update_account_modal"><i class="fas fa-cog mr-3"></i>Account Settings</a>
                <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#about_the_developers_modal"><i class="fas fa-info-circle mr-3"></i>Developers</a>
                <a href="javascript:void(0)" class="dropdown-item text-danger btn_logout"><i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
              </div>
            </div>
          <?php endif ?>
        </div>
      </div>
    </div>
    <div class="row py-3 d-none d-xl-flex px-xl-5">
      <div class="col-lg-4">
        <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center">
          <img data-src="<?= logo() ?>" class="rounded-circle lazy" alt="logo">
          <h1 class="d-inline text-capitalize"><span class="text-primary">PetsHealth</span>Management</h1>
        </a>
      </div>
      <div class="col-lg-8 text-center text-lg-right d-block">
        <div class="d-inline-flex align-items-center">
          <div class="d-inline-flex flex-column text-center pr-3 border-right">
            <h6>Opening Hours</h6>
            <p class="m-0">8:00 AM - 5:00 PM</p>
          </div>
          <div class="d-inline-flex flex-column text-center px-3 border-right">
            <h6>Email Us</h6>
            <p class="m-0">petshealthmanagement@gmail.com</p>
          </div>
          <div class="d-inline-flex flex-column text-center pl-3">
            <h6>Call Us</h6>
            <p class="m-0">(+63) 912-345-6789</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->
  <!-- Navbar Start -->
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-xl bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
      <a href="<?= base_url() ?>" class="navbar-brand d-flex d-xl-none">
        <img data-src="<?= logo_white() ?>" class="rounded-circle mr-2 lazy" alt="logo_white">
        <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">PetsHealth</span>Management</h1>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
          <a href="<?= base_url() ?>" class="nav-item nav-link <?= defined("HOME") ? HOME : null ?>">Home</a>
          <a href="about_us" class="nav-item nav-link <?= defined("ABOUT_US") ? ABOUT_US : null ?>">About Us</a>
          <a href="services" class="nav-item nav-link <?= defined("SERVICES") ? SERVICES : null ?>">Services</a>
          <a href="pricing" class="nav-item nav-link <?= defined("PRICING") ? PRICING : null ?>">Pricing</a>
          <a href="blogs" class="nav-item nav-link <?= defined("BLOGS") ? BLOGS : null ?>">Blogs</a>
          <!-- Pets -->
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pets</a>
            <?php if ($this->session->userdata("primary_key")) : ?>
              <div class="dropdown-menu rounded-0 m-0">
                <a href="available_pets" class="dropdown-item <?= defined("AVAILABLE_PETS") ? AVAILABLE_PETS : (defined("PET_ADOPTION_CENTER") ? PET_ADOPTION_CENTER : null) ?>">Pet Adoption Center</a>
                <a href="online_pet_health_assessment" class="dropdown-item <?= defined("ONLINE_PET_HEALTH_ASSESSMENT") ? ONLINE_PET_HEALTH_ASSESSMENT : null ?>">Online Pet Health Assessment</a>
                <a href="registered_pets" class="dropdown-item <?= defined("REGISTERED_PETS") ? REGISTERED_PETS : null ?>">Registered Pets</a>
                <a href="missing_pets" class="dropdown-item <?= defined("MISSING_PETS") ? MISSING_PETS : null ?>">Missing Pets</a>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#register_pet_modal" class="dropdown-item">Register your Pet</a>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#report_missing_pet_modal" class="dropdown-item">Report a Missing Pet</a>
              </div>
            <?php else : ?>
              <div class="dropdown-menu rounded-0 m-0">
                <a href="javascript:void(0)" class="dropdown-item login_alert">Pet Adoption Center</a>
                <a href="javascript:void(0)" class="dropdown-item login_alert">Online Pet Health Assessment</a>
                <a href="javascript:void(0)" class="dropdown-item login_alert">Registered Pets</a>
                <a href="javascript:void(0)" class="dropdown-item login_alert">Missing Pets</a>
                <a href="javascript:void(0)" class="dropdown-item login_alert">Register your Pet</a>
                <a href="javascript:void(0)" class="dropdown-item login_alert">Report a Missing Pet</a>
              </div>
            <?php endif ?>
          </div>
          <!-- Login, Sign Up, User Menu -->
          <div class="d-xl-none d-inline">
            <?php if (!$this->session->userdata("primary_key")) : ?>
              <a href="javascript:void(0)" data-toggle="modal" data-target="#sign_up_modal" class="nav-item nav-link">Sign Up</a>
              <a href="javascript:void(0)" data-toggle="modal" data-target="#login_modal" class="nav-item nav-link">Login</a>
            <?php else : ?>
              <div class="nav-item dropdown">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle text-white dec-none" data-toggle="dropdown">
                  <span><?= $this->session->userdata("user_name") ?></span>
                </a>
                <div class="dropdown-menu rounded-0 m-0">
                  <?php if ($this->session->userdata("primary_key") != "Super Administrator") : ?>
                    <a href="appointments" class="dropdown-item <?= defined("APPOINTMENTS") ? APPOINTMENTS : null ?>"><i class="fas fa-calendar-alt mr-3"></i>My Appointments</a>
                    <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#request_appointment_modal"><i class="fas fa-calendar-plus mr-3"></i>Request an Appointment</a>
                  <?php endif ?>
                  <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#update_account_modal" class="dropdown-item"><i class="fas fa-cog mr-3"></i>Acount Settings</a>
                  <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#about_the_developers_modal"><i class="fas fa-code mr-3"></i>Developers</a>
                  <a href="javascript:void(0)" class="dropdown-item text-danger btn_logout"><i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
                </div>
              </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->
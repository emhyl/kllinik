<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>ADMIN</title>
  <!-- loader-->
  <link href=" <?= base_url('assets/admin/') ?>css/pace.min.css" rel="stylesheet"/>
  <script src=" <?= base_url('assets/admin/') ?>js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href=" <?= base_url('assets/admin/') ?> images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href=" <?= base_url('assets/admin/') ?>plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href=" <?= base_url('assets/admin/') ?>plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href=" <?= base_url('assets/admin/') ?>css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href=" <?= base_url('assets/admin/') ?>css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href=" <?= base_url('assets/admin/') ?>css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href=" <?= base_url('assets/admin/') ?>css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href=" <?= base_url('assets/admin/') ?>css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
   
  <!-- Start wrapper-->
  <div id="wrapper">


  <!--Start topbar header-->
  <header class="topbar-nav">
  <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <!-- <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form> -->
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i> <?= ($jml_orderan >0)?'<span class="badge badge-danger">'.$jml_orderan.'</span>':""; ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="Admin"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar">
              <!-- <img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="Admin"> -->
            </div>
            <div class="media-body">
            <!-- <h6 class="mt-2 user-title">Sarajhon Mccoy</h6> -->
            <!-- <p class="user-subtitle">mccoy@example.com</p> -->
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <!-- <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li> -->
        <li class="dropdown-divider"></li>
        <li class="dropdown-divider"></li>
        <!-- <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li> -->
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="<?= base_url('login/logOut') ?>"><i class="icon-power mr-2"></i> Logout</a></li>
      </ul>
    </li>
  </ul>
  </nav>
  </header>
  <!--End topbar header-->
  <div class="clearfix"></div>


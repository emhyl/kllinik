<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Registrasi</title>
  <!-- loader-->
  <link href="<?= base_url('assets/admin/') ?>css/pace.min.css" rel="stylesheet"/>
  <script src="<?= base_url('assets/admin/') ?>js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="<?= base_url('assets/admin/') ?>images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url('assets/admin/') ?>css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?= base_url('assets/admin/') ?>css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?= base_url('assets/admin/') ?>css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?= base_url('assets/admin/') ?>css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="<?= base_url('assets/admin/') ?>images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Daftar</div>
        <?= $this->session->flashdata('sukses'); ?>
        <?= $this->session->flashdata('err_login'); ?>
		    <form action="<?= base_url('registrasi') ?>" method="post">
			    
          <div class="form-group">
    			  <label for="inputUsername" class="sr-only">Nama</label>
    			   <div class="position-relative has-icon-right">
    				  <input type="text" id="inputUsername" required name="nama" class="form-control input-shadow" placeholder="Masukkan nama">
    				  <div class="form-control-position">
    					  <i class="icon-user"></i>
    				  </div>
    			   </div>
  			  </div>

          <div class="form-group">
            <label for="inputUsername" class="sr-only">Alamat</label>
             <div class="position-relative has-icon-right">
              <input type="text" id="inputUsername" required name="alamat" class="form-control input-shadow" placeholder="Masukkan alamat">
              <div class="form-control-position">
                <i class="icon-user"></i>
              </div>
             </div>
          </div>

          <div class="form-group">
            <label for="inputUsername" class="sr-only">Nik</label>
             <div class="position-relative has-icon-right">
              <input type="text" id="inputUsername" required name="nik" class="form-control input-shadow" placeholder="Masukkan NIK">
              <div class="form-control-position">
                <i class="icon-user"></i>
              </div>
             </div>
          </div>

          <div class="form-group">
            <label for="inputUsername" class="sr-only">Nomor Hp</label>
             <div class="position-relative has-icon-right">
              <input type="text" id="inputUsername" required name="no_hp" class="form-control input-shadow" placeholder="Masukkan No Hp">
              <div class="form-control-position">
                <i class="icon-user"></i>
              </div>
             </div>
          </div>
          
          <div class="form-group">
            <label for="inputUsername" class="sr-only">Username</label>
             <div class="position-relative has-icon-right">
              <input type="text" id="inputUsername" required name="username" class="form-control input-shadow" placeholder="Masukkan username">
              <div class="form-control-position">
                <i class="icon-user"></i>
              </div>
             </div>
          </div>

  			  <div class="form-group">
  			  <label for="inputPassword" class="sr-only">Password</label>
  			   <div class="position-relative has-icon-right">
  				  <input type="password" id="inputPassword" required name="password" class="form-control input-shadow" placeholder="Masukkan Password">
  				  <div class="form-control-position">
  					  <i class="icon-lock"></i>
  				  </div>
  			   </div>
  			  </div>
			<!-- <div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Ingat Saya</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="reset-password.html">Reset Password</a>
			 </div>
			</div> -->
			 <button type="submit" name="btn_registrasi" class="btn btn-light btn-block">Daftar</button>			  
			 <div class="form-row mt-4">
			
		
			</div>
			 
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Sudah mendaftar ? <a href="<?= base_url('login') ?>"> Login disini</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/admin/') ?>js/jquery.min.js"></script>
  <script src="<?= base_url('assets/admin/') ?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/admin/') ?>js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="<?= base_url('assets/admin/') ?>js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="<?= base_url('assets/admin/') ?>js/app-script.js"></script>
  
</body>
</html>

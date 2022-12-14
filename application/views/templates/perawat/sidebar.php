<!--Start sidebar-wrapper-->
 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   <div class="brand-logo">
    <a href="<?= base_url('perawat') ?>">
     <img src=" <?= base_url('assets/admin/') ?>images/logo-icon.png" class="logo-icon" alt="logo icon">
     <h5 class="logo-text">Dashtreme Admin</h5>
   </a>
 </div>
 <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    <li>
      <a href="<?= base_url('perawat') ?>">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>

    <li>
      <a href="<?= base_url('perawat/home/informasi') ?>">
       <i class="zmdi zmdi-info"></i> <span>Info Terkini</span>
      </a>
    </li>
    <li>
      <a href="<?= base_url('perawat/home/jadwal') ?>">
        <i class="zmdi zmdi-notifications-active"></i> <span>Jadwal pelayanan</span>
      </a>
    </li>

    <!-- <li class="sidebar-header">Pelayanan</li> -->
     <li>
      <a href="<?= base_url('perawat/konsultasi') ?>">
        <i class="zmdi zmdi-disqus"></i> <span>Konsultasi</span>
      </a>
    </li>
  </ul>
 
 </div>
 <!--End sidebar-wrapper-->

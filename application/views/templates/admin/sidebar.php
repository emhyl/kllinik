<!--Start sidebar-wrapper-->
 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   <div class="brand-logo">
    <a href="<?= base_url('admin') ?>">
     <img src=" <?= base_url('assets/admin/') ?>images/logo-icon.png" class="logo-icon" alt="logo icon">
     <h5 class="logo-text">Dashtreme Admin</h5>
   </a>
 </div>
 <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    <li>
      <a href="<?= base_url('admin') ?>">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>

    <li>
      <a href="<?= base_url('admin/home/informasi') ?>">
        <i class="zmdi zmdi-invert-colors"></i> <span>Info Terkini</span>
      </a>
    </li>
    <li>
      <a href="<?= base_url('admin/home/list_obat') ?>">
        <i class="zmdi zmdi-invert-colors"></i> <span>Daftar Obat</span>
      </a>
    </li>

    <li class="sidebar-header">Pelayanan</li>
     <li>
      <a href="<?= base_url('admin/home/pesanan') ?>">
        <i class="zmdi zmdi-account-circle"></i> <span>Pesanan</span>
      </a>
    </li>
    <li>
      <a href="<?= base_url('admin/home/proses') ?>">
        <i class="zmdi zmdi-account-circle"></i> <span>Proses</span>
      </a>
    </li>

    <li class="sidebar-header">Data Master</li>
    <li><a href="<?= base_url('admin/data_master/data_login') ?>"><i class="zmdi zmdi-grid text-danger"></i> <span>Data Login</span></a></li>
    <li><a href="<?= base_url('admin/data_master/data_user') ?>"><i class="zmdi zmdi-grid text-danger"></i> <span>Data User</span></a></li>
    <li><a href="<?= base_url('admin/data_master/data_order') ?>"><i class="zmdi zmdi-grid text-danger"></i> <span>Data Order</span></a></li>
    <li><a href="<?= base_url('admin/data_master/data_info') ?>"><i class="zmdi zmdi-grid text-danger"></i> <span>Data Info</span></a></li>
    <li><a href="<?= base_url('admin/data_master/data_chat') ?>"><i class="zmdi zmdi-grid text-danger"></i> <span>Data Chat</span></a></li>
    <li><a href="<?= base_url('admin/data_master/data_obat') ?>"><i class="zmdi zmdi-grid text-danger"></i> <span>Data Obat</span></a></li>
    <li><a href="<?= base_url('admin/data_master/data_perawat') ?>"><i class="zmdi zmdi-grid text-danger"></i> <span>Data Perawat</span></a></li>
    <li><a href="<?= base_url('admin/data_master/data_list') ?>"><i class="zmdi zmdi-grid text-danger"></i> <span>Data List Pelayanan</span></a></li>
  </ul>
 
 </div>
 <!--End sidebar-wrapper-->

<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">

<!--Start Dashboard Content-->

<div class="card mt-3">
  <div class="card-content">
      <div class="row row-group m-0">
          <div class="col-12 col-lg-6 col-xl-3 border-light">
              <div class="card-body">
                <h5 class="text-white mb-0"><?= $orderan ?> <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:<?= $orderan ?>%"></div>
                </div>
                <p class="mb-0 text-white small-font">Orderan hari ini</p>
              </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3 border-light">
              <div class="card-body">
                <h5 class="text-white mb-0"><?= $pelanggan ?> <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                  <div class="progress my-3" style="height:3px;">
                     <div class="progress-bar" style="width:<?= $pelanggan ?>%"></div>
                  </div>
                <p class="mb-0 text-white small-font">Total Pelanggan</p>
              </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3 border-light">
              <div class="card-body">
                <h5 class="text-white mb-0"><?= $dokter ?> <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                  <div class="progress my-3" style="height:3px;">
                     <div class="progress-bar" style="width:<?= $dokter ?>%"></div>
                  </div>
                <p class="mb-0 text-white small-font">Dokter</p>
              </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3 border-light">
              <div class="card-body">
                <h5 class="text-white mb-0"><?= $total_orderan ?> <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                  <div class="progress my-3" style="height:3px;">
                     <div class="progress-bar" style="width:<?= $total_orderan ?>%"></div>
                  </div>
                <p class="mb-0 text-white small-font">Total orderan</p>
              </div>
          </div>
      </div>
  </div>
</div>  
  

<div class="row">
 <div class="col-12 col-lg-12">
   <div class="card">
     <div class="card-header">Riwayat orderan
	  <div class="card-action">
           <div class="dropdown">
           <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
            <i class="icon-options"></i>
           </a>
            <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="<?= base_url('admin/home/export') ?>">Cetak</a>
           <!--  <a class="dropdown-item" href="javascript:void();">Another action</a>
            <a class="dropdown-item" href="javascript:void();">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void();">Separated link</a> -->
             </div>
            </div>
           </div>
	 </div>
       <div class="table-responsive">
         <table class="table align-items-center table-flush table-borderless">
          <thead>
           <tr>
             <th>No</th>
             <th>Nama</th>
             <th>Alamat</th>
             <th>NIK</th>
             <th>No Telpon</th>
             <th>Jenis Perawatan</th>
             <th>Tanggal</th>
             <th>Harga</th>
           </tr>
           </thead>
           <tbody>
            <?php $no=1; foreach($order as $row_order): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row_order['nama'] ?></td>
                <td><?= $row_order['alamat'] ?></td>
                <td><?= $row_order['nik'] ?></td>
                <td><?= $row_order['no_hp'] ?></td>
                <td><?= $row_order['jenis_perawatan'] ?></td>
                <td><?= $row_order['tgl_order'] ?></td>
                <td>Rp.<?= $row_order['harga'] ?></td>
            </tr>             
            <?php endforeach; ?>
           </tbody>
        </table>
      </div>
   </div>
 </div>
</div><!--End Row-->

    <!--End Dashboard Content-->
  
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
	
  </div>
  <!-- End container-fluid-->
  
  </div><!--End content-wrapper-->
 
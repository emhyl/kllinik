<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">

<!--Start Dashboard Content-->

<div class="card mt-3">
  <div class="card-content">
      <div class="row row-group m-0">
        <?php foreach($konsul_info as $row_konsul): ?>
          <div class="col-12 col-lg-6 col-xl-3 border-light p-3">
              <div class="card-body shadow">
                <h5 class="text-white mb-0"><?= $row_konsul['nama'] ?><a href=""><span class="float-right"><i class="zmdi zmdi-notifications-none"></i></span></a></h5>

                <div class="progress my-3" style="height:3px;">

                </div>
                <p class="mb-0 text-white small-font"><span class="font-weight-bold">Pesan: </span><?= $row_konsul['chat'] ?></p>
              </div>
          </div>
        <?php endforeach; ?>
      </div>
  </div>
</div>  
  
<div class="row">
  <div class="col-12 col-lg-8 col-xl-8">
    
  </div>
</div><!--End Row-->

<div class="row">
 <div class="col-12 col-lg-12">
   <div class="card">
     <div class="card-header">Riwayat orderan
	  <div class="card-action">
           <div class="dropdown">
           <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
            <i class="icon-options"></i>
           </a>
            <!-- <div class="dropdown-menu dropdown-menu-right"> -->
            <!-- <a class="dropdown-item" href="javascript:void();">Cetak</a> -->
           <!--  <a class="dropdown-item" href="javascript:void();">Another action</a>
            <a class="dropdown-item" href="javascript:void();">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void();">Separated link</a> -->
             <!-- </div> -->
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
             <th>No telpon</th>
             <th>NIK</th>
             <th>Tanggal</th>
             <th>Jenis Perawatan</th>
           </tr>
           </thead>
           <tbody>
            <?php $no=1; foreach($riwayat as $row_order): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row_order['nama'] ?></td>
                <td><?= $row_order['alamat'] ?></td>
                <td><?= $row_order['no_hp'] ?></td>
                <td><?= $row_order['nik'] ?></td>
                <td><?= $row_order['tgl_order'] ?></td>
                <td><?= $row_order['jenis_perawatan'] ?></td>
 
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
 
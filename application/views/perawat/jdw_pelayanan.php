<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">

<!--Start Dashboard Content-->

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
            <a class="dropdown-item" href="javascript:void();">Cetak</a>
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
             <th>No telpon</th>
             <th>NIK</th>
             <th>Jenis Perawatan</th>
             <th>Jadwal</th>
           </tr>
           </thead>
           <tbody>
            <?php $no=1; foreach($jadwal as $row_order): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row_order['nama'] ?></td>
                <td><?= $row_order['alamat'] ?></td>
                <td><?= $row_order['no_hp'] ?></td>
                <td><?= $row_order['nik'] ?></td>
                <td><?= $row_order['jenis_perawatan'] ?></td>
                <th><?= $row_order['jadwal'] ?></th>
 
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
 
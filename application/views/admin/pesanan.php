
<div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Data order</h5>
              </div>
              <div class="row row-cols-md-1 row-cols-lg-3">
              <?php foreach($orderan as $row_order){ ?> 
                <div class="col mb-4">
                  <div class="card">
                    <!-- <h5></h5> -->
                    <div class="card-body">
                      <h6 class="card-title btn-dark p-2 text-white rounded">
                        <?= $row_order['nama'] ?>
                        <br>
                        <small><?= $row_order['tgl_order'] ?></small>    
                      </h6>
                      <!-- <p class="card-text">nama</p> -->
                      <h6 class="fw-bold">Alamat : <?= $row_order['alamat'] ?></h6>
                      <h6 class="fw-bold">No Hp : <?= $row_order['no_hp'] ?></h6>
                      <h6 class="fw-bold">Jenis Perawatan : <?= $row_order['jenis_perawatan'] ?></h6>
                      <h6 class="fw-bold">Harga : <?= $row_order['harga'] ?></h6>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        Jadwalkan
                      </button>
                    </div>
                  </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <form action="<?= base_url('admin/home/pesanan/'.$row_order['id']) ?>" method="post">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          
                          <div class="form-group">
                             <div class="form-check">
                               <input class="form-check-input" name="jadwal" type="time" id="gridCheck">
                               <label class="form-check-label" for="gridCheck">
                                 Tanggal
                               </label>
                             </div>
                           </div>

                           <div class="input-group mb-3">
                             <div class="input-group-prepend bg-dark">
                               <label class="input-group-text" for="inputGroupSelect01">Perawat</label>
                             </div>
                             <select class="custom-select border" name="id_perawat" id="inputGroupSelect01">
                               <option selected>Choose...</option>
                               <?php foreach($list_perawat as $row_perawat){ ?>
                               <option value="<?= $row_perawat['id'] ?>"><?= $row_perawat['nama'] ?></option>
                               <?php } ?>
                             </select>
                           </div>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="set-tgl" class="btn btn-primary">Set Jadwal</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>


              <?php } ?>
              </div>
              
            </div>
          </div>
        </div>
        
      </div><!--End Row-->

      <!-- Button trigger modal -->
  

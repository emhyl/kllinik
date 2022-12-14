<div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h1 class="display-4">Chat Konsultasi</h1>
              </div>
                <div class="row bg-light p-1">
                <?php foreach($konsul_info as $row_konsul): ?>
                  
                  <div class="col-12 col-md-6 col-lg-4 p-1">
                    <div class="pl-3 pr-3 pt-3 pb-1">
                      <h4 class="font-weight-bold"><?= $row_konsul['nama'] ?></h4>
                      <hr>
                      <p><b>Alamat : </b><?= $row_konsul['alamat'] ?></p>
                      <p><b>No HP : </b><?= $row_konsul['no_hp'] ?></p>
                      <a href="<?= base_url('perawat/konsultasi/chat/'.$row_konsul['id_user']) ?>" class="badge badge-warning">Buka Chat</a>
                    </div>
                  </div>
                <?php endforeach; ?>
                </div>
            </div>
          </div>
        </div>
        
      </div><!--End Row-->

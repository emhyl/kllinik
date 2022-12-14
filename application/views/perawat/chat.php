<div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h1 class="display-4">Chat konsultasi</h1>
              </div>
                <div class="row bg-light p-1">
                <?php foreach($konsul_all as $row_konsul): ?>
                  
                  <div class="col-12 p-1">
                    <div class="pl-3 pr-3 pt-3 pb-1 <?= ($row_konsul['status'] == 'user')?'text-left':'text-right'; ?>">
                      <h5 class="font-weight-bold"><?= ($row_konsul['status']=='user')?$nama_user:'perawat' ?></h5>
                      <span class="font-italic border py-2 px-4 rounded"><?= $row_konsul['chat'] ?></span>
                      <hr>
                    </div>
                  </div>
                <?php endforeach; ?>
                  <form class="w-100" method="post" action="<?= base_url('perawat/konsultasi/replay/'.$row_konsul['id_user']) ?>">
                  <div class="col-12 p-1">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control txt-dark" name="chat" placeholder="Balas pesan" aria-label="Recipient's username" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-outline-info" type="submit" id="button-addon2">Balas</button>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
        
      </div><!--End Row-->

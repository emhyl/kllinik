
<div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Dartar Obat</h5>
              </div>
      
              <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">Nama Obat</th>
                      <th scope="col">Jumlahi</th>
                      <th scope="col">Status Tersedia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($list_obat as $key => $rowTbl){?>
                      <tr>
                        <th scope="row"><?= ++$key ?></th>
                        <td><?= $rowTbl['nama_obat']  ?></td>
                        <td><?= $rowTbl['jumlah']  ?></td>
                         <td><?= $rowTbl['status_obat'] ?></td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div><!--End Row-->

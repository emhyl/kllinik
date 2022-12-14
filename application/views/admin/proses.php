
<div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col">

          <?php if(count($field)>0){ ?>
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Data order</h5>
              </div>
              <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('sukses_delete') ?>
                <?= $this->session->flashdata('sukses_edit') ?>
              </div>

              <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <?php foreach($field as $rowField ){?>
                        <th scope="col"><?= $rowField ?></th>
                      <?php }?>
                        <!-- <th scope="col">Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($proses as $no => $row){ ?>
                    <tr>
                      <th scope="row"><?= ++$no ?></th>
                      <td><?= $row['id'] ?></td>
                      <td><?= $row['id_user'] ?></td>
                      <td><?= $row['id_perawat'] ?></td>
                      <td><?= $row['jenis_perawatan'] ?></td>
                      <td><?= $row['tgl_order'] ?></td>
                      <td><?= $row['jadwal'] ?></td>
                      <td><?= $row['harga'] ?></td>
                      <td><?= $row['sts_order'] ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
        
      </div><!--End Row-->

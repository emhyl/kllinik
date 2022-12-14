
<div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col">
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
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <?php foreach($orderan as $row){ ?>
                        <td><?= $row['id_user'] ?></td>
                      <?php } ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div><!--End Row-->

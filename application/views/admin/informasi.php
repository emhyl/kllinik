<div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Info Terkini</h5>
              </div>
              <?php foreach($informasi as $info): ?>
              <div class="jumbotron jumbotron-fluid bg-light">
                <div class="container">
                  <h1 class="display-4"><?= $info['label'] ?></h1>
                  <p class="lead"><?= $info['informasi'] ?></p>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        
      </div><!--End Row-->

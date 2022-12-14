
            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Orderan anda</h2>
                                <p>1. Pilih selesai apabila anda telah selesai konsultasi pelayanan</p>
                                <p>2. Slahkan Tunggu konfirmasi dari klinik dan menunggu pelayanan perawat</p>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                  </symbol>
                                  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                  </symbol>
                                  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                  </symbol>
                                </svg>

                                <?php foreach($proses as $row_proses){ ?>
                                <div class="alert <?= ($row_proses['sts_order'] == 'proses')?'alert-primary':'alert-success'; ?> d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="<?= ($row_proses['sts_order'] == 'proses')?'Info:':'Success:'; ?>"><use xlink:href="<?= ($row_proses['sts_order'] == 'proses')?'#info-fill':'#check-circle-fill'; ?>"/></svg>
                                  <div class="px-4">
                                    <div class="row">
                                        <div class="col-12 bg-light text-dark fst-italic text-center">
                                            <?= $row_proses['tgl_order'] ?>
                                        </div>
                                        <div class="col-12 text-dark pt-2">
                                            <span class="fw-bold">Jenis Perawatan :</span> <?= $row_proses['jenis_perawatan'] ?>
                                        </div>
                                        <div class="col-12 text-dark pt-2">
                                            <span class="fw-bold">Harga :</span> Rp.<?= $row_proses['harga'] ?>
                                        </div>
                                        <div class="col-12 text-dark pt-2">
                                            <span class="fw-bold">Jadwal Pelayanan :</span> <?= $row_proses['jadwal'] ?>
                                        </div>
                                        <div class="col-12 text-dark pt-2">
                                            <span class="fw-bold">Status :</span> <?= $row_proses['sts_order'] ?>
                                        </div>
                                        <?php if($row_proses['sts_order'] == 'proses'){ ?>
                                            <a href="<?= base_url('proses/selesai/'.$row_proses['id']) ?>" class="btn btn-success w-50 ">Selesai</a>
                                        <?php } ?>
                                    </div>
                                  </div>
                                </div>
                                <?php } ?> 

                                <?php foreach($orderan as $row_order){ ?>
                                <div class="alert alert-warning  d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                  <div class="px-4">
                                    <div class="row">
                                        <div class="col-12 bg-light text-dark fst-italic text-center">
                                            <?= $row_order['tgl_order'] ?>
                                        </div>
                                        <div class="col-12 text-dark pt-2">
                                            <span class="fw-bold">Jenis Perawatan :</span> <?= $row_order['jenis_perawatan'] ?>
                                        </div>
                                        <div class="col-12 text-dark pt-2">
                                            <span class="fw-bold">Harga :</span> Rp.<?= $row_order['harga'] ?>
                                        </div>
                                        <div class="col-12 text-dark pt-2">
                                            <span class="fw-bold">Status :</span> <?= $row_order['sts_order'] ?>
                                        </div>
                                        <div class="col-12 text-dark pt-2">
                                            <span class="fw-bold p-2 border bg-light rounded">Menunggu konfirmasi </span>
                                        </div>
                                        <?php if($row_order['sts_order'] == 'proses'){ ?>
                                            <a href="<?= base_url('proses/selesai/'.$row_order['id']) ?>" class="btn btn-success w-50 ">Selesai</a>
                                        <?php } ?>
                                    </div>
                                  </div>
                                </div>
                                <?php } ?>    

                                <h2 class="text-center mb-lg-3 mb-2">Riwayat Orderan</h2>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Alamat</th>
                                      <th scope="col">No telpon</th>
                                      <th scope="col">Nik</th>
                                      <th scope="col">Jenis Perawatan</th>
                                      <th scope="col">Tanggal Orderan</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach($riwayat as $no => $rowRiwayat){ ?>
                                    <tr>
                                      <th scope="row"><?= ++$no ?></th>
                                      <td><?= $rowRiwayat['nama'] ?></td>
                                      <td><?= $rowRiwayat['alamat'] ?></td>
                                      <td><?= $rowRiwayat['no_hp'] ?></td>
                                      <td><?= $rowRiwayat['nik'] ?></td>
                                      <td><?= $rowRiwayat['jenis_perawatan'] ?></td>
                                      <td><?= $rowRiwayat['tgl_order'] ?></td>

                                    </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        
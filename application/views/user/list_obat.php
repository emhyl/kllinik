
            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">

                            <h2 class="text-center mb-lg-3 mb-2">Daftar Obat</h2>
                            <form action="<?= base_url('list_obat') ?>" method="post">
                                <div class="input-group mb-3 w-50">
                                  <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Cari..</button>
                                  <input type="text" class="form-control" name="key" placeholder="Nama Obat" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                            </form>
                            <div class="booking-form">
                                <table class="table table-bordered border-primary">
                                    <thead>
                                        <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Nama Obat</th>
                                          <th scope="col">Stok</th>
                                          <th scope="col">Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php foreach($list_obat as $no => $row_obat){ ?>
                                        <tr>
                                          <th scope="row"><?= ++$no ?></th>
                                          <td><?=$row_obat['nama_obat'] ?></td>
                                          <td><?=$row_obat['jumlah'] ?></td>
                                          <td><?=$row_obat['status_obat'] ?></td>
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

        
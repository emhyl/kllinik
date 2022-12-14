
            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Lengkapi Data anda</h2>
                            
                                <form role="form" action="<?= base_url('proses/checkout') ?>" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="nama" value="<?= $data_user->nama ?>" id="name" class="form-control text-dark" placeholder="Nama" disabled required>
                                        </div>
                                       
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="alamat" value="<?= $data_user->alamat ?>" id="email" class="form-control text-dark" placeholder="Alamat" disabled required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="no_hp" value="<?= $data_user->no_hp ?>" id="phone"  class="form-control text-dark" disabled placeholder="+62">
                                        </div>

                                        <div class="col-lg-6 col-12 pt-2">
                                           <select class="form-select" name="jenis_perawatan" aria-label="Default select example">
                                             <option selected>Pilih Jenis Perawatan</option>
                                             <?php foreach($list_pelayanan as $row_list){ ?>
                                             <option value="<?= $row_list['id'] ?>"><?= $row_list['nm_pelayanan'] ?> (Rp<?= $row_list['harga'] ?>)</option>
                                             <?php } ?>
                                           </select>
                                        </div>
                                        
                                        <div class="col-lg-6 col-12">
                                            <input type="hidden" name="id_user" value="<?= $data_user->id ?>" id="id_user" class="form-control" required>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" name="btn-order" id="submit-button">Order Sekarang</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        
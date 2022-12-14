
           <section class="section-padding pb-0" id="timeline">
               <div class="container">
                   <div class="row">

                       <?php if(!$sts_chat){ ?>
                       <h2 class="text-center mb-lg-5 mb-4">Konsultasi</h2>
                        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                          <?php foreach($list_perawat as $row_list){ ?>
                          <div class="col">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title"><?= $row_list['nama'] ?></h5>
                                <p class="card-text">
                                  <a href="<?= base_url('konsultasi/'.$row_list['id']) ?>" class="btn btn-outline-success">Lihat Chat</a>
                                </p>
                              </div>
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                        <?php }else{ ?>

                        <div class="row">
                          <h2 class="text-start shadow mb-lg-5 mb-4"><?= $nm_perawat ?></h2>
                        <?php foreach($chat as $row_chat){ ?>
                             <div class="col-12 p-4 d-flex <?= ($row_chat['status'] == 'user')?'justify-content-end':''; ?>">
                                 <div class="w-50 rounded shadow-sm border">
                                     <h4 class="p-2 border-bottom bg-dark text-light"> <?= ($row_chat['status'] == 'user')?$nm_user:$row_chat['nama']; ?> </h4>
                                     <div class="p-3">
                                         <p>
                                             <?= $row_chat['chat'] ?>
                                         </p>
                                     </div>
                                 </div>
                             </div>   
                        <?php } ?>       
                        </div>
                        <form action="<?= base_url('proses/send_chat') ?>" method="post">
                          <div class="input-group mb-3 px-3">
                            <input type="text" name="chat" class="form-control" placeholder="Kirim pesan anda" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <input type="text" hidden="" name="id_user" value="<?= $id_user ?>" class="form-control">
                            <input type="text" hidden="" name="id_perawat" value="<?= $id_perawat ?>" class="form-control">
                            <button class="btn btn-outline-secondary" type="submit" name="btn-send" id="button-addon2">Kirim</button>
                          </div>
                        </form>
                        <?php } ?>


                   </div>
               </div>
           </section>

        </main>

        
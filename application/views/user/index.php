

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src=" <?= base_url('assets/user/') ?>images/slider/header.png" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="<?= base_url('assets/user/') ?>images/slider/header.png" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="<?= base_url('assets/user/') ?>images/slider/header.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-2">
                                    Praktek Perawatan Mandiri
                                    <div class="animated-info">
                                        <span class="animated-item">Buka</span>
                                        <span class="animated-item">Buka</span>
                                        <span class="animated-item">Buka</span>
                                    </div>
                                </h1>

                                <p class="mb-1">MUH. IHSAK SULKARNAIN S,Kep</p>

                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4" href="#about" data-hover="JELAJAHI">JELAJAHI</a>

                                    <p class="contact-phone mb-0"><i class="bi-phone"></i> +62 82 3053 0683</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">
                        <?php foreach($informasi as $row_info){ ?>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3"><?= $row_info['label'] ?></h2>

                            <p><?= $row_info['informasi'] ?></p>

                            <p>You can feel free to use this CSS template for your medical profession or health care related websites. You can <a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">support us a little</a> via PayPal if this template is good and useful for your work.</p>
                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number"></span>Tanggal<br> <?= $row_info['tgl_informasi'] ?></p>
                            </div>
                        </div>
                        
                        <?php } ?>

                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-6 ps-0">
                            <img src=" <?= base_url('assets/user/') ?>images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                        </div>

                        <div class="col-lg-6 col-6 pe-0">
                            <img src=" <?= base_url('assets/user/') ?>images/gallery/female-doctor-with-presenting-hand-gesture.jpg" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                        </div>

                    </div>
                </div>
            </section>

        </main>

        
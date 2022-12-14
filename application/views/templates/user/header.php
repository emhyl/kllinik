<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Klinik</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="<?= base_url('assets/user') ?>/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?= base_url('assets/user') ?>/css/bootstrap-icons.css" rel="stylesheet">

        <link href="<?= base_url('assets/user') ?>/css/owl.carousel.min.css" rel="stylesheet">

        <link href="<?= base_url('assets/user') ?>/css/owl.theme.default.min.css" rel="stylesheet">

        <link href="<?= base_url('assets/user') ?>/css/templatemo-medic-care.css" rel="stylesheet">
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </head>
    
    <body id="top">
    
        <main>

            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                        Praktek Perawatan Mandiri
                        <!-- <strong class="d-block"></strong> -->
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?=  base_url('') ?>">Home</a>
                            </li>

                                <a class="nav-link" href="<?=  base_url('order') ?>">Order</a>
                            </li>
                            <li>
                                
                                <a class="navbar-brand d-lg-block" href="<?=  base_url('konsultasi') ?>">
                                    Konsultasi
                                   
                                </a>
                            </li>
                            <li>
                                <a class="navbar-brand d-lg-block" href="<?=  base_url('orderan') ?>">
                                    Orderan
                                    <strong class="d-block">(<?= $jml_konsul ?>)</strong>
                                </a>
                                
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="<?=  base_url('list_obat') ?>">Daftar Obat</a>
                            </li>
                            <li class="nav-item">


                            <li class="nav-item">
                                <?php if(!$this->session->userdata('user')){ ?>
                                    <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                                <?php }else{ ?>
                                    <a class="nav-link" href="<?= base_url('login') ?>">LogOut</a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
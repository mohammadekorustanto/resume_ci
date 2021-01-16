<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $judul;?></title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="<?= base_url('assets/');?>https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="<?= base_url('assets/');?>https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/');?>https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/');?>css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Mohammad Eko Rustanto</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile1.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tentang">Tentang Saya</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pendidikan">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- tentang-->
            <section class="resume-section" id="tentang">
                <div class="resume-section-content">
                    <h2 class="mb-0">
                        Mohammad
                        <span class="text-primary">Eko Rustanto</span>
                    </h2>
                    <div class="subheading mb-5">
                        Jalan Depo No.33 Rt.01/Rw.07 Panggung Kota Tegal
                        <a href="mailto:name@email.com">mohammadekorustanto21@gmail.com</a>
                    </div>
                    <p class="lead mb-5">Saya lulusan Teknik Elektronika saya mengusai bahasa pemrogramman php dan framework CodeIgniter3 dan mengerti CodeIgniter4 serta nodeJS.</p>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- pendidikan-->
            <section class="resume-section" id="pendidikan">
                <div class="resume-section-content">
                    <h2 class="mb-5">Pendidikan</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Politeknik Harapan Bersama Kota Tegal</h3>
                            <div class="subheading mb-3">Diploma/D3 Teknik Elektronika</div>
                            <div>Teknik Komputer Jaringan (TKJ)</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">EST. 2017 - 2020</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">SMK YPT Kota Tegal</h3>
                            <div class="subheading mb-3">Rekayasa Perangkat Lunak</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">EST. 2014 - 2017</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            HTML
                        </li>
                        <li>
                            CSS
                        </li>
                        <li>
                            PHP
                        </li>
                        <li>
                            Sublime
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="<?= base_url('assets/');?>https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?= base_url('assets/');?>https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="<?= base_url('assets/');?>https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('assets/');?>js/scripts.js"></script>
    </body>
</html>

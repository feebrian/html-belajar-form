<?php

include '../../config/koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GURU | REKAYASA PERANGKAT LUNAK</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <!-- Vendor CSS Files -->
    <link href="../../vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../vendor/aos/aos.css" rel="stylesheet">
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- CDN Link -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">

    <!-- Script File -->
    <script src="../../vendor/aos/aos.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../js/main.js"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <<header id="header" class="fixed-top d-flex align-items-center" style="background:rgba(42, 44, 57, 0.9);">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.php">RPL</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="../../../index.php">Home</a></li>
                    <li><a class="active" href="#">Guru</a></li>
                    <li><a href="../siswa/siswa.php">Siswa</a></li>
                    <li><a href="../profil/profil.php">Profil</a></li>
                    <li><a href="../galeri/galeri.php">Galeri</a></li>
                    <li><a href="../kontak/kontak.php">Kontak</a></li>
                    <li><a href="../newsportal/index.php">Berita</a></li>
                    <li><a href="../../../admin/index.php" style="padding: 4px 15px;" class="btn btn-primary fw-bold" target="blank">Log In</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
        </header>
        <!-- End Header -->


        <!-- ======= Detail Guru ======= -->
        <section class="detail-guru" id="detail-guru">


            <div class="container">

                <!-- title section -->
                <div class="section-title mt-5">
                    <h2>Team</h2>
                    <p>Team RPL 2022</p>
                </div>


                <?php
                // menampilkan data

                $tampil = mysqli_query($koneksi, "SELECT * FROM tb_guru");
                while ($data = mysqli_fetch_array($tampil)) :

                ?>

                    <div class="row">
                        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
                            <div class="card border-0 shadow">
                                <img src="../../../admin/photo-guru-upload/<?= $data['foto']; ?>" alt="...">

                                <div class="card-body p-1-9 p-xl-5">
                                    <div class="mb-4">
                                        <h3 class="h4 mb-0"><?= $data['nama'] ?></h3>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-3"><a href="#!"><i class="far fa-envelope display-25 me-3 text-secondary fa-fw"></i><?= $data['email'] ?></a></li>
                                        <li class="mb-3"><a href="#!"><i class="fas fa-mobile-alt display-25 me-3 text-secondary fa-fw"></i><?= $data['hp'] ?></a></li>
                                        <li><a href="#!"><i class="fas fa-map-marker-alt display-25 me-3 text-secondary fa-fw"></i><?= $data['alamat'] ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 shadow about-page">
                            <div class="ps-lg-1-6 ps-xl-5">
                                <div class="mb-5 wow fadeIn">
                                    <div class="text-start mb-1-6 wow fadeIn about-guru">
                                        <h2 class="h1 mb-0 text-primary">Tentang</h2>
                                        <p class="card-text about-area"><?= $data['tentang'] ?></p>
                                    </div>

                                    <div class="mb-5 wow fadeIn">
                                        <div class="text-start mb-1-6 wow fadeIn">
                                            <h2 class="mb-0 text-primary">Riwayat Pendidikan</h2>
                                        </div>
                                        <p name="pendidikan-area"><?= $data['pendidikan'] ?></p>
                                    </div>

                                </div>

                                <!-- <div class="col-md-8">
                                </div> -->

                            </div>
                        </div>

                        <!-- <div class="col-md-12">

                            <div class="card-body shadow">

                                <center>
                                    <img src="../../../admin/photo-guru-upload/<?= $data['foto'] ?>" alt="<?= $data['foto'] ?>" class="shadow-sm mb-4" width="250" height="250">
                                    <h2 class="h-1 fw-bold"><?= $data['nama'] ?></h2>
                                    <p class="lead">
                                        No Hp: <?= $data['hp'] ?><br>
                                        Email: <?= $data['email'] ?><br>
                                        Alamat: <?= $data['alamat'] ?>
                                    </p>
                                </center>

                                <div class="card-text p-4 rounded">
                                    <div class="text-start mt-5 wow fadeIn about-guru">
                                        <h2 class="">Tentang</h2>
                                    </div>
                                    <p><?= $data['tentang'] ?></p>
                                </div>
                            </div>

                        </div> -->

                        <!-- Divider -->
                        <hr class="mt-5 mb-5 " style="border: 1px solid #1b1b1b;">

                    </div>

                <?php endwhile; ?>

            </div>



        </section>
        <!-- Detail Guru End -->

        <!-- footer -->
        <?php
        include("../../includes/footer.php");
        ?>
        <!-- footer END -->



        <!-- Vendor JS Files -->

</body>

</html>
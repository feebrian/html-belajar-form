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

  <!-- Vendor CSS Files -->
  <link href="../../vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../vendor/aos/aos.css" rel="stylesheet">
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="style.css">

  <!-- Lightbox CSS -->
  <link rel="stylesheet" href="../../vendor/lightbox/css/lightbox.min.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background:rgba(42, 44, 57, 0.9);">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">RPL</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../../../index.php">Home</a></li>
          <li><a href="../guru/guru.php">Guru</a></li>
          <li><a href="../siswa/siswa.php">Siswa</a></li>
          <li><a href="../profil/profil.php">Profil</a></li>
          <li><a class="active" href="#">Galeri</a></li>
          <li><a href="../kontak/kontak.php">Kontak</a></li>
          <li><a href="../newsportal/index.php">Berita</a></li>
          <li><a href="../../../admin/index.php" style="padding: 4px 15px;" class="btn btn-primary fw-bold" target="blank">Log In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Galeri</h2>
        <p>foto jurusan rpl </p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">

        <?php
        $galeri = mysqli_query($koneksi, "SELECT * FROM tb_galeri order by id_ftgaleri");
        while ($data = mysqli_fetch_array($galeri)) :
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="../../../admin/post-galeri/<?= $data['foto'] ?>" data-lightbox="myGallery" data-title="<?= $data['judul'] ?>">
              <img src="../../../admin/post-galeri/<?= $data['foto'] ?>" alt="<?= $data['foto'] ?>" class="img-fluid" loading="lazy">
            </a>
          </div>
        <?php endwhile; ?>


      </div>

    </div>
  </section>
  <!-- End Portfolio Section -->

  <!-- footer -->
  <?php
  include("../../includes/footer.php");
  ?>
  <!-- footer END -->



  <!-- Vendor JS Files -->
  <script src="../../vendor/aos/aos.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../vendor/php-email-form/validate.js"></script>
  <script src="../../js/main.js"></script>

  <!-- Lightbox JS -->
  <script src="../../vendor/lightbox/js/lightbox-plus-jquery.min.js"></script>

</body>

</html>
<?php include "../../config/koneksi.php"; ?>

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
  <link href="../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="../../page/guru/style.css">

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
          <li><a class="active" href="#">Profil</a></li>
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

  <!-- ======= About Section ======= -->
  <section id="about" class="about" style="margin-top: 5em;">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>About</h2>
        <p>Visi MIsi</p>
      </div>

      <div class="row content text-center" data-aos="fade-up">
        <div class="col-lg-6 text-left">
          <ul style="list-style-type: none;">
            <li>
              <h2 class="text-center">VISI</h2>
            </li>
            <hr style="width: 50%;" class="mx-auto">
            <li>MENJADI PROGRAM STUDI YANG UNGGUL</li>
            <li>MEMILIKI DAYA SAING GLOBAL DI BIDANG REKAYASA PERANGKAT LUNAK YANG MENDUKUNG EKONOMI KREATIF</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 text-left">
          <ul style="list-style-type: none;">
            <li>
              <h2 class="text-center">MISI</h2>
            </li>
            <hr style="width: 50%;" class="mx-auto">
            <li>MENYELENGGARAKAN PENDIDIKAN BERMUTU DI BIDANG REKAYASA PERANGKAT LUNAK UNTUK PENGEMBANGAN SUMBER DAYA MANUSIA YANG PROFESIONAL DAN HANDAL DI LINGKUNGAN GLOBAL SEHINGGA MENGHASILKAN LULUSAN YANG BERKUALITAS, KOMPETEN DAN SESUAI DENGAN KEBUTUHAN SAAT INI DAN AKAN DATANG.</li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Prestasi Section ======= -->
  <section class="prestasi" id="prestasi">
    <div class="container">
      <div class="section-title mt-5" data-aos="zoom-out">

        <h2>Profil</h2>
        <p>Prestasi</p>
      </div>

      <?php
      // menampilkan data

      $tampil = mysqli_query($koneksi, "SELECT * FROM tb_prestasi");
      while ($data = mysqli_fetch_array($tampil)) :

      ?>

        <div class="row">
          <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
            <div class="card border-0 shadow">
              <img src="../../../admin/photo-prestasi/<?= $data['foto']; ?>" alt="...">

              <div class="card-body p-1-9 p-xl-5">
                <div class="mb-4">
                  <h3 class="h4 mb-0"><?= $data['nama_siswa'] ?></h3>
                </div>
                <ul class="list-unstyled mb-4">
                  <li class="mb-3"><a href="#!">NIS: <?= $data['nis'] ?></a></li>
                  <li class="mb-3"><a href="#!">Kelas: <?= $data['kelas'] ?></a></li>
                  <li class="mb-3"><a href="#!">Kategori: <?= $data['kategori'] ?></a></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- description box -->
          <div class="col-md-8 shadow mt-5">
            <div class="ps-lg-1-6 ps-xl-5">
              <div class="mb-5 wow fadeIn">
                <div class="text-start mb-1-6 wow fadeIn">
                  <h2 class="h1 mb-0 text-primary">Deskripsi</h2>
                </div>
                <p class="card-text"><?= $data['deskripsi'] ?></p>
              </div>
            </div>
          </div>

          <!-- Divider -->
          <hr class="mt-5 mb-5 " style="border: 1px solid #1b1b1b;">

        </div>

      <?php endwhile; ?>

    </div>



  </section>

  </div>

  </section>
  <!-- End Prestsasi -->

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
</body>

</html>
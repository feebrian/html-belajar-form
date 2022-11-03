<?php

include 'assets/config/koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOMEPAGE | REKAYASA PERANGKAT LUNAK</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="guru.css">
</head>
<style>
  a {
    text-decoration: none;
    color: #000;
  }

  #guru a:hover {
    color: black;
  }
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">RPL</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="">Home</a></li>
          <li><a href="assets/page/guru/guru.php">Guru</a></li>
          <li><a href="assets/page/siswa/siswa.php">Siswa</a></li>
          <li><a href="assets/page/profil/profil.php">Profil</a></li>
          <li><a href="assets/page/galeri/galeri.php">Galeri</a></li>
          <li><a href="assets/page/kontak/kontak.php">Kontak</a></li>
          <li><a href="assets/page/newsportal/index.php">Berita</a></li>
          <li><a href="admin/index.php" style="padding: 4px 15px;" class="btn btn-primary fw-bold" target="blank">Log In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active" data-bs-interval="5000">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <br> <span>Software Engineering</span></h2>
          <a href="#guru" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" data-bs-interval="15000">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Apa Itu RPL</h2>
          <p class="animate__animated animate__fadeInUp">Apa itu RPL?
            Rekayasa Perangkat Lunak atau Software Engineer adalah salah satu konsentrasi keahlian yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>

          <p class="animate__animated animate__fadeInUp">Bukan hanya itu, RPL juga berkaitan dengan software komputer mulai dari pembuatan website, aplikasi, game dan semua yang berkaitan dengan pemrograman dengan menguasai bahasa pemrograman tersebut. Intinya RPL tidak akan jauh-jauh dari tiga hal yaitu Coding, Desain dan Algoritma yang akan menjadi kunci keberhasilan rekayasa perangkat lunak tersebut.</p>
        </div>
      </div>

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a> -->

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= Guru ======= -->


    <section id="guru" class="team_member section-padding" style="margin-top: 4em;" data-aos="fade-up">
      <div class="container">
        <div class="section-title">
          <h2>Team</h2>
          <p>Team RPL 2022</p>
        </div>
        <div class="row text-center">


          <?php

          $no = 1;
          $guru = mysqli_query($koneksi, "SELECT * FROM tb_guru order by nama asc");
          while ($data = mysqli_fetch_array($guru)) :

          ?>

            <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
              <a href="assets/page/guru/guru.php">
                <div class="our-team">
                  <div class="team_img">
                    <img src="admin/photo-guru-upload/<?= $data['foto'] ?>" alt="<?= $data['foto'] ?>" width="260" height="260">
                  </div>
                  <div class="team-content">
                    <h3 class="title"><?php echo $data['nama']; ?></h3>
                    <span class="post">"<?php echo $data['jabatan']; ?>"</span>
                  </div>
                </div>
              </a>
            </div>
            <!--- END COL -->
          <?php endwhile; ?>

        </div>
        <!--- END ROW -->
      </div>
      <!--- END CONTAINER -->
    </section>
    <!-- Guru End -->

    <!-- ======= What you get ======= -->
    <section class="mapel" id="mapel">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Mapel</h2>
          <p>Mapel Produktif</p>
        </div>

        <div class="mapel-produktif">
          <h4 class="fw-bold" data-aos="zoom-out">Hal Yang Dipelajari Di RPL :</h4>

          <ul>
            <li style="list-style-type: none;">
              <ul style="list-style-type: disc;" data-aos="fade-right">
                <li>Dasar-dasar Kejuruan</li>
                <li>Pemrograman Web</li>
                <li>Pemrograman Berbasis Text, GUI dan Multimedia</li>
                <li>Pemrograman Perangkat Bergerak</li>
                <li>Basis Data</li>
                <li>Mata Pelajaran Pilihan</li>
              </ul>
            </li>
          </ul>

        </div>

      </div>
    </section>
    <!-- What you get End -->

    <!-- ======= Peluang Kerja ======= -->
    <section class="kerja" id="kerja">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Pekerjaan</h2>
          <p>Peluang Kerja</p>
        </div>

        <div class="job">
          <h5 data-aos="fade-right">Banyak yang tanya jurusan RPL itu nanti kalau lulus bisa kerja apa?<br>
            apa saja lowongan kerja lulusan SMK jurusan RPL.<br>
            Berikut daftar peluang kerja jurusan RPL :</h5>
          <ul>
            <li style="font-size: 20px; list-style-type: none;">
              <ul style="list-style-type: disc;" data-aos="fade-right">
                <li>Programmer</li>
                <li>IT Consultant</li>
                <li>System Analyst dan System Integrator</li>
                <li>Database Engineer</li>
                <li>Web Engineer</li>
                <li>Software Tester</li>
                <li>Dan masih banyak lagi</li>
              </ul>
            </li>
          </ul>
        </div>

      </div>
    </section>
    <!-- Peluang Kerja End -->

    <!-- Partner RPL -->
    <section id="partner">
      <div class="container">

        <!-- title section -->
        <div class="section-title" data-aos="zoom-out">
          <h2>Partner</h2>
          <p>Partner RPL</p>
        </div>

        <div class="card text-center" data-aos="fade-up">
          <div class="card-header text-light " style="background-color: #0391ef;"><br></div>
          <div class="card-body">

            <!-- partner image goes here -->
            <div class="row">

              <?php

              $query = mysqli_query($koneksi, "SELECT * FROM tb_partner order by id");
              while ($data = mysqli_fetch_array($query)) :

              ?>

                <div class="col-md-3">

                  <!-- partner company image -->
                  <a href="<?= $data['link'] ?>" target="b_blank"><img src="admin/partner-image/<?= $data['foto'] ?>" alt="ini adalah pfp" width="200" height="200"></a>

                  <!-- partner company name -->
                  <div class="sub-title">
                    <h4 class="fw-bold mt-2"><?= $data['nama_partner'] ?></h4>
                    <p class="lead"><?= $data['deskripsi'] ?></p>
                  </div>

                </div> <!-- column END -->
              <?php endwhile; ?>
            </div>
          </div>
          <div class="card-footer text-muted" style="background-color: #0391ef;"><br></div>
        </div>




      </div> <!-- container END -->
    </section>
    <!-- Partner RPL END -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("assets/includes/footer.php") ?>
  <!-- End Footer -->

  <!-- ======= Back to Top ======= -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>
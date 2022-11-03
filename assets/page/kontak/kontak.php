<?php
include("../../config/koneksi.php");
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
  <link href="../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

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
          <li><a href="../galeri/galeri.php">Galeri</a></li>
          <li><a class="active" href=".#">Kontak</a></li>
          <li><a href="../newsportal/index.php">Berita</a></li>
          <li><a href="../../../admin/index.php" style="padding: 4px 15px;" class="btn btn-primary fw-bold" target="blank">Log In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Kontak</h2>
        <p>Hubungi Kami</p>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4" data-aos="fade-right">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Alamat:</h4>
              <p>Jl. Parangtritis No.KM.11, Dukuh, Sabdodadi, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55715</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>smeanbtl@yahoo.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telp:</h4>
              <p>0274-367156 / 0274-6462740</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

          <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" aria-required="true">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-required="true">
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="7" placeholder="Pesan" aria-required="true"></textarea>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form> -->

          <form method="POST" name="contact_form" action="contact-act.php">
            <input type="text" name="subject" class="form-control mb-1" id="name" placeholder="Nama">

            <input type="email" name="email" class="form-control mb-1" id="email" placeholder="Email">

            <textarea class="form-control mb-1" name="message" rows="6" placeholder="Pesan" aria-required="true"></textarea>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>

      </div>

      <div class="mapouter mt-5">
        <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=smkn%201%20bantul&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
          <style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 300px;
              width: 400px;
            }
          </style><a href="https://www.embedgooglemap.net">google map in wordpress</a>
          <style>
            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 500px;
              width: 600px;
            }
          </style>
        </div>
      </div>

    </div>
  </section>
  <!-- End Contact Section -->

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

  <script language="JavaScript">
    var frmvalidator = new Validator("contactform");
    frmvalidator.addValidation("name", "req", "Please provide your name");
    frmvalidator.addValidation("email", "req", "Please provide your email");
    frmvalidator.addValidation("email", "email",
      "Please enter a valid email address");
  </script>
</body>

</html>
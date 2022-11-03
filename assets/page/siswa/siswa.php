<?php
include('../../config/koneksi.php'); //konneksi
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISWA | REKAYASA PERANGKAT LUNAK</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="../../vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../vendor/aos/aos.css" rel="stylesheet">
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/6051e52e05.js" crossorigin="anonymous"></script>

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
          <li><a class="active" href="#">Siswa</a></li>
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

  <!-- ======= Data Siswa ======= -->
  <section id="kelas-X">
    <div class="container">

      <div class="section-title">
        <h2>Siswa</h2>
        <p>Jurusan RPL</p>
      </div>

      <!-- Database Start -->


      <!-- ======= Data Tampil Start ======= -->
      <div class="col-md-10 mx-auto mt-4">
        <div class="card">
          <div class="card-header text-light" style="background-color: #0391EF;">
            Data Siswa Jurusan RPL
          </div>
          <div class="card-body">

            <div class="row d-flex justify-content-center">

              <!-- untuk pencarian data -->
              <div class="col-md-6">
                <form method="POST">
                  <div class="input-group mb-3">
                    <input type="text" name="t_cari" value="<?= @$_POST['t_cari'] ?>" class="form-control" placeholder="Masukkan Nama Siswa">
                    <button class="btn btn-primary" name="b_cari" type="submit">Cari</button>
                    <button class="btn btn-danger" name="b_reset" type="submit">Refresh</button>
                  </div>
                </form>
              </div>

            </div>


            <div style="overflow-x:auto;">
              <table class="table table-striped table-hover table-bordered">
                <tr>
                  <th></th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Kelas</th>
                </tr>
                <?php
                // Persiapan Menampilkan Data

                // untuk pencarian data
                // jika tombol cari di klik
                if (isset($_POST['b_cari'])) {
                  // tamplilkan data yang akan dicari
                  $keyword = $_POST['t_cari'];
                  $reset       = "SELECT * FROM siswa WHERE nis like '%$keyword%' or nama like '%$keyword%' or alamat like '%$keyword%' or kelas like '%$keyword%' order by nis asc";
                } else {
                  $reset = "SELECT * FROM siswa LIMIT 0,36";
                }
                
                if (isset($_GET['start'])) {
                  $start = $_GET['start'];
                  $reset = "SELECT * FROM siswa LIMIT $start,36"; 
                }

                // membuat pagination
                $hasil = mysqli_query($koneksi, $reset);
                $sql = "SELECT * FROM siswa";
                $hasil2 = mysqli_query($koneksi, $sql);
                $total = mysqli_num_rows($hasil2);

                $looping = $total / 36;



                // perulangan data
                $siswa = mysqli_query($koneksi, $reset);
                while ($data = mysqli_fetch_array($siswa)) :
                ?>

                  <tr>
                    <td><img src="../../img/pfp.jpg" alt="pfp" width="75px" height="75px" class="rounded-3 "></td>
                    <td><?= $data['nis'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['kelas'] ?></td>
                  </tr>

                <?php endwhile; ?>


              </table>
            </div>

          </div>
          <div class="card-footer text-muted" style="background-color: #0391EF;">

          </div>
        </div>
      </div>
      <!-- Data Tampil Start End -->
      <!-- Database End -->


    </div>
  </section>
  <!-- End Data Siswa -->

  <!-- ======= Pagination ====== -->
  <div class="d-flex justify-content-center">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <?php
        $page=0;
          for ($i = 0; $i < $looping; $i++) {
        ?>
          <li class="page-item"><a class="page-link" href="siswa.php?halaman=siswa&start=<?=$page?>"><?=$i+1?></a></li>
        <?php
          $page+=36;
        }
        ?>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>
  <!-- pagination END -->


  <!-- footer -->
  <?php
  include("../../includes/footer.php");
  ?>
  <!-- footer END -->



  <!-- Vendor JS Files -->
  <script src="../../../vendor/aos/aos.js"></script>
  <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../../vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../vendor/php-email-form/validate.js"></script>
  <script src="../../../js/main.js"></script>

  <!-- bootstrap js cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
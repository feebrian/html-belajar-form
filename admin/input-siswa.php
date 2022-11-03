<?php
include '../assets/config/koneksi.php';

$status = 1;
// jika tombol simpan diklik
if (isset($_POST['b_simpan'])) {

  // data mau edit atau simpan baru
  if (isset($_GET['hal']) == "edit") {

    $edit = mysqli_query($koneksi, "UPDATE siswa SET
                                           nis    = '$_POST[t_nis]',
                                           nama   = '$_POST[t_nama]',
                                           alamat = '$_POST[t_alamat]',
                                           kelas  = '$_POST[t_kelas]'
                                      WHERE nis = '$_GET[nis]'
                                   ");
    // uji jika edit data sukses                              
    if ($edit) {
      echo "<script>
            alert('Edit Data Sukses!');
            document.location='manage-siswa.php';
            </script>";
    } else {
      echo "<script>
            alert('Simpan Data Gagal!');
            document.location='manage-siswa.php';
            </script>";
    }
  } else {
    // Data Simpan Baru
    $simpan = mysqli_query($koneksi, " INSERT INTO siswa (nis, nama, alamat, kelas, Is_Active)
                                       VALUE ( '$_POST[t_nis]',
                                               '$_POST[t_nama]',
                                               '$_POST[t_alamat]',
                                               '$_POST[t_kelas]',
                                               '$status' )
                                    ");
    // uji jika simpan data sukses
    if ($simpan) {
      echo "<script>
            alert('Simpan Data Sukses!');
            document.location='manage-siswa.php';
            </script>";
    } else {
      echo "<script>
            alert('Simpan Data Gagal!');
            document.location='manage-siswa.php';
            </script>";
    }
  }
}

// deklarasi variabel
$vnis    = "";
$vnama   = "";
$valamat = "";
$vkelas  = "";

// UPDATE DELETE Test
if (isset($_GET['hal'])) {

  // UPDATE Data Test
  if ($_GET['hal'] == "edit") {

    // tampilkan data yang akan di edit
    $siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis = '$_GET[nis]' ");
    $data  = mysqli_fetch_array($siswa);
    if ($data) {
      // jika data ditemukan data akan ditampung dalam variabel
      $vnis    = $data['nis'];
      $vnama   = $data['nama'];
      $valamat = $data['alamat'];
      $vkelas  = $data['kelas'];
    }
  } else if ($_GET['hal'] == 'hapus') {
    // delete data
    $hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE nis = '$_GET[nis]' ");
    // uji jika hapus data sukses
    if ($hapus) {
      echo "<script>
            alert('Hapus Data Sukses!');
            document.location='manage-siswa.php';
            </script>";
    } else {
      echo "<script>
            alert('Hapus Data Gagal!');
            document.location='manage-siswa.php';
            </script>";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <!-- App title -->
  <title>Newsportal | Manage Posts</title>

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">

  <!-- jvectormap -->
  <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

  <!-- App css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

  <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

  <!-- Begin page -->
  <div id="wrapper">

    <!-- Top Bar Start -->
    <?php include('includes/topheader.php'); ?>

    <!-- ========== Left Sidebar Start ========== -->
    <?php include('includes/leftsidebar.php'); ?>


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
      <!-- Start content -->
      <div class="content">
        <div class="container">


          <div class="row">
            <div class="col-xs-12">
              <div class="page-title-box">
                <h4 class="page-title">Data Siswa</h4>
                <ol class="breadcrumb p-0 m-0">
                  <li>
                    <a href="#">Admin</a>
                  </li>
                  <li>
                    <a href="#">Siswa</a>
                  </li>
                  <li class="active">
                    Input Siswa
                  </li>
                </ol>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end row -->




          <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="card-box">
                <div class="page-title-box">
                  <div class="header-title m-b-20">
                    Input Data Siswa
                  </div>
                </div>
                <div class="card-body">

                  <p>Input data via excel. <a href="upload-excel.php">klik disini</a> </p>

                  <form method="POST">

                    <div class="m-b-20">
                      <label for="exampleFormControlInput1" class="form-label">NIS</label>
                      <input type="text" name="t_nis" value="<?= $vnis ?>" class="form-control" placeholder="Masukkan NIS Siswa" required>
                    </div>

                    <div class="m-b-20">
                      <label for="exampleFormControlInput1" class="form-label">Nama Siswa</label>
                      <input type="text" name="t_nama" value="<?= $vnama ?>" class="form-control" placeholder="Masukkan Nama Siswa" required>
                    </div>

                    <div class="m-b-20">
                      <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                      <textarea name="t_alamat" value="<?= $valamat ?>" class="form-control" placeholder="Masukkan Alamat" rows="3"><?= $valamat ?></textarea>
                    </div>

                    <div class=" m-b-20">
                      <label for="exampleFormControlTextarea1" class="form-label">Kelas</label>
                      <select name="t_kelas" class="form-control" required>
                        <option value="<?= $vkelas ?>"><?= $vkelas ?></option>
                        <option value="X RPL 1">X RPL 1</option>
                        <option value="X RPL 2">X RPL 2</option>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XII RPL 1">XII RPL 1</option>
                        <option value="XII RPL 2">XII RPL 2</option>
                      </select>
                    </div>

                    <div class="text-end">
                      <hr>
                      <button class="btn btn-primary" name="b_simpan" type="submit">Simpan</button>
                      <button class="btn btn-danger" name="b_kosongkan" type="reset">Reset</button>
                    </div>

                  </form>

                </div>
                <div class="card-footer text-muted" style="background-color: #0391EF;">

                </div>
              </div>
            </div>
          </div>


        </div> <!-- container -->

      </div> <!-- content -->

      <?php include('includes/footer.php'); ?>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


  </div>
  <!-- END wrapper -->



  <script>
    var resizefunc = [];
  </script>

  <!-- jQuery  -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/detect.js"></script>
  <script src="assets/js/fastclick.js"></script>
  <script src="assets/js/jquery.blockUI.js"></script>
  <script src="assets/js/waves.js"></script>
  <script src="assets/js/jquery.slimscroll.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="../plugins/switchery/switchery.min.js"></script>

  <!-- CounterUp  -->
  <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
  <script src="../plugins/counterup/jquery.counterup.min.js"></script>

  <!--Morris Chart-->
  <script src="../plugins/morris/morris.min.js"></script>
  <script src="../plugins/raphael/raphael-min.js"></script>

  <!-- Load page level scripts-->
  <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../plugins/jvectormap/gdp-data.js"></script>
  <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>


  <!-- Dashboard Init js -->
  <script src="assets/pages/jquery.blog-dashboard.js"></script>

  <!-- App js -->
  <script src="assets/js/jquery.core.js"></script>
  <script src="assets/js/jquery.app.js"></script>

</body>

</html>
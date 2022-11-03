<?php

// memanggil file koneksi.php untuk membuat koneksi
include '../assets/config/koneksi.php';

// mengecek apakah di url ada nilai GET id
if (isset($_GET['id_prestasi'])) {
  // ambil nilai id dari url dan disimpan dalam variabel $id
  $idp = ($_GET["id_prestasi"]);

  // menampilkan data dari database yang mempunyai id=$id
  $query = "SELECT * FROM tb_prestasi WHERE id_prestasi='$idp'";
  $result = mysqli_query($koneksi, $query);
  // jika data gagal diambil maka akan tampil error berikut
  if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) .
      " - " . mysqli_error($koneksi));
  }
  // mengambil data dari database
  $data = mysqli_fetch_assoc($result);
  // apabila data tidak ada pada database maka akan dijalankan perintah ini
  if (!count($data)) {
    echo "<script>alert('Data tidak ditemukan pada database');window.location='manage-prestasi.php';</script>";
  }
} else {
  // apabila tidak ada data GET id pada akan di redirect ke index.php
  echo "<script>alert('Masukkan data id.');window.location='manage-prestasi.php';</script>";
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
  <title>Administrator | Tambah Guru</title>

  <!-- Summernote css -->
  <link href="../assets/page/newsportal/plugins/summernote/summernote.css" rel="stylesheet" />

  <!-- Select2 -->
  <link href="../assets/page/newsportal/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

  <!-- Jquery filer css -->
  <link href="../assets/page/newsportal/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
  <link href="../assets/page/newsportal/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

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
                <h4 class="page-title">Data Prestasi</h4>
                <ol class="breadcrumb p-0 m-0">
                  <li>
                    <a href="#">Admin</a>
                  </li>
                  <li>
                    <a href="#">Prestasi</a>
                  </li>
                  <li class="active">
                    Input Data Prestasi
                  </li>
                </ol>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end row -->




          <div class="row m-t-20">
            <div class="col-md-8 mx-auto">
              <div class="card-box">
                <div class="page-title-box">
                  <div class="header-title m-b-20">Input Data Prestasi</div>
                </div>
                <div class="card-body">

                  <form method="POST" action="edit-prestasi-act.php" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo $data['id_prestasi']; ?>" name="id_prestasi">

                    <div class="m-b-20">
                      <label for="exampleFormControlInput1" class="form-label">NIS</label>
                      <input type="text" value="<?php echo $data['nis']; ?>" name="t_nis" class="form-control">
                    </div>

                    <div class="m-b-20">
                      <label for="exampleFormControlInput1" class="form-label">Nama</label>
                      <input type="text" value="<?php echo $data['nama_siswa']; ?>" name="t_nama" class="form-control" placeholder="Masukkan Nama Siswa">
                    </div>

                    <div class="m-b-20">
                      <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                      <input type="text" value="<?php echo $data['kategori']; ?>" name="t_kategori" class="form-control" placeholder="Masukkan Kategori Prestasi" required>
                    </div>

                    <div class="m-b-20">
                      <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                      <textarea name="t_deskripsi" class="summernote" placeholder="Masukkan deskripsi singkat" rows="3" required><?php echo $data['deskripsi']; ?></textarea>
                    </div>

                    <div class="m-b-20">
                      <label for="exampleFormControlTextarea1" class="form-label">Kelas</label>
                      <select name="t_kelas" class="form-control" required>
                        <option value="<?php echo $data['kelas']; ?>"><?php echo $data['kelas']; ?></option>
                        <option value="X RPL 1">X RPL 1</option>
                        <option value="X RPL 2">X RPL 2</option>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XII RPL 1">XII RPL 1</option>
                        <option value="XII RPL 2">XII RPL 2</option>
                      </select>
                    </div>

                    <div class="m-b-20">
                      <label for="exampleFormControlnput1" class="form-label" style="float: left;">Foto</label>
                      <img src="photo-prestasi/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px; margin-left: 10px;">
                      <input type="file" name="foto" class="form-control">
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

  <!--Summernote js-->
  <script src="../assets/page/newsportal/plugins/summernote/summernote.min.js"></script>
  <!-- Select 2 -->
  <script src="../assets/page/newsportal/plugins/select2/js/select2.min.js"></script>
  <!-- Jquery filer js -->
  <script src="../assets/page/newsportal/plugins/jquery.filer/js/jquery.filer.min.js"></script>

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

  <script>
    jQuery(document).ready(function() {

      $('.summernote').summernote({
        height: 240, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false // set focus to editable area after initializing summernote
      });
      // Select2
      $(".select2").select2();

      $(".select2-limiting").select2({
        maximumSelectionLength: 2
      });
    });
  </script>
  <script src="../assets/page/newsportal/plugins/switchery/switchery.min.js"></script>

  <!--Summernote js-->
  <script src="../assets/page/newsportal/plugins/summernote/summernote.min.js"></script>

</body>

</html>
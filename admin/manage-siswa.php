<?php include '../assets/config/koneksi.php'; ?>
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
                    Manage Data Siswa
                  </li>
                </ol>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end row -->



          <div class="col-md-12 mx-auto mt-4">
            <div class="card-box">
              <div class="page-title-box">
                <div class="header-title m-b-20">
                  Data Siswa Jurusan RPL
                </div>
              </div>
              <div class="card-body">

                <div class="search-section">
                  <form method="POST">
                    <div class="input-group m-b-20">
                      <input type="text" name="t_cari" value="<?= @$_POST['t_cari'] ?>" class="form-control m-b-10" placeholder="Masukkan Nama Siswa">
                      <button class="btn btn-primary m-r-5" name="b_cari" type="submit">Cari</button>
                      <button class="btn btn-danger" name="b_reset" type="submit">Reset</button>
                    </div>
                  </form>
                </div>

                <div style="overflow-x:auto;">
                  <table class="table table-striped table-hover table-bordered">
                    <tr>
                      <th></th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Kelas</th>
                      <th>Aksi</th>
                    </tr>
                    <?php
                    // Persiapan Menampilkan Data

                    // untuk pencarian data
                    // jika tombol cari di klik
                    if (isset($_POST['b_cari'])) {
                      // tamplilkan data yang akan dicari
                      $keyword = $_POST['t_cari'];
                      $reset       = "SELECT * FROM siswa WHERE nis like '%$keyword%' or nama like '%$keyword%' or alamat like '%$keyword%' order by kelas asc";
                    } else {
                      $reset = "SELECT * FROM siswa order by nis asc";
                    }

                    // looping dan tampilkan data
                    $siswa = mysqli_query($koneksi, $reset);
                    while ($data = mysqli_fetch_array($siswa)) :
                    ?>

                      <tr>
                        <td><img src="../assets/img/pfp.jpg" alt="pfp" width="75px" height="75px" class="rounded-3 "></td>
                        <td><?= $data['nis'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['kelas'] ?></td>
                        <td class="text-center">
                          <a href="input-siswa.php?hal=edit&nis=<?= $data['nis'] ?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a>
                          <a href="input-siswa.php?hal=hapus&nis=<?= $data['nis'] ?>"><i class="fa fa-trash-o" style="color: #f05050" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"></i></a>
                        </td>
                      </tr>

                    <?php endwhile; ?>

                  </table>
                </div>

              </div>
              <div class="card-footer text-muted" style="background-color: #0391EF;">

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
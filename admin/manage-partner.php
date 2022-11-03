<?php include '../assets/config/koneksi.php' ?>

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
  
  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/6051e52e05.js" crossorigin="anonymous"></script>
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



        <!-- ======= Tambah Guru Shortcut ======= -->
        <a href="tambah-partner.php" class="btn btn-primary m-b-10" style="border-radius: 5px;"><i class="fa-sharp fa-solid fa-plus"></i> Tambah Partner</a>


          <div class="table-responsive">
            <table class="table m-0 table-colored-bordered table-bordered-primary">
              <thead>
                <tr>
                  <th></th>
                  <th>Nama Partner</th>
                  <th>Deskripsi</th>
                  <th>Link Website</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php

                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM tb_partner order by id asc");
                while ($data = mysqli_fetch_array($query)) :
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_partner']; ?></td>
                    <td><?= $data['deskripsi'] ?></td>
                    <td><?= $data['link'] ?></td>
                    <td><img src="partner-image/<?= $data['foto']; ?>" alt="<?= $data['foto']; ?>" width="150" height="100"></td>
                    <td>
                      <a href="edit-partner.php?id=<?php echo $data['id'] ?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a>
                      &nbsp;
                      <a href="hapus-partner.php?id=<?php echo $data['id'] ?>"><i class="fa fa-trash-o" style="color: #f05050" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"></i></a>
                    </td>
                  </tr>
                  <?php endwhile; ?>
              </tbody>

            </table>
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
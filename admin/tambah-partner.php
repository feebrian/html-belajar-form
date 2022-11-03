<?php
include '../assets/config/koneksi.php';
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
    <title>Administrator | Tambah Foto Galeri</title>

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
                                <h4 class="page-title">Partner</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#">Partner</a>
                                    </li>
                                    <li class="active">
                                        Input Partner
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
                                    <div class="header-title m-b-20">Input Partner</div>
                                </div>
                                <div class="card-body">

                                    <form method="POST" action="tambah-partner-act.php" enctype="multipart/form-data">

                                        <div class="m-b-20">
                                            <label for="exampleFormControlTextarea1" class="form-label">Nama Partner</label>
                                           <input type="text" name="t_nama" class="form-control" placeholder="Masukkan Nama Partner">
                                        </div>

                                        <div class="m-b-20">
                                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                            <textarea name="t_deskripsi" class="form-control" placeholder="Masukkan Deskripsi Singkat Partner" rows="3" required></textarea>
                                        </div>

                                        <div class="m-b-20">
                                            <label for="link" class="form-label">Link website</label>
                                            <input type="text" name="t_link" class="form-control" placeholder="Masukkan Link Website">
                                        </div>

                                        <div class="m-b-20">
                                            <label for="exampleFormControlnput1" class="form-label">Foto</label>
                                            <input type="file" name="foto" class="form-control">
                                            <i style="float: left;font-size: 11px;color: red">Pastikan rasio dari foto / logo anda sudah 1:1</i><br>
                                            <a href="#" style="float: left;font-size: 11px;">cara mengubah rasio foto</a>
                                            
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
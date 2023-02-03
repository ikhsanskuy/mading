<?php
session_start();
//koneksi
include '../koneksi.php';

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Anda harus Login');</script>";
    echo "<script>location='index.php';</script>";
    header('location=index.php');
    exit();
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Literasi Admin Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="../css/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"><i class="fa fa-home"></i>Literasi</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- <li class="text-center">
                        <img src="../assets/img/logor.png" alt="logo" width="60" height="60" class="user-image img-responsive" />
                    </li> -->

                    <li>
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-2x "></i>Beranda</a>
                    </li>
                    <li>
                        <a href="dashboard.php?halaman=produk"><i class="fa fa-book fa-2x "></i>Jenis Buku         <i class="fa fa-caret-down "></i></a>
                        <ul>
                            <li><a href="dashboard.php?halaman=pemrograman"><i class="fa fa-folder"></i> Pemrograman</a></li>
                            <li><a href="dashboard.php?halaman=filsafat"><i class="fa fa-folder"></i> Filsafat</a></li>
                            <li><a href="dashboard.php?halaman=politik"><i class="fa fa-folder"></i> Politik</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="dashboard.php?halaman=comments"><i class="fa fa-comments fa-2x "></i>Comments</a>
                    </li>
                    <li>
                        <a href="dashboard.php?halaman=logout"><i class="fa fa-sign-out fa-2x "></i>Logout</a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman'] == "pemrograman") {
                        include 'page/pemrograman.php';
                    } elseif ($_GET['halaman'] == "filsafat") {
                        include 'page/filsafat.php';
                    } elseif ($_GET['halaman'] == "politik") {
                        include 'page/politik.php';
                    } elseif ($_GET['halaman'] == "comments") {
                        include 'page/comments.php';
                    } elseif ($_GET['halaman'] == "add") {
                        include 'config/add.php';
                    } elseif ($_GET['halaman'] == "update") {
                        include 'config/update.php';
                    } elseif ($_GET['halaman'] == "delete") {
                        include 'config/delete.php';
                    } elseif ($_GET['halaman'] == "logout") {
                        include 'config/logout.php';
                    }
                } else {
                    include 'page/home.php';
                }
                ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../css/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../css/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../css/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="../css/morris/raphael-2.1.0.min.js"></script>
    <script src="../css/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../css/custom.js"></script>


</body>

</html>
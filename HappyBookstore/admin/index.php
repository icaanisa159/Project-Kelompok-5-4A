<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "tokobuku");

if (!isset($_SESSION['admin']))
{
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Happybook Store</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #F8DE7E;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="background-color: #F8DE7E;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=kategori"><i class="fa fa-tasks"></i> Kategori</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=buku"><i class="fa fa-dashboard"></i> Buku</a>
                    </li>				
                    <li>
                        <a href="index.php?halaman=pembelian"><i class="fa fa-shopping-cart"></i> Pembelian</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=laporan_pembelian"><i class="fa fa-file"></i> Laporan</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=pelanggan"><i class="fa fa-user"></i> Pelanggan</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
				</ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="buku")
                    {
                        include 'buku.php';
                    }
                    elseif($_GET['halaman']=="pembelian")
                    {
                        include 'pembelian.php';
                    }
                    elseif($_GET['halaman']=="pelanggan")
                    {
                        include 'pelanggan.php';
                    }
                    elseif($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif($_GET['halaman']=="tambahbuku")
                    {
                        include 'tambahbuku.php';
                    }
                    elseif($_GET['halaman']=="hapusbuku")
                    {
                        include 'hapusbuku.php';
                    }
                    elseif($_GET['halaman']=="ubahbuku")
                    {
                        include 'ubahbuku.php';
                    }
                    elseif($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                    elseif($_GET['halaman']=="pembayaran")
                    {
                        include 'pembayaran.php';
                    }
                    elseif($_GET['halaman']=="laporan_pembelian")
                    {
                        include 'laporan_pembelian.php';
                    }
                    elseif($_GET['halaman']=="kategori")
                    {
                        include 'kategori.php';
                    }
                    elseif($_GET['halaman']=="tambahkategori")
                    {
                        include 'tambahkategori.php';
                    }
                    elseif($_GET['halaman']=="hapuskategori")
                    {
                        include 'hapuskategori.php';
                    }
                }
                else
                {
                    include 'home.php';
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
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

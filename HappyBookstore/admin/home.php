<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <h2 style="color: black;">Selamat Datang Admin</h2><br><br><br><br>
    <div class="container">
        <center>
    <div class="row px-5">
        <div class="col-md-5 col-sm-10 mb-3">
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><i class="large material-icons">assignment</i></h5>
              <p class="card-text">
                <div class="sm-st-info">
                  <?php $tampil = mysqli_query($koneksi, "select * from kategori order by id_kategori desc");
                  $total = mysqli_num_rows($tampil);
                  ?>
                  <span><?php echo "$total"; ?></span>
                  Total Kategori
                </div>
              </p>
            </div>
          </div> <br>
        </div>
        <div class="col-md-4 col-sm-12 mb-3">
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><i class="large material-icons">book</i></h5>
              <p class="card-text">
                <div class="sm-st-info">
                  <?php $tampil = mysqli_query($koneksi, "select * from buku order by id_buku desc");
                  $total1 = mysqli_num_rows($tampil);
                  ?>
                  <span><?php echo "$total1"; ?></span>
                  Total Buku
                </div>
              </p>
            </div> 
          </div> <br>
        </div>
        <div class="col-md-5 col-sm-12 mb-3">
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><i class="large material-icons">shopping_cart</i></h5>
              <p class="card-text">
                <div class="sm-st-info">
                  <?php $tampil = mysqli_query($koneksi, "select * from pembelian order by id_pembelian desc");
                  $total1 = mysqli_num_rows($tampil);
                  ?>
                  <span><?php echo "$total1"; ?></span>
                  Total Pembelian
                </div>
              </p>
            </div> 
          </div> <br>
        </div>
        <div class="col-md-4 col-sm-12 mb-3">
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><i class="large material-icons">account_circle</i></h5>
              <p class="card-text">
                <div class="sm-st-info">
                  <?php $tampil = mysqli_query($koneksi, "select * from pelanggan order by id_pelanggan desc");
                  $total1 = mysqli_num_rows($tampil);
                  ?>
                  <span><?php echo "$total1"; ?></span>
                  Total Pelanggan
                </div>
              </p>
            </div> 
          </div>
        </div>
        </div>
        </center>
    </div>

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


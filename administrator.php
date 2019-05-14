<!--
###############################################################################################
# coded by  : Biongo Attacker                                                                 #
# pembuat   : Alsaskar Mirando Malalantang                                                    #
# Designer Gambar : Jhun Matoka                                                               #
# thanks to : Bintang Algaza, Wahyu Syaputra, Irsyad Assegaf, Timothi Mongi                   #
# Copyright : Biongo Attacker 2016 | All Right Reserved                                       #
###############################################################################################
-->

<?php include('akses.php');
if (!isset( $_SESSION['admin'] )) {
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="index.php";</script>';
}?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="gaya/al.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery1.11.3.js"></script>
    <title>Perpustakaan SMKN3 MANADO</title>
  </head>
  <body>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="administrator.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li><a href="data_peminjaman.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>  Data Peminjaman Buku</a></li>
         <li><a href="pinjam_buku.php"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>  Pinjam Buku</a></li>
         <li><a href="pengembalian_buku.php"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>  Pengembalian Buku</a></li>
         <li><a href="data_pengembalian.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>  Data Pengembalian Buku</a></li>
         <li><a href="ketentuan.php"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>  Ketentuan</a></li>
         <li><a href="tentang.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tentang</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
      </ul>
    </div>
    </div>
    </nav>
    
    <div class="container">
     <div class="row">
      <div align="center">
          <img src="image/header.jpg" width="2000" height="500" class="img-responsive">
      </div>
    </div>
  <div align="center" id="welcome">
    <h1> <?php print_r($_SESSION); ?></h1>
  </div>

     <script src="biongo.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
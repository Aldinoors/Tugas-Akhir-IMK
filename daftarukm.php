<?php 	include "akses.php";
		include "database/koneksi.php";
			// $sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
			//$data = mysql_fetch_array($sql);
			$aktif= $_SESSION['anggota'];
			$sql = mysql_query("SELECT * FROM mahasiswa WHERE username='$aktif' ") or die(mysql_error());
            $result=mysql_fetch_array($sql);

?>
<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp; UKM UNIVERSITAS SILIWANGI</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"> </a></li>
                        <li><a href="#">  </a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/*.png" class="img-responsive" />
                     
                    </li>
                    <li>
                        <a href="user.php"><i class="fa fa-desktop "></i>home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>EDIT<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="useredit.php">PROFIL</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="daftarukm.php"><i class="fa fa-edit "></i>Daftar UKM </a>
                    </li>

            </div>
        </nav>

<br>
     <form id="myform" onSubmit="return validasi()" action="daftarukmproses.php" method="post">
      <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
            <td> NPM</td>
            <td></td>
            <td>
                <input type="text" id="username" name="username" class="form-control" class="required">
            </td>
        </tr>
	    <tr>
	      <td>pilih ukm </td>
	      <td>  </td>
	      <td>
	         <select name="ukm" id="ukm" class="form-control">
	               <option value="MENWA">RESIMEN MAHASISWA</option>
                 <option value="PSM">PADUAN SUARA MAHASISWA</option>
                 <option value="SPOT">SILIWANGI PHOTO GRAFI</option>
                 <option value="KISI">KISI</option>
                 <option value="BASKET">BASKET</option>
                 <option value="TEATER">TEATER</option>
                 <option value="KAN">ANTI NARKOBA</option>
                 <option value="KOPMA">KOPERASI MAHASISWA</option>
                 <option value="PRAMUKA">PRAMUKA</option>
                 <option value="TARUNGDERAJAT">TARUNG DERAJAT</option>
	         </select>  
	    </tr>
	    <tr>
		  <td>&nbsp;</td>
		  <td></td>
		  <td><input type="submit" name="daftar" class="btn btn-primary" value="daftar"></td>
</table>

   </form>

   <script src="biongo.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

</body>
</html>
	       
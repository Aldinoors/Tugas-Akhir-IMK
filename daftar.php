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
                        <li><a href="index.php"> index </a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->

        <!-- /. NAV SIDE  -->
        <form  onSubmit="return validasi()" action="daftarproses.php" method="post">
      <table width="0" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
<br>
<br>
      <td> DAFTAR USER BARU </td>
          <tr>
            <td> USERNAME </td>
            <td></td>
            <td>
                <input type="text" id="username" name="username" class="form-control" class="required">
            </td>
        </tr>
        <tr>
            <td> PASSWORD </td>
            <td></td>
            <td>
                <input type="password" id="txtpassword" name="txtpassword" class="form-control" class="required" >
            </td>
        </tr>
        <tr>
            <td> Nama </td>
            <td></td>
            <td>
                <input type="text" id="nama" name="nama" class="form-control" class="required" >
            </td>
        </tr>
        <tr>
            <td> email </td>
            <td></td>
            <td>
                <input type="text" id="email" name="email" class="form-control" class="required" >
            </td>
        </tr>
        <td> level </td>
	      <td>  </td>
	      <td>
	         <select name="level" id="level" class="form-control">
	               <option value="anggota">Anggota</option>
           </select>  
           
           <tr>
             <tr>
            </tr>
            </tr>
		  <td>&nbsp;</td>
		  <td></td>
		  <td><input type="submit" name="daftar" class="btn btn-primary" value="daftar"></td>
</table>

   </form>
              
                 <!-- /. ROW  -->           
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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

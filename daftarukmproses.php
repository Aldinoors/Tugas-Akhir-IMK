<?php

if(isset($_POST['daftar'])){

    //untuk memasukan file koneksi ke database
	include("database/koneksi.php");

    $ukm      = $_POST['ukm'];
    $username   = $_POST['username'];

    $query = mysql_query("INSERT INTO ukm VALUES(NULL,'$ukm','$username')") or die(mysql_error());

    if($query){

    	echo "ANDA TELAH MASUK KE UKM<br>";
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=user.php">';

    }else{

    	echo "Maaf anda Gagal untuk menambahkan Data";
    }
}

?>

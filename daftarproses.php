<?php

if(isset($_POST['daftar'])){

    //untuk memasukan file koneksi ke database
	include("database/koneksi.php");

    $username        = $_POST['username'];
    $password        = $_POST['txtPassword'];
    $pass_md5        = md5($password);
    $nama            = $_POST['nama'];
    $email           = $_POST['email'];
    $level           = $_POST['level'];


    $query = mysql_query("INSERT INTO user VALUES(NULL,'$username','$pass_md5','$nama','$email','$level')") or die(mysql_error());

    if($query){

    	echo "User Baru telah di tambahkan<br>";
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=index.php">';

    }else{

    	echo "Maaf anda Gagal untuk menambahkan Data";
    }
}

?>

<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if (isset( $_SESSION['level'] )) {
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="index.php";</script>';
}
?>
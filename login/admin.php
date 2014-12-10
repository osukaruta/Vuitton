<?php //filename: admin.php
session_start();

if($_SESSION['login'] == 1){
	echo "<h2>Admin Area</h2>";
	echo "hanya bisa di akses jika sudah di login.";
	echo "<a href = 'logout.php'>LOG OUT</a>";
} else{
	echo "Anda Belum login, silakan login dulu.";
}


?>
<?php // filename: login_proses.php
session_start();

//buat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "lab");

$user =	$_POST['username'];
$pass =	$_POST['Password'];
//query sql
$sql = "SELECT * FROM user
		WHERE username = '$user'";
$hasil = mysqli_query($koneksi, $sql);

//cetak apakah  hasil query menemukan username yang cocok
if (mysqli_num_rows($hasil) == 0){
	echo "Username tidak di temukan .";
} else{
	echo "username di temukan";
	$baris = mysqli_fetch_assoc($hasil);
	$format	="$2y$10$";
	$hash	="halohalohalohalohalo22";
	$salt	=$format . $hash;
	$newpass	= crypt($pass, $salt);
	if($newpass ==  $baris['password']){
	echo "password cocok";
		$_SESSION['login'] = 1;
		header("Location: admin.php");
	}else {
		echo "password salah";
	}
}


?>
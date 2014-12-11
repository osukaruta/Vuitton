<head>
	<title>Login</title>
	<link href="img/lv.ico" rel="shortcut icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="white">

<?php session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from admin where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
if($cek){
$_SESSION['username']=$username;
?>
<center><img src="img/sukses.jpg" width="300px"/><br>
<h2>Anda berhasil login.</h2> <h2>Silahkan menuju <a href="home.php">Admin Page</a></h2>

<?php
}else{
?>

<center>
<img src="img/failed.png" width="300px"/><br>
<h2>Username / Password tidak dikenali.<br> Silahkan <a href="masuk.php">Login kembali</a></h2>
</center>

<?php
echo mysql_error();
}
?>
</center>

</div>
</body>
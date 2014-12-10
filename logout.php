<html>
	<head>
		<link href="img/lv.ico" rel="shortcut icon" />
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>

<div class="white">
<center>
<h2>
<?php session_start();
session_destroy();
echo "Anda berhasil logout. Silahkan menuju <a href='index.php' style='color:cyan;'>Halaman Utama</a>"
?>
</h2>
</center>
</div>
</html>
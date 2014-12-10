<head>
	<link href="img/lv.ico" rel="shortcut icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<?php session_start();
if(ISSET($_SESSION['username'])){
include "koneksi.php";
?>
<div class="white">
<center>
<image src="img/adminpage.png" width="300px"/>
<h2>Welcome to Admin Page</h2>
	<div id="menubawah">
		<ul>
			<li><a href="home.php">Admin Page</a></li>
			<li><a href="member.php">View Databases</a></li>
			<li><a href="admin_upload.php">Upload Item</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</center>
<?php
}else{
?>
<center>
<img src="img/blb.png"/>
Anda tidak dapat mengakses halaman ini. Silahkan<a href="masuk.php">Login
dahulu</a>
</center>
</div>
<?php
}
?>
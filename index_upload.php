<!DOCTYPE HTML>
<html>
<head>
	<link href="img/lv.ico" rel="shortcut icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="bungkus">
	<div id="atas">
		<div id="banner"></div>
		<div id="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="index_upload.php">Gallery</a></li>
				<li><a href="form.php">Register</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="masuk.php">Admin Login</a></li>
			</ul>
		</div>
	</div>
	
	<?php // filename : index.php
include("koneksi_upload.php");
//2. query sql
$sql = "SELECT * FROM gallery";
$hasil = mysqli_query($koneksi, $sql);
?>
<html>
<head>
	<title>Gallery</title>
	<style>
		.frame{
			width: 200px;
			height: 200px;
			display: inline-block;
		}
		
		.frame img{
			width: 180px;
			height: 100px;
		}
	</style>
</head>
<body>
<?php
while( $baris = mysqli_fetch_assoc($hasil)){//open while
?>
<div class="frame">
	<img src="<?php echo $baris['file'];?>"/>
	<span class="title"><?php echo $baris['title'];?></span>
	<span class="body"><?php echo $baris['body'];?></span>
</div>
<?php
}//tutup while
?>			<br/>
			<a href="member.php">View Databaes</a><br/>
			<a href="admin_upload.php">upload Item</a></br>
			<a href="logout.php">Logout</a>
</body>
</html>
	
	<div id="menubawah">
		<ul>
			<li><a href="#">Back to Top</a></li>
		</ul>
	</div>
</div>

</body>
</html>
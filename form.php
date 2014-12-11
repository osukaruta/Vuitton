<?php
// 1. koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$name = "vuitton";

$koneksi = mysqli_connect($host, $user, $pass, $name);

//test koneksi

if(mysqli_connect_errno()){
	die("koneksi DB gagal".
		mysqli_connect_error().
		"(".mysqli_connect_errno().")");
} else{
	
}

//jika form di submit
if(isset($_POST['simpan'])){

	 $nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$telp=$_POST['telp'];
	$email=$_POST['email'];
	$pasword=$_POST['pasword'];
	$no_ktp=$_POST['no_ktp'];
	$alamat=$_POST['alamat'];

	$nama = mysqli_real_escape_string($koneksi, $nama);
	$jenis_kelamin = mysqli_real_escape_string($koneksi, $jenis_kelamin);
	$telp = mysqli_real_escape_string($koneksi, $telp);
	$email = mysqli_real_escape_string($koneksi, $email);
	$pasword = mysqli_real_escape_string($koneksi, $pasword);
	$no_ktp = mysqli_real_escape_string($koneksi, $no_ktp);
	$alamat = mysqli_real_escape_string($koneksi, $alamat);
	
	$sql = "INSERT INTO vuitton (nama, jenis_kelamin, telp, email, pasword, no_ktp, alamat)
		VALUES('{$nama}', '{$jenis_kelamin}', '{$telp}', '{$email}', '{$pasword}', '{$no_ktp}','{$alamat}')";
	mysqli_query($koneksi, $sql);
	
	echo"Db berhasil";
}

//2. query SQL
$sql= "SELECT * FROM daftar";
$hasil = mysqli_query($koneksi, $sql);


?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Register</title>
	<link href="img/lv.ico" rel="shortcut icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="bungkus">
<div class="white">
	<div id="atas">
		<div id="banner"></div>
		<div id="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">Abous Us</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="form.php">Register</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="masuk.php">Admin Login</a></li>
			</ul>
		</div>
	</div>
	
	<div id="daftar">
		<table cellpadding="5">
		<form action="" method="POST">
			<tr><h1>Pendaftaran Member</h1></tr>
			<tr> 
				<td>
					<label id="nama">Nama Lengkap</label>
				</td>
				<td>
					<input type="text" name="nama" value="" class="kotak"/>
				</td>	
			</tr>

			<tr>
				<td>
					<label>Jenis Kelamin</label>
				</td>
				<td>
				<select name="jenis_kelamin">
					<option value="laki">Laki-laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
				</td>
			</tr>
			
			<tr> 
				<td>
					<label>No. Telp</label>
				</td>
				<td>
					<input type="text" name="telp" value="" class="kotak"/>
				</td>
			</tr>
			
			<tr> 
				<td>
					<label>Email</label>
				</td>
				<td>
					<input type="text" name="email" value="" class="kotak"/>
				</td>
			</tr>
			
			<tr> 
				<td>
					<label>Password</label>
				</td>
				<td>
					<input type="varchar" name="pasword" value="" class="kotak"/>
				</td>
			</tr>
			
			<tr> 
				<td>
					<label>No. Identitas</label>
				</td>
				<td>
					<input type="text" name="no_ktp" value="" class="kotak"/>
				</td>
			</tr>
			
			<tr>
				<td>
					<label>Alamat :</label>
				</td>
				<td colspan="4">
					<input type="text" name="alamat" value="" class="kotak"/>
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="simpan" value="Daftar" class="tombol">
					<input type="reset" name="reset" value="Batal" class="tombol">
				</td>
			</tr>

		</form>
		</table>
	</div>
	<div id="menubawah">
		<ul>
			<li><a href="#">Back to Top</a></li>
		</ul>
	</div>
	
	<div id="bawah"></div>
</div>
</div>
</body>
</html>

<?php
// 5. tutup koneksi database
mysqli_close($koneksi);
?>
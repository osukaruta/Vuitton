<?php
// 1. koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$name = "vuitton";

$koneksi = mysqli_connect($host, $user, $pass, $name);


//2. query SQL
$sql= "SELECT * FROM DAFTAR";
$hasil = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE HTML>
<html>
<head>
	<link href="img/favicon.ico" rel="shortcut icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="bungkus">
	<div class="white">
		<div id="atas">
			<div id="banner"></div>
		</div>
		<center>
		<table border="1" width="80%">
			<thead>
				<tr>
					<th>Nama</th>
					<th>jenis_kelamin</th>
					<th>telp</th>
					<th>email</th>
					<th>pasword</th>
					<th>no_ktp</th>
					<th>alamat</th>
				</tr>
			</thead>
			<tbody>
				<?php
					//3. menampilkan data select dari databases
					while($baris = mysqli_fetch_assoc($hasil)) {
						echo "<tr>";
						echo "<th>". $baris['nama']. "</th>";
						echo "<th>". $baris['jenis_kelamin']. "</th>";
						echo "<th>". $baris['telp']. "</th>";
						echo "<th>". $baris['email']. "</th>";
						echo "<th>". $baris['pasword']. "</th>";
						echo "<th>". $baris['no_ktp']. "</th>";
						echo "<th>". $baris['alamat']. "</th>";
			
						echo "</tr>";	
					}
					//4. hapus hasil query setelah digunakan
					mysqli_free_result($hasil);
				?>
			</tbody>
			</table>
			
		<div id="menubawah">
			<ul>
				<li><a href="home.php">Admin Page</a></li>
				<li><a href="member.php">View Databases</a></li>
				<li><a href="admin_upload.php">Upload Item</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		</center>
	</div>
</div>
</body>
</html>

<?php
// 5. tutup koneksi database
mysqli_close($koneksi);
?>
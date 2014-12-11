<!-- filename : admin.php -->
<html>
<head>
	<title>Upload</title>
	<link href="img/lv.ico" rel="shortcut icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<font color="white">
	<h2>Admin Gallery Upload</h2>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<table>		
			<tr>
				<td>Judul Gambar</td>    
				<td><input type="text" name="judul" /></td>
			</tr>
			<tr>
				<td>Keterangan Gambar</td> 
				<td><textarea name="body"></textarea></td>
			</tr>
			<tr>
				<td>Pilih File</td> 
				<td><input	type="file" name="gambar" /><td>
			</tr>
			<tr>
				<td rowspan="2"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="simpan" value="Save" />
					<input type="reset" name="reset" value="Cancel"/></td>
			</tr>
		</table>
	</form>

<div id="menubawah">
	<ul>
		<li><a href="home.php">Admin Page</a></li>
		<li><a href="member.php">View Databases</a></li>
		<li><a href="admin_upload.php">Upload Item</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>
</font>
</body>
</html>
<?php //filename: upload.php
include("koneksi_upload.php");

$judul 	=$_POST['judul'];
$ket 	=$_POST['body'];


$file_name 	= $_FILES['gambar']['name'];
$file_size 	= $_FILES['gambar']['size'];
$file_tmp 	= $_FILES['gambar']['tmp_name'];


$file_ext = strtolower(end(explode(".", $file_name)));
$ext_boleh = array("jpg", "jpeg", "png", "gif", "bmp");

if(in_array($file_ext, $ext_boleh))
{
	//ext file diperbolehkan
	if($file_size <= 2*1024*1024)
	{
	
		// move file to new dicrectory
		$sumber = $file_tmp;
		$tujuan = "gambar/" . $file_name;
		move_uploaded_file($sumber, $tujuan);
	
		//2. SQL QUERY
		$sql = "INSERT INTO gallery(title, body, file)
			Values('$judul', '$ket', '$tujuan')";
			mysqli_query($koneksi, $sql);
			
		//cek kalo query gagal
		if(mysqli_error($koneksi))
		{
		echo "Upload gambar gagal";
		echo mysqli_error($koneksi);
		die();
		}
	header('Location: index_upload.php');
	}else
	{
		echo "ukuran gambar terlalu besar . max 2mb";
	}
}else
{	
	echo "jenis file yg diperbolehkan hanyya gambar";
}
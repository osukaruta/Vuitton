<head>
	<link href="img/lv.ico" rel="shortcut icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<div class="white">
<center>
<img src="img/sent.png" width="300px"/><br>

<?php
    //alamat email tujuan bisa anda sesuaikan dengan email anda
    $tujuan = "oscar.adriyanto@gmail.com";
    //Ini diambilkan dari nama objek form yang sudah kita buat
    $judul = $_POST['judul'];
    $pesan = $_POST['pesan'];
    $pengirim=$_POST['pengirim'];
    $header = "From:$pengirim \r\n";
    $kirim = mail($tujuan,$judul,$pesan,$header);
    if( $kirim == true ) 
    {
        echo "<h2>Pesan berhasil terkirim<br></h2>";
		echo "<h2><a href='contact.html' style='color:cyan;'>Kembali Ke Kontak</a></h2>";
    }
    else
    {
        echo "<h2>Pesan gagal terkirim<br></h2>";
		echo "<h2><a href='contact.html' style='color:cyan;'>Kembali Ke Kontak</a></h2>";
    }
?>
</center>
</div>
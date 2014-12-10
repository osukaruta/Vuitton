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
        echo "Pesan berhasil terkirim<br>";
		echo "<a href='contact.html'>Kembali Ke Kontak</a>";
    }
    else
    {
        echo "Pesan gagal terkirim<br>";
		echo "<a href='contact.html'>Kembali Ke Kontak</a>";
    }
?>
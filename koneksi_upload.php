<?php //filename: koneksi.php

$host ="localhost";
$user ="root";
$pass ="";
$name ="vuitton";

$koneksi = mysqli_connect($host, $user, $pass, $name);

if(mysqli_connect_errno()){
	die(mysqli_connect_error());
}
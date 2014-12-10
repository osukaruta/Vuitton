<?php //file name: crypt.php

$pass	="rahasia";
$format	="$2y$10$";
$hash	="halohalohalohalohalo22";
$salt	=$format . $hash;


$newpass	= crypt($pass, $salt);
echo $newpass;
?>
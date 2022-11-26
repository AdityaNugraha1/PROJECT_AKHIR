<?php
include 'koneksi.php';

$idkeranjang	= $_POST['keranjang'];

echo implode(", ", $idkeranjang); // Will output email1@email.com, email2@email.com ...


?>
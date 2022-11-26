<?php
include 'koneksi.php';

foreach ($_POST['keranjang'] as $idkeranjang) {
    $sql      = "Select * from keranjang where keranjangid='$idkeranjang'";
    $query    = mysqli_query($connect, $sql);
    while ($data = mysqli_fetch_array($query)) {
        $username = $data['username'];
        $total_harga = $data['total_harga'];
        $productid = $data['productid'];
        $quantity = $data['quantity'];
        // $name = $data['name'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date('d-m-Y H:i:s');

        $insert = "INSERT INTO orderstatus VALUES('', '$waktu', '$username', '$productid', '$total_harga', '$quantity', ' ')";
        $query1    = mysqli_query($connect, $insert) or die(mysqli_error($connect));

    }
    
    $hapus    = "DELETE from keranjang where keranjangid='$idkeranjang'";
    $query    = mysqli_query($connect, $hapus) or die(mysqli_error($connect));
}
?>
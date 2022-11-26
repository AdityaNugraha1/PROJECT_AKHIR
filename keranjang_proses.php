<?php
include 'koneksi.php';


foreach ($_POST['keranjang'] as $idkeranjang) {
    $i = 0;

    $name = $_POST['name'][$i];
    $sql      = "Select * from keranjang where keranjangid='$idkeranjang'";
    $query    = mysqli_query($connect, $sql);
    while ($data = mysqli_fetch_array($query)) {
        $username = $data['username'];
        $total_harga = $data['total_harga'];
        $productid = $data['productid'];
        $quantity = $data['quantity'];
    }
    $insert = "INSERT INTO orderstatus VALUES('', NOW(), '$username', '$productid', '$total_harga', '$quantity', '$name')";
    $query1    = mysqli_query($connect, $insert) or die(mysqli_error($connect));
    $i++;

    // $hapus    = "DELETE from keranjang where keranjangid='$idkeranjang'";
    // $query    = mysqli_query($connect, $hapus) or die(mysqli_error($connect));
}

// for ($i = 0; $i < count($_POST['keranjang']); $i++)
// {
//     $idkeranjang=$_POST['keranjang'][$i];
//     $name = $_POST['name'][$i];
//     $sql      = "Select * from keranjang where keranjangid='$idkeranjang'";
//     $query    = mysqli_query($connect, $sql);
//     while ($data = mysqli_fetch_array($query)) {
//         $i=0;
//         $username = $data['username'];
//         $total_harga = $data['total_harga'];
//         $productid = $data['productid'];
//         $quantity = $data['quantity'];

//         $insert = "INSERT INTO orderstatus VALUES('', NOW(), '$username', '$productid', '$total_harga', '$quantity', '$name')";
//         $query1    = mysqli_query($connect, $insert) or die(mysqli_error($connect));
//         $i++;
//     }
// }
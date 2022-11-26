<?php
    include 'koneksi.php';

    $username = $_SESSION['username'];
    $sql = "SELECT a.keranjangid, a.total_harga, a.productid, a.quantity, a.catatanorder, c.name, c.penjelasan, c.foto, c.price 
    FROM keranjang a INNER JOIN product c ON a.productid=c.productid where a.username='$username';";

    $query    = mysqli_query($connect, $sql);

    if ($query) {
        header("Location:keranjang.php");
    } else {
        echo "Edit Data Gagal.";
    }
?>
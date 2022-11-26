<?php
include 'koneksi.php';

foreach ($_POST['keranjang'] as $idkeranjang) 
{
    $query    = mysqli_query($connect, $sql);

    
        $sql = "Select * from keranjang where keranjangid='$idkeranjang'";
        $query    = mysqli_query($connect, $sql);
        while ($data = mysqli_fetch_array($query)){

        $sql = "insert into .......... values($data['username'].............."
            $data['username']
            $data['total_harga']
            $data['productid']
            $data['quantity']
            $data['name']
        }
}

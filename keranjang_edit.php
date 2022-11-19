<?php
	include 'koneksi.php';

    $idedit	= $_POST['idedit'];
	$quantity = $_POST['quantity'];
    $catatanorder = $_POST['catatanorder'];

	$sql	= "UPDATE keranjang SET quantity = '$quantity', catatanorder = '$catatanorder', total_harga = (SELECT product.price FROM product INNER JOIN keranjang ON product.productid = keranjang.keranjangid)*'$quantity' 
                WHERE keranjangid = '$idedit';";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("Location:keranjang.php");
	} else {
		echo "Edit Data Gagal.";
	}
	
?>
<?php
	include 'koneksi.php';

    $idedit	= $_POST['idedit'];
	$quantity = $_POST['quantity'];

	$sql	= "UPDATE orderline SET quantity='$quantity' where orderlineid='$idedit';
               UPDATE keranjang SET total_harga =(SELECT a.quantity*b.price FROM orderline a 
               INNER JOIN product b ON a.productid=b.productid WHERE a.orderlineid='$idedit')";
               
	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect)); 

	if($query) {
		header("Location:keranjang.php");
	} else {
		echo "Edit Data Gagal.";
	}
	
?>
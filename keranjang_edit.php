<?php
	include 'koneksi.php';

    $idedit	= $_POST['idedit'];
	$quantity = $_POST['quantity'];

	$sql	= "UPDATE orderline SET quantity='$quantity' where orderlineid='$idedit';";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect)); 

	if($query) {
		header("Location:keranjang.php");
	} else {
		echo "Edit Data Gagal.";
	}
	
?>
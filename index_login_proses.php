<?php  
	session_start();
	include 'koneksi.php';

	$orderlineid 	= "";
	$productid  	= $_POST['productid'];
	$quantity	  	= $_POST['quantity'];
	$catatanorder	= $_POST['catatanorder'];
	

	$sql = "INSERT INTO orderline VALUES('$orderlineid','$productid', '$quantity', '$catatanorder')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location:index_login.php?message=tambah berhasil");
	} else {
		header("location:index_login.php?message=failed");
	}
?>
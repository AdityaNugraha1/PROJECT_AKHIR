<?php  
	session_start();
	include 'koneksi.php';

	$keranjangid 	= "";
	$username  		= $_POST['username'];
	$total_harga	= "(SELECT product.price FROM product INNER JOIN keranjang ON product.productid = keranjang.keranjangid)*'$quantity'";
	$productid		= $_POST['productid'];
	$quantity		= $_POST['quantity'];
	$catatanorder	= $_POST['catatanorder'];
	

	$sql = "INSERT INTO keranjang VALUES('$keranjangid','$username', '$total_harga', '$productid', '$quantity', '$catatanorder')";
	UPDATE keranjang SET total_harga = (SELECT product.price FROM product INNER JOIN keranjang ON product.productid = keranjang.keranjangid)*'$quantity' WHERE keranjangid = '$idedit';

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location:index_login.php?message=tambah berhasil");
	} else {
		header("location:index_login.php?message=failed");
	}
?>
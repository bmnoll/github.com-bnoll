<?php
	$id=$_GET['id'];
	include('adminConn.php');
	mysqli_query($conn,"DELETE FROM items WHERE id='$id'");
	header('location:adminIndex.php');
?>
<?php
	include('adminConn.php');
	$id=$_GET['id'];
	
	$name=$_POST['name'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$photo=$_POST['photo'];
	
	mysqli_query($conn,"update `items` set name='$name', description='$description', price='$price', photo='$photo' where id='$id'");
	header('location:adminIndex.php');
?>
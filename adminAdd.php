<?php
	include('adminConn.php');
	
	$name=$_POST['name'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$photo=$_POST['photo'];
		
	

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$photo = $_POST['photo'];
	
	if (!$conn) {
	
		  die("Connection failed: " . mysqli_connect_error());
	
	}
	
	
	
	$sql = "INSERT INTO items (name, description, price, photo) VALUES ('$name', '$description','$price', '$photo')";
	
	if (mysqli_query($conn, $sql)) {
	
		  echo '<li><iframe src="https://giphy.com/embed/1Z6BpMnZUB32" width="480" height="240" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></li>';
		  } 
	else 
		  {
		  
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
		  }
	mysqli_close($conn);
	}
	
	header('location:adminIndex.php');
?>
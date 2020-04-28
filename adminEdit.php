<?php require "bootstrapStyleSheet.php"; ?>
<?php require 'header.php'; ?>
<br/>
<br/>
<?php
	include('adminConn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `items` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<br/>
<br/>
<div class="container">
    <div class="row text-center">
        <div class="mx-auto">
            <div class="card text-center">
                <div class="container">
                    <div class="row text-center">
                        <br/>
							<div>
								<h2>Edit Product</h2>
								<br/>
								<form method="POST" action="adminUpdate.php?id=<?php echo $id; ?>">
									<label>Name:</label>
									<input type="text" value="<?php echo $row['name']; ?>" name="name">
									<label>Description:</label>
									<input type="text" value="<?php echo $row['description']; ?>" name="description">
									<label>Price:</label>
									<input type="text" value="<?php echo $row['price']; ?>" name="price">
									<label>Photo:</label>
									<input type="text" value="<?php echo $row['photo']; ?>" name="photo">
									<br/>
									<br/>
									<input type="submit" class="btn btn-primary" name="submit">
									<a href="adminIndex.php" class="btn btn-primary">Back</a>
								</form>
							</div>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</br>
<?php require 'footer.php'; ?>
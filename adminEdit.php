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

<div class="container">
    <div class="row text-center">
      	<div class="mx-auto">
        	<div class="card text-center">
				<br/>
				<h2>Edit Product</h2>
				<br/>
				<form method="POST" action="adminUpdate.php?id=<?php echo $id; ?>">
					<div class="form-group row">
    					<label class="col-4 col-form-label" for="name">Name:</label>
						<div class="col-7">
      						<div class="input-group">
        						<div class="input-group-addon">
          							<i class="fa fa-address-card"></i>
        						</div> 
    							<input type="name" class="form-control" id="name" value="<?php echo $row['name']; ?>" name = "name">
							</div>
						</div>
					</div>
  					<div class="form-group row">
    						<label class="col-4 col-form-label" for="description">Description:</label>
							<div class="col-7">
      							<div class="input-group">
        							<div class="input-group-addon">
          								<i class="fa fa-address-card"></i>
        							</div> 
    								<input type="description" class="form-control" id="description" value="<?php echo $row['description']; ?>" name = "description">
								</div>
							</div>
						</div>
						<div class="form-group row">
    						<label class="col-4 col-form-label" for="price">Price:</label>
							<div class="col-7">
      							<div class="input-group">
        							<div class="input-group-addon">
          								<i class="fa fa-address-card"></i>
        							</div> 
    								<input type="price" class="form-control" id="price" value="<?php echo $row['price']; ?>" name = "price">
								</div>
							</div>
						</div>
						<div class="form-group row">
    						<label class="col-4 col-form-label" for="photo">Photo Location:</label>
							<div class="col-7">
      							<div class="input-group">
        							<div class="input-group-addon">
          								<i class="fa fa-address-card"></i>
        							</div>
    								<input type="photo" class="form-control" id="photo" value="<?php echo $row['photo']; ?>" name = "photo">
								</div>
							</div>
						</div>
						<br/>
						<label class="col-7 col-form-label" style="color:red"> *If you click the sumbit button: one forward slash ( \ ) in the photo's location will not be read, use two forward slashes ( \\ ) and the location will be read correctly </label>
						<br/>
						<br/>
					<input type="submit" class="btn btn-primary" name="submit">
					<a href="adminIndex.php" class="btn btn-primary">Back</a>
				</form>
                <br/>
            </div>
        </div>
    </div>
</div>
</br>
<?php require 'footer.php'; ?>
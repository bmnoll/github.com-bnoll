<?php require "bootstrapStyleSheet.php"; ?>
<?php require 'header.php'; ?>
<br/>
<br/>
<div class="container-fluid">
    <div class="row text-center">
		<div class= "col">
        	<div class="mx-auto">
            	<div class="card text-center">
                	<div class="container">
						<br/>
						<table border="1">
							<thead>
								<th>Name</th>
								<th>Description</th>
								<th>Price</th>
								<th>Photo</th>
								<th></th>
							</thead>
							<tbody>
									<?php
										include('adminConn.php');
										$query=mysqli_query($conn,"select * from `items`");
										while($row=mysqli_fetch_array($query)){
									?>
								<tr>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['description']; ?></td>
									<td><?php echo $row['price']; ?></td>
									<td><?php echo $row['photo']; ?></td>
									<td>
										<a href="adminEdit.php?id=<?php echo $row['id']; ?>">Edit</a>
										<a href="adminDelete.php?id=<?php echo $row['id']; ?>">Delete</a>
									</td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<br/>
					</div>
				</div>
			</div>
			<br/>
			<a href="Index.php" class="btn btn-primary">View Change(s) Made to Product Page</a>
		</div>
		<div class= "col">
        	<div class="card text-center">
				<div>
					<h2> Add a Product </h2>
					<br/>
					<form method="POST" action="adminAdd.php">
					<div class="form-group row">
						<label class="col-4 col-form-label" for="name">Name:</label>
						<div class="col-7">
      						<div class="input-group">
       							<div class="input-group-addon">
          							<i class="fa fa-address-card"></i>
        						</div> 
								<input type="name" class="form-control" id="name" name = "name">
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
								<input type="description" class="form-control" id="description" name = "description">
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
								<input type="price" class="form-control" id="price" name = "price">
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
								<input type="photo" class="form-control" id="photo" name = "photo">
							</div>
						</div>
					</div>
						<label class="col-7 col-form-label" style="color:red"> *When adding the photo's location: one forward ( \ ) slash in the photo's location will not be read, use two forward slashes ( \\ ) and the location will be read correctly </label>
						<br/>
						<br/>
						<button name="submit" class="btn btn-primary" type="submit">All good?</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</br>
<?php require 'footer.php'; ?>














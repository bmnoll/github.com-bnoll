<?php require "bootstrapStyleSheet.php"; ?>
<?php require 'header.php'; ?>
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
							<h2> Add a Product </h2>
							<br/>
								<form method="POST" action="adminAdd.php">
									<label>Name: </label><input type="text" name="name">
									<label>Description: </label><input type="text" name="description">
									<label>Price: </label><input type="text" name="price">
									<label>Photo: </label><input type="text" name="photo">
									<br/>
									<br/>
									<button name="submit" class="btn btn-primary" type="submit">All good?</button>
								</form>
							</div>
					</div>
                    <div class="row text-center">
							<h2> Edit or Delete </h2>
					</div>
							<br/>
					<div class="row text-center">
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
									
					</div>
									<br/>
									<br/>
									<div class="row">
									<a href="admin.php" class="btn btn-primary">Return</a>
									</div>
									<br/>
									<br/>
					       
                </div>
				<br/>
            </div>
        </div>
    </div>
</div>
</br>
<?php require 'footer.php'; ?>














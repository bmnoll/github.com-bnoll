<?php require "bootstrapStyleSheet.php"; ?>
<?php require 'header.php'; ?>
<div>
	<h2> Add a Product </h2>
	<br/>
		<form method="POST" action="adminAdd.php">
			<label>Name: </label>
			<input type="text" name="name">
			<label>Description: </label>
			<input type="text" name="description">
			<label>Price: </label>
			<input type="text" name="price">
			<label>Photo: </label>
			<input type="text" name="photo">
			<br/>
			<br/>
			<button name="submit" class="btn btn-primary" type="submit">All good?</button>
		</form>
</div>
<?php require 'footer.php'; ?>
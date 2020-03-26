<html>
<?php require 'input.php'?>
    <form action="process.php" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
    <label class="col-4 col-form-label" for="name">Design name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-address-card"></i>
        </div> 
        <input name="name" class="form-control" id="name" type="text">
      </div>
    </div>
  </div>
  </br>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="description">Description</label> 
    <div class="col-8">
      <input name="description" class="form-control" id="description" type="text">
    </div>
  </div> 
  </br>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="price">Price</label> 
    <div class="col-8">
      <input name="price" class="form-control" id="price" type="text">
    </div>
  </div>
  </br>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="file" name="photo" />
    </br>
    </br>
      <button name="submit" class="btn btn-primary" type="submit">All good?</button>
    </div>
  </div>
      </form>
</html>
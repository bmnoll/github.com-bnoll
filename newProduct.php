<html>
<?php require 'header.php'; ?>
<?php require 'bootstrapStyleSheet.php'; ?>
<br/>
<br/>
<div class="container">
      <div class="row text-center">
      <div class="mx-auto">
        <div class="card text-center">
    <form action="process.php" method="POST" enctype="multipart/form-data">
    <br/>
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
    <label class="col-4 col-form-label" for="photo">Photo File Location</label> 
    <div class="col-8">
      <input name="photo" class="form-control" id="photo" type="text">
    </div>
  </div>
      <button name="submit" class="btn btn-primary" type="submit">All good?</button>
      </form>
      </div>
      </div>
      </div>
      </div>
</html>
<br/>
<br/>
<?php require 'footer.php'; ?>
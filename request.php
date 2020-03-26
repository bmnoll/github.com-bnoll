<html>
<?php require 'header.php'; ?>
<?php require 'styleSheet.php'; ?>
<br/>
<h2 class="text-center">
Want to request a new hat, sweatshirt, etc. design?
  </h2>
  <h2 class="text-center">
How about a logo or animation?
  </h2>
  <br/>
<div class="container">
      <div class="row text-center">
      <div class="mx-auto">
        <div class="card text-center">
    <form action="processEmail.php" method="POST" enctype="multipart/form-data">
    <br/>
    <div class="form-group row">
    <label class="col-4 col-form-label" for="name">Name</label> 
    <div class="col-7">
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
    <label class="col-4 col-form-label" for="email">Email</label> 
    <div class="col-7">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-address-card"></i>
        </div> 
        <input name="email" class="form-control" id="email" type="text">
      </div>
    </div>
  </div>
  </br>
    <div class="form-group row">
    <label class="col-4 col-form-label" for="designName">Design name</label> 
    <div class="col-7">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-address-card"></i>
        </div> 
        <input name="designName" class="form-control" id="designName" type="text">
      </div>
    </div>
  </div>
  </br>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="description">Description</label> 
    <div class="col-7">
    <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
  </div>
  </br>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="photo">Link to a refrence image?</label> 
    <div class="col-7">
      <input name="photo" class="form-control" id="photo" type="text">
    </div>
  </div>
      <button name="submit" class="btn btn-primary" type="submit">All good?</button>
      </form>
      <h3><?php require "processEmail.php"?></h3>
      </div>
      </div>
      </div>
      </div>
</html>
<br/>
<br/>
<div class="container text-white bg-dark p-4">
      <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>LoSuh Designs</strong><br>
            <abbr title="Phone"></abbr> (724) 581-3782
          </address>
          <address>
            <strong>Brandon Noll</strong><br>
            <a href="mailto:#">brandon.noll@icloud.com</a>
          </address>
      </div>
    </div>
<?php require 'footer.php'; ?>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be exactly 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      <?php require_once 'process.php'; ?>
      <form action="process.php" method="POST" enctype="multipart/form-data">
      <div class="form-group row">
    <label class="col-4 col-form-label" for="text">Design name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-address-card"></i>
        </div> 
        <input name="text" class="form-control" id="text" type="text">
      </div>
    </div>
  </div>
  </br>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="text1">Price</label> 
    <div class="col-8">
      <input name="text1" class="form-control" id="text1" type="text">
    </div>
  </div>
  </br>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="text2">Description</label> 
    <div class="col-8">
      <input name="text2" class="form-control" id="text2" type="text">
    </div>
  </div> 
  </br>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="text3">Price</label> 
    <div class="col-8">
      <input name="text3" class="form-control" id="text3" type="text">
    </div>
  </div>
  </br>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="file" name="image" />
    </br>
    </br>
      <button name="submit" class="btn btn-primary" type="submit">All good?</button>
    </div>
  </div>
      </form>
   </body>
</html>
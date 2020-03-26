<!DOCTYPE html>
<html lang="en">
<?php 
  require 'header.php';
?>
  <body>
  </br>
  </br>
  <h2 class="text-center">
    Ah a blank canvas
  </h2>
  </br>
  <hr>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">

            </h5>
            <p class="card-text"><?php echo $row['description']; ?></p>
            <h5 class="card-title"><?php echo $row['price']; ?></h5>
            <a href="#" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
      </div>
    </div>
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
    <?php 
      require 'footer.php';
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script 
      src="js/jquery-3.3.1.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script 
      src="js/popper.min.js">
    </script>
    <script 
      src="js/bootstrap-4.3.1.js">
    </script>
  </body>
</html>
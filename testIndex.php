<!DOCTYPE html>
<html lang="en">
<?php 
  require 'header.php';
  require 'outputPhoto.php';
?>
  <body>
          <div class="item active">
             <div align="center">
               <video autoplay>
                 <source src="video\eye-stalk.3gp" width="2000" height="300" type="video/mp4">
                </video>
              </div>
          </div>
  </br>
  </br>
  <h2 class="text-center">
    LoSuh Designs Products
  </h2>
  </br>
  <hr>
    <h3 class="text-center">
      Dad Hats
    </h3>
    </br>
    <?php
      $servername = "localhost";
      $database = "csc206noll";
      $username = "root";
      $password = "password";
    
      $conn = mysqli_connect($servername, $username, $password, $database);
      if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
      }
    $result = $conn -> query("SELECT * FROM items") or die ($conn_error);
    ?>
    <div class="row text-center">
            <?php while ($row = $result -> fetch_assoc()):?>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="<?php echo $row['photo']; ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">
              <?php 
                echo $row['name']; 
              ?>
            </h5>
            <p class="card-text"><?php echo $row['description']; ?></p>
            <h5 class="card-title"><?php echo $row['price']; ?></h5>
            <a href="#" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
            <?php endwhile; ?>
    </div>
    <?php 
      require 'carouselCode.php'
    ?>
     <h3 class="text-center">
      Crews
    </h3>
     </br>
     <?php
      //$servername = "localhost";
      //$database = "csc206noll";
      //$username = "root";
      //$password = "password";
    
      //$conn = mysqli_connect($servername, $username, $password, $database);
      //if($conn->connect_error){
        //die("Connection failed: " . $conn->connect_error);
      //}
    $result = $conn -> query("SELECT * FROM items") or die ($conn_error);
    ?>

    <div class="row text-center">
            <?php while ($row = $result -> fetch_assoc()):?>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="<?php echo $row['photo']; ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">
              <?php 
                echo $row['name']; 
              ?>
            </h5>
            <p class="card-text"><?php echo $row['description']; ?></p>
            <h5 class="card-title"><?php echo $row['price']; ?></h5>
            <a href="#" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
            <?php endwhile; ?>
    </div>
    </br>
    <?php 
      mysqli_close($conn);
    ?>
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
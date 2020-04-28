<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'; ?>
  <body>
  <?php require 'videoHeader.php'; ?>
  </br>
  </br>
  <h2 class="text-center"> LoSuh Designs Products </h2>
  <hr>
    <h3 class="text-center"> Dad Hats </h3>
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
    <div class="container">
      <div class="row text-center">
          <?php while ($row = $result -> fetch_assoc()):?>
        <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="<?php echo $row['photo']; ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> 
              <?php echo $row['name']; ?>
            </h5>
            <p class="card-text">
              <?php echo $row['description']; ?>
            </p>
            <h5 class="card-title">
              <?php echo $row['price']; ?>
            </h5>
            <a href="#" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      </div>
    </div>
    <?php require 'carouselCode.php' ?>
     </br>
    <?php 
      require 'footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
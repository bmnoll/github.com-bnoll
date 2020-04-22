<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    <head> 
        <body> 
            <div class="container"> 
                <div id="accordion"> 
                <div class="card"> 
                        <div class="card-header"> 
                            <a class="collapsed card-link" data-toggle="collapse" href="#description1">  
                               Select a Design  
                             </a> 
                        </div> 
                        <div id="description1" 
                             class="collapse" 
                             data-parent="#accordion"> 
                            <div class="card-body"> 
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
                                    <h5 class="card-title">
                                    <?php echo $row['price']; ?>
                                    </h5>
                                </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            </div>
                            </div>
                            <?php 
                            mysqli_close($conn);
                            ?>
                        </div>
                            </div> 
                        </div> 
                    </div>
  
                    <div class="card"> 
                        <div class="card-header"> 
                            <a class="collapsed card-link" 
                               data-toggle="collapse"
                               href="#description2">  
                               Select a Color for your Hat  
                             </a> 
                        </div> 
                        <div id="description2" 
                             class="collapse" 
                             data-parent="#accordion"> 
                            <div class="card-body"> 
                               Bootstrap is free and open-source  
                               collection of tools for creating  
                               websites and web applications. 
                            </div> 
                        </div> 
                    </div>
                </div> 
            </div> 
        </body>
</html>
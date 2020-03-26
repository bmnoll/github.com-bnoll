<?php
if(!empty($_GET['id'])){
    //DB details
    $servername = "localhost";
    $database = "csc206noll";
    $username = "root";
    $password = "password";
    
    //Create connection and select DB
    $conn = new mysqli($servername, $username, $password, $database);
    
    //Check connection
    if($conn->connect_error){
       die("Connection failed: " . $conn->connect_error);
    }
    
    //Get image data from database
    $result = $conn->query("SELECT photo FROM items WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0)
    {
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['photo']; 
    }
    else
    {
        echo 'Image not found...';
    }
}
?>
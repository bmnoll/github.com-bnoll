<?php
if(isset($_POST["submit"])){
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
    }
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $servername = "localhost";
        $database = "csc206noll";
        $username = "root";
        $password = "password";
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        
        $insert = $conn->query("INSERT into items (phot) VALUES ('$imgContent')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
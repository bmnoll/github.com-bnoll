<?php
$mysqli = new mysqli('localhost', 'root', 'password', 'csc206noll') or die(mysqli_error($mysqli));
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
}
    

?>
<?php
$servername = "localhost";
$database = "csc206noll";
$username = "root";
$password = "password";

$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $photo = $_FILES['photo'];

if (!$conn) {

      die("Connection failed: " . mysqli_connect_error());

}

echo "Connected successfully";

$sql = "INSERT INTO items (name, description, price, photo) VALUES ('$name', '$description','$price', '$photo')";

if (mysqli_query($conn, $sql)) {

      echo "New record created successfully";

} else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
mysqli_close($conn);
}
?>
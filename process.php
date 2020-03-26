<?php require 'header.php'; ?>
<br/>
<br/>
      <div class="row">
      <div class="mx-auto">
<?php
require 'styleSheet.php';
$servername = "localhost";
$database = "csc206noll";
$username = "root";
$password = "password";

$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $photo = $_POST['photo'];

if (!$conn) {

      die("Connection failed: " . mysqli_connect_error());

}

$photo = $conn->real_escape_string($photo);

$sql = "INSERT INTO items (name, description, price, photo) VALUES ('$name', '$description','$price', '$photo')";

if (mysqli_query($conn, $sql)) {

      echo '<li><iframe src="https://giphy.com/embed/1Z6BpMnZUB32" width="480" height="240" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></li>';
      } 
else 
      {
      
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);

      }
mysqli_close($conn);
}
?>
        </div>
    </div>
    <br/>
    <br/>
<?php require 'footer.php'; ?>
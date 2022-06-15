

<?php
$name= $_POST["product_name"];
$price= $_POST["product_price"];
$image= $_POST["filebutton"];
$qty= $_POST["quantity"];
?>
<?php

$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname= "store";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql = "INSERT INTO users (id, product_name, product_price, filebutton, quantity)
 VALUES (NULL, '$name', '$price', '$image', '$qty')";

if ($conn->query($sql) === TRUE) {
    $message = "Product added succesfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
  
  else {
    header("location:product_form.php");
    // echo'<script> window.location="product_form.php"; </script> ';
  }
  
  $conn->close();
  ?>

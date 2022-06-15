<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    

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

$sql = "SELECT product_name, product_price, filebutton, quantity FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div id="item">';
        echo  "<br> <img src='".  $row["filebutton"].  "' width=180 height=200 <br>"."<br>". $row["product_name"]. "<br> Price: ". $row["product_price"].  "<br> Qty: " .$row["quantity"];
        echo "<br> <button id='btn'>Add to cart</button>";
        echo '</div>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>

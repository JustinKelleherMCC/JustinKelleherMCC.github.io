<?php
$servername = "localhost";
$username = "justinkelleher";
$password = "";
$dbname = "dogBarn";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// // Create database
// $sql = "CREATE DATABASE dogBarn";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

$sql = "CREATE TABLE shoppingCart (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
product VARCHAR(30) NOT NULL,
price INT(6) NOT NULL,
quantity INT(6)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO shoppingCart (product, price)
VALUES ('Tee', '10')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
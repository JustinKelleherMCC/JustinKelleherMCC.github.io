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
    
    $sql = "UPDATE shoppingCart SET quantity = quantity + 1 WHERE id = 2";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

  header("Location: thankyou.php");
  exit();
?>
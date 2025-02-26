<?php

// Create connection
// $conn = mysqli_connect("localhost","root","","patrick_devops_db");

$conn = mysqli_connect("127.0.0.1", "root", "", "patrick_devops_db", 4306);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

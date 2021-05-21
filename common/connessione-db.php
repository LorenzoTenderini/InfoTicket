<?php
$servername = "localhost";
$username = "root";
$password = "";
$name_db = "infoticket";

// Create connection
$conn = new mysqli($servername, $username, $password, $name_db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

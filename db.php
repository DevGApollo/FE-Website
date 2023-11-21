<?php
$servername = "204.11.58.166:3306";
$username = "apollkx7_dcb";
$password = "Apollo#4872!C";
$dbname = "apollkx7_dcbindia";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
   
?>
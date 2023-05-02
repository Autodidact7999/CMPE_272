<?php
// $servername = "localhost";
// $username = "id19652605_root";
// $password = "Password@123";
// $dbname = "id19652605_cmpe272";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cmpe272";

// Create connection
$conn = new mysqli("localhost", "id19786432_root", "Password@123", "id19786432_cmpe272");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
// $sql = "CREATE TABLE Users (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// home_address VARCHAR(100),
// home_phone VARCHAR(20),
// mobile_phone VARCHAR(20),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";
$sql = "CREATE TABLE Services (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  short_description VARCHAR(500) NOT NULL,
  long_description VARCHAR(1500) NOT NULL,
  images VARCHAR(1000),
  review INT DEFAULT 0,
  visit INT DEFAULT 0,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table Users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
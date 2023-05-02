<?php

$servername = "localhost";
$username = "id19786432_root";
$password = "Password@123";
$dbname = "id19786432_cmpe272";

$conn = mysqli_connect("localhost",$username, $password, $dbname);
	
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$qsql = $sql = "CREATE TABLE questions (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  question VARCHAR(150) NOT NULL
  )";
$sql = "CREATE TABLE answers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(150) NOT NULL,
    Q1 VARCHAR(20) NOT NULL,
    Q2 VARCHAR(20) NOT NULL,
    Q3 VARCHAR(20) NOT NULL,
    Q4 VARCHAR(20) NOT NULL,
    Q5 VARCHAR(20) NOT NULL,
    Q6 VARCHAR(20) NOT NULL,
    Q7 VARCHAR(20) NOT NULL,
    Q8 VARCHAR(20) NOT NULL,
    Q9 VARCHAR(20) NOT NULL,
    Q10 VARCHAR(20) NOT NULL
    )";
  
  if ($conn->query($sql) === TRUE && $conn->query($qsql) === TRUE ) {
    echo "Tables created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
?>
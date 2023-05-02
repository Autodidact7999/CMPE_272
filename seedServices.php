<?php
$conn = mysqli_connect("localhost", "id19652625_admin", "Password@123", "id19652625_cmpe272");
		
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}





$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES 
('Cracking the Coding Interview','Programming Questions and Solutions 6th Edition','189 programming interview questions, ranging from the basics to the trickiest algorithm problems.','https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1441834930i/25707092._UY630_SR1200,630_.jpg',5,0,6);";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}





$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('Computer Network','Pearson; 8th edition (September 13, 2020)','Kurose, James F.; Ross, Keith. Computer Networking (2-downloads) (p. 17). Pearson Education. Kindle Edition.','https://m.media-amazon.com/images/I/517X347vzZL.jpg',3,0,6);";


if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}



$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('Operating Systems: Principles and Practice','Operating Systems: Principles and Practice is a textbook for a first course in undergraduate operating systems.','Operating Systems: Principles and Practice is a textbook for a first course in undergraduate operating systems.','https://m.media-amazon.com/images/I/51UjzO152QL._AC_SY780_.jpg',5,0,6);";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}

$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('C Programming Language','The authors present the complete guide to ANSI standard C language programming.','Written by the developers of C, this new version helps readers keep up with the finalized ANSI standard for C ','https://pictures.abebooks.com/isbn/9780131103627-us-300.jpg',4,0,6)";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}

$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('The Linux Programming Interface','A Linux and UNIX System Programming Handbook','The Linux Programming Interface (TLPI) is the definitive guide to the Linux and UNIX programming ','https://m.media-amazon.com/images/I/51GhTMoAspL._AC_SY780_.jpg',3,0,6);";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}



$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('The Bible of Algorithms and Data Structures','A Complex Subject Simply Explained (Runtime Complexity, Big O Notation, Programming)','The field of algorithms and data structures is one of the most important in computer science. You will rarely be invited to a coding interview at Google, Microsoft or Facebook and not be asked questions about it.','https://m.media-amazon.com/images/I/51WtSlX2bcL.jpg',4,0,6);";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}



$conn->close();
?>
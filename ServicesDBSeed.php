<?php
$conn = mysqli_connect("localhost", "id19652625_admin", "Password@123", "id19652625_cmpe272");
		
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}


$sql="ALTER TABLE Services
ADD store_id INTEGER(1);";


$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('Cracking the Coding Interview','Programming Questions and Solutions 6th Edition','189 programming interview question ranging from the basics to the trickiest algorithm problems.','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FCracking-Coding-Interview-Programming-Questions%2Fdp%2F0984782850&psig=AOvVaw1M61prPFDA8NrxstZ3186Z&ust=1670836614217000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLC6nMyd8fsCFQAAAAAdAAAAABAD',5,0,4);";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}





$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('Computer Network','Pearson; 8th edition (September 13, 2020)','Kurose, James F.; Ross, Keith. Computer Networking (2-downloads) (p. 17). Pearson Education. Kindle Edition.','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FComputer-Networking-2-downloads-James-Kurose-ebook%2Fdp%2FB08KF4RQ5N&psig=AOvVaw04Ht5_YfimdK1II-i5OdIk&ust=1670836801121000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCMD4w6Ke8fsCFQAAAAAdAAAAABAD',3,0,4);";


if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}



$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('Operating Systems: Principles and Practice','Operating Systems: Principles and Practice is a textbook for a first course in undergraduate operating systems.','Operating Systems: Principles and Practice is a textbook for a first course in undergraduate operating systems. In use at dozens of top tier universities, and written by two leading operating systems researchers with decades of experience successfully teaching complex topics to thousands of students, this textbook provides: A path for students to understand high level concepts all the way down to working code. Extensive worked examples integrated throughout the text provide students concrete guidance for completing homework assignments.','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FOperating-Systems-Principles-Thomas-Anderson%2Fdp%2F0985673524&psig=AOvVaw1YC1b97wOnbyZAK0qNrblo&ust=1670836992792000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIDE_P2e8fsCFQAAAAAdAAAAABAD',5,0,4);";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}

$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('C Programming Language','The authors present the complete guide to ANSI standard C language programming.','Written by the developers of C, this new version helps readers keep up with the finalized ANSI standard for C while showing how to take advantage of Cs rich set of operators, economy of expression, improved control flow, and data structures.','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FProgramming-Language-2nd-Brian-Kernighan%2Fdp%2F0131103628&psig=AOvVaw2gbUYMlxlMbCcZMaSuNifM&ust=1670837046407000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLjSsZef8fsCFQAAAAAdAAAAABAD',4,0,4);";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}

$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('The Linux Programming Interface','A Linux and UNIX System Programming Handbook','The Linux Programming Interface (TLPI) is the definitive guide to the Linux and UNIX programming interface—the interface employed by nearly every application that runs on a Linux or UNIX system.
  In this authoritative work, Linux programming expert Michael Kerrisk provides detailed descriptions of the system calls and library functions that you need in order to master the craft of system programming, and accompanies his explanations with clear, complete example programs.','https://www.google.com/url?q=https://www.barnesandnoble.com/w/linux-programming-interface-michael-kerrisk/1101576981%3Fean%3D9781593272913&sa=U&ved=0ahUKEwjtuJbyn_H7AhUvTjABHfnwDLIQrzwIgQE&usg=AOvVaw0ymTn4cdWSUPUnFsCoT4hJ',3,0,4);";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}



$sql = "INSERT INTO Services (title, short_description, long_description, images, review, visit,store_id) VALUES ('The Bible of Algorithms and Data Structures','A Complex Subject Simply Explained (Runtime Complexity, Big O Notation, Programming)','The field of algorithms and data structures is one of the most important in computer science. You will rarely be invited to a coding interview at Google, Microsoft or Facebook and not be asked questions about it. This is because these companies know how valuable the skills taught are. It does not matter if you are into machine learning, ethical hacking, cyber security or enterprise software engineering. You will always need to be able to work with algorithms and data structures.','https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com%2FBible-Algorithms-Data-Structures-Programming-ebook%2Fdp%2FB08GGGGY5W&psig=AOvVaw2sA0-QY0zOzI6NcNV0ZB71&ust=1670837358241000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCIjW7aug8fsCFQAAAAAdAAAAABAD',4,0,4);";

if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting rows: " . $conn->error;
}



$conn->close();
?>
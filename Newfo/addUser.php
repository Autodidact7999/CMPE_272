<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "id19786432_root", "Password@123", "id19786432_cmpe272");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['firstname'];
		$last_name = $_REQUEST['lastname'];
		$email = $_REQUEST['email'];
		$home_address = $_REQUEST['home_address'];
		$home_phone = $_REQUEST['home_phone'];
        $mobile_phone = $_REQUEST['mobile_phone'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users (firstname, lastname, email, home_address, home_phone, mobile_phone) VALUES ('$first_name',
			'$last_name','$email','$home_address','$home_phone','$mobile_phone')";
		
		if(mysqli_query($conn, $sql)){
           //echo "Got it";
			header("location: ./user.php");
		} else{
			echo "ERROR: Hush! Sorry $sql. \n";
            echo "<hr>";
            echo "<a href='./index.php> Go to... Home'>";
		    mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
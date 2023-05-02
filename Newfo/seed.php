<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "id19786432_root", "Password@123", "id19786432_cmpe272");
		//$conn = mysqli_connect("localhost", "root", "", "cmpe272");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$first = array('Rutvik', 'Kunal', 'Rohit', 'Harsh', 'Smarth','Utsav','Chinmayi','Aditya','Sarwagya');
		$last = array('Borad', 'Chhatwani', 'Jain', 'Naik', 'Arora','Patel','Jain','Sahu','Bhargava');
		$emails = array('abc@gmail.com', 'cdf@gmail.com', 'Xyz@gmail.com', 'lmn@gmail.com');
		$add = array('10 Ryland St', '2 Santa Clara', '7 Sounth St', '12 San Antario St');
		$num = array('+12345678904', '+10986758476', '+16879574869', '+1684960396794');
        for ($x = 0; $x <= 40; $x++) {
            
          
            $first_name = $first[array_rand($first)];
            $last_name= $last[array_rand($last)];
            $email = $emails[array_rand($emails)];
            $home_address= $add[array_rand($add)];
            $home_phone = $num[array_rand($num)];
            $mobile_phone = $num[array_rand($num)];     
            $sql = "INSERT INTO users (firstname, lastname, email, home_address, home_phone, mobile_phone) VALUES ('$first_name',
            '$last_name','$email','$home_address','$home_phone','$mobile_phone')";
        
             if(mysqli_query($conn, $sql)){
                echo "success \n";
                 //header("location: ./index.php#user");
             } else{
                 echo "ERROR: Hush! Sorry $sql. \n";
                 echo "<hr>";
               
                 mysqli_error($conn);
             }
            }
            


		
		// Close connection
		mysqli_close($conn);

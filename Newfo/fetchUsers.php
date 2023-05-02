<?php
$conn = mysqli_connect("localhost", "id19786432_root", "Password@123", "id19786432_cmpe272");
		
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$query = "SELECT * FROM users"; //You don't need a ; like you do in SQL
$result = $conn->query($query);

echo '<table class="table table-striped">
<caption>List of users</caption>
    <thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Email</th>
    <th scope="col">home_address</th>
    <th scope="col">home_phone</th>
    <th scope="col">mobile_phone</th>
  </tr>
</thead>
<tbody  id="userTable">'; // start a table tag in the HTML

while($row =mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
echo " <tr>
<th scope='row'>". htmlspecialchars($row['id']). "</th>"
."<td>" . htmlspecialchars($row['firstname']) . "</td>"
."<td>" . htmlspecialchars($row['lastname']) . "</td>"
."<td>" . htmlspecialchars($row['email']) . "</td>"
."<td>" . htmlspecialchars($row['home_address']) . "</td>"
."<td>" . htmlspecialchars($row['home_phone']) . "</td>"
."<td>" . htmlspecialchars($row['mobile_phone']) . "</td>"
."</tr>"; 
}

echo "</tbody></table>"; //Close the table in HTML

mysqli_close($conn); //Make sure to close out the database connection
?>
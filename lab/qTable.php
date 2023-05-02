<?php
$conn = mysqli_connect("localhost", "root", "", "cmpe272");
		
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$query = "SELECT * FROM questions"; //You don't need a ; like you do in SQL
$result = $conn->query($query);

echo '<table class="table table-striped">
<caption>List of users</caption>
    <thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Qustion</th>
  </tr>
</thead>
<tbody>'; // start a table tag in the HTML

while($row =mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
echo " <tr>
<th scope='row'>". htmlspecialchars($row['id']). "</th>"
."<td>" . htmlspecialchars($row['question']) . "</td>"
."</tr>"; 
}

echo "</tbody></table>"; //Close the table in HTML

mysqli_close($conn); //Make sure to close out the database connection
?>
<!DOCTYPE html>
<html>
<?php 

$servername = "localhost";
$username = "id19786432_root";
$password = "Password@123";
$dbname = "id19786432_cmpe272";

$conn = mysqli_connect("localhost",$username, $password, $dbname);
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$query = "SELECT * FROM questions"; //You don't need a ; like you do in SQL
$result = $conn->query($query);
?>

<head>
    <title>My Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
</head>

<body>

<?php

$name = $_REQUEST['name'];
$q1 = $_REQUEST['Q1'];
$q2 = $_REQUEST['Q2'];
$q3 = $_REQUEST['Q3'];
$q4 = $_REQUEST['Q4'];
$q5 = $_REQUEST['Q5'];
$q6 = $_REQUEST['Q6'];
$q7 = $_REQUEST['Q7'];
$q8 = $_REQUEST['Q8'];
$q9 = $_REQUEST['Q9'];
$q10 = $_REQUEST['Q10'];

$rec = "INSERT INTO answers
(username, Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10) 
VALUES ('$name',
'$q1',
'$q2',
'$q3',
'$q4',
'$q5',
'$q6',
'$q7',
'$q8',
'$q9',
'$q10'
)";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_REQUEST['name'];
$q1 = $_REQUEST['Q1'];
$q2 = $_REQUEST['Q2'];
$q3 = $_REQUEST['Q3'];
$q4 = $_REQUEST['Q4'];
$q5 = $_REQUEST['Q5'];
$q6 = $_REQUEST['Q6'];
$q7 = $_REQUEST['Q7'];
$q8 = $_REQUEST['Q8'];
$q9 = $_REQUEST['Q9'];
$q10 = $_REQUEST['Q10'];

$rec = "INSERT INTO answers
(username, Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10) 
VALUES ('$name',
'$q1',
'$q2',
'$q3',
'$q4',
'$q5',
'$q6',
'$q7',
'$q8',
'$q9',
'$q10'
)";

   if( $conn->query($rec) === FALSE){
    echo "ERROR: Hush! Sorry $rec. \n";
    echo "<hr>";
   }
}
?>
    <div data-role="page">

        <div data-role="header">
            <h1>Hobbies Selections</h1>
        </div><!-- /header -->

      
       
        <div class="containing-element container">
            <form action="./" method="post" class="p-2 align-center w-100 grey-bg">
                <h3>
                    Answer all the questions - 
                </h3>
                <hr>
                <div data-role="fieldcontain">
    <label for="name"># Your Name:</label>
    <input type="text" name="name" id="name" placeholder="Ex. - Harsh Naik"  />
</div>	
                <?php 
                while($row =mysqli_fetch_assoc($result)){ 
                    echo '<div data-role="fieldcontain">
                    <label for="Q'.$row['id'].'"><b>'.$row['id'].'.</b>  '.$row['question'].'</label>
                    <select name="Q'.$row['id'].'" id="Q'.$row['id'].'" data-role="slider" data-theme="c" data-track-theme="a">
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                    </select>
                     </div>';
                }
                ?>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
        <br>
    <div class="container">
        <h1>Responses : - </h1>
        <hr>
    </div>

    <?php
    $responses = "SELECT * FROM answers"; //You don't need a ; like you do in SQL
    $res = $conn->query($responses);
    echo '<table class="table table-striped">
<caption>List of users</caption>
    <thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Q1</th>
    <th scope="col">Q2</th>
    <th scope="col">Q3</th>
    <th scope="col">Q4</th>
    <th scope="col">Q5</th>
    <th scope="col">Q6</th>
    <th scope="col">Q7</th>
    <th scope="col">Q8</th>
    <th scope="col">Q9</th>
    <th scope="col">Q10</th>
  </tr>
</thead>
<tbody>'; // start a table tag in the HTML

while($row =mysqli_fetch_assoc($res)){   //Creates a loop to loop through results
echo " <tr>
<th scope='row'>". htmlspecialchars($row['id']). "</th>"
."<td>" . htmlspecialchars($row['username']) . "</td>"
."<td>" . htmlspecialchars($row['Q1']) . "</td>"
."<td>" . htmlspecialchars($row['Q2']) . "</td>"
."<td>" . htmlspecialchars($row['Q3']) . "</td>"
."<td>" . htmlspecialchars($row['Q4']) . "</td>"
."<td>" . htmlspecialchars($row['Q5']) . "</td>"
."<td>" . htmlspecialchars($row['Q6']) . "</td>"
."<td>" . htmlspecialchars($row['Q7']) . "</td>"
."<td>" . htmlspecialchars($row['Q8']) . "</td>"
."<td>" . htmlspecialchars($row['Q9']) . "</td>"
."<td>" . htmlspecialchars($row['Q10']) . "</td>"
."</tr>"; 
}

echo "</tbody></table>"; //Close the table in HTML

mysqli_close($conn); //Make sure to close out the database connection
?>


    </div><!-- /content -->

    </div><!-- /page -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>
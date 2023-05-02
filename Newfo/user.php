<?php
    ob_start();
    session_start();
    ?>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
<h3 class="mt-4 ml-4"  id="user">Secured Section</h3>
<hr>
<div class="d-flex justify-content-around">
    <div class="col-8  pd-5">
        <h3>Hello, <b><?php echo $_SESSION["user"] ?></b></h3>
    </div>
    <div class="col-4"><button name="logout" type="button" class="btn btn-danger w-25" onclick="logout()">Home</button></div>
</div>


<div class="p-3" style=" box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);">

    <div class="row">
        <div class="col">
            <form class="card p-3" action="./addUser.php" method="post">
                <div class="row mt-2 mb-2">
                    <div class="col">
                        <label for="firstname">First Name</label>
                        <input name="firstname" type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <label for="lastname">Last Name</label>
                        <input name="lastname" type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col">
                        <label for="email">Email</label>
                        <input name="email" type="text" class="form-control" placeholder="abs@gmail.com">
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col">
                        <label for="home_phone">Home Phone</label>
                        <input name="home_phone" type="text" class="form-control" placeholder="+1-(xxx)-xxx-xxxx">
                    </div>
                    <div class="col">
                        <label for="mobile_phone">Mobile Phone</label>
                        <input name="mobile_phone" type="text" class="form-control" placeholder="+1-(xxx)-xxx-xxxx">
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col">
                        <label for="home_address">home_address</label>
                        <input name="home_address" type="text" class="form-control" placeholder="10 Santa Clara St">
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col">
                        <!-- Submit button -->
                        <button type="Submit" class="btn btn-primary btn-block mb-4">Add User</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-7 overflow-auto" style="max-height:400px">
                <h2>Filterable List</h2>
                <p>Search by Name, Email, Address or Phone:</p>
                <input class="form-control" id="userSearch" type="text" placeholder="Search..">
                <br>
                <?php include("./fetchUsers.php"); ?>
        </div>
    </div>
    <!-- <p>Current website Users are:</p>
            <ol>
                <?php
                // $userfile = fopen("./txt/credentials.txt", "r");
                // while (($line = fgets($userfile)) !== false) {
                //     $user = explode(",", $line);
                //     echo "<li>" . $user[0] . "</li>";
                // }
                // fclose($userfile);
                ?>
            </ol> -->
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script>
   $(document).ready(function(){
  $("#userSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#userTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>
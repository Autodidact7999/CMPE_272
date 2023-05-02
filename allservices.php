<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        .serviceDescription p {
            text-align: justify;
        }

        .progress-label-left {
            float: left;
            margin-right: 0.5em;
            line-height: 1em;
        }

        .progress-label-right {
            float: right;
            margin-left: 0.3em;
            line-height: 1em;
        }

        .star-light {
            color: #e9ecef;
        }
    </style>
</head>

<body>
    <?php include("./navbar.php") ?>
    <section class="section about-section gray-bg" id="about" style="min-height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <a href="./allService.php"><button type="button" class="btn btn-outline-secondary float-right">Go Back</button></a>
                </div>
            </div>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "cmpe272");
            // Check connection
            if ($conn === false) {
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            } else {
                //echo "connected Successfully";
            }

            $id = 1;
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $query = "SELECT * FROM services where id = " . $id; //You don't need a ; like you do in SQL

            $result = $conn->query($query);
            $row = mysqli_fetch_assoc($result);
            $title = $row['title'];
            $id = $row['id'];
            $row['visit'] = $row['visit'] + 1;
            $visitQ = "UPDATE services set visit=" . $row['visit'] . " WHERE id =" . $id;
            if ($conn->query($visitQ) === TRUE) {
                //yaay
            } else {
                echo 'error in serviceDetail.php line 55';
            }

            setcookie("Product_" . $id, "temp", time() + 60 * 60 * 24 * 50, "/");

            $long_description = $row['long_description'];
            $img = explode(" ", $row['images']);
            echo '<div class="row align-items-center">
        <div class="col-lg-6">
            
            <img class="rounded w-100" src="' . $img[0] . '" alt="Aboute me Image" data-toggle="modal" data-target="#preview0" style="cursor:zoom-in">
            <div class="modal fade" id = "preview0" tabindex="-1" role="dialog" aria-labelledby="preview" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="width:90vw; max-width:90vw; ">
                    <div style="background-color: transperent;">
                        <img class="mx-auto d-block" src="' . $img[0] . '" title="" alt=""  style="min-width:60vw"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-around">';
            $len = sizeof($img);
            for ($x = 1; $x < $len; $x++) {
                echo '<img src="' . $img[$x] . '" data-toggle="modal" data-target="#preview' . $x . '" alt="Aboute me Image" class="img-thumbnail" style="width: 150px; cursor:zoom-in">';
                echo '<div class="modal fade" id = "preview' . $x . '" tabindex="-1" role="dialog" aria-labelledby="preview" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width:90vw; max-width:90vw; ">
                <div style="background-color: transperent;">
                    <img class="mx-auto d-block" src="' . $img[$x] . '" title="" alt=""  style="min-width:60vw"/>

                </div>
            </div>
        </div>';
            }
            echo '</div>
            </div>
            <div class="row mt-4">
            <div class="col-lg-10">
                    <h3 class="dark-color">' . $title . '</h3>
            </div>
            <div class="col-lg-2">
                <i class="fas fa-star pr-4" style="color:grey;"> ' . $row['review'] . '</i>
                <i class="fas fa-eye" style="color:grey;"> ' . $row['visit'] . '</i>
            </div>
            </div>
            <div class="row">
                    <p class="text-justify">
                    <div class="serviceDescription">
                    ' . $long_description . '
                    </div>
                    </p>
                
            </div>';


   </div>
    </section>';
    ?>
   

</body>
<script src="./script.js"></script>

</html>
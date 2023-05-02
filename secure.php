<?php session_start();
        ob_start();
            if (!isset($_SESSION["user"])){
                header("location:index.php");
                die();
            }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib\css\bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/bce70d25d6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet"> 
    <title>Spartan Book Store</title>

</head>
<body>

<nav class="navbar navbar-expand-lg sticky fixed-top r-nav" style="    padding-bottom: 0px;
    padding-top: 0px;">
    <div class="container">
        <a href="/" class="navbar-brand logo"><span class="grey-color"><</span>
        <span class="logo-name">Spartan Book Store</span>
        <span class="grey-color">/></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarId">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarID"> 
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#products" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="#news" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a href="#hire-id" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"> Hello, <?php echo $_SESSION["user"]?></a>
                </li>

            </ul>

        </div>

    </div>
</nav>


<header id="home">
    <div class="container-fluid header-content">
       <div class="row">
           <div class="col text-center">
               <div class="content-box">
               Current website Users are:
        <br/>
        <?php
            $userfile = fopen("txt/credentials.txt", "r");
            while(($line=fgets($userfile))!==false){
                    $user = explode(",", $line);
                    echo $user[0];
                    echo "<br/>";
                }
            fclose($userfile);    
        ?>

                <div class="row mt-2 mb-2">
                    <div class="col">
                        <!-- Submit button -->
                        <a href="./Newfo/user.php">Admin Dashboard</a>
                    </div>
                </div>
                </div>
           </div>
       </div> 
    </div>
</header>

<Section class="services-class bg-sec r-p" id="products">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="col">
                    <h2>Products</h2>
                    <br>
               </div>
            </div>
        </div>
        <div class="row project-list">
            <div class="col-lg-4">
                <div class="class">
                    <div class="card-header">
                    <img class="new"  src="images/book1.png" class="img-fluid img-thumbnail selfie square z-depth-2" alt="Algo">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cracking the Coding Interview</h5>
                        <div class="service-border"></div>
                        <a href='https://www.amazon.com/dp/0984782850/ref=cm_sw_em_r_mt_dp_G8QAABE3NWCE8F0A8GH5'><i class="fab fa-amazon"></i> </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="class">
                    <div class="card-header">
                    <img class="new"   src="images/book2.jpg" class="img-fluid img-thumbnail selfie square z-depth-2" alt="Algo">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Computer Networking</h5>
                        <div class="service-border"></div>
                        
                        
                        <a href='https://www.amazon.com/dp/B08KF4RQ5N/ref=cm_sw_em_r_mt_dp_D3G0AMZ8F4DVCPXP5SRZ'><i class="fab fa-amazon"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="class">
                    <div class="card-header">
                    <img class="new" src="images/image3.jpg" class="img-fluid img-thumbnail selfie square z-depth-2" alt="Algo">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Operating System Concepts</h5>
                        <div class="service-border"></div>
                       
                        <a href='https://github.com/Autodidact7999'><i class="fab fa-amazon"></i> </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</Section>

<!-- News -->


<Section class="services-class bg-sec r-p" id="news">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="col">
                    <h2>News</h2>
                    <br>
               </div>
            </div>
        </div>
        <div class="row project-list">
            <div class="col-lg-4">
                <div class="class">
                    <div class="card-header">
                    <img  class="new"   src="images/news1.jpeg" class="img-fluid img-thumbnail selfie square z-depth-2" alt="Algo">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">New Releases</h5>
                        <div class="service-border"></div>
                        <p>This Selection of New Releases and Old Favorites Will Help You Discover the Book You’ll Want to Read Next. Whether You’re Looking For Essential Information or Something Fun to Read on Vacation, We’ve Got a Book for You.</p>
                        
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="class">
                    <div class="card-header">
                    <img class="new"   src="images/news2.jpeg" class="img-fluid img-thumbnail selfie square z-depth-2" alt="Algo">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Gear Up for Back to School in Style</h5>
                        <div class="service-border"></div>
                        <p>Check Out This Season’s Newest Arrivals</p>
                        

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="class">
                    <div class="card-header">
                    <img class="new" src="images/news3.png" class="img-fluid img-thumbnail selfie square z-depth-2" alt="Algo">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Study Break Must Haves</h5>
                        <div class="service-border"></div>
                        <p>Speakers, Headphones, and More! Relax with the Latest in Audio, Hydration, and Books</p>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</Section>
<!-- Contact Me -->
<section class="hire-me r-p" id="hire-id">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">
                    Contact Us
                </h2>
                <section class="business-talking fullsize" id="contacts">
	<div class="container">
    <section class="main-section contact" id="contact">
        	<div class="contact-subtitle">
            	<?php 
                $contacts = fopen("txt/contacts.txt", "r");
                while(($line=fgets($contacts))!==false){
                    echo $line;
                    echo "<br/>";
                }
                fclose($contacts)
                ?>
            </div>
        	
        
</section>
</div>
            </div>
        </div>
    </div>
</section>

<script src="lib\jquery-3.6.0.min.js"></script>   
<script src="lib\js\bootstrap.min.js"></script>
<script src="lib\popper.min.js"></script>
<script src="lib\jquery.waypoints.min.js"></script>
<script src="lib\typed.js"></script>
<script src="js\app.js"></script>    
</body>
</html>
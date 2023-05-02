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
                    <a href="login.php" target="_blank" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="https://rutvik-borad.000webhostapp.com/project/index.php" target="_blank" class="nav-link">Market Place</a>
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
                   <h4>Welcome</h4>
                   <h1>It is <span class="element"></span></h1>
                   <p></p>
                    <a href="#about" class="btn">Explore Us</a>
                </div>
           </div>
       </div> 
    </div>
</header>

<section class="about r-p" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 " style="text-align: center;">
                <img  src="images/Book_Photo.jpeg" class="img-fluid img-thumbnail selfie  z-depth-2 new2" alt="Profile Picture">
            </div>
            <div class="col-lg-6 mt-5 mt-lg-3">
                <h2>
                    About Us
                </h2>
               
                <p>Spartan Book Store is a nonprofit social enterprise that believes that education is the best way out of poverty for children in need</p>
                <p>Every item we carry on the Spartan Marketplace is curated with educators and students in mind. We believe that representation in books matters and place a special emphasis on carrying a wide variety of titles that support diversity and inclusion. Explore our Stories for All Project™ page to find an ever-expanding collection of diverse titles for all ages to help your students grow as readers, individuals, and citizens.</p>
                <p>In addition to books and resources for purchase, we offer a variety of expert-informed free resources for educators through Spartan Book’s Accelerator™. On our free resources page you'll find a curated collection of downloadable educator guides, tip sheets, and other resources to help you engage with students and teach critical topics like Social and Emotional Learning (SEL).</p>
                <p></p>

                <br>
                <!-- <div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href='https://www.linkedin.com/in/harshnaik7999/'><i class="fab fa-linkedin"></i> </a></li>
                        <li class="list-inline-item"><a href='https://github.com/Autodidact7999'><i class="fab fa-github"></i> </a></li>
                        <li class="list-inline-item"><a href='https://www.instagram.com/harsh__9879/'><i class="fab fa-instagram"></i> </a></li>
                        <li class="list-inline-item"><a href='https://www.facebook.com/harsh.naik.923'><i class="fab fa-facebook-f"></i> </a></li>
                        
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- Projects -->
<section class="section" id="service">
    <div class="container d-flex justify-content-between">
        <div class="align-items-center mt-4">
            <h1> Services </h1>
        </div>

        <div class="d-flex flex-column float-right mt-3 mr-4">
            <a href="./allService.php" class="link-primary text-right p-1">View all</a>
            <a href="./recentlyVisited.php" class="link-primary text-right p-1">View Recently visited</a>
        </div>
    </div>
    <div class="container">
        <hr>
    </div>
    <div class="container d-flex flex-row flex-wrap justify-content-around">
        <?php
        $conn = mysqli_connect("localhost", "id19652625_admin", "Password@123", "id19652625_cmpe272");
        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        } else {
            //echo "connected Successfully";
        }
        $query = "SELECT * FROM Services WHERE store_id = 6 limit 3 "; //You don't need a ; like you do in SQL
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $title = $row['title'];
            $short_description = $row['short_description'];
            $img = explode(" ", $row['images']);
            echo '<div class="card" style="width: 18rem; box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);">
                    <img class="card-img-top" src="' . $img[0] . '" style="height:200px; object-fit: cover;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">' . $title . '</h5>
                        <p class="card-text" style="height:100px">' . $short_description . '</p>
                        <div class="d-flex justify-content-between">
                        <a href="./serviceDetail.php?id=' . $id . '" class="text-warning stretched-link">View More</a>
                        <i class="fas fa-star   " style="color:grey;"> '.$row['review'].'</i>
                        <i class="fas fa-eye" style="color:grey;"> '.$row['visit'].'</i>
                        </div>
                    </div>
                </div>';
        }

        mysqli_close($conn);
        ?>
    </div>
</section>
<!--<Section class="services-class bg-sec r-p" id="products">-->
<!--    <div class="container text-center">-->
<!--        <div class="row">-->
<!--            <div class="col">-->
<!--                <div class="col">-->
<!--                    <h2>Products</h2>-->
<!--                    <br>-->
<!--               </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row project-list">-->
<!--            <div class="col-lg-4">-->
<!--                <div class="class">-->
<!--                    <div class="card-header">-->
<!--                    <img class="new"  src="images/book1.png" class="img-fluid img-thumbnail selfie square z-depth-2" alt="Algo">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Cracking the Coding Interview</h5>-->
<!--                        <div class="service-border"></div>-->
<!--                        <a href='https://www.amazon.com/dp/0984782850/ref=cm_sw_em_r_mt_dp_G8QAABE3NWCE8F0A8GH5'><i class="fab fa-amazon"></i> </a>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <div class="class">-->
<!--                    <div class="card-header">-->
<!--                    <img class="new"   src="images/book2.jpg" class="img-fluid img-thumbnail selfie square z-depth-2" alt="Algo">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Computer Networking</h5>-->
<!--                        <div class="service-border"></div>-->
                        
                        
<!--                        <a href='https://www.amazon.com/dp/B08KF4RQ5N/ref=cm_sw_em_r_mt_dp_D3G0AMZ8F4DVCPXP5SRZ'><i class="fab fa-amazon"></i> </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <div class="class">-->
<!--                    <div class="card-header">-->
<!--                    <img class="new" src="images/image3.jpg" class="img-fluid img-thumbnail selfie square z-depth-2" alt="Algo">-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">Operating System Concepts</h5>-->
<!--                        <div class="service-border"></div>-->
                       
<!--                        <a href='https://github.com/Autodidact7999'><i class="fab fa-amazon"></i> </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            
<!--        </div>-->
<!--    </div>-->
<!--</Section>-->

 <!--News -->


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
<?php

$conn = mysqli_connect("localhost","root","","book_db");

$result = mysqli_query($conn,"SELECT * FROM packages");

?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!--header section start-->
    <div id="one">
        <div id="one-one">
<div class="logo">

Smart Travel Booking System

</div>
        </div>
        <div id="one-two">
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="intro.php">Intro</a>
                <a href="about.php">About</a>
                <a href="package.php">Package</a>
                <a href="book.php">Book</a>
                <a href="review.php">Review</a>
                <a href="gallery.php">Gallery</a>
                <a href="mybooking.php">My Booking</a>
                <a href="login.php" class="signin-btn">Sign In</a>
            </nav>
        </div>
    </div>
    <!--header section end-->

    <!--home section start-->
    <div id="two" class="home" >
        <div class="slide" style="background:url(images/home5.jpg) no-repeat";>
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>   
        </div>
    </div>
    <!--home section end-->

    <!--sevices section start-->
    <div id="three" class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
            <img src="images/adventure.png" alt="adventure">
            <h3>adventure</h3>
            </div>

            <div class="box">
            <img src="images/tourguide.png" alt="tourguide">
            <h3>tour guide</h3>
            </div>

            <div class="box">
            <img src="images/trekking.png" alt="trekking">
            <h3>trekking</h3>
            </div>

            <div class="box">
            <img src="images/campfire.png" alt="campfire">
            <h3>camp fire</h3>
            </div>

            <div class="box">
            <img src="images/off road.png" alt="off road">
            <h3>off road</h3>
            </div>

            <div class="box">
            <img src="images/camping.png" alt="camping">
            <h3>camping</h3>
            </div>
        </div>
    </div>
    <!--sevices section end-->

    <!--home about section start-->
    <div id="four" class="home-about">
    <div id="four-one">
        <div class="image">
            <img src="images/about.jpg" alt="about">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>At Smart Travel Booking System, we are dedicated to creating unforgettable travel experiences through adventure, trekking, camping, off-road tours, and guided journeys. Our mission is to provide safe, comfortable, and enjoyable travel services while helping travelers explore beautiful destinations and create lasting memories.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </div>
    </div>
    <!--home about section end-->

    <!--home package section start-->
    <div id="five" class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            
            <div class="box">
               <div  class="image">
                    <img src="images/tajmahal.jpg" alt="tajmahal">
                </div>
                <div class="content">
                  <h3>
<?php
$row = mysqli_fetch_assoc($result);
echo $row['package_name'];
?>
</h3>
                  <p>
Price : Rs. <?php echo $row['price']; ?>
</p>


<a href="book.php?package=Family Package" class="btn">

Book Now

</a>
                </div>
            </div>
            
            <div class="box">
                     <div  class="image">
                        <img src="images/girl.jpg" alt="tajmahal">
                    </div>
                    <div class="content">
                        <h3>
<?php
$row = mysqli_fetch_assoc($result);
echo $row['package_name'];
?>
</h3>
                        <<p>
Price : Rs. <?php echo $row['price']; ?>
</p>
                        <a href="book.php?package=Adventure Package" class="btn">

Book Now

</a>
                    </div>
            </div>


            <div class="box">
                   <div  class="image">
                        <img src="images/enviournment.jpg" alt="tajmahal">
                    </div>
                    <div class="content">
                        <h3>
<?php
$row = mysqli_fetch_assoc($result);
echo $row['package_name'];
?>
</h3>
                        <p>
Price : Rs. <?php echo $row['price']; ?>
</p>
                        <a href="book.php?package=Camping Package" class="btn">

Book Now

</a>


</a>
                    </div>
            </div>
            </div>
            <div class="load-more">
                <a href="package.php" class="btn">load more</a>
            </div>
        </div>
    <!--home package section end-->

    <!--home offer section start-->
    <div id="six"  class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>**Explore the world with comfort, adventure, and unforgettable memories.**
</p>
            <a href="book.php?package=<?php echo urlencode($row['package_name']); ?>" class="btn">

Book now

</a>
        </div>
    </div>
    <!--home offer section end-->

     <!--footer section start-->
    <div id="seven" class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php">Home</a>
            <a href="intro.php">Intro</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
            <a href="review.php">Review</a>
            <a href="gallery.php">Gallery</a>
        </div>
        
        <div class="box">
            <h3>Extra Links</h3>
            <a href="#">Need Help?</a>
            <a href="#">about us</a>
            <a href="#">privacy policy</a>
            <a href="#">terms of use</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#">011-3456789</a>
            <a href="#">054-9876543</a>
            <a href="#">Travel@gmail.com</a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Linkedin</a>
            <a href="#">Instagram</a>
        </div>
        <div class="credit">created by <span>SIS Group 10</span> | All Rights Reserved!</div>
        </div>   
    </div>
     <!--footer section end-->
</body>
</html>
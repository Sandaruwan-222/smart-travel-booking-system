<?php

$selected_package = "";

if(isset($_GET['package'])){

    $selected_package = $_GET['package'];

}

?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/book.css">
</head>
<body>
    <!--header section start-->
    <div id="one">
        <div id="one-one">
            <a href="home.php" class="logo">travel.</a>
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
            </nav>
        </div>
    </div>
    <!--header section end-->

     <!--home section start-->
     <div id="two" class="home" >
        <div class="slide" style="background:url(images/heading.jpg) no-repeat";>
            <div class="content">
                <h1>book now</h1>
            </div>   
        </div>
    </div>
    <!--home section end-->

    <!--home package section start-->
    <div id="five" class="booking">
        <h1 class="heading-title">book our trip!</h1>
        <form action="bookform.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>

                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>

                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date"  name="arrivals">
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date"  name="leaving">
                </div>

                <div class="inputBox">
                    <span>Package :</span>
                    <input type="text"
name="package"
placeholder="package you choose"
value="<?php echo $selected_package; ?>">
                </div>

            </div> 
            <input type="submit" value="submit" class="btn" name="send">
        </form>
        </div>
    <!--home package section end-->

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
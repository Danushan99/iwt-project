<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['fname']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <style>
        @import "https://fonts.googleapis.com/css?family=Tangerine";
        .container 
        {
            position: relative;
            text-align: center;
            color: white;
        }

        .homepage-text h1
        {
            margin-top: 20px;
            text-align: center;
            text-shadow:0px 1px 10px #ff00ae;
            padding-bottom: 10px;
        }

        .image h1
        {
            margin-top: 20px;
            text-align: center;
            text-shadow:0px 1px 10px white;
        }

        .centered 
        {
            position: absolute;
            top: 69%;
            left: 50%;
            transform: translate(-50%, 50%);
            text-shadow:0px 3px 10px black;
            font-family: 'Tangerine', serif;
            font-size: 35px;
        }
        
        .paragraph
        {
            padding:10px 40px 30px 40px;
        }

        .homepage-text
        {
            width: 87%;
        }

        .home-image-top
        {
            width: 87%;
            padding:40px 0 20px 0;
        }

        .home-image-center
        {
            width: 87%;
            padding:40px 0 0 0;
        }

        .home-image-bottom
        {
            width: 88.5%;
            padding:40PX 10px 40px 10px ;
            
        }
    </style>
</head>
<body>
    <!-- Header Part of the Webpage -->
    <header>
    <div class="header">
        <!-- Search Bar -->
        <form class="search">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><img src="images/icons/search.png" width="12px"></button>
        </form>

        <!-- Website Logo -->
        <div class="logo">
            <img src="images/logo.png" alt="logo" width="300px">
        </div>

        <!-- Navigation Menu -->
        <div class="nav-menu">
            <ul>
                <li>
                    <img src="images/icons/home.png" width="20px">
                    <a href="#">&nbsp;Home</a>
                </li>
                <li>
                    <img src="images/icons/categories.png" width="20px">
                    <a href="categories.html">&nbsp;Categories</a>
                </li>
                <li>
                    <img src="images/icons/aboutus.png" width="20px">
                    <a href="aboutus.html">&nbsp;About Us</a>
                </li>
                <li>
                    <img src="images/icons/contactus.png" width="20px">
                    <a href="contactus.php">&nbsp;Contact Us</a>
                </li>
                <li>
                    <img src="images/icons/login.png" width="20px">
                    <a href="login.php">&nbsp;Login</a>
                </li>
                <li>
                    <img src="images/icons/signup.png" width="21px">
                    <a href="signup.php">&nbsp;Signup</a>
                </li>
            </ul>
        </div>
    </div>
    </header>
    <hr>
<!----------------------------------------------------------------------------->
<meta name="viewport" content="width=device-width, initial-scale=2">
    

<div class="container">
  <img class="home-image-top" src="images/top.jpg" alt="image";>

    <div class="centered"> 
        <h1> Dreams Wedding Planners </h1> 
        <h4>Find the best Wedding Planning Service a with thousands of trusted reviews</h4> 
    </div>
</div>
<center>
<fieldset class="homepage-text">
    <legend align="center">
        <h1>DREAMS WEDDING PLANNER</h1>
    </legend>
    
    <div class="paragraph">
        Dreams Wedding Planner is one of the best known wedding planning firms in the country. 
        Along with our sister concern, the award winning My Wedding Planning, we are known for our impeccable destination wedding planning services.
        We at Dreams Wedding Planner are here to provide fresh ideas, innovative styling and creative inputs to pull your dream wedding together!
        With so many components to a wedding, we know you need a team of experienced wedding planners to take your vision and make it a reality.
        We are a team of trained wedding planners based in Srilanka to help you with your wedding planning process. 
        From helping you find your perfect venue, to managing all your vendors, creating your overall wedding style to designing your floral designs and decoratior, 
        selecting cuisine to stationery design we take care of it all! We do everything for you.
        We design and build your wedding based on your style and our team’s inventive imagination.
        Together we will collaborate with you to create a stylish unique wedding affair that is true to your personality!
    </div>
</fieldset>
</center>

   <center>
    <script>
        var i = 0; // Start point
        var images = [];
        var time = 3000;

        // Image List
        images[0] = 'images/image1.jpg';
        images[1] = 'images/image2.jpg';
        images[2] = 'images/image3.jpg';
        images[3] = 'images/image4.jpg';
        images[4] = 'images/image5.jpg';

        // Change Image
        function changeImg(){
            document.slide.src = images[i];

            if(i < images.length - 1){
                i++;
            } else {
                i = 0;
            }

            setTimeout("changeImg()", time);
        }

        window.onload = changeImg;

    </script>
    <img class="home-image-center" name="slide" width="90%" height="800">
     <br>
    <img class="home-image-bottom" src="images/bottom.jpg" >
    </center>
<!----------------------------------------------------------------------------->
    <hr>
    <!-- Footer Part of the Webpage -->
    <footer>
        <div class="main-content">

            <!--Sitemap section-->
            <div class="left section">
                <h3>Quick Links</h3>
                <div class="content">
                <p>
                    <a href="index.html">Home</a><br>
                    <a href="aboutus.html">About Us</a><br>
                    <a href="policy.html">Privacy & Policy</a><br>
                    <a href="terms.html">Terms & Conditions</a><br>
                    <a href="refundpolicy.html">Refund Policy</a><br>
                </p>
                </div>
            </div>

            <!--Contact Details-->
            <div class="center section">
                <h3>Contact Us</h3>
                <div class="content">
                <p>
                    <div class="contact-icon">
                        <img src="images/icons/phone.png" width="20px">
                    </div>&nbsp;+94 771234567<br>
                    <div class="contact-icon">
                        <img src="images/icons/mail2.png" width="20px">
                    </div>&nbsp;support@dreamswp.com<br>
                    <div class="contact-icon">
                        <img src="images/icons/address.png" width="20px">
                    </div>&nbsp;New Kandy Road,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Malabe.<br>
                </p>
                </div>
            </div>

            <!--Maps-->
            <div class="right section">
                <h3>Find Us </h3>
                <div class="content">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798467112139!2d79.9707558143667!3d6.914682820411325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1599656719062!5m2!1sen!2slk" width="140" height="140" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                <!--Social media links-->
                <div class="social">
                    <a href="#">
                        <div class="facebook">
                            <img src="images/icons/facebook.png" width="10px">
                        </div>
                    </a>

                    <a href="#">
                        <div class="twitter">
                            <img src="images/icons/twitter.png" width="20px">
                        </div>
                    </a>

                    <a href="#">
                        <div class="instagram">
                            <img src="images/icons/instagram.png" width="19px">
                        </div>
                    </a>

                    <a href="#">
                        <div class="youtube">
                            <img src="images/icons/youtube.png" width="20px">
                        </div>
                    </a>
                    
                </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <center>
                <span>
                    &copy; 2020 Dreams Wedding Planners. All Rights Reserved
                </span>
            </center>
        </div>
    </footer>
</body>
</html>

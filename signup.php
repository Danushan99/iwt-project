<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <script src="script/signupscript.js"></script>
    <script src="script.js"></script>
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
                <li><img src="images/icons/home.png" width="20px"><a href="index.html">&nbsp;Home</a></li>
                <li><img src="images/icons/categories.png" width="20px"><a href="categories.html">&nbsp;Categories</a></li>
                <li><img src="images/icons/aboutus.png" width="20px"><a href="aboutus.html">&nbsp;About Us</a></li>
                <li><img src="images/icons/contactus.png" width="20px"><a href="contactus.html">&nbsp;Contact Us</a></li>
                <li><img src="images/icons/login.png" width="20px"><a href="login.php">&nbsp;Login</a></li>
                <li><img src="images/icons/signup.png" width="21px"><a href="#">&nbsp;Signup</a></li>
            </ul>
        </div>
    </div>
    </header>
    <hr>

    <div class="signup">
        <form action="signup.php" method="post" onsubmit="return checkPasswords()">
        <?php include('errors.php'); ?>

            <h1>Sign Up</h1>
            <hr>

            <!--NAME FIELD-->
            <input type="text" id="fname" placeholder="First Name" name="fname"required>
            <input type="text" id="lname" placeholder="Last Name" name="lname" required>

            <!--EMAIL FIELD-->
            <input type="email" id="email" placeholder="Email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" required>

            <!--PASSWORD FIELD-->
            <input type="password" id="password" placeholder="Password" name="password_1" minlength="8" required>

            <input type="password" id="retype_password" placeholder="Re-Enter Password" minlength="8" name="password_2" required>
        
            <!--DATE OF BIRTH FIELD-->
            <input type="text" id="date" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')">

            <!--MOBILE NUMBER FIELD-->
            <input type="text" id="mobile" placeholder="Mobile" name="mobile" required pattern="[0-9]{10}">
            <br>

            <br>
            <!--GENDER FIELD-->
            <div class="gender">
                <label for="gender">I am a :</label>
            <input type="radio" name="gender" value="Male">&nbsp;Groom&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="Female">&nbsp;Bride&nbsp;&nbsp;&nbsp;
            </div>
            <br>

            <!--POLICY ACCEPTANCE CHECK-->
            <div class="policycheck">
            <input type="checkbox" id="policy" onclick="enableButton()" required>&nbsp;I accept the <a href="termsandconditions.html">Terms & Conditions</a>
            </div>

            <!--SUBMIT-->
            <input type="submit" id="signup" value="Signup" name="signup" disabled>
            <center>Already have an account?<a href="login.php">&nbsp;Login</a></center>

        </form>
    </div>




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
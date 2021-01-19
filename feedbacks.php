<!DOCTYPE html>
<html>
<head>
    <title>Dreams Wedding Planners</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/titleicon.png">
    <link rel="stylesheet" href="styles/style.css">
    <script src="script.js"></script>
    <style>
        th
        {
            padding: 8px;
            font-size: 19px;
            background:url(styles/signup.jpg);
            text-shadow: 0px 0px 14px #ffffff;
        }
        td
        {
            padding: 4px;
        }

        .btn
        {
            width: 25%;
            font-size: 17px;
        }

        h1
        {
            text-align: center;
            padding-top: 20px;
            text-shadow: 0px 0px 10px #ff00b7;
        }

        .table
        {
            padding-bottom: 30px;
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
                <li><img src="images/icons/profile.png" width="20px"><a href="users.php">&nbsp;Users</a></li>
                <li><img src="images/icons/booking.png" width="20px"><a href="bookings.php">&nbsp;Bookings</a></li>
                <li><img src="images/icons/payment.png" width="20px"><a href="payments.php">&nbsp;Payments</a></li>
                <li><img src="images/icons/feedback.png" width="20px"><a href="#">&nbsp;Feedbacks</a></li>
                <li><img src="images/icons/products.png" width="20px"><a href="products.php">&nbsp;Products</a></li>
                <li><img src="images/icons/logout.png" width="21px"><a href="adminlogout.php">&nbsp;Logout</a></li>
            </ul>
        </div>
    </div>
    </header>
    <hr>
<!----------------------------------------------------------------------------->
<center>
        <h1>Customer Feedbacks</h1>
        <div class="table">
            <table border="1" width="95%">
                <tr>
                    <th>Feedback ID</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr><br>
                <?php
                    $connection=mysqli_connect('localhost','root','','dreams');

                        $query="SELECT * FROM feedback";

                        $query_run=mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run)) 
                        {
                            ?>
                            <tr>
                                <td style="width: 10%;"><?php echo $row['feedbackID']; ?></td>
                                <td style="width: 13%;"><?php echo $row['date']; ?></td>
                                <td style="width: 13%;"><?php echo $row['name']; ?></td>
                                <td style="width: 26%;"><?php echo $row['email']; ?></td>
                                <td><?php echo $row['message']; ?></td>
                            </tr>
                            <?php
                        }
                ?>
            </table>
        </div>
    </center>

<!----------------------------------------------------------------------------->
<hr>
<footer>
<div class="bottom">
    <center><span>&copy; 2020 Dreams Wedding Planners. All Rights Reserved</span></center>
</div>
</footer>
</body>
</html>

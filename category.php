<?php

session_start();
require_once ("php/component.php");
require_once ("php/createDb.php");

$database = new createDb();

if (isset($_POST['submitCart'])){
    // print_r($_POST['code']);

    if(isset($_SESSION['cart'])){

        $item_array_code = array_column($_SESSION['cart'], 'code');

        if(in_array($_POST['code'], $item_array_code)){
            echo "<script> alert('Product already in cart!')</script>";
            echo "<script> window.location='category.php'</script>";
        } else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'code'=>$_POST['code']
            );

            $_SESSION['cart'][$count] = $item_array;
            print_r($_SESSION['cart']);
        }
    }else{
        $item_array = array(
            'code' => $_POST['code']
        );


        //new session variable
        $_SESSION['cart'][0]=$item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>
<html lang="zxx" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Category Page</title>
    <meta charset="UTF-8">
    <meta name="description" content=" +265Carts | Category Page">
    <meta name="keywords" content="Malawi, E-commerce, online shop">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>
    <link rel="stylesheet" href="css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="index.php" class="site-logo">
                        <img src="img/twitter_header_photo_1.png" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                        <input type="text" placeholder="Search on divisima ....">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a><?php echo $_SESSION['email']; ?></a> <a href="php/logOut.php" name="logout"> || Log Out</a>
                        </div>
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>

                                <?php
                                if(isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cartCount\">$count</span>";
                                }else{
                                    echo "<span id=\"cartCount\">0</span>";
                                }
                                ?>
                            </div>
                            <a href="cart.php">Shopping Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="category.php">Shop</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="blog.php">Blog </a></li>
                <li><a href="contact.php" >Contact Us</a></li>
            </ul>
            </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Header section end -->


<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Category Page</h4>
        <div class="site-pagination">
            <a href="profile.php">Home</a> /
            <a href="category.php">Shop</a> /
        </div>
    </div>
</div>
<!-- Page info end -->

<section>
    <div class="container">
        <div class="row text-center py-5">
        <?php
        //        component("Red and White Blazer", "MWK 10,000", "img/clothes/1.jpg");
        //        component("Casual Checked Jacket", "MWK 7,000", "img/clothes/2.jpg");
        //        component("Off Shoulder Dress", "MWK 13,000", "img/clothes/3.jpg");

        $result = $database->getData();
        while ($row = mysqli_fetch_assoc($result)){
            component($row['name'], $row['price'], $row['image'], $row['code']);
        }
        ?>
        </div>
    </div>
</section>
<section class="footer-section">
    <div class="container">
        <div class="footer-logo text-center">
            <a href="index.php"><img src="./img/logo-light.png" alt=""></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>About</h2>
                    <p>If you're looking for fast, convenient online shopping, +265Carts is the place for you! Fast deliveries in Blantyre, Lilongwe and Mzuzu.</p>
                    <!--						<img src="img/cards.png" alt="">-->
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Questions</h2>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="">Returns</a></li>
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Partners</a></li>
                        <li><a href="">Bloggers</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="">Press</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget contact-widget">
                    <a id="#target2"><h2>CONTACT US</h2></a>
                    <div class="con-info">
                        <span>C.</span>
                        <p>+265Carts Ltd </p>
                    </div>
                    <div class="con-info">
                        <span>A.</span>
                        <p>+265Carts Headquarters, Chichiri Shopping Mall, Chipembere Highway</p>
                    </div>
                    <div class="con-info">
                        <span>P.</span>
                        <p>+265 882 444 644</p>
                    </div>
                    <div class="con-info">
                        <span>E.</span>
                        <p>support@265carts.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                <a href="https://www.instagram.com/265carts/?hl=en" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
            </div>

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </div>
    </div>
</section>
<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
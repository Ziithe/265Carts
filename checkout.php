<?php
session_start();
require_once ("php/createDb.php");
require_once ("php/component.php");

$database = new createDb();

if (isset($_POST['remove'])){
    if ($_GET['action']=='remove'){
        foreach ($_SESSION['cart'] as $key=>$value){
            if ($value['code']==$_GET['code']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product removed from cart')</script>";
                echo "<script>window.location='cart.php'</script>";
            }
        }
    }
}

if (isset($_POST['order'])){
        echo "<script>alert('Thank you for Shopping with us! Your order has been placed')</script>";
        echo "<script>window.location='category.php'</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>CheckOut</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="Malawi, E-commerce, online shop">
    <meta name="description" content="An E-commerce web application for Malawi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ziithe Ewen Hiwa">


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
                        <input type="text" placeholder="Input your search here ...">
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
                            <a>Shopping Cart</a>
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
        </div>
    </nav>
</header>
<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="index.php">Home</a> /
				<a href="cart.php">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<form class="checkout-form" action="checkout.php" method="post">
						<div class="cf-title">Billing Address</div>
						<div class="row">
							<div class="col-md-7">
								<p>*Billing Information</p>
							</div>
							<div class="col-md-5">
								<div class="cf-radio-btns address-rb">
									<div class="cfr-item">
										<input type="radio" name="pm" id="one">
										<label for="one">Use my regular address</label>
									</div>
									<div class="cfr-item">
										<input type="radio" name="pm" id="two">
										<label for="two">Use a different address</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" name="name" placeholder="Name of Receiver" required="required">
								<input type="text" name="address" placeholder="Address" required="required">
								<input type="text" name="city" placeholder="City" required="required">
							</div>
							<div class="col-md-6">
								<input type="text" name="location" placeholder="Town">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Phone no." required="required">
							</div>
						</div>
						<div class="cf-title">Delievery Info</div>
						<div class="row shipping-btns">
							<div class="col-6">
								<h4>Standard</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-1">
										<label for="ship-1">Free</label>
									</div>
								</div>
							</div>
							<div class="col-6">
								<h4> Same day Delivery </h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-2">
										<label for="ship-2">MWK 3, 000</label>
									</div>
								</div>
							</div>
						</div>
						<div class="cf-title">Payment</div>
						<ul class="payment-list">
                            <li><input type="radio" name="pm" id="two">
							<label>Mobile Money</label>
                            </li>
                            <li><input type="radio" name="pm" id="two">
                            <label>Credit Card</label></li>
                            <li><input type="radio" name="pm" id="two">
                            <label>Pay on Delivery</label></li>
						</ul>
						<button type="submit" name="order" class="site-btn submit-order-btn">Place Order</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
                        <h3>My Cart</h3>
                        <div class="cart-table-warp">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-th">Product</th>
                                    <th class="quy-th">Quantity</th>
                                    <th class="total-th">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $total = 0;
                                if (isset($_SESSION['cart'])){
                                    $mycode = array_column($_SESSION['cart'], 'code');
                                    $result = $database->getData();
                                    while ($row = mysqli_fetch_assoc($result)){
                                        foreach ($mycode as $code){
                                            if ($row['code'] == $code){
                                                cartElement($row['image'], $row['name'], $row['price'], $row['code']);
                                                $total = $total + (int)$row['price'];
                                            }
                                        }
                                    }

                                }else{
                                    echo "<h5>Cart is Empty!</h5>h5>";
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="total-cost">
                            <?php
                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<h6>Total <span> MWK $total</span></h6>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<!-- checkout section end -->

	<!-- Footer section -->
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

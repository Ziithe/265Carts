<?php
session_start();

?>

<!--Template adapted from Divisima Colorlib-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Your Profile</title>
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
						<a href="profile.php" class="site-logo">
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
                    <ul class="main-menu">
                        <li><a href="profile.php">Home</a></li>
                        <li><a href="category.php">Shop</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="blog.php">Blog </a></li>
                        <li><a href="contact.php" >Contact Us</a></li>
                    </ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->



	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/h1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-#F38181">
							<span>EASY SHOPPING PA MALAWI</span>
							<h2>Clothes</h2>
							<p>Click on the button below to see our wide range of products, from clothes, accessories to
								groceries, food and home equipment. Get all your want by clicking a few buttons!! </p>
							<a href="category.php" class="site-btn sb-line">DISCOVER</a>
							<a href="category.php" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
				</div>
			</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/h2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-#F38181">
							<span>EASY SHOPPING PA MALAWI</span>
							<h2>Beauty and Cosmetics</h2>
							<p>Click on the button below to see our wide range of products, from clothes, accessories to
								groceries, food and home equipment. Get all your want by clicking a few buttons!! </p>
							<a href="category.php" class="site-btn sb-line">DISCOVER</a>
							<a href="category.php" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
		</div>
		</div>
		</div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Multiple Payment Methods</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Quality Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Convenient & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <a id="target1"> <h2>LATEST PRODUCTS</h2> </a>
            </div>
            <div class="product-slider owl-carousel">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/clothes/1.jpg" alt="">
                        <div class="pi-links">
                            <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>MWK 10,000</h6>
                        <p>Red and White Blazer </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="./img/product/pr2.jpeg" alt="">
                        <div class="pi-links">
                            <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>MWK35, 000</h6>
                        <p>Executive White and Blue Print dress</p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/clothes/2.jpg" alt="">
                        <div class="pi-links">
                            <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>MWK7, 000</h6>
                        <p>Casual Checked Jacket </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/clothes/3.jpg" alt="">
                        <div class="pi-links">
                            <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>MWK 13, 000</h6>
                        <p>Off Shoulder Dress</p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/clothes/4.jpg" alt="">
                        <div class="pi-links">
                            <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>MWK13, 000</h6>
                        <p>Frontal Button Down Dress</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest product section end -->



    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>BROWSE TOP SELLING PRODUCTS</h2>
            </div>
            <ul class="product-filter-menu">
                <li><a href="category.php">CLOTHES</a></li>
                <li><a href="category.php">GROCERIES</a></li>
                <li><a href="category.php">TECH</a></li>
                <li><a href="category.php">BEAUTY & COSMETICS</a></li>
                <li><a href="category.php">HEALTH</a></li>
                <li><a href="category.php">HOME AND DECOR</a></li>
            </ul>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/tech/2.jpg" alt="">
                            <div class="pi-links">
                                <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>MWk750, 000</h6>
                            <p>Samsung Flatron Screen</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <!--							<div class="tag-sale">ON SALE</div>-->
                            <img src="./img/product/pr8.jpg" alt="">
                            <div class="pi-links">
                                <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>MWK2, 000</h6>
                            <p>SOBO Orange Squash</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/pr9.jpeg" alt="">
                            <div class="pi-links">
                                <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>MWK9, 000</h6>
                            <p>Blue and white bedsheet set </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/pr6.jpeg" alt="">
                            <div class="pi-links">
                                <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>MWK47, 000</h6>
                            <p>1TB Samsung Hard Drive Storage </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/pr12.png" alt="">
                            <div class="pi-links">
                                <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>MWK11, 000</h6>
                            <p>Fenty Beauty Foundation </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/tech/10.jpg" alt="">
                            <div class="pi-links">
                                <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>MWk156, 000</h6>
                            <p>Airpods Pro</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/pr11.jpeg" alt="">
                            <div class="pi-links">
                                <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>MWK8, 000</h6>
                            <p>Debonairs Large Pepperoni Pizza </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/tech/4.jpg" alt="">
                            <div class="pi-links">
                                <a href="category.php" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>MWK600, 000</h6>
                            <p>Lenovo Laptop </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-5">
                <a href="category.php" class="site-btn"> LOAD MORE </a>
            </div>
        </div>
    </section>
    <!-- Product filter section end -->


    <!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/bg2.jpeg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>CHECK THEM OUT</h2>
				<a href="category.php" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="profile.php"><img src="./img/logo-light.png" alt=""></a>
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
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
<!--				<div class="col-lg-3 col-sm-6">-->
<!--					<div class="footer-widget about-widget">-->
<!--						<h2>Questions</h2>-->
<!--						<div class="fw-latest-post-widget">-->
<!--							<div class="lp-item">-->
<!--								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>-->
<!--								<div class="lp-content">-->
<!--									<h6>what shoes to wear</h6>-->
<!--									<span>Oct 21, 2018</span>-->
<!--									<a href="#" class="readmore">Read More</a>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="lp-item">-->
<!--								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>-->
<!--								<div class="lp-content">-->
<!--									<h6>trends this year</h6>-->
<!--									<span>Oct 21, 2018</span>-->
<!--									<a href="#" class="readmore">Read More</a>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>+265Carts Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>+265Carts Headquarters, Chichiri Shopping Mall, Chipembere Highway</p>
						</div>
						<div class="con-info">
							<span>T.</span>
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>CATALOGUE</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/CARLOGO.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/CARLOGO.png"width="65px" height="70px"  alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="about.php">ABOUT US</a></li>
								
								<li class="current-list-item"><a href="catalogue.php">CATALOGUE</a> </li>
								<li ><a href="testregister.php">TESTDRIVE</a> </li>
                                <li><a href="service.php">SERVICES</a></li>
                                <li><a href="contact.php">CONTACT US</a></li>

							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>LATEST CAR VARIENTS</p>
						<h1>CATALOGUE</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".modelS"> MODEL S</li>
                            <li data-filter=".model3"> MODEL 3</li>
                            <li data-filter=".modelX"> MODEL X</li>
                            <li data-filter=".modelY"> MODEL Y</li>
                      
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
			<?php
             		
					 include"admin/db.php";
					 
					 
							$selcat="select * from tbl_carta where model='Tesla model S' ";
							$execute=mysqli_query($con,$selcat);
							foreach($execute as $value)
							{
						?>
				<div class="col-lg-4 col-md-6 text-center modelS">
					<div class="single-product-item">
						<div class="product-image">
						<img src="admin\images\<?php echo $value['photo'];?>">
						</div>
						<h4><?php echo $value['model'];?></h4>
						<p class="product-price"><span>Price starts at</span><?php echo $value['price'];?></p>
						<a href="register.php" class="cart-btn">Book Now</a>
					</div>
				</div>
				
				<?php        
						}
						

							$selcat="select * from tbl_carta where model='Tesla model 3' ";
							$execute=mysqli_query($con,$selcat);
							foreach($execute as $value)
							{
						?>
				<div class="col-lg-4 col-md-6 text-center model3">
					<div class="single-product-item">
						<div class="product-image">
						<img src="admin\images\<?php echo $value['photo'];?>">
						</div>
						<h4><?php echo $value['model'];?></h4>
						<p class="product-price"><span>Price starts at</span><?php echo $value['price'];?></p>
						<a href="register.php" class="cart-btn">
							Book Now</a>
					</div>
				</div>
				
				<?php        
						}
						

							$selcat="select * from tbl_carta where model='Tesla model X' ";
							$execute=mysqli_query($con,$selcat);
							foreach($execute as $value)
							{
						?>
				<div class="col-lg-4 col-md-6 text-center modelX">
					<div class="single-product-item">
						<div class="product-image">
						<img src="admin\images\<?php echo $value['photo'];?>">
						</div>
						<h4><?php echo $value['model'];?></h4>
						<p class="product-price"><span>Price starts at</span><?php echo $value['price'];?></p>
						<a href="register.php" class="cart-btn">
							Book Now</a>
					</div>
				</div>
				<?php        
						}
						

							$selcat="select * from tbl_carta where model='Tesla model Y' ";
							$execute=mysqli_query($con,$selcat);
							foreach($execute as $value)
							{
						?>
				<div class="col-lg-4 col-md-6 text-center modelY">
					<div class="single-product-item">
						<div class="product-image">
						<img src="admin\images\<?php echo $value['photo'];?>">
						</div>
						<h4><?php echo $value['model'];?></h4>
						<p class="product-price"><span>Price starts at</span><?php echo $value['price'];?></p>
						<a href="register.php" class="cart-btn">
							Book Now</a>
					</div>
				</div>


				<?php        
						}
						?>
				</div>
			</div>
			
		</div>
	</div>
	<!-- end products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets\img\e.png" alt="" width="180px" height="180px">
						</div>
						<div class="single-logo-item">
							<img src="assets\img\r.png" alt="" width="180px" height="180px">
						</div>
						<div class="single-logo-item">
							<img src="assets\img\h.png" alt="" width="180px" height="180px">
						</div>
						<div class="single-logo-item">
							<img src="assets\img\sensor.png" alt="" width="180px" height="180px">
						</div>
						<div class="single-logo-item">
							<img src="assets\img\r.png" alt="" width="180px" height="180px">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Tesla is an American company of Automotive. The company headquartered is in Palo Alto, California, United States. It is the world’s transition to sustainable energy through increasingly affordable electric vehicles in addition to renewable energy generation and storage.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8,California, United States of America</li>
							<li>teslaautomotive@gmail.com</li>
							<li>+148 221155</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="alshin325@gmail.com">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>
<?php 
include 'config/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title></title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="assets/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="assets/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="assets/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<?php include 'component/navbar.php';?>
        <!-- SECTION -->
        
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    <!-- Order Details -->
                    <div class="col-md-3"></div>
					<div class="col-md-6 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
                                <div><strong> DETAIL PRODUK</strong></div>
                                <div><strong> NOMINAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
                                    <div>Bahan Kaos <strong>Polyster</strong></div>
									<div><strong> IDR. 100.000</strong></div>
								</div>
								<div class="order-col">
                                    <div>Ukuran Kaos <strong>XL</strong></div>
									<div></div>
                                </div>
                                <div class="order-col">
                                    <div>Warna Kaos <strong>Biru Dongker</strong></div>
									<div></div>
                                </div>
                                <div class="order-col">
                                    <div>Ukuran Sablon <strong>A4</strong></div>
									<div><strong>IDR. 40.000</strong></div>
                                </div>
                                <div class="order-col">
                                    <div>Jumlah Pesanan <strong>2</strong></div>
									<div></div>
                                </div>
                                <div class="order-col">
                                    <div>Ongkir</div>
                                    <div><strong>IDR.30.000</strong></div>
                                </div>
							</div>
							
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">IDR.310.000</strong></div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Place order</a>
                    </div>
                    <div class="col-md-3"></div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-6 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Hallo selamat datang di website kami, kami menyedikan produk dari brand local indonesia dari kabupaten rembang jawa tengah. </p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Desa Jatimudo Rt 3/3 kecamatan sulang, kabupaten rembang</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>0895395466726</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="profile.php">Profile</a></li>
									<li><a href="carabeli.php">Cara Beli</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#" target="_blank"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/slick.min.js"></script>
		<script src="assets/js/nouislider.min.js"></script>
		<script src="assets/js/jquery.zoom.min.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>
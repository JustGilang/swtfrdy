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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li><a href="#"><b>Product</b></a></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- STORE -->
					<div id="store" class="col-md-12">
						<!-- store products -->
						<div class="row">
							<!-- product -->
							<?php
							$sql = mysqli_query($conn, "SELECT * FROM produk");
							while($data=mysqli_fetch_array($sql)){
								date_default_timezone_set('Asia/Jakarta'); 
							?>
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="uploads/produk/<?= $data['gambar']?>" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="detail_product.php"><?= $data['nama']?></a></h3>
										<h4 class="product-price"><?= $data['harga']?></h4>
										<div class="product-rating"></div>
										<div class="product-btns">
											<button class="add-to-wishlist"><span class="sase">Size&nbsp;<?= $data['size']?></span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<form action="proses/model.php?act=add_cart" method="POST">
											<input type="hidden" name="id_produk" value="<?= $data['id_produk']?>">
											<input type="hidden" name="id_member" value="<?= $_SESSION['id']?>">
											<input type="hidden" name="date" value="<?= date("h:i:s");?>">
											<input type="hidden" name="qty" value="1">
											<input type="hidden" name="total_harga" value="<?= $data['harga']?>">
											<button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</form>
									</div>
								</div>
							</div>
							<!-- /product -->
							<?php }?>
						</div>
						<!-- /store products -->
					</div>
					<!-- /STORE -->
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

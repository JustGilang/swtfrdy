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
	<style>
		.container {
		padding: 2rem 0rem;
		}

		.table-image thead td, .table-image thead th {
		border: 0;
		color: #666;
		font-size: 0.8rem;
		}
		.table-image td, .table-image th {
		vertical-align: middle;
		text-align: center;
		}
		.table-image td.qty, .table-image th.qty {
		max-width: 2rem;
		}

		.price {
		margin-left: 1rem;
		}

		.modal-footer {
		padding-top: 0rem;
		}

	</style>
	<body>
		<?php include 'component/navbar.php';?>
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="container">
								<p style="font-size: medium;">
								<blockquote style="font-size: medium;">
									<em>hello dear customer! welcome to the official website of sweetfridayco. here we provide an updated catalog list and information about item details. </em><br><br>
									<p><a class="btn btn-success btn-large" href="profile.php">Profil Kami &raquo;</a></p>
								</blockquote>
							</div>
						</div>
					</div>	
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Hot Products</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" >
									<div class="products-slick">
										<?php
										$sql = mysqli_query($conn, "SELECT * FROM produk");
										while($data = mysqli_fetch_array($sql)){
											date_default_timezone_set('Asia/Jakarta'); 
										?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="uploads/produk/<?= $data['gambar']?>" alt="">
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
												<form action="proses/model.php?act=add_cart" method="post">
													<input type="hidden" name="id_produk" value="<?= $data['id_produk']?>">
													<input type="hidden" name="id_member" value="<?= $_SESSION['id']?>">
													<input type="hidden" name="qty" value="1">
													<input type="hidden" name="total_harga" value="<?= $data['harga']?>">
													<button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
												</form>
											</div>
										</div>
										<!-- /product -->
										<?php }?>
										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
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

		<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="modal-header border-bottom-0">
					<h5 class="modal-title" id="exampleModalLabel">
					Your Shopping Cart
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-image">
					<thead>
						<tr>
						<th scope="col"></th>
						<th scope="col">Product</th>
						<th scope="col">Price</th>
						<th scope="col">Qty</th>
						<th scope="col">Total</th>
						<th scope="col">Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$sql = mysqli_query($conn, "SELECT * FROM `order` WHERE stats='belum terbayar'");
					while($data = mysqli_fetch_array($sql)){
						$sql1 = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$data[id_produk]'");
						$data1 = mysqli_fetch_array($sql1);
					?>
					<tr>
						<td class="w-25">
							<img src="uploads/produk/<?= $data1['gambar']?>" width="200px" height="200px" class="img-fluid img-thumbnail" alt="Sheep">
						</td>
						<td><?= $data1['nama']?></td>
						<td>IDR. <?= $data1['harga']?></td>
						<td><?= $data['qty']?></td>
						<td>IDR. <?= $data1['harga']*$data['qty']?></td>
						<td>
							<a href="proses/model.php?act=delete_order&id=<?= $data['id_order']?>" class="btn btn-danger btn-sm">
							<i class="fa fa-times"></i>
							</a>
						</td>
					</tr>
					<?php }?>
					</tbody>
					</table> 
					<div class="d-flex justify-content-end">
					</div>
				</div>
				<div class="modal-footer border-top-0 d-flex justify-content-between">
					<br>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<a href="checkout.php?id=<?= $_SESSION['id']?>"><button type="button" class="btn btn-success">Checkout</button></a>
				</div>
				</div>
			</div>
		</div>

		<!-- jQuery Plugins -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/slick.min.js"></script>
		<script src="assets/js/nouislider.min.js"></script>
		<script src="assets/js/jquery.zoom.min.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>

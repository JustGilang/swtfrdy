<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "swtfrdy");
?>
<style>
.ul {
  width: 440px;
  margin: 0 auto;
  padding: 12px 20px 8px 20px;
}
.ul li {
  float: left;
  list-style: none;
}
.ul li a {
  color: #fff;
  text-decoration: none;
  font: 900 12px Lato;
  padding: 8px 20px 8px 20px;
  border: 3px solid #999faf;
  color: #999faf;
  display: inline-block;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 20px;
  position: relative;
}
.ul li a .number {
  padding: 3px 6px 4px 8px;
  background: #999faf;
  position: absolute;
  border-radius: 50px;
  font: 900 12px Lato;
  color: #fff;
  top: -10px;
  right: -13px;
  border: 3px solid #fff;
}

.green:hover {
  color: #fff;
  transition: 0.4s;
  background: #03c9a9;
  border: 3px solid #03c9a9;
}

.red:hover {
  color: #fff;
  transition: 0.4s;
  background: #f62459;
  border: 3px solid #f62459;
}

.blue:hover {
  color: #fff;
  transition: 0.4s;
  background: #3498db;
  border: 3px solid #3498db;
}

.purple:hover {
  color: #fff;
  transition: 0.4s;
  background: #663399;
  border: 3px solid #663399;
}
</style>

<?php
if(isset($_SESSION['id'])){
	$iduser = $_SESSION['id'];
	$queryUser = mysqli_query($conn, "SELECT * FROM member WHERE id='".$iduser."'");
	$arrayUser = mysqli_fetch_array($queryUser);
	$sql = mysqli_query($conn, "SELECT * FROM `order` WHERE id_member='$_SESSION[id]' AND stats='belum terbayar'");
	$data = mysqli_num_rows($sql);
	echo '
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +62890909099</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Jl. Soekarno Hatta 666</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li style="color:white;"><i class="fa fa-user-o"></i> Welcome, <a href="user/index.php"> ' .$arrayUser['nama'] .'</a> | <a href="proses/logout.php"> Logout</a></li> 
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">

						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="assets/img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-8">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->
						
						<!-- CART BAR -->
						<div class="col-md-1">
							<div class="header-logo">
								<ul class="ul">
									<li>
										<a class="green" href="#" data-toggle="modal" data-target="#cartModal">Cart <span class="number">'.$data .'</span></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /SEARCH BAR -->
					</div>
					<!-- row -->
				</div>
						<!-- container -->
			</div>
					<!-- /MAIN HEADER -->
		</header>
	';
}else{
	echo '
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +62890909099</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Jl. Soekarno Hatta 666</a></li>
					</ul>
					<ul class="header-links pull-right">
					<li><a href="login.php?msg=gagal"><i class="fa fa-user-o"></i> Login</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="assets/img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-9">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->	
					</div>
					<!-- row -->
				</div>
						<!-- container -->
			</div>
					<!-- /MAIN HEADER -->
		</header>
	';
}
?>

<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="custom.php">Customize</a></li>
				<li><a href="product.php">Product</a></li>
				<li><a href="carabeli.php">Cara Beli</a></li>
				<li><a href="profile.php">Profile</a></li>
			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->
<?php
include_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getwebQuery = "select * from web_settings";
$web = queryExecute($getwebQuery,false);

$getproductsQuery = "select * from products";
$product = queryExecute($getproductsQuery,false);
?>

<header class="header">
	<div class="header__top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-6">
					<p><?= $web['address']?></p>

				</div>

				<div class="col-md-4 col-6 ">
					<?php if ($loggedInUser) : ?>
						<li style="padding-top:10px;padding-bottom:10px; list-style: none;"   role="presentation" class="dropdown">
							<a  id="drop2" href="#" class="dropdown-toggle text-primary btn btn-info" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								Hi, <?= $loggedInUser['name']; ?>
							</a>
							<ul id="menu2" class="dropdown-menu" role="menu">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Thông tin cá nhân</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Đổi thông tin</a></li>
								<?php if ($loggedInUser !== null && $loggedInUser['role_id'] > 1) : ?>
									<li role="presentation"><a role="menuitem" tabindex="-1" class="login-color" href="<?= ADMIN_URL . 'dashboard' ?>">Quản trị</a></li>
								<?php endif; ?>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="<?= LOGIN_URL . 'logout.php' ?>">Đăng xuất</a></li>
							</ul>
						</li>
					<?php else : ?>
						<li class="list-group-item">
							<a
								href="<?= LOGIN_URL . 'login.php' ?>"
								class="nav-link text-primary login-color"
							>
								Login
							</a>
						</li>
					<?php endif ?>



					</div>


				</div>
			</div>
		</div>
	</div>
	</div>

	<nav class="navigation">
		<div class="container-fluid">
			<div class="navigation__column left">
				<div class="header__logo"><a class="ps-logo" href="index.php"><img style="padding-bottom: 20px;" alt="" src="<?= $web['logo']?>" /></a></div>
			</div>

			<div class="navigation__column center">
				<ul class="main-menu menu">
					<li class="menu-item menu-item-has-children dropdown"><h2 style="margin-right: 20px;"><a href="index.php">Home</a></h2>


					</li>
					<li class="menu-item menu-item-has-children has-mega-menu"><h2 style="margin-right: 20px;"><a href="product-listing.php">Men</a></h2>
						<div class="mega-menu">

					</li>
					<li class="menu-item"><h2 style="margin-right: 20px;"><a href="product-listing2.php">Women</a></h2></li>
					<li class="menu-item menu-item-has-children dropdown"><h2 style="margin-right: 20px;"><a href="blog-grid.php">News</a></h2>
					</li>
				</ul>
			</div>

			<div class="navigation__column right">
				<form action="http://nouthemes.net/html/trueshoes/do_action" class="ps-search--header" method="post"><input class="form-control" placeholder="Search Product…" type="text" /><button></button></form>

				<div class="ps-cart"><a class="ps-cart__toggle" href=""><i class="fa fa-cart-arrow-down"></i></a>

					<div class="ps-cart__listing">

						<div class="ps-cart__footer"><a class="ps-btn" href="cart.php">Check out</a></div>
					</div>
				</div>

				<div class="menu-toggle"></div>
			</div>
		</div>
	</nav>
</header>

<div class="header-services">
	<div class="ps-services owl-slider" data-owl-auto="true" data-owl-dots="false" data-owl-duration="1000" data-owl-gap="0" data-owl-item="1" data-owl-item-lg="1" data-owl-item-md="1" data-owl-item-sm="1" data-owl-item-xs="1" data-owl-loop="true" data-owl-mousedrag="on" data-owl-nav="true" data-owl-speed="7000">
		<p class="ps-service"><strong>Free delivery</strong>: Get free standard delivery on every order with Shoe Store</p>

		<p class="ps-service"><strong>Free delivery</strong>: Get free standard delivery on every order with Shoe Store</p>

		<p class="ps-service"><strong>Free delivery</strong>: Get free standard delivery on every order with Shoe Store</p>
	</div>
</div>

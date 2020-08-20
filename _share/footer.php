<?php
include_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getwebQuery = "select * from web_settings";
$web = queryExecute($getwebQuery,false);


?>
		<div class="ps-home-partner">
			<div class="ps-container">
				<div class="owl-slider" data-owl-auto="true" data-owl-dots="false" data-owl-duration="1000" data-owl-gap="40" data-owl-item="6" data-owl-item-lg="6" data-owl-item-md="5" data-owl-item-sm="4" data-owl-item-xs="2" data-owl-loop="true" data-owl-mousedrag="on" data-owl-nav="false" data-owl-speed="5000"><a href="#"><img alt="" src="<?=ADMIN_ASSET_URL?>images/partner/1.png" /></a><a href="#"><img alt="" src="<?=ADMIN_ASSET_URL?>images/partner/2.png" /></a><a href="#"><img alt="" src="<?=ADMIN_ASSET_URL?>images/partner/3.png" /></a><a href="#"><img alt="" src="<?=ADMIN_ASSET_URL?>images/partner/4.png" /></a><a href="#"><img alt="" src="<?=ADMIN_ASSET_URL?>images/partner/5.png" /></a><a href="#"><img alt="" src="<?=ADMIN_ASSET_URL?>images/partner/6.png" /></a><a href="#"><img alt="" src="<?=ADMIN_ASSET_URL?>images/partner/7.png" /></a><a href="#"><img alt="" src="<?=ADMIN_ASSET_URL?>images/partner/8.png" /></a></div>
			</div>
		</div>


		<div class="ps-subscribe">
			<div class="ps-container">
				<div class="row">
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
						<h3>Sign up to Newsletter</h3>
					</div>

					<div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
						<form action="http://nouthemes.net/html/trueshoes/do_action" class="ps-subscribe__form" method="post"><input class="form-control" placeholder="" type="text" /><button>Sign up now</button></form>
					</div>

					<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
						<p>...and receive <span>$20</span> coupon for first shopping.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="ps-footer bg--cover" data-background="<?=ADMIN_ASSET_URL?>images/background/parallax.jpg">
			<div class="ps-footer__content">
				<div class="ps-container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
							<aside class="ps-widget--footer ps-widget--info">
								<header><a class="ps-logo" href="index.html"><img alt="" src="<?=ADMIN_ASSET_URL?>images/logo-white.png" /></a>

									<h3 class="ps-widget__title">Address Office 1</h3>
								</header>

								<footer>
									<p><strong><?= $web['address']?></strong></p>

									<p>Email: <a href="http://nouthemes.net/cdn-cgi/l/email-protection#46353336362934320635322934236825292b"><span class="__cf_email__" data-cfemail="8efdfbfefee1fcfacefdfae1fceba0ede1e3">[email&#160;protected]</span></a></p>

									<p><?= $web['phone_number']?></p>
								</footer>
							</aside>
						</div>



						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
							<aside class="ps-widget--footer ps-widget--link">
								<header>
									<h3 class="ps-widget__title">Find Our store</h3>
								</header>

								<footer>
									<ul class="ps-list--link">
										<li><a href="#">Coupon Code</a></li>
										<li><a href="#">SignUp For Email</a></li>
										<li><a href="#">Site Feedback</a></li>
										<li><a href="#">Careers</a></li>
									</ul>
								</footer>
							</aside>
						</div>

						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
							<aside class="ps-widget--footer ps-widget--link">
								<header>
									<h3 class="ps-widget__title">Get Help</h3>
								</header>

								<footer>
									<ul class="ps-list--line">
										<li><a href="#">Order Status</a></li>
										<li><a href="#">Shipping and Delivery</a></li>
										<li><a href="#">Returns</a></li>
										<li><a href="#">Payment Options</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</footer>
							</aside>
						</div>

						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
							<aside class="ps-widget--footer ps-widget--link">
								<header>
									<h3 class="ps-widget__title">Products</h3>
								</header>

								<footer>
									<ul class="ps-list--line">
										<li><a href="#">Shoes</a></li>
										<li><a href="#">Clothing</a></li>
										<li><a href="#">Accessries</a></li>
										<li><a href="#">Football Boots</a></li>
									</ul>
								</footer>
							</aside>
						</div>
					</div>
				</div>
			</div>

			<div class="ps-footer__copyright">
				<div class="ps-container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
							<p>&copy; <a href="#">NOUTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> Alena Studio</a></p>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
							<ul class="ps-social">
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

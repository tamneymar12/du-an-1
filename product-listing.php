<?php
session_start();
include_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$getProductQuery = "select * from products where status = '2' ";
$products = queryExecute($getProductQuery, true);

$getnewQuery = "select * from news";
$news = queryExecute($getnewQuery, true);
?>
<!DOCTYPE html>
<html lang="en">
<style>
	.ps-shoe__price {
		color: red;
	}
</style>
<!-- Mirrored from nouthemes.net/html/trueshoes/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:10:41 GMT -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href="apple-touch-icon.png" rel="apple-touch-icon" />
	<link href="favicon.png" rel="icon" />
	<meta name="author" content="Nghia Minh Luong">
	<meta name="keywords" content="Default Description">
	<meta name="description" content="Default keyword">
	<title>Shoe - Homepage</title>
	<!-- Fonts-->
	<?php include_once "./_share/style.php" ?>
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->

<body class="ps-loading">
	<div class="header--sidebar"></div>

	<?php include_once "./_share/header.php" ?>

	<main class="ps-main">
		<div class="ps-banner">
			<div class="rev_slider fullscreenbanner" id="home-banner">
				<ul>
					<li class="ps-banner" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-2972" data-rotate="0" data-slotamount="default" data-transition="random"><img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="5" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slider/3.jpg" />
						<div class="tp-caption ps-banner__header" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-hoffset="['-60','15','15','15']" data-responsive_offset="on" data-type="text" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-x="left" data-y="['middle','middle','middle','middle']" id="layer-1">
							<p>March 2002<br />
								Nike SB Dunk Low Pro</p>
						</div>

						<div class="tp-caption ps-banner__title" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-hoffset="['-60','15','15','15']" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-voffset="['-60','-40','-50','-70']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" id="layer21">
							<p class="text-uppercase">SUBA</p>
						</div>

						<div class="tp-caption ps-banner__description" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-hoffset="['-60','15','15','15']" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-voffset="['30','50','50','50']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" id="layer211">
							<p>Supa wanted something that was going to rep his East Coast<br />
								roots and, more specifically, his hometown of<br />
								New York City in a big way.</p>
						</div>
						<a class="tp-caption ps-btn" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-hoffset="['-60','15','15','15']" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-voffset="['120','140','200','200']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" href="#" id="layer31">Purchase Now</a>
					</li>
					<li class="ps-banner ps-banner--white" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-100" data-rotate="0" data-slotamount="default" data-transition="random"><img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="5" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slider/2.jpg" />
						<div class="tp-caption ps-banner__header" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-hoffset="['-60','15','15','15']" data-responsive_offset="on" data-type="text" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-x="left" data-y="['middle','middle','middle','middle']" id="layer20">
							<p>BEST ITEM<br />
								THIS SUMMER</p>
						</div>

						<div class="tp-caption ps-banner__title" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-hoffset="['-60','15','15','15']" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-voffset="['-60','-40','-50','-70']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" id="layer339">
							<p class="text-uppercase">Recovery</p>
						</div>

						<div class="tp-caption ps-banner__description" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-hoffset="['-60','15','15','15']" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-voffset="['30','50','50','50']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" id="layer2-14">
							<p>Supa wanted something that was going to rep his East Coast<br />
								roots and, more specifically, his hometown of<br />
								New York City in a big way.</p>
						</div>
						<a class="tp-caption ps-btn" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-hoffset="['-60','15','15','15']" data-responsive_offset="on" data-textalign="['center','center','center','center']" data-type="text" data-voffset="['120','140','200','200']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" href="#" id="layer364">Purchase Now</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
			<div class="ps-container">
				<div class="ps-section__header mb-50">
					<h3 class="ps-section__title" data-mask="features">- GIÀY NAM</h3>

					<ul class="ps-masonry__filter">
						<li class="current"><a data-filter="*" href="#">All <sup>8</sup></a></li>
						<li><a data-filter=".nike" href="#">Nike <sup>1</sup></a></li>
						<li><a data-filter=".adidas" href="#">Adidas <sup>1</sup></a></li>
						<li><a data-filter=".men" href="#">Men <sup>1</sup></a></li>
						<li><a data-filter=".women" href="#">Women <sup>1</sup></a></li>
						<li><a data-filter=".kids" href="#">Kids <sup>4</sup></a></li>
					</ul>
				</div>

				<div class="ps-product__columns">
					<?php foreach ($products as $pro) : ?>
						<div class="ps-product__column">
							<div class="ps-shoe mb-30">
								<div class="ps-shoe__thumbnail">
									<a class="ps-shoe__favorite" href="product-detail.php?idpro=<?= $pro['id'] ?>"><i class="ps-icon-heart"></i></a><img src="<?= $pro['image'] ?>" alt=""><a class="ps-shoe__overlay" href="product-detail.php?idpro=<?= $pro['id'] ?>"></a>
								</div>
								<div class="ps-shoe__content">
									<div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detail.php?idpro=<?= $pro['id'] ?>""><?= $pro['name'] ?></a>
									<p class=" ps-shoe__categories">,<a href="product-detail.php?idpro=<?= $pro['id'] ?>""> <?php if ($pro['status'] == 2) { ?>
                                            <a class=" text-danger">Nike</a>
										<?php } else if ($pro['status'] > 2) { ?>
											<a class="text-success">Adidas</a>
										<?php } ?></a>,
										</p><span style="color: red;" class="ps-shoe__price">
											<?= $pro['price'] ?>$</span>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		</div>
		</div>



		<div class="ps-section--offer">
			<div class="ps-column"><a class="ps-offer" href="product-listing.html"><img alt="" src="images/banner/home-banner-1.png" /></a></div>

			<div class="ps-column"><a class="ps-offer" href="product-listing.html"><img alt="" src="images/banner/home-banner-2.png" /></a></div>
		</div>

		<div class="ps-section--sale-off ps-section pt-80 pb-40">
			<div class="ps-container">
				<div class="ps-section__header mb-50">
					<h3 class="ps-section__title" data-mask="Sale off">- Hot Deal Today</h3>
				</div>

				<div class="ps-section__content">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
							<div class="ps-hot-deal">
								<h3>Nike DUNK Max 95 OG</h3>

								<p class="ps-hot-deal__price">Only: <span>&pound;155</span></p>

								<ul class="ps-countdown" data-time="December 30, 2017 15:37:25">
									<li>
										<p>Hours</p>
									</li>
									<li class="divider">:</li>
									<li>
										<p>minutes</p>
									</li>
									<li class="divider">:</li>
									<li>
										<p>Seconds</p>
									</li>
								</ul>
								<a class="ps-btn" href="#">Order Today</a>
							</div>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
							<div class="ps-hotspot">
								<div class="ps-hotspot__content">
									<p class="heading"><a class="point first active" href="javascript:;">JUMP TO HEADER</a></p>

									<p><a class="point first active" href="javascript:;">Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</a></p>
								</div>

								<div class="ps-hotspot__content">
									<p class="heading"><a class="point second" href="javascript:;">JUMP TO HEADER</a></p>

									<p><a class="point second" href="javascript:;">Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</a></p>
								</div>

								<div class="ps-hotspot__content">
									<p class="heading"><a class="point third" href="javascript:;">JUMP TO HEADER</a></p>

									<p><a class="point third" href="javascript:;">Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</a></p>
								</div>
								<img alt="" src="images/hot-deal.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
			<div class="ps-container">
				<div class="ps-section__header mb-50">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
							<h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
							<div class="ps-owl-actions"><a class="ps-prev" href="#">Prev</a><a class="ps-next" href="#">Next</a></div>
						</div>
					</div>
				</div>

				<div class="ps-section__content">
					<div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-dots="false" data-owl-duration="1000" data-owl-gap="30" data-owl-item="4" data-owl-item-lg="4" data-owl-item-md="3" data-owl-item-sm="2" data-owl-item-xs="1" data-owl-loop="true" data-owl-mousedrag="on" data-owl-nav="false" data-owl-speed="5000">
						<div class="ps-shoes--carousel">
							<div class="ps-shoe">
								<div class="ps-shoe__thumbnail">
									<div class="ps-badge"><span>New</span></div>
									<img alt="" src="images/shoe/1.jpg" />
								</div>

								<div class="ps-shoe__content">
									<div class="ps-shoe__variants">
										<div class="ps-shoe__variant normal"><img alt="" src="images/shoe/2.jpg" /><img alt="" src="images/shoe/3.jpg" /><img alt="" src="images/shoe/4.jpg" /><img alt="" src="images/shoe/5.jpg" /></div>
										<select class="ps-rating ps-shoe__rating">
											<option value="1">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
											<option value="2">5</option>
										</select>
									</div>

									<div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>

										<p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
										<span class="ps-shoe__price"> &pound; 120</span>
									</div>
								</div>
							</div>
						</div>

						<div class="ps-shoes--carousel">
							<div class="ps-shoe">
								<div class="ps-shoe__thumbnail">
									<div class="ps-badge"><span>New</span></div>

									<div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div>
									<img alt="" src="images/shoe/2.jpg" />
								</div>

								<div class="ps-shoe__content">
									<div class="ps-shoe__variants">
										<div class="ps-shoe__variant normal"><img alt="" src="images/shoe/2.jpg" /><img alt="" src="images/shoe/3.jpg" /><img alt="" src="images/shoe/4.jpg" /><img alt="" src="images/shoe/5.jpg" /></div>
										<select class="ps-rating ps-shoe__rating">
											<option value="1">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
											<option value="2">5</option>
										</select>
									</div>

									<div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>

										<p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
										<span class="ps-shoe__price"> <del>&pound;220</del> &pound; 120</span>
									</div>
								</div>
							</div>
						</div>

						<div class="ps-shoes--carousel">
							<div class="ps-shoe">
								<div class="ps-shoe__thumbnail">
									<div class="ps-badge"><span>New</span></div>
									<img alt="" src="images/shoe/3.jpg" />
								</div>

								<div class="ps-shoe__content">
									<div class="ps-shoe__variants">
										<div class="ps-shoe__variant normal"><img alt="" src="images/shoe/2.jpg" /><img alt="" src="images/shoe/3.jpg" /><img alt="" src="images/shoe/4.jpg" /><img alt="" src="images/shoe/5.jpg" /></div>
										<select class="ps-rating ps-shoe__rating">
											<option value="1">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
											<option value="2">5</option>
										</select>
									</div>

									<div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>

										<p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
										<span class="ps-shoe__price"> &pound; 120</span>
									</div>
								</div>
							</div>
						</div>

						<div class="ps-shoes--carousel">
							<div class="ps-shoe">
								<div class="ps-shoe__thumbnail"><img alt="" src="images/shoe/4.jpg" /></div>

								<div class="ps-shoe__content">
									<div class="ps-shoe__variants">
										<div class="ps-shoe__variant normal"><img alt="" src="images/shoe/2.jpg" /><img alt="" src="images/shoe/3.jpg" /><img alt="" src="images/shoe/4.jpg" /><img alt="" src="images/shoe/5.jpg" /></div>
										<select class="ps-rating ps-shoe__rating">
											<option value="1">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
											<option value="2">5</option>
										</select>
									</div>

									<div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>

										<p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
										<span class="ps-shoe__price"> &pound; 120</span>
									</div>
								</div>
							</div>
						</div>

						<div class="ps-shoes--carousel">
							<div class="ps-shoe">
								<div class="ps-shoe__thumbnail">
									<div class="ps-badge"><span>New</span></div>
									<img alt="" src="images/shoe/5.jpg" />
								</div>

								<div class="ps-shoe__content">
									<div class="ps-shoe__variants">
										<div class="ps-shoe__variant normal"><img alt="" src="images/shoe/2.jpg" /><img alt="" src="images/shoe/3.jpg" /><img alt="" src="images/shoe/4.jpg" /><img alt="" src="images/shoe/5.jpg" /></div>
										<select class="ps-rating ps-shoe__rating">
											<option value="1">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
											<option value="2">5</option>
										</select>
									</div>

									<div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>

										<p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
										<span class="ps-shoe__price"> &pound; 120</span>
									</div>
								</div>
							</div>
						</div>

						<div class="ps-shoes--carousel">
							<div class="ps-shoe">
								<div class="ps-shoe__thumbnail"><img alt="" src="images/shoe/6.jpg" /></div>

								<div class="ps-shoe__content">
									<div class="ps-shoe__variants">
										<div class="ps-shoe__variant normal"><img alt="" src="images/shoe/2.jpg" /><img alt="" src="images/shoe/3.jpg" /><img alt="" src="images/shoe/4.jpg" /><img alt="" src="images/shoe/5.jpg" /></div>
										<select class="ps-rating ps-shoe__rating">
											<option value="1">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
											<option value="2">5</option>
										</select>
									</div>

									<div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air Jordan 7 Retro</a>

										<p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
										<span class="ps-shoe__price"> &pound; 120</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="ps-home-testimonial bg--parallax pb-80" data-background="images/background/parallax.jpg">
			<div class="container">
				<div class="owl-slider" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut" data-owl-auto="true" data-owl-dots="true" data-owl-duration="1000" data-owl-gap="0" data-owl-item="1" data-owl-item-lg="1" data-owl-item-md="1" data-owl-item-sm="1" data-owl-item-xs="1" data-owl-loop="true" data-owl-mousedrag="on" data-owl-nav="false" data-owl-speed="5000">
					<div class="ps-testimonial">
						<div class="ps-testimonial__thumbnail"><img alt="" src="images/testimonial/1.jpg" /></div>

						<header><select class="ps-rating">
								<option value="1">1</option>
								<option value="1">2</option>
								<option value="1">3</option>
								<option value="1">4</option>
								<option value="5">5</option>
							</select>

							<p>Logan May - CEO &amp; Founder Invision</p>
						</header>

						<footer>
							<p>&ldquo;Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. &ldquo;</p>
						</footer>
					</div>

					<div class="ps-testimonial">
						<div class="ps-testimonial__thumbnail"><img alt="" src="images/testimonial/2.jpg" /></div>

						<header><select class="ps-rating">
								<option value="1">1</option>
								<option value="1">2</option>
								<option value="1">3</option>
								<option value="1">4</option>
								<option value="5">5</option>
							</select>

							<p>Logan May - CEO &amp; Founder Invision</p>
						</header>

						<footer>
							<p>&ldquo;Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. &ldquo;</p>
						</footer>
					</div>

					<div class="ps-testimonial">
						<div class="ps-testimonial__thumbnail"><img alt="" src="images/testimonial/3.jpg" /></div>

						<header><select class="ps-rating">
								<option value="1">1</option>
								<option value="1">2</option>
								<option value="1">3</option>
								<option value="1">4</option>
								<option value="5">5</option>
							</select>

							<p>Logan May - CEO &amp; Founder Invision</p>
						</header>

						<footer>
							<p>&ldquo;Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. &ldquo;</p>
						</footer>
					</div>
				</div>
			</div>
		</div>

		<div class="ps-section ps-home-blog pt-80 pb-80">
			<div class="ps-container">
				<div class="ps-section__header mb-50">
					<h2 class="ps-section__title" data-mask="News">- Our Story</h2>

					<div class="ps-section__action"><a class="ps-morelink text-uppercase" href="#">View all post</a></div>
				</div>

				<div class="ps-section__content">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
							<div class="ps-post">
								<div class="ps-post__thumbnail"><img alt="" src="images/blog/1.jpg" /></div>

								<div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">An Inside Look at the Breaking2 Kit</a>

									<p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.html">Alena Studio</a></span> -<span class="ml-5">Jun 10, 2017</span></p>

									<p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further&hellip;</p>
									<a class="ps-morelink" href="blog-detail.html">Read more</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
							<div class="ps-post">
								<div class="ps-post__thumbnail"><img alt="" src="images/blog/2.jpg" /></div>

								<div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">Unpacking the Breaking2 Race Strategy</a>

									<p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.html">Alena Studio</a></span> -<span class="ml-5">Jun 10, 2017</span></p>

									<p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further&hellip;</p>
									<a class="ps-morelink" href="blog-detail.html">Read more</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
							<div class="ps-post">
								<div class="ps-post__thumbnail"><img alt="" src="images/blog/3.jpg" /></div>

								<div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">Nike&rsquo;s Latest Football Cleat Breaks the Mold</a>

									<p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.html">Alena Studio</a></span> -<span class="ml-5">Jun 10, 2017</span></p>

									<p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further&hellip;</p>
									<a class="ps-morelink" href="blog-detail.html">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once "./_share/footer.php" ?>
	</main>
	<?php include_once "./_share/script.php" ?>
	<!-- Mirrored from nouthemes.net/html/trueshoes/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:13:42 GMT -->

</html>

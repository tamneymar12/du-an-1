<?php
include_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getNewsQuery = "select * from news where id = '$id'";
$new = queryExecute($getNewsQuery,false);
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

<!-- Mirrored from nouthemes.net/html/trueshoes/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:17:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Shoe - Blog Detail</title>
    <!-- Fonts-->
    <?php include_once "./_share/style.php"?>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>

    <?php include_once "./_share/header.php" ?>

    <main class="ps-main">
      <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                  <div class="ps-post--detail">
                    <div class="ps-post__thumbnail"><img src="<?= $new['image'] ?>" alt=""></div>
                    <div class="ps-post__header">
                      <h3 class="ps-post__title"><?= $new['name']?></h3>
                      <p class="ps-post__meta">Posted by <a href="blog-grid.php">Alena Studio</a> on August 17, 2016  in <a href="blog-grid.html">Men Shoes</a> , <a href="blog-grid.php">Stylish</a></p>
                    </div>
                    <div class="ps-post__content">
                      <p><?= $new['content']?></p>
                     <img src="" alt="">
                    </div>
                    <div class="ps-post__footer">
                      <p class="ps-post__tags"><i class="fa fa-tags"></i><a href="blog-list.html">Man shoe</a>,<a href="blog-list.html"> Woman</a>,<a href="blog-list.html"> Nike</a></p>
                      <div class="ps-post__actions"><span><i class="fa fa-comments"></i> 23 Comments</span><span><i class="fa fa-heart"></i>  likes</span>
                        <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Share</a>
                          <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ps-author">
                    <div class="ps-author__thumbnail"><img src="images/user/1.jpg" alt=""></div>
                    <div class="ps-author__content">
                      <header>
                        <h4>MARK GREY</h4>
                        <p>WEB DESIGNER</p>
                      </header>
                      <p>The development of the mass spectrometer allowed the mass of atoms to be measured with increased accuracy. The device uses the launch and continued operation of the Hubble space telescope probably.</p>
                    </div>
                  </div>
                  <div class="ps-comments">
                    <h3>Comment(4)</h3>
                    <div class="ps-comment">
                      <div class="ps-comment__thumbnail"><img src="images/user/2.jpg" alt=""></div>
                      <div class="ps-comment__content">
                        <header>
                          <h4>MARK GREY <span>(15 minutes ago)</span></h4><a href="#">Reply<i class="ps-icon-arrow-left"></i></a>
                        </header>
                        <p>The development of the mass spectrometer allowed the mass of atoms to be measured with increased accuracy. The device uses the launch and continued operation of the Hubble space telescope probably.</p>
                      </div>
                    </div>
                    <div class="ps-comment ps-comment--reply">
                      <div class="ps-comment__thumbnail"><img src="images/user/3.jpg" alt=""></div>
                      <div class="ps-comment__content">
                        <header>
                          <h4>MARK GREY <span>(3 hours ago)</span></h4><a href="#">Reply<i class="ps-icon-arrow-left"></i></a>
                        </header>
                        <p>The development of the mass spectrometer allowed the mass of atoms to be measured with increased accuracy. The device uses  continue ace explore.</p>
                      </div>
                    </div>
                    <div class="ps-comment">
                      <div class="ps-comment__thumbnail"><img src="images/user/4.jpg" alt=""></div>
                      <div class="ps-comment__content">
                        <header>
                          <h4>MARK GREY <span>(1 day ago)</span></h4><a href="#">Reply<i class="ps-icon-arrow-left"></i></a>
                        </header>
                        <p>The development of the mass spectrometer allowed the mass of atoms to be measured with increased accuracy. The device uses the launch and continued operation of the Hubble space telescope probably.</p>
                      </div>
                    </div>
                  </div>
                  <form class="ps-form--comment" action="http://nouthemes.net/html/trueshoes/do_action" method="post">
                    <h3>LEAVE A COMMENT</h3>
                    <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Your Name">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <input class="form-control" type="email" placeholder="E-mail">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Subject">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Phone Number">
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-group">
                              <textarea class="form-control" rows="6" placeholder="Text your message here..."></textarea>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                      <button class="ps-btn ps-btn--sm ps-contact__submit">Send Message<i class="ps-icon-next"></i></button>
                    </div>
                  </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                  <aside class="ps-widget--sidebar ps-widget--search">
                    <form class="ps-search--widget" action="http://nouthemes.net/html/trueshoes/do_action" method="post">
                      <input class="form-control" type="text" placeholder="Search posts...">
                      <button><i class="ps-icon-search"></i></button>
                    </form>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Archive</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-list--arrow">
                        <li class="current"><a href="product-listing.html">Shoe(321)</a></li>
                        <li><a href="product-listing.html">Amazin’ Glazin’</a></li>
                        <li><a href="product-listing.html">The Crusty Croissant</a></li>
                        <li><a href="product-listing.html">The Rolling Pin</a></li>
                        <li><a href="product-listing.html">Skippity Scones</a></li>
                        <li><a href="product-listing.html">Mad Batter</a></li>
                        <li><a href="product-listing.html">Confection Connection</a></li>
                      </ul>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Ads Banner</h3>
                    </div>
                    <div class="ps-widget__content"><a href="product-listing-2.html"><img src="images/offer/sidebar.jpg" alt=""></a></div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Recent Posts</h3>
                    </div>
                    <div class="ps-widget__content">
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="images/blog/sidebar/1.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Micenas Placerat Nibh Loreming Fentum</a><span>SEP 29, 2017</span></div>
                      </div>
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="images/blog/sidebar/2.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Micenas Placerat Nibh Loreming Fentum</a><span>SEP 29, 2017</span></div>
                      </div>
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="images/blog/sidebar/3.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Micenas Placerat Nibh Loreming Fentum</a><span>SEP 29, 2017</span></div>
                      </div>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Best Seller</h3>
                    </div>
                    <div class="ps-widget__content">
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="images/shoe/sidebar/1.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Men's Shoe</a>
                          <p><del> £253.00</del> £152.00</p><a class="ps-btn" href="#">PURCHASE</a>
                        </div>
                      </div>
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="images/shoe/sidebar/2.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Nike Flight Bonafide</a>
                          <p><del> £253.00</del> £152.00</p><a class="ps-btn" href="#">PURCHASE</a>
                        </div>
                      </div>
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="images/shoe/sidebar/3.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Nike Sock Dart QS</a>
                          <p><del> £253.00</del> £152.00</p><a class="ps-btn" href="#">PURCHASE</a>
                        </div>
                      </div>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Tags</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-tags">
                        <li><a href="product-listing.html">Men</a></li>
                        <li><a href="product-listing.html">Female</a></li>
                        <li><a href="product-listing.html">B&G</a></li>
                        <li><a href="product-listing.html">ugly fashion</a></li>
                        <li><a href="product-listing.html">Nike</a></li>
                        <li><a href="product-listing.html">Dior</a></li>
                        <li><a href="product-listing.html">Adidas</a></li>
                        <li><a href="product-listing.html">Diour</a></li>
                      </ul>
                    </div>
                  </aside>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="http://nouthemes.net/html/trueshoes/do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Sign up now</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header><a class="ps-logo" href="index.html"><img src="images/logo-white.png" alt=""></a>
                        <h3 class="ps-widget__title">Address Office 1</h3>
                      </header>
                      <footer>
                        <p><strong>460 West 34th Street, 15th floor, New York</strong></p>
                        <p>Email: <a href="http://nouthemes.net/cdn-cgi/l/email-protection#4c3f393c3c233e380c3f38233e29622f2321"><span class="__cf_email__" data-cfemail="1b686e6b6b74696f5b686f74697e35787476">[email&#160;protected]</span></a></p>
                        <p>Phone: +323 32434 5334</p>
                        <p>Fax: ++323 32434 5333</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second">
                      <header>
                        <h3 class="ps-widget__title">Address Office 2</h3>
                      </header>
                      <footer>
                        <p><strong>PO Box 16122 Collins  Victoria 3000 Australia</strong></p>
                        <p>Email: <a href="http://nouthemes.net/cdn-cgi/l/email-protection#c9babcb9b9a6bbbd89babda6bbace7aaa6a4"><span class="__cf_email__" data-cfemail="cfbcbabfbfa0bdbb8fbcbba0bdaae1aca0a2">[email&#160;protected]</span></a></p>
                        <p>Phone: +323 32434 5334</p>
                        <p>Fax: ++323 32434 5333</p>
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
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once "./_share/footer.php" ?>
    </main>
    <!-- JS Library-->

    <?php include_once "./_share/script.php" ?>
  </body>

<!-- Mirrored from nouthemes.net/html/trueshoes/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:17:50 GMT -->
</html>

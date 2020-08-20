<?php
session_start();
include_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$id = isset($_GET['idpro']) ? $_GET['idpro'] : -1;
$Getproduct = "select * from products where id = '$id'";
$pro = queryExecute($Getproduct, false);
// dd($pro);
// print_r($pro);
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

<!-- Mirrored from nouthemes.net/html/trueshoes/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:17:19 GMT -->

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
  <title>Shoe - Product Detail</title>
  <!-- Fonts-->
  <?php include_once "./_share/style.php" ?>
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
    <div class="test">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
          </div>
        </div>
      </div>
    </div>

    <div class="ps-product--detail pt-60">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-10 col-md-12 col-lg-offset-1">
            <div class="ps-product__thumbnail">
              <div class="ps-product__preview">
                <div class="ps-product__variants">
                  <div class="item"><img src="<?= $pro['image'] ?>" alt=""></div>
                  <div class="item"><img src="<?= $pro['image'] ?>" alt=""></div>
                  <div class="item"><img src="<?= $pro['image'] ?>" alt=""></div>
                </div>

              </div>

              <div class="ps-product__image">
                <div class="item"><img class="zoom" src="<?=  $pro['image'] ?>" alt="" ></div>
              </div>
            </div>
            <div class="ps-product__thumbnail--mobile">
              <div class="ps-product__main-img"><img src="<?= $pro['image'] ?>" alt=""></div>
              <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/shoe-detail/1.jpg" alt=""><img src="images/shoe-detail/2.jpg" alt=""><img src="images/shoe-detail/3.jpg" alt=""></div>
            </div>
            <div class="ps-product__info">
              <div class="ps-product__rating">
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="2">5</option>
                </select><a href="#">(Read all 8 reviews)</a>
              </div>
              <h1><?= $pro['name'] ?></h1>
              <p class="ps-product__category"><a href="product-detail.php?idpro=<?= $pro['id'] ?>"> <?php if ($pro['status'] == 2) { ?>
                                            <a class="text-danger">Nike</a>
                                        <?php } else if ($pro['status'] > 2) { ?>
                                            <a class="text-success">Adidas</a>
										<?php } ?></a>,</a></p>
              <h3 class="ps-product__price"><?= $pro['price'] ?>$ </h3>
              <div class="ps-product__block ps-product__quickview">
                <h4>QUICK REVIEW</h4>
                <p>The Nike Free RN 2017 Men's Running Shoe weighs less than previous versions and features an updated knit material…</p>
              </div>
              <div class="ps-product__block ps-product__style">

              </div>
              <div class="ps-product__block ps-product__size">
                <h4>CHOOSE SIZE<a href="#">Size chart</a></h4>
                <select class="ps-select selectpicker">
                  <option value="1">Select Size</option>
                  <option value="2">4</option>
                  <option value="3">4.5</option>
                  <option value="3">5</option>
                  <option value="3">6</option>
                  <option value="3">6.5</option>
                  <option value="3">7</option>
                  <option value="3">7.5</option>
                  <option value="3">8</option>
                  <option value="3">8.5</option>
                  <option value="3">9</option>
                  <option value="3">9.5</option>
                  <option value="3">10</option>
                </select>
                <div class="form-group">
                  <input class="form-control" type="number" value="1">
                </div>
              </div>
              <div class="ps-product__shopping"><a class="ps-btn mb-10" href="cart.php?idcard=<?= $pro['id'] ?>">Add to cart<i class="ps-icon-next"></i></a>
                <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="ps-icon-heart"></i></a><a href="compare.html"><i class="ps-icon-share"></i></a></div>
              </div>
            </div>
            <div class="clearfix"></div>

          </div>
        </div>
      </div>
    </div>



    <?php include_once "./_share/footer.php" ?>
  </main>
  <!-- JS Library-->
  <?php include_once "./_share/script.php" ?>
</body>

<!-- Mirrored from nouthemes.net/html/trueshoes/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:17:34 GMT -->

</html>

<?php
session_start();
include_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$id1 = isset($_GET['idcard']) ? $_GET['idcard'] : -1;
// var_dump($id);
$getProductsQuery = "select * from products where id = '$id1'";
$pr = queryExecute($getProductsQuery, false);
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

<!-- Mirrored from nouthemes.net/html/trueshoes/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:17:35 GMT -->

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
  <title>Shoe - Cart</title>
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
    <div class="ps-content pt-80 pb-80">
      <div class="ps-container">
        <div class="ps-cart-listing">
          <table class="table ps-cart__table">
            <thead>
              <tr>
                <th>All Products</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a class="ps-product__preview" href="product-detail.php"><?= $pr['name'] ?> <img src="<?= $pr['image'] ?>" width="100" alt=""></td>
                <td>$<?= $pr['price'] ?></td>
                <td>
                  1
                </td>
                <td>$<?= $pr['price'] ?></td>
                <td>
                  <a href="<?= BASE_URL ?>" class="ps-remove"></a>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="ps-cart__actions">
            <div class="ps-cart__promotion">
              <div class="form-group">
                <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                  <input class="form-control" type="text" placeholder="Promo Code">
                </div>
              </div>
              <div class="form-group">
                <button class="ps-btn ps-btn--gray">Continue Shopping</button>
              </div>
            </div>
            <div class="ps-cart__total">
              <h3>Total Price: <span> $<?= $pr['price'] ?></span></h3><a class="ps-btn" href="checkout.php">Process to checkout<i class="ps-icon-next"></i></a>
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

<!-- Mirrored from nouthemes.net/html/trueshoes/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:17:43 GMT -->

</html>

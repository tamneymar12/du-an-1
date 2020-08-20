<?php
include_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;

$getNewsQuery = "select * from news";
$news = queryExecute($getNewsQuery, true);
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

<!-- Mirrored from nouthemes.net/html/trueshoes/blog-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:17:16 GMT -->

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
  <title>Shoe - Blog Grid 2</title>
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
  x
  <main class="ps-main">
    <div class="ps-blog-grid pt-80 pb-80">

      <div class="ps-container">

        <div class="row">
          <?php foreach ($news as $ne) : ?>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post mb-30">
                <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.php"></a><img src="<?= $ne['image']?>" alt=""></div>
                <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php"><?= $ne['name'] ?></a>
                  <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.html">Alena Studio</a></span> -<span class="ml-5"><?= $ne['created_date'] ?></span></p>
                  <p><?= $ne['content']?></p><a class="ps-morelink" href="blog-detail.php">Read more<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          <?php endforeach ?>

        </div>

      </div>
    </div>

    <?php include_once "./_share/footer.php" ?>
  </main>

  <!-- JS Library-->
  <?php include_once "./_share/script.php" ?>
</body>

<!-- Mirrored from nouthemes.net/html/trueshoes/blog-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2020 09:17:16 GMT -->

</html>

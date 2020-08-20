<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = $_POST['id'];
$name = trim($_POST['name']);
$masp = trim($_POST['masp']);
$price = trim($_POST['price']);
$image = $_FILES['image'];
$status = trim($_POST['status']);
// kiểm tra sp có tồn tại ko
$getProductsQuery = "select * from products  where id = '$id'";
$products = queryExecute($getProductsQuery, false);

$filename = $products['image'];
if ($image['size'] > 0) {
  $filename = uniqid() . '-' . $image['name'];
  move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
  $filename = "public/admin/img/" . $filename;
}

$updateProductsQuery = "update products
                    set
                          name = '$name',
                          masp = '$masp',
                          price = '$price',
                          image = '$filename',
                          status= '$status'
                    where id = '$id'";

queryExecute($updateProductsQuery, false);// dd($filename);
header("location: " . ADMIN_URL . "products");
die;

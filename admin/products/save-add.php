<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$masp = trim($_POST['masp']);
$price = trim($_POST['price']);
$image = $_FILES['image'];
$status = trim($_POST['status']);
// validate bằng php
$nameerr = "";
$emailerr = "";
$passworderr = "";
// check name

$filename = $news['image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}
// upload file ảnh
$insertproductsQuery = "insert into products
                          (name,masp, price, image, status)
                    values
                          ('$name','$masp', '$price', '$filename', '$status')";
            // dd($insertproductsQuery);
queryExecute($insertproductsQuery, false);
header("location: " . ADMIN_URL . "products");
die;

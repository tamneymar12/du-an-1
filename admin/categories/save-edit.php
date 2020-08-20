<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = $_POST['id'];

$name = trim($_POST['name']);
$price = trim($_POST['price']);
$desc_short = trim($_POST['desc_short']);
$image = $_FILES['image'];
$description = trim($_POST['description']);
$status = trim($_POST['status']);

$getProductsByIdQuery = "select * from products where id = '$id'";
$products = queryExecute($getProductsByIdQuery, false);

$filename = $products['image'];
if ($image['size'] > 0) {
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$updateProductsQuery = "update products
                    set
                          name = '$name',
                          price = '$price',
                          desc_short = '$desc_short',
                            image = '$filename',
                          status = '$status',
                          description = '$description'
                    where id = '$id'";

queryExecute($updateProductsQuery, false);

header("location: " . ADMIN_URL . "products");
die;

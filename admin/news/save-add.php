<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();

$name = trim($_POST['name']);
$image = $_FILES['image'];
$content = trim($_POST['content']);
$created_date = trim($_POST['created_date']);

// upload file ảnh
$filename = $news['image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}
$insertNewsQuery = "insert into news
                          (name, image, content, created_date)
                    values
                          ('$name', '$filename ', '$content', '$created_date')";
//dd($image);
queryExecute($insertNewsQuery, false);
header("location: " . ADMIN_URL . "news");
die;

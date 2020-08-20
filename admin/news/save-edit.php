<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên;
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$image = $_FILES['image'];
$content = trim($_POST['content']);
$created= trim($_POST['created_date']);
// kiểm tra xem tin tức có tồn tại hay không
$getNewsQuery = "select * from news where id = '$id'";
$news = queryExecute($getNewsQuery, false);
// upload file
$filename = $news['image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$updateNewsQuery = "update news
                    set
                    name = '$name',
                    image = '$filename',
                    content = '$content',
                    created_date= '$created'
                    where id = '$id'";
queryExecute($updateNewsQuery, false);
// dd($created_date);
header("location: " . ADMIN_URL . "news");
die;

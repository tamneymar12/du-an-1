<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$Phone_number = trim($_POST['Phone_number']);
$address = trim($_POST['address']);
$slogan = trim($_POST['slogan']);
$banner = $_FILES['banner'];
$logo = $_FILES['logo'];
$image2 = $_FILES['image2'];

// validate bằng php
$getwebsByIdQuery = "select * from web_settings ";
$webs = queryExecute($getwebsByIdQuery, false);


// upload file ảnh
$filename = $webs['banner'];
if($banner['size'] > 0){
    $filename = uniqid() . '-' . $banner['name'];
    move_uploaded_file($banner['tmp_name'], "../../public/admin/img/" . $filename);
    $filename = "public/admin/img/" . $filename;
}

$filename1 = $webs['image2'];
if($image2['size'] > 0){
    $filename1 = uniqid() . '-' . $image2['name'];
    move_uploaded_file($image2['tmp_name'], "../../public/admin/img/" . $filename1);
    $filename1 = "public/admin/img/" . $filename1;
}
$logoname = $webs['logo'];
if($logo['size'] > 0){
    $logoname = uniqid() . '-' . $logo['name'];
    move_uploaded_file($logo['tmp_name'], "../../public/admin/img/" . $logoname);
    $logoname = "public/admin/img/" . $logoname;
}
$updatewebQuery = "update web_settings set
         phone_number='$Phone_number',
         slogan='$slogan',
         logo='$logoname',
         address='$address',
          banner='$filename',
          image2 = '$filename1'
             where id=1       ";

queryExecute($updatewebQuery, false);

header("location: " . ADMIN_URL . "web_settings/");
die;

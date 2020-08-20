<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$content = trim($_POST['content']);
// validate bằng php

// check name

// $filename = $news['image'];
// if($image['size'] > 0){
//     $filename = uniqid() . '-' . $image['name'];
//     move_uploaded_file($image['tmp_name'], "../../public/admin/img/" . $filename);
//     $filename = "public/admin/img/" . $filename;
// }
// upload file ảnh
$insertcategoriesQuery = "insert into categories
                          (name,content)
                    values
                          ('$name', '$content')";
            // dd($insertcategoriesQuery);
queryExecute($insertcategoriesQuery, false);
header("location: " . ADMIN_URL . "categories");
die;

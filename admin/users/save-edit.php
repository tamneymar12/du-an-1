<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$cfpassword = trim($_POST['cfpassword']);
$number_phone = trim($_POST['number_phone']);
$role_id = trim($_POST['role_id']);
$status = trim($_POST['status']);

// kiểm tra tài khoản có tồn tại hay không
$getUserByIdQuery = "select * from users where id = $id";
$user = queryExecute($getUserByIdQuery, false);

if(!$user){
    header("location: " . ADMIN_URL . 'users?msg=Tài khoản không tồn tại');die;
}

// kiểm tra xem có quyền để thực hiện edit hay không
if($user['id'] != $_SESSION[AUTH]['id'] && $user['role_id'] >= $_SESSION[AUTH]['role_id'] ){
    header("location: " . ADMIN_URL . 'users?msg=Bạn không có quyền sửa thông tin tài khoản này');die;
}

// validate bằng php
$nameerr = "";
$emailerr = "";
// check name
if(strlen($name) < 2 || strlen($name) > 191){
    $nameerr = "Yêu cầu nhập tên tài khoản nằm trong khoảng 2-191 ký tự";
}

// check email
if(strlen($email) == 0){
    $emailerr = "Yêu cầu nhập email!";
}
if ($emailerr == "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailerr = "Không đúng định dạng email";
}
// check email đã tồn tại hay chưa
$checkEmailQuery = "select * from users where email = '$email' and id != $id";
$users = queryExecute($checkEmailQuery, true);
if($emailerr == "" && count($users) > 0){
    $emailerr = "Email đã tồn tại, vui lòng sử dụng email khác";
}

if($nameerr . $emailerr != "" ){
    header('location: ' . ADMIN_URL . "users/edit-form.php?id=$id&nameerr=$nameerr&emailerr=$emailerr");
    die;
}

// upload file

$updateUserQuery = "update users 
                    set
                          name = '$name', 
                          number_phone = '$number_phone',
                          email = '$email', 
                          status = '$status',
                          role_id = '$role_id'
                    where id = $id";
queryExecute($updateUserQuery, false);

header("location: " . ADMIN_URL . "users");
die;
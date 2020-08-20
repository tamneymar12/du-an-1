<?php
/**
 * 1. lấy id xuống
 * 2. kiểm tra xem có quyền để xóa tài khoản với id đc nhận hay không
 * 4. thực hiện câu lệnh xóa với csdl
 * 5. điều hướng về danh sách
 *
 */
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();

$id = $_GET['id'];
// var_dump($id);
// die;
$getRemoveproductsQuery = 'select * from products';
$removeproducts = queryExecute($getRemoveproductsQuery, false);
if(!$removeproducts){
    header('location: ' . ADMIN_URL . "products?msg=Tài khoản không tồn tại");
    die;
}

if($removeproducts['role_id'] >= $_SESSION[AUTH]['role_id']){
    header('location: ' . ADMIN_URL . "products?msg=Không đủ quyền hạn thực hiện hành động này");
    die;
}

$removeproductsQuery = 'delete  from  products where id='.$id;
queryExecute($removeproductsQuery, false);
header("location: " . ADMIN_URL . "products?msg=Xóa tài khoản thành công");
die;

?>
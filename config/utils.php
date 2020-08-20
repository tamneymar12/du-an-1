<?php
#quy dinh constants
define('BASE_URL' , 'http://localhost/Sport/');
define('ADMIN_URL', BASE_URL . 'admin/');


define('PUBLIC_URL', BASE_URL . 'public/');
define('LOGIN_URL', BASE_URL . 'login/');
define('THEM_URL',PUBLIC_URL . 'theme/');
define('ADMIN_ASSET_URL', PUBLIC_URL . 'admin/');
define('DEFAULT_IMAGE', ADMIN_ASSET_URL . 'img/default-image.jpg');

define('AUTH', 'AUTH_SESSION');
define("ACTIVE", 1);
define("INACTIVE", -1);

function getdbConn(){
    try {
        $host = "127.0.0.1";
        $dbname = "duan-1";
        $dbusername = "root";
        $dbpass = "";

        $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpass);
        return $connect;
    } catch (Exception $ex) {
        var_dump($ex ->getMessage());
        die;
    }
}

#thuc thi cau lenh sql duoc dung san
#@ts1: $sql - câu lệnh cần được
#@ts2: $fetchAll - (true/false)
#true: lấy hết tất cả các kết quả trả về của câu sql
#fasle: trả về kết quả đầu tiên tìm được của câu lệnh sql

function queryExecute($sql, $fetchAll = false){
    $conn = getdbConn();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($fetchAll){
        $data = $stmt->fetchAll();
    }else{
        $data = $stmt->fetch();
    }
    return $data;
}

#kiểm tra xem user đã đăng nhập hay chưa
function checkAdminLoggedIn(){
    //kiểm tra đăng nhập
    // đăng nhập thành công - kiểm tra bằng SESSION AUTH

    if(!isset($_SESSION[AUTH]) || $_SESSION[AUTH] == null || count($_SESSION[AUTH])== 0){
        header('location:' . BASE_URL . '?msg=hãy đăng nhập');
        die;
    }
    // gt cột role_id = 2

    if($_SESSION[AUTH]['role_id'] < 2){
        header('location:' . BASE_URL . 'index.php?msg=Bạn không có quyền vào Quản trị');
        die;
    }
}

function loginUser(){
    if(!isset($_SESSION[AUTH]) || $_SESSION[AUTH] == null || count($_SESSION[AUTH])== 0){
        header('location:' . BASE_URL . '?msg=hãy đăng nhập');
        die;
    }
}


function dd($data){
    echo "<pre>";
	var_dump($data);
	die;
}
?>

<?php include_once "db.php";

// 檢查POST請求中是否有email和pw
if (isset($_POST['email']) && isset($_POST['pwd'])) {
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $Users->save(['account' => $email, 'password' => $password]);
    // 檢查email是否已經存在資料庫中
}



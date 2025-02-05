<?php include_once "db.php";

// 1. check acc\
$user = $Users->find(['account' => $_POST['email']]);

if (!empty($user)) {
    echo "帳號正確哦！";
// 2. check pw
    $pwd = $_POST['pwd'];
    $chk = $Users->count(['password' => $pwd]);

    if ($chk) {
        echo $chk;
        $_SESSION['user'] = $_POST['email'];
        to("../admin.php");
    } else {
        echo "您輸入的密碼錯誤";
    }
} else {
    echo "您輸入的帳號錯誤";
};
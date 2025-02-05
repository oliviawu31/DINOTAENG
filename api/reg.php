<?php include_once "db.php";

echo $User->save($_POST);

// 檢查POST請求中是否有email和pw
if(isset($_POST['email']) && isset($_POST['pwd'])){
    $email = $_POST['email'];
    $password = $_POST['pwd'];


    // 檢查email是否已經存在資料庫中
    $chkemail = ""
}




?>
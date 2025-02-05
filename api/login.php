<?php include_once "db.php";

// 1. check acc
echo $User->count($_GET);


// 2. check pw
$chk=$User->count($_POST);
if($chk){
    echo $chk;
    $_SESSION['user']=$_POST['acc'];
}else{
    echo 0;
}



?>
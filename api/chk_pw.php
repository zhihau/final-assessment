<?php


include_once "../base.php";

$chk=$User->math('count','*',$_POST);
if($chk>0){
    echo 1;
    $_SESSION['login']=$_POST['acc'];
}else{
    echo 0;
}
?>
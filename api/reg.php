<?php


include_once "../base.php";

$chk=$User->save($_POST);
if($chk>0){
    echo 1;
}else{
    echo 0;
}
?>
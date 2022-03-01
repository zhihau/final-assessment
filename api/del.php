<?php
include_once "../base.php";
$DB=new DB($_GET['table']);
foreach($_POST['id'] as $id){
    if(isset($_POST['del'])&& in_array($id,$_POST['del'])){
        $DB->del($id);
    }
}
to('../back.php?do='.$_GET['table']);
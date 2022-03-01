<?php
include_once "../base.php";


$Que->save(['text'=>$_POST['subject'],'parent'=>0]);
$maxid=$Que->math('max','id');
foreach($_POST['opt'] as $opt){
    $Que->save(['text'=>$opt,'parent'=>$maxid]);
}
to('../back.php?do=que');
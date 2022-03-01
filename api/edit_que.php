<?php
include_once "../base.php";

// id sh
$Que->save(['id'=>$_POST['id'],'sh'=>$_POST['sh']]);

to('../back.php?do=que');
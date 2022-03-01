<?php


include_once "../base.php";

dd($_POST);
$sub=$Que->find(['id'=>$_POST['subject']]);
$sub['count']++;
$Que->save($sub);
$opt=$Que->find(['id'=>$_POST['vote']]);
$opt['count']++;
$Que->save($opt);

to('../index.php?do=que');
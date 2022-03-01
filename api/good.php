<?php


include_once "../base.php";

$row=$News->find(['id'=>$_POST['news']]);

if($row){
    switch($_POST['type']){
        case "1":
            $row['good']++;
            $News->save($row);
            $Log->save(['news'=>$_POST['news'],'user'=>$_POST['user']]);            
            break;
        case "2":
            $row['good']--;
            $News->save($row);
            $Log->del(['news'=>$_POST['news'],'user'=>$_POST['user']]);
            break;
    }
}

?>
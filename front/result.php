<?php
$subject=$Que->find(['id'=>$_GET['id']]);
?>
<fieldset>
    <legend>目前位置：首頁 > 問卷調查 > <?=$subject['text'];?></legend>
<h4><?=$subject['text'];?></h4>
<?php
$rows=$Que->all(['parent'=>$_GET['id']]);
foreach($rows as $k=>$row){
    $total=$row['count']>0?$row['count']:1;
    $xx=round($total/$subject['count'],2);
    $ratio=$xx*80;
    $num=$xx*100;
?>
<div style="display:flex">
    <div style="width:40%"><?=$row['text'];?></div>
    <div style="width:60%;display:flex">
        <div style="height:16px;width:<?=$ratio;?>%;background:lightgrey">&nbsp;</div>
        <div><?=$row['count']."票(%)";?></div>
    </div>
</div>
<?php
}
?>
</fieldset>
<div class="ct">
    <button onclick="location.href='?do=que'">返回</button>

</div>
<form action="api/vote.php" method="post">
    <?php
    $subject=$Que->find(['id'=>$_GET['id']]);
    ?>
    <fieldset>
        <legend>目前位置：首頁 > 問卷調查 > <?=$subject['text'];?></legend>
    <h4><?=$subject['text'];?></h4>
    <input type="hidden" name="subject" value="<?=$subject['id'];?>">
    <?php
    $rows=$Que->all(['parent'=>$_GET['id']]);
    foreach($rows as $k=>$row){
    ?>
    <div>
        <input type="radio" name="vote" value="<?=$row['id'];?>"><?=$row['text'];?>
    </div>
    <?php
    }
    ?>
    </fieldset>
    <div class="ct">
        <input type="submit" value="我要投票">
    
    </div>
</form>
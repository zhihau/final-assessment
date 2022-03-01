<fieldset>
    <legend>目前位置：首頁>最新文章區</legend>
<style>
    .switch{
        cursor: pointer;
    }
</style>
    <table>
        <tr>
            <th width="40%">標題</th>
            <th width="50%">內容</th>
            <th></th>
        </tr>
        <?php
        $all=$News->math('count','*');
        $div=5;
        $pages=ceil($all/$div);
        $now=$_GET['p']??1;
        $start=($now-1)*$div;
        $rows=$News->all(['sh'=>1]," limit $start,$div");
        foreach($rows as $row){
        ?>
        <tr>
            <td class="switch" ><?=$row['title'];?></td>
            <td class="switch">
                <div class="t-short"><?=mb_substr($row['text'],0,20);?>...</div>
                <div class="t-full" style="display:none"><?=nl2br($row['text']);?></div>
                
            </td>
            <td>
                <?php
if(isset($_SESSION['login'])){
    if($row['good']>0){
echo "<a href='' class='g' data-news='{$row['id']}' data-user='{$_SESSION['login']}' data-type='2'>收回讚</a>";
}else{
        echo "<a href='' class='g' data-news='{$row['id']}' data-user='{$_SESSION['login']}' data-type='1' >讚</a>";

    }
}
                ?>
            </td>
        </tr>
        <?php
}
        ?>
    </table>
    <div>
        <?php
    if(($now-1)>0){
    $pre=$now-1;
    ?>
    <a href='#' onclick="location.href='index.php?do=news&p=<?=$pre?>'"> &lt; </a>
    <?php
}
for($i=1;$i<=$pages;$i++){
    $s=($i==$now)?"24px":"16px";
    ?>
    <a href='#' onclick="location.href='index.php?do=news&p=<?=$i?>'" style='font-size:<?=$s?>'> <?=$i?> </a>
    <?php
}
if(($now+1)<=$pages){
    $next=$now+1;
    ?>
    <a href='#' onclick="location.href='index.php?do=news&p=<?=$next?>'"> &gt; </a>
    <?php
}
?>
    </div>
</fieldset>

<script>
    $('.switch').on('click',function(){
        console.log('aaa');
        $(this).parent('tr').find('.t-short,.t-full').toggle();
    })
    $('.g').on('click',function(){
        let good={
            news:$(this).data('news'),
            user:$(this).data('user'),
            type:$(this).data('type'),
        }
        $.post('api/good.php',good,function(){
            switch(good.type){
                case "1":
                $(this).text("收回讚");
                $(this).data('type','2');
                break;
                case "2":
                    $(this).text("讚");
                $(this).data('type','1');
                break;
            }
        })
    })
</script>
<form action="api/edit_news.php" method="post">
    <fieldset>
        <legend>最新文章管理</legend>
        <button type="button" onclick="location.href='?do=add_news'">新增文章</button>
    
        <table>
            <tr>
                <td>編號</td>
                <td>標題</td>
                <td>顯示</td>
                <td>刪除</td>
            </tr>
            <?php
    // 加入分頁程式碼 開始
            ?>
            <tr>
                <td><?=$k+1;?></td>
                <td><?=$row['title'];?></td>
                <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$checked;?>></td>
                <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>" >
            </tr>
            <?php
    // 加入分頁程式碼 結束
            ?>
        </table>
        <div>
            <?php
        if(($now-1)>0){
        $pre=$now-1;
        ?>
        <a href='#' onclick="location.href='back.php?do=news&p=<?=$pre?>'"> &lt; </a>
        <?php
    }
    for($i=1;$i<=$pages;$i++){
        $s=($i==$now)?"24px":"16px";
        ?>
        <a href='#' onclick="location.href='back.php?do=news&p=<?=$i?>'" style='font-size:<?=$s?>'> <?=$i?> </a>
        <?php
    }
    if(($now+1)<=$pages){
        $next=$now+1;
        ?>
        <a href='#' onclick="location.href='back.php?do=news&p=<?=$next?>'"> &gt; </a>
        <?php
    }
    ?>
        </div>
        <div class="cent">
            <input type="submit" value="確定修改">
        </div>
    </fieldset>
</form>
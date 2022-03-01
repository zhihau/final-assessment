<fieldset>
    <legend>目前位置：首頁 > 問卷調查</legend>

    <table>
        <tr>
            <td>編號</td>
            <td>問卷題目</td>
            <td>投票總數</td>
            <td>結果</td>
            <td>狀態</td>
        </tr>
        <?php
// 載入資料程式碼 開始
        ?>
        <tr>
            <td><?=$k+1;?></td>
            <td><?=$row['text'];?></td>
            <td><?=$row['count'];?></td>
            <td><a href="?do=result&id=<?=$row['id'];?>">結果</a></td>
            <td>
                <?php
if(!isset($_SESSION['login'])){
?>
<a href="index.php?do=login">請先登入</a>
<?php
}else{
?>
<a href="index.php?do=vote&id=<?=$row['id'];?>">餐與投票</a>
<?php
}
                ?>
            </td>
        </tr>
        <?php
        // 載入資料程式碼 結束
        ?>
    </table>
</fieldset>
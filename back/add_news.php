<form action="api/add_news.php" method="post">
    <fieldset>
    
    <legend>新增文章</legend>
    <table>
        <tr>
            <td>文章標題</td>
            <td><input type="text" name="title" ></td>
        </tr>
        <tr>
            <td>文章分類</td>
            <td><select name="type" >
                <?php
    $tags=[
        '健康新知  ',
        '菸害防治',
        '癌症防治',
        '慢性病防治',
    ];
    foreach($tags as $k=>$t){
                ?>
    <option value="<?=$k+1;?>"><?=$t;?></option>
    <?php
    }
    ?>
            </select></td>
        </tr>
        <tr>
            <td>文章內容</td>
            <td>
                <textarea name="text"  cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="新增"><input type="reset" value="重置">
            </td>
        </tr>
    </table>
    </fieldset>
</form>
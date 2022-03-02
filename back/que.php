<form action="api/add_que.php" method="post">
    <fieldset>
        <legend>新增問卷</legend>
        <div>
            問卷名稱<input type="text" name="subject" >
        </div>
        <table id="quelist">
            <tr>
                <td>選項</td>
                <td><input type="text" name="opt[]">
                <button type="button" onclick="more()">更多</button>
            </td>
            </tr>
    
        </table>
        <div class="ct">
                    <input type="submit" value="新增">
                    <input type="reset" value="重置">
    
                </div>
    </fieldset>
</form>
<fieldset>
    <legend>問卷列表</legend>

    <table>
        <tr>
            <td>問卷名稱</td>
            <td>投票數</td>
            <td>開放</td>
        </tr>
        <?php
        $rows=$Que->all(['parent'=>0]);
        foreach($rows as $row){
            $checked=($row['sh']==1)?"checked":"";
        ?>
        <tr>
            <td><?=$row['text'];?></td>
            <td><?=$row['count'];?></td>
            <td>
                
                <button type="button" class="show" data-id="<?=$row['id'];?>" data-sh="<?=$row['sh'];?>"><?=($row['sh']==1)?"隱藏":"開放"?></button>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</fieldset>

<script>
    function more(){
        let html=`
        <tr>
                <td>選項</td>
                <td><input type="text" name="opt[]">
            </td>
            </tr>
        `;
        $('#quelist').prepend(html);
    }
    $('.show').on('click',function(){
        
        let sh=(parseInt($(this).data('sh'))==1)?0:1;
        let que={
            id:$(this).data('id'),
            sh:sh
        }
        console.log('aaa')
        $.post('api/edit_que.php',que,()=>{
            switch(que.sh){
                case 1:
                $(this).text('隱藏');
                $(this).data('sh',que.sh);
                break;
                case 0:
                $(this).text('開放');
                $(this).data('sh',que.sh);
                break;
            }

        })
    })
    
</script>
<fieldset>
    <legend>會員登入</legend>

    <table>
        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td><button onclick="login()"></button><button onclick="reset()">                
            </button></td>
            <td>
                <a href="?do=forget"></a> | <a href="?do=reg"></a>
            </td>
        </tr>
    </table>
</fieldset>
<script>
    function reset(){
        $("#acc,#pw").val("");
    }
    function login(){
        let user={
            acc:$("#acc").val(),
            pw:$("#pw").val(),
        }
        $.post('api/chk_acc.php',{acc:user.acc},function(chk){
if(parseInt(chk)==0){
    alert("查無帳號");
}else{
    $.post('api/chk_pw.php',user,function(chk){
        if(parseInt(chk)==0){
            alert("密碼錯誤");
        }else{
            if(user.acc=="admin"){
                location.href="back.php";
            }else{
                location.href="index.php";
            }
            }
    })
}
        })
    }
</script>
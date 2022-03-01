<fieldset>
    <legend>會員註冊</legend>
<div style="color:red">請設定您要註冊的帳號及密碼(最長12個字元)</div>
    <table>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>確認密碼：</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <td>信箱：</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td><button onclick="reg()"></button><button onclick="reset()">                
            </button></td>
            <td>
            </td>
        </tr>
    </table>
</fieldset>
<script>
    function reset(){
        $("#acc,#pw,#pw2,#email").val("");
    }
    function reg(){
        let user={
            acc:$("#acc").val(),
            pw:$("#pw").val(),
            pw2:$("#pw2").val(),
            email:$("#email").val(),
        }
        if(user.acc==''||user.pw==''||user.pw2==''||user.email==''){
            alert("不可空白")
        }else{
if(user.pw!=user.pw2){
    alert("密碼錯誤");
}else{


        $.post('api/chk_acc.php',{acc:user.acc},function(chk){
            if(parseInt(chk)==1){
                alert("帳號重複");
            }else{
                delete user.pw2;
                $.post('api/reg.php',user,function(chk){
                    if(parseInt(chk)==0){
                        alert("註冊失敗");
                    }else{
                        alert("註冊成功，歡迎加入");
                        location.href="?do=login";
                        
                        }
                })
            }
        })
    }
        }//end of else
    }
</script>
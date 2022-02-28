<fieldset>
    <legend>忘記密碼</legend>
<div>請輸入信箱以查詢密碼</div>
<input type="text" name="email" id="email">
<div class="result"></div>
<button onclick="find()">尋找</button>
    
</fieldset>
<script>
    function find(){
        $.post('api/find_pw.php',{email:$('#email').val()},function(html){
            $('.result').html(html);

        })
    
    }
</script>
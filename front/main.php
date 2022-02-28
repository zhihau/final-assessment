<style>
    .tag-list{
display:flex;
margin-left:1px;
    }
.tag{
    padding:2px 8px;
    border:1px solid #555;
    margin-left:-1px;
    color:black;
    background:#ddd;
}
.tag:hover{
cursor: pointer;
background:#ccc;
}
.text{
    padding:2px 8px;
    border:1px solid #555;
    margin-left:-1px;
}
.active{
background:white;
border-bottom-color:white;
}
</style>

<div class="tag-list">
    <div class="tag" id="tag1">健康新知</div>
    <div class="tag" id="tag2">菸害防治</div>
    <div class="tag" id="tag3">癌症防治</div>
    <div class="tag" id="tag4">慢性病防治</div>
</div>
<?php
$tags=[
    '健康新知  ',
    '菸害防治',
    '癌症防治',
    '慢性病防治',
];
$news=$News->all();
foreach($news as $k=>$n){
?>
    <div class="text" id="text<?=$k+1?>" style="display:none">
    <h1><?=$tags[$k]?></h1>
    <?=$n['title'];?>
<?=nl2br($n['text']);?>
    </div>
<?php
}
?>
<script>
showText(1);
    $('.tag').on('click',function(){
        $id=$(this).attr('id').replace('tag','');
        showText($id);
    })
    function showText(id){
        $('.tag').removeClass('active');
        $('.text').hide();
        $('#tag'+id).addClass('active');
        $('#text'+id).show();
    }
</script>
<div id="title">
    <?=date("m 月 d 號 l");?> 
    | 今日瀏覽: <?=$View->find(['date'=>date("Y-m-d")])['total'];?>
    | 累積瀏覽: <?=$View->math('sum','total');?>
        <a href="index.php" style="float:right">回首頁</a>
    </div>
        <div id="title2">
        	<a href="index.php"><img src="../icon/02B01.jpg" title="健康促進網-回首頁"></a>
        </div>
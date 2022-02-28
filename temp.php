$all=$News->math('count','*');
$div=5;
$pages=ciel($all/$div);
$now=$_GET['p']??1;
$start=($now-1)*$div;
$rows=$News->all(['sh'=>1]," limit $start,$div");
foreach($rows as $row){

}
if(($now-1)>0){
    $pre=$now-1;
    echo "<a href='location.href=index.php?do=aa&p=$pre'> &lt; </a>";
}
for($i=1;$i<=$pages;$i++){
    $s=($i==$now)?"24px":"16px";
    echo "<a href='location.href=index.php?do=aa&p=$i' style='font-size:$s'> $i </a>";
}
if(($now+1)<=$pages){
    $next=$now+1;
    echo "<a href='location.href=index.php?do=aa&p=$next'> &gt; </a>";
}
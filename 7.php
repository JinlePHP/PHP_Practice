<?php
$str="0123456789abcdefghjiklmnopqrstuvwxyz";
$n=5;
$len=strlen($str)-1;//减一是因为数组的下标都是从0开始的。所以都得减一
$s="";
for ($i=0;$i<$n;$i++){
    $s=$s.$str[rand(0,$len)];
}
echo $s."<br/>";
?>
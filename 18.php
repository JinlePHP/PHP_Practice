<?php
/* ���Խű�����ʱ��*/
//header("Content-type:text/html;charset=utf-8");
header("Content-Type:text/html;charset=gbk");
$stime=microtime(true);
$etime=microtime(true);
$total=$etime-$stime;
echo "<br>��php�ű����е�ʱ��Ϊ:";
echo "<br>".$total;
$str_total=var_export($total,true);
echo "<br>".$str_total;
if (substr_count($total, "E")){
    echo "<br>".substr($str_total, 5)."<br>";
    $float_total=floatval(substr($str_total, 5));
    echo $float_total."<br>";
    $total=$float_total/100000;
    echo "$total".'��';
}
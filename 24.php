<?php
header("Content-Type:text/html;charset=gbk");
$i=time();
$x=strtotime("2016-01-01 00:00:00");;
$d=round(($x-$i)/3600/24);
echo "<b>���������ڻ��У�<font color='red'>".$d."</font>��</b>";
?>
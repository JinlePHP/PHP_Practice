<?php
header("Content-Type:text/html;charset=gbk");
$i=time();
$x=strtotime("2016-01-01 00:00:00");;
$d=round(($x-$i)/3600/24);
echo "<b>距离清明节还有：<font color='red'>".$d."</font>天</b>";
?>
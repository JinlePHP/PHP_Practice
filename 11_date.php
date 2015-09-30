<?php
$year=$_POST['year'];//获取年份
$month=$_POST['month'];
$day=$_POST['day'];
$birthday=mktime(0,0,0,$month,$day,$year);//转化为时间戳毫秒数
$nowUNIX=time();//获取现在的时间戳毫秒数
$age=$nowUNIX-$birthday;
$age=floor($age/(365*24*60*60));//时间戳毫秒数转化为年月日
echo "<script language='javascript' type='text/javascript'>";
echo "alert('您的年龄为:".$age."');location='11_index.php';";
echo "</script>";
?>
<?php
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("Asia/Shanghai");//设置日期时区为中国时区
$today = time();
$year = @$_GET["year"];
$month = @$_GET["month"];
if($year=='') $year = date("Y",$today);
if($month=='') $month = date("m",$today);
if((int)$month==0){$year-=1;$month=12;}
$time = mktime(0,0,0,$month,1,$year);//格式化当前日期
$year = date('Y',$time);
$month = date('m',$time);
$days = date('t',$time);//当前月份一共有几天
$fstdw = date('N',$time);//当前月份第一天为星期几
echo "<table border=1 width=260 cellspacing=0 cellpadding=0 align=center bgcolor=#cccccc>";
echo "<tr><td colspan=7 class=title>";
$str   = "<a href=?year=".($year-1)."&month=".$month.">";
$str .= "?</a> ".$year."年 ";
$str .= "<a href=?year=".($year+1)."&month=".$month.">";
$str .= "?</a>   ";
$str .= "<a href=?year=".$year."&month=".($month-1).">";
$str .= "?</a> ".$month."月 ";
$str .= "<a href=?year=".$year."&month=".($month+1).">";
$str .= "? </a>";
echo $str;
echo "</td></tr>";
echo"<tr style='text-align:right '>";
$str   = "<td>一</td>";
$str .= "<td>二</td>";
$str .= "<td>三</td>";
$str .= "<td>四</td>";
$str .= "<td>五</td>";
$str .= "<td>六</td>";
$str .= "<td>七</td>";
echo $str;
echo "</td>";
$rows = ceil(($days + $fstdw-1)/7);
$cd = 1;
for($i=0;$i<$rows;$i++){
echo "<tr>";
    for($j=0;$j<7;$j++){
     echo "<td>";
     if($cd >= $fstdw && $cd<$days+$fstdw){
     $oday = $cd-$fstdw+1;
     if($oday == date('d',time())){
     echo "<font color='red'><b><u>";
     }
     echo $oday;
     }else{
     echo ".";
     } 
     $cd++;
     echo "</td>";
    }
echo "</tr>";
}
echo "</table>";
?>
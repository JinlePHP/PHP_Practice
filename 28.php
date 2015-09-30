<?php
header("content-type:text/html;charset=utf8");
echo '脚本载入时间：'.time();
echo '脚本载入时间：'.microtime();
sleep(5);//脚本等待5秒后执行
echo "<br><br/>";
echo "执行完毕时间：".time();
echo "执行完毕时间：".microtime();
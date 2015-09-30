<?php
date_default_timezone_set('PRC');
echo "中国北京时间:";
echo date("y-m-d h:i:s")."<br/>";
date_default_timezone_set('America/New_York');
echo "美国纽约时间:";
echo date("y-m-d h:i:s");
<?php
//µ¹Ðð³Ë·¨±í
header("content-type:text/html;charset=utf-8");
for ($i=9;$i>=1;$i--){
    for ($j=$i;$j>=1;$j--){
        echo "$i*$j=".($i*$j)." ";
    }
    echo "<br/>";
}
<?php
//隔行换色
header("Content-Type:text/html;charset=utf-8");
echo "<center><b>隔行换色</b></center>";
$color="";
echo "<table border=1 width='200' height='200' align='center' cellspacing='0'>";
    for ($i=0;$i<=5;$i++){
        if ($i%2==0){
            $color="red";
        }else {
            $color="blue";
        }
        echo "<tr bgcolor='".$color."'>";
        for ($j=0;$j<=5;$j++){
            echo "<td>".$j."</td>";
        }
        echo "</tr>";
    }
echo "</table>";
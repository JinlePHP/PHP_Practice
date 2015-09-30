<?php
$color="";
echo "<ul>";
for($i=1;$i<=10;$i++){
    if($i%2==0){
        $color="red";
    }else {
        $color="yellow";
    }
echo "<li style='background:".$color.";width:200p'>µÚ".$i."ÐÐ</li></ul>";
}
?>  
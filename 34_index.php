<?php
header("Content-type=text/html;charset=utf-8");

if (isset($_POST['c1']) && isset($_POST['c2'])){
    $c1=$_POST['c1'];
    $c2=$_POST['c2'];
    if (!is_int($c1) && !is_int($c2)){
    
    }else {
        echo "请输入正确数字";
    }

<?php

//判断页面传入的ID
switch ($_GET['id']){
    case "index":
        require ('4.php');//引用主页的文件
    break;
    case "second";
        require '8.php';
    break;
    default:
        require 'main.php';
}
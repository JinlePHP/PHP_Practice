<?php
$action=$_GET['action'];
switch ($action){
    case "add";
    echo "<script> alert('现在可以实现增加功能！');</script>";
    break;
    case "del";
    echo "<script> alert('现在可以实现删除功能！');</script>";
    break;
    case "search";
    echo "<script> alert('现在可以实现查找功能！');</script>";
    break;
    case "update";
    echo "<script> alert('现在可以实现更新功能！');</script>";
    break;
    
}
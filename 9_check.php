<?php
$action=$_GET['action'];
switch ($action){
    case "add";
    echo "<script> alert('���ڿ���ʵ�����ӹ��ܣ�');</script>";
    break;
    case "del";
    echo "<script> alert('���ڿ���ʵ��ɾ�����ܣ�');</script>";
    break;
    case "search";
    echo "<script> alert('���ڿ���ʵ�ֲ��ҹ��ܣ�');</script>";
    break;
    case "update";
    echo "<script> alert('���ڿ���ʵ�ָ��¹��ܣ�');</script>";
    break;
    
}
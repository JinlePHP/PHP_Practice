<?php

//�ж�ҳ�洫���ID
switch ($_GET['id']){
    case "index":
        require ('4.php');//������ҳ���ļ�
    break;
    case "second";
        require '8.php';
    break;
    default:
        require 'main.php';
}
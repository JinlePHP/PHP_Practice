<?php
//ʹ��php��̬����Ƕ���ļ���
header("content-type:text/html;charset=utf-8");
function createfolder($path){
    if (!file_exists($path)){
        createfolder(dirname($path));
        mkdir($path,07777);
    }
}
createfolder("aa/bb/cc");
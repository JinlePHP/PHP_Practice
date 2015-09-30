<?php
//使用php动态创建嵌套文件夹
header("content-type:text/html;charset=utf-8");
function createfolder($path){
    if (!file_exists($path)){
        createfolder(dirname($path));
        mkdir($path,07777);
    }
}
createfolder("aa/bb/cc");
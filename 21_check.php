<?php
//图片上传到服务器

function fileext($filename)
  {
    return substr(strrchr($filename,'.'),1);  //获取扩展名
    
  }
function random($length)
  {  //生成随机文件名函数
    $hash='CR-';
    $chars='abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz';
    $max=strlen($chars)-1;
    mt_srand((double)microtime()*1000000);
      for($i=0;$i<$length;$i++)
       {
        $hash.=$chars[mt_rand(0,$max)];
       }
       return $hash;
  }

?>
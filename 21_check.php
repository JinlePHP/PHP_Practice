<?php
//ͼƬ�ϴ���������

function fileext($filename)
  {
    return substr(strrchr($filename,'.'),1);  //��ȡ��չ��
    
  }
function random($length)
  {  //��������ļ�������
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
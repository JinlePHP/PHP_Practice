<?php
$str="0123456789abcdefghjiklmnopqrstuvwxyz";
$n=5;
$len=strlen($str)-1;//��һ����Ϊ������±궼�Ǵ�0��ʼ�ġ����Զ��ü�һ
$s="";
for ($i=0;$i<$n;$i++){
    $s=$s.$str[rand(0,$len)];
}
echo $s."<br/>";
?>
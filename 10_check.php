// <?php
// $urlar=parse_url($_SERVER['http_']);
// print("<pre>");
// print_r($urlar);
// print_r($_SERVER[]);
// if ($urlar['host']!="127.0.0.1"){
//     echo "ҳ��ʧЧ";
//     echo "<script>alert('����ʧЧ');location='10_index.php';</script>";
//     exit(); 
// }
// echo "������������ҳ��";
// ?>
<?php
$urlar=parse_url($_SERVER['http_referer']);
print("<pre>");
print_r($urlar);
print_r($_SERVER['http_referer']);
if($urlar['host']!="172.0.0.1")
{
echo "ҳ��ʧЧ";
echo "<script>alert('����ʧЧ');location='index.php';</script>";
exit;
}
echo "������������ҳ��";
?>
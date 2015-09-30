// <?php
// $urlar=parse_url($_SERVER['http_']);
// print("<pre>");
// print_r($urlar);
// print_r($_SERVER[]);
// if ($urlar['host']!="127.0.0.1"){
//     echo "页面失效";
//     echo "<script>alert('连接失效');location='10_index.php';</script>";
//     exit(); 
// }
// echo "可以正常访问页面";
// ?>
<?php
$urlar=parse_url($_SERVER['http_referer']);
print("<pre>");
print_r($urlar);
print_r($_SERVER['http_referer']);
if($urlar['host']!="172.0.0.1")
{
echo "页面失效";
echo "<script>alert('链接失效');location='index.php';</script>";
exit;
}
echo "可以正常访问页面";
?>
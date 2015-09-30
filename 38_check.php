<?php
PRINT("<PRE>");
print_r($_POST);
exit();
header("Content-Type:text/html;charset=utf-8");
mysql_connect("localhost","root","root123") or die("数据库连接有误!");
mysql_select_db("student") or die("数据库选择有误!");
mysql_query("set names 'utf8'");

if(!empty($_POST['member_id'])){
$arr=$_POST['member_id'];
$str_key="";
foreach($arr as $key=>$value){
$sql="delete from student where member_id =".$value;
mysql_query($sql);
$str_key.=$value.",";
}
$new_str=substr($str_key,0,strlen($str_key)-1);
echo"<script>alert('删除编号为".$new_str."的信息成功！');location='user.php'</script>";
}
?>

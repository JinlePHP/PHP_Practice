<?php
$year=$_POST['year'];//��ȡ���
$month=$_POST['month'];
$day=$_POST['day'];
$birthday=mktime(0,0,0,$month,$day,$year);//ת��Ϊʱ���������
$nowUNIX=time();//��ȡ���ڵ�ʱ���������
$age=$nowUNIX-$birthday;
$age=floor($age/(365*24*60*60));//ʱ���������ת��Ϊ������
echo "<script language='javascript' type='text/javascript'>";
echo "alert('��������Ϊ:".$age."');location='11_index.php';";
echo "</script>";
?>
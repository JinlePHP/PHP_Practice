<?php
header("content-type:text/html;charset=utf-8");
mysql_connect("localhost","root","root123");
mysql_select_db("message") or die("���ݿ�ѡ������");
mysql_query("set names 'utf8'");
?>
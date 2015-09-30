<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>模拟实现登录连接数据库</title>
</head>
<body>
<form action="19.php" method="post">
    选择连接方式：
    <select name="host">
        <option value="localhost" >localhost</option>
        <option value="127.0.0.1" selected="selected">127.0.0.1</option>
    </select><br>
    用户名:<input type="text" value="" name="user"/><br/>
    密 &nbsp;码:<input type="password" value="" name="pwd"/><br/>
   <input type="submit" value="连接"/>
</form>
</body>
</html>
<?php 
    if (isset($_POST['host'])){
        $conn=mysql_connect($_POST['host'],$_POST['user'],$_POST['pwd']) or die('数据库链接失败');
        if ($conn){
            echo "<script>alert('数据库链接成功');</script>";
        }
    }
?>
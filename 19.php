<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ģ��ʵ�ֵ�¼�������ݿ�</title>
</head>
<body>
<form action="19.php" method="post">
    ѡ�����ӷ�ʽ��
    <select name="host">
        <option value="localhost" >localhost</option>
        <option value="127.0.0.1" selected="selected">127.0.0.1</option>
    </select><br>
    �û���:<input type="text" value="" name="user"/><br/>
    �� &nbsp;��:<input type="password" value="" name="pwd"/><br/>
   <input type="submit" value="����"/>
</form>
</body>
</html>
<?php 
    if (isset($_POST['host'])){
        $conn=mysql_connect($_POST['host'],$_POST['user'],$_POST['pwd']) or die('���ݿ�����ʧ��');
        if ($conn){
            echo "<script>alert('���ݿ����ӳɹ�');</script>";
        }
    }
?>
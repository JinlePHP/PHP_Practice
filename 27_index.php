<html>
<head></head>
<body>
<form action="27_index.php" method="post">
<b>����û��������ڵĺϷ���</b><br>
�û���:<input type="text" name="username" value="" ><br/>
��������:<input type="text" name="userdate" value="" size=18 /><br?>
<input type="submit" value="���">
<input type="reset" value="����" />
</form>
</body>
</html>

<?php 
    if (!empty($_POST['username'])){
        $arr=explode("-",$_POST['userdate']);
        if (checkdate($arr[1], $arr[2], $arr[0])){
            echo "<script>alert('����".$_POST['userdate']."��ʽ��ȷ')</script>";
        }else {
            echo "<script>alert('����".$_POST['userdate']."��ʽ����')</script>";
        }
    }
?>
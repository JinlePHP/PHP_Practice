<html>
<head></head>
<body>
<form action="27_index.php" method="post">
<b>检测用户输入日期的合法性</b><br>
用户名:<input type="text" name="username" value="" ><br/>
生日日期:<input type="text" name="userdate" value="" size=18 /><br?>
<input type="submit" value="检测">
<input type="reset" value="重置" />
</form>
</body>
</html>

<?php 
    if (!empty($_POST['username'])){
        $arr=explode("-",$_POST['userdate']);
        if (checkdate($arr[1], $arr[2], $arr[0])){
            echo "<script>alert('日期".$_POST['userdate']."格式正确')</script>";
        }else {
            echo "<script>alert('日期".$_POST['userdate']."格式错误')</script>";
        }
    }
?>
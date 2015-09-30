<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
</head>
<body>
    <form action="17.php" method="post">
    检测文件的后缀<br>
    <input type="file" name="file" value=""/><br/>
    <input type="submit" value="检测"/>
    </form>
</body>
</html>
<?php
    $pic=$_POST['file'];
    $pics=explode('.',$pic);//转换为数组
    $num=count($pics);      //获取数组长度
    //echo '<br />上传文件的扩展名为：'.$pics[$num-2]; //获取文件名
    echo '<br />上传文件的扩展名为：'.$pics[$num-1]; //获取扩展名内容

?>
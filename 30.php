<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <form action="30.php" method="post">
<b>输入分数</b><br/>
分数:<input type="text" name="result" value=""><br>
<input type="submit" value="查询"/>
<input type="reset" />
</form>
 </body>
</html>

<?php
header("content-type:text/html;charset=utf-8");

if (!empty($_POST['result'])){
    $result=$_POST['result'];
    if ($result>=80 && $result<=100){
        echo '恭喜你，'.$result.'分是优秀';
    }else if ($result>=60 && $result<80){
        echo '还不错,'.$result.'分是良好';
    }else if ($result>=0 && $result<60){
        echo '抱歉'.$result.'分不及格';
    }else{
        echo '请输入正确成绩';
    }
}
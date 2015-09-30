<html>
<head>
<title>论坛发帖内容长度验证</title>
</head>
<body>
<form name="myform" action="14.php">

输入:<input type="text" name="text">
<script type="text/javascript">
 function check(){
	 if(document.myform.text.value==""){
		    alert("内容不能为空")；
		    return false;
		 }
	 return true;
}
</script>
</form>
<?php 
    if (!empty($_GET['text'])){
        $str=$_GET['text'];
        preg_match_all("/./us", $str, $match);
        $num=count($match[0]);
        if ($num<=10){
            echo "<script>alert('输入的长度小于10');<script>";
        }else {
            echo "<script>alert('发布成功');<script>";
        }
    }
?>

</body>
</html>
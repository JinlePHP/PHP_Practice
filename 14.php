<html>
<head>
<title>��̳�������ݳ�����֤</title>
</head>
<body>
<form name="myform" action="14.php">

����:<input type="text" name="text">
<script type="text/javascript">
 function check(){
	 if(document.myform.text.value==""){
		    alert("���ݲ���Ϊ��")��
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
            echo "<script>alert('����ĳ���С��10');<script>";
        }else {
            echo "<script>alert('�����ɹ�');<script>";
        }
    }
?>

</body>
</html>
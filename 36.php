<!-- ʹ�÷�֧�����ز�ͬ��ҳ���� -->
<html>
<head><title>php��̬���������</title>
<style type="text/css">
    body{background:#ccc}
</style>
</head>
<body>
<div id="header">
<!--ҳ�浼����-->
    <ul>
         <li><a href="?id=shop1">������Ʒ</a></li>
         <li><a href="?id=shop2">�Ƽ���Ʒ</a></li>
         <li><a href="?id=shop3">������Ʒ</a></li>
    </ul>
    
</div>
<div id="content">
       <!--�˴���̬������������-->
</div>
</body>
</html>
<?php
     $shop_id=$_GET['id'];
     switch($shop_id)
        {
            case "shop1"://���IDΪshop1
                 require("shop1.php");
                 break;
            case "shop2":
                 require("shop2.php");
                 break;
            case "shop3":
                 require("shop3.php");
                 break;
            default://Ĭ�ϵ�ѡ��
                 require("shop1.php");
                 
        }
?>
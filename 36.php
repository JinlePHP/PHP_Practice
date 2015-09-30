<!-- 使用分支语句加载不同网页主体 -->
<html>
<head><title>php动态表格生成器</title>
<style type="text/css">
    body{background:#ccc}
</style>
</head>
<body>
<div id="header">
<!--页面导航条-->
    <ul>
         <li><a href="?id=shop1">基本商品</a></li>
         <li><a href="?id=shop2">推荐商品</a></li>
         <li><a href="?id=shop3">分类商品</a></li>
    </ul>
    
</div>
<div id="content">
       <!--此处动态更改主体内容-->
</div>
</body>
</html>
<?php
     $shop_id=$_GET['id'];
     switch($shop_id)
        {
            case "shop1"://如果ID为shop1
                 require("shop1.php");
                 break;
            case "shop2":
                 require("shop2.php");
                 break;
            case "shop3":
                 require("shop3.php");
                 break;
            default://默认的选择
                 require("shop1.php");
                 
        }
?>
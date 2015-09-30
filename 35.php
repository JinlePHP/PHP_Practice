<html>
<head><title>php动态表格生成器</title>
<style type="text/css">
    body{background:#ccc}
</style>
</head>
<body>
<form action="35.php" method="post">
输入行:<input type="text" name="cols"/><br/><br/>
输入列:<input type="text" name="rows"/><br/>
<input type="submit" value="点击生成表格">&nbsp;<input type="reset" value="重置" />
</form>
</body>
</html>
<?php 
header("Content-Type:text/html;charset=gbk");
if (!empty($_POST['cols'])){
    $cols=$_POST['cols'];
    $rows=$_POST['rows'];
    echo "<center>动态生成表格".$_POST['cols']."行,".$_POST['rows']."列</center>";
    $color="";
    echo "<table border=1 width=200px height=200 cellspacing0 align=center>";
    for ($i=0;$i<$cols;$i++){
        if ($i%2==0){
            $color="red";
        }else $color="blue";
        echo "<tr bgcolor=".$color.">";
            for ($j=$rows;$j>0;$j--){
                echo "<td>".$j."</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
}
?>
<html>
<head><title>php��̬���������</title>
<style type="text/css">
    body{background:#ccc}
</style>
</head>
<body>
<form action="35.php" method="post">
������:<input type="text" name="cols"/><br/><br/>
������:<input type="text" name="rows"/><br/>
<input type="submit" value="������ɱ��">&nbsp;<input type="reset" value="����" />
</form>
</body>
</html>
<?php 
header("Content-Type:text/html;charset=gbk");
if (!empty($_POST['cols'])){
    $cols=$_POST['cols'];
    $rows=$_POST['rows'];
    echo "<center>��̬���ɱ��".$_POST['cols']."��,".$_POST['rows']."��</center>";
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
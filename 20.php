<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>����ҳ����ʾ���ݿ�ѡ���б�</title>
</head>
    <body>
        <form action="20.php" method="post">
            <select name="database" size=1>
                <option value="0" selected="selected">��ѡ��</option>
                <?php 
                    $conn=mysql_connect("localhost","root","root123");
                    $re=mysql_query("show databases");
                    while ($arr=mysql_fetch_assoc($re)){
                        ?>
                        <option value="<?php echo $arr['Database'];?>">
                            <?php echo $arr['Database']."<br />";?>
                       </option>
                <?php }
                
                ?>
            </select>
            <input type="submit" value="ȷ��"/>
        </form>
    </body>
</html>

<?php 
    $conn=mysql_connect("localhost","root","root123");
    $database=$_POST['database'];
    if (isset($_POST['database'])){
        if ($database=="0"){
            echo "<script>alert('û��ѡ�����ݿ�')</script>";
        }else{
            mysql_select_db($database);
            echo "<script>alert('ѡ��".$database."���ݿ����ӳɹ�')</script>";
        }
    }
?>

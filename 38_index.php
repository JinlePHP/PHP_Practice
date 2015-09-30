<?php
header("Content-Type:text/html;charset=utf-8");
mysql_connect("localhost","root","root123") or die("数据库连接有误!");
mysql_select_db("student") or die("数据库选择有误!");
mysql_query("set names 'utf8'");
?>
<html> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>用户管理</title>
        <style>
            body{text-align:center;}
            #header{width:600px;height:50px;margin:10px;background:#E3EFFB;line-height:50px;font-size:20px;}
            #main{width:600px;margin:10px;margin:0px auto;}
            #main table{widt h:600px;background:#E3EFFB;cellspacing:1px;text-align:center;}
            #main table tr{background:white;}
            #main table img{border:0px;}
            #page{width:600px;height:30px;background:#E3EFFB;line-height:30px;}
        </style>
    </head>
    <body>
        <div id="header">网站管理中心--会员列表</div>
        <div id="main">
        <form name="myForm" action="check.php" method="post">
            <table>
                <tr>
                    <th width="100">编号</th>
                    <th width="150">用户名</th>
                    <th width="200">邮件地址</th>
                    <th width="200">注册日期</th>
                    <th width="50">选择</th>
                </tr>
                <?php
                    //定义分页所需要的变量
                    $page=isset($_GET['page'])?$_GET['page']:1;//当前页
                    $pagesize=5; //每页显示的条数
                    //获取总条数数据
                    $sql="select count(*) from student";
                    $result=mysql_query($sql);
                    $maxrows=mysql_result($result,0,0);
                    $maxpage=ceil($maxrows/$pagesize);
                    //到达最后一页判断
                    if($page>$maxpage){
                    $page=$maxpage;
                    }
                    //到达第一页判断
                    if($page<1){
                        $page=1;
                    }
                    $offset=($page-1)*$pagesize;
                    $sql="select * from student limit {$offset},$pagesize";
                    $result=mysql_query($sql);
                    while($rows=mysql_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>{$rows['member_id']}</td>";
                        echo "<td>{$rows['username']}</td>";
                        echo "<td>{$rows['email']}</td>";
                        echo "<td>".date("Y-m-d H:i:s",$rows['registertime']+8*3600)."</td>";
                        echo "<td><input type='checkbox' value='{$rows['member_id']}' name='member_id[]'></td>";
                        echo "</tr>";
                    }
                ?>            
            </table>
            
            <br/>
                <div id="page">
                <?php
                echo "当前{$page}/{$maxpage}页 共计{$maxrows}条信息    ";
                echo "<a href='user.php?page=1'>首页</a>    ";
                echo "<a href='user.php?page=".($page-1)."'>上一页</a>    ";
                echo "<a href='user.php?page=".($page+1)."'>下一页</a>    ";
                echo "<a href='user.php?page=".$maxpage."'>最后一页</a>";
                echo " <input type='submit' value='批量删除'>";
                ?>
                </div>
        </form>
        </div>
    </body>
<html>

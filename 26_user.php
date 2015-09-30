<?php
require_once '26_conn.php';

$page=isset($_GET['page'])?$_GET['page']:1;
$pagesize=6;
$sql="select count(*) from u_user";
$result=mysql_query($sql);
$maxrows=mysql_result($result, 0,0);
$maxpage=ceil($maxrows/$pagesize);
if ($page>$maxpage){
    $page=$maxpage;
}if ($page<1){
    $page=1;
}
$offset=($page-1)*$pagesize;
$sql="select * from u_user limit {$offset},$pagesize";
$result=mysql_query($sql);
while ($rows=mysql_fetch_assoc($result)){
    echo "<table>";
    echo "<tr>";
    echo "<td>{$rows['id']}</td>";
    echo "<td>{$rows['username']}</td>";
    echo "<td>{$rows['email']}</td>";
    echo "</tr>";
    echo "</table>";
}
    

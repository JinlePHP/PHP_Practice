<html>
<head>
</head>
<body>
<body>
    <div id="header">
         <b>文本文件内容分页显示</b>
    </div>
    <div id="content">
        <div id="show">
           <p>
               <?php
                  /*此处省略自定义函数m_substr()具体实现*/
                   if(isset($_GET['page']))
                     {
                        $page=$_GET['page'];
                     }else{
                        $page=1;
                     }
                     $counter=file_get_contents("example.txt");
                     $length=strlen($counter);
                     $page_count=ceil($length/400);
                     $str=m_substr($counter,0,($page-1)*400);
                     $str1=m_substr($counter,0,$page*400);
                     echo substr($str1,strlen($str),strlen($str1)-strlen($str));
               ?>
           </p>
        </div>
        <center>
              <span>
                   <?php
                       echo "当前页：".$page."/".$page_count."&nbsp";
                       echo "<a herf=index.php?page=1>首页</a>";
                        if($page>1)
                          {
                            echo "<a herf=index.php?page=".($page-1).">上一页</a>";
                          }
                          if($page<$page_count)
                           {
                            echo "<a herf=index.php?page=".($page+1).">下一页</a>";
                           }
                           echo "<a herf=index.php?page=".$page_count.">尾页</a>";
                       
                   ?>
              </span>
        </center>
    </div>
    <div id="footer"><br />文本分页</div>
</body>
</body>
</html>

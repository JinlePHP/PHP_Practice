<html>
<head>
</head>
<body>
<body>
    <div id="header">
         <b>�ı��ļ����ݷ�ҳ��ʾ</b>
    </div>
    <div id="content">
        <div id="show">
           <p>
               <?php
                  /*�˴�ʡ���Զ��庯��m_substr()����ʵ��*/
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
                       echo "��ǰҳ��".$page."/".$page_count."&nbsp";
                       echo "<a herf=index.php?page=1>��ҳ</a>";
                        if($page>1)
                          {
                            echo "<a herf=index.php?page=".($page-1).">��һҳ</a>";
                          }
                          if($page<$page_count)
                           {
                            echo "<a herf=index.php?page=".($page+1).">��һҳ</a>";
                           }
                           echo "<a herf=index.php?page=".$page_count.">βҳ</a>";
                       
                   ?>
              </span>
        </center>
    </div>
    <div id="footer"><br />�ı���ҳ</div>
</body>
</body>
</html>

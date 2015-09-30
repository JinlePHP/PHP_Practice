<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
</head>
<body>

<form action="21_upload.php" method="post" enctype="multipart/form-data">  <!--定义method属性-->
    <table border="1" cellspacing="0" cellpadding="0" align="center"
        width="300px">
       <tr>
            <td width="55" height="20" align="center">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
            文件</td>
            <td height="16">
                <input type="file" name="file" value="浏览">
            </td>
       </tr>
       <tr>
       <td align="center" colspan="2"><br/>
        <input type="submit" name="B1" value="上传"/>
        </td>
       </tr>    
    </table>

</form>

</body>
</html>



<html>
<head>
<title>不区分大小写输入的用户登录名</title>
</head>
<body>
<form action="check.php" method="post">
      <table width="250px" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#cccccc">
          <tbody>
               <tr>
                    <td colspan="2" height="25" bgcolor="#f7f7f7" align="center">
                         用户登录——不区分大小写
                    </td>
               </tr>
          </tbody>
              <tr>
                  <td width="20%" height="25" align="right" bgcolor="#f7f7f7">
                       用户名：
                  </td>
                  <td height="25" bgcolor="#f7f7f7">
                       <input style="" name="username" type="text" id="username"/>
                  </td>
              </tr>
              <tr>
                   <td height="25" align="right" bgcolor="#f7f7f7">
                        密码：
                   </td>
                   <td height="25" bgcolor="#f7f7f7">
                        <input type="password" name="userpwd" id="password"/>
                   </td>
              </tr>
              <tr align="center">
                    <td height="25" colspan="2" align="right" bgcolor="red">
                    </td>
              </tr>
      </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
             <tr>
                 <td width="39%" align="right">
                      <span style="word-spacing: 0px; margin:0px ; margin-bottom: 0px;" >
                           <input type="submit" name="login" id="login" value="登录"/>
                      </span>
                 </td>
                 <td width="61%">
                      <input type="reset" name="reset" id="reset" value="重置"/>
                 </td>
             </tr>
      </table>
</form>
</body>

</html>
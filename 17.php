<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
</head>
<body>
    <form action="17.php" method="post">
    ����ļ��ĺ�׺<br>
    <input type="file" name="file" value=""/><br/>
    <input type="submit" value="���"/>
    </form>
</body>
</html>
<?php
    $pic=$_POST['file'];
    $pics=explode('.',$pic);//ת��Ϊ����
    $num=count($pics);      //��ȡ���鳤��
    //echo '<br />�ϴ��ļ�����չ��Ϊ��'.$pics[$num-2]; //��ȡ�ļ���
    echo '<br />�ϴ��ļ�����չ��Ϊ��'.$pics[$num-1]; //��ȡ��չ������

?>
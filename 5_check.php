<?php
if (isset($_POST)){
    if ($_POST['user']=='admin' && $_POST['pwd']=='admin'){
        echo "登录成功,正在跳转中...";   
    }else {
        echo "用户名或密码错误";
    }
}
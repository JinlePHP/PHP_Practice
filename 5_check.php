<?php
if (isset($_POST)){
    if ($_POST['user']=='admin' && $_POST['pwd']=='admin'){
        echo "��¼�ɹ�,������ת��...";   
    }else {
        echo "�û������������";
    }
}
<?php
// include '21_check.php';
function fileext($filename)
{
    return substr(strrchr($filename, '.'), 1); // ��ȡ��չ��
}

function random($length)
{ // ��������ļ�������
    $hash = 'CR-';
    $chars = 'abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz';
    $max = strlen($chars) - 1;
    mt_srand((double) microtime() * 1000000);
    for ($i = 0; $i < $length; $i ++) {
        $hash .= $chars[mt_rand(0, $max)];
    }
    return $hash;
}

$uploaddir = "./files?";
// ���������ϴ��ļ�������
$type = array(
    "jpg",
    "gif",
    "bmp",
    "jpeg",
    "pan"
);

/*
 * $_files["file"]["name"] - ���ϴ��ļ�������
$_files["file"]["type"] - ���ϴ��ļ�������
$_files["file"]["size"] - ���ϴ��ļ��Ĵ�С�����ֽڼ�
$_files["file"]["tmp_name"] - �洢�ڷ��������ļ�����ʱ����������
$_files["file"]["error"] - ���ļ��ϴ����µĴ������
 */
// �ж��ϴ��ļ��������Ƿ��ڷ�Χ��
if (! in_array(strtolower(fileext($_FILES['file']['name'])), $type)) {
    $text = implode(",", $type);
    echo "��ֻ���ϴ��������͵��ļ�:", $text, "<br/>";
} else {
    $filename = explode(".", $_FILES['file']['name']); // ��ȡ�ļ���
    do {
        $filename[0] = random(5);
        $name = implode(".", $filename);
        $uploadfile = $upload . $name;
        var_dump($filename);
    } while (file_exists($uploadfile));
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "<center>�����ļ��Ѿ��ϴ����,�ϴ�ͼƬԤ����</center>
                    <br/><center><img src='$uploadfile'></center>";
            echo "<br><center><a href='javascript:history.go(-1)'>�����ϴ�</a></center>";
        } else {
            echo "w_w �ϴ�ʧ��";
        }
    }
}  
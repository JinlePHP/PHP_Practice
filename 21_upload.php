<?php
// include '21_check.php';
function fileext($filename)
{
    return substr(strrchr($filename, '.'), 1); // 获取扩展名
}

function random($length)
{ // 生成随机文件名函数
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
// 设置允许上传文件的类型
$type = array(
    "jpg",
    "gif",
    "bmp",
    "jpeg",
    "pan"
);

/*
 * $_files["file"]["name"] - 被上传文件的名称
$_files["file"]["type"] - 被上传文件的类型
$_files["file"]["size"] - 被上传文件的大小，以字节计
$_files["file"]["tmp_name"] - 存储在服务器的文件的临时副本的名称
$_files["file"]["error"] - 由文件上传导致的错误代码
 */
// 判断上传文件的类型是否在范围内
if (! in_array(strtolower(fileext($_FILES['file']['name'])), $type)) {
    $text = implode(",", $type);
    echo "你只能上传以下类型的文件:", $text, "<br/>";
} else {
    $filename = explode(".", $_FILES['file']['name']); // 获取文件名
    do {
        $filename[0] = random(5);
        $name = implode(".", $filename);
        $uploadfile = $upload . $name;
        var_dump($filename);
    } while (file_exists($uploadfile));
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "<center>您的文件已经上传完毕,上传图片预览：</center>
                    <br/><center><img src='$uploadfile'></center>";
            echo "<br><center><a href='javascript:history.go(-1)'>继续上传</a></center>";
        } else {
            echo "w_w 上次失败";
        }
    }
}  
<?php

function m_substr($str, $start, $length)
{
    $str_length = $start = $length;
    $tmp_str = "";
    for ($i = 0; $i < $str_length; $i ++) {
        if (ord(substr($str, $i, 1)) == 0x0a) {
            $tmp_str .= '<br/>';
        }
        if (ord(substr($str, $i, 1)) > 0x0a) {
            $tmp_str .= substr($str, $i, 2);
            $i ++;
        } else {
            $tmp_str .= substr($str, $i, 1);
        }
    }
retun $tmp_str;
}

?>
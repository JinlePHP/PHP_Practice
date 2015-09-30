<?php
echo "index.php<br/><br/>";
echo "<b>_FILE_<b/>:".__FILE__."<br >";
echo "<b>request_uri<b/>:".$_SERVER["REQUEST_URI"]."<br/>";
echo "<b>script_name<b/>:".$_SERVER["SCRIPT_NAME"]."<br/>";
echo "<b>php_self<b/>:".$_SERVER["PHP_SELF"]."<br />";
echo "<b>script_name<b/>:".$_SERVER['SCRIPT_FILENAME']."<br />";

?>
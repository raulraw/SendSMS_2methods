<?php
$mysqli = new mysqli("localhost","root","", "account");
if ($mysqli->connect_errno){
  printf("Error in sql.php on CONNECTION: %s\n </br>", $mysqli->connect_error);
}else {
//  $mysqli->set_charset("utf8s");
} ?>

<?php

$mysql_host = 'localhost';
$mysql_user = "root";
$mysql_password = "root";


$mysql_db = 'a3660097_danny';


if(!mysql_connect($mysql_host,$mysql_user,$mysql_password) || !mysql_select_db($mysql_db)){

die(mysql_error());

}














?>

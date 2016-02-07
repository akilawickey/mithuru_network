<?php

$mysql_host = 'web: vendor/bin/heroku-php-apache2 web/';
$mysql_user = "tozhlmnpgxjaor";
$mysql_password = "hDUUia5L8pn2pC0vyAfRLIDVWD";


$mysql_db = 'dcesfckjv2jpvh';


if(!mysql_connect($mysql_host,$mysql_user,$mysql_password) || !mysql_select_db($mysql_db)){

die(mysql_error());

}














?>

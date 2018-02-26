<?php
$mysql_host = '127.0.0.1';
$mysql_user = "root";
$mysql_password = "root";
$mysql_db = 'mithuru';

  if(!mysql_connect($mysql_host,$mysql_user,$mysql_password) || !mysql_select_db($mysql_db)){
    die(mysql_error());
  }
?>

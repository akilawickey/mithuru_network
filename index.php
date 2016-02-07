<?php
require 'corei.inc.php';
require 'connect.inc.php';
require 'conf.inc.php';


$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];
if(!empty($http_client_ip)){
$ip_address = $http_client_ip;


}else if(!empty($http_forward)){

$ip_address = $http_forward;

}else{
$ip_address = $remote_addr;
}


//echo $ip_adress;
foreach($ip_blocked as $ip){
if($ip==$ip_adress){
die('Your IP adress, '.$ip_adress.' has been blocked. ');
}

}



if(loggedin()){

//echo 'You are Logged in <a href="logout.php">Log out</a>';


//echo 'You are Logged in <form action="logout.php">
   //<input type="submit" value="Logout">';
header('Location: home.php');

}

else if(!loggedin()){

include 'loginform.inc.php';

}







?>
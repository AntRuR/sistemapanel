<?php
/*$hostname_cn = "localhost";
$database_cn = "truckmax";
$username_cn = "root";
$password_cn = "";*/

$hostname_cn = "www.pixel.pe";
$database_cn = "wwwpixel_truckmax";
$username_cn = "wwwpixel_truckmax";
$password_cn = "tru123";
$cn = mysql_connect($hostname_cn, $username_cn, $password_cn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
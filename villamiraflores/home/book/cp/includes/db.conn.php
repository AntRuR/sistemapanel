<?php
define("MYSQL_SERVER", "192.186.192.132");
define("MYSQL_USER", "hotel");
define("MYSQL_PASSWORD", "hotel123");
define("MYSQL_DATABASE", "prueba_hotel");

mysql_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD) or die ('I cannot connect to the database because 1: ' . mysql_error());
mysql_select_db(MYSQL_DATABASE) or die ('I cannot connect to the database because 2: ' . mysql_error());
?>
<?php
define("MYSQL_SERVER", "50.62.209.53:3306");
define("MYSQL_USER", "village");
define("MYSQL_PASSWORD", "village2014");
define("MYSQL_DATABASE", "Villagemiraflor_1");

mysql_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD) or die ('I cannot connect to the database because 1: ' . mysql_error());
mysql_select_db(MYSQL_DATABASE) or die ('I cannot connect to the database because 2: ' . mysql_error());
?>
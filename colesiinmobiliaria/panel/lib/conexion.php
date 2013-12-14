<?php //á

$link=mysql_connect ($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS) or die ('no se puedo conectar a la base de datos debido a: ' . mysql_error()." host:$MYSQL_HOST ,user:$MYSQL_USER ,pass:$MYSQL_PASS ,");
mysql_select_db ($MYSQL_DB,$link);

mysql_query("SET NAMES 'utf8'",$link);

?>
<?php 
set_time_limit(0);	
include("lib/global.php");

/* Conexion y eso*/ 
	$link=mysql_connect ($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS);
	mysql_select_db ($MYSQL_DB,$link);	
	mysql_query("SET NAMES 'utf8'",$link);

	$tablas3=array();
	$tablas3=explode(",",$_GET['tablas']);

/* Se busca las tablas en la base de datos */ 
if ( empty($tablas2) ) { 
    $consulta = "SHOW TABLES FROM $MYSQL_DB;"; 
    $respuesta = mysql_query($consulta, $link) 
    or die("No se pudo ejecutar la consulta: ".mysql_error()); 
    while ($fila = mysql_fetch_array($respuesta, MYSQL_NUM)) { 
		if($_GET['tablas']==''){
        	$tablas2[] = $fila[0]; 
		} else {
			if(in_array($fila[0],$tablas3)){
				$tablas2[] = $fila[0]; 
			}
		}
    } 
} 

$dump = "";
foreach ($tablas2 as $tabla) { 
     
    $drop_table_query = ""; 
    $create_table_query = ""; 
    $insert_into_query = ""; 
     
    /* Se halla el query que será capaz vaciar la tabla. */ 
        $drop_table_query = "DROP TABLE IF EXISTS `$tabla`;\n\n\n\n"; 


    /* Se halla el query que será capaz de recrear la estructura de la tabla. */ 
    $create_table_query = ""; 
    $consulta = "SHOW CREATE TABLE $tabla;"; 
    $respuesta = mysql_query($consulta, $link) 
    or die("No se pudo ejecutar la consulta: ".mysql_error()); 
    while ($fila = mysql_fetch_array($respuesta, MYSQL_NUM)) { 
            $create_table_query = $fila[1].";\n\n\n\n"; 
    } 
     
    /* Se halla el query que será capaz de insertar los datos. */ 
    $insert_into_query = ""; 
    $consulta = "SELECT * FROM $tabla;"; 
    $respuesta = mysql_query($consulta, $link) 
    or die("No se pudo ejecutar la consulta: ".mysql_error()); 
    while ($fila = mysql_fetch_array($respuesta, MYSQL_ASSOC)) { 
            $columnas = array_keys($fila); 
            foreach ($columnas as $columna) { 
                if ( gettype($fila[$columna]) == "NULL" ) { 
                    $values[] = "NULL"; 
                } else { 
                    $values[] = "\"".mysql_real_escape_string($fila[$columna])."\""; 
                } 
            } 
            $insert_into_query .= "INSERT INTO `$tabla` VALUES (".implode(", ", $values).");\n\n\n\n"; 
            unset($values); 
    } 
     
$dump .= "$drop_table_query 
$create_table_query
$insert_into_query";
}
/*
header("Content-Disposition: attachment; filename=$nombre"); 
header("Content-type: application/force-download"); 
echo $dump;
*/
echo $dump;
?>
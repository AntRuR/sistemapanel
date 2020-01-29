<?php 
set_time_limit(0);	
include("lib/global.php");
$delimeter="\n#\n#\n";



$link = mysqli_connect($MYSQL_HOST,$MYSQL_USER,$MYSQL_PASS,$MYSQL_DB);
mysqli_set_charset($link,"utf8");
date_default_timezone_set('America/Lima');
mysqli_query($link,"SET `time_zone` = '".date('P')."'");

// mysqli_query($link,"SET `time_zone` = '".date('P')."'");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}
/* Conexion y eso*/ 
	$tablas3=array();
	$tablas3=explode(",",$_GET['tablas']);


/* Se busca las tablas en la base de datos */ 
if ( empty($tablas2) ) { 
    $consulta = "SHOW TABLES FROM $MYSQL_DB;"; 
    $respuesta = mysqli_query($link,$consulta)
    or die("No se pudo ejecutar la consulta: ".mysqli_error()); 
      
    while ($fila = mysqli_fetch_array($respuesta)) { 
        // print_r($fila);
		if($_GET['tablas']==''){
        	$tablas2[] = $fila[0]; 
		} else {
			if(in_array($fila[0],$tablas3)){
				$tablas2[] = $fila[0]; 
			}
		}
    } 
} 


// $tablas4[]=$tablas2[0];$tablas2=$tablas4;


$dump = "";

foreach ($tablas2 as $tabla) { 
     
     
    /* Se halla el query que será capaz vaciar la tabla. */ 
        echo "DROP TABLE IF EXISTS `$tabla`;$delimeter"; 


    /* Se halla el query que será capaz de recrear la estructura de la tabla. */ 
    $consulta = "SHOW CREATE TABLE $tabla;"; 
    $respuesta = mysqli_query($link,$consulta) 
    or die("No se pudo ejecutar la consulta: ".mysqli_error()); 
    
    while ($fila = mysqli_fetch_array($respuesta)) { 
        echo $fila[1].";$delimeter"; 
    }

    /* Se halla el query que será capaz de insertar los datos. */ 
    $consulta = "SELECT * FROM $tabla;"; 
    $respuesta = mysqli_query($link,$consulta) 
    or die("No se pudo ejecutar la consulta: ".mysqli_error()); 
    
    while ($columnas = mysqli_fetch_array($respuesta,MYSQLI_ASSOC)) { 
        // $columnas = array_keys($fila); 
        // print_r($columnas);
        foreach ($columnas as $iidd=>$columna) { 
            // if(is_numeric($iidd)) continue;
            if ( gettype($columna) == "NULL" or  $columna == "0000-00-00 00:00:00") { 
                $values[] = "NULL"; 
            } else { 
                $values[] = "\"".mysqli_real_escape_string($link,$columna)."\""; 
            } 
        } 
        echo "INSERT INTO `$tabla` VALUES (".implode(", ", $values).");$delimeter"; 
        unset($values); 
    } 
     
}
/*
header("Content-Disposition: attachment; filename=$nombre"); 
header("Content-type: application/force-download"); 
echo $dump;
*/


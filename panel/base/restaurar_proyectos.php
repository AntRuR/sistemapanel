<?php

chdir("../");
//include("lib/includes.php");
include("lib/global.php");
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util2.php");
include("config/tablas.php");
include("lib/sesion.php");
include("lib/playmemory.php");

require_once( "lib/ini_manager.php" );

chdir("../../");


$directorio = dir("sistempanel/");
while($fichero=$directorio->read()) {
	if($fichero!='.' and $fichero!='..' and $fichero!='desktop.ini' and !is_dir($dir.$fichero) ){
		echo $fichero."<br>";
	}
}
	

?>
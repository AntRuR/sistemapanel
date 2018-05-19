<?php //á
	include_once("lib/global.php");	
	include_once("lib/conexion.php");
	include_once("lib/mysql3.php");
	include_once("lib/util2.php");
	if($vars['GENERAL']['esclavo']!='1'){	
		include_once("config/tablas.php");
	}
	include_once("lib/sesion.php");	
	include_once("lib/playmemory.php");

<?php //á

$root_dir=getcwd();

chdir("$panel_path/");

	include("lib/global.php");	
	include("lib/conexion.php");
	require("lib/mysql3.php");
	require("lib/util.php");	
	include("lib/class.phpmailer.php");

chdir($root_dir);

define(THEME_PATH,"$web_path/templates/".$vars['GENERAL']['template']."/");


//	include($file);

//chdir($root_dir);

?>
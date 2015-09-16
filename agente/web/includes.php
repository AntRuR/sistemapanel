<?php //á

session_start();

$root_dir=getcwd();

chdir("$panel_path/");

	include("lib/global.php");	
	include("lib/conexion.php");
	require("lib/mysql3.php");
	require("lib/util.php");	
	include("lib/class.phpmailer.php");

chdir($root_dir);

define(THEME_PATH,"$web_path/templates/".$vars['GENERAL']['template']."/");

chdir("$web_path/modulos/");

	include("common.php"); //head.php//header.php//menu.php//footer.php
	include($file);

chdir($root_dir);

chdir(THEME_PATH);

/*
$default_lang="es";
include("web/lang.php");
unset($lang);
include("web/lang/lang_".$c_lang.".php");
*/

?>
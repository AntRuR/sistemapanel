<?php //á

session_start();

$root_dir=getcwd();



chdir("$panel_path/");

include "lib/global.php";
include "lib/conexion.php";
require "lib/mysql3.php";
require "lib/util2.php";
include "lib/class.phpmailer.php";
include "lib/webutil2.php";

/**********************************************/
///////////////GET COMMON DATOS/////////////////
/**********************************************/
		
chdir($root_dir);

// define(THEME_PATH,"$web_path/templates/".$vars['GENERAL']['template']."/");
define('THEME_PATH',$web_path."/views/");

//	include($file);

//chdir($root_dir);

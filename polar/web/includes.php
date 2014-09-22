<?php //á

session_start();

$root_dir=getcwd();

// include($web_path."/modulos/panel.php");

chdir("$panel_path/");

	include("lib/global.php");	
	include("lib/conexion.php");
	require("lib/mysql3.php");
	require("lib/util.php");	
	include("lib/class.phpmailer.php");
	include("lib/webutil2.php");

		
chdir($root_dir);

// define(THEME_PATH,$web_path."/templates/".$vars['GENERAL']['template']."/");
define('THEME_PATH',$web_path."/views/");


//LOAD CONTROLLERS
chdir("$web_path/controllers/");

	include("common.php"); //head.php//header.php//menu.php//footer.php
	web_render_comming($vars,$_SESSION);	
		
chdir($root_dir);

//VIEWS
chdir(THEME_PATH);

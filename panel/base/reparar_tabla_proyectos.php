<?php

//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);



chdir("../");


include("lib/global.php");
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util2.php");
include("config/tablas.php");
include("lib/sesion.php");
include("lib/playmemory.php");

require_once( "lib/ini_manager.php" );


chdir("../../");
echo realpath("./");

$dir="sistemapanel/";
$directorio=dir("$dir");

while($fichero=$directorio->read()) {

	if(is_dir($dir.$fichero) and $fichero!='..' and $fichero!='.'){
			
		$carp = select_dato(
				"carpeta",
				"proyectos",
				"where carpeta='".$fichero."' "
				,0
		);
		//prin();
		if($fichero!=$carp){
			$fiche[]=$fichero;
		}

	}
}
$directorio->close();

prin($fiche);

foreach($fiche as $i=>$ficha){

	$file=$dir.$ficha."/panel/config/config.ini";
	$vars=parse_ini_file($file,true);

	$insert=insert(array(
			'nombre'=>$vars['REMOTE_FTP']['ftp_files_host']
			,'dominio'=>$vars['REMOTE_FTP']['ftp_files_host']
			,'ftp_user'=>$vars['REMOTE_FTP']['ftp_files_user']
			,'ftp_pass'=>$vars['REMOTE_FTP']['ftp_files_pass']
			,'ftp_root'=>$vars['REMOTE_FTP']['ftp_files_root']
			,'FORMATO'=>'BASE'
			,'visibilidad'=>'1'
			,'fecha_creacion'=>'now()'
			,'fecha_edicion'=>'now()'
			,'fecha_acceso'=>'now()'
			,'carpeta'=>$ficha
	),"proyectos",0);
		
	$vars['INTERNO']['ID_PROYECTO']=$insert['id'];
	write_php_ini($array, $file);
		
}



?>
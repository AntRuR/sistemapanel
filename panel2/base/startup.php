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

echo getcwd();

exit();

chdir("../");

$item = select_fila(
		"carpeta,logo,fecha_creacion,dominio",
		"proyectos",
		"where id='".$_GET['id']."' order by id asc limit 0,100"
		,0
);

$item2 = select(
		"carpeta,logo,fecha_creacion,dominio,nombre",
		"proyectos",
		"where para_subir='1' order by id asc limit 0,100"
		,0
);


if($_GET['confirm']!='1' or $_GET['proyecto']==''){

	echo "<h2>Confirma que desea crear directorio WEB?</h2>";

	echo "<select id='carpeta'>";
	foreach($item2 as $it){
		echo "<option value='".$it['carpeta']."|".$it['dominio']."'>".$it['nombre']."</option>";
	}
	echo "</select>";
	//echo "<pre>"; print_r($_SERVER); echo "</pre>";


	echo "<input type=button onclick=\"location.href='?proyecto='+document.getElementById('carpeta').value+'&id=".$_GET['id']."&confirm=1';\" value='SI' /><br><br>";

	//echo "<a><< volver</a>";
	echo "<a href=\"../../".$item['carpeta']."/panel\">ir a ".$item['carpeta']."</a> | ";

	echo "<a href=\"../../panel/index.php\">volver a proyectos</a><br>";

	exit();

}

echo "<a href=\"../../".$item['carpeta']."/panel\">ir a ".$item['carpeta']."</a> | ";

echo "<a href=\"../../panel/index.php\">volver a proyectos</a><br>";

list($Carpeta,$Dominio)=explode("|",$_GET['proyecto']);


$director=array();

$directorios=get_dirs_tree($Carpeta);

foreach($directorios as $directorio){
	if(
			$Carpeta."/"==$directorio
			or
			(!(strpos($directorio,$Carpeta."/web")===false))
			or
			(!(strpos($directorio,$Carpeta."/swf")===false))
	){
		$director[]=$directorio;
	}
}

$directorios=$director;


prin($directorios);
exit();


foreach($directorios as $directorio){

	mkdir(str_replace($Carpeta,$item['carpeta'],$directorio));
	$Directorio = dir($directorio."/");
	while($fichero=$Directorio->read()) {
		if($fichero!='.' and $fichero!='..'  and !is_dir("$directorio/".$fichero) ){

			if($fichero=='sitemap.xml'){

				continue;

			} elseif($fichero=='.htaccess' and !$vars['GENERAL']['htaccess_restringido']){

				/*
				$htaccess_buffer=implode("",file($directorio.$fichero));
				$htaccess_buffer_2=str_replace($Dominio,$item['dominio'],$htaccess_buffer);
				$htaccess_buffer_2=str_replace("/$Carpeta/","/".$item['carpeta']."/",$htaccess_buffer_2);

				$f1=fopen(str_replace($Carpeta,$item['carpeta'],$directorio.$fichero),"w+");
				fwrite($f1,$htaccess_buffer_2);
				fclose($f1);
				*/

			} elseif($fichero=='robots.txt'){

				$htaccess_buffer=implode("",file($directorio.$fichero));
				$htaccess_buffer_2=str_replace($Dominio,$item['dominio'],$htaccess_buffer);
				$htaccess_buffer_2=str_replace("/$Carpeta/","/".$item['carpeta']."/",$htaccess_buffer_2);

				$f1=fopen(str_replace($Carpeta,$item['carpeta'],$directorio.$fichero),"w+");
				fwrite($f1,$htaccess_buffer_2);
				fclose($f1);

			} else {

				echo str_replace($Carpeta,$item['carpeta'],$directorio.$fichero)." ";
				echo (copy($directorio.$fichero,str_replace($Carpeta,$item['carpeta'],$directorio.$fichero)))?"<span style='color:green 	;'>(ok)</span>":"<span style='color:red;'>(ko)</span>";
				echo "<br>";

			}

		}

	}
	$Directorio->close();

}





?>
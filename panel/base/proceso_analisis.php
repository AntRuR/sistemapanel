<?php

$directorio=getcwd();

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

chdir("../");

$items= select(
		"id,nombre,descripcion,dominio,ftp_user,ftp_pass,ftp_root,carpeta,logo,fecha_creacion",
		"proyectos",
		"where 1 and  visibilidad='1' order by id asc limit 0,100"
		,0
);

$todos_proyectos=array();

$archivos_tabla['proyectos']="panel/config/tablas.php";

foreach($items as $item){
	$tavla=$item['carpeta']."/panel/config/tablas.php";
	$archivos_tabla[$item['carpeta']]=$tavla;
}

foreach($archivos_tabla as $carpeta=>$archivo_tabla){
	if(file_exists($archivo_tabla)){
		include($archivo_tabla);
		$todos_proyectos[$carpeta]=$objeto_tabla;
		unset($objeto_tabla);
	}
}

foreach($todos_proyectos as $proyecto){
	foreach($proyecto as $indice_objeto=>$objeto){
		$objetos[]=$indice_objeto;
	}
}

foreach($todos_proyectos as $proyecto){
	foreach($proyecto as $objeto){
		foreach($objeto as $variable=>$valor){
			if($variable!="campos"){
				$propiedades[]=$variable;
				$propiedades_valor[$variable][]=str_replace("\n","",$valor);
			}
		}
	}
}

foreach($propiedades_valor as $variable=>$valor){
	$propiedades_valor2[$variable]=array_values(array_unique($valor));
}
$propiedades_valor=$propiedades_valor2;

foreach($todos_proyectos as $proyecto){
	foreach($proyecto as $objeto){
		foreach($objeto['campos'] as $campo){
			foreach($campo as $variable=>$valor){
				$propiedades_campo[]=$variable;
				$propiedades_campo_valor[$variable][]=(strlen($valor)>175)?"":$valor;
			}
		}
	}
}

foreach($propiedades_campo_valor as $variable=>$valor){
	$propiedades_campo_valor2[$variable]=array_values(array_unique($valor));
}
$propiedades_campo_valor=$propiedades_campo_valor2;


/*************LISTA DE ARCHIVOS DE CONFIGURACION*************/
//echo "<pre>"; print_r($archivos_tabla); echo "</pre>";
$ANALISIS['ARCHIVOS']=$archivos_tabla;

/*************LISTA DE OBJETOS*************/
$objetos=array_values(array_unique($objetos));
//echo "<pre>"; print_r($objetos); echo "</pre>";
$ANALISIS['OBJETOS']=$objetos;

/*************LISTA DE PROPIEDADES DE LOS OBJETOS*************/
$propiedades=array_values(array_unique($propiedades));
//echo "<pre>"; print_r($propiedades); echo "</pre>";
$ANALISIS['PROPIEDADES_OBJETO']=$propiedades;

/*************LISTA DE PROPIEDADES DE LOS CAMPOS*************/
$propiedades_campo=array_values(array_unique($propiedades_campo));
//echo "<pre>"; print_r($propiedades_campo); echo "</pre>";
$ANALISIS['PROPIEDADES_CAMPO']=$propiedades_campo;

/*************LISTA DE POSIBLES VALORES PARA OBJETO*************/
//echo "<pre>"; print_r($propiedades_valor); echo "</pre>";
$ANALISIS['VALORES_OBJETO']=$propiedades_valor;

/*************LISTA DE POSIBLES VALORES PARA CAMPO*************/
//echo "<pre>"; print_r($propiedades_campo_valor); echo "</pre>";
$ANALISIS['VALORES_CAMPO']=$propiedades_campo_valor;

prin($ANALISIS);

$ANALISIS=json_encode($ANALISIS);

//echo $ANALISIS;

chdir($directorio);
chdir("../");

$f1=fopen("analisis_objetos.txt","w+");
fwrite($f1,$ANALISIS);
fclose($f1);

?>
<?php

if($_GET['ajax']=='1'){
	chdir("../../");
	include("lib/global.php");
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util2.php");
	include("lib/webutil.php");
	include("config/tablas.php");
	include("lib/sesion.php");
	include("lib/playmemory.php");
	include("lib/class.phpmailer.php");
}


$this_project = fila(
		"carpeta,logo,fecha_creacion,nombre,url,dominio,ftp_user,ftp_pass,ftp_root,semilla,tipo,firma,email,tipo_web",
		"proyectos",
		"where id='".$_GET['id']."' order by id asc limit 0,100"
		,0
		,array(
				'url_logo'=>array('archivo'=>array('proy_imas','{fecha_creacion}','{logo}',''))
		)
);


$projects_devel = select(
		"carpeta,logo,fecha_creacion,dominio,nombre,id",
		"proyectos",
		"where para_subir='1' and tipo_web='".$this_project['tipo_web']."' order by id asc limit 0,100"
		,0
);



switch($_GET['paso']){

////////////////////////////////////////////////////////
///////////////////    FIRST    ////////////////////////
////////////////////////////////////////////////////////

case "first":

?>
<div class="formApp">

	<h2>Confirma que desea crear directorio WEB?</h2>
	<form method="post" action="pop.php?paso=confirm<?php echo $params;?>">
		<select id='proyecto' name="proyecto">
			<?php foreach($projects_devel as $it){
				echo "<option ".(($this_project['semilla']==$it['id'])?'selected':'')." value='".$it['carpeta']."|".$it['dominio']."'>".$it['nombre']."</option>";
        } ?>
		</select> <input type='submit' value='SI' />
	</form>
</div>
<?php

break;
case "confirm":

	$NuevaCarpeta=$this_project['carpeta'];

	list($Carpeta,$Dominio)=explode("|",$_POST['proyecto']);

	
	$vars=parse_ini_file("../$Carpeta/panel/config/config.ini",true); 

	// prin($vars);

	chdir("../../frame");

	if(!file_exists($Carpeta)) die("carpeta ".$Carpeta." no existe");

	mkdir($NuevaCarpeta);

	mkdir($NuevaCarpeta."/html");

	mkdir($NuevaCarpeta."/json");

	mkdir($NuevaCarpeta."/public");
	mkdir($NuevaCarpeta."/public/css");
	mkdir($NuevaCarpeta."/public/img");
	mkdir($NuevaCarpeta."/public/js");
	mkdir($NuevaCarpeta."/public/vendor");


	$files=['index.php','.htaccess'];


	foreach($files as $file)
		copy( $Carpeta."/".$file, $NuevaCarpeta."/".$file );



	$nuevos_to_copy=array_merge(
		get_dirs_tree($Carpeta."/app"),
		get_dirs_tree($Carpeta."/public")
		);

	$ignores=[
		'.',
		'..',
		'.DS_Store',
	];

	$no_copy=[
		// $Carpeta.'/app/views/php/',
	];
	// prin($no_copy);

	foreach($nuevos_to_copy as $dir){

		mkdir(str_replace($Carpeta,$NuevaCarpeta,$dir));

		// prin($dir);
		if(!in_array($dir,$no_copy)){

			$Directorio = dir($dir."/");

			while($fichero=$Directorio->read()) {
				if( !in_array($fichero,$ignores)  and !is_dir($dir.$fichero) ){

					echo str_replace($Carpeta,$NuevaCarpeta,$dir.$fichero)." ";
					echo (copy( $dir.$fichero, str_replace($Carpeta,$NuevaCarpeta,$dir.$fichero)))?"<span style='color:green;'>copiado</span>":"<span style='color:red;'>no copiado</span>";
					echo "<br>";

				}

			}

		}

	}

	// prin(get_dirs_tree($NuevaCarpeta));




	$f1=fopen($NuevaCarpeta."/conn.json","w+");
	fwrite($f1,"{
	\"host\":     \"".$this_project['dominio']."\",
	\"user\":     \"".$this_project['ftp_user']."\",
	\"password\": \"".$this_project['ftp_pass']."\",
	\"parallel\": \"3\"
}");
	fclose($f1);	


	$f1=fopen($NuevaCarpeta."/urltests.php","w+");
	fwrite($f1,"<?php
return [
'',
];
");
	fclose($f1);	


	$f1=fopen($NuevaCarpeta."/package.json","w+");
	fwrite($f1,"{
  \"name\": \"".$NuevaCarpeta."\",
  \"version\": \"1.0.0\",
  \"main\": \"index.js\",
  \"scripts\": {
    \"test\": \"echo \\\"Error: no test specified\\\" && exit 1\",
    \"jade2php\": \"jade2php --pretty --omit-php-runtime --omit-php-extractor  app/sources/jade/layout*.jade --out app/views/php\"
  },
  \"author\": \"Guillermo Lozán\",
  \"license\": \"ISC\",
  \"dependencies\": {
    \"jade2php\": \"^1.2.1\"
  }
}
");
	fclose($f1);	



	$f1=fopen($NuevaCarpeta."/touch.json","w+");
	fwrite($f1,'{"v":"1"}');
	fclose($f1);	



	$f1=fopen($NuevaCarpeta."/app/config/start.php","w+");
	fwrite($f1,"<?php

return [

	'name'	=>'".$this_project['nombre']."',

	'visitors'	=>false,

	'web'	=> [
	
		'name_short' =>'".$this_project['nombre']."',
		'email'      =>'info@".$this_project['dominio']."',
		'phone'      =>'(+511) 333 - 3333',
		'mobile'     =>'999-999-999',

		'address'    =>'Av. Arenales 1724 Dpto 509 Lince',
		'lat'        =>'-12.0819534',
		'lon'        =>'-77.0383133',
		
		'whatsapp'   =>'999-999-999',
		'twitter'    =>'https://twitter.com/',
		'facebook'   =>'https://www.facebook.com/',
		'youtube'    =>'https://www.youtube.com/',

	],

	'local' => [
		
		'config' =>APP.\"/../../../sistemapanel/".$NuevaCarpeta."/panel/config/config.ini\",
		
		'models' =>APP.\"/../../../sistemapanel/".$NuevaCarpeta."/panel/config/tablas.php\",
	
		'static' =>\"public\",

		'email_test'=>true,

		'data_test'	=>true,		
	
		// 'fake'	=>'fakeimg',

	],

	'remote' => [
		
		'config' =>\"../panel/config/config.ini\",
		
		'models' =>\"../panel/config/tablas.php\",		

		'static' =>\"./".$NuevaCarpeta."/public\",

		'devel' =>\"desarrollo\",

		// 'data_test'	=>true,		
	
		// 'fake'	=>'fakeimg',		

	]

];
");
	fclose($f1);

	




	/*	

	$director=array();

	$directorios=get_dirs_tree($Carpeta);
	foreach($directorios as $directorio){
		if(
		$Carpeta."/"==$directorio
		or
		(!(strpos($directorio,$Carpeta."/web")===false))
		or
		(!(strpos($directorio,$Carpeta."/css")===false))
		or
		(!(strpos($directorio,$Carpeta."/img")===false))
		or
		(!(strpos($directorio,$Carpeta."/js")===false))						
		or
		(!(strpos($directorio,$Carpeta."/swf")===false))
		){
			$director[]=$directorio;
		}
	}

	$directorios=$director;
	// prin($directorios);exit();
	foreach($directorios as $directorio){

		mkdir(str_replace($Carpeta,$this_project['carpeta'],$directorio));
		$Directorio = dir($directorio."/");
		while($fichero=$Directorio->read()) {
			if($fichero!='.' and $fichero!='..'  and !is_dir("$directorio/".$fichero) ){

				if(in_array($fichero,array('sitemap.xml','.htaccess3','.buildpath','.project','README.md','.git','.gitignore'))){

					continue;

				} elseif($fichero=='.htaccess' or $fichero=='robots.txt'){

					$htaccess_buffer=implode("",file($directorio.$fichero));
					$htaccess_buffer_2=str_replace($Dominio,$this_project['dominio'],$htaccess_buffer);
					$htaccess_buffer_2=str_replace("/$Carpeta/","/".$this_project['carpeta']."/",$htaccess_buffer_2);

					$f1=fopen(str_replace($Carpeta,$this_project['carpeta'],$directorio.$fichero),"w+");
					fwrite($f1,$htaccess_buffer_2);
					fclose($f1);

				} else {

					echo str_replace($Carpeta,$this_project['carpeta'],$directorio.$fichero)." ";
					echo (copy($directorio.$fichero,str_replace($Carpeta,$this_project['carpeta'],$directorio.$fichero)))?"<span style='color:green 	;'>(ok)</span>":"<span style='color:red;'>(ko)</span>";
					echo "<br>";

				}

			}
		}
		$Directorio->close();

	}

	*/

	break;
}



?>
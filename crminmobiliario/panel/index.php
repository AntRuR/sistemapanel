<?php //á
include("lib/includes.php");



$FILES=explode($_SERVER['SCRIPT_NAME'],$_SERVER['PHP_SELF']);
$FILE=(!empty($FILES[1]))?$FILES[1]:$_SERVER['ORIG_PATH_INFO'];
$FILE=str_replace("/","",$FILE);

//ORIG_PATH_INFO
$file2OBJ=array();

foreach($objeto_tabla as $mememe=>$ot){
	// prin("/".$ot['archivo']);
	// prin($FILES[1]);
	$file2OBJ[$ot['archivo']]=$mememe;
	if($ot['archivo']==$FILE) {
		$MEEE=$objeto_tabla[$ot['me']];
		continue;
	}
}

if(isset($MEEE)){

	// prin(sizeof($MEEE));
	$this_me=$MEEE['me'];
	
	$objeto_tabla = pre_procesar_tabla($objeto_tabla,$vars);

	$MEEE = $objeto_tabla[$this_me];

	// prin($MEEE);
	// $MEEE = $objeto_tabla[$this_me]);

}


//REDIRECCIONES
if(!isset($MEEE)){

	$permisos=$PERMISOS_USUARIO;
	if(trim($permisos)=='' or trim($permisos)=='*'){

		header("Location: ". $DIR_CUSTOM.$FILE_DEFAULT);

	} else {

		//prin($permisos);
		$permisos=str_replace("\n","",$permisos);
		$permisos=explode(",",$permisos);
		foreach($permisos as $permiso){
			list($objeto,$params)=explode("?",$permiso);
			$Permitidos[]=$objeto;
		}

		$sepuede=0;
		foreach($Permitidos as $uno=>$dos){
			if($objeto_tabla[$dos]['archivo'].".php"==$FILE_DEFAULT){
				$sepuede=1; continue;
			}
		}
		$FILE_DEFAULT=($sepuede)?$FILE_DEFAULT:$objeto_tabla[$Permitidos[0]]['archivo'].".php";

		header("Location: ". $DIR_CUSTOM.$FILE_DEFAULT);

	}

}

// prin($_GET);exit();

// div_contenedor
// contenido_principal

include("lib/compresionInicio.php");

include("head.php"); 

$id_permisos=dato("id_permisos","usuarios_acceso","where id=".$_SESSION['usuario_id']);

?>

<body class="monitor acceso_<?=$_SESSION['usuario_id']?> <?=$MEEE['titulo']?> <?=($_COOKIE['admin'])?'permiso_master':'';?> permiso_<?=$id_permisos;?> modulo_<?=$FILE;?> <? echo ($_GET['justlist']==1)?'justlist':'';?>">

	<div id="div_allcontent" class="div_allcontent <?=(  ($SERVER['ARCHIVO']!='login.php') and $_COOKIE['men'] )?'menu_colapsed':''  ?>">

		<?php include("header.php"); ?>

		<div class="line_content">

			<?php include("menu.php"); ?>

			<?php include("vista.php"); ?>

		</div>

		<?php include("foot.php"); ?>

	</div>
</body>
</html>
<?php include("lib/compresionFinal.php");
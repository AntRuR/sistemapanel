<?php //á

@session_start(); // Iniciar variables de sesión

// echo getcwd();exit();

chdir("../../");

// include("lib/compresionInicio.php");
include("lib/global.php");	
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util2.php");


$venta_fila=select_fila(
					'id_ventas_item',
					'productos_ventas',
					'where id="'.$_GET['L'].'" ',
					0
				);

$id_item=dato('id_item','ventas_items','where id='.$venta_fila['id_ventas_item'],0);

$rr=fila(
	"id,
	file,
	nombre,
	id_item,
	fecha_creacion",
	"contratos",
	"where nombre='".$_GET['doc']."' and id_item=".$id_item,
	0,
	[
		'doc'=>['archivo'=>['ctr_doc','{fecha_creacion}','{file}']]
	]	
	);



list($uno,$dos) = explode("imagenes_dir",$rr['doc']);

$rr['doc']="../imagenes_dir".$dos;


list($uno,$dos) = explode("imagenes_dir",$rr['doc']);
$rr['doc']="../imagenes_dir".$dos;


require_once 'lib/PHPWord.php';

require_once 'lib/MyPHPWord.php';

$PHPWord = new MyPHPWord();

$document = $PHPWord->MyloadTemplate($rr['doc']);

$filas=select([
	'var',
	'valor',
	],'variables_documentos','where id_grupo='.$_GET['L']);

foreach($filas as $fila){

	if(trim($fila['valor'])!='')
		$document->setValue($fila['var']	, $fila['valor']);

}


$filenameout = $rr['nombre'].".docx";

$filename = 'temp.docx';
$document->save($filename);
header('Content-Description: File Transfer');
header('Content-type: application/force-download');
header('Content-Disposition: attachment; filename='.basename($filenameout));
header('Content-Transfer-Encoding: binary');
header('Content-Length: '.filesize($filename));
readfile($filename);


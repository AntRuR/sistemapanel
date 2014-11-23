<?php //á

@session_start(); // Iniciar variables de sesión

// echo getcwd();exit();

chdir("../../");

// include("lib/compresionInicio.php");
include("lib/global.php");	
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util2.php");


$rr=fila(
	"id,
	file,
	nombre,
	fecha_creacion",
	"contratos",
	"where nombre='".$_GET['nombre']."'",
	0,
	[
		'doc'=>['archivo'=>['ctr_doc','{fecha_creacion}','{file}']]
	]	
	);


list($uno,$dos) = explode("imagenes_dir",$rr['doc']);

$rr['doc']="../imagenes_dir".$dos;

// prin($rr);
// exit();

// echo getcwd();
// echo '<br>';

list($uno,$dos) = explode("imagenes_dir",$rr['doc']);
$rr['doc']="../imagenes_dir".$dos;

require_once 'lib/PHPWord.php';

$PHPWord = new PHPWord();

$document = $PHPWord->loadTemplate($rr['doc']);

$document->setValue('Value1'	, 'Sun');
$document->setValue('Value2'	, 'Mercury');
$document->setValue('Value3'	, 'Venus');
$document->setValue('Value4'	, 'Earth');
$document->setValue('Value5'	, 'Mars');
$document->setValue('Value6'	, 'Jupiter');
$document->setValue('Value7'	, 'Saturn');
$document->setValue('Value8'	, 'Uranus');
$document->setValue('Value9'	, 'Neptun');
$document->setValue('Value10'	, 'Pluto');
$document->setValue('weekday'	, date('l'));
$document->setValue('time'		, date('H:i'));
// $document->save('asalvo.docx');

$filenameout = $rr['nombre'].".docx";


$filename = 'temp.docx';
$document->save($filename);
header('Content-Description: File Transfer');
header('Content-type: application/force-download');
header('Content-Disposition: attachment; filename='.basename($filenameout));
header('Content-Transfer-Encoding: binary');
header('Content-Length: '.filesize($filename));
readfile($filename);


/*
include("base2/html/".$rr['file'].".php");

?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?php echo $SERVER['PANEL']; ?>/" />	
	<script type="text/javascript" src="js/docx.base64.js"></script>
	<script type="text/javascript" src="js/docx.jszip.min.js"></script>
	<script type="text/javascript" src="js/docx.docxgen.min.js"></script>
</head>
<body>
<script>
//contr_1404497104.docx
// new DocxGen().loadFromFile("contr_1404497104.docx",{async:true}).success(function(doc){
new DocxGen().loadFromFile("../<?php  echo $rr['doc']; ?>?r="+Math.random(),{async:true}).success(function(doc){
	// doc.setOptions({"output":"saluda.docx"});
	doc.setTags({
		"CONTRATO":"erase and rewind"
		}
	) //set the templateVariables
	doc.applyTags() //apply them (replace all occurences of {first_name} by Hipp, ...)
	doc.output() //Output the document using Data-URI
});

</script>
</body>
</html><?php
*/
// include("lib/compresionIFinal.php");
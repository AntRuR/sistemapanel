<?php //á

@session_start(); // Iniciar variables de sesión

chdir("../../");

// include("lib/compresionInicio.php");
include("lib/global.php");	
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util.php");
//	include("lib/stripattributes.php");
include("config/tablas.php");	

// echo $_GET['file'];


$rr=fila(
	"id,
	file,
	nombre",
	"contratos",
	"where file='".$_GET['file']."'",
	0
	);

// prin($SERVER);exit();

ob_start();

// echo getcwd(); exit();
// include();
// include("base2/html/".$rr['file'].".php");

?><!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<base href="<?php echo $SERVER['PANEL']; ?>/" />


	<script type="text/javascript" src="js/vendor/jquery-1.8.2.min.js"></script>

	<script type="text/javascript" src="js/vendor/libs/base64.js"></script>
	<script type="text/javascript" src="js/vendor/libs/jszip/jszip.js"></script>
	
	<!-- Include main js lib -->
	<script type="text/javascript" src="js/vendor/DOCX.js"></script>

</head>
<body>

	
	<script>
	
	function test() {
		var doc = new DOCXjs();
		doc.text('DOCX.js is a free open source library for generating Microsoft Word Documents using pure client-side JavaScript.');
		doc.text('It was developed by James Hall at Snapshot Media.');
		var output = doc.output('datauri');
		
	}
	</script>
	<p><a href="javascript:test()">Run Test</a></p>



</body>
</html><?php



$content = ob_get_contents();
ob_end_clean();		

echo $content;
// prin($rr);


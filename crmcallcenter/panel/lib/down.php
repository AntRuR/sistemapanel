<?php //á
//echo $_GET['file'];

include("lib/global.php");	
include("lib/mysql3.php");
include("lib/util.php");	
include("lib/webutil.php");



//echo getcwd()."<br>";

//echo $_SERVER['DOCUMENT_ROOT']."<br>";

chdir($_SERVER['DOCUMENT_ROOT']);

//echo getcwd()."<br>";

$file	=str_replace("///","","//".$_GET['file']);
//$file	= $_GET['file'];

//echo $file."<br>";
/*
if(!file_exists($file))
{
    die('Error: File not found.');
}

exit();
else
{*/

	$parts	=explode(".",$file);
	$ext	=strtolower($parts[sizeof($parts)-1]);
	$len = filesize($file);

	
	$CONTENT['txt']="text/plain";
	$CONTENT['pdf']="application/pdf";
	$CONTENT['doc']="application/vnd.ms-word";
	$CONTENT['xls']="application/vnd.ms-excel";

 
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
	header("Content-type: ".$CONTENT[$ext]); //or yours?
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: $len;\n");
	header("Content-Disposition: attachment; filename=" . str_replace(" ","_",$_GET['name']) . ".".$ext);
	
	readfile($file);
	

//}


?>
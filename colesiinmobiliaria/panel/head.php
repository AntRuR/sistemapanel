<?php //á


/* if($_GET['r']!=''){
parse_str($_SERVER['QUERY_STRING'],$get);
unset($get['r']);
header("Location: ".$SERVER['BASE'].$SERVER['ARCHIVO']."?redirigido=1&".http_build_query($get));
} */
//prin($_COOKIE);

$HTML_ALL_INICIO=$HTML_ALL_INICIO.$HTML_ESQUINAS_ARRIBA;

$HTML_ALL_FIN=$HTML_ESQUINAS_ABAJO.$HTML_ALL_FIN;

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title><?php echo $html_title?></title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type"/>
<meta name="title" content="<?php echo $meta_title?>"/>
<meta name="description" content="<?php echo $meta_descripcion?>"/>
<meta name="keywords" content="<?php echo $meta_keyword?>"/>
<?php 
if($_GET['rt']!=''){
parse_str($_SERVER['QUERY_STRING'],$get);
unset($get['rt']);
//header("Location: ".$SERVER['BASE'].$SERVER['ARCHIVO']."?redirigido=1&".http_build_query($get));
echo '<meta http-equiv="refresh" content="0;url='. ( $SERVER['BASE'].$SERVER['ARCHIVO'].'?'.http_build_query($get) ) .'" />';
}
 
if(!(strpos($_SERVER['SCRIPT_NAME'], $DIR_CUSTOM)===false)){
	
	$sn=explode($DIR_CUSTOM,$_SERVER['SCRIPT_NAME']);
	$sn2="http://".$_SERVER['SERVER_NAME'].$sn[0];
	$sn3='<base href="'.$sn2.'" />';
	
} else {

	$sn2="";
	$sn3="";	
	
}	
echo $sn3;

$necesita_mooeditable=necesita_mooeditable($objeto_tabla);

?>
<link rel="shortcut icon" href="<?php echo $sn2?>img/core.ico" />
<link href="<?php echo $sn2?>css/css.css?r=0002" rel="stylesheet" type="text/css"/>
<?php if($vars['GENERAL']['ESTILO_2']=='1'){ ?>
<link href="<?php echo $sn2?>css/css_2.css" rel="stylesheet" type="text/css"/>
<?php } ?>
<link type="text/css" rel="stylesheet" href="<?php echo $sn2?>css/multiBox.css" />
<!--[if lte IE 6]>
    <link type="text/css" rel="stylesheet" href="<?php echo $sn2?>css/multiBoxIE6.css" />
<![endif]-->
<?php if($necesita_mooeditable){ ?>
<link rel="stylesheet" type="text/css" href="<?php echo $sn2?>css/MooEditable.css">
<link rel="stylesheet" type="text/css" href="<?php echo $sn2?>css/MooEditable.Extras.css">  
<link rel="stylesheet" type="text/css" href="<?php echo $sn2?>css/MooEditable.SilkTheme.css"> 
<?php /*
<link rel="stylesheet" type="text/css" href="<?php echo $sn2?>css/MooEditable.Flash.css">
*/ ?>
<?php } ?>
<?php /*
<script type="text/javascript" src="<?php echo $sn2?>js/flashobject.js"></script> 
*/?>
<script type="text/javascript" src="<?php echo $sn2?>js/mootools-1.2.3-core-yc.js"></script>
<script type="text/javascript" src="<?php echo $sn2?>js/js.js"></script> 
<script type="text/javascript" src="<?php echo $sn2?>js/mootools-1.2.4.2-more.js"></script>
<?php /*
<script type="text/javascript" src="<?php echo $sn2?>js/mootools-1.2.3.1-more-yc.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $sn2?>css/MooEditable.Forecolor.css">
*/ ?>
<script type="text/javascript" src="<?php echo $sn2?>js/_class.noobSlide.packed.js"></script>
<script type="text/javascript" src="<?php echo $sn2?>js/overlay.js"></script>
<script type="text/javascript" src="<?php echo $sn2?>js/multiBox.js"></script>
<?php if($necesita_mooeditable){ ?>
<script type="text/javascript" src="<?php echo $sn2?>js/MooEditable.js"></script>
<script type="text/javascript" src="<?php echo $sn2?>js/MooEditable.UI.ButtonOverlay.js"></script>
<script type="text/javascript" src="<?php echo $sn2?>js/MooEditable.UI.MenuList.js"></script>        
<script type="text/javascript" src="<?php echo $sn2?>js/MooEditable.Extras.js"></script>
<?php /*
<script type="text/javascript" src="<?php echo $sn2?>js/MooEditable.Flash.js"></script>
<script type="text/javascript" src="<?php echo $sn2?>js/MooEditable.Forecolor.js"></script>
*/ ?>
<?php } 
$LINK_COLOR_OPP=oppColour($LINK_COLOR);

$BG_IMAGE=str_replace("img/bgs/","http://crazyosito.com/bgs/",$BG_IMAGE);

?>      
<script type="text/javascript" src="<?php echo $sn2?>js/flext.js"></script>  
<style>
body { 
background-image:url('<?php echo $BG_IMAGE;?>');
}
.contenido_principal {
/*background-color:#<?php echo $BG_COLOR_2;?>;*/
}
#div_contenedor {
/*background:transparent url(img/shadow.png) no-repeat scroll 50% top;*/
}
a { 
color:#<?php echo $LINK_COLOR;?>; 
}
.form_boton_1  { 
background-color:#<?php echo $LINK_COLOR;?>; 
color:#<?php echo $LINK_COLOR_OPP;?>;
}

a.link_header {
color:#<?php echo $BG_COLOR_1;?>;
}
</style>
</head>
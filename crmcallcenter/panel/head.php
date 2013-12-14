<?php //á
?>
<!DOCTYPE HTML>
<?php
?>
<html lang="es">
<?php
?>
<head>
<title><?php echo $html_title?></title>
<?php
?>
<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
<?php
/* ?><meta name="title" content="<?php echo $meta_title?>"/><?php */
/* ?><meta name="description" content="<?php echo $meta_descripcion?>"/><?php */
/* ?><meta name="keywords" content="<?php echo $meta_keyword?>"/><?php */

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
	$sn=explode("/panel",$_SERVER['SCRIPT_NAME']);
	$sn2="http://".$_SERVER['SERVER_NAME'].$sn[0]."/panel/";
	$sn3='<base href="'.$sn2.'" />';
}
echo $sn3;

$rrr='583';

$needs=necesita_libs($objeto_tabla);

//FAVICON
if($Local){ ?>
<link rel="shortcut icon"
	href="<?php echo $sn2?>img/local.ico?r=<?php echo $rrr;?>" />
<?php
}else{ ?>
<link rel="shortcut icon"
	href="<?php echo $sn2?>img/remote.ico?r=<?php echo $rrr;?>" />
<?php }

//MAIN LIBs
/*?><link href="<?php echo $sn2?>css/css.css?r=<?php echo $rrr;?>" rel="stylesheet" type="text/css"/><?php
 ?><script type="text/javascript" src="<?php echo $sn2?>js/mootools-core-1.3.2-full-compat.js"></script><?php
?><script type="text/javascript" src="<?php echo $sn2?>js/mootools-more-1.3.2.1.js"></script><?php
?><script type="text/javascript" src="<?php echo $sn2?>js/js.js?r=<?php echo $rrr;?>"></script><?php
*/
?>
<link href="<?php echo $sn2?>css/bootstrap.css?r=<?php echo $rrr;?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $sn2?>css/bootstrap-responsive.css?r=<?php echo $rrr;?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $sn2?>css/docs.css?r=<?php echo $rrr;?>" rel="stylesheet" type="text/css" />

<link href="<?php echo $sn2?>css/css.css?r=<?php echo $rrr;?>" rel="stylesheet" type="text/css" />

<?php
?>
<link href="<?php echo $sn2?>css/css_print.css?r=<?php echo $rrr;?>"
	rel="stylesheet" type="text/css" media="print" />

<link href="<?php echo $sn2?>config/main.css?r=<?php echo $rrr;?>" rel="stylesheet" type="text/css" />

<?php
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/mootools-core-1.4.2-full-compat-yc.js"></script>
<?php
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/mootools-more-1.4.0.1.js"></script>
<?php
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/js.js?r=<?php echo $rrr;?>"></script>
<?php


//swfobject.js
if(1){
?>
<script type="text/javascript" src="<?php echo $sn2?>js/swfobject.js"></script>
<?php
}

//Meio.Autocomplete.js
if(1){
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/Meio.Autocomplete.js"></script>
<?php
/*?><script type="text/javascript" src="<?php echo $sn2?>js/HashListener.js"></script><?php*/
/*?><script type="text/javascript" src="<?php echo $sn2?>js/HistoryManager.js"></script><?php*/
/* ?><link type="text/css" rel="stylesheet" href="<?php echo $sn2?>css/multiBox.css" /><?php */
}
//LIGHTSHOW
$needs['img']=1;
if($needs['img']){
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/_class.noobSlide.packed.js"></script>
<?php
?>
<script type="text/javascript" src="<?php echo $sn2?>js/overlay.js"></script>
<?php
?>
<script type="text/javascript" src="<?php echo $sn2?>js/multiBox.js"></script>
<?php
?>
<link type="text/css" rel="stylesheet"
	href="<?php echo $sn2?>css/multiBox.css" />
<?php
}

//EDIT HTML
//if(1){
if($needs['html'] or $SERVER['ARCHIVO']=='pop.php'){
?>
<link rel="stylesheet" type="text/css"
	href="<?php echo $sn2?>css/MooEditable.css">
<?php
?>
<link rel="stylesheet" type="text/css"
	href="<?php echo $sn2?>css/MooEditable.Extras.css">
<?php
?>
<link rel="stylesheet" type="text/css"
	href="<?php echo $sn2?>css/MooEditable.SilkTheme.css">
<?php
?>
<link rel="stylesheet" type="text/css"
	href="<?php echo $sn2?>css/MooEditable.Table.css">
<?php
?>
<link rel="stylesheet" type="text/css"
	href="<?php echo $sn2?>css/MooEditable.Forecolor.css">
<?php
?>
<script type="text/javascript" src="<?php echo $sn2?>js/MooEditable.js"></script>
<?php
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/MooEditable.UI.ButtonOverlay.js"></script>
<?php
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/MooEditable.UI.MenuList.js"></script>
<?php
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/MooEditable.Extras.js"></script>
<?php
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/MooEditable.Table.js"></script>
<?php
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/MooEditable.CleanPaste.js"></script>
<?php
?>
<script type="text/javascript"
	src="<?php echo $sn2?>js/MooEditable.Forecolor.js"></script>
<?php
}

/*
 $needs['milkbox']=1;
if($needs['milkbox']){
?><script type="text/javascript" src="<?php echo $sn2?>js/milkbox-yc.js"></script><?php
?><link rel="stylesheet" type="text/css" href="<?php echo $sn2?>css/milkbox/milkbox.css"><?php
}
*/
$needs['mootooltips']=1;
if($needs['mootooltips']){
?>
<link rel="stylesheet" type="text/css"
	href="<?php echo $sn2?>css/MooTooltips.css">
<?php
?>
<script type="text/javascript" src="<?php echo $sn2?>js/MooTooltips.js"></script>
<style>
.ToolTips .message {
	margin-bottom: 0px;
	margin-top: -14px;
	min-height: 20px;
}
</style>
<?php
}

$LINK_COLOR_OPP=oppColour($LINK_COLOR);
$BG_IMAGE=str_replace("img/bgs/","http://crazyosito.com/bgs/",$BG_IMAGE);
?>
<script type="text/javascript" src="<?php echo $sn2?>js/flext.js"></script>
<?php
?>
<style>
body {
	background: fixed;
	background-image: url('<?php echo $BG_IMAGE;?>');
}
</style>
<?php
?>
</head>
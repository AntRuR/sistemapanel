<?php //á
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
<head>
<title><?php echo $HEAD['titulo'];?></title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"  />
<meta http-equiv="Content-Style-Type" content="text/css" />
<?php if($HEAD['meta_descripcion']){ ?><meta name="description" content="<?php echo $HEAD['meta_descripcion']?>" /><?php } ?>
<?php if($HEAD['meta_keywords']){ ?><meta name="keywords" content="<?php echo $HEAD['meta_keywords']?>" /><?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<meta http-equiv="content-language" content="es" />
<meta name="robots" content="index,follow"/>
<meta name="googlebot" content="index, follow" />
<base href="<?php echo $SERVER['BASE'];?>" />
<link rel="canonical" href="<?php echo $SERVER['BASE'].procesar_url($SERVER['ARCHIVO']."?".$_SERVER['REDIRECT_QUERY_STRING']);?>" />
<?php
foreach($INCLUDES['ico'] as $file){ 
echo '<link rel="shortcut icon" href="'.$SERVER['BASE'].THEME_PATH.$file.'" />';
}
foreach($INCLUDES['css_ie6'] as $file){ 
echo '<!--[if lte IE 6]><link type="text/css" rel="stylesheet" href="'.$SERVER['BASE'].THEME_PATH.$file.'" /><![endif]-->';
}
foreach($INCLUDES['css'] as $file){ 
echo '<link type="text/css" rel="stylesheet" href="'.$SERVER['BASE'].THEME_PATH.$file.'" />';
}
foreach($INCLUDES['js'] as $file){ 
echo '<script type="text/javascript" src="'.$SERVER['BASE'].THEME_PATH.$file.'"></script>';
}
if(sizeof($INCLUDES['style'])>0){
echo "<style type='text/css'>\n";
foreach($INCLUDES['style'] as $linea){ 
echo $linea."\n";
}
echo "</style>\n";
}
if(sizeof($INCLUDES['script'])>0){
echo "<script type='text/javascript'>\n";
foreach($INCLUDES['script'] as $linea){ 
echo $linea."\n";
}
echo "</script>\n";
}
?>
</head>
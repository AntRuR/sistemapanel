<?php


function web_render_logo($COMMON,$props=""){
global $SERVER;
$html ='<a href="'.$COMMON['url_home'].'" id="header_logo" >';
$html.='<img src="'. ( ($SERVER['browser']=='IE6')?str_replace(".png",".jpg",$COMMON['path_logo']):$COMMON['path_logo'] ).'" 
alt="'.$COMMON['datos_root']['titulo_web'].'" '.( str_replace("'","\"",$props) ).' 
title="'.$COMMON['datos_root']['titulo_web'].'" '.( str_replace("'","\"",$props) ).' 
 />';
$html.='</a>';
echo $html;

}

function web_logo($COMMON,$props=""){
global $SERVER;
$html='<img src="'. ( ($SERVER['browser']=='IE6')?str_replace(".png",".jpg",$COMMON['path_logo']):$COMMON['path_logo'] ).'" 
alt="'.$COMMON['datos_root']['titulo_web'].'" '.( str_replace("'","\"",$props) ).'
title="'.$COMMON['datos_root']['titulo_web'].'" '.( str_replace("'","\"",$props) ).' 
  />';
echo $html;

}
		
function web_render_header($HEAD,$SERVER){
//global $SERVER,
$INCLUDES=$HEAD['INCLUDES'];
$INCLUDES=quitar_repetidos($INCLUDES);

$INCLUDE=$HEAD['INCLUDE'];

$html ='';
$html.='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<title>'.$HEAD['titulo'].'</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"  />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
';
if($HEAD['meta_descripcion']){ $html.='<meta name="description" content="'.$HEAD['meta_descripcion'].'" />
'; } 
if($HEAD['meta_keywords']){ $html.='<meta name="keywords" content="'.$HEAD['meta_keywords'].'" />
'; }
$html.='<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<meta http-equiv="content-language" content="es" />
<meta name="robots" content="index,follow"/>
<meta name="googlebot" content="index, follow" />
<base href="'.$SERVER['BASE'].'" />
<link rel="canonical" href="'. $SERVER['URL'] .'" />
';
foreach($HEAD['facebook'] as $var=>$val){ 
$html.='<meta property="'.$var.'" content="'.$val.'"/>
';}

//INCLUDES
foreach($INCLUDES['meta'] as $var=>$val){ 
$html.='<meta http-equiv="'.$var.'" content="'.$val.'"/>
';}
foreach($INCLUDES['ico'] as $file){ 
$html.='<link rel="shortcut icon" href="'.$SERVER['BASE'].THEME_PATH.$file.$INCLUDE['version'].'" type="image/x-icon" />
';}
foreach($INCLUDES['external_css'] as $file){ 
$html.='<link type="text/css" rel="stylesheet" href="'.$file.'" />
';}
$cssmain='';
$csss='';
$cssnum=0;
foreach($INCLUDES['css'] as $id=>$file){ 
if($id=='base'){ $cssmain.='<link type="text/css" rel="stylesheet" href="'.$SERVER['BASE'].THEME_PATH.$file.$INCLUDE['version'].'" />
'; } else {
$sufig= "_". ( $cssnum++ );
$csss.='<link type="text/css" rel="stylesheet" href="'.$SERVER['BASE'].THEME_PATH.$file.$INCLUDE['version'].$sufig.'" />
';
}
}
foreach($INCLUDES['cssabs'] as $id=>$file){ 
$sufig= "_". ( $cssnum++ );
$csss.='<link type="text/css" id="'.$id.'" rel="stylesheet" href="'.$file.str_replace("?","&",$INCLUDE['version']).$sufig.'" />
';
}
$html.=$cssmain.$csss;
foreach($INCLUDES['css_ie6'] as $file){ 
$html.='<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="'.$SERVER['BASE'].THEME_PATH.$file.$INCLUDE['version'].'" />
<![endif]-->
';}
foreach($INCLUDES['js'] as $file){ 
$html.='<script type="text/javascript" src="'.$SERVER['BASE'].THEME_PATH.$file.$INCLUDE['version'].'"></script>
';}
if(sizeof($INCLUDES['style'])>0){
$html.="<style type='text/css'>\n";
foreach($INCLUDES['style'] as $linea){ 
$html.=$linea."\n";}
$html.="</style>\n";}
if(sizeof($INCLUDES['script'])>0){
$html.="<script type='text/javascript'>\n";
foreach($INCLUDES['script'] as $linea){ 
$html.=$linea."\n";}
$html.="</script>\n";}
if(sizeof($INCLUDES['script_defer'])>0){
$html.="<script type='text/javascript' defer='defer'>\n";
foreach($INCLUDES['script_defer'] as $linea){ 
$html.=$linea."\n";
}
$html.="</script>\n";
}
if($INCLUDE['anaytics_code'] and !$SERVER['LOCAL']){
$html.="<script type=\"text/javascript\">
var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try {
var pageTracker = _gat._getTracker(\"".$INCLUDE['anaytics_code']."\");
pageTracker._trackPageview();
} catch(err) {}</script>
";
}
$html.='</head>';
echo $html;
}

function web_re_procesar_menu($menu,$url){
	foreach($menu as $mm=>$men){
			if(!(strpos($men['url'],$url)===false)){
				$menu[$mm]['class']='selected';
			}	
	}
	return $menu;
}

function web_procesar_menu($menu,$direccion="izquierda"){

	global $_GET;
	$men2=array(); $menu1=array(); $menu2=array();
	
	foreach($menu as $uu=>$men){
		$men['lado']=isset($men['lado'])?$men['lado']:$direccion;	
		if($men['lado']=='izquierda'){
		$menu1[]=$men;	
		} else {
		$menu2[]=$men;	
		}
	}
	if(sizeof($menu1)>0){
		$menu1[sizeof($menu1)-1]['ultimo']='ultimo';
	}	
	if(sizeof($menu2)>0){
		$menu2[sizeof($menu2)-1]['ultimo']='ultimo';
		$menu2=array_reverse($menu2);
	}	
	$menu=array_merge($menu1,$menu2);
	foreach($menu as $uu=>$men){
		$men3=$men;
		if($men['class']=='selected'){
			$men3['url']=procesar_url($men['url']);
		} else {
			if($men['url']!=''){
				$men3['url']=procesar_url($men['url']);
				$url=parse_url($men['url']);		
				parse_str($url['query'],$vvv);	
				unset($vvv['friendly']);
				//unset($vvv['acc']);
				$sel=1;
				foreach($vvv as $var=>$val){
					if($_GET[$var]!=$val){
						$sel=0;
					}
				}		
				$men3['class']=($sel==1)?'selected':'';
			} else {
				$men3['class']=($men['default']=='1')?'selected':'';
			}
		}
		$men2[$uu]=$men3;
	}
	return $men2;
	
}

function web_render_menu($MENU,$obj=NULL){

	$labelA=array();
	
	$obj['lados_flotantes']=(isset($obj['lados_flotantes']))?$obj['lados_flotantes']:0;
	$obj['lados_externos']=(isset($obj['lados_externos']))?$obj['lados_externos']:1;
	$obj['lados_internos']=(isset($obj['lados_internos']))?$obj['lados_internos']:1;
	$obj['id']=(isset($obj['id']))?$obj['id']:'';
	
	$html ="";
	if($obj['lados_externos']==1){
		$html.="<div class='div_menu_izq'></div>\n";
		$html.="<div class='div_menu_der'></div>\n";
	}
    $html.="<ul ".( ($obj['id']!="")?"id='".$obj['id']."' ":'').">";		
	$e=0;
	foreach($MENU as $i=>$men){ 

		if($e==0){
			if($obj['lados_flotantes']==1){
				$html.=($men['lado']=="derecha")?"<div class='div_menu_float_der' style='float:right;'></div>\n":"<div class='div_menu_float_izq'></div>\n";
			}	
		}		
	
		$iii=$i+1;

		$class=$men['ultimo']." ".$men['class'];
		$html.= "<li ".( ($obj['id']!="")?"id='".$obj['id']."_".$iii."' ":'').( ($men['lado']=="derecha")?"style='float:right'":'')." ".((trim($class)=='')?"":"class='".trim($class)."'")." >";
		if($obj['lados_internos']==1){
			$html.= "<div class='menu_izq'></div>";
			$html.= "<div class='menu_der'></div>";
		}
		$html.= "<div class='menu_borde'></div>";
		$html.=($obj['id']=='menu_main')?'<h2>':'';
		$labelA=explode("|",$men['label']);
		foreach($labelA as $ii=>$label){
			if( $men['disabled']=='1' ){
				$html.= "<a title='".$label."' class='line_".$ii."' href='#' onclick=\"javacript:return false;\">".$label."</a>";
			} elseif( $men['onclick']!='' ){
				$ShowTab=($obj['id']!='')?"ShowTab('".$obj['id']."','".$iii."');":"";
				$html.= "<a title='".$label."' class='line_".$ii."' href='#' rel='nofollow' onclick=\"javacript:".$ShowTab.$men['onclick']."return false;\">".$label."</a>";
			} else {
				$html.= "<a title='".$label."' class='line_".$ii."' href='".$men['url']."'>".$label."</a>";
			}
		}
		$html.=($obj['id']=='menu_main')?'</h2>':'';		
		$html.= "</li>";
		
		if($e==sizeof($MENU)-1){
			if($obj['lados_flotantes']==1){
				$html.=($men['lado']=="derecha")?"<div class='div_menu_float_izq' style='float:right;'></div>\n":"<div class='div_menu_float_der'></div>\n";			
			}
		}	
				
		$e++;
	} 
        
    $html.="</ul>";
	echo $html;    
}

function web_render_links($MENU){
	$html="";
	foreach($MENU as $i=>$men){ 
		if($men['url']){
			$html.="<a href='".$men['url']."' title='".$men['label']."'  class='".$men['class'].( ($i==sizeof($MENU)-1)?" ultimo ":"" )."' >".$men['label']."</a>";
		}
    } 
	echo $html;
}


function web_render_general_config(){
global $HEAD;
//$HEAD['INCLUDES']['style'][]='#div_allcontent { width:1036px; }';
//$HEAD['INCLUDES']['style'][]='html, body {background:#E5E5E5 url('.THEME_PATH.'img/common_bg.jpg) repeat-x 0 0;}';
}

function web_render_esquinas($numFrom=1,$numTo=2,$label=""){
$html="";
$esquina[1]='<div class="arriba_izquierda'.$label.'"></div>';
$esquina[2]='<div class="arriba_derecha'.$label.'"></div>';
$esquina[3]='<div class="abajo_izquierda'.$label.'"></div>';
$esquina[4]='<div class="abajo_derecha'.$label.'"></div>';

for($i=$numFrom;$i<=$numTo;$i++){
$html.=$esquina[$i];
}
echo $html;
}

function web_render_item_borde($class=NULL,$numFrom=1,$numTo=4){
$html="";
$esquina[1]='<div class="'.$class.' bors bor-1"><b>&bull;</b></div>';
$esquina[2]='<div class="'.$class.' bors bor-2"><b>&bull;</b></div>';
$esquina[3]='<div class="'.$class.' bors bor-3"><b>&bull;</b></div>';
$esquina[4]='<div class="'.$class.' bors bor-4"><b>&bull;</b></div>';

for($i=$numFrom;$i<=$numTo;$i++){
$html.=$esquina[$i];
}
echo $html;


}

/*
function web_render_barras($barras="",$class="",$label=""){
$html="";
$esquina['top']='<span class="barra_arriba'.$label.'"></span>';
$esquina['bottom']='<span class="barra_abajo'.$label.'"></span>';

if($barras=='top'){$html.=$esquina['top'];}
elseif($barras=='bottom'){$html.=$esquina['bottom'];}
elseif($barras=='both'){$html.=$esquina['top'].$esquina['bottom'];}

if($class!=''){echo"<span class='$class'>";}
echo $html;
if($class!=''){echo"</span>";}
}
*/

function web_follow_url($get){
global $_GET;
$pat=array();
foreach($_GET as $var=>$val){
if(in_array($var,$get)){
$pat[]="&".$var."=".$val;
}
}
return implode($pat);
}



function web_render_form($FORM){
	global $HEAD;	
	if($FORM['legend']!=''){ echo "<legend class='camps'>".$FORM['legend']."</legend>"; }
    foreach($FORM['campos'] as $field){ 
    if($field['tipo']!='input_hidden' and $field['tipo']!='textarea_hidden'){ 
        echo '<div class="camps" id="p_'.$FORM['nombre'].'_'.$field['campo'][0].'">'; ?>
        <?php if($field['label']!=''){ ?>
        <label class="name" for="<?php echo $FORM['nombre']."_".$field['campo'][0];?>"><?php echo $field['label'];?>
        <b><?php echo (!(strpos($field['validacion'],"required")===false))?"*":""; ?></b>
        </label>
        <?php } ?>
    <?php } ?>
    <?php switch($field['tipo']){ 
	case "constante": 
	break;
    case "input_hidden": 
	foreach($field['campo'] as $ii=>$camp){ ?>
    <input type="hidden" name="<?php echo $camp;?>" id="<?php echo $FORM['nombre']."_".$camp;?>" value="<?php echo $field['value'][$ii];?>" />
    <?php } break; 					
    case "input_radio": ?>
    <input type="hidden" name="<?php echo $field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" value="<?php echo $field['value'][0];?>" />
    <?php foreach($field['opciones'] as $opcccion=>$opcion_select){ ?>
    <input type="radio"
    id="<?php echo $FORM['nombre']."_".$field['campo'][0]."_".$opcccion?>"
    <?php echo ($opcccion==$field['value'][0])?'checked="checked"':'';?>
    name="temp_<?php echo $FORM['nombre']."_".$field['campo'][0];?>"
    value="<?php echo $opcccion;?>"
    class="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" onclick="if(this.checked){ $('<?php echo $FORM['nombre']."_".$field['campo'][0];?>').value=this.value; } "  />
    <label for="<?php echo $FORM['nombre']."_".$field['campo'][0]."_".$opcccion?>"><?php echo $opcion_select;?></label>
    <?php } ?>    
    <?php break;     
	case "input_fecha": 
	$anio1=date("Y"); $anio0=$anio1-90;	$meses=array('1'=>'enero','febrero','marzo','abril','mayo','junio','julio','agosto','setiembre','octubre','noviembre','diciembre');	?>
    <span class="control" style="position:relative;">
        <input type="text" name="<?php echo $field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" style="position:absolute; right:0px; visibility:hidden;" class="validate['required']" />
        <select class="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0]."_d";?>">
        <option value="">día</option>
        <?php for($i=1;$i<=31;$i++){ ?><option value="<?php printf("%02d",$i);?>"><?php echo $i;?></option><?php } ?></select>
        <select class="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0]."_m";?>">
        <option value="">mes</option>
        <?php for($i=1;$i<=12;$i++){ ?><option value="<?php printf("%02d",$i);?>"><?php echo ucfirst($meses[$i]);?></option><?php } ?></select>
        <select class="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0]."_a";?>">
        <option value="">año</option>	
        <?php for($i=$anio1;$i>=$anio0;$i--){ ?><option value="<?php echo $i;?>"><?php echo $i;?></option><?php } ?>
        </select>        
        <script>
        
		$$('.<?php echo $FORM['nombre']."_".$field['campo'][0];?>').addEvent('change',function(){
        if($('<?php echo $FORM['nombre']."_".$field['campo'][0]."_a";?>').value!=''&&$('<?php echo $FORM['nombre']."_".$field['campo'][0]."_m";?>').value!=''&&$('<?php echo $FORM['nombre']."_".$field['campo'][0]."_d";?>').value!=''){$('<?php echo $FORM['nombre']."_".$field['campo'][0];?>').value=$('<?php echo $FORM['nombre']."_".$field['campo'][0]."_a";?>').value+'-'+$('<?php echo $FORM['nombre']."_".$field['campo'][0]."_m";?>').value+'-'+$('<?php echo $FORM['nombre']."_".$field['campo'][0]."_d";?>').value+' 00:00:00';}});
		<?php if($field['value'][0]!=''){ ?>
		$('<?php echo $FORM['nombre']."_".$field['campo'][0];?>').value='<?php echo $field['value'][0];?>';
		$('<?php echo $FORM['nombre']."_".$field['campo'][0]."_a";?>').value='<?php echo substr($field['value'][0],0,4);?>';
		$('<?php echo $FORM['nombre']."_".$field['campo'][0]."_m";?>').value='<?php echo substr($field['value'][0],5,2);?>';
		$('<?php echo $FORM['nombre']."_".$field['campo'][0]."_d";?>').value='<?php echo substr($field['value'][0],8,2);?>';
		<?php } ?>
        </script>
    </span>
    <?php break;
    case "foto": 
	foreach($field['campo'] as $ii=>$camp){ ?>
    <input type="hidden" style="width:100px;"  name="<?php echo $camp;?>" id="<?php echo $FORM['nombre']."_".$camp;?>" class="foto_control caja <?php echo $field['validacion'];?>" value="<?php echo $field['value'][$ii];?>"  />     
    <?php 
	} 
	?>
    <div id="content_<?php echo $FORM['nombre']."_".$field['campo'][0];?>_all" class="control" style="float:left; width:705px; "></div>
    
    <script type="text/javascript">	
	
	window.addEvent('domready', function(){
	
	$$('.foto_control').each(function(el, index){
		if(el.value.trim()!=''){
				web_render_control_foto({
									'render'		:'content_<?php echo $FORM['nombre']."_".$field['campo'][0];?>_all',
									'class_input'	:'foto_control'
									});
		}
	});
	
	web_render_control_foto({
						'render'		:'content_<?php echo $FORM['nombre']."_".$field['campo'][0];?>_all',
						'class_input'	:'foto_control'
						});		
																										
	});
	
	</script>
    <?php break; 
    case "input_text": ?>
    <input type="text" name="<?php echo $field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" class="caja <?php echo $field['validacion'];?>" value="<?php echo $field['value'][0];?>" />
    <?php break; 
    case "input_combo": ?>
    <select name="<?php echo $field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" class="caja <?php echo $field['validacion'];?>" value="<?php echo $field['value'][0];?>" />
    <option value=""></option>
    <?php foreach($field['opciones'] as $i=>$x){ ?><option <?php echo ($i==$field['value'][0])?"selected='selected'":""; ?> value="<?php echo $i;?>"><?php echo $x;?></option><?php } ?>
    </select>
    <?php break; 
    case "input_combo_rango": ?>
    <select name="<?php echo $field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" class="caja <?php echo $field['validacion'];?>" value="<?php echo $field['value'][0];?>" />
    <option value=""></option>
    <?php 
	if($field['from']<$field['to']){
	for($i=$field['from'];$i<=$field['to'];$i++){ ?><option <?php echo ($i==$field['value'][0])?"selected='selected'":""; ?> value="<?php echo $i;?>"><?php echo $i;?></option><?php }
	} else {
	for($i=$field['from'];$i>=$field['to'];$i--){ ?><option <?php echo ($i==$field['value'][0])?"selected='selected'":""; ?> value="<?php echo $i;?>"><?php echo $i;?></option><?php }	
	}
	?>
    </select>
    <?php break; 		    
	case "input_precio": ?>
	<span>
    <select id="<?php echo $FORM['nombre'];?>_<?php echo $field['campo'][0];?>" name="<?php echo $field['campo'][0];?>">
        <option value="1">Nuevo Sol</option>
        <option value="2">Dólar Estadounidense</option>                
    </select>
    </span>
    <span>
    <input type="text" class="caja validate['required','number']" id="<?php echo $FORM['nombre'];?>_<?php echo $field['campo'][1];?>" name="<?php echo $field['campo'][1];?>"/> 
    </span>
    <script>
	<?php foreach($field['campo'] as $ii=>$camp){ 
	if($field['value'][$ii]!=''){
	?>	$('<?php echo $FORM['nombre']."_".$camp;?>').value='<?php echo $field['value'][$ii];?>'; <?php } 
	} 
	?>	
	</script>
    <?php break; 
    case "input_password": ?>
    <input type="password" name="<?php echo $field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" class="caja <?php echo $field['validacion'];?>" value="<?php echo $field['value'][0];?>" />
    <?php break; 						
    case "input_check": ?>
    <input type="checkbox" name="<?php echo $field['campo'][0];?>" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" class="<?php echo $field['validacion'];?>" value="<?php echo $field['value'][0];?>" />
    <?php break; 						
    case "textarea": ?>
    <textarea name="<?php echo $field['campo'][0];?>" cols="30" rows="7" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" class="caja <?php echo $field['validacion'];?>" ><?php echo $field['value'][0];?></textarea>
    <?php break;
    case "textarea_hidden": ?>
    <textarea name="<?php echo $field['campo'][0];?>" style="display:none;" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" class="caja <?php echo $field['validacion'];?>" ><?php echo $field['value'][0];?></textarea>
    <?php break;	
    case "html": 
	?>
    <textarea title="html" name="<?php echo $field['campo'][0];?>" cols="30" rows="7" id="<?php echo $FORM['nombre']."_".$field['campo'][0];?>" class="caja <?php echo $field['validacion'];?>" ><?php echo $field['value'][0];?></textarea>
    <script>
	var MOOEDITABLE;
	window.addEvent('domready', function(){
		$('<?php echo $FORM['nombre']."_".$field['campo'][0];?>').setStyles({'height':'200px'});
		MOOEDITABLE = $('<?php echo $FORM['nombre']."_".$field['campo'][0];?>').mooEditable({
			actions: 'bold italic underline | formatBlock justifyleft justifyright justifycenter justifyfull | insertunorderedlist insertorderedlist indent outdent | undo redo | toggleview',
			//externalCSS: 'css/Editable.css',
			baseCSS: 'html{ height: 100%; cursor: text; } body{ font-family: arial; font-size:12px; }'
		});
	});    
    </script>
    <?php break;	
	default:?>
    <span id="<?php echo $field['control'];?>_inner" class="control"></span>
    <script>
	var <?php echo $field['control'];?>=$('<?php echo $field['control'];?>');
	$('<?php echo $field['control'];?>').erase();
	<?php echo $field['control'];?>.inject($('<?php echo $field['control'];?>_inner'));
	<?php foreach($field['campo'] as $ii=>$camp){ 
	if($field['value'][$ii]!=''){
	?>	$('<?php echo $FORM['nombre']."_".$camp;?>').value='<?php echo $field['value'][$ii];?>'; <?php } 
	} 
	?>	
	$('<?php echo $field['control'];?>').style.display='block';
	</script>
	<?php break;
    } 
	if($field['after']!=''){ echo "<small>".$field['after']."</small>"; }
    if($field['tipo']!='input_hidden' and $field['tipo']!='textarea_hidden'){ echo "</div>"; }
    ?>
    
    <?php 
    } 
	?>
    <div class="camps submit" id="p_<?php echo $FORM['nombre'].'_submit';?>">
    <label class='name'>&nbsp;</label>
    <input id="<?php echo $FORM['nombre'];?>_submit"  <?php echo $FORM['submit'];?> />
	<?php  if($FORM['submiting']!=''){ ?><img id="<?php echo $FORM['nombre'];?>_submiting" <?php echo $FORM['submiting'];?> style="display:none;" /><?php } ?>
    <?php  echo $FORM['after_submit']; ?>
    <!--<input type="reset" value="Cancelar"  />-->
    </div>
    <?php echo ($FORM['pie']=='')?'':"<div class='camps pie small' id='p_".$FORM['nombre']."_pie'><label class='name'>&nbsp;</label>
<span class='small'>".$FORM['pie']."</span></div>";?>  	
    
    <?php
	
}    

/*
			$FORM['complete']="
			var json=JSON.decode(ee,true);
			new Element('div', {
				'class': 'mensaje mensaje_'+json.t,
				'html': json.m,
				'id': 'mensaje_'+json.n										
			}).inject($(json.n+'_form_body'), 'before');
			$0(json.n+'_form_body');
			setTimeout('$(\'mensaje_'+json.n+'\').destroy();$1(\''+json.n+'_form_body\');',5000);
			";
*/
							
function web_render_form_javascript($FORM){
?>
            <script type="text/javascript">
                window.addEvent('domready', function(){
                    $$('.autoinput').each(function(ee) { 
                        ee.title=ee.value;
                        ee.addEvent('blur',function(event){ if(ee.value=='') ee.value=ee.title; });
                        ee.addEvent('focus',function(event){ if(ee.value==ee.title) ee.value=''; });	
                    });						
                    $('formulario_<?php echo $FORM['nombre'];?>').addEvent('submit', function(event){
                        $$('#formulario_<?php echo $FORM['nombre'];?> .autoinput').each(function(ee) { 
                            if(ee.title==ee.value){ ee.value=''; }
                        });
                    });
					$('formulario_<?php echo $FORM['nombre'];?>').addEvent('submit', function(event){
						$$('#formulario_<?php echo $FORM['nombre'];?> textarea').each(function(el){
						if (el.title =='html'){	el.value=MOOEDITABLE.getContent(); }
						});						
                    });	
					var submit_temp_<?php echo $FORM['nombre'];?>;			
                    new FormCheck('formulario_<?php echo $FORM['nombre'];?>',{
                        onSubmit:function() { 
						}       
                        <?php if($FORM['ajax']==1){ ?>
                        ,submitByAjax:true
                        ,onAjaxRequest:function() { 
                            $('<?php echo $FORM['nombre'];?>_submit').value="Enviando...";
							submit_temp_<?php echo $FORM['nombre'];?>=$('<?php echo $FORM['nombre'];?>_submit').value;
                            $('<?php echo $FORM['nombre'];?>_submit').disabled=true; 
							<?php if($FORM['submiting']!=''){ ?>
                            $0('<?php echo $FORM['nombre'];?>_submit');
                            $1('<?php echo $FORM['nombre'];?>_submiting');
							<?php } ?>
                        }
                        ,onAjaxSuccess:function(ee) { 
                            $('formulario_<?php echo $FORM['nombre'];?>').reset();
                            $('<?php echo $FORM['nombre'];?>_submit').value=submit_temp_<?php echo $FORM['nombre'];?>;
                            $('<?php echo $FORM['nombre'];?>_submit').disabled=false; 
							<?php if($FORM['submiting']!=''){ ?>
                            $1('<?php echo $FORM['nombre'];?>_submit');
                            $0('<?php echo $FORM['nombre'];?>_submiting');
							<?php } ?>						
							<?php echo $FORM['complete']; ?>
                            
                        }					
                        <?php } ?>
						,display : {
							closeTipsButton : 1
						}

                    });
                });
            </script>  
 <?php           
}            

function web_load_lib_mooeditable(){
	global $HEAD;
	$HEAD['INCLUDES']['css'][]='css/MooEditable.css';
//	$HEAD['INCLUDES']['css'][]='MooEditable.Flash.css"';
	$HEAD['INCLUDES']['css'][]='css/MooEditable.Extras.css';
	$HEAD['INCLUDES']['js'][]='js/MooEditable.js';	
//	$HEAD['INCLUDES']['js'][]='js/MooEditable.Flash.js';	
	$HEAD['INCLUDES']['js'][]='js/MooEditable.UI.ButtonOverlay.js';	
	$HEAD['INCLUDES']['js'][]='js/MooEditable.UI.MenuList.js';	
	$HEAD['INCLUDES']['js'][]='js/MooEditable.Extras.js';	
	
}

function web_render_control_localizacion($FORM,$GEO){
?>
            <select  id="<?php echo $FORM['nombre'];?>_id_departamento" name="id_departamento" onchange="get_provincias('<?php echo $FORM['nombre'];?>',this.value);" class="validate['required']" >
            <option value="">Departamento</option>
            <?php foreach($GEO['departamentos'] as $departamento){ ?>
            <option <?php echo $departamento['selected'];?> value="<?php echo $departamento['id'];?>"><?php echo ucfirst($departamento['nombre']);?></option>
            <?php } ?>	
            </select>
                
            <select <?php echo (sizeof($GEO['provincias'])==0)?"disabled='disabled'":"";?> id="<?php echo $FORM['nombre'];?>_id_provincia" name="id_provincia" onchange="get_distritos('<?php echo $FORM['nombre'];?>',this.value);" class="validate['required']">
            <option value="">Provincia</option>
            <?php foreach($GEO['provincias'] as $provincia){ ?>
            <option <?php echo $provincia['selected'];?> value="<?php echo $provincia['id'];?>"><?php echo ucfirst($provincia['nombre']);?></option>
            <?php } ?>
            </select>
            
            <select <?php echo (sizeof($GEO['distritos'])==0)?"disabled='disabled'":"";?> id="<?php echo $FORM['nombre'];?>_id_distrito" name="id_distrito"  class="validate['required']" >
            <option value="">Distrito</option>
            <?php foreach($GEO['distritos'] as $distrito){ ?>
            <option <?php echo $distrito['selected'];?> value="<?php echo $distrito['id'];?>"><?php echo ucfirst($distrito['nombre']);?></option>
            <?php } ?>
            </select>
<?php
}   


function web_render_control_marca($FORM,$ITEMS){
?>
            <select  id="<?php echo $FORM['nombre'];?>_marca" name="marca" onchange="get_modelos('<?php echo $FORM['nombre'];?>',this.value);" >
            <option value="">Elige Marca</option> 
            <?php foreach($ITEMS['marcas'] as $item){ ?>
            <option <?php echo $item['selected'];?> value="<?php echo $item['id'];?>"><?php echo ucfirst($item['nombre']);?></option>
            <?php } ?>	
            </select>
                
            <select <?php echo (sizeof($ITEMS['modelos'])==0)?"disabled='disabled'":"";?> id="<?php echo $FORM['nombre'];?>_modelo" name="modelo" >
            <option value="">Elige Modelo</option>
            <?php foreach($ITEMS['modelos'] as $item){ ?>
            <option <?php echo $item['selected'];?> value="<?php echo $item['id'];?>"><?php echo ucfirst($item['nombre']);?></option>
            <?php } ?>
            </select>
<?php
}            

function web_render_control_categoria($FORM,$ITEMS){
?>
            <select  id="<?php echo $FORM['nombre'];?>_id_grupo" name="id_grupo" onchange="get_subcategorias('<?php echo $FORM['nombre'];?>',this.value);" class="validate['required']">
            <option value="">Elige Categoría</option>
            <?php foreach($ITEMS['categorias'] as $item){ ?>
            <option <?php echo $item['selected'];?> value="<?php echo $item['id'];?>"><?php echo ucfirst($item['nombre']);?></option>
            <?php } ?>	
            </select>
                
            <select <?php echo (sizeof($ITEMS['subcategorias'])==0)?"disabled='disabled'":"";?> id="<?php echo $FORM['nombre'];?>_id_subgrupo" name="id_subgrupo"  class="validate['required']">
            <option value="">Elige Sub-categoría</option>
            <?php foreach($ITEMS['subcategorias'] as $item){ ?>
            <option <?php echo $item['selected'];?> value="<?php echo $item['id'];?>"><?php echo ucfirst($item['nombre']);?></option>
            <?php } ?>
            </select>
<?php
}   


 
function web_eliminar_imagenes($vistas,$tamanos){
		
		global $httpfiles, $DIRECTORIO_IMAGENES;
	
		global $ftp_files_host, $ftp_files_user, $ftp_files_pass, $ftp_files_root;
	
		$tamanos=$datos_tabla[$foto]['tamanos'];					
		
		$items2=array();
		
		$num_tams=sizeof(explode(",",$tamanos));
			
		foreach($vistas as $vista){
					
			$item['get_archivo']=str_replace("//","/",$ftp_files_root.str_replace("$httpfiles","",$vista));

			for($i=1;$i<=$num_tams;$i++){
				$item['num_tamanos'][]="_".$i.".";
			}
			$item['num_tamanos'][]=".";
			
			$items2[]=$item;		
									
		}//FOREACH		
		
					
		if(sizeof($items2)>0){
			
			$conn_id = ftp_connect($ftp_files_host);
			$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass);			
			
			foreach($items2 as $item){
			
				ftp_delete($conn_id,str_replace("_1.",".",$item['get_archivo']));
			
				foreach($item['num_tamanos'] as $tam){
				
					ftp_delete($conn_id,str_replace("_1.",$tam,$item['get_archivo']));
				
				}
				
			}			
			
			ftp_close($conn_id);			
		
		}

}         

function web_grabar_imagen($r_img,$opciones){

	if(trim($r_img)==''){
	
		return false;
	
	}
	
	$Ret['img']=$r_img;
	
	$PREFIJO=$opciones['prefijo'];
	$CARPETA=$opciones['carpeta'];
	$TAMANOS=$opciones['tamanos'];
//
	//echo "$c \n| $r_img \n| $tabla \n| $objeto \n| $id";
	// obtener la extensin del nombre de archivo enviado	
	global $httpfiles, $DIR_IMG_TEMP, $DIRECTORIO_IMAGENES;

	$root_dir=getcwd();

	chdir("../../panel/");

//	echo "|$httpfiles | $DIR_IMG_TEMP | $DIRECTORIO_IMAGENES";
	
	$images_temp="../".$DIRECTORIO_IMAGENES.$DIR_IMG_TEMP."/";
	
	$images_temp=str_replace("//","/",$images_temp);
	
//	echo "<pre>"; print_r($datos_tabla); echo "</pre>";
	
	$prefijo	= $PREFIJO;
	$Carpeta	= $DIRECTORIO_IMAGENES."/".$CARPETA;
	
	$Tamanos	= $TAMANOS;
	
	$r_img	=	str_replace("_preview.","_orig.",$r_img);

	$img_ext = substr($r_img,strpos($r_img,".")+1);

	// obtener el nombre del archivo antiguo
	$file_name 	= substr($r_img,strrpos($r_img, "/")+1);
	$file_dir	= str_replace($httpfiles,"",$r_img);
	$file_dir 	= str_replace($file_name,"",$file_dir);
	$file_temp = $images_temp.$file_name;
	// bajar la imagen a directorio local temporal images_temp/
//	echo "$r_img - $file_name - ";
	//echo "$r_img,$file_name,/$images_temp";
	//exit();
	ccl_download($r_img,$file_name,"/".$images_temp);
	//exit();
	
//	ccl_download($r_img, $file_temp);

	// sacar extension
	if(@imagecreatefromjpeg($file_temp))    $ext = "jpg";
	elseif(@imagecreatefromgif($file_temp)) $ext = "gif";
	elseif(@imagecreatefrompng($file_temp)) $ext = "png";
	
	$Ret['ext']=$ext;


	list($img_w, $img_h, $tipo, $atr) = getimagesize($file_temp);

	// subir por ftp a nuevo sitio
	$folder_dest = $Carpeta; // no agregar / al final  //CARGAR
	$timestamp=time();

	$file_dest = $prefijo."_".$timestamp."_".$img_w."x".$img_h.".".$ext;
	
	$TamanosArray=array();
	$TamanosArray=explode(",",$Tamanos);
	foreach($TamanosArray as $i=>$Tam){
	list($xxxx,$yyyy)=explode("x",$Tam);
	$i2=$i+1;
	$confirm['up_'.$i2] = ccl_img_uploadmini($images_temp.$file_name,$ext,$folder_dest,str_replace(".","_". ($i2) .".",$file_dest),$xxxx,$yyyy,true);
	}
	// mandar una copia del fichero original
	//$confirm['ori'] = ccl_upload_ftp($images_temp.$file_name, $folder_dest, $file_dest);
	
	@unlink($file_temp);

	ccl_delete_ftp($file_dir, $file_name);
	
	ccl_delete_ftp($file_dir, str_replace("_orig.","_preview.",$file_name));
	
	$imagen_save = $file_dest;
//	echo $imagen_save;
//	return $imagen_save;
	$Ret['file']=$imagen_save;
	
	$Ret['confirm']=$confirm;
	
	chdir(root_dir);
	
	return $Ret;
	
}

function web_render_swf($archivo,$target,$id,$wxh){

global $HEAD;
list($ww,$hh)=explode("x",$wxh);
$HEAD['INCLUDES']['script_defer'][]="swfobject.embedSWF(\"".$archivo."\", \"".$target."\", \"".$ww."\", \"".$hh."\", \"9.0.0\", \"expressInstall.swf\",
{},
{
wmode:'transparent',
quality:'high',
name:'".$id."',
id:'".$id."',
align:'middle',
allowScriptAccess:'sameDomain',
allowFullScreen:'false'
},
{
wmode:'transparent',
quality:'high',
name:'".$id."',
id:'".$id."',
align:'middle',
allowScriptAccess:'sameDomain',
allowFullScreen:'false'
});";

}

function web_render_swf_html($target){

echo "<div id='".$target."'><div id='".$target."_swf'></div></div>";

}

function web_render_swf_script($archivo,$target,$wxh){

global $HEAD;

$HEAD['INCLUDES']['js'][]='js/swfobject.js';

$id = $target."_swf";			
list($ww,$hh)=explode("x",$wxh);
$HEAD['INCLUDES']['script'][]="swfobject.embedSWF(\"".$archivo."\", \"".$target."_swf\", \"".$ww."\", \"".$hh."\", \"9.0.0\", \"expressInstall.swf\",
{},
{
wmode:'transparent',
quality:'high',
name:'".$id."',
id:'".$id."',
align:'middle',
allowScriptAccess:'sameDomain',
allowFullScreen:'false'
},
{
wmode:'transparent',
quality:'high',
name:'".$id."',
id:'".$id."',
align:'middle',
allowScriptAccess:'sameDomain',
allowFullScreen:'false'
});";

}

function web_render_slider_javascript($NOOB){
$uuu=array();
$num_items_bloque=sizeof($NOOB['items_bloques']);
for($t=1;$t<=$num_items_bloque;$t++){
$uuu[]=$t;
}
if($num_items_bloque>1){ 
?>
<script type="text/javascript">
	window.addEvent('domready',function(){
		//SAMPLE 2 (transition: Bounce.easeOut)
		var NS_<?php echo $NOOB['label'];?> = new noobSlide({
			box: $('contenedor_slider_<?php echo $NOOB['label'];?>_movil'),
			items: [<?php echo implode(",",$uuu); ?>],
			interval: <?php echo ($NOOB['interval'])?$NOOB['interval']:'7000';?>,
			autoPlay: <?php echo $NOOB['autoplay'];?>,
			size:<?php echo ($NOOB['mode']=='vertical')?$NOOB['height']:$NOOB['width'];?>,
			mode:'<?php echo $NOOB['mode'];?>'
			<?php if($NOOB['buttons']==1){ ?>
			,addButtons: {
				previous: $('contenedor_slider_<?php echo $NOOB['label'];?>_prev'),
				next: $('contenedor_slider_<?php echo $NOOB['label'];?>_next')
			}
			<?php } ?>
		});
		
	});	
</script>		
<?php
}
}

function web_render_slider_pie($NOOB){

	global $lang;
	$NOOB['prev']=(isset($NOOB['prev']))?$NOOB['prev']:"&laquo;".$lang['anterior'];
	$NOOB['next']=(isset($NOOB['next']))?$NOOB['next']:$lang['siguiente']."&raquo;";	
	if($NOOB['buttons']==1 and sizeof($NOOB['items_bloques'])>1 ){
	?><div class="bloque_pie">
            <a id="contenedor_slider_<?php echo $NOOB['label'];?>_prev" class="but_prev"><?php echo $NOOB['prev'];?></a>
            <a id="contenedor_slider_<?php echo $NOOB['label'];?>_next" class="but_next"><?php echo $NOOB['next'];?></a>      
    </div><?php 
	} 
	
}

function web_render_slider_preproceso($NOOB){
	
	global $HEAD;
	
	//$HEAD['INCLUDES']['js'][]='js/mootools-1.2.3.1-more.js';
	//$HEAD['INCLUDES']['js'][]='js/_class.noobSlide.packed.js';
		
	list($col,$fil)=explode("x",$NOOB['itemsporpagina']);
	$itemsporpginatotal=$col*$fil;
	$NOOB['width_bloque']=intval($NOOB['width']/$col);
	$NOOB['height_bloque']=intval($NOOB['height']/$fil);
			
	$NOOB['items_bloques']=array_chunk($NOOB['items'],$itemsporpginatotal);
	$NOOB['num_items']=sizeof($NOOB['items']);
	unset($NOOB['items']);	
	$HEAD['INCLUDES']['style'][]="
	#contenedor_slider_".$NOOB['label']."_fijo,#contenedor_slider_".$NOOB['label']."_movil div.slid {width: ".$NOOB['width']."px; height:".$NOOB['height']."px;}";
	$HEAD['INCLUDES']['style'][]="
	#contenedor_slider_".$NOOB['label']."_movil div.slid li { width:".$NOOB['width_bloque']."px; height:".$NOOB['height_bloque']."px;}";

	
	return $NOOB;

}

function web_render_slideshow_preproceso($SLISHOW){
	global $HEAD; global $KENBURNS;
 	list($SLISHOW['width'],$SLISHOW['height'])=explode('x',$SLISHOW['zoom']);
 	list($SLISHOW['thumb_width'],$SLISHOW['thumb_height'])=explode('x',$SLISHOW['thumb']);
	switch($SLISHOW['efecto']){
	case "1":
		$SLISHOW['class']="Slideshow";
		$HEAD['INCLUDES']['style'][]=".slideshow-images-visible { margin-left: 0; }.slideshow-images-prev { margin-left: 400px; }.slideshow-images-next { 	margin-left: -400px; }";
		$SLISHOW['transition']="'back:in:out'";
	break;
	case "2":
		$SLISHOW['class']="Slideshow";
		$SLISHOW['transition']="false";
	break;
	case "3":
		$KENBURNS=1;
		$SLISHOW['class']="Slideshow.KenBurns";
		$SLISHOW['transition']="false";
		
	break;
	case "4":
		
		if($SLISHOW['thumb_direccion']=='vertical'){
			$HEAD['INCLUDES']['style'][]="
			.slideshow-images { float:left; } 
			.slideshow-thumbnails { position:relative; float:left; height: ".$SLISHOW['height']."px; left: 0; top: 0; width: ".$SLISHOW['thumb_width']."px; }
			.slideshow-thumbnails ul { width:".$SLISHOW['thumb_width']."px; }";
		} elseif($SLISHOW['thumb_direccion']=='horizontal'){ 
			$HEAD['INCLUDES']['style'][]="
			.slideshow-thumbnails { position:relative; bottom:0px; height: ".$SLISHOW['thumb_height']."px;  width: ".$SLISHOW['width']."px; }
			.slideshow-thumbnails ul { width: ".$SLISHOW['width']."px;  }
			";		
		}		
		
		$SLISHOW['class']="Slideshow";
		$SLISHOW['transition']="false";
		$SLISHOW['thumbnails']="true";
	break;	
	}
		$SLISHOW['captions']=($SLISHOW['captions'])?$SLISHOW['captions']:"true";
		$SLISHOW['hrefs']=($SLISHOW['hrefs'])?$SLISHOW['hrefs']:"true";
	
	$HEAD['INCLUDES']['style'][]=".slideshow { width:100%;height:auto; }";
	return $SLISHOW;

}

function web_render_slideshow_proceso($SLIDE){

			?>
            <div id="div_<?php echo $SLIDE['label'];?>_slideshow">
                <div id="div_<?php echo $SLIDE['label'];?>_slideshow_content" class="slideshow">
                	<img src="<?php echo $SLIDE['listado']['0']['foto_zoom'];?>" />
                </div>    
            </div>
            
            <?php if(!empty($SLIDE)){ ?>
                
            <script type="text/javascript">
            //<![CDATA[
              window.addEvent('domready', function(){
                var data = {
                <?php foreach($SLIDE['listado'] as $ii=>$item_pic){ ?>
				  '<?php echo $item_pic['foto_zoom'];?>': { 
				  caption: '<?php echo $item_pic['caption'];?>'
				  ,href: '<?php echo $item_pic['href'];?>'
				  ,thumbnail: '<?php echo $item_pic['foto_thumb'];?>'
				  }				  
                  <?php echo ($ii==sizeof($SLIDE['listado'])-1)?"":","; ?> 
                <?php } ?>
                };
                var myShow = new <?php echo $SLIDE['class'];?>('div_<?php echo $SLIDE['label'];?>_slideshow_content', data, { 
                                                        controller: <?php echo $SLIDE['controller'];?> ,
                                                        width: <?php echo $SLIDE['width'];?> ,
                                                        height: <?php echo $SLIDE['height'];?>, 
                                                        hu: '', 
                                                        thumbnails: <?php echo $SLIDE['thumbnails'];?>,
                                                        duration: <?php echo $SLIDE['duration'];?>,
                                                        delay: <?php echo $SLIDE['delay'];?>,
                                                        overlap: <?php echo $SLIDE['overlap'];?>, 
                                                        resize: <?php echo $SLIDE['resize'];?>, 
                                                        transition: <?php echo $SLIDE['transition'];?>, 
                                                        paused: <?php echo $SLIDE['paused'];?>,
                                                        captions: <?php echo $SLIDE['captions'];?>,
                                                        hrefs: <?php echo $SLIDE['hrefs'];?>,
                                                        //replace: [/_4\./, '_1\.'], 
                                                        loader: {'animate': ['<?php echo THEME_PATH;?>/css/slideshow/loader-#.png', 12]}
                                                        });
              });
            //]]>
            </script>
            <?php } 
 
}




function web_render_footer($obj){
$html='';
if(sizeof($obj['info'])>0){ 
$html.="<div class='footer_info'>"; 
foreach($obj['info'] as $in=>$fo){
	 $html.="<div ". ( (is_numeric($in))?'':" class='".$in."' " ). ">".$fo."</div>"
	 ;} 
$html.="</div>"; }
if($obj['by']!=''){ $html.="<strong class='footer_by' title='Diseño y Desarrollo'>".$obj['by']."</strong>"; }
echo $html;
}


function re_procesar_menu($menu,$url){

	foreach($menu as $mm=>$men){
		foreach($men as $nn=>$ite){
			if($ite['url']==$url){
				$menu[$mm][$nn]['class']='selected';
			}	
		}
	}
	return $menu;
	
}



function get_this_include(){
	
	//return current(explode(".",end(explode("\\",end(get_included_files())))));	
}


function web_selector($SES,$id_class){
	echo "";
	//echo $id_class." ".$SES[$id_class]." ";
}

function web_render_edit_toolbar($SELS){

	global $_SESSION; global $SERVER;
	if($_SESSION['edicionweb']=='1' and $SERVER['LOCAL']=='1'){
	global $CLASSSELECTED;
	global $WEBBLOQUES;
	global $MASTERBLOCK2;
	global $MASTERCOFIG;
	global $PARAMETROS_EMAIL_MASTER;
	global $FLOTANTES;
	global $BLOQUES_FLOTANTES;
	global $CLASSPARAMETERS;
	global $HEAD;
	global $vars;
	$OPACITY='0.95';
	?>
    <style>
	
    .varr { float:left;margin:0px 1px 0px 0px;width:auto;height:17px;color:#FFF; position:relative; }
	.varro { position:relative; display:block; float:left; }
	.varro textarea  { top:-225px; }
	.varro .textarealabel  { top:-235px; }
	.varro .textarealabel { width:auto; height:auto; position:absolute; left:0px; display:none;text-transform:uppercase; padding:4px; padding-right:30px; z-index:5;  font-family:verdana;  background-color:#333333; font-size:8px;  }
	.varro .textarealabel strong { color:yellow; display:block; font-weight:normal;}
	.varro .textarealabel b { color:#F09F9F; display:block; font-weight:normal; }
	.varro:hover .textarealabel { display:block; }
	.varro textarea { background-color:#CDC5C5; width:700px; height:200px; position:absolute; display:none; z-index:4; padding-top:20px; padding-left:5px; font-family:Arial; border:3px solid #333333; font-size:12px;  }
	.varro:hover textarea { display:block; }
	.varr .elemen { letter-spacing:-1px; cursor:default; color:#F09F9F; text-decoration:none; float:left;}
	.varr .elemen:hover { color:#996600; }
	.varr select { font-weight:normal;font-size:10px;width:auto;margin:0 1px 0 1px;padding:0; background-color:#000; color:#FFF; border:0; float:left;}
	.tool { width:100%; position:fixed; padding:0;color:#000; opacity:<?php echo $OPACITY;?>; z-index:1; text-align:left; bottom:0px; right:0px; padding:1px 2px;  background-color:#333; border-top:1px ridge #999; height:auto !important; height:34px; min-height:34px; }
	.varr label, .varr .elemen { letter-spacing:-1px;width:auto;text-align:right; text-shadow: 1px 1px 0 #000000; text-transform:uppercase; font-size:9px; }
	.bloque_1 { position:relative; height:auto; padding-right:350px; clear:left;}
	.bloque_1 .varr label { color:yellow; }
	.bloque_tools { position:relative; height:auto; width:100%; background-color:#006600;   }
	.bloque_2 .varr label { color:#33CCCC; }
	.bloque_3 .varr label { color:#1FEF23; }
	.bloque_4 .varr label { color:#D34FF9; }	
	.bloque_5 .varr label { color:#D8EE63; }
	.bloque_5 .varr a { color:#FB0A32; text-transform:uppercase; margin-right:10px; font-weight:bold; }
	.class_tip_1 { color: #000;	width: auto; z-index: 13000; border:1px solid #000; }
	.class_tip_1 .tip {	 padding:0; }
	.class_tip_1 .tip .tip-title { font-weight: bold; font-size: 10px; margin: 0; color: #FFF; padding: 3px 8px; background: #000; text-align:left; text-transform:uppercase; }
	.class_tip_1 .tip .tip-text { padding:8px 8px 8px; font-size: 10px; background-color:#CCC; color:#000; text-align:left;  }
	.class_tip_1 .tip .tip-text b { font-weight:bold; color:#FF0000;}
	#procesando { background-color:#06C; color:#FFF; padding:5px 40px; position:absolute; top:-15px; right:0px; z-index:10; border:2px solid #036; font-weight:bold; }
	</style>    
    <div id="tool" class="tool" onmouseover="this.setStyles({'opacity':'1'});" onmouseout="this.setStyles({'opacity':'<?php echo $OPACITY;?>'});">    
    <span id="demas">    
    <?php 
	if($MASTERCOFIG['edicion_bloques']){ ?>
    <div class="bloque_5 bloque_tools">
    <?php
	foreach($WEBBLOQUES as $VAR=>$VAL){ 
		if($VAR!='web'){ ?>
			<li class="varr">
				<label><?php echo $VAR;?></label>
				<a href="#" rel="nofollow" onclick="javascript:guardar_borrar('<?php echo $VAR;?>');return false;" title="borrar">x</a>
			</li>
		<?php } 
		} 
	?>    
    </div>
    <?php } 
	?>    
    <div class="bloque_4 bloque_tools" style="clear:both;">
    <?php
	foreach($PARAMETROS_EMAIL_MASTER as $VAR=>$VAL){ ?>
        <li class="varr">
            <label><?php echo $VAR;?></label>
            <input type="checkbox" <?php echo ($VAL==1)?"checked":""; ?> onclick="guardar('formularios/formularios','PARAMETROS_EMAIL_MASTER','<?php echo $VAR;?>',this)" />
        </li>
    <?php } ?>    
    </div>
    <div class="bloque_3 bloque_tools">
    <?php
	foreach($MASTERCOFIG as $VAR=>$VAL){ ?>
        <li class="varr">
            <label><?php echo $VAR;?></label>
            <input type="checkbox" <?php echo ($VAL==1)?"checked":""; ?> onclick="guardar('master','MASTERCOFIG','<?php echo $VAR;?>',this)" />
        </li>
    <?php } ?>
    <?php if($MASTERCOFIG['editar_friendly_url']){ ?>
    <li class="varr" ><a href="#" rel="nofollow" onclick="reset_htaccess(); return false;" style="color:inherit;">reset htaccess</a></li>
    <?php } ?>
    </div>
    <div class="bloque_2 bloque_tools">
    <?php
	foreach($MASTERBLOCK2 as $VAR=>$VAL){ ?>
        <li class="varr">
            <label><?php echo $VAR;?></label>
            <input type="checkbox" <?php echo ($VAL==1)?"checked":""; ?> onclick="guardar('driver','MASTERBLOCK','<?php echo $VAR;?>',this)" />
        </li>
    <?php } ?>    
    </div>
    </span>
    <div class="bloque_1">        
    <div id='procesando' style="display:none;">procesando</div>
	<a href="#" style="position:absolute; right:1px; top:0px; display:; color:#FFF;" id="hidetool" onclick="hidetool(); return false;" rel="nofollow" title="Cerrar" >x</a>    
	<a href="#" style="color:#FFF; display:none;" id="showtool" onclick="showtool(); return false;" rel="nofollow" title="Abrir" >+</a>    
    <span id="selects">
	<a href="panel" style="position:absolute; right:8px; top:0px; padding-left:1px; padding-right:1px; color:#000; background-color:#fff;" rel="nofollow" title="Panel" >p</a>
	<a href="#" style="position:absolute; background-color:green; right:20px; top:0px; color:#FFF;padding:0 2px;" onclick="subircss(); return false;" title="Subir css" rel="nofollow" >c</a>     
	<?php if($MASTERCOFIG['editar_css']){ ?>
    <a href="#" style="position:absolute; background-color:#993300; right:66px; top:0px; color:#FFFFFF;" onclick="saveparams(); return false;" title="Save" rel="nofollow" >param</a> 
    <a href="#" style="position:absolute; background-color:#FF0000; right:33px; top:0px; color:#FFFFFF;" onclick="saveclass(); return false;" title="Save" rel="nofollow" >class</a> 
    <?php } ?>
    <a href="#" style="position:absolute; background-color:yellow; right:100px; top:0px; color:#000;padding:0 2px;" onclick="updateupdate(); return false;" title="Save" rel="nofollow" >a</a> 
    
    
    <!--
    <a href="#" style="position:absolute; background-color:red; right:105px; top:0px; color:#FFF;padding:0 2px;" onclick="updateupdate(); return false;" title="Save" rel="nofollow" >ci</a>-->
        
<span style="position:absolute; background-color:blue; right:0px; top:-17px; color:#FFFFFF;" title="$_GET" rel="<?php foreach($_GET as $GG=>$EE){ echo "<b>".$GG."</b> : ".$EE."<br>"; } ?>" class="thisisatooltip">_get</span>  

<span style="position:absolute; background-color:blue; right:25px; top:-17px; color:#FFFFFF;" title="$_SERVER" rel="<?php foreach($_SERVER as $GG=>$EE){ echo "<b>".$GG."</b> : ".$EE."<br>"; } ?>" class="thisisatooltip">_ser</span>  

<span style="position:absolute; background-color:blue; right:50px; top:-17px; color:#FFFFFF;" title="$SERVER" rel="<?php foreach($SERVER as $GG=>$EE){ echo "<b>".$GG."</b> : ".$EE."<br>"; } ?>" class="thisisatooltip">ser</span>  

<span style="position:absolute; background-color:blue; right:69px; top:-17px; color:#FFFFFF;" title="$_SESSION" rel="<?php foreach($_SESSION as $GG=>$EE){ echo "<b>".$GG."</b> : ".$EE."<br>"; } ?>" class="thisisatooltip">_ses</span>

<span style="position:absolute; background-color:black; right:0px; top:-32px; color:#FFF;" ><?php echo $HEAD['INCLUDE']['version'];?></span>     
    <script>
	var myTips = new Tips('.thisisatooltip',{fixed:true,'className':'class_tip_1'});	
	</script>
    
	<?php 
	
	if($MASTERCOFIG['editar_css']){
	
	foreach($SELS as $SS0=>$SEL0){
			
		echo "<div class='varr' style='display:". ( ($SS0=='web')?'':'none' ) .";' id='".$SS0."_div' ";
		echo " onmouseout=\"outselected();\" onmouseover=\"overselected('".$SS0."');\" ";
		echo ">";
		echo "<a class='elemen'>".$SS0."</a>";		
		foreach($SEL0 as $SS=>$SEL){
			echo "<li class='varro' >";
			echo "<div class='textarealabel'  id='TXT_".$SS."'><b>".$SS0."</b> <strong>".$SEL['tipo']."</strong></div>";		
			list($aa3,$bb3)=explode("-",$SS);
			echo "<textarea id='PARAMS_".$SS."' >". ( parametros_decode($CLASSPARAMETERS[$SS],$bb3) ) ."</textarea>";		
			echo "<label ";
			//echo " onclick=\"clicktextarea('PARAMS_".$SS."','TXT_".$SS."');\" ";
			echo " for='".$SS."'
			><sup style='vertical-align:top;margin-left:3px;'>".$SEL['tipo']."</sup></label>";
			echo "</li>";
				
			foreach($SEL['options'] as $SE){
				$tren[]=$SE['option'];
			}
			$tren_opciones=implode("|",$tren);
			unset($tren);
				$CCPP="name=".$SS."&".str_replace("#","",$CLASSPARAMETERS[$SS]);
				echo "<select 
				id='".$SS."'
				onchange=\"putclass('".$SEL['path']."','". $tren_opciones ."',this.value,'".$SS."','".$CCPP."')\"
				onkeyup=\"putclass('".$SEL['path']."','". $tren_opciones ."',this.value,'".$SS."','".$CCPP."')\"
				style=\"".(($SS0=='web')?'visibility:hidden;width:2px;':'')."\"
				>";
				foreach($SEL['options'] as $SE){
					$exp=explode("_",$SE['option']);$opcion=$exp[sizeof($exp)-1];
					echo "<option value='".$SE['option']."' ". ( ($SE['selected']=='1')?'selected':'' ) ." >".$opcion."</option>";
				}
				echo "</select>";
			$ttt[]="'".$SS."'".":\$('".$SS."').value";
			$tttp[]="'".$SS."'".":\$v('PARAMS_".$SS."').replace(/#/g,\"%23\")";
		}	
		$tttt[]="$$('.id_".$SS0."').each(function(element){ $1('".$SS0."_div'); });\n";
		echo "</div>";
	
	}
	
	}

?>
	</span>
   
    
	</div>
    </div>
    
	<script type="application/javascript">
	
	function getid(ee){ return document.getElementById(ee); }
	function $11(a){ getid(a).style.display=''; }
	function $00(a){ getid(a).style.display='none'; }
	
	function guardar(file,vr,key,id){
		$11('procesando');		
		var myRequest = new Request({method: 'post',url: 'web/modulos/lib/saveclass.php',onSuccess:function(e){ location.reload(); }});
		myRequest.send('file='+file+'&var='+vr+'&'+key+'='+( (id.checked)?'1':'0' ) );			
	}
	
	function guardar_borrar(key){
		$11('procesando');		
		var myRequest = new Request({method: 'post',url: 'web/modulos/lib/saveclass.php',onSuccess:function(e){ location.reload(); }});
		myRequest.send('borrar=WEBBLOQUES&key='+key );			
	}
		
	function hidetool(){
		getid('tool').style.width='8px';
		getid('hidetool').style.display='none';
		getid('showtool').style.display='';
		getid('selects').style.display='none';
		getid('demas').style.display='none';
/*		$('tool').setStyles({'width':'8px'});
		$('hidetool').setStyles({'display':'none'});
		$('showtool').setStyles({'display':''});
		$('selects').setStyles({'display':'none'});
		$('demas').setStyles({'display':'none'});
*/		
	}
	
	function showtool(){
		getid('tool').style.width='100%';
		getid('hidetool').style.display='';
		getid('showtool').style.display='none';
		getid('selects').style.display='';
		getid('demas').style.display='';				
/*		$('tool').setStyles({'width':'100%'});
		$('hidetool').setStyles({'display':''});
		$('showtool').setStyles({'display':'none'});
		$('selects').setStyles({'display':''});
		$('demas').setStyles({'display':''});
*/
	}
	function reset_htaccess(){
		$11('procesando');		
		var myRequest = new Request({method: 'post',url: 'web/modulos/lib/saveclass.php'});
		myRequest.send('reset=htaccess');
	}	
	function saveclass(){
		$11('procesando');		
		new Request({
				url: 'web/modulos/lib/saveclass.php',
				onSuccess:function(ee){
					location.reload();
					//new Asset.css('<?php echo $SERVER['BASE'].THEME_PATH;?>lib/css.css?r='+$random(0, 1000), { } );	
				}			
			}).send({
			method: 'post',
			data: { 'file':'css','var':'CLASSSELECTED',<?php echo implode(",",$ttt); ?> }
		});		
	
	}
	
	function saveparams(){
		$11('procesando');
		new Request({
				url: 'web/modulos/lib/saveclass.php',
				onSuccess:function(ee){ 
					location.reload();
				}			
			}).send({
			method: 'post',
			data: { 'file':'css','var':'CLASSPARAMETERS',<?php echo implode(",",$tttp); ?> }
		});	
	
	}
		
	function updateupdate(){
		$11('procesando');
		var myRequest = new Request({method:'get',url:'panel/maquina.php',onSuccess:function(ee){location.reload();}});
		myRequest.send('accion=updatecode&reload=no');		
	}
	
	function subircss(){
		$11('procesando');
		var myRequest = new Request({method:'get',url:'panel/maquina.php',onSuccess:function(ee){location.reload();}});
		myRequest.send('accion=alllistado&files2=<?php echo $vars['INTERNO']['CARPETA_PROYECTO'];?>/web/templates/default/lib/css.css,<?php echo $vars['INTERNO']['CARPETA_PROYECTO'];?>/web/modulos/common.php');		
	}	
		
	function overselected(id_class){
		$$('.id_'+id_class).each(function(element) {
			Element('div', {
				'class': 'ayudaselect',
				'styles': {
					'position': 'absolute',
					'width': '24px',
					'height': '24px',
					'top': '-1px',
					'right': '-5px',
					'z-index': '100',
					'background': 'url(panel/img/Arrow3.png) no-repeat 0px 0px'
				}
			}).inject(element);		
		})
	}

	
	function clicktextarea(a,b){
		if($(a).style.display=='none'){
		$(a).setStyles({'display':'block'}); $(b).setStyles({'display':'block'});
		}else{
		$(a).setStyles({'display':'none'}); $(b).setStyles({'display':'none'});
		}
	}	
	
		
	function outselected(){
		$$('.ayudaselect').each(function(element) {
			element.dispose();	
		})	
	}
	var ran = $random(0, 1000);		
	function putclass(path,tren,dis,id_class,params){
		if($('css_'+id_class)){ $('css_'+id_class).destroy(); }
		new Asset.css(path+'/'+dis+'/css.css?'+params+'&r='+ran, { id:'css_'+id_class } );	
		var ddis = new Array();
		$$('.'+id_class).each(function(element) {
			var trena = new Array();
			trena = tren.split("|");
			for(var i=0; i<trena.length;i++){
				$(element).removeClass(trena[i]);
			}
			ddis = dis.split("|");			
			$(element).addClass(ddis[0]);		
		})
	}
	
	window.addEvent('domready',function(){	
		$('div_contenedor').setStyles({'margin-bottom':'50px'});
		<?php echo implode("",$tttt); ?>	
		<?php 
		if($MASTERCOFIG['editar_flotantes']==1){
		foreach($BLOQUES_FLOTANTES as $ckass=>$ma){?>	
        $$('.<?php echo $ckass;?>').each(function(el) { 
		el.removeProperty('href');
		new Drag(el,{
		'onComplete':function(el){ 
			new Request({url: 'web/modulos/lib/saveclass.php'}).send({method: 'post',data: { 'file':'css','var':'FLOTANTES','<?php echo $ckass; ?>':"top:"+el.getStyle('top')+";left:"+el.getStyle('left')+";" }});

		}
		});});
		<?php } 
		}
		?>	
	});
	
	</script>
    <?php
	}
	
}


function web_render_get_css($objs,$CLASSSELECTED){
	global $SERVER;
	global $HEAD;
	global $SELECTORS;
	global $SELECTED;
	global $vars;
	global $LIBRARIES;
	global $WEBBLOQUES;
	global $CLASSSELECTED;
	global $CLASSPARAMETERS;
	global $MASTERCOFIG;
	list($local,$dos)=explode($vars['INTERNO']['CARPETA_PROYECTO'],$SERVER['BASE']);

	$Ruta2 = $local.'/panel/csslib/';
	$Ruta3 = "../../../panel/csslib/";

	if($_SESSION['edicionweb']=='1' and $SERVER['LOCAL']=='1' and $MASTERCOFIG['editar_css']=='1'){

		foreach($objs as $key=>$obj){
			
			$objA=array();
			$objA=explode(",",$obj);
			
			foreach($objA as $ob){
			
				$obj2['id_class']=$key."-".$ob;
				$obj2['carpeta']=$ob;
				$obj2['selected']=$CLASSSELECTED[$obj2['id_class']];
				$iidd=$obj2['id_class'];
				$carpeta=$obj2['carpeta'];
			
				
				$directorio=$Ruta3.$carpeta;
				if(is_dir($directorio)){
					$directorio_s = dir($directorio);
					while($fichero=$directorio_s->read()) {
						$archivo=$directorio."/".$fichero;
						if($fichero!='.' and $fichero!='..' and is_dir($archivo) ){
							$arra2[]=$fichero;
						}
					}
					$directorio_s->close();
				}

				
				foreach($arra2 as $arr){
					//echo "../../".THEME_PATH.'css/'.$carpeta."/".$arr.'/css.css'; echo "<br>";
					if(file_exists($Ruta3.$carpeta."/".$arr.'/css.css')){
						//$it['path']='css/'.$carpeta."/".$arr.'/css.css';
						$it['option']=$arr;
						if($arr==$obj2['selected']){
							$it['selected']=1;
						}
						$SELECTORS[$key][$iidd]['tipo']=$LIBRARIES[$ob]['name'];
						$SELECTORS[$key][$iidd]['path']=$Ruta2.$carpeta;
						$SELECTORS[$key][$iidd]['options'][]=$it;
						unset($it);
					}
				}
				
				unset($arra2);

			}
			

		}

		list($local,$dos)=explode($vars['INTERNO']['CARPETA_PROYECTO'],$SERVER['BASE']);
		/*
		$Url_panel_lib=$vars['LOCAL']['url_publica']."/web/templates/".THEME_PATH."/css/";
		$Path_panel_lib="../templates/".THEME_PATH."/css/lib/";	
		*/
		$Url_panel_lib=$local."/panel/csslib/";
		$Path_panel_lib="../../../panel/csslib/";	
	
		foreach($WEBBLOQUES as $key=>$obj){
	
			$objA=array();
			$objA=explode(",",$obj);
	
			foreach($objA as $ob){
	
				$obj2['id_class']=$key."-".$ob;
				$obj2['carpeta']=$ob;
				$obj2['selected']=$CLASSSELECTED[$obj2['id_class']];
				$iidd=$obj2['id_class'];
				$carpeta=$obj2['carpeta'];
	
				$ccssss[$obj2['id_class']."|".$obj2['carpeta']."/".$CLASSSELECTED[$obj2['id_class']]]=$obj2['carpeta']."/".$CLASSSELECTED[$obj2['id_class']];
	
			}
			
		}	

		$HEAD['INCLUDES']['css'][]='css/css.css';

		$HEAD['INCLUDES']['css'][]='css/css_particular.css';
		
		$HEAD['INCLUDES']['css'][]='lib/css_temp.css';
		
		foreach($ccssss as $Nam=>$cs){
			
			list($name,$ex)=explode("|",$Nam);
			$uurrll=$Url_panel_lib.$cs."/css.css?name=".$name."&".str_replace("#","",$CLASSPARAMETERS[$name]);
	/* 		echo $uurrll."\n";
			echo $cs."\n\n";	 	*/
			$HEAD['INCLUDES']['cssabs']['css_'.$name]=$uurrll;
		
		}
	

	} else {
	
		$HEAD['INCLUDES']['css'][]='lib/css.css';
	
	}
	
	$SELECTED=$CLASSSELECTED;
	
	
}

function web_selector_control($SELECTED,$THIS,$tipos,$debug=0){
	$tiposA=array();
	$tiposA=explode(",",$tipos);
	echo "id_".$THIS." ";
	foreach($tiposA as $tipo){
		echo $THIS."-".$tipo." ".$SELECTED[$THIS."-".$tipo]." ";
	}
	global $_SESSION; global $SERVER;
	if($_SESSION['edicionweb']=='1' and $SERVER['LOCAL']=='1'){ 
		global $MASTERCOFIG;
		if($MASTERCOFIG['edicion_bloques']){
			web_guardar_datos(array('file'=>'../../modulos/css','var'=>'WEBBLOQUES',$THIS=>$tipos),$debug);
		}
	}	
}

function incluget($archivo,$p=NULL){

	global $_SESSION; global $SERVER;
	global $PARAMS;
	$PARAMS = $p;
	$ar=array();
	$ar=explode("/",$archivo);
	list($THIS,$ex)=explode(".",end($ar));
	
	$THIS=($p['this']=='')?$THIS:$p['this'];
	$PARAMS['conector']=($p['conector']=='')?$THIS:$p['conector'];
	$PARAMS['classStyle']=($p['classStyle']=='')?$THIS:$p['class'];
	$PARAMS['this']=$THIS;		
//	prin($PARAMS);

	return $archivo;
		
}

function web_reload($url){

	@header("Location: $url");
	
}


function procesar_url($url,$debug=0){

	global $URLS; global $MASTERCOFIG;
//	prin($URLS);		
	if($MASTERCOFIG['friendly_url']=='0'){
	
		return $url;
		
	}
			
	if(isset($URLS[$url])){
	
		$url=$URLS[$url];
		
	} else {
	
		$file="index.php?";
		$url2=str_replace($file,"",$url);
		
		parse_str($url2,$gets);
		$url='';
		if( $gets['modulo']=='items' ){
			$url.=$gets['tab'];
//			$url.=( ($gets['grupo'])?"/".$gets['grupo']."/". ( ($gets['friendly'])?url_friendly($gets['friendly']):"index.html" ):"" );
			if( $gets['acc']=='file' ){
				$url.=( ($gets['id'])?"/".$gets['id']."/". ( ($gets['friendly'])?url_friendly($gets['friendly']):"index.html" ):"" );
			} elseif( $gets['acc']=='list' ){
				$url.=( ($gets['gru'])?"-".$gets['gru']."/". ( ($gets['friendly'])?url_friendly($gets['friendly']):"categoria" ):"" );

				$url.=( ($gets['fil'])?"/".$gets['fil'].(($gets['val'])?"/".$gets['val']."/".( ($gets['friendly'])?url_friendly($gets['friendly']):"index.html" ):''):'');

				$url.=( ($gets['buscar'])?"/buscar=".$gets['buscar']:"" );
				
				$url.=( ($gets['pag'])?"/pag-".$gets['pag']:"" );			
			}	
		}	
		elseif( $gets['modulo']=='app' and $gets['tab']=='pages' ){
			$url.=$gets['page'];
			//$url.=( ($gets['pag'])?"/pag-".$gets['pag']:"" );			
		}
		elseif( $gets['modulo']=='app' ){
			$url.=$gets['tab'];
			//$url.=( ($gets['pag'])?"/pag-".$gets['pag']:"" );			
		}		
		elseif( $gets['modulo']=='formularios'){
			$url.=$gets['tab'];
		}				
		
		if($debug==1){ prin($gets); prin($url); }		
		
	}
	
	return $url;
	
}


function web_render_data($item,$ITEM){

	echo "<ul class='data'>";
	$ITEM=explode(",",$ITEM);
	foreach($ITEM as $est2){
		unset($tag);unset($class); unset($label); unset($campo);
		list($est,$tag,$class)=explode(":",$est2);
		list($campo,$label)=explode("|",$est);
		switch($est){
			default: 
			$label=($label)?$label:$campo; 
			$tag=($tag)?$tag:"div"; 
			$class=($class)?$class:$campo; 
			echo "<li class='line line_$class'>
			<b class='var'>$label</b>
			<$tag class=\"valor\" >".$item[$campo]."</$tag>
			</li>";
			break;
		}
	}
	echo "</ul>";
	
}


function web_render_item($item,$ITEM,$debug=0){
	if($debug) prin($item);
	$ITEM=explode(",",$ITEM);
	foreach($ITEM as $est2){
		unset($tag);unset($class); list($est,$tag,$class)=explode(":",$est2);
		switch($est){
			
			case "foto":
			if($item['foto']){ 
			$tag=($tag)?$tag:"a"; 
			$class=($class)?$class:"foto"; 
			echo "<$tag href=\"". ( ($item['foto']['get_archivo'])?$item['foto']['get_archivo']:($item['link'])?$item['link']:'' )."\"  class=\"$class\" ";
			echo ($item['titulo'])?" title=\"".$item['titulo']."\" ":"";
			echo " >";
			echo "<img ";
			echo ($item['get_atributos']!='')?$item['get_atributos']:$item['foto']['get_atributos'];
			echo ($item['titulo'])?" title=\"".$item['titulo']."\" alt=\"".$item['titulo']."\" ":"";
			echo " />";
			echo "</$tag>";
			} 
			break;
			
			case "titulo": 
			$tag=($tag)?$tag:"h2"; 
			$class=($class)?$class:$est; 
			echo "<$tag class=\"$class\" >";
			?><a href="<?php echo $item['link'];?>" title="<?php echo $item['titulo'];?>"><?php echo $item[$est];?></a><?php 
			echo "</$tag>";
			break;
			
			default: 
			$tag=($tag)?$tag:"div"; 
			$class=($class)?$class:$est; 
			echo (!empty($item[$est]))?"<$tag class=\"$class\" >".$item[$est]."</$tag>":"";
			break;
			
		}
	}
}



function web_render_comming($vars,$session){
	global $_GET, $Local, $COMMON;
	if(!$Local and $vars['GENERAL']['DESARROLLO'] and !$session['verdesarrollo'] ){
		if($_GET['modulo']=='comming'){
		if($vars['GENERAL']['COMMING']){		
		$html ="<html>";
		$html.="<head>";
		$html.='<link rel="shortcut icon" href="web/templates/default/img/favicon.ico" type="image/x-icon" />';
		$html.="<style>";
//		$html.=".logo{ background: url(panel/img/nube.png); width:320px; height:171px;}.logo img { margin:47px auto 0px; }";
//		$html.=".logo{ background: url(panel/img/nube2.png); width:388px; height:153px;}.logo img { margin:47px auto 0px; }";		
		$html.=".titulo{ font-size:30px; font-weight:bold; font-family:calibri; color:#FFF; text-shadow:1px 1px 25px #000000; text-transform:uppercase; }";		
		$html.=".logo{ background: url(panel/img/paper.png); width:172px; height:155px;}.logo img { margin:43px auto 0px; }";		
		$html.="body{ background: url(panel/img/commingbg.png) #333; }";
		$html.='</style><title>'.$COMMON['datos_root']['titulo_web'].'</title></head>';
		$html.="<table width=100% height=100%><tr><td align=center valign=middle>";
		$html.='<div class=titulo>'.$COMMON['datos_root']['titulo_web'].'</div>';		
		$html.='<div class=logo><img src="panel/'.$vars['GENERAL']['img_logo'].'"></div>';
		//$html.='<div><img src="panel/img/comming.jpg" width=100 ></div>';
		$html.="</td></tr></table></html>";
		} else {
		$html ='';
		}
		die($html);		
		} else {
			global $SERVER; redireccionar_a($SERVER['BASE'].'comming');	
		}
	} else { 
		if($_GET['modulo']=='comming'){ 
			global $SERVER; redireccionar_a($SERVER['BASE']); 
		} 
	}
	
}

function web_render_fichero($item){
	$link=$item['link'];
	$filE=$item['get_archivo'];
	$fa=explode(".",$filE);
	$ext = $fa[sizeof($fa)-1];
	switch($ext){
		case 'gif':case 'jpg':case 'jpeg':case 'png':
			list($ww,$hh)=explode("x",$item['dimensiones']);
			$linc="http://".str_replace("http://","",$link);
			echo ($link!='')?"<a href='$linc' target='_blank'>":'';
			echo '<img src="'.$filE.'" ';
			echo ($ww!='')?' width="'.$ww.'" height="'.$hh.'" ':'';
			echo ' />';
			echo ($link!='')?"</a>":'';
		break;
		case 'swf': 
			list($ww,$hh)=explode("x",$item['dimensiones']);
			echo '<object width="'.$ww.'" height="'.$hh.'">
<param name="movie" value="'.$filE.'">
<param name="wmode" value="transparent">
<param name="quality" value="high">
<embed src="'.$filE.'" width="'.$ww.'" height="'.$hh.'"  wmode="transparent" quality="high">
</embed>
</object>';
        break;			
	}
	
}

function web_render_colap_2($id,$titulo,$contenido){
	?>
    <div class="colapsable close" id="<?php echo $id;?>">	
        <div class="barra" onclick="openclose('<?php echo $id;?>');return false;" ><?php echo $titulo;?>
        <div class="boton boton_open" title="abrir" ></div>
        <div class="boton boton_close" title="cerrar" ></div>
        </div>
        <div class="contenido""><?php echo $contenido;?></div>
    </div>
	<?php
}

function web_render_colap($id,$titulo,$contenido,$open=false){
	?>
    <div class="colapsable <?php echo ($open)?'open':'close'; ?>" id="<?php echo $id;?>">	
        <div class="barra" >
			<?php echo $titulo;?>
            <div class="boton boton_open" title="abrir" ></div>
            <div class="boton boton_close" title="cerrar" ></div>
        </div>
        <div class="contenido" ><?php echo $contenido;?></div>
    </div>
    <script type="text/javascript">
    window.addEvent('domready',function() { 
      	block<?php echo $id;?>=$('<?php echo $id;?>');
        var children<?php echo $id;?> = block<?php echo $id;?>.getChildren();
        barra<?php echo $id;?>=children<?php echo $id;?>[0];
        contenido<?php echo $id;?>=children<?php echo $id;?>[1]; 
        var state<?php echo $id;?> = false;
        <?php if(!$open){ ?>
        contenido<?php echo $id;?>.slide('out'); 
        <?php } ?>
        barra<?php echo $id;?>.addEvent('click',function(e) { 
          contenido<?php echo $id;?>.slide((block<?php echo $id;?>.hasClass('close')) ? 'in' : 'out'); 
          if(block<?php echo $id;?>.hasClass('close')){ 
            block<?php echo $id;?>.addClass('open'); 
            block<?php echo $id;?>.removeClass('close'); 
          } else { 
            block<?php echo $id;?>.addClass('close'); 
            block<?php echo $id;?>.removeClass('open');
          } 
        }); 
    });    
    </script>
	<?php
}

function web_render_menu_footer($menus){

	$mmenu=array();
	foreach($menus as $menu){
		if($menu['disabled']!='1'){
			$mmenu[]="<h2><a href='".procesar_url($menu['url'])."' title='".$menu['label']."'>".$menu['label']."</a></h2>";
		}
	}
	echo implode(" - ",$mmenu);
	
}

function web_procesar_keywords($string){

	global $STOPWORDS;
	global $TAGS;
	$string=str_replace(array("\n","\t","\r"),array(" "," "," "),strip_tags($string));
	$keyword = new autokeyword(array('content'=>$string,'stopwords'=>$STOPWORDS), "utf-8");
	$keys = $keyword->get_keywords();	
	$keys=array_merge($TAGS,$keys);
	$keys2=array_chunk($keys,10);
	$keys=$keys2[0];	
	$keywords=implode(",",$keys);
	//prin($keywords,"#0000FF");
	return $keywords;
	
}

function web_procesar_description($string){

	$string=str_replace("...","",limit_string($string,150));
	//prin($string,"#FFFF00");
	return $string;

}

function web_render_facebook_like($fb){
	$url=urlencode($fb['url']);
	echo '<iframe class="facebook_like" src="';
	if(!$SERVER['LOCAL']){ echo 'http://www.facebook.com/plugins/like.php?href='.$url.'&amp;layout=standard&amp;show_faces=false&amp;width='.$fb['w'].'&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height='.$fb['h'];}
	echo '" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$fb['w'].'px; height:'.$fb['h'].'px;" allowTransparency="true"></iframe>';
}

?>
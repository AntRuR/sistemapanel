<?php //á
/* */


$Open=($_COOKIE['admin']=='1' and $vars['GENERAL']['mostrar_toolbars']=='1')?1:0;

$indicesA=array(
				'M'=>'menu'
				,'C'=>'crear'
				,'X'=>'eliminar'
				,'E'=>'editar'
				,'EC'=>'edicion_completa'
				,'ER'=>'edicion_rapida'
				,'V'=>'visibilidad'
				,'B'=>'buscar'
				,'O'=>'orden'
				,'EV'=>'expandir_vertical'
				,'D'=>'disabled'
				);
				
foreach($objeto_tabla as $item){

	if($SERVER['ARCHIVO']==$item['archivo'].".php"){
	$this_grupo=$item['grupo'];
	$this_me=$item['me'];
	}
	
}	
?>
<?php
$vars['GENERAL']['BG_COLOR_4']="CCCCCC";
$BG_COLOR_3_OPP=oppColour($vars['GENERAL']['BG_COLOR_3']);
$BG_COLOR_4_OPP=oppColour($vars['GENERAL']['BG_COLOR_4']);
?>
<style>
a.derech { position:absolute; right:14px; top:2px; width:8px; height:auto; background-color:#EEC810 !important; color:#000 !important; z-index:4;}
a.derech2  { position:absolute; right:1px; top:2px; width:auto; height:auto; background-color:#EEC810 !important; color:#000 !important; z-index:4;}
/*a.derech2 div { position:absolute; right:-23px; top:0px; display:none; background-color:#000000; color:#FFFFFF; height:70px; z-index:50; }
a.derech2:hover div { display:block; }*/
.mooeditable-ui-dialog .dialog-content * { float:none;}
.bloque_titulo a { color:#<?php echo $BG_COLOR_3_OPP;?>; }
.foot a { color:#<?php echo $BG_COLOR_3_OPP;?>; margin-right:5px; }
.bloque_titulo { background-color:#<?php echo $vars['GENERAL']['BG_COLOR_3'];?>; color:#<?php echo $BG_COLOR_3_OPP;?>;  }
.menus a , ul.ul_menus li{ padding:2px <?php echo $menu_padding_lados;?> }
ul.ul_menus li:hover a,
ul.ul_menus li:hover,
.menus a:hover,
.menus a.selected,
ul.ul_menus li.selected,
ul.ul_menus li.selected a
{ background-color:#<?php echo $vars['GENERAL']['BG_COLOR_3'];?>; color:#<?php echo $BG_COLOR_3_OPP;?>;  }
.segunda_barra {
background-color:#<?php echo $vars['GENERAL']['BG_COLOR_4'];?>;
color:#<?php echo $BG_COLOR_4_OPP;?>;
}
.open_toolbar { float:right;font-size:9px; color:#CCCCCC; }
.open_toolbar:hover { color:#000000; } 
#div_contenedor { background:#FFFFFF; }
</style>
<?php 

if($_GET['block']!='form'){

?>
<?php
if($SERVER['browser']=='IE6'){
?>
<style>
.bloque_titulo { background-image:none; }
.div_bloque_cuerpo { width:100%; float:none; clear:left; }
.foot { float:none; clear:left; width:100%;  }
</style>
<?php
include("aviso_ie6.php"); 
include("foot.php"); 
echo $HTML_MAIN_FIN;	
echo $HTML_ALL_FIN;
exit();
} 
?>
<script>
window.addEvent('domready',function(){	
	$('div_contenedor').setStyles({'background':'none'});
});
</script>
<?php 
//prin($_SESSION);
//prin($_COOKIE);
//prin($Open);
//prin($Local);
//if(1){ 
if( ( $Open or $Local==1 ) ){ 
if((strpos($_SERVER['SCRIPT_NAME'], "login.php")===false) and ($vars['GENERAL']['mostrar_toolbars']==1)){
include("maquina_opciones.php");
}
} 

?>
<script>
function edit_init(se,na,va){
new Request({url:"lib/edit_ini.php",method:'post',data:{seccion:se,name:na,value:va},onSuccess:function(eee){location.reload(true);}}).send();
}



</script>
<div>
<?php

$script_name=$SERVER['ARCHIVO'];

if($_COOKIE['admin']=='1'){

	$menus_d[] =  "<a href='maquina.php?accion=borrarcookie' style='position:relative;float:right;margin-bottom:-19px;'><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>salir</a>";

	if($Open){
	$menus_d[] =  "<a href='#' style='position:relative;float:right;margin-bottom:-19px;' rel='nofollow' onclick=\"javascript:edit_init('GENERAL','mostrar_toolbars','0');return false;\"><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>cerrar toolbar</a>";
	}else{
	$menus_d[] =  "<a href='#' style='position:relative;float:right;margin-bottom:-19px;' rel='nofollow' onclick=\"javascript:edit_init('GENERAL','mostrar_toolbars','1');return false;\"><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>abrir toolbar</a>";
	}
		
} 

	$menus_d[] = "<a style='position:relative;float:right;margin-bottom:-19px;' href='$url_publica' target='_top' ><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>$url_publica</a>";

if($Open or $Local==1){

if( $VALIDAR_SESION!='' or $_SESSION['usuario_id']!='' ){

	$menus_d[] = "<a ". (($script_name=="maquina.php")?"class='selected'":"") ." style='position:relative;float:right;margin-bottom:-19px;' href='maquina.php?redirhome=1' ><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>entrar</a>";

} else {

	$menus_d[] = "<a ". (($script_name=="maquina.php")?"class='selected'":"") ." style='position:relative;float:right;margin-bottom:-19px;background-color:#954A4A;color:white;' href='maquina.php' ><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>master</a>";

}	
	if($Local==1){
		$menus_d[] = "<a ". (($script_name=="maquina.php")?"class='selected'":"") ." style='position:relative;float:right;margin-bottom:-19px;background-color:black;font-weight:bold;color:white;' href='http://".$_SERVER['SERVER_NAME']."/sistemapanel/panel' ><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>".$vars['GENERAL']['factory']."</a>";
	}
	if($Local==1){
		if($_COOKIE['admin']=='1'){
			if($vars['INTERNO']['ID_PROYECTO']!="0"){	
				$menus_d[] = "<a style='background-color:#DDDC1B;position:relative;float:right;margin-bottom:-19px;' href='maquina.php?accion=updatecode'><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>actualizar</a>";
			}
		}
	}
	
}
if( $VALIDAR_SESION!='' and $_SESSION['usuario_id']!='' ){

	$menus_d[] = "<a style='position:relative;float:right;margin-bottom:-19px;' href='salir.php'><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>salir</a>";
	
	$menus_d[] = "<a style='position:relative;float:right;margin-bottom:-19px;text-decoration:none;font-weight:bold;background-color:#FFFFFF;color:#000000 !important;'>". select_dato($sesion_login,$tabla_sesion,"where $sesion_id='".$_SESSION['usuario_id']."'") ."</a>";

}

if( ( $VALIDAR_SESION!='' and $_SESSION['usuario_id']!='' ) or $Open ){

	$menus_d[] = "<a ". (($_GET['tab']=="estadisticas")?"class='selected'":"") ." style='position:relative;float:right;margin-bottom:-19px;' href='tools.php?tab=estadisticas'><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>estadísticas</a>";

	$menus_d[] = "<a ". (($_GET['tab']=="feedback")?"class='selected'":"") ."  title='Reporte de errores, Ayúdenos a mejorar' style='position:relative;float:right;margin-bottom:-19px;' href='tools.php?tab=feedback'><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>feedback</a>"; 

}

	if($vars['GENERAL']['DESARROLLO']=='1' and $vars['INTERNO']['ID_PROYECTO']!="0" and !$LOGIN){
    $menus_d[] =  "<a href='".$SERVER['BASE'].$SERVER['ARCHIVO']."?verdesarrollo=". ( ($_SESSION['verdesarrollo']=='1')?'0':'1' )."'  style='position:relative;float:right;margin-bottom:-19px;background-color:".( ($_SESSION['verdesarrollo']=='1')?'#09A707':'#DE1010' )." ;color:#FFF;' title='".( ($_SESSION['verdesarrollo']=='1')?'apagar':'encender' )."'><span class='menu_ai'></span><span class='menu_ad'></span><span class='menu_bi'></span><span class='menu_bd'></span>". ( ($_SESSION['verdesarrollo']=='1')?'desactivar':'activar' )." ver desarollo</a>";
	}
	
if($Local==1){

	if($LOGIN){
	
		$bgsel= "<select style='left:0px;top:0px;width:80px;height:auto;position:position:absolute;'
			onchange='setbgq(this.value);'
			onkeyup='setbgq(this.value);'
			>";
			$CLI=($vars['INTERNO']['ID_PROYECTO']=="0")?'':'../../panel/';
			$directorio_s = dir($CLI."img/bgs/");
			
			while($fichero=$directorio_s->read()) {
				if($fichero!='.' and $fichero!='..'  and !is_dir($CLI."img/bgs/".$fichero) ){
					$ooppp[$fichero]= "<option ".( ("http://crazyosito.com/bgs/".$fichero==$BG_IMAGE)?"selected":"")." value='"."img/bgs/".$fichero."'>".$fichero."</option>";			
				}		
			}
			$directorio_s->close();		
		ksort($ooppp);	
		$bgsel.= implode("",$ooppp);
		$bgsel.= "</select>";
		$bgsel.= "<script>
		function setbgq(bg){ \$(document.body).setStyles({'background-image':'url(";	
		$bgsel.= ($vars['INTERNO']['ID_PROYECTO']=="0")?"'+bg+'":"../../panel/'+bg+'";
		$bgsel.= ")'});}
		</script>	
		";
		
		$menus_d[] = $bgsel;
	
	}

}

$hhtml ='';
list($titulo_strong,$dos)=explode("::",$vars['GENERAL']['html_title']);
$hhtml.="<div class='menus' style='z-index:4;margin-top:-4px;#margin-top:0px;' id='menumenu' >";
//echo implode("<span class='pale' style='float:right;margin-bottom:-15px;'>|</span>",$menus_d);
$hhtml.=implode("",$menus_d);
$hhtml.="</div>";
$hhtml.="<b style='text-transform:uppercase;float:left;'>".$titulo_strong."</b>";

echo $hhtml;
echo "<div style='clear:left;position:relative;'>";
if(file_exists($img_logo)){
if(trim($img_logo)!=''){ 
?><a href="./" style="float:left;margin-top:0px;clear:left;" ><img src="<?php echo $img_logo?>" align="absmiddle" border="0"  /></a><?php 
} } ?>
<a href="./" class="link_header" style="color:#<?php echo $BG_COLOR_3;?>; 
letter-spacing:<?php echo $titulo_letter_spacing?>;font-size:<?php echo $titulo_font_size;?>; " ><?php echo $html_titulo;?></a>
<?php if($Local and !$LOGIN){ ?>
<div class="mensaje_header">
<b>
-ser proactivo<br />
-primero lo primero<br />
-trabajar con el fin en mente
</b>
</div>
<?php } ?>
<?php echo "<div>"; ?>
<style>.dredre div textarea { width:98%;height:450px;border:1px solid #9F1F1F;color:#433636;padding:5px;font-family:Verdana;font-size:13px;line-height:16px; }</style>
<?php 
if($Open and ( substr($SERVER['BASE'],-7)=='custom/' or $SERVER['ARCHIVO']=='maquina.php' ) and $_SESSION['edicionpanel']=='1' ){ 
echo "<div style='height:80px;left:180px;position:absolute;top:-18px;width:607px;z-index:3;opacity:0.9;' id='eth'>";
if(substr($SERVER['BASE'],-7)=='custom/'){
echo $EDITOR_TEXTUAL_CAMPOS;
echo "<script> window.addEvent('domready',function(){ $('jjjson').focus(); }); </script>";
echo '<style>.dredre div textarea { height:39px;}</style>';
} else {
echo $EDITOR_TEXTUAL_OBJETO;
if($_GET['me']=='' and $_GET['open']=='' and $_GET['save']!='campos' and $_GET['accion']==''){
echo "<script> window.addEvent('domready',function(){ $('jjjsonproy').focus(); }); </script>";
}
echo '<style>.dredre div textarea { height:50px;}</style>';
}
echo "</div>";
if((substr($SERVER['BASE'],-7)=='custom/')){
echo "<li class='quickcontrols'>";
if($Open){ ?> 
<div style="text-align:right;">        
        <a style=" margin:5px 18px 10px 5px; font-size:12px; background-color:#FFEEE0; color:#000000; " href="maquina.php?me=<?php echo $this_me;?>#blo_objetos" >Propiedades</a>   
        
        <a style=" margin:5px 18px 10px 5px; font-size:12px; background-color:#FFEEE0; color:#000000; " href="maquina.php?me=<?php echo $this_me;?>#edicion_indices_sub" >Campos</a> 
</div>
            
<div style="text-align:right;height:17px;">                 
<?php 
		$ot=$objeto_tabla[$this_me];

		echo "<table class='tbl' align=right><tr><td style='border:0;'>";
		foreach($indicesA as $inicial=>$indice){
		echo "<a href='#' onclick=\"javascript:modificar_dato_valor('".$this_me."','".$indice."','".(($ot[$indice]=='1')?"0":"1")."'); return false;\" rel='nofollow' class='letra ". (($ot[$indice]=='1')?"onon":"offoff") ."' title='".strtoupper($indice)."' >$inicial</a>";
		}
		echo "</td></tr></table>";
?>
</div>	
<div style="text-align:left;" class="editar_campos"> 
<?php $_GET['me']=$this_me; include("editar_campos.php");?>
</div>
<?php	} 
	
}
}
echo "</li>";
?>
&nbsp;
</div>
<script>

function modificar_dato_valor(me,indice,valor){
	
	datos = { 
				me			: me,
				indice		: indice,
				valor		: valor
			};		
	
	new Request({url:"modificar_objeto.php", method:'post', data:datos, onSuccess: function(eee){
		if(eee.trim()!='')
			alert(eee);
		else	
			<?php if($_GET['me']==''){?>
				location.reload();
				//location.href='?rann=<?php echo rand();?>';
			<?php } else { ?>
				location.href='?rann=<?php echo rand();?>&me='+me+'&save=campos';
			<?php } ?>
	
	} } ).send();
	
}

</script>
<?php /* */ ?>
<?php

$tablas_creadas=array();
$sql = "show tables";
$result=mysql_query($sql,$link);
$total=mysql_num_rows($result);
if($total>0){
	while ($row = mysql_fetch_row($result)){
			$tablas_creadas[] = $row[0];
	}
}
$menus=array();
$menus_1=array();
$menus_2=array();
//echo "<pre>"; print_r($objeto_tabla); echo "</pre>";
//prin($Open);
foreach($objeto_tabla as $item){

	if( $Open=='1' and $item['menu_label']==''){
	$item['menu_label']=$item['archivo'];
	$BGDD="#F8F895";	
	$ExtraStyle="font-weight:normal;text-transform:uppercase;letter-spacing:0px;font-size:8px;";
	}else{
	$BGDD=$BGCOLOR_DESARROLLO;
	$ExtraStyle="";
	}
	$classhijo="width:92%;margin-left:8%;";
	if( $item['menu']=='1' or ($Open=='1' and $item['archivo_hijo']=='' and $item['menu_label']!='' ) ){

		if(
			(
			file_exists($DIR_CUSTOM.$item['archivo'].".php") 
			and in_array($item['tabla'],$tablas_creadas) 
			and (!($item['disabled']=='1')) 
			)
			or
			(
			!in_array($item['tabla'],$tablas_creadas) and $Open
			)
			
			){
		
			$bbgg = ( !( ($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php") ) and ($item['menu']!='1') )?1:0;
			if($bbgg){ $BBB[]=$item['me']; }
			$mmm ="<li ". ((($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php"))?"class='selected'":"") ." 
			style='padding-top:0px;padding-bottom:0px;$classhijo" . ( ($bbgg)?"background-color:".$BGDD.";":(!in_array($item['tabla'],$tablas_creadas)?"background-color:#37F73B;":"")) . " ". ( ($script_name==$item['archivo'].".php")?"width:110%;":"" ) ."'>";
			$mmm .="<a style='font-style:italic;font-weight:normal; font-size:13px; ". ( ($bbgg)?"background-image:none;":"") . "padding-top:2px;padding-bottom:2px;" . ( ( !( ($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php") ) and ($item['menu']!='1') )?"color:;":'') . $ExtraStyle. "' href='".$DIR_CUSTOM.$item['archivo'].".php' 
			 >- ".$item['menu_label'].$item['archivo_padre'];
			$nume=contar($item['tabla'],"");
			$mmm.=" <span class='numero'>($nume)</span>";
			$mmm.="</a>";
			if($Open=='1'){
			$mmm.="<a class='derech' href='maquina.php?me=".$item['me']."#blo_objetos' title='Editar Propiedades'>P</a>";
			$mmm.="<a class='derech2' href='maquina.php?me=".$item['me']."#edicion_indices_sub' title='Editar Campos'>C";
//			$mmm.="<div>algo</div>";
			$mmm.="</a>";
			}
			$mmm.="<span class='menu_ai'></span><span class='menu_ad'></span>";
			$mmm.="<span class='menu_bi'></span><span class='menu_bd'></span>";
			/*
			if($_COOKIE['admin']=='1'){
			$submenus[]=array("url"=>"maquina.php?me=".$item['me'],"label"=>"devel");
			}
			*/
			/*
			$subnum=sizeof($submenus);
			if($subnum>0){
			$mmm.=($vars['GENERAL']['ESTILO_2']=='1')?"<div class='submenu' style='right:-100%;top:0px;'>":"<div class='submenu' style='bottom:-". (15*$subnum) ."px;'>";
			foreach($submenus as $submenu){
			$mmm.="<a href='".$submenu['url']."'>".$submenu['label']."</a>";
			}
			$mmm.="</div>";
			}
			unset($submenus);
			*/
			$mmm.="</li>";
			
			if(  !( ($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php") ) and ($item['menu']!='1') ){
			$menus_2[]=array('h'=>$mmm,'g'=>$item['grupo']);
			} else {
			$menus_1[]=array('h'=>$mmm,'g'=>$item['grupo']);
			}

			$menus[($item['grupo'])?$item['grupo']:'general'][]=$mmm;
			if(!in_array($item['grupo'],$grupi)){
				$grupi[]=$item['grupo'];
				if( ($item['grupo']!='sistema') or ($item['grupo']=='sistema' and $Open )){
					if(trim($item['grupo'])!='' ){
					$GrupLi[$item['grupo']]="<li id='idg_".$item['grupo']."' style='opacity:0.99;' ><a style='padding-top: 1px; padding-bottom: 1px;font-size:14px; text-transform:capitalize;' ". (($item['grupo']=='sistema')?"class='admincc'":'') ." href='".$DIR_CUSTOM.$item['archivo'].".php'>
					<span class='menu_ai'></span><span class='menu_ad'></span>
					<span class='menu_bi'></span><span class='menu_bd'></span>
					".$item['grupo']."</a></li>";
					}
				}
			}		

		}
	}
}
?>
<?php
if(1){
$GGR0[]=array('productos'	,$GrupLi['productos']);
$GGR2[]=array('formularios'	,$GrupLi['formularios']);
$GGR2[]=array('contenidos'	,$GrupLi['contenidos']);
$GGR2[]=array('publicidad'	,$GrupLi['publicidad']);
$GGR2[]=array('sistema'		,$GrupLi['sistema']);
foreach($GrupLi as $iii=>$ggg){
	if(!in_array($iii,array('formularios','contenidos','publicidad','sistema'))){ $GGR1[]=array($iii,$GrupLi[$iii]); }
}
unset($GrupLi);		
$GGR=array_merge($GGR0,$GGR1,$GGR2);
foreach($GGR as $GG){
	$GrupLi[$GG[0]]=$GG[1];
} 

$htmlmenu ='';
$htmlmenu .= "<ul class='ul_menus". ( ($SERVER['ARCHIVO']=="maquina.php" and $_GET['accion']=='' )?' ul_menus_fixed':'' ) ."'>";
if(sizeof($GrupLi)>0){
	foreach($GrupLi as $ttm=>$gl){
		$htmlmenu .= $gl;
		if($ttm==$this_grupo or $SERVER['ARCHIVO']=="maquina.php"){
			foreach($menus[$ttm] as $menn){
				$htmlmenu .=$menn;
			}
			$htmlmenu .="<script>if(\$('idg_".$this_grupo ."')){\$('idg_".$this_grupo ."').addClass('selected');}</script>";
		}
	}
} else {
	foreach($menus['general'] as $menn){
		$htmlmenu .=$menn;
	}
}
$htmlmenu .='</ul>';


?>
<style>
<?php if($htmlmenu=="<ul class='ul_menus'></ul>" or $htmlmenu=="<ul class='ul_menus ul_menus_fixed'></ul>"){ ?>
.ul_menus { <?php echo "background:url(img/bgleft.jpg) no-repeat -7px -4px;min-height:230px;height:auto !important;height:230px;";?> }
<?php } else { ?>
.ul_menus { <?php echo ($_GET['tab']!='')?'display:none;':''; ?> }
<?php } ?>
/*.ul_menus_fixed { position:fixed !important;top:74px;left:73px;z-index:10;background-color:#FFF;width:170px !important; }*/
</style>
<?php
//echo implode("<span class='pale'>|</span>",$menus);
//$menus=array_merge($menus_1,$menus_2);
//$htmlmenu ='';
/* if(sizeof($menus)>0){
if($_GET['tab']==''){
foreach($menus as $menn){
	if($menn['g']==$this_grupo or $SERVER['ARCHIVO']=="maquina.php"){
		$htmlmenu .=$menn['h'];
	}
}
$htmlmenu .="<script>if(\$('idg_".$this_grupo ."')){\$('idg_".$this_grupo ."').addClass('selected');}</script>";
}
$htmlmenu .='</ul>';
 */
echo $htmlmenu;
} else {
echo "<style> .div_bloque_cuerpo { width:100%; } </style>";
}
?>
<style>
/*
.linksgrupos { clear:both; }
.linksgrupos a { color:#FF0000;}
.linksgrupos a.admincc { color:pink;}
.linksgrupos a.seleccc { color:#000;}
.linksgrupos a:hover { color:#000;}
*/
</style>
<?php 
$MEME=($_GET['me'])?$_GET['me']:$this_me;
?>
<script>

function procesar_objt(){
	
	datos = { 
				me			: '<?php echo $MEME?>',
				'indice'	: 'json',
				'json'		: $('jjjson').value
			};		
	
	new Request({url:"modificar_objeto.php", method:'post', data:datos, onSuccess: function(eee){
		if(eee.trim()!='')
			alert(eee);
		else	
			<?php if($_GET['me']){ ?>
//				alert('<?php echo $_GET['me'];?>');
				location.href='?rn=<?php echo rand();?>&me=<?php echo $MEME;?>&save=campo#edicion_indices_sub';
			<?php } else { ?>
//				alert('0');
				location.href='custom/<?php echo $SERVER['ARCHIVO'];?>?rn=<?php echo rand();?>#eth';
			<?php } ?>
	
	} } ).send();
	
}

function procesar_proyecto(){
	
	datos = { 
				'indice'	: 'jsonproy',
				'json'		: $('jjjsonproy').value
			};		
	
	new Request({url:"modificar_objeto.php", method:'post', data:datos, onSuccess: function(eee){
		if(eee.trim()!='')
			alert(eee);
		else	
				location.href='maquina.php?rn=<?php echo rand();?>#eth';
	
	} } ).send();
	
}
function procesar_recargar(urll){
	
/* 	new Request({url:urll, method:'get',onSuccess: function(eee){
			alert(eee);
	} } ).send();  */
	window.open(<?php echo ($SERVER['browser']=='IE7')?"'../'+":"";?>urll,'proceso','width=750,height=450,menubar=no,scrollbars=yes,toolbar=no,location=no,directories=no,resizable=no,top=270,left=240');
	
}

</script>
<?php } ?>
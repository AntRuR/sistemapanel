<?php 

include('header_menu.php');








//prin(array('alllistado','phpinfo','updatecode','subirconfig','bajarconfig'));



$Open=(
		$_COOKIE['admin']=='1'
		and $vars['GENERAL']['mostrar_toolbars']=='1'
		and $_GET['block']!='form'
		//and $_SESSION['edicionpanel']=='1'
)?1:0;

foreach($objeto_tabla as $item){
	if(enhay($SERVER['ARCHIVO'],$item['archivo'].".php")){
		$this_grupo=$item['grupo'];
		$this_me=$item['me'];
	}
}

if($this_me){

	if($objeto_tabla[$this_me]['page']==1){
		$filtrar_page2=1;	$_SESSION['page']=($_SESSION['page']!='' and in_array($_SESSION['page'],$IdPageS))?$_SESSION['page']:$IdPageS[0];
	}
	if($objeto_tabla[$this_me]['web']==1){
		$filtrar_web2=1;	$_SESSION['web']=($_SESSION['web']!=''  and in_array($_SESSION['page'],$IdWebS))?$_SESSION['web']:$IdWebS[0];
	}

}


foreach($objeto_tabla as $item){

	if(trim($item['app'])!=''){
		$item['app']=str_replace("'","\"",$item['app']);
		$aps=explode("<a",$item['app']);
		foreach($aps as $ap){
			if($ap!=""){
				$parts=between($ap,"href=\"","\"");
				$urla=parse_url($parts["1"]);
				$parames=parseParams($urla["query"]);
				if($SERVER['ARCHIVO']==$urla["path"] and $_GET["ap"]==$parames["ap"]){
					$this_grupo=$item["grupo"];
					$this_app_menu=$ap;
					$APP["file"]=$parames["ap"];
					$APP["nombre"]=strip_tags("<a".$ap);
				}
			}
		}
	}

}

foreach($objeto_tabla as $item){
	if($item["disabled"]!=1){
		$validos[]=$item["archivo"].".php";
	}
}

//prin($validos);
//prin($SERVER['ARCHIVO']);

$vars["GENERAL"]["BG_COLOR_4"]="CCCCCC";
$BG_COLOR_3_OPP=oppColour($vars["GENERAL"]["BG_COLOR_3"]);
$BG_COLOR_4_OPP=oppColour($vars["GENERAL"]["BG_COLOR_4"]);
?>
<style>
.truc {
	width: 120px;
}

.mooeditable-ui-dialog .dialog-content * {
	float: none;
}
/*.bloque_titulo, .bloque_titulo a { color:#<?php echo $BG_COLOR_3_OPP;?>; }*/
.foot a {
	margin-right: 5px;
	text-decoration: none;
}

.foot a:hover {
	text-decoration: underline;
}

<?php if($_GET['i']!=''){ ?>
.bl .bd {
    /*width: 300px !important;*/
}
.filters {
	display:none !important;
}
.modificador .bld .nc {
	/*padding-left:40px;*/
	/*width:150px;*/
}
.modificador .itms {
	/*margin-left:15px;*/
}
.modificador .bld {
	background:none;
}
.bl .bld {
	border-left:0px;
}
.modificador .lchk { display:none; }
#segunda_barra_2 { display:none; }
.barbar2 { display:none; }

<?php } ?>

<?php

/* echo ".bloque_titulo {
	background-color: #".$vars['GENERAL']['BG_COLOR_3'].";
	border : 1px solid #cccccc;
}"; */

foreach($objeto_tabla as  $ot){
	if($ot['archivo'].".php"==$SERVER['ARCHIVO']){ $oott=$ot; }
}

if(sizeof($oott[ 'campos '] )> 9){ ?>.formulario { <?php echo
	"/*border-bottom:7pxsolid #".$vars['GENERAL']['BG_COLOR_3'].";*/ "; ?>

}

<?php
}
?>
#inner { <?php echo "border-bottom:7pxsolid #".$vars['GENERAL']['BG_COLOR_3'].";
	"; ?>

}

/*ul.ul_menus li:hover a,ul.ul_menus li:hover,ul.ul_menus li.selected,ul.ul_menus li.selected a
	{
	background-color: #<?php echo$vars['GENERAL']['BG_COLOR_3']; ?>;
	color: #<?php echo$BG_COLOR_3_OPP; ?>;
	text-decoration: none;
}*/
/*
.segunda_barra {
background-color:#EEEEEE;
color:#<?php echo $BG_COLOR_4_OPP;?>;
}
*/
.open_toolbar {
	float: right;
	font-size: 9px;
	color: #CCCCCC;
}

.open_toolbar:hover {
	color: #000000;
}
</style>
<?php
if($_GET['block']=='form'){
?>
<style>
#inner {
	height: 290px;
	overflow: auto;
}

.formulario {
	border: 0;
}

.supra_menu {
	display: none !important;
}

#inner {
	border-bottom: 0;
}

body {
	background: none !important;
}
</style>
<?php
}
if($_GET['block']!='form'){

/*
if($SERVER['browser']=='IE6'){
?>
<style>
.bloque_titulo {
	background-image: none;
}

.div_bloque_cuerpo {
	width: 100%;
	float: none;
	clear: left;
}

.foot {
	float: none;
	clear: left;
	width: 100%;
}
</style>
<?php
include("aviso_ie6.php");
include("foot.php");
echo $HTML_MAIN_FIN;
echo $HTML_ALL_FIN;
exit();

}
*/
// prin($SERVER);
?>
<script>
function edit_init(se,na,va){
new Request({url:"lib/edit_ini.php",method:'post',data:{seccion:se,name:na,value:va},onSuccess:function(eee){
var url='<?php 
list($rurl,$rpath)=explode('?',$SERVER['RUTA']);
echo (enhay($rurl,"maquina.php"))?"maquina.php":$rurl.(($rpath)?'?'.$rpath."&":"?")."rd=".rand();?>'+((window.location.hash)?window.location.hash:'');
//alert(url);
location.href=url;
}}).send();
}
</script>
<div>
<?php

$script_name=$SERVER["ARCHIVO"];
	

echo "<div class='main_content'>";


if((strpos($_SERVER['SCRIPT_NAME'], "login.php")===false)){

echo '<a id="ic_menu" class="bl1 itr i_mm " title="Menú">MENÚ</a>';
echo '<a id="ic_filters" class="bl1 itr i_ff " title="Filtros">FILTROS</a>'; ?>
<script>
window.addEvent('domready',function(){ 
	$("ic_menu").addEvent('click',function(){ $('menu_main').toggleClass('showmenu'); });	
	$("ic_filters").addEvent('click',function(){ $('dfilters').toggleClass('showfilters'); });	
}); 
</script>
<?php
}
if(file_exists($img_logo)){
if(trim($img_logo)!=''){
?><a href="./" class="logo_panel"><img src="<?php echo $img_logo?>" align="absmiddle" border="0" /></a><?php
}
} 
?>
<a href="./" class="link_header"><?php echo str_replace("Panel de Administración","Sistema",$html_titulo);?></a>
<?php
// echo "<div>";

if(
$Open
and ( substr($SERVER['BASE'],-7)=='custom/' or $SERVER['ARCHIVO']=='maquina.php' )
and $_SESSION['edicionpanel']=='1'
and (!in_array($_GET['accion'],array('config','alllistado')))
){
echo "<div id='eth'>";
if(substr($SERVER['BASE'],-7)=='custom/'){
echo $EDITOR_TEXTUAL_CAMPOS;
echo "<script> window.addEvent('domready',function(){ $('jjjson').focus(); }); </script>";
echo '<style>.dredre div textarea { height:16px;}</style>';
} else {
echo $EDITOR_TEXTUAL_OBJETO;
if($_GET['me']=='' and $_GET['open']=='' and $_GET['save']!='campos' and $_GET['accion']==''){
echo "<script> window.addEvent('domready',function(){ $('jjjsonproy').focus(); }); </script>";
}
echo '<style>.dredre div textarea { height:16px;}</style>';
}
echo "</div>";

if((substr($SERVER['BASE'],-7)=='custom/')){

echo "<li id='quickcontrols' class='quickcontrols'>";
if($Open){
echo '<a href="#" class="sss" onclick="javascript:togglerqc();return false;" style="float:right;margin-right:6px;">S</a>';
echo '<a href="maquina.php?me='.$this_me.'#blo_objetos" class="derech">P</a>';
echo '<a href="maquina.php?me='.$this_me.'#edicion_indices_sub" class="derech">C</a>';
echo '<a href="#" onclick="javascript:setqc(\'props\',0);return false;" style="float:right;margin-right:6px;" class="ed_campos">Campos</a>';
echo '<a href="#" onclick="javascript:setqc(\'props\',1);return false;" style="float:right;margin-right:6px;" class="ed_propiedades">Propiedades</a>';
echo "<div class='editar_campos'>";
$_GET['me']=$this_me;
// include("editar_campos.php");
$ot=$objeto_tabla[$this_me];
// include("editar_propiedades.php");
echo "</div>";

echo "<table class='tbl' align=right><tr><td style='border:0;'>";
foreach($indicesA as $inicial=>$indice){
		if($indice=='orden'){
continue;
}

echo "<a id='idid_".$indice."_".$ot['me']."' onclick=\"javascript:modificar_dato_valor('".$this_me."','".$indice."','".(($ot[$indice]=='1')?"0":"1")."'); return false;\" class='letra ". (($ot[$indice]=='1')?"onon":"offoff") ."' title='".strtoupper($indice)."' style='width:auto;' >";
echo str_replace($Replace4Str,$Replace4Ico,$indice);
echo "</a>";
		}
		echo "</td></tr></table>";
	}
}

echo "<script>setqc('props',1);</script>";
}

echo "</li>";

// echo "</div>";

$MEME=($_GET['me'])?$_GET['me']:$this_me;

// include("header_devel.php");

}

if($objeto_tabla[$this_me]['crear_quick']=='1'){ ?><style>
#titulo_crear {
	display: none;
}
/*#linea_crear { display:none; }*/
#abri_cerrar_crear {
	display: none;
}

.linea_form_mensaje {
	display: none;
}
/*.linea_form label { display:none; }*/
.formulario label {
	width: 80px;
}
</style>
	<?php 
	
}

	$ACCESO_PERMITIDO=(($VALIDAR_SESION!='' and $_SESSION['usuario_id']!='') or $_COOKIE['admin']==1)?1:0;

	if($ACCESO_PERMITIDO and $this_me){
/*
 echo '<select>';
foreach($ItemsPAGES as $ip){ echo "<option id='".$ip['id']."' ".(($ip['id']==$_SESSION['page'])?'selected':'').">".$ip['nombre']."</option>>";}
echo '</select>';
*/
if(sizeof($ItemsPAGES)>0){
echo '<ul class="supra_menu">';
if($HAVE_MODULO_INDEPENDIENTE){
echo "<li ".(($ip['id']==$_SESSION['page'])?'class="selected"':'')."><a href='actions.php?accion=changepage&id='>Módulos</a>
 						</li>";
}
foreach($ItemsPAGES as $ip){
echo "<li ".(($ip['id']==$_SESSION['page'])?'class="selected"':'')."><a href='actions.php?accion=changepage&id=".$ip['id']."'>".$ip['nombre']."</a>
		</li>";
}
echo '</ul>';
}

if(sizeof($ItemsWEBS)>0){
echo '<ul class="supra_menu">';
echo "<li ".(($ip['id']==$_SESSION['web'])?'class="selected"':'')."><a href='actions.php?accion=changeweb&id='>Módulos</a>
			</li>";
foreach($ItemsWEBS as $ip){
echo "<li ".(($ip['id']==$_SESSION['web'])?'class="selected"':'')."><a href='actions.php?accion=changeweb&id=".$ip['id']."'>".$ip['nombre']."</a>
</li>";}
echo '</ul>';
}
?>
<?php
/////////////////////
}

echo "&nbsp;";
// include_once($objeto_tabla[$this_me]['onload_include']);
echo $objeto_tabla[$this_me]['onload_script'];

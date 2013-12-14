<?php
set_time_limit(0);

if($vars['INTERNO']['ID_PROYECTO']=='0'){
	$MASTER=true;
} else { 
	$MASTER=false; 
}
	
switch($_GET['tab']){

case "procesos":

include("procesos.php");

break;

case "documentos":

include("documentos.php");

break;
case "libraries":

include("libraries.php");

break;
default:



@$buxx=implode("\n",file("analisis_objetos.txt"));
$analisis_array=json_decode($buxx,true);

$analisis_array['VALORES_CAMPO']['rango']=array('now,+2 years','now,+10 years','-10 years,now','1980,-10 years');
unset($analisis_array['VALORES_CAMPO']['valor']);

$analisis_array['PROPIEDADES_CAMPO'][]='control';
$analisis_array['VALORES_CAMPO']['control']=array('0','1');

$analisis_array['VALORES_OBJETO']['por_linea']=array('1','2','3','4');

$directorio = dir("lib/fotos_prueba/");
while($fichero=$directorio->read()) {
	if($fichero!='.' and $fichero!='..'){
		$librerias_fotosx[]=$fichero;		
	}
}
//prin($analisis_array['VALORES_OBJETO']['archivo_pruebas']);	
$analisis_array['VALORES_OBJETO']['archivo_pruebas']=$librerias_fotosx;
/*
Array
(
    [0] => id
    [1] => fcr
    [2] => fed
    [3] => pos
    [4] => vis
    [5] => inp
    [6] => pas
    [7] => img
    [8] => txt
    [9] => com
    [10] => fch
    [11] => html
    [12] => hid
    [13] => yot
)
*/

?>
<div style="margin-top:0px;">
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


if( $_GET['tabla']!='' and $_GET['accion']=='borrartabla2' ){
	mysql_query("DROP TABLE `".$_GET['tabla']."`",$link);
	redireccionar();
}

if( $_GET['archivo']!='' and $_GET['accion']=='borrararchivos2' ){

	@unlink($DIR_CUSTOM.$_GET['archivo'].".php");
	@unlink($DIR_CUSTOM.$_GET['archivo']."_vista.php");
	redireccionar();

}

?>
</div>
<?php
if($_GET['accion']=='truncatetable' and $_GET['me']!='' ){	
	echo "<div class='loading' id='div_loading'>TRUNCATING ".$_GET['me']." y borrando fotos...</div>"; flush(); 
}
if($_GET['accion']=='alllistado' and ( $_GET['files']!='' or $_GET['files2']!='' ) ){	
	echo "<div class='loading' id='div_loading'>subiendo archivos...</div>"; flush(); 
}
if($_GET['accion']=='updatecode' ){	
	echo "<div class='loading' id='div_loading'>actualizando código...</div>"; flush(); 
}
if($_GET['accion']=='bajarconfig' ){
	echo "<div class='loading' id='div_loading'>bajando archivos de config...</div>"; flush(); 
}
if($_GET['accion']=='subirconfig' ){
	echo "<div class='loading' id='div_loading'>subiendo archivos de config...</div>"; flush(); 
}	
if($_GET['accion']=='updatepanel' ){
	echo "<div class='loading' id='div_loading'>subiendo archivos de custom y carpeta img....</div>"; flush(); 
}
if($_GET['accion']=='importdb' ){
	echo "<div class='loading' id='div_loading'>Importando BD remota....</div>"; flush(); 
}	
if($_GET['accion']=='exportdb' ){
	echo "<div class='loading' id='div_loading'>Exportando BD local....</div>"; flush(); 
}	
?>	
<style>
.bloque_titulo { height:auto; float:left; background-position:bottom left; }
</style>
<div class='div_bloque_cuerpo' >
    <div class="bloque_titulo" style=" width:100%; padding-left:0; padding-right:0;" >
    <?php if($_GET['me']!=''){ echo '<span style="margin-left:5px;">'.$_GET['me'].'</span>'; } else { ?>
	<span style="margin-left:5px;">
    <?php if($_GET['config']=='edit'){ ?>CONFIG<?php } else { ?>MASTER<?php } ?></span>
    <?php } ?>
    </div>
    
<?php
if($_GET['config']!='edit'){
?>    
<div class="segunda_linea">    
ANÁLISIS 
<?php echo $server_place?>:
<?php echo ($link)?"<span style='color:green;'>CONECCION MYSQL OK</span>":"<span style='color:red;'>CONECCION MYSQL KO</span>"; ?>
 | 
<?php
//	echo "<span id='ftpchek'>checkeando FTP...</span>\n";
	flush();
	if($_GET['check']=='ftp'){
	ftp_set_option($id_con, FTP_TIMEOUT_SEC, 20);
	$conn_id = ftp_connect($ftp_files_host,21,20);
	$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass);
	ftp_close($conn_id);
	echo ($login_result)?"<span style='color:green;'>CONECCION FTP OK</span>":"<span style='color:red;'>CONECCION FTP KO</span>"; 
	} else { echo "<a href='?check=ftp'>checkear conexión FTP y crear directorios de imagenes</a>"; }
	
	echo " | <a href='?accion=creararchivostablaall'>CREAR TODO</a>"
?>
</div>
<script>
function paint_on(el){
$(el).setStyles({'background-color':'#E7EA7D'});
}
function paint_out(el){
$(el).setStyles({'background-color':'white'});
}
</script>
<?php
//INICIO
//if($_GET['me']==''){

		$archivos2=array();	
		@mkdir("./$DIR_CUSTOM");
		$directorio = dir("./$DIR_CUSTOM");
		while($fichero=$directorio->read()) {
			if($fichero!='.' and $fichero!='..'){
			$archivos2[]=$fichero;
			} 
		}
		$directorio->close();		
	

		$tablas_creadas2=$tablas_creadas;
		foreach($objeto_tabla as $ot){
			$tablas2[]=$ot['tabla'];
			$archivos3[]=$ot['archivo'].".php";
			$archivos4[]=$ot['archivo']."_vista.php";			
		}
		
		$archivos5=array_merge($archivos3,$archivos4);		
		
		$archivos6=array();
		foreach($archivos2 as $ar){
			if(!in_array($ar,$archivos5) and $ar!='error_log' and (strpos($ar, "_vista")===false) ){ $archivos6[]=str_replace(".php","",$ar); }
		}	
		
		$tabla3=array();
		foreach($tablas_creadas2 as $ta){
			if(!in_array($ta,$tablas2)){ $tabla3[]=$ta; }
		}	
		$row=1;	
		echo "<br>";
		echo "<table class='tbl' cellspacing=0 cellpadding=0 border=0 style='margin-left:10px;border:1px solid #000;'>";
		echo "<tr>
				<th style='border:0;'>&nbsp;</th>
				<th>Sync</th>
				<th>Propiedades</th>
				<th>Objeto</th>
				<th>Archivo</th>
				<th>Tabla</th>
				<th>Ambos</th>
				<th>Grupo</th>
			  </tr>";		  
		
		
$primer_archivo=1;		

										  
foreach($objeto_tabla as $ot){

			if($_GET['me']=='' or $_GET['me']==$ot['me']){
		
			$archivo1=$ot['archivo'].".php";
			$archivo2=$ot['archivo']."_vista.php";	
			
			$archivos_creados = (file_exists($DIR_CUSTOM.$archivo1) and file_exists($DIR_CUSTOM.$archivo2))?true:false;
						
			$tabla_creada	  = (in_array($ot['tabla'],$tablas_creadas))?true:false;
			$ambos_creados = ($archivos_creados and $tabla_creada)?true:false;

			if($vars['GENERAL']['FILE_DEFAULT']=='maquina.php' and $ambos_creados and $ot['menu']=='1' and $primer_archivo==1){	
				$primer_archivo=0;
				$vars['GENERAL']['FILE_DEFAULT']=$ot['archivo'];
				write_php_ini($vars,"config/config.ini");
			}
			$archivolink=($ambos_creados)?'<a href="'.$DIR_CUSTOM.$archivo1.'" class="creado">file</a> ':"";

			$ocultar=($ot['disabled']==1)?'visibility:hidden;':'';
			echo "<tr id='trr_".$ot['me']."' onmouseover=\"paint_on(this.id);\" onmouseout=\"paint_out(this.id);\" >";
			echo "<td style='text-align:left;'>$row</td>"; 
			echo '<td>';
			
			
			$cam='sincromysql';
			echo '<a 
			href="?set='. ( ($saved[$ot['me']][$cam]==1)?"0":"1") .'&cam='.$cam.'&mi='.$ot['me'].'"
			class="'. (($saved[$ot['me']][$cam]=='1')?"onon":"offoff") .'"
			>Sync</a>';
			echo '</td>';
			echo '<td>';
			
			foreach($indicesA as $inicial=>$indice){
			echo "<a href='#' onclick=\"javascript:modificar_dato_valor('".$ot['me']."','".$indice."','".(($ot[$indice]=='1')?"0":"1")."'); return false;\" rel='nofollow' class='letra ". (($ot[$indice]=='1')?"onon":"offoff") ."' title='".strtoupper($indice)."' >$inicial</a>";
			}
			
			echo '</td>';
			$row++;
			echo '<td style="text-align:left;"><b style="color:#777;"><a href="?me='.$ot['me'].'" 
			style="float:left; margin-right:5px; '. ( (in_array($ot['me'],$BBB))?'color:#666;':'color:#000;font-weight:bold;font-size:12px;') .'">'.$ot['me']."</a><span style='font-weight:normal;color:#0B1069;'>(". ( contar($ot['tabla'],"where 1") ). ')</span></b></td>';		
			//echo '<td><b><a href="?me='.$ot['me'].'" style="float:left; margin-right:5px;">'.$ot['tabla'].'</a></b></td>';
			
			echo '<td style="'.$ocultar.'">' . ( ($archivos_creados)?"<span class='creado'>done</span> <a href='?me=".$ot['me']."&accion=borrararchivos&maquina=1'>del</a>&nbsp;<a href='?me=".$ot['me']."&accion=recreararchivos&maquina=1'>redo</a>":"<span class='nocreado'>not created</span> <a href='?me=".$ot['me']."&accion=creararchivos&maquina=1' >create</a>"). '</td>';
			echo '<td style="'.$ocultar.'">';
			
			if($ot['bloqueado']=='1'){
				echo ( $tabla_creada )?'<span class="creado">done</span> bloqueado':'<span class="nocreado"> -- </span> <a href="?me='.$ot['me'].'&accion=creartabla&maquina=1" >create</a>';
			} else {

				echo ( $tabla_creada )?'<span class="creado">done</span> <a href="?me='.$ot['me'].'&accion=borrartabla&maquina=1" >del</a>':'<span class="nocreado">not created</span> <a href="?me='.$ot['me'].'&accion=creartabla&maquina=1" >create</a>';
				$QQuerys=get_columns_from_objeto($objeto_tabla[$ot['me']]);
				if(sizeof($QQuerys)>0){
					echo ( $tabla_creada )?'&nbsp;<a title="'. (implode("\n",$QQuerys ) ).'" href="?me='.$ot['me'].'&accion=actualizartabla&maquina=1" style="background-color:#F0C;color:#FFF;" >update</a>':'';
				}

			//prin(sizeof(get_uniques_from_tabla($objeto_tabla[$ot['me']]['tabla'])));
				
			}	
	
				
			echo '</td>';
			echo '<td  style="'.$ocultar.'">';
			
			if($ot['bloqueado']=='1'){
				echo ( $tabla_creada and $archivos_creados )?'':'<a href="?me='.$ot['me'].'&accion=creararchivostabla&maquina=1" style="color:#000;" >crear archivos y tablas</a>';
			} else {
				if ( $tabla_creada and $archivos_creados ){ 
					echo '<a href="?me='.$ot['me'].'&accion=borrararchivostabla&maquina=1" >del both</a>';
				}
				if ( !$tabla_creada and !$archivos_creados ){ 
					echo '<a href="?me='.$ot['me'].'&accion=creararchivostabla&maquina=1" >create both</a>';
				}	
			}			
			
			echo '</td>';
			
	
			echo '<td  style="'.$ocultar.'" style="color:brown;">';
			echo $ot['grupo'];
			echo '</td>';	
			echo "</tr>";
			
			}
			
		}		
	
	
	
	
		if($_GET['me']==''){
		
			foreach($tabla3 as $ta){
			  echo "<tr>";
			  echo "<td style='text-align:left;'>$row</td>"; $row++;
			  echo "<td></td>";
			  echo "<td></td>";
			  echo "<td style='text-align:left;'>".$ta."</td>";
			  echo "<td></td>";
			  echo "<td><span class='creado'>creado</span> <a href='?tabla=".$ta."&accion=borrartabla2&maquina=1'>borrar</a></td>";
			  echo "<td></td>";
			  echo "</tr>";
			}
		
			foreach($archivos6 as $ar){
			  echo "<tr>";
			  echo "<td style='text-align:left;'>$row</td>"; $row++;
			  echo "<td></td>";
			  echo "<td></td>";	  
			  echo "<td style='text-align:left;'>".$ar."</td>";
			  echo "<td><span class='creado'>creado</span> <a href='?archivo=".$ar."&accion=borrararchivos2&maquina=1'>borrar</a></td>";
			  echo "<td></td>";
			  echo "<td></td>";
			  echo "</tr>";
			}	
		
		}
		
		echo "</table>";
}

if($_GET['me']==''){
?>
<style>
.codigo_sql {
background-color:#333333;
clear:left;
color:#FFFFFF;
font-size:11px;
height:113px;
width:99%;
}
</style>
<?php
if($_POST['consulta']!=''){
$consultasA=explode(";",$_POST['consulta']);
foreach($consultasA as $sqle){
echo "<div style='margin-bottom:15px;'>".nl2br(str_replace(";;",";",$sqle.";"))."<br>". ( (mysql_query($sqle.";",$link))?"<b style='color:green;'>OK</b>":"<b style='color:red;'>KO</b>" )."</div>";
}
}
if($_GET['config']!='edit'){
?>
<div style='margin:10px 0 1px; font-size:10px;'>Mysql</div>
<form action="maquina.php" method="post">
<div class="codigo_areas" id="codigo_area_matriz" >
	<textarea id="codigo_sql" class="codigo_sql" style="height:20px;" onclick="this.setStyles({'height':'80px'});this.focus();" name="consulta"></textarea>
</div>
<input value="enviar query" onclick="enviar_query();" type="submit"  />
</form>
<?php    
}
}

if($_GET['me']!=''){

	echo "<div style='margin-bottom:10px;'>
	<a style='margin-left:10px;font-size:10px;' href='?me=".$_GET['me']."&accion=truncatetable'>truncate tabla y borrar archivos de fotos</a>
	</div>";	
	echo "<div style='margin-bottom:10px;'>
	<a style='margin-left:10px;font-size:10px;' href='?me=".$_GET['me']."&accion=showimagenes'>show fotos</a>
	</div>";
	echo "<div style='margin-bottom:10px;'>
	<a style='margin-left:10px;font-size:10px;' href='?me=".$_GET['me']."&accion=showimagenes&verificar=1'>show fotos verificando dimensiones</a>
	</div>";	
	echo "<div style='margin-bottom:10px;'>
	<a style='margin-left:10px;font-size:10px;' href='?me=".$_GET['me']."&accion=resample'>resample fotos</a>
	</div>";	

}




?>

<?php if($_GET['config']=='edit'){ ?>

<style>
.config_table { font-family:Arial;font-size:12px; margin:20px 0px 2px 30px; float:left; }
.config_table  th { font-weight:bold; padding-top:10px; color:#999999; text-align:left; }
.config_table  td { padding:0 0 0 30px; text-align:left; border-bottom:1px dotted #CCCCCC; font-size:11px; }
.config_table  td.name { font-weight:bold;  }
.config_table  td.value { width:332px; padding-left:30px; }
.config_table  td.value li { list-style:none; border:1px solid #FFFFFF; cursor:default;}
.config_table  td.value li:hover { background-color:#EEEEEE; border:1px solid #CCD6D6; }
.config_table  td input { border:1px solid #CCD6D6; padding:0px; font-size:12px; font-family:Arial; margin:-1px 0px; background-color:#FFFFCC; }
</style>
<?php
/*
$status = "";
if ($_POST["action"] == "upload") {
    // obtenemos los datos del archivo 
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];	    
	echo file_exists($_FILES['archivo']['tmp_name'])?"existe ".$_FILES['archivo']['tmp_name']:"no existe ".$_FILES['archivo']['tmp_name'];
	echo "<br>";
	echo "<i>".filesize($_FILES['archivo']['tmp_name'])."</i><br>";	
    if ($archivo != "") {
        // guardamos el archivo a la carpeta files
        //if (copy($_FILES['archivo']['tmp_name'],$archivo)) {
        if (move_uploaded_file($_FILES['archivo']['tmp_name'],$archivo)) {
            $status = "Archivo subido: <b>".$archivo."</b>";
        } else {
            $status = "Error al subir el archivo ".$_FILES['archivo']['tmp_name']."->".$archivo;
        }
    } else {
        $status = "Error al subir archivo 2";
    }
	echo "<b>".$status."</b><br>";
	@unlink($archivo);
}

?>
<a href="maquina.php?config=edit">Verificar upload</a><br />
<form action="maquina.php?config=edit&uploading=1" method="post" enctype="multipart/form-data" id="form_prueba_upload">
  <input name="archivo" type="file" size="35" />
  <input name="enviar" type="submit" value="Upload File" />
  <input name="action" type="hidden" value="upload" />     
</form>
<?php
*/





$EXCEPCIONES['GENERAL']=array('meta_keyword','meta_descripcion','c_interfaceLang','BG_COLOR_2','DIRECTORIO_IMAGENES','DIR_IMG_TEMP','DIR_IMG_UPLOAD','DIR_CUSTOM','DIRECTORIO_PANEL');
//$EXCEPCIONES['INTERNO']=array('ID_PROYECTO','CARPETA_PROYECTO');
$EXCEPCIONES['INTERNO']=array('CARPETA_PROYECTO');

$vars=parse_ini_file("config/config.ini",true);
echo "<div style='float:left;width:50%; padding-left:10px;'>config.ini $get_num_vars</div>";
echo "<table class='config_table'>";
echo "<tr><th colspan=2 style='color:#000;'>Editar archivo config.ini</td><td align=right style='border:0;'><a href='?config=edit'>refresh</a></td></tr>";
echo "<tr><td colspan=3 height=10></td></tr>";

$GENERAL=$vars['GENERAL'];
unset($vars['GENERAL']);
$vars=array_merge(array("GENERAL"=>$GENERAL),$vars);

foreach($vars as $seccion=>$variables){


echo "<tr><th colspan=2>$seccion</th></tr>";
foreach($variables as $name=>$value){

//if(sizeof($EXCEPCIONES[$seccion])){
if(in_array($name,$EXCEPCIONES[$seccion])){
$excepcion="style='display:none;'";
$excepcion1="";
$excepcion2="style='color:#ccc;'";
} else {
$excepcion="";
$excepcion1="  onclick=\"javascript:edit_ini('".$seccion."_".$name."');\"   ";
$excepcion2="";
}
//}

echo "<tr><td class='name' $excepcion2 >";
if(in_array($name,array("BG_COLOR_1","BG_COLOR_2","BG_COLOR_3","BG_COLOR_4","LINK_COLOR"))){ 
echo "<span style='float:right;font-size:26px;background-color:#".$value.";color:#".$value.";width:10px;height:10px;border:1px solid #000000;'></span>"; 
}
echo $name;
echo "</td>
<td class='value'>
<li $excepcion1 $excepcion2 id='span_".$seccion."_".$name."'>$value</li>";
switch($name){
case "FILE_DEFAULT":
echo "<select id='input_".$seccion."_".$name."' style='width:100%;display:none;' >";
foreach($objeto_tabla as $ot){
if( $ot['menu']=='1' or ($ot['archivo_hijo']=='' and $ot['menu_label']!='') ){
$archivo1=$ot['archivo'].".php";
echo "<option ".( ($archivo1==$value)?"selected":"")." value='".$archivo1."'>".$archivo1." - ".$ot['menu_label']."</option>";
}
}
echo "</select>";
break;
case "BG_IMAGE":	
echo "<select id='input_".$seccion."_".$name."' style='width:100%;display:none;' 
 	onchange='setbg(this.value);'
	onkeyup='setbg(this.value);'
 	>";
	$CLI=($vars['INTERNO']['ID_PROYECTO']=="0")?'':'../../panel/';
	$directorio_s = dir($CLI."img/bgs/");
	
	while($fichero=$directorio_s->read()) {
		if($fichero!='.' and $fichero!='..'  and !is_dir($CLI."img/bgs/".$fichero) ){
			$ooppp[$fichero]= "<option ".( ("img/bgs/".$fichero==$value)?"selected":"")." value='"."img/bgs/".$fichero."'>img/bgs/".$fichero."</option>";			
		}		
	}
	$directorio_s->close();		
ksort($ooppp);	
echo implode("",$ooppp);
echo "</select>";
break;
case "fotos_de_prueba":
echo "<select id='input_".$seccion."_".$name."' style='width:100%;display:none;' >";
$directorio = dir("lib/fotos_prueba/");
while($fichero=$directorio->read()) {
	if($fichero!='.' and $fichero!='..'){
		$librerias_fotos[]=$fichero;		
	}
}	
foreach($librerias_fotos as $archivo1){
echo "<option ".( ($archivo1==$value)?"selected":"")." value='".$archivo1."'>".$archivo1."</option>";
}
echo "</select>";
break;
default:
echo "<input id='input_".$seccion."_".$name."' value='$value' type='text' style='width:100%;display:none;'/>";
break;
}
echo "</td>
<td>
<a $excepcion id='editar_".$seccion."_".$name."' onclick=\"javascript:edit_ini('".$seccion."_".$name."'); return false;\" rel='nofollow' href='#'>editar</a>
<a style='display:none;' id='guardar_".$seccion."_".$name."' onclick=\"javascript:guardar_ini('".$seccion."','".$name."'); return false;\" rel='nofollow'  href='#'>guardar</a>
<a style='display:none;' id='cancelar_".$seccion."_".$name."' onclick=\"javascript:cancel_ini('".$seccion."_".$name."'); return false;\" rel='nofollow' href='#'>cancelar</a>
</td>
</tr>";
//}
}
}
echo "</table>";




?>

<script>
var editing='';
function edit_ini(sena){
if($('span_'+editing)){
cancel_ini(editing);
}
$0('span_'+sena);
$('input_'+sena).value=$('span_'+sena).innerHTML;
$1('input_'+sena);
$0('editar_'+sena);
$1('cancelar_'+sena);
$1('guardar_'+sena);
editing=sena;
}
function cancel_ini(sena){
$1('span_'+sena);
$0('input_'+sena);
$1('editar_'+sena);
$0('cancelar_'+sena);
$0('guardar_'+sena);
}
function setbg(bg){
$(document.body).setStyles({'background-image':'url(http://crazyosito.com/'+bg.replace('img/','')+')'});
}
function guardar_ini(se,na){
var sena=se+"_"+na;
$('span_'+sena).innerHTML=$('input_'+sena).value;
$0('cancelar_'+sena);
$0('guardar_'+sena);

	datos = { 
				seccion : se,
				name	: na,
				value	: $v('input_'+sena)
			};	
	new Request({url:"lib/edit_ini.php", method:'post', data:datos, onSuccess: function(eee){

	cancel_ini(sena);	

	} } ).send();
	
}
</script>

<?php } elseif($_GET['ver']=='phpinfo'){

if(function_exists("apache_get_modules")){
echo "<style> .lista_modulos { list-style:decimal; } </style>";
echo "<div style='clear:left;'>";
echo "<h1>Módulos de Apache</h1><ul style='padding-left:30px;'>";
$modulos=apache_get_modules();
foreach($modulos as $modulo){
echo "<li class='lista_modulos'>";
switch($modulo){
case "mod_rewrite": echo "<span style='color:red;'>".$modulo."</span>"; break;
case "mod_expires": echo "<span style='color:blue;'>".$modulo."</span>"; break;
default:
echo $modulo;
break;
}
echo "</li>";
}
echo "</ul>";

echo "</div>";
}

//phpinfo();
phpinfo();

foreach($_SERVER as $AAAA=>$BBBB){

echo "<div><b style='width:200px; float:left;'>$AAAA</b>: $BBBB</div>";

}

} else { ?>


<?php if($_GET['me']!=''){ ?>

<?php 

if( $_GET['me']!='' and $_GET['accion']=='resample' ){
	
	$ftp_files_host=$vars['REMOTE_FTP']['ftp_files_host'];
	$ftp_files_user=$vars['REMOTE_FTP']['ftp_files_user'];
	$ftp_files_pass=$vars['REMOTE_FTP']['ftp_files_pass'];
	$ftp_files_root=$vars['REMOTE_FTP']['ftp_files_root'];

	$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['me']]);

	$imagen=$datos_tabla['imagenes'][0];
	
	$items=select($datos_tabla['id'].",".$datos_tabla['fcr'].",".$datos_tabla['fed'].",".$imagen,$datos_tabla['tabla'],"where 1",0);
		
	foreach($items as $tt=>$item){
		
		if(1){
	
			foreach($datos_tabla['imagenes'] as $imagen){	
			
				$tamas=explode(",",$datos_tabla[$imagen]['tamanos']);
						
				$num_tamas=sizeof($tamas);		
				
				$Original=str_replace('//','/',str_replace('_1.','.',get_imagen($datos_tabla[$imagen]['carpeta'],$item[$datos_tabla['fcr']],$item[$imagen],'1')));
				$Ima['original']=$ftp_files_root.str_replace("$httpfiles","",get_imagen($datos_tabla[$imagen]['carpeta'],$item[$datos_tabla['fcr']],$item[$imagen],$i));
	
				for($i=1;$i<=$num_tamas+1;$i++){
				$Ima[$i]=str_replace("//","/",$ftp_files_root.str_replace("$httpfiles","",get_imagen($datos_tabla[$imagen]['carpeta'],$item[$datos_tabla['fcr']],$item[$imagen],$i)));
				}
				
				echo "<div style='background-color:grey;color:white;'>resampling ".str_replace('_1.','.',get_imagen($datos_tabla[$imagen]['carpeta'],$item[$datos_tabla['fcr']],$item[$imagen],'1'))."</div>";
				
				grabar_imagen("upload_".$imagen,$Original,$datos_tabla['tabla'],$_GET['me'],str_replace("\\","",$item[$datos_tabla['id']]));
				$Imas[]=$Ima;
				eliminar_imagenes_from_array($Imas);
				
				unset($Ima);		
				unset($Imas);		
				
			}		
		
		}
		
	}
	
	
}

if( $_GET['me']!='' and $_GET['accion']=='showimagenes' ){


	$all=procesar_objeto_tabla($objeto_tabla[$_GET['me']]);
	
	foreach($all['imagenes'] as $imagen){	
		
		$items=select($all['id'].",".$all['fcr'].",".$all['fed'].",".$imagen,$all['tabla'],"where 1",0);
		
		$tamas=explode(",",$all[$imagen]['tamanos']);
			
		$num_tamas=sizeof($tamas);
					
		foreach($items as $r=>$item){
		
			//$Original=str_replace('_1.','.',get_imagen($all[$imagen]['carpeta'],$item[$all['fcr']],$item[$imagen],'1'));
			$Ima['original']=str_replace('_1.','.',get_imagen($all[$imagen]['carpeta'],$item[$all['fcr']],$item[$imagen],'1'));


			for($i=1;$i<=$num_tamas;$i++){
			$Ima[$i]=get_imagen($all[$imagen]['carpeta'],$item[$all['fcr']],$item[$imagen],$i);
			}
			//prin($Original);
			//echo "update $Original<br>";
			//prin($imagen.",".$Original.",".$all['tabla'].",".$_GET['me'].",".str_replace("\\","",$item[$all['id']])."<br>");

			//prin($Ima);
			$Imas[$item[$all['id']]]=$Ima;
			unset($Ima);
			
			
		}
		$tamas=array_merge(array("original"),$tamas);
		echo "<table style='background-color:#DDD;border-collapse:separate;'>";	
		echo "<tr>";
		echo "<td style='border:1px solid #000;font-size:10px;font-weight:bold;' >&nbsp;</td>";
		foreach($tamas as $tami){
		echo "<td style='border:1px solid #000;' valign=middle align=center><b>$tami</b></td>";
		}
		echo "</tr>";			
		foreach($Imas as $r=>$Imas2){
		echo "<tr>";
		echo "<td style='border:1px solid #000;font-size:10px;font-weight:bold;' valign=middle align=center>$r</td>";
		foreach($Imas2 as $ro=>$II){

		if($_GET['verificar']=='1'){			
			list($ancho, $alto, $tipo, $atributos) = getimagesize($II);
			if($ro==0){	$anchoOriginal=$ancho;	$altoOriginal =$alto; $chek="#FFF"; $bordeco="#000"; }
			else {	
				$bordeco="#FFF";
				list($an,$al)=explode("x",$tamas[$ro]); 
				if( 
				//	($anchoOriginal>$an and $altoOriginal>$al) and 
					($an==$ancho or $al==$alto) 
				){ $chek='#C2F1BF'; } else { $chek='#C6795D'; }
			}
		}
		echo "<td style='border:1px solid $boderco;position:relative; margin:1px; background-color:$chek;' valign=middle align=center>";
		if($_GET['verificar']=='1'){			
			if($chek!="#FFF"){			
				echo "<div><b>".$ancho."x".$alto."</b> en ".$an."x".$al."</div>";
			} else {
				echo "<div>".$ancho."x".$alto."</div>";			
			}
		}
		echo "<img width='50%' src='".$II."'>
		</td>";
		}
		echo "</tr>";
		}
	    echo "</table>";
				
	}			
	
}

$all=procesar_objeto_tabla($objeto_tabla[$_GET['me']]);	

?>

<?php    
    
foreach($objeto_tabla[$_GET['me']]['campos'] as $ca){


	if(
	($ca['campo']!=$all['pos'])and
	($ca['campo']!=$all['vis'])and
	($ca['campo']!=$all['id'])and
	($ca['campo']!=$all['fed'])and
	($ca['campo']!=$all['fcr'])
	){
		if($ca['constante']!='1'){	
			$gon[]=$ca;
			//echo $ca['campo']."<br>";
		}		
	}
	
	
	if(($ca['campo']!=$all['pos'])and($ca['campo']!=$all['vis'])and($ca['campo']!=$all['id'])){
		if( ($ca['campo']==$all['fed']) or ($ca['campo']==$all['fcr']) ){
			$li6A[]="'".$ca['campo']."'=>\"now()\"";
		}else{
			$li6A[]="'".$ca['campo']."'=>\"\$".strtoupper($ca['campo'])."\"";	
		}
	}
	
	if(($ca['campo']!=$all['fcr'])and($ca['campo']!=$all['pos'])and($ca['campo']!=$all['vis'])and($ca['campo']!=$all['id'])){
		if(($ca['campo']==$all['fed'])){
			$li6B[]="'".$ca['campo']."'=>\"now()\"";
		}else{
			$li6B[]="'".$ca['campo']."'=>\"\$".strtoupper($ca['campo'])."\"";	
		}	}
				
}

//prin($gon);

foreach($all['form'] as $ca){

	if(($ca['campo']!=$all['fed'])and($ca['campo']!=$all['pos'])and($ca['campo']!=$all['vis'])){
	$li6[]=$ca['campo'];
	}
	if(($ca['campo']!=$all['fed'])and($ca['campo']!=$all['id'])and($ca['campo']!=$all['pos'])and($ca['campo']!=$all['vis'])){
	$li7[]=$ca['campo'];
	}
				
}

$li6=array_merge(array($all['id']),$li6,array($all['fcr']));

?>
<style>
.codigo_ejemplo { clear:left; width:99%; height:113px; color:#FFFFFF; background-color:#333; font-size:11px; }

.codigos_copiar a { 
background-color:#062539;
color:#FFFFFF;
float:left;
font-weight:bold;
margin:0 2px 3px 0;
padding:3px;
font-size:10px; 
}
.codigos_copiar a.selected { color:#FFED00; }
</style>
<script>
function recalcular(txt){
var arrtxt= new Array();
var txtv=txt.value;
arrtxt=txtv.split("\n");
var txtheight=arrtxt.length;
txt.setStyles({'height':txtheight*15});
}
function show_code(tab){
$$('.codigo_tabs').removeClass('selected');
$$('.codigo_areas').setStyles({'display':'none'});
if(tab){
$('codigo_tab_'+tab).addClass('selected');
$('codigo_area_'+tab).setStyles({'display':''});
recalcular($('codigo_text_'+tab));
}
}

window.addEvent((window.ie)?'load':'domready',function(){
//recalcular($('codigo_text_matriz'));
});
</script>
<div class="cuadro_codigo bloque codigos_copiar" style="background-color:#D3E8FE;">
<?php
$imagenes2=array();
$imagenes=$all['imagenes'];
if(sizeof($imagenes)>0){
	foreach($imagenes as $imagen){
		$imagenes2[$imagen]=$all[$imagen];
	}
}
//echo "|".$all['archivo_hijo']."|";
foreach($objeto_tabla as $ooo => $ttt){
if($ttt['archivo']==$all['archivo_hijo']){

$all2=procesar_objeto_tabla($objeto_tabla[$ttt['me']]);	

foreach($all2['form'] as $ca){
	if(($ca['campo']!=$all2['fed'])and($ca['campo']!=$all2['pos'])and($ca['campo']!=$all2['vis'])){
	$li62[]=$ca['campo'];
	}
	if(($ca['campo']!=$all2['fed'])and($ca['campo']!=$all2['id'])and($ca['campo']!=$all2['pos'])and($ca['campo']!=$all2['vis'])){
	$li72[]=$ca['campo'];
	}	
}

$li62=array_merge(array($all2['id']),$li62,array($all2['fcr']));

}
}
//print_rr($all2);
?>
	<div style="position:relative; height:auto; padding:2px 60px 10px 3px;">
    
    <a href="#" class="codigo_tabs selected" id="codigo_tab_matriz" rel="nofollow" onclick="javascript:show_code('matriz'); return false;">MATRIZ</a>
    <a href="#" class="codigo_tabs" id="codigo_tab_matriz_paginada" rel="nofollow" onclick="javascript:show_code('matriz_paginada'); return false;">MATRIZ PAGINADA</a>
    <a href="#" class="codigo_tabs" id="codigo_tab_fila" rel="nofollow" onclick="javascript:show_code('fila');  return false;" >FILA</a>
    <a href="#" class="codigo_tabs" id="codigo_tab_dato" rel="nofollow" onclick="javascript:show_code('dato');  return false;" >DATO</a>
    
    <a href="#" class="codigo_tabs" id="codigo_tab_sub_select" rel="nofollow" onclick="javascript:show_code('sub_select');  return false;" >SUB_SELECT</a>
    <a href="#" class="codigo_tabs" id="codigo_tab_sub_select_fila" rel="nofollow" onclick="javascript:show_code('sub_select_fila');  return false;" >SUB_SELECT_FILA</a>
    <a href="#" class="codigo_tabs" id="codigo_tab_sub_select_dato" rel="nofollow" onclick="javascript:show_code('sub_select_dato');  return false;" >SUB_SELECT_DATO</a>
    
    <a href="#" class="codigo_tabs" id="codigo_tab_items" rel="nofollow" onclick="javascript:show_code('items'); return false;" >ITEMS</a>

    <a href="#" class="codigo_tabs" id="codigo_tab_fecha_formato" rel="nofollow" onclick="javascript:show_code('fecha_formato'); return false;" >FECHA_FORMATO</a>    
    <a href="#" class="codigo_tabs" id="codigo_tab_limit_string" rel="nofollow" onclick="javascript:show_code('limit_string'); return false;" >LIMIT_STRING</a> 
        
    <a href="#" class="codigo_tabs" id="codigo_tab_contar" rel="nofollow" onclick="javascript:show_code('contar');  return false;" >CONTAR</a>
    <a href="#" class="codigo_tabs" id="codigo_tab_insert" rel="nofollow" onclick="javascript:show_code('insert');  return false;" >INSERT</a>
    <a href="#" class="codigo_tabs" id="codigo_tab_update" rel="nofollow" onclick="javascript:show_code('update'); return false;" >UPDATE</a>
    <a href="#" class="codigo_tabs" id="codigo_tab_delete" rel="nofollow" onclick="javascript:show_code('delete'); return false;" >DELETE</a>
        
    <a href="#" class="codigo_tabs" id="codigo_tab_formulario_publico" rel="nofollow" onclick="javascript:show_code('formulario_publico'); return false;" >FORMULARIO PUBLICO</a>     
    <a href="#" style=" position:absolute; right:4px; top:2px;" rel="nofollow" onclick="javascript:show_code(); return false;" >CERRAR</a>
    
    <div style="clear:both; height:1px; font-size:1px;">&nbsp;</div>
    
	</div>
    <div class="codigo_areas" id="codigo_area_matriz" >
	<textarea id="codigo_text_matriz" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();recalcular($('codigo_text_matriz'));" readonly="true" style="height:50px;">$items= select(
        "<?php echo implode($li6,",")?>"
        ,"<?php echo $all['tabla']?>"
        ,"where 1 and  <?php echo ($all['vis']!='')?$all['vis']."='1'":""?> order by <?php echo $all['id']?> asc limit 0,100"
        ,0
        <?php if($all['archivo_hijo']!='' or sizeof($imagenes2)>0 ){ ?>,array(
        	<?php if($all['archivo_hijo']!=''){ ?>'sub_select'=>array('sub_select'=>array(
                			    'campos'=>"<?php echo implode($li62,",")?>"
                                	    ,'tabla' =>"<?php echo $all2['tabla']?>"
                                	    ,'donde' =>"where <?php echo $all2['foreig']?>='{<?php echo $all2['id']?>}' and <?php echo ($all2['vis']!='')?$all2['vis']."='1'":""?> order by <?php echo $all2['id']?> asc limit 0,100"
                                       	    ,'debug' =>0
                                            )
                                        )<?php $coma0=","; }
				$ttff=1;
				foreach($imagenes2 as $campo=>$imageD){ 
				$sufijo=($ttff==1)?"":"_".$ttff;
				$ttff++;
				$tot_tam=sizeof(explode(",",$imageD['tamanos']));
				$numArr=range(1,$tot_tam);
				$numStr=implode(",",$numArr);
               ?>
               
                <?php echo $coma0;?>'carpeta<?php echo $sufijo;?>'=>'<?php echo $imageD['carpeta'];?>'
                ,'tamano<?php echo $sufijo;?>'=>'[<?php echo $numStr;?>]'
                ,'dimensionado<?php echo $sufijo;?>'=>'[<?php echo $imageD['tamanos'];?>]'
                ,'centrado<?php echo $sufijo;?>'=>'[0|1]'
                ,'get_atributos<?php echo $sufijo;?>'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta<?php echo $sufijo;?>}'
                                            ,'fecha'=>'{<?php echo $all['fcr'];?>}'
                                            ,'file'=>'{<?php echo $campo;?>}'
                                            ,'tamano'=>'{tamano<?php echo $sufijo;?>}'
                                            ,'dimensionado'=>'{dimensionado<?php echo $sufijo;?>}'
                                            ,'centrado'=>'{centrado<?php echo $sufijo;?>}'
                                            )
                                        )
                ,'get_archivo<?php echo $sufijo;?>'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta<?php echo $sufijo;?>}'
                                            ,'fecha'=>'{<?php echo $all['fcr'];?>}'
                                            ,'file'=>'{<?php echo $campo;?>}'
                                            ,'tamano'=>'{tamano<?php echo $sufijo;?>}'
                                            )
                                        )
        <?php } ?>      	    
    
              )
        <?php } ?>);</textarea>    
    </div>    
    
    <div class="codigo_areas" id="codigo_area_matriz_paginada" style="display:none;" >
	<textarea id="codigo_text_matriz_paginada" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();recalcular($('codigo_text_matriz'));" readonly="true" style="height:50px;">$matriz = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"10"
            ,'anterior'=>"&laquo;anterior"
            ,'siguiente'=>"siguiente&raquo;"
            ,'enlace'=>"?pag="
            ,'procesar_url'=>[0|1]
            //,'onclick'=>"?pag="
        )
        ,"<?php echo implode($li6,",")?>"
        ,"<?php echo $all['tabla']?>"
        ,"where 1 and  <?php echo ($all['vis']!='')?$all['vis']."='1'":""?> order by <?php echo $all['id']?> asc"
        ,0
        <?php if($all['archivo_hijo']!='' or sizeof($imagenes2)>0 ){ ?>,array(
        	<?php if($all['archivo_hijo']!=''){ ?>'sub_select'=>array('sub_select'=>array(
                			    'campos'=>"<?php echo implode($li62,",")?>"
                                	    ,'tabla' =>"<?php echo $all2['tabla']?>"
                                	    ,'donde' =>"where <?php echo $all2['foreig']?>='{<?php echo $all2['id']?>}' and <?php echo ($all2['vis']!='')?$all2['vis']."='1'":""?> order by <?php echo $all2['id']?> asc limit 0,100"
                                       	    ,'debug' =>0
                                            )
                                        )<?php $coma0=","; }
				$ttff=1;
				foreach($imagenes2 as $campo=>$imageD){ 
				$sufijo=($ttff==1)?"":"_".$ttff;
				$ttff++;
				$tot_tam=sizeof(explode(",",$imageD['tamanos']));
				$numArr=range(1,$tot_tam);
				$numStr=implode(",",$numArr);
               ?>
               
                <?php echo $coma0;?>'carpeta<?php echo $sufijo;?>'=>'<?php echo $imageD['carpeta'];?>'
                ,'tamano<?php echo $sufijo;?>'=>'[<?php echo $numStr;?>]'
                ,'dimensionado<?php echo $sufijo;?>'=>'[<?php echo $imageD['tamanos'];?>]'
                ,'centrado<?php echo $sufijo;?>'=>'[0|1]'
                ,'get_atributos<?php echo $sufijo;?>'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta<?php echo $sufijo;?>}'
                                            ,'fecha'=>'{<?php echo $all['fcr'];?>}'
                                            ,'file'=>'{<?php echo $campo;?>}'
                                            ,'tamano'=>'{tamano<?php echo $sufijo;?>}'
                                            ,'dimensionado'=>'{dimensionado<?php echo $sufijo;?>}'
                                            ,'centrado'=>'{centrado<?php echo $sufijo;?>}'
                                            )
                                        )
                ,'get_archivo<?php echo $sufijo;?>'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta<?php echo $sufijo;?>}'
                                            ,'fecha'=>'{<?php echo $all['fcr'];?>}'
                                            ,'file'=>'{<?php echo $campo;?>}'
                                            ,'tamano'=>'{tamano<?php echo $sufijo;?>}'
                                            )
                                        )
        <?php } ?>      	    
    
              )
        <?php } ?>);
        
$items = $matriz['filas'];
//$total = $matriz['total'];
//$anterior = $matriz['anterior'];
//$siguiente = $matriz['siguiente'];
//$desde = $matriz['desde'];
//$hasta = $matriz['hasta'];       
//$tren = $matriz['tren'];
</textarea>    
    </div>    
        
    <div class="codigo_areas" id="codigo_area_fila" style="display:none;" >
    <textarea id="codigo_text_fila" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" >$item= select_fila(
        "<?php echo implode($li6,",")?>"
        ,"<?php echo $all['tabla']?>"
        ,"where <?php echo $all['id']?>='$ID' and  <?php echo ($all['vis']!='')?$all['vis']."='1'":""?> order by <?php echo $all['id']?> asc limit 0,100"
        ,0
        <?php if($all['archivo_hijo']!='' or sizeof($imagenes2)>0 ){ ?>,array(
        	<?php if($all['archivo_hijo']!=''){ ?>'sub_select'=>array('sub_select'=>array(
                			    'campos'=>"<?php echo implode($li62,",")?>"
                                	    ,'tabla' =>"<?php echo $all2['tabla']?>"
                                	    ,'donde' =>"where <?php echo $all2['foreig']?>='{<?php echo $all2['id']?>}' and <?php echo ($all2['vis']!='')?$all2['vis']."='1'":""?> order by <?php echo $all2['id']?> asc limit 0,100"
                                       	    ,'debug' =>0
                                            )
                                        )<?php $coma0=","; }
				$ttff=1;
				foreach($imagenes2 as $campo=>$imageD){ 
				$sufijo=($ttff==1)?"":"_".$ttff;
				$ttff++;
				$tot_tam=sizeof(explode(",",$imageD['tamanos']));
				$numArr=range(1,$tot_tam);
				$numStr=implode(",",$numArr);
               ?>
               
                <?php echo $coma0;?>'carpeta<?php echo $sufijo;?>'=>'<?php echo $imageD['carpeta'];?>'
                ,'tamano<?php echo $sufijo;?>'=>'[<?php echo $numStr;?>]'
                ,'dimensionado<?php echo $sufijo;?>'=>'[<?php echo $imageD['tamanos'];?>]'
                ,'centrado<?php echo $sufijo;?>'=>'[0|1]'
                ,'get_atributos<?php echo $sufijo;?>'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta<?php echo $sufijo;?>}'
                                            ,'fecha'=>'{<?php echo $all['fcr'];?>}'
                                            ,'file'=>'{<?php echo $campo;?>}'
                                            ,'tamano'=>'{tamano<?php echo $sufijo;?>}'
                                            ,'dimensionado'=>'{dimensionado<?php echo $sufijo;?>}'
                                            ,'centrado'=>'{centrado<?php echo $sufijo;?>}'
                                            )
                                        )
                ,'get_archivo<?php echo $sufijo;?>'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta<?php echo $sufijo;?>}'
                                            ,'fecha'=>'{<?php echo $all['fcr'];?>}'
                                            ,'file'=>'{<?php echo $campo;?>}'
                                            ,'tamano'=>'{tamano<?php echo $sufijo;?>}'
                                            )
                                        )
        <?php } ?>      	    
    
              )
        <?php } ?>);</textarea>
    </div>
    <div class="codigo_areas" id="codigo_area_dato" style="display:none;" >    
    <textarea id="codigo_text_dato" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" > $dato = select_dato(
        "[<?php echo implode($li7,",")?>]"
        ,"<?php echo $all['tabla']?>"
        ,"where <?php echo $all['id']?>='$ID'"
        ,0
        );</textarea>
    </div>
    
    <div class="codigo_areas" id="codigo_area_sub_select" style="display:none;">        
    <textarea id="codigo_text_sub_select" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >'sub_select'=>array('sub_select'=>array(
                                    'campo'=>"<?php echo implode($li62,",")?>"
                                    ,'tabla'=>"<?php echo $all['tabla']?>"
                                    ,'donde'=>"where <?php echo $all['id']?>='{$ID}'"
                                    ,'debug'=>0
    						)
    					)</textarea>
    </div> 
    
    <div class="codigo_areas" id="codigo_area_sub_select_fila" style="display:none;">        
    <textarea id="codigo_text_sub_select_fila" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >'sub_select_fila'=>array('sub_select_fila'=>array(
                                'campo'=>"<?php echo implode($li62,",")?>"
                                ,'tabla'=>"<?php echo $all['tabla']?>"
                                ,'donde'=>"where <?php echo $all['id']?>='{$ID}'"
                                ,'campo'=>0
    						)
    					)</textarea>
    </div> 
    
    <div class="codigo_areas" id="codigo_area_sub_select_dato" style="display:none;">        
    <textarea id="codigo_text_sub_select_dato" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >'sub_select_dato'=>array('sub_select_dato'=>array(
                                'campo'=>"[<?php echo implode($li7,",")?>]"
                                ,'tabla'=>"<?php echo $all['tabla']?>"
                                ,'donde'=>"where <?php echo $all['id']?>='{$ID}'"
                                ,'debug'=>0
    						)
    					)</textarea>
    </div>
     
    <div class="codigo_areas" id="codigo_area_items" style="display:none;">        
    <textarea id="codigo_text_items" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" >foreach($items as $item){
    
    <?php
    foreach($li6 as $lii){
    ?>	<?php echo "//echo \$item['".$lii."']\n";
    }
    ?>	
    }</textarea>
    </div>
    
    <div class="codigo_areas" id="codigo_area_limit_string" style="display:none;">        
    <textarea id="codigo_text_limit_string" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >'limit_string'=>array('limit_string'=>array(
    						'string'=>'{string}'
    						,'limit'=>'$LIMIT'
    						)
    					)</textarea>
    </div>

    <div class="codigo_areas" id="codigo_area_fecha_formato" style="display:none;" >        
    <textarea id="codigo_text_fecha_formato" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >'fecha_formato'=>array('fecha_formato'=>array(
    						'fecha'=>'{fecha}'
                            			,'formato'=>'[1,2,3,4,5,6]'
                            			)
                       			)
//[1] = Miércoles, 23 de Setiembre
//[2] = Miércoles, 23 de Setiembre de 2009
//[3] = Miércoles, 23 de Set
//[4] = Setiembre 2009
//[5] = 23-09-2009
//[6] = 23-09-09

</textarea>
    </div>
    

    <div class="codigo_areas" id="codigo_area_contar" style="display:none;" >        
    <textarea id="codigo_text_contar" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >
    
$numero=contar("<?php echo $all['tabla']?>","where 1 and  <?php echo ($all['vis']!='')?$all['vis']."='1'":""?>");
    
    </textarea>
    </div>   
    
    <div class="codigo_areas" id="codigo_area_insert" style="display:none;">        
    <textarea id="codigo_text_insert" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >$insertado=insert(<?php echo "array(";
	$coh="";
	foreach($li6A as $ff){
	?>
	
			<?php echo $coh.$ff; $coh=","; 
	} 
	?>
	
			<?php echo ")"; ?>
            
            	,"<?php echo $all['tabla']?>"
            	,0);
    </textarea>
    </div>
    
    
    <div class="codigo_areas" id="codigo_area_update" style="display:none;">        
    <textarea id="codigo_text_update" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >update(<?php echo "array(";
	$coh="";
	foreach($li6B as $ff){
	?>
    
		<?php echo $coh.$ff; $coh=",";
	} 
	?>
	
	    <?php echo ")"; ?>
    
    	  ,"<?php echo $all['tabla']?>"
    	  ,"where <?php echo $all['id']?>='$ID'"
    	  ,0);
    </textarea>
    </div> 
    
    <div class="codigo_areas" id="codigo_area_delete" style="display:none;">        
    <textarea id="codigo_text_delete" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >
    
delete("<?php echo $all['tabla']?>","where <?php echo $all['id']?>='$ID'",0);
    
    </textarea>
    </div> 
                       
    <div class="codigo_areas" id="codigo_area_formulario_publico" style="display:none;">        
    <textarea id="codigo_text_formulario_publico" class="codigo_ejemplo" onclick="javascript:this.focus();this.select();" readonly="true" 
    >/*CAMPOS-BEGIN*/
,'tabla'=>'<?php echo $all['tabla'];?>'
,'campos'=>array(
<?php 

$EQUIVALENCIAS['inp']='input_text';
$EQUIVALENCIAS['txt']='textarea';
$EQUIVALENCIAS['fch']='input_fecha';
$EQUIVALENCIAS['com']='input_radio';

foreach($gon as $go){
$cAA="'".$go['campo']."'=>array(
\t\t'label'=>'".$go['label']."'
\t\t,'campo'=>array('".$go['campo']."')
\t\t,'tipo'=>'".$EQUIVALENCIAS[$go['tipo']]."'
";
$valval=array();
if(!(strpos($go['label'],"email")==false) or !(strpos($go['campo'],"email")==false)){
$valval[]="'email'";
}
if(!(strpos($go['label'],"fono")==false) or !(strpos($go['campo'],"fono")==false)or!(strpos($go['label'],"celular")==false) or !(strpos($go['campo'],"celular")==false)or!(strpos($go['label'],"movil")==false) or !(strpos($go['campo'],"movil")==false)){
$valval[]="'phone'";
}
if($go['validacion']=='1'){
$valval[]="'required'";
}
if(sizeof($valval)>0){    
$cAA.="\t\t,'validacion'=>\"validate[". implode(",",$valval) ."]\"
";
}
unset($valval);
if(sizeof($go['opciones'])>0){ 
foreach($go['opciones'] as $gag=>$gog){
$gog2[]="'$gag'=>'$gog'";
}
$cAA.="\t\t,'opciones'=>array(". implode(",",$gog2) .")
";
unset($gog2);
}
$cAA.="\t)";
$CaM[]=$cAA;
}
echo "\t".implode("\n\t,",$CaM)."\n"; ?>
)
/*CAMPOS-END*/
</textarea>
    </div>     

</div>

<?php include("editar_propiedades.php");?>

<?php include("editar_campos.php");?>

<style>
#lili_campos { position:inherit;}
#lili_campos li { list-style: none; }
</style>
<script>
/*
var mya = new Sortables($('lili_campos'), {
	clone:true
	handles: $$('.handle')
});
*/
</script>
<?php

}

?>
&nbsp;
</div>
<div style="clear:both;width:100%; position:relative; overflow:hidden; font-size:1px; height:1px;">&nbsp;</div>


<div style="clear:left; width:100%; float:left;">
<?php

if($_GET['accion']=='bajarconfig' ){

	$Panel=parse_ini_file("../../panel/config/config.ini",true);
	//prin($Panel);
	$link_temp=$link;
	
	$link=mysql_connect ($Panel['LOCAL_MYSQL']['MYSQL_HOST'], $Panel['LOCAL_MYSQL']['MYSQL_USER'], $Panel['LOCAL_MYSQL']['MYSQL_PASS']) or die ('no se puedo conectar a la base de datos debido a: ' . mysql_error()." host:$MYSQL_HOST ,user:$MYSQL_USER ,pass:$MYSQL_PASS ,");
	mysql_select_db ($Panel['LOCAL_MYSQL']['MYSQL_DB'],$link);
	
	mysql_query("SET NAMES 'utf8'",$link);	
	
    $secure = select_dato("seguro","proyectos","where id='".$vars['INTERNO']['ID_PROYECTO']."'",0);

	
	$secure = ($secure==1)?1:0;
	
	$link=$link_temp;
	
	/////////////////////////////////

	$conn_id = ftp_connect($vars['REMOTE_FTP']['ftp_files_host'],21);

	$login_result = ftp_login($conn_id, $vars['REMOTE_FTP']['ftp_files_user'], $vars['REMOTE_FTP']['ftp_files_pass']);
		
	//echo $vars['REMOTE_FTP']['ftp_files_user']." | ".$vars['REMOTE_FTP']['ftp_files_pass']." | ".$vars['REMOTE_FTP']['ftp_files_host']."<br>";	
	
	$directorio = dir("config/");
	while($fichero=$directorio->read()) {
		if($fichero!='.' and $fichero!='..'){
		
			if($fichero=='tablas.php' and $secure==1){
			
				continue;
				
			}
				
		
			echo "bajando ".$fichero."............";
			
			echo "{". str_replace("//","/",$vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/config/".$fichero) . ")";
			
			echo (ftp_get($conn_id, "config/".$fichero, str_replace("//","/",$vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/config/".$fichero), FTP_BINARY))?1:0;
			
			if($fichero=='tablas.php' and $secure==0){
										
				$sizetablas=filesize('config/tablas.php'); echo "($sizetablas bytes)";
				
				if($sizetablas<100){
				
					$tablacontent=between(implode(file('config/tablas.php')),"file_get_contents(\"","\"))");
					$f1=fopen('config/tablas.php',"w+");
					fwrite($f1,"<?php\n\n\n".file_get_contents($tablacontent[1])."\n\n\n?>");
					fclose($f1);					
				
				}
			
			}					
			
			echo "<br>";
			
		} 
	}
	
	$directorio->close();
	
	redireccionar();

}

if($_GET['accion']=='subirconfig' ){

if($vars['INTERNO']['ID_PROYECTO']=="0"){ 

	$secure=0;

} else {

	$Panel=parse_ini_file("../../panel/config/config.ini",true);
	//prin($Panel);
	$link_temp=$link;
	
	$link=mysql_connect ($Panel['LOCAL_MYSQL']['MYSQL_HOST'], $Panel['LOCAL_MYSQL']['MYSQL_USER'], $Panel['LOCAL_MYSQL']['MYSQL_PASS']) or die ('no se puedo conectar a la base de datos debido a: ' . mysql_error()." host:$MYSQL_HOST ,user:$MYSQL_USER ,pass:$MYSQL_PASS ,");
	mysql_select_db ($Panel['LOCAL_MYSQL']['MYSQL_DB'],$link);
	
	mysql_query("SET NAMES 'utf8'",$link);	
	
    $secure = select_dato("seguro","proyectos","where id='".$vars['INTERNO']['ID_PROYECTO']."'",0);
	
//	prin($secure);
	
	$secure = ($secure==1)?1:0;
	
	$link=$link_temp;
	
}
	//prin($secure);
	
	@$conn_id = ftp_connect($vars['REMOTE_FTP']['ftp_files_host'],21,20);
	@$login_result = ftp_login($conn_id, $vars['REMOTE_FTP']['ftp_files_user'], $vars['REMOTE_FTP']['ftp_files_pass']);
	
	$directorio = dir("config/");
	while($fichero=$directorio->read()) {
		if($fichero!='.' and $fichero!='..' and $fichero!='tablas.php'){
			echo "subiendo ".$fichero."............"; flush(); 
			echo (ftp_put($conn_id, $vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/config/".$fichero, "config/".$fichero, FTP_BINARY))?1:0;
			cambiar_permisos($vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/config/".$fichero);
			
			echo "<br>";
		} 
	}
	
	$directorio->close();
	
	if($secure==1){
	
	$f1=fopen("temporal_tablas.php","w+");
	fwrite($f1,"<?php eval(file_get_contents(\"http://crazyosito.com/firmas/".$vars['INTERNO']['CARPETA_PROYECTO']."/tablas\")); ?>");
	fclose($f1);
	
	echo "subiendo tablas.php............"; flush(); 
	echo (ftp_put($conn_id, $vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/config/tablas.php", "temporal_tablas.php", FTP_BINARY))?1:0;
//	cambiar_permisos($vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/config/tablas.php");
	echo "<br>";
	unlink("temporal_tablas.php");		
	
	$taba=file("config/tablas.php");
	unset($taba[0]);
	unset($taba[sizeof($taba)-1]);
		
	$f1=fopen("temporal_tablas.php","w+");
	fwrite($f1,str_replace(array("<?php","?>"),array("",""),implode("",$taba)));
	fclose($f1);
				
		@$conn_id = ftp_connect($Panel['REMOTE_FTP']['ftp_files_host'],21,20);
		@$login_result = ftp_login($conn_id, $Panel['REMOTE_FTP']['ftp_files_user'], $Panel['REMOTE_FTP']['ftp_files_pass']);
		@ftp_mkdir($conn_id,$Panel['REMOTE_FTP']['ftp_files_root']."/firmas/".$vars['INTERNO']['CARPETA_PROYECTO']);
		
		$fichero="tablas.php";			
		echo "<br>subiendo ".$fichero." crazyosito............"; flush(); 
		echo (ftp_put($conn_id, $Panel['REMOTE_FTP']['ftp_files_root']."/firmas/".$vars['INTERNO']['CARPETA_PROYECTO']."/tablas", "temporal_tablas.php", FTP_BINARY))?1:0;
		echo "<br>";

	unlink("temporal_tablas.php");		
	
	} else {
	
		$fichero="tablas.php";
		echo "<br>subiendo ".$fichero."............"; flush(); 
		echo (ftp_put($conn_id, $vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/config/".$fichero, "config/".$fichero, FTP_BINARY))?1:0;
		cambiar_permisos($vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/config/".$fichero);
		echo "<br>";	
	
	}
				
				
	redireccionar();
	
}

if($_GET['accion']=='exportdb' ){
$urlmysqldump="http://".$_SERVER['HTTP_HOST'].str_replace("maquina.php","mysqldump.php",$_SERVER['SCRIPT_NAME']);

$mysql=file_get_contents($urlmysqldump);
echo $urlmysqldump."<br>";		
$f1=fopen("export.sql","w+");
fwrite($f1,$mysql);
fclose($f1);

$panel=$vars['GENERAL']['DIRECTORIO_PANEL'];

@$conn_id = ftp_connect($vars['REMOTE_FTP']['ftp_files_host'],21,20);
echo ($conn_id)?"host conectado":"host no conectado";
echo "<br>";
@$login_result = ftp_login($conn_id, $vars['REMOTE_FTP']['ftp_files_user'], $vars['REMOTE_FTP']['ftp_files_pass']);
echo ($login_result)?"login exitoso":"login fallido";
echo "<br>";
echo (ftp_put($conn_id, $vars['REMOTE_FTP']['ftp_files_root'].$vars['GENERAL']['DIRECTORIO_PANEL']."/"."export.sql", "export.sql", FTP_BINARY))?"archivo subío exitosamente":"error al subir";
echo "<br>";

$urlmysqldumpprocess=$vars['REMOTE']['httpfiles']."/".$vars['GENERAL']['DIRECTORIO_PANEL'] ."/processmysql.php";
echo $urlmysqldumpprocess."<br>";
$process=file_get_contents($urlmysqldumpprocess);

?>
<script>
if($('div_loading')){ $0('div_loading'); }
</script>    
<?php 	
	
}

if($_GET['accion']=='importdb' ){	

//echo $vars['INTERNO']['ID_PROYECTO']."|";

	if($vars['INTERNO']['ID_PROYECTO']!=''){
		$urlmysqldump="http://". ( (trim($_GET['domain'])!='')?$_GET['domain']:str_replace("http://","",$vars['REMOTE']['httpfiles'])."/".$vars['GENERAL']['DIRECTORIO_PANEL'] ) ."/mysqldump.php". ( (trim($_GET['tablas'])!='')?"?tablas=".$_GET['tablas']:'' );
		
		$mysqldump=file_get_contents($urlmysqldump);
		
		echo "<b>".$urlmysqldump."</b><br>";
		
		$MYSQL=explode(";\n\n\n\n",$mysqldump);
		if(sizeof($MYSQL)>0){
			foreach($MYSQL as $sqle){
				if(trim($sqle)!=''){
					$oksql=mysql_query($sqle.";",$link);
					echo ($oksql)?"<div>$sqle<span style='color:green;'>ok</span></div>":"<div><textarea style='width:94%;height:50px;'>$sqle</textarea><span style='color:red;'>ko</span></div>";
				}
			}
		}			
	}
	?>
    <script>
	if($('div_loading')){ $0('div_loading'); }
	</script>    
    <?php

}

if($_GET['accion']=='updatecode' ){	
	if($vars['INTERNO']['ID_PROYECTO']!=''){
	$urll = str_replace($vars['INTERNO']['CARPETA_PROYECTO']."/","",$SERVER['BASE'])."base/actualizar_panel.php?id=".$vars['INTERNO']['ID_PROYECTO'];
		echo file_get_contents($urll);
		if(!$_GET['reload']=='no'){	
			redireccionar_load_referer();
		}		
	}
}

if($_GET['accion']=='updatepanel' ){

	set_time_limit(0);
	$panel=$vars['GENERAL']['DIRECTORIO_PANEL'];	
	@$conn_id = ftp_connect($vars['REMOTE_FTP']['ftp_files_host'],21,20);
	@$login_result = ftp_login($conn_id, $vars['REMOTE_FTP']['ftp_files_user'], $vars['REMOTE_FTP']['ftp_files_pass']);
	chdir("../");
	
	$dires=array("$panel/custom/","$panel/img/");
	foreach($dires as $dire){
	$dir_remo=$vars['REMOTE_FTP']['ftp_files_root'].$vars['GENERAL']['DIRECTORIO_PANEL']."/".str_replace("$panel/","",$dire);
	echo "crear directorio ".$dir_remo."........"; flush(); 
	echo (ftp_mkdir($conn_id,$vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/".str_replace("$panel/","",$dire)))?"ok":"ko";
	cambiar_permisos($vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/".str_replace("$panel/","",$dire));
	
	echo "<br>";
	}
	//exit();
	
	$dires=array("$panel/custom/","$panel/img/");
				  //$dires=array("$panel/","$panel/lib/",,"$panel/img/mb_Components/","$panel/css/","panel/css/images/","panel/css/Other/","$panel/js/","$panel/removerbom/");
	foreach($dires as $dire){
	
	$dir_remo=$vars['REMOTE_FTP']['ftp_files_root'].$vars['GENERAL']['DIRECTORIO_PANEL']."/".str_replace("$panel/","",$dire);
	echo "crear directorio ".$dir_remo."........"; flush(); 
	echo (ftp_mkdir($conn_id,$vars['REMOTE_FTP']['ftp_files_root']."/".$vars['GENERAL']['DIRECTORIO_PANEL']."/".str_replace("$panel/","",$dire)))?'ok':'ko';
	echo "<br>";
	
	
	$directorio = dir("$dire/");
	while($fichero=$directorio->read()) {
		if($fichero!='.' and $fichero!='..'  and !is_dir($dire.$fichero) ){
			echo "subiendo ".$dire.$fichero."............"; flush(); 
			echo (ftp_put($conn_id, $vars['REMOTE_FTP']['ftp_files_root'].$vars['GENERAL']['DIRECTORIO_PANEL']."/".str_replace("$panel/","",$dire).$fichero, $dire.$fichero, FTP_BINARY))?1:0;
			echo "<br>";
		} 
	}
	$directorio->close();
	}
	chdir("$panel");
	
	//redireccionar_load_referer();
	?>
    <script>
	if($('div_loading')){ $0('div_loading'); }
	</script>    
    <?php
	
	
}


	?>
    <script>
	var contador=0;
	function selec(sel){
		
		contador=0
		$$('.coss').each(function(element) {
			element.checked=false;
		});	
		$$('.cossli').each(function(element) {
			element.setStyles({'background-color':'#FFFFFF'});
		});	
		
		//alert('.co'+sel);
		$$('.co'+sel).each(function(element) {
			contador++;
			element.checked=true;
		});	
		$$('.li'+sel).each(function(element) {
			element.setStyles({'background-color':'#FFFF99'});
		});
		$('xelecionados').innerHTML=(contador==0)?"":contador+" archivos seleccionados";
		
		
	}
	
	function seleccionar_all(dis){
		if(dis.checked){
		selec('_todos');
		} else {
		selec('_ul_0');
		}		
	}
	
	function subir_seleccionados(accion){
	
	var files = new Array(); 
	var idfile=0;
	var clien = new Array(); 
	var idcli=0;	
	$$('.cli').each(function(element) {
		if(element.checked){ clien[idcli]=element.value; idcli++; }
	});
	$$('.coss').each(function(element) {
		if(element.checked){ files[idfile]=element.value; idfile++; }
	});	
	
	//alert('?accion='+accion+'&proy='+clien.join(",")+'&files='+files.join(",")+'&rand='+Math.random()+'#anfiles');
	location.href='?accion='+accion+'&proy='+clien.join(",")+'&files='+files.join(",")+'&rand='+Math.random()+'#anfiles';
	
	}
/* 	function paint_web(co){
	$('li_'+co).setStyles({'background-color':($('co_'+co).checked==true)?'#7D97F0':'#FFFFFF'});
	}
	function paint_pan(co){
	$('li_'+co).setStyles({'background-color':($('co_'+co).checked==true)?'#FFFF99':'#FFFFFF'});
	}	 */
	function paint_all(co){
	$('li_'+co).setStyles({'background-color':($('co_'+co).checked==true)?'#FFFF99':'#FFFFFF'});
	if($('co_'+co).checked==true){ contador=contador+1; } else { contador=contador-1; }
	$('xelecionados').innerHTML=(contador==0)?"":contador+" archivos seleccionados";
	
	}	
	
	function paint_cli(co){
	$('clili_'+co).setStyles({'background-color':($('cli_'+co).checked==true)?'#FFFF99':'#FFFFFF'});
	}		
	</script>
    <?php

if($_GET['accion']=='alllistado' ){
	
	$cambio_de_version=0;
	
	$directo=getcwd();
	
	if($MASTER==false){
		chdir("../");
	}
	
	$panelA=explode("\\",getcwd());	
	$carpeta = $panelA[sizeof($panelA)-1];
	
	
	chdir("../");


	?>
    <?php
	
	$directoriS=array();
	function get_dirs_recur($directorio){
	
	
	global $directoriS;
	
	$Directorios=array();
	$Directorios['nombre']=$directorio."/";
	$directoriS[]=$directorio."/";
	$directorio_s = dir($directorio."/");
	while($fichero=$directorio_s->read()) {
		
		if($fichero!='.' and $fichero!='..'  and is_dir("$directorio/".$fichero) ){
			$Directorios['items'][]=get_dirs_recur("$directorio/".$fichero);
		}
	}	
	
	return $Directorios;
	
	}
	//echo "$carpeta<br>";
	//exit();

	if($MASTER==false){	
	get_dirs_recur($carpeta);
	$directoriS_1=$directoriS;
	unset($directoriS);	
	} else {
	$directoriS_1=array();
	}
	get_dirs_recur("panel");
	$directoriS_2=$directoriS;
	//$directoriS[]=$carpeta."/";
	$directoriS=array_merge($directoriS_1,$directoriS_2);
	
	foreach($directoriS as $dires){
		if(
		(
		substr($dires,0,6)=="panel/" or
		substr($dires,0,strlen($carpeta)+5)==$carpeta."/web/" or 
		$dires==$carpeta."/"
		) 
		and
		(substr($dires,0,12)!="panel/csslib")
		and
		(substr($dires,0,12)!="panel/zip")		
		and
		(substr($dires,0,12)!="panel/packed")		
		and
		(substr($dires,0,14)!="panel/disenios")		
		and
		(substr($dires,0,13)!="panel/img/bgs")		
		and		
		(strpos($dires,"trash")===false)
		and
		(substr($dires,0,14)!='panel/startup/')		
		and
		($dires!='panel/base/')
		and
		($dires!='panel/custom/')				
		){
			$directoriSS[]=$dires;
		}
	}
		
		
	//if($MASTER==false and $_GET['proy']==''){	

	
	
	//}
	
	$ProysyKu=array();
	
		if($MASTER==true){	

			$ProysyKu=explode(",",$_COOKIE['proy']);

			if($_GET['proy']!=''){
					
				$Proysy=explode(",",$_GET['proy']);
				
				//prin($Proysy);
				foreach($Proysy as $Proy){
				$proyitem= select_fila(
						"id,logo,nombre,descripcion,dominio,ftp_user,ftp_pass,ftp_root,carpeta,FORMATO,seguro,para_subir,fecha_creacion"
						,"proyectos"
						,"where id='$Proy' and  visibilidad='1' order by id asc limit 0,100"
						,0
						);
				$proyectoC['REMOTE_FTP']['ftp_files_host']=$proyitem['dominio'];
				$proyectoC['REMOTE_FTP']['ftp_files_user']=$proyitem['ftp_user'];
				$proyectoC['REMOTE_FTP']['ftp_files_pass']=$proyitem['ftp_pass'];
				$proyectoC['REMOTE_FTP']['ftp_files_root']=$proyitem['ftp_root'];
			
				$proyectoB[$Proy]=$proyectoC;	
							
			}
			
			
		} else {
	
			$proyectoC['REMOTE_FTP']['ftp_files_host']=$vars['REMOTE_FTP']['ftp_files_host'];
			$proyectoC['REMOTE_FTP']['ftp_files_user']=$vars['REMOTE_FTP']['ftp_files_user'];
			$proyectoC['REMOTE_FTP']['ftp_files_pass']=$vars['REMOTE_FTP']['ftp_files_pass'];
			$proyectoC['REMOTE_FTP']['ftp_files_root']=$vars['REMOTE_FTP']['ftp_files_root'];
			
			
			$proyectoB[0]=$proyectoC;
					
		}		

	} else {
	
			$proyectoC['REMOTE_FTP']['ftp_files_host']=$vars['REMOTE_FTP']['ftp_files_host'];
			$proyectoC['REMOTE_FTP']['ftp_files_user']=$vars['REMOTE_FTP']['ftp_files_user'];
			$proyectoC['REMOTE_FTP']['ftp_files_pass']=$vars['REMOTE_FTP']['ftp_files_pass'];
			$proyectoC['REMOTE_FTP']['ftp_files_root']=$vars['REMOTE_FTP']['ftp_files_root'];
			
			
			$proyectoB[0]=$proyectoC;
					
	}	
	
	//prin($proyectoB);
	//exit();

	$SUBIRFTP=true;
	
	$PARA_SUBIR=array();
	


	
foreach($proyectoB as $ppppp=>$proyectoC){

	$ppppp_p=0;

	$co=0;
	$co2=0;	
			
	if($_GET['files']!='' or $_GET['files2']!=''){

		@set_time_limit(0);
		
		//foreach($proyectoB as $ppppp=>$proyectoC){
		if($SUBIRFTP){
					
			$conn_id[$ppppp] = ftp_connect($proyectoC['REMOTE_FTP']['ftp_files_host'],21,20);
			$login_result[$ppppp] = ftp_login($conn_id[$ppppp], $proyectoC['REMOTE_FTP']['ftp_files_user'], $proyectoC['REMOTE_FTP']['ftp_files_pass']);
			
			echo "<div>subiendo ".$proyectoC['REMOTE_FTP']['ftp_files_host']. " ". ( ($login_result[$ppppp])?'conectado':'no conectado' )."</div>";

		}
		//}
	}

	$dires=$directoriSS;
	if(sizeof($sub_dire_imagenes)>0){
		$dires=array_merge($dires,$sub_dire_imagenes);
	}

	$array_archivos2=explode(",",$_GET['files2']);	

	
	if($_GET['files2']!=''){

		foreach($dires as $dire){

			$dir_remo=$proyectoC['REMOTE_FTP']['ftp_files_root'].str_replace("$carpeta/","",$dire);
			$directorio = dir("$dire/");	
			while($fichero=$directorio->read()) {		

				if( !in_array($fichero,array(
				"yuicompressor-2.4.2.jar"
				,"desktop.ini"
				,"."
				,".."
				,"config.ini"
				,"tablas.php"
				,"tablas_BASE.php"
				,"tablas_CPV.php"
				,"tablas_CSPV.php"
				,"tablas_INMOBILIARIO.php"
				,"tablas_CONTENIDO.php"
				,"memory.txt"
				,"tablas_copy.php"
				)) and !is_dir($dire.$fichero) ){
					$co2++;
					if(in_array($dire.$fichero,$array_archivos2)){					
						$array_arcchivos[]=$co2;
					}
				}		
			}	
		}
			
	} else {
		
		$array_arcchivos=explode(",",$_GET['files']);	
	
	}
	





	
//	prin($ARCHIVOSSS);	
	
	foreach($dires as $dire){

	$dir_remo=$proyectoC['REMOTE_FTP']['ftp_files_root'].str_replace("$carpeta/","",$dire);
	
//	echo $dir_remo."<br>";

	if($_GET['files']!='' or $_GET['files2']!=''){
		//foreach($proyectoB as $ppppp=>$proyectoC){

		if($SUBIRFTP){
		
		@ftp_mkdir($conn_id[$ppppp], $dir_remo);	

		}		
		//}
	}
	
	
//	echo $dir_remo."<br>";
	$directorio = dir("$dire/");
		
	while($fichero=$directorio->read()) {
		
		if( !in_array($fichero,array(
		"yuicompressor-2.4.2.jar"
		,"desktop.ini"
		,"."
		,".."
		,"config.ini"
		,"tablas.php"
		,"tablas_BASE.php"
		,"tablas_CPV.php"
		,"tablas_CSPV.php"
		,"tablas_INMOBILIARIO.php"
		,"tablas_CONTENIDO.php"
		,"memory.txt"
		,"tablas_copy.php"
		)) and !is_dir($dire.$fichero) ){
			
			//if($ppppp_p==0){	
			$co++;
			//}
			$archivo_cheked="";



							
			if(in_array($co,$array_arcchivos)){
								
				if($fichero=='.htaccess'){

					$htaccess_buffer=implode("",file($dire.$fichero));
					$htaccess_buffer_2=str_replace("RewriteBase /sistemapanel/$carpeta/","RewriteBase ".str_replace("//","/",str_replace("/www","",$proyectoC['REMOTE_FTP']['ftp_files_root'])."/"),$htaccess_buffer);
					$htaccess_buffer_2=str_replace("ErrorDocument 404 /sistemapanel/$carpeta/","ErrorDocument 404 ".str_replace("//","/",str_replace("/www","",$proyectoC['REMOTE_FTP']['ftp_files_root'])."/"),$htaccess_buffer_2);
					
					$f1=fopen($dire.$fichero,"w+");
					fwrite($f1,$htaccess_buffer_2);
					fclose($f1); 			
				
				}			
				
				
			
				//foreach($proyectoB as $ppppp=>$proyectoC){

				if($ppppp==0){
				$archivo_remoto= str_replace("//","/",$proyectoC['REMOTE_FTP']['ftp_files_root']."/".str_replace("$carpeta/","",$dire).$fichero);	
				} else {
				$archivo_remoto= str_replace("//","/",$proyectoC['REMOTE_FTP']['ftp_files_root']."/".$dire.$fichero);					
				}
				
				if($SUBIRFTP){
					$archivo_subido = ((ftp_put($conn_id[$ppppp],$archivo_remoto, $dire.$fichero, FTP_BINARY))?" <span style='color:green;' title='".$dire.$fichero."->".$archivo_remoto."'>subió exitosamente</span>":" <span style='color:red;'>no pudo subir</span>");
				} else {
					$PARA_SUBIR[]=array('remoto'=>$archivo_remoto,'local'=>$dire.$fichero);				
					$archivo_subido = "<span style='color:blue;'>comprimiendo</span>";
				}
				//}
				
				$archivo_cheked="checked";
			
			
				if($fichero=='.htaccess'){
								
					$f1=fopen($dire.$fichero,"w+");
					fwrite($f1,$htaccess_buffer);
					fclose($f1); 			
				
				}
				
				if( ( $fichero=='js.js' or $fichero=='css.css' or $fichero=='favicon.ico' or $fichero=='css.css' ) and $cambio_de_version==0 ){
//					prin(getcwd());
					$urlcommon=$carpeta."/web/modulos/common.php";
					$urlcommon_remoto=str_replace("//","/",$proyectoC['REMOTE_FTP']['ftp_files_root']."/web/modulos/common.php");
					$buff_A=file($urlcommon);
					foreach($buff_A as $y=>$ba){
						if(!strpos($ba,"INCLUDE['version']=")===false){
							$cambio_de_version=1;
							eval($ba);
							list($aa,$bb)=explode("?v=",$ba);
							$bb=$bb+1;
							$buff_A[$y]=str_replace($INCLUDE['version'],"?v=".$bb,$ba);
						}
					}
					if($cambio_de_version==1){
						$buffa=implode("",$buff_A);
						$f1=fopen($urlcommon,"w+");
						fwrite($f1,$buffa);
						fclose($f1); 				
					
						//foreach($proyectoB as $ppppp=>$proyectoC){
							if($SUBIRFTP){
								echo (ftp_put($conn_id[$ppppp], $urlcommon_remoto, $urlcommon, FTP_BINARY))?"actualización de versión<br>":"<br>";
							} else {
								$PARA_SUBIR[]=array('remoto'=>$urlcommon_remoto,'local'=>$urlcommon);
							}
						
						//}
						
					}		
			
				}			
			}		
			
			$timpo=fileatime($dire.$fichero);
			$tiempos[$co]=$timpo;	
								
			if(!(strpos($fichero,".doc")===false)){
				$lili="li_docs li_panel";
				$coco="co_docs co_panel";
			} elseif(!(strpos($dire,"panel/img")===false)){
				$lili="li_panel li_panelimg";
				$coco="co_panel co_panelimg";				
			} elseif(!(strpos($dire,"PHPExcel")===false) or $fichero=='PHPExcel.php'){
				$lili="li_excel li_panel";
				$coco="co_excel co_panel";
			} elseif(!(strpos($dire,"panel")===false) and (substr($fichero,-4)=='.php' or substr($fichero,-4)=='.css')){
				$lili="li_panel li_panelphp li_solopanel";
				$coco="co_panel co_panelphp co_solopanel";
			} elseif(!(strpos($dire,"panel")===false)){
				$lili="li_panel li_solopanel";
				$coco="co_panel co_solopanel";
			} elseif(!(strpos($dire,"/web/templates/default/lib/")===false) or in_array($fichero,array("css.php"))){
				$lili="li_weblib li_webtemplates li_web";
				$coco="co_weblib co_webtemplates co_web";				
			} elseif(!(strpos($dire,"/web/templates/")===false)){
				$lili="li_webtemplates li_web";
				$coco="co_webtemplates co_web";
			} elseif(!(strpos($dire,"/web/modulos/")===false) or in_array($fichero,array("css.php"))){
				$lili="li_webmodulos li_web";
				$coco="co_webmodulos co_web";				
			} elseif(!(strpos($dire,"/web/")===false)){
				$lili="li_web";
				$coco="co_web";
			} elseif(in_array($fichero,array('.htaccess','index.php','ajax.php','robots.txt','googlehostedservice.html'))){
				$lili="li_root li_web";
				$coco="co_root co_web";
			} else {
				$lili="";
				$coco="";
			}


			$str = "<li id='li_".$co."' class='cossli li_todos $lili '>";
			$str.= "<label for='co_".$co."'>";
			$str.= "<b>
			".( str_replace(array('panel/',$carpeta.'/web/'),array('<span style="color:red;">panel/</span>','<span style="color:blue;">'.$carpeta.'/web/</span>'),$dire) ).$fichero;
			$str.= "</b> ";
//			$str.= $carpeta.'/web/'.$fichero;
//			$str.= $co;
			$str.= "<i>".calcular_tiempo($timpo)."</i>".$archivo_subido;
			$str.= "</label>";
			$str.= "<input type='checkbox' id='co_".$co."' onclick='paint_all(".$co.");' $archivo_cheked 
 class='coss co_todos $coco ' value='".$co."' >";
			$str.= "</li>"; 
			 	
			if($ppppp_p==0){
			$TTiempos[$co]=$str;
			}
			
			$archivo_subido='';

		} 
	}
	

	
	$directorio->close();
	

	}
	$ppppp_p++;
//	echo "cerrando";
	if($SUBIRFTP){
	ftp_close($conn_id[$ppppp]);
	}
	else 
	{

	if($_GET['files']!='' or $_GET['files2']!=''){
	
	 function rrmdir($dir) { 
	   if (is_dir($dir)) { 
		 $objects = scandir($dir); 
		 foreach ($objects as $object) { 
		   if ($object != "." && $object != "..") { 
			 if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object); 
		   } 
		 } 
		 reset($objects); 
		 rmdir($dir); 
	   } 
	 }
 
 	rrmdir("panel/zip/www");
 		
	$basee="panel/zip";
	foreach($PARA_SUBIR as $pb){
		$remo=$pb['remoto'];
		$remo=str_replace("//","/","/".$remo);
		$remoA=explode("/",$remo);
		$lon=sizeof($remoA)-1;
		$pat=$basee;
		for($i=0;$i<$lon;$i++){
			$pat.=$remoA[$i]."/";
			//echo "$pat<br>";
			if($pat!=$basee.'/'){
				mkdir($pat);
			}
		}
		copy($pb['local'],$basee.$pb['remoto']);
	}
	
	$ddir=getcwd();
	copy("tar.exe","panel/zip/tar.exe");
	chdir("panel/zip/");
	exec("tar -cvf ../packed/packed.tar www/");
	unlink("tar.exe");
	chdir($ddir);

 	rrmdir("panel/zip/www");
	

	@set_time_limit(0);
	
	$conn_id[$ppppp] = ftp_connect($proyectoC['REMOTE_FTP']['ftp_files_host'],21,20);
	$login_result[$ppppp] = ftp_login($conn_id[$ppppp], $proyectoC['REMOTE_FTP']['ftp_files_user'], $proyectoC['REMOTE_FTP']['ftp_files_pass']);
	
	echo "<div>subiendo ".$proyectoC['REMOTE_FTP']['ftp_files_host']. " ". ( ($login_result[$ppppp])?'conectado':'no conectado' )."</div>";
	
	//echo (file_exists("panel/packed/packed.tar"))?"tar existe":"tar no existe";

	$archivo_subido = (ftp_put($conn_id[$ppppp],"/packed.tar", "panel/packed/packed.tar", FTP_BINARY))?" <span style='color:green;' >subió exitosamente</span>":" <span style='color:red;'>no pudo subir</span>";	

	ftp_close($conn_id[$ppppp]);
	
	echo "packed.tar ".$archivo_subido;
	
	unlink("panel/packed/packed.tar");
	
	
	}
	
	
				
	}
	
	
	//echo "<div>".$conn_id[$ppppp]."</div>";
	}//fin de bucle
		
	chdir($directo);

	arsort($tiempos);
	
//	print_rr($tiempos);
	echo "<a name='anfiles' style='font-size:1px; height:1px;clear:left;'>&nbsp;</a>";
	if($MASTER){

	echo "<h3 style='clear:left;'>Listado de proyecto</h3>";	
	
	$Proyeectos= select(
        "id,logo,nombre,descripcion,dominio,ftp_user,ftp_pass,ftp_root,carpeta,FORMATO,seguro,fecha_creacion,para_subir"
        ,"proyectos"
        ,"where 1 and para_subir='1' order by id asc limit 0,100"
        ,0
        ,array(
        	               
                'carpeta'=>'proy_imas'
                ,'tamano'=>'1'
                ,'dimensionado'=>'100x100'
                ,'centrado'=>'1'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{logo}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
                                            ,'centrado'=>'{centrado}'
                                            )
                                        )
                ,'get_archivo'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{logo}'
                                            ,'tamano'=>'{tamano}'
                                            )
                                        )
              )
        );

	echo "<ul class='listado'>";
		
		foreach($Proyeectos as $Proyeec){

		echo "<li id='clili_".$Proyeec['id']."' class='clili ". ( (!(strpos($dire,"panel")===false))?"li_panel":"li_web" ) ."'>
		<label for='cli_".$Proyeec['id']."'>
		<b>".$Proyeec['nombre']."</b>
		</label> ";
		
		echo "<input type='checkbox' id='cli_".$Proyeec['id']."' onclick='paint_cli(".$Proyeec['id'].");' ". (
		 (in_array($Proyeec['id'],$Proysy) or in_array($Proyeec['id'],$ProysyKu)   )?'checked':''
		 ) ." class='cli' value='".$Proyeec['id']."' >";
		
		echo "</li>"; 		
		}

	echo "</ul>";
			
	}	
    echo "<style>
	.listado a { margin-left:5px;font-weight:bold;letter-spacing:-1px; }
	</style>";
	 ?>
	 <?php
	echo "<h3 style='clear:left;'>Listado de archivos del proyecto <span style='color:red;'id='xelecionados'></span></h3>";
	
	echo "<ul class='listado'>";
	echo "<div>";
	echo "<a href='#' onclick=\"selec('_todos');return false;\" rel='nofollow' style='margin-left:0px;color:green;' >Todos</a>";
	echo "<a href='?accion=alllistado&rann=".( rand() )."#anfiles'>recargar</a>";
	echo "<a href='#' onclick=\"selec('_ul_0');return false;\" rel='nofollow'>ninguno</a>";
	echo "<a href='#' onclick=\"selec('_ul_2');return false;\" rel='nofollow'>2</a>";
	echo "<a href='#' onclick=\"selec('_ul_5');return false;\" rel='nofollow'>5</a>";
	echo "<a href='#' onclick=\"selec('_ul_10');return false;\" rel='nofollow'>10</a>";
	echo "<a href='#' onclick=\"selec('_ul_20');return false;\" rel='nofollow'>20</a>";
	echo "<a href='#' onclick=\"selec('_ul_30');return false;\" rel='nofollow'>30</a>";
	echo "<a style='color:blue;' href='#' onclick=\"selec('_root');return false;\" rel='nofollow' >root</a>";
	echo "<a style='color:blue;' href='#' onclick=\"selec('_web');return false;\" rel='nofollow' >WEB</a>";
	echo "<a style='color:blue;' href='#' onclick=\"selec('_webmodulos');return false;\" rel='nofollow'>web modulos</a>";
	echo "<a style='color:blue;' href='#' onclick=\"selec('_webtemplates');return false;\" rel='nofollow'>web templates</a>";
	echo "<a style='color:blue;' href='#' onclick=\"selec('_weblib');return false;\" rel='nofollow' >web csslib</a>";
	echo "<a href='#' onclick=\"selec('_panel');return false;\" rel='nofollow'>todo panel</a>";
	echo "<a href='#' onclick=\"selec('_excel');return false;\" rel='nofollow'>excel</a>";
	echo "<a href='#' onclick=\"selec('_panelimg');return false;\" rel='nofollow'>panel imgs</a>";
	echo "<a href='#' onclick=\"selec('_docs');return false;\" rel='nofollow'>docs</a>";
	echo "<a href='#' onclick=\"selec('_solopanel');return false;\" rel='nofollow'>SÓLO PANEL</a>";
	echo "<a href='#' onclick=\"selec('_panelphp');return false;\" rel='nofollow'>panel php</a>";
	echo "<input type='checkbox' id='costodos' onclick='seleccionar_all(this)' >";
	
	echo "<a href='#' onclick='javascript:subir_seleccionados(\"alllistado\"); return false;' rel='nofollow' id='link_subir' style='color:#FFFF99;font-size:13px;' >&uArr; SUBIR ARCHIVOS SELECCIONADOS</a>";
	
	echo "</div>";	
	$acb=0;
	//print_rr($tiempos);
	foreach($tiempos as $aaa=>$bbb){
	
	echo $TTiempos[$aaa];
	if(date("U")-$bbb<3600*24 and $_GET['files']=='' and $_GET['files2']==''){
	echo "<script>
			\$('li_".$aaa."').setStyles({'background-color':'#FFFF99'});
			\$('co_".$aaa."').checked=true;";
	echo "</script>\n";
	}
	
	if( $acb<2 ){ echo "<script> \$('co_".$aaa."').addClass('co_ul_2'); \$('li_".$aaa."').addClass('li_ul_2'); </script>\n"; }
	if( $acb<5 ){ echo "<script> \$('co_".$aaa."').addClass('co_ul_5'); \$('li_".$aaa."').addClass('li_ul_5'); </script>\n"; }
	if( $acb<10 ){ echo "<script> \$('co_".$aaa."').addClass('co_ul_10'); \$('li_".$aaa."').addClass('li_ul_10'); </script>\n"; }
	if( $acb<20 ){ echo "<script> \$('co_".$aaa."').addClass('co_ul_20'); \$('li_".$aaa."').addClass('li_ul_20'); </script>\n"; }
	if( $acb<30 ){ echo "<script> \$('co_".$aaa."').addClass('co_ul_30'); \$('li_".$aaa."').addClass('li_ul_30'); </script>\n"; }
	
	
	$acb++;
	
	}
	echo "</ul>";


	?>
    <script>
	if($('div_loading')){ $0('div_loading'); }
	</script>
    <?php	
}




















if($_GET['accion']=='enviar_email_password' ){
	
	$body="
	
	Datos de ".$vars['REMOTE_FTP']['ftp_files_host']."
	
	FTP
	---
	HOST : ".$vars['REMOTE_FTP']['ftp_files_host']."
	USUARIO : ".$vars['REMOTE_FTP']['ftp_files_user']."
	PASSWORD : ".$vars['REMOTE_FTP']['ftp_files_pass']."

";
	if($_GET['panel']=='1'){ 
	$body.="PANEL
	-----
	http://".$vars['REMOTE_FTP']['ftp_files_host']."/panel
	Usuario : ". (  select_dato('nombre',"usuarios_acceso","where 1 ",0) )."
	Password : ". (  select_dato('password',"usuarios_acceso","where 1 ",0) )."
	
	
	";	
	
	}
	if($_GET['gmail']=='1'){ 
	$body.="GMAIL
	-----
	URL de administración: https://www.google.com/a/".$vars['REMOTE_FTP']['ftp_files_host']."
	Nombre de usuario : administrador
	Contraseña : ".$vars['REMOTE_FTP']['ftp_files_pass']." 
	
	URLs de acceso a cuentas de correo: 
	http://mail.google.com/a/".$vars['REMOTE_FTP']['ftp_files_host']." ó
	http://".$vars['REMOTE_FTP']['ftp_files_host']."/email
	
	
		
	";
	}
	
	$EMAILS_PROYECTO=$vars['GENERAL']['emails_administrador'];
	$EMAILS_PROYECTO_A=explode(",",$EMAILS_PROYECTO);	
	foreach($EMAILS_PROYECTO_A as $EMAIL_A){
	echo (SendMAIL($EMAIL_A,"Datos de ".$vars['REMOTE_FTP']['ftp_files_host'],$body,"","notificaciones@crazyosito.com","Panel"))?"<h1>envio exitoso G</h1>":"<h1>envio fallido G</h1>";
	}
		
	redireccionar_load_referer();
	
}

if($_GET['accion']=='crear_archivo_verificacion' ){


function crear_gif_en_marco($file_temp,$ancho_ideal,$alto_ideal)
{
	// Crer imagen dinamica dependiendo del tipo es la funcion q usaremos.
	list($file,$ext)=explode(".",$file_temp);
	
	switch($ext)
	{   case "jpg":
	        $img = imagecreatefromjpeg($file_temp);
	    break;
	    case "gif":
	        $img = imagecreatefromgif($file_temp);
	    break;
	    case "png":
	        $img = imagecreatefrompng($file_temp);
	    break;
	}
	// dimensiones reales
    $ancho_real = imagesx($img);
    $alto_real  = imagesy($img);
	// hacer una escala
    if($ancho_real < $ancho_ideal && $alto_real < $alto_ideal) // imagen pequeña, no pasa nada
    {	
		$escala_x = $ancho_real;
    	$escala_y = $alto_real;
    }
    elseif( $ancho_real >= $ancho_ideal || $alto_real >= $alto_ideal )
    {
		$escala_x = $ancho_real;
    	$escala_y = $alto_real;
        if( $escala_x > $ancho_ideal)                          // si es muy ancha, escalar de acuerdo al ancho
        {   
			$escala_x = $ancho_ideal;
			$escala_y = $alto_real*($escala_x/$ancho_real);
        }
        if( $escala_y > $alto_ideal)
        {	
			$escala_y = $alto_ideal;                          // si es muy alta, escalar de acuerdo al alto
	    	$escala_x = $ancho_real*($escala_y/$alto_real);
        }
    }
	// crear papel de imágen, ImageCreateTrueColor para no perder colores
	$miniatura = ImageCreateTrueColor($ancho_ideal,$alto_ideal);
	
	$white = imagecolorallocate($miniatura, 250, 250, 250);
	
	imagefilledrectangle($miniatura, 0, 0, $ancho_ideal,$alto_ideal, $white);
	// imprimir la imagen redimensionada
    imagecopyresampled($miniatura,$img
									,( ($ancho_ideal>$escala_x)?round(($ancho_ideal-$escala_x)/2):0 )
									,( ($alto_ideal>$escala_y)?round(($alto_ideal-$escala_y)/2):0 )
									,0,0
									,$escala_x,$escala_y
									,$ancho_real,$alto_real);
    // guardar la imagen como $file_dest
	imagegif($miniatura,$file."_email.gif",100);
		
}

crear_gif_en_marco($vars['GENERAL']['img_logo'],143,59);


	
	$arch="googlehostedservice.html";
	$f1=fopen($arch,"w+");
	fwrite($f1,"googleb286641876ac8feb");
	fclose($f1); 

	$arch3="googlef8678768a81fd11c.html";
	$f1=fopen($arch3,"w+");
	fwrite($f1,"google-site-verification: googlef8678768a81fd11c.html");
	fclose($f1);	
	
	$arch2="temp.html";
	$f1=fopen($arch2,"w+");
	fwrite($f1,"<html><body onload=\"location.href='http://mail.google.com/a/".str_replace("www.","",$vars['REMOTE_FTP']['ftp_files_host'])."';\"></body></html>");
	fclose($f1); 	
		
	@$conn_id = ftp_connect($vars['REMOTE_FTP']['ftp_files_host'],21);
	@$login_result = ftp_login($conn_id, $vars['REMOTE_FTP']['ftp_files_user'], $vars['REMOTE_FTP']['ftp_files_pass']);
	
	ftp_put($conn_id, $vars['REMOTE_FTP']['ftp_files_root']."/".$arch, $arch, FTP_BINARY);
	ftp_put($conn_id, $vars['REMOTE_FTP']['ftp_files_root']."/".$arch3, $arch3, FTP_BINARY);
	ftp_mkdir($conn_id, $vars['REMOTE_FTP']['ftp_files_root']."/email");	
	ftp_put($conn_id, $vars['REMOTE_FTP']['ftp_files_root']."/email/index.php", $arch2, FTP_BINARY);
	
	unlink($arch);
	unlink($arch2);
	
	$directorio->close();
	
		
	redireccionar_load_referer();
	
	
}

if($_GET['accion']=='borrarcustom' ){
	$directorio = dir("./$DIR_CUSTOM");
	while($fichero=$directorio->read()) {
		if($fichero!='.' and $fichero!='..'){
		@unlink($DIR_CUSTOM.$fichero);
		} 
	}
	$directorio->close();
	redireccionar();
}
if($_GET['accion']=='borrarmemory' ){
	unlink("config/memory.txt");
	redireccionar();
}


if( ($_GET['check']=='ftp' ) and ( 
		!file_exists($ftp_files_host.$DIRECTORIO_IMAGENES) and 
		!file_exists($ftp_files_host.$DIRECTORIO_IMAGENES.$DIR_IMG_TEMP) and 
		!file_exists($ftp_files_host.$DIRECTORIO_IMAGENES.$DIR_IMG_UPLOAD)
		)
	){
//if( ($_GET['check']!='ftp' ) ){

	if(0){	
	//if($Local==1){	
		@mkdir("../".$DIRECTORIO_IMAGENES);
		@mkdir("../".$DIRECTORIO_IMAGENES.$DIR_IMG_TEMP);
		@mkdir("../".$DIRECTORIO_IMAGENES.$DIR_IMG_UPLOAD);
		redireccionar();
	} else {
		
		// abrir conexion ftp y loguearse
		$conn_id = ftp_connect($ftp_files_host,21,20);
		//echo (($conn_id)?1:0 )."<br>";
		$login_result = ftp_login($conn_id, $ftp_files_user, $ftp_files_pass);
		//echo (($login_result)?1:0 )."<br>";
		ftp_mkdir($conn_id, $ftp_files_root.$DIRECTORIO_IMAGENES);	
		echo "<br>creando dir ".$ftp_files_root.$DIRECTORIO_IMAGENES."<br>";
		cambiar_permisos($ftp_files_root.$DIRECTORIO_IMAGENES);	

		ftp_mkdir($conn_id, $ftp_files_root.$DIRECTORIO_IMAGENES.$DIR_IMG_TEMP);	
		echo "<br>creando dir ".$ftp_files_root.$DIRECTORIO_IMAGENES.$DIR_IMG_TEMP."<br>";
		cambiar_permisos($ftp_files_root.$DIRECTORIO_IMAGENES.$DIR_IMG_TEMP);	
		
		ftp_mkdir($conn_id, $ftp_files_root.$DIRECTORIO_IMAGENES.$DIR_IMG_UPLOAD);	
		echo "<br>creando dir ".$ftp_files_root.$DIRECTORIO_IMAGENES.$DIR_IMG_UPLOAD."<br>";
		cambiar_permisos($ftp_files_root.$DIRECTORIO_IMAGENES.$DIR_IMG_UPLOAD);
		
		ftp_close($conn_id);
		
		
		if($login_result)
			redireccionar();	
		else
			redir("maquina.php?check=ftp");
		
			
	}
	
}

if($_GET['me']==''){


if( $_GET['accion']=='creararchivostablaall' ){


foreach($objeto_tabla as $ME=>$ot){
	
	$sqli= script_create_table($objeto_tabla[$ME]);
	mysql_query($sqli,$link);


	$f1=fopen($DIR_CUSTOM.$objeto_tabla[$ME]['archivo'].".php","w+");
	$html="<?php
chdir(\"../\");	
include(\"lib/includes.php\");
include(\"head.php\");
?>
<body>
<?php
echo \$HTML_ALL_INICIO;
echo \$HTML_MAIN_INICIO;
include(\"header.php\"); 		
include(\"".$objeto_tabla[$ME]['archivo']."_vista.php\"); 
include(\"foot.php\"); 
echo \$HTML_MAIN_FIN;	
echo \$HTML_ALL_FIN;
?>
</body>
</html>
<?php 
?>";
	fwrite($f1,utf8_encode($html));
	fclose($f1); 
	
	$f1=fopen($DIR_CUSTOM.$objeto_tabla[$ME]['archivo']."_vista.php","w+");
$html="<?php

if(\$_GET['ran']!=''){
	chdir(\"../\");	
	//include(\"lib/compresionInicio.php\");	/*para Content-Encoding*/ 
	include(\"lib/includes.php\");
}	
/// procesar campos		
\$datos_tabla = procesar_objeto_tabla(\$objeto_tabla['".$ME."']);	

verificar_tabla(\$datos_tabla['tabla']);
	
/// asignar variables

\$tbtitulo	=	procesar_dato(\$datos_tabla['titulo']);

\$tbl		=	\$datos_tabla['tabla'];
\$tbf		=	\$datos_tabla['archivo'];
\$tb 		=	\$datos_tabla['prefijo'];
	
\$tbcampos	=	\$datos_tabla['form'];
\$tblistado	=	\$datos_tabla['list'];
\$tbquery	=   \$datos_tabla['query'];


include(\"vista.php\");


if(\$_GET['ran']!=''){
	//include(\"lib/compresionFinal.php\");	/*para Content-Encoding*/ 
}

?>";	
	fwrite($f1,utf8_encode($html));
	fclose($f1); 
	
	}
	
	redireccionar();
	
}


} else {

?>

<div class='cuadro_codigo bloque'>
<?php 
//prin($objeto_tabla[$_GET['me']],"#FFFFFF");
$sql= script_create_table($objeto_tabla[$_GET['me']]);
$sql2=$sql;

$li4=array();

foreach($all['form'] as $ca){
	if(!in_array(array(
						$all['id']
						,$all['fcr']
						,$all['fed']
						,$all['pos']
						,$all['vis']
					  )
				,$ca['campo']))
	{
		$li4[]=$ca['campo'];
	}
}

foreach($li4 as $li3){
$sql2=str_replace("`".$li3."`","<span style='color:red;'>`".$li3."`</span>",$sql2);
}
echo nl2br($sql2); 
?>
</div>
<?php

//INICIO DE ACCIONES

echo "<div style='clear:left;'></div>";

if( $_GET['me']!='' and ( $_GET['accion']=='actualizartabla') ){
		
	$sqles=get_columns_from_objeto($objeto_tabla[$_GET['me']]);
	
	if(sizeof($sqles)>0){
		foreach($sqles as $sqle){
			mysql_query($sqle,$link);
		}
	}
	
	redireccionar();		
	//exit();
	
}




if( $_GET['me']!='' and $_GET['accion']=='truncatetable' ){

	function ftp_rmAll($conn_id,$dst_dir){
		$ar_files = ftp_nlist($conn_id, $dst_dir);
		//var_dump($ar_files);
		if (is_array($ar_files)){ // makes sure there are files
			for ($i=0;$i<sizeof($ar_files);$i++){ // for each file
				$st_file = $ar_files[$i];
				if($st_file == '.' || $st_file == '..') continue;
				if (ftp_size($conn_id, $dst_dir.'/'.$st_file) == -1){ // check if it is a directory
					ftp_rmAll($conn_id,  $dst_dir.'/'.$st_file); // if so, use recursion
				} else {
					ftp_delete($conn_id,  $dst_dir.'/'.$st_file); // if not, delete the file
				}
			}
		}
		$flag = ftp_rmdir($conn_id, $dst_dir); // delete empty directories
		return $flag;
	}
		
	//if($objeto_tabla[$_GET['me']]['bloqueado']!='1'){
		mysql_query("TRUNCATE TABLE `".$objeto_tabla[$_GET['me']]['tabla']."`",$link);
	//}

	//redireccionar();

	
	
	$DIRECTORIO_IMAGENES=$vars['GENERAL']['DIRECTORIO_IMAGENES'];
			
	if($vars['GENERAL']['MODO_LOCAL_ARCHIVOS_REMOTOS']){
		
		$conn_id = ftp_connect($vars['REMOTE_FTP']['ftp_files_host'],21);
	
		$login_result = ftp_login($conn_id, $vars['REMOTE_FTP']['ftp_files_user'], $vars['REMOTE_FTP']['ftp_files_pass']);
		
		$ruut=$vars['REMOTE_FTP']['ftp_files_root'];
			
	} else {
		
		$conn_id = ftp_connect($vars['LOCAL_FTP']['ftp_files_host'],21);
	
		$login_result = ftp_login($conn_id, $vars['LOCAL_FTP']['ftp_files_user'], $vars['LOCAL_FTP']['ftp_files_pass']);	
		
		$ruut=$vars['REMOTE_FTP']['ftp_files_root'];
		
	}
	
	
	$carpetas=array();
	//prin($objeto_tabla[$_GET['me']]['campos']);
	foreach($objeto_tabla[$_GET['me']]['campos'] as $campoo){
	if($campoo['tipo']=='img'){
	$carpetas[]=$campoo['carpeta'];
	}
	}

	echo "TRUNCATE ".str_replace("//","/",$ruut.$DIRECTORIO_IMAGENES."/".$carpeta);
	//prin($carpetas);
	foreach($carpetas as $carpeta){	
	//prin($ruut.$DIRECTORIO_IMAGENES."/".$carpeta);
	prin(ftp_rmAll($conn_id,str_replace("//","/",$ruut.$DIRECTORIO_IMAGENES."/".$carpeta)));
	
	}

	redir("maquina.php?me=".$_GET['me']);
	
}


if( $_GET['me']!='' and ( $_GET['accion']=='creartabla' or $_GET['accion']=='creararchivostabla') ){
	mysql_query($sql,$link);
	if( $_GET['accion']=='creararchivostabla' ){
		$_GET['accion']='creararchivos';
	} else {
		redireccionar();
	}
}
if( $_GET['me']!='' and ( $_GET['accion']=='borrartabla' or $_GET['accion']=='borrararchivostabla') ){
	if($objeto_tabla[$_GET['me']]['bloqueado']!='1'){
		mysql_query("DROP TABLE `".$objeto_tabla[$_GET['me']]['tabla']."`",$link);
	}
	if( $_GET['accion']=='borrararchivostabla' ){
		$_GET['accion']='borrararchivos';
	} else {
		redireccionar();
	}	
}
if( $_GET['me']!='' and $_GET['accion']=='borrararchivos' ){

	@unlink($DIR_CUSTOM.$objeto_tabla[$_GET['me']]['archivo'].".php");
	@unlink($DIR_CUSTOM.$objeto_tabla[$_GET['me']]['archivo']."_vista.php");
	redireccionar();

}
if( $_GET['me']!='' and $_GET['accion']=='recreararchivos' ){


	@unlink($DIR_CUSTOM.$objeto_tabla[$_GET['me']]['archivo'].".php");
	@unlink($DIR_CUSTOM.$objeto_tabla[$_GET['me']]['archivo']."_vista.php");
	$_GET['accion']='creararchivos';
	
}
if( $_GET['me']!='' and $_GET['accion']=='creararchivos' ){

	$f1=fopen($DIR_CUSTOM.$objeto_tabla[$_GET['me']]['archivo'].".php","w+");
	$html="<?php
chdir(\"../\");	
include(\"lib/includes.php\");
include(\"head.php\");
?>
<body>
<?php
echo \$HTML_ALL_INICIO;
echo \$HTML_MAIN_INICIO;
include(\"header.php\"); 		
include(\"".$objeto_tabla[$_GET['me']]['archivo']."_vista.php\"); 
include(\"foot.php\"); 
echo \$HTML_MAIN_FIN;	
echo \$HTML_ALL_FIN;
?>
</body>
</html>
<?php 
?>";
	fwrite($f1,utf8_encode($html));
	fclose($f1); 
	
	$f1=fopen($DIR_CUSTOM.$objeto_tabla[$_GET['me']]['archivo']."_vista.php","w+");
$html="<?php

if(\$_GET['ran']!=''){
	chdir(\"../\");	
	//include(\"lib/compresionInicio.php\");	/*para Content-Encoding*/ 
	include(\"lib/includes.php\");
}	
/// procesar campos		
\$datos_tabla = procesar_objeto_tabla(\$objeto_tabla['".$_GET['me']."']);	

verificar_tabla(\$datos_tabla['tabla']);
	
/// asignar variables

\$tbtitulo	=	procesar_dato(\$datos_tabla['titulo']);

\$tbl		=	\$datos_tabla['tabla'];
\$tbf		=	\$datos_tabla['archivo'];
\$tb 		=	\$datos_tabla['prefijo'];
	
\$tbcampos	=	\$datos_tabla['form'];
\$tblistado	=	\$datos_tabla['list'];
\$tbquery	=   \$datos_tabla['query'];


include(\"vista.php\");


if(\$_GET['ran']!=''){
	//include(\"lib/compresionFinal.php\");	/*para Content-Encoding*/ 
}

?>";	
	fwrite($f1,utf8_encode($html));
	fclose($f1); 
		
redireccionar();

}

//FIN DE ACCIONES

?>
</div>

<div style="padding:4px 0px;">
<?php
/*
if($objeto_tabla[$_GET['me']]['bloqueado']=='1'){
	echo (in_array($objeto_tabla[$_GET['me']]['tabla'],$tablas_creadas))?'borrar tabla':'<a href="?me='.$_GET['me'].'&accion=creartabla" >crear tabla</a>';
} else {
	echo (in_array($objeto_tabla[$_GET['me']]['tabla'],$tablas_creadas))?'<a href="?me='.$_GET['me'].'&accion=borrartabla" >borrar tabla</a>':'<a href="?me='.$_GET['me'].'&accion=creartabla" >crear tabla</a>';

}

</div>

<div style="padding:4px 0px 10px;">

<?php
$archivo1=$objeto_tabla[$_GET['me']]['archivo'].".php";
$archivo2=$objeto_tabla[$_GET['me']]['archivo']."_vista.php";
if(file_exists($DIR_CUSTOM.$archivo1) and file_exists($DIR_CUSTOM.$archivo2)){
echo "<a href='".$DIR_CUSTOM.$archivo1."'>ir a $archivo1</a>";
echo "<a href='?me=".$_GET['me']."&accion=borrararchivos' style='color:#cccccc; margin-left:10px;'>borrar $archivo1 y $archivo2</a>";
echo "<a href='?me=".$_GET['me']."&accion=recreararchivos' style='color:#cccccc; margin-left:10px;'>[REDO]</a>";
} else {
echo "<a href='?me=".$_GET['me']."&accion=creararchivos' style='color:#5BB6DE;' >crear $archivo1</a>";
}	
?>

</div>
*/
?>
<!--
<div class="cuadro_codigo bloque" style="clear:left; position:relative;">
<?php
//$bloque_separacion="/******************************************************************************************************************************************************/";

/*
$file_tablas_a=file("config/tablas.php");
foreach($file_tablas_a as $bt){
if(trim($bt)!=""){
$file_tablas_a2[]=rtrim(str_replace(array("\t","&nbsp;"),array("  "," "),$bt))."\n";
}
}
$file_tablas=str_replace(array("<?php","?>",$bloque_separacion),array("","",""),implode("",$file_tablas_a2));
$bloques_tablas=explode(";",$file_tablas);
foreach($bloques_tablas as $blota){
	if(!(strpos($blota,"objeto_tabla['".$_GET['me']."']")===false)){
	
		
		echo "<a href='#' onclick='javascript:grabar_objeto(); return false;' rel='nofollow' style='float:right; position:absolute; right:0px; top:0px; background-color:yellow;font-weight:bold;padding:3px;' >guardar objeto</a>";
		echo "<textarea style='width:932px; height:auto; background-color:#333333; color:white;' id='textobjeto' >"; echo(trim($blota).";"); echo "</textarea>";
	}
}
*/
?>
</div>
-->
<script>
/*
var txtar=$('textobjeto').value;
var ntxtar= new Array();
ntxtar=txtar.split("\n");
var hei = ntxtar.length * 17;
$('textobjeto').setStyles({'height':hei});
*/
function grabar_objeto(){
	
	datos = { 
				textobjeto  : $v('textobjeto'),
				me			: '<?php echo $_GET['me']?>'
			};	
	new Request({url:"grabar_objeto.php", method:'post', data:datos, onSuccess: function(eee){

		location.href='?me=<?php echo $_GET['me']?>';
	
	} } ).send();
}


function set_dato(me,indice,valor){

	datos = { 
				me			: me,
				indice		: indice,
				valor		: valor
			};		
	
	new Request({url:"modificar_objeto.php", method:'post', data:datos, onSuccess: function(eee){
		if(eee.trim()!='')
			alert(eee);
		else {	
			/*location.href='?';*/
			}
	
	} } ).send();
}


function eliminar_dato(indice){

	
	datos = { 
				me			: '<?php echo $_GET['me']?>',
				indice		: indice,
				valor		: 'destroy'
			};		
	
	new Request({url:"modificar_objeto.php", method:'post', data:datos, onSuccess: function(eee){
		if(eee.trim()!='')
			alert(eee);
		else	
			location.href='?rann=<?php echo rand();?>&me=<?php echo $_GET['me']?>#blo_objetos';
	
	} } ).send();
}

function modificar_dato(indice){

	
	datos = { 
				me			: '<?php echo $_GET['me']?>',
				indice		: indice,
				valor		: $v('val_'+indice)
			};		
	
	new Request({url:"modificar_objeto.php", method:'post', data:datos, onSuccess: function(eee){
		if(eee.trim()!='')
			alert(eee);
		else	
			location.href='?rann=<?php echo rand();?>&me=<?php echo $_GET['me']?>&save=campos#blo_objetos';
	
	} } ).send();
}
</script>

<?php 
}
} 
?>
<?php 



break;

} 

?>

<div>&nbsp;</div>
</div>
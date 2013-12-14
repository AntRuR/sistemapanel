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

$tblsinc=array();
$cam='sincromysql';
foreach($objeto_tabla as $ot){
if( ($saved[$ot['me']][$cam]==1) and (in_array($ot['tabla'],$tablas_creadas)) ){ $tblsinc[]=$ot['tabla']; }
}
			
$tablassincro="&tablas=".implode(",",$tblsinc);


?>
<div class="cabecera bloque">

<a href="maquina.php?tab=documentos" class="links_menu" title="dcumentos">docs</a>
<a href="maquina.php?tab=libraries"  class="links_menu" title="librerias">libs</a>
<a href="maquina.php?ver=phpinfo"    class="links_menu" title="phpinfo"  >info</a>        
<a href="removerbom/remover_bom.php" class="links_menu" title="remover bom" target="_blank">borrar bom</a>
<a href="maquina.php?config=edit"    class="links_menu" title="configuraciones" style=" background-color:#FFF; color:#000;">conf (<?php echo $get_num_vars;?>)</a>        


<?php if($vars['INTERNO']['ID_PROYECTO']!="0"){ ?>
	<?php if($Local!='1'){ ?>
	   	<a href="maquina.php?tab=estadisticas" class="links_menu" title="estadísticas" >estadísticas</a>
    <?php } ?>
            
    <a href="maquina.php?accion=borrarcustom" class="links_menu" title="borrar archicos de carpeta custom" >borrar custom</a>
    <a href="maquina.php?accion=borrarmemory" class="links_menu" title="resetear archivo de memoria" >reset mem</a>
    <a href="<?php echo $httpfiles; ?>:2082/3rdparty/phpMyAdmin/index.php?lang=es-utf-8" class="links_menu" target="_blank" title="my admin" >PhpMyAdmin</a>
<?php } ?>


<a href="maquina.php?edicionpanel=<?php echo ($_SESSION['edicionpanel']=='1')?'0':'1';?>" class="links_menu" style="background-color:<?php echo ($_SESSION['edicionpanel']=='1')?'#09A707':'#DE1010';?>;color:#FFF;" title="<?php echo ($_SESSION['edicionpanel']=='1')?'apagar':'encender';?> edición panel">panel</a>


<?php if($Local=='1'){ ?>

    <?php if($vars['INTERNO']['ID_PROYECTO']!="0"){ ?>
    
        <a href="maquina.php?edicionweb=<?php echo ($_SESSION['edicionweb']=='1')?'0':'1';?>" class="links_menu" style="background-color:<?php echo ($_SESSION['edicionweb']=='1')?'#09A707':'#DE1010';?>;color:#FFF;" title="<?php echo ($_SESSION['edicionweb']=='1')?'apagar':'encender';?> edición web">web</a>

        <a href="maquina.php?accion=updatepanel" class="links_menu" title="subir archivos de custom">subir custom</a>
       
        <a href="<?php echo str_replace("[http]","http://",str_replace("//","/",str_replace("http://","[http]",$vars['REMOTE']['httpfiles'])."/".$vars['GENERAL']['DIRECTORIO_PANEL']));?>" class="links_menu" style="color:#F00; background-color:#000;" target="_blank" title="panel remoto">remoto</a>
        
        <a href="maquina.php?accion=bajarconfig" class="links_menu" style="color:#FFFFFF;" title="bajar archivos de config">down</a>
        <a href="maquina.php?accion=subirconfig" class="links_menu" style="color:#FFFFFF;" title="subir archivos de config">up</a>
                
    <?php } ?>
        

    <?php if($vars['GENERAL']['EXPORTARDB']=='1'){?>
        <a href="maquina.php?accion=exportdb" class="links_menu" style="background-color:#003399; color:#FFFFFF;" title="export DB" >export</a>
    <?php } ?>
    
    <?php if($vars['INTERNO']['ID_PROYECTO']!="0"){ ?>
		<?php if($vars['GENERAL']['IMPORTARDB']!='0'){?>
            <div class="links_menu" style="height:auto;width:98px;text-align:right;" >
            <input type="text" id="importDBdominio" style="width:50px; float:left; margin:1px 0 0; border:0; padding:0; font-size:9px; height:13px;" />
            <a href="#" onclick="javascript:location.href=($v('importDBdominio')=='')?'maquina.php?accion=importdb<?php echo $tablassincro;?>':'maquina.php?accion=importdb<?php echo $tablassincro;?>&domain='+$v('importDBdominio');return false;" rel="nofollow" class="links_menu" style="color:#6EF96C;margin:0px;padding:0;border:0;float:none; background-color:transparent;" title="import DB" >import</a>
            </div>
        <?php } ?>
    <?php } ?>
    
    <a href="maquina.php?accion=alllistado#anfiles" class="links_menu" style="background-color:#BB0606; color:#FFFF99; font-weight:bold;" title="listar archivos">archivos</a>            

<?php } ?>


</div>
<?php /*
<a style="position:absolute; text-decoration:none; top:1px; right:1px; font-family:verdana; font-weight:bold;
background-color:#000000; color:#FFFFFF;">X</a>
*/ ?>
<div>
<?php
/*
	foreach($objeto_tabla as $ot){
	
		echo '<a href="maquina.php?me='.$ot['me'].'" class="objetos" style="';
		echo ($_GET['me']==$ot['me'])?" color:#000;background-color:#FFFF99;":"";
		echo '">'.$ot['tabla'].'</a>';
		
	}
*/	
?>
</div>
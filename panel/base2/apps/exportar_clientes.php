<?php //á

require_once 'lib/PHPExcel.php';
require_once 'lib/PHPExcel/IOFactory.php';

$foreig=array();
$obj=$objeto_tabla[$_GET['me']];
foreach($obj['campos'] as $campo){
	if(in_array($campo['tipo'],array('inp','txt'))){
		$autorizados[$campo['label']]=$campo['campo'];
	}
	if($campo['tipo']=='hid'){
		$foreig[$campo['campo']]=$_GET[$campo['campo']];
	}	
}

$_GET['paso']=($_GET['paso'])?$_GET['paso']:'first';
//$_GET['paso']=($_GET['paso'])?$_GET['paso']:'upload';

switch($_GET['paso']){

////////////////////////////////////////////////////////
///////////////////    FIRST    ////////////////////////
////////////////////////////////////////////////////////
case "first":
?>
    <div class="importar_csv">
    <h2>Generar archivo con correos de clientes</h2>
    
    	<a href='exportar_csv.php?me=CLIENTES&campos=email&ext=txt'>DESCARGAR</a>
    	<?php /*
		<?php
		$grupos=select("id,nombre","productos_grupos","where visibilidad=1");
		?>
        <select onchange="generar_link(this.value)" name="gl" id="gl" >
		<?php foreach($grupos as $grupo){	?>
        <option id='<?php echo $grupo['id'];?>'><?php echo $grupo['nombre'];?></option>
        <?php } ?>
        </select>
        &nbsp;
        &nbsp;
        <span id='link_generado'></span>
        <br /><br /><br />
        <div><a href='app.php?paso=second<?php echo $params;?>'>si ya editó el excel, ir al PASO 2</a></div>
        <script>
		function generar_link(grupo){
			$('link_generado').innerHTML='<a href="base2/apps/generar_excel.php?grupo='+grupo+'" >DESCARGAR EXCEL</a>';
		}
		</script>
        */ ?>        
    
    </div>    
<?
break;
}
?>

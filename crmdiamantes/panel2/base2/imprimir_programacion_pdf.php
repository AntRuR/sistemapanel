<?php

// prin($_GET);
// prin($_SESSION);
// prin($SERVER);
// prin($_SERVER);

$rr=fila(
	"id,
	fecha_creacion,
	id_item_item,
	costo_total,
	fecha_termino,
	fecha_prog,
	fecha_lista,
	cerrado,
	observaciones,
	receptor",

	"productos_programacion",

	"where id='".$_GET['L']."'",
	0,
	array(
			'item_item'	=>array('fila'=>array('vin,id_color,id_item','productos_items_items','where id="{id_item_item}"',0,array(
				'color'=>array('dato'=>array('nombre','productos_colores','where id="{id_color}"',0)),
				'item'=>array('fila'=>array('id_grupo,nombre as modelo','productos_items','where id="{id_item}"',0,array(
					'marca'=>array('dato'=>array('nombre','productos_grupos','where id="{id_grupo}"',0))
					)))
				))),
			'operaciones' => array('select'=>array("id,
													nombre,
													id_item_item,
													horas,
													costo,
													fecha_inicio,
													fecha_fin,
													fecha_cierre,
													id_receptor",

													'productos_programacion_subitems',

													'where id_grupo="{id}"',0,array(
														'contratista'=>array('dato'=>array('nombre','proveedores','where id="{id_receptor}"'))		
														)))
		)
	);


// $rr['operaciones']=array($rr['operaciones']['0'],$rr['operaciones']['0'],$rr['operaciones']['0']);

$suma=0;

foreach($rr['operaciones'] as $ope) $suma+=$ope['costo'];

// prin($rr);
// exit();

if($_GET['pdf']=='1'){
ob_start();
}

?>

<style type="text/Css">

<!--

.codigo {
	/*position:absolute;top:255px;left:450px;*/
	font-size: 18px;
	font-family: arial;
	margin-bottom: 10px;
	font-weight: bold;
}

td { font-family:arial; }

table.cuadro

{

    border: 0px;

    background: #FFFFFF;

    border-collapse: collapse;

	/*position:absolute;top:325px;left:10px;*/

}

table.subcuadro2

{

    border: 0px;

    background: #FFFFFF;

    border-collapse: collapse;

}

table.subcuadro2 td {

    border: solid 1px #333333;

}

table.subcuadro2 td.label { font-weight:bold; width:180px;font-size: 12px; border: solid 1px #000000; }

table.subcuadro2 td.value { font-weight:normal; width:180px;font-size: 12px; color:blue; border: solid 1px #000000; }

table.subcuadro2 td.titulo { font-weight:bold; font-size:14px; text-align:center;}

table.subcuadro2 td.linea { heigth:12px;font-size:5px;border-right:0px;border-left:0px; }



table.subcuadro

{

    border: 0px;

    background: #FFFFFF;

    border-collapse: collapse;

}

table.subcuadro td {

    border: 0px;

}

table.subcuadro td.sublabel { font-weight:normal; width:150px;font-size: 12px; border-right:solid 1px #000000; border:solid 1px #666666;  height:13px; }

table.subcuadro td.subvalue { font-weight:normal; width:20px;font-size: 15px; border:solid 1px #666666; color:blue; text-align:center;}



table.cuadro td.labelwhite { font-weight:bold; width:180px;font-size: 12px; border:1px solid #FFFFFF; }

table.cuadro td.valuewhite { font-weight:normal; width:580px;font-size: 12px; color:blue; border:1px solid #FFFFFF; }



-->

</style>

<page style="font-size: 10px">


	<div class="codigo">SOLICITUD DE PROGRAMACIÓN DE TAREAS</div>

	<table class="cuadro">

	<tr><td  class="labelwhite" style="padding-bottom:50px;" >

		<table class="subcuadro">

		<tr><td class="labelwhite">CODIGO DE PDI</td><td class="valuewhite" ><?php echo $rr['id']; ?></td></tr>
		<tr><td class="labelwhite">FECHA Y HORA DE SOLICITUD</td><td class="valuewhite" ><?php echo fecha_formato($rr['fecha_creacion'],"8b"); ?></td></tr>
		<tr><td class="labelwhite">RECEPTOR</td><td class="valuewhite" ><?php echo $rr['receptor']; ?></td></tr>
		<tr><td class="labelwhite">CHASIS</td><td class="valuewhite" ><?php echo $rr['item_item']['vin']; ?></td></tr>
		<tr><td class="labelwhite">MARCA/MODELO</td><td class="valuewhite" ><?php echo $rr['item_item']['item']['marca'].' / '.$rr['item_item']['item']['modelo']; ?></td></tr>
		<tr><td class="labelwhite">COLOR</td><td class="valuewhite" ><?php echo $rr['item_item']['color']; ?></td></tr>
		<tr><td class="labelwhite">COSTO TOTAL</td><td class="valuewhite" >S/.<?php echo $suma; ?></td></tr>

		</table>

	</td></tr>

	<tr><td  class="labelwhite" style="margin-bottom:30px;margin-top:20px;">
	<div class="codigo">DETALLE DEL PDI</div>

	</td></tr>


	<?php foreach($rr['operaciones'] as $ii=>$ope){ 

	?>

	<tr><td  class="labelwhite" style="padding-bottom:30px;">

		<table class="subcuadro" >

		<tr><td class="labelwhite">Operacion <?php echo $ii+1; ?></td><td class="valuewhite" ><?php echo $ope['nombre']; ?></td></tr>
		<tr><td class="labelwhite">Tiempo</td><td class="valuewhite" ><?php echo $ope['horas']; ?> horas</td></tr>
		<tr><td class="labelwhite">Costo</td><td class="valuewhite" >S/.<?php echo $ope['costo']; ?></td></tr>
		<tr><td class="labelwhite">FECHA Y HORA DE INICIO</td><td class="valuewhite" ><?php echo fecha_formato($ope['fecha_inicio'],"8b"); ?></td></tr>
		<tr><td class="labelwhite">FECHA Y HORA DE TÉRMINO</td><td class="valuewhite" ><?php echo fecha_formato($ope['fecha_fin'],"8b"); ?></td></tr>
		<tr><td class="labelwhite">FECHA Y HORA DE CIERRE</td><td class="valuewhite" ><?php echo fecha_formato($ope['fecha_cierre'],"8b"); ?></td></tr>
		<tr><td class="labelwhite">CONTRATISTA</td><td class="valuewhite" ><?php echo $ope['contratista']; ?></td></tr>
		<tr><td class="labelwhite">PRODUCTOS A PEDIR EN ALMACEN</td><td class="valuewhite" ><?php echo $ope['productos']; ?></td></tr>
		<tr><td class="labelwhite">OBSERVACION</td><td class="valuewhite" ><?php echo $ope['observaciones']; ?></td></tr>

		</table>

	</td></tr>

	<?php } ?>


	</table>

</page>
<?php 

if($_GET['pdf']=='1'){

	$content = ob_get_contents();

	ob_end_clean();	

    require_once('lib/pdf/html2pdf.class.php');

	$html2pdf = new HTML2PDF('P', 'A4', 'fr');

	$html2pdf->setDefaultFont('Arial');

	$html2pdf->writeHTML($content);

	$html2pdf->Output('pdi_'.$rr['id'].'.pdf');

}


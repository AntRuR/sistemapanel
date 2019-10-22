<?php

redir('loadscript.php?load=apps/imprimir_programacion_pdf.php&pdf=1&L='.$_GET['L']);

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

.formulario .linea_form {
	margin-bottom: 1px;
	width: 98%;
	height: auto;
	overflow: hidden;
	clear: left;
}

.formulario #linea_crear {
	padding-top: 5px;
}

.formulario .linea_derecha {
	float: left;
	width: auto;
	clear: none;
}

.formulario .linea_derecha_espacio {
	float: left;
	width: auto;
	clear: none;
	margin-right: 20px;
}

.formulario .linea_derecha label,.formulario .linea_derecha_espacio label
	{
	width: auto;
	margin-right: 10px;
}

.formulario .linea_derecha .form_input,.formulario .linea_derecha_espacio .form_input
	{
	width: auto;
}

.formulario .linea_derecha_inicio {
	float: left;
	width: auto;
}

.formulario {
	height: auto;
	display: block;
	border: 1px solid #DCDCDC;
	padding: 20px 0 20px 3px;
}

.formulario .in_span {
	float: left;
	height: auto;
}

.formulario .in_span span {
	float: left;
	max-width: 600px;
	overflow: hidden;
	white-space: pre-wrap;
	height: auto;
	background: #F9F9F9;
}

.formulario label {
	float: left;
	clear: left;
	width: 110px;
	padding-left: 20px;
	font-weight: bold;
	padding-top: 2px;
	padding-bottom: 2px;
	position: relative;
	font-style: italic;
	font-size: 12px;
	color: #666;
}	


li.linea_form label { width: 150px; cursor: pointer; }
li.linea_form span.spandata { float:left; width:200px; }
.form_boton_1 { position: absolute; top: 2px; right: 10px; }


 .legend{
    font-size: 14px;
    margin: 0;
    padding: 0 0 0 5px
    width: auto;
    margin-left: 5px !important;
}
 .contenido_principal {background:none !important;box-shadow:none;}
 .contenido_principal{border-radius:0;}
 .formulario {border:0;padding:0px 0 0px 0px;}
 .formulario label {padding-top:0px;padding-bottom:0px;padding-left:5px;font-weight: normal;}
 .formulario .form_input {margin-top:0px;margin-bottom:0px;}
 .boton_right{display:none;}
 .titulo_formulario {     
	font-size: 16px;
    font-weight: bold;
    margin: 0;
    padding: 0 3px;
    text-transform: uppercase;
}

-->

</style>

<page style="font-size: 10px">

<ul class="formulario">

	<div class="titulo_formulario" id="titulo_crear">SOLICITUD DE PROGRAMACIÓN DE TAREAS</div>
	<li class="linea_form linea_derecha_inicio">
	  <label>CODIGO DE PDI</label>
	  <span class="spandata"><?php echo $rr['id']; ?></span>
	</li>
	<li class="linea_form linea_derecha_inicio">
	  <label>FECHA Y HORA DE SOLICITUD</label>
	  <span class="spandata"><?php echo fecha_formato($rr['fecha_creacion'],"8b"); ?></span>
	</li>
	<li class="linea_form linea_derecha_inicio">
	  <label>RECEPTOR</label>
	  <span class="spandata"><?php echo $rr['receptor']; ?></span>
	</li>
	<li class="linea_form linea_derecha_inicio">
	  <label>CHASIS</label>
	  <span class="spandata"><?php echo $rr['item_item']['vin']; ?></span>
	</li>
	<li class="linea_form linea_derecha_inicio">
	  <label>MARCA/MODELO</label>
	  <span class="spandata"><?php echo $rr['item_item']['item']['marca'].' / '.$rr['item_item']['item']['modelo']; ?></span>
	</li>
	<li class="linea_form linea_derecha_inicio">
	  <label>COLOR</label>
	  <span class="spandata"><?php echo $rr['item_item']['color']; ?></span>
	</li>
	<li class="linea_form linea_derecha_inicio">
	  <label>COSTO TOTAL</label>
	  <span class="spandata">S/.<?php echo $suma; ?></span>
	</li>




	<li class="linea_form legend">DETALLE DEL PDI</li>


	<?php foreach($rr['operaciones'] as $ii=>$ope){ 

	?>

	<div class="groups">

		<li class="linea_form linea_derecha_inicio">
		  <label>Operacion <?php echo $ii+1; ?></label>
		  <span class="spandata"><?php echo $ope['nombre']; ?></span>
		</li>
		<li class="linea_form linea_derecha_inicio">
		  <label>Tiempo</label>
		  <span class="spandata" style="width:70px;">
		    <?php echo $ope['horas']; ?> horas
		  </span>
		</li>
		<li class="linea_form linea_derecha">
		  <label>Costo</label>
		  <span class="spandata">
		    S/.<?php echo $ope['costo']; ?>
		  </span>
		</li>
		<li class="linea_form linea_derecha_inicio">
		  <label>FECHA Y HORA DE INICIO</label>
		  <span class="spandata"><?php echo fecha_formato($ope['fecha_inicio'],"8b"); ?></span>
		</li>
		<li class="linea_form linea_derecha_inicio">
		  <label>FECHA Y HORA DE TÉRMINO</label>
		  <span class="spandata"><?php echo fecha_formato($ope['fecha_fin'],"8b"); ?></span>
		</li>
		<li class="linea_form linea_derecha_inicio">
		  <label>FECHA Y HORA DE CIERRE</label>
		  <span class="spandata"><?php echo fecha_formato($ope['fecha_cierre'],"8b"); ?></span>
		</li>
		<li class="linea_form linea_derecha_inicio">
		  <label>CONTRATISTA</label>
		  <span class="spandata"><?php echo $ope['contratista']; ?></span>
		</li>
		<li class="linea_form linea_derecha_inicio">
		  <label>PRODUCTOS A PEDIR EN ALMACEN</label>
		  <span class="spandata"><?php echo $ope['productos']; ?></span>
		</li>
		<li class="linea_form linea_derecha_inicio">
		  <label>OBSERVACION</label>
		  <span class="spandata"><?php echo $ope['observaciones']; ?></span>
		</li>

	</div>

<?php } ?>

</ul>

</page>

<?php if($_GET['pdf']!='1'){ ?>
<input type="button" class="form_boton_1" value="PDF" onclick="location.href='loadscript.php?load=apps/imprimir_programacion_pdf.php&pdf=1&L=<?php echo $_GET['L']; ?>';">
<?php } ?>






<?php 

	if($_GET['pdf']=='1'){


		$content = ob_get_contents();
		ob_end_clean();		

		// echo $content;exit();

		// require_once(".gitignore");
		// exit();

		// chdir('base2');

		// echo getcwd();

	    require_once('lib/pdf/html2pdf.class.php');

		$html2pdf = new HTML2PDF('P', 'A4', 'fr');

		//$html2pdf->setModeDebug();
		$html2pdf->setDefaultFont('Arial');

		//$html2pdf->pdf->IncludeJS("print(true);");		

		$html2pdf->writeHTML($content);

		$html2pdf->Output('pdi.pdf');

	}




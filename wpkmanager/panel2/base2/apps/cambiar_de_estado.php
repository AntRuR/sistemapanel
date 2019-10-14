<?php //á

@session_start(); // Iniciar variables de sesión

// echo getcwd();exit();

chdir("../../");

// include("lib/compresionInicio.php");
include("lib/global.php");	
include("lib/conexion.php");
include("lib/class.phpmailer.php");
include("lib/mysql3.php");
include("lib/util2.php");

// prin($_GET);
// select 3382 from productos_ventas where id=40


// $id_venta=$_GET['L'];
$id_venta=dato("id_ventas_item","productos_ventas","where id=".$_GET['L']);


$ventas_status=get_valores("id","nombre","ventas_status","");


$venta=fila(
[
'ventas_items.id as id',
'ventas_items.id_status as id_status',
'ventas_items.id_status_pedido as id_status_pedido',
'ventas_items.id_usuario as id_usuario',
'concat_ws(" ",usuarios.nombre,usuarios.apellidos) as asesor_nombre',
'usuarios.email as asesor_email',
'concat_ws(" ",usuarios2.nombre,usuarios2.apellidos) as jefe_nombre',
'usuarios2.email as jefe_email',
'productos_items.nombre as proyecto'
],
"ventas_items",
"
left join usuarios on id_usuario=usuarios.id
left join usuarios2 on id_jefe=usuarios2.id
left join productos_items on id_item=productos_items.id
where ventas_items.id=".$id_venta,
0);

// prin($venta);



if($_GET['ajax']=='1'){


	update([
		'id_status_pedido'=>$_POST['new_state']
		],'ventas_items','where id='.$id_venta);

	$html ='';
	$html.="Solicitud de Validación de Cambio de Estado<br><br>";
	$html.="<a href='http://crmsche.info/panel/custom/ventas_items.php?i=".$venta['id']."'>Cotización #".$venta['id']."</a><br><br>";	
	$html.="Vendedor: ".$venta['asesor_nombre'].'<br><br>';
	$html.="<br>";
	$html.='<br>';
	$html.="<a href='http://crmsche.info/panel/custom/ventas_items.php?aceptar=1&i=".$venta['id']."'>ACEPTAR</a> ó ";
	$html.="<a href='http://crmsche.info/panel/custom/ventas_items.php?cancelar=1&i=".$venta['id']."'>CANCELAR</a> ";
	$html.='<br>';


	$email_cliente=enviar_email(
		array(
		'emails'=>array(
						// 'ecanevello@schgrupo.com',
						'wtavara@prodiserv.com',
						$venta['jefe_email'],
						'guillermolozan@gmail.com',
						)
		,'Subject'=>"Solicitud de Validación de Desistimiento - Cotización #".$venta['id']
		,'body'=>$html
		,'From'=>$venta['asesor_email']
		,'FromName'=>$venta['asesor_nombre']
		// ,'Logo'=>$linea['cuenta']['logo']
		)
	);	


	$html ='';
	$html.="Haz enviado la solicitud de Validación de Cambio de Estado<br><br>";
	$html.="<a href='http://crmsche.info/panel/custom/ventas_items.php?i=".$venta['id']."'>Cotización #".$venta['id']."</a><br><br>";	
	$html.="Vendedor: ".$venta['asesor_nombre'].'<br><br>';
	$html.="<br>";
	$html.='<br>';
	$html.="Debe comunicarse con su jefe comercial, solicitándole la aprobación";
	$html.='<br>';


	$email_cliente2=enviar_email(
		array(
		'emails'=>array(
						// 'ecanevello@schgrupo.com',
						'wtavara@prodiserv.com',
						$venta['asesor_email'],
						'guillermolozan@gmail.com',
						)
		,'Subject'=>"Solicitud de Validación de Cambio de Estado - Cotización #".$venta['id']
		,'body'=>$html
		,'From'=>$venta['asesor_email']
		,'FromName'=>$venta['asesor_nombre']
		// ,'Logo'=>$linea['cuenta']['logo']
		)
	);	


	echo ($email_cliente)?'email enviado':'no fue enviado';

} else {

?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<link href="../../css/bootstrap.css?r=102" rel="stylesheet" type="text/css">
	<link href="../../css/css.css?r=102" rel="stylesheet" type="text/css">
	<link href="../../config/main.css?r=102" rel="stylesheet" type="text/css">
	<script src="../../js/mootools-core-1.4.2-full-compat-yc.js" type="text/javascript"></script>
	<script src="../../js/mootools-more-1.4.0.1.js" type="text/javascript"></script>
	<script src="../../js/js.js?r=102" type="text/javascript"></script>
	<style>
		body {
			text-align: left;
		}
	</style>
	<script>
	function guardar(){
		new Request({
			url:"<?php echo $SERVER['RUTA'];?>&ajax=1",
			method:'post',
			data:{
				'new_state'		:'9'
			},
			onSuccess:function(eee){
				document.getElementById('form').innerHTML='<h2>La solicitud de cambio de estado fue enviada a <?php echo $venta["jefe_nombre"];?> para su aprobación</h2>';
				console.log(eee);
				// alert('mensaje enviado');
				window.close();
			}
		}).send();				
	}
	</script>
</head>
<body>

	<ul class="formulario" id="form">
	<?php

		$noshow=0;

		if($venta['id_status']=='9'){

			echo "<h2>Actualmente esta atención se encuentra entregada</h2>";
			$noshow=1;

		}

		if($venta['id_status_pedido']=='9'){

			echo "<h2>Actualmente hay una solicitud de cambio de estado esperando aprobación</h2>";
			$noshow=1;

		}

		if(!$noshow){

		?>
		<h1 class="titulo_formulario">Se enviará una solicitud para que se marque como entregada</h1>

		<li class="linea_form">
			<label>&nbsp;</label>
			<input type="button" id="ed_save" class="btn  btn-primary" value="Solicitar Aprobación para entrega" onclick="guardar();">
			<!-- <input type="button" id="ed_cancelar" class="btn " value="Cancelar" onclick="cancelar();"> -->
		</li>
		<?php 

		} 

		?>
	</ul>
</body>
</html><?

}
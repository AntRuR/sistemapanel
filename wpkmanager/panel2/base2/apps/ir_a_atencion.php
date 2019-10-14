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
'ventas_items.pedido as pedido',

'ventas_items.fecha_creacion2 as fecha_creacion2',
'ventas_items.fecha_separacion as fecha_separacion',
'ventas_items.fecha_vendido as fecha_vendido',

'ventas_items.id_grupocanal as id_grupocanal',
'ventas_items.id_subgrupocanal as id_subgrupocanal',
'ventas_items.id_canal as id_canal',
'ventas_items.otro_canal as otro_canal',

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
</head>
<body>
	<ul class="formulario" id="form">
		<li class="linea_form">
			<label>Atención</label>
			<a target="_top" href="../../custom/ventas_items.php?i=<?php echo $id_venta;?>">ir a atención <?php echo $id_venta;?></a>
		</li>
		<li class="linea_form">
			<label>Estado</label>
			<?php echo $ventas_status[$venta['id_status']]; ?>
		</li>		
		<li class="linea_form">
			<label>Separación</label>
			<?php echo fecha_formato($venta['fecha_separacion'],'2'); ?>
		</li>		
		<li class="linea_form">
			<label>Vendido</label>
			<?php echo fecha_formato($venta['fecha_vendido'],'2'); ?>
		</li>	
		<li class="linea_form">
			<label>Canal</label>
			<?php echo dato('nombre','contacto_grupos','where id='.$venta['id_grupocanal']); ?> |
			<?php echo dato('nombre','contacto_subgrupos','where id='.$venta['id_subgrupocanal']); ?> |
			<?php echo dato('nombre','contacto_canales','where id='.$venta['id_canal']); ?>
		</li>	
		<li class="linea_form">
			<label>Otro Canal</label>
			<?php echo $venta['otro_canal']; ?>
		</li>										
		<li class="linea_form">
			<label>PEDIDO</label>
			<div style='padding-left:20px;'>
			<?php 

				$statuss=get_valores("id","nombre","productos_stock_status","where 1");
				// prin($statuss);

				$pedido=json_decode($venta['pedido']);

				$html='';
				foreach($pedido as $pedi){
					// prin($pedi);
					$html.='<div>';
					switch($pedi->type){
						case "departamento":
							$ite=fila("id_status","productos_items_items","where id=".$pedi->id);
							$html.="Departamento num ".$pedi->num." (id=".$pedi->id.") : ".$statuss[$ite['id_status']].'';
						break;
						case "estacionamiento":
							$ite=fila("id_status","productos_estacionamientos_items_items","where id=".$pedi->id);
							$html.="Estacionamiento num ".$pedi->num." (id=".$pedi->id.") : ".$statuss[$ite['id_status']].'';
						break;
						case "deposito":
							$ite=fila("id_status","productos_depositos_items_items","where id=".$pedi->id);
							$html.="Deposito num ".$pedi->num." (id=".$pedi->id.") : ".$statuss[$ite['id_status']].'';
						break;						
					}
					$html.='</div>';
				}



			?>
			<?php echo $html; ?>
			</div>
		</li>				
	</ul>
</body>
</html><?

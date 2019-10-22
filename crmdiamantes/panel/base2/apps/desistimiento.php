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

if($_GET['OT'] == 'ventas_mensajes'){

	$_GET['L']=dato("id_grupo","ventas_mensajes","where id=".$_GET['L']);
	$_GET['OT']='ventas_items';

}

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
left join usuarios on ventas_items.id_usuario=usuarios.id
left join usuarios2 on usuarios.id_jefe=usuarios2.id
left join productos_items on id_item=productos_items.id
where ventas_items.id=".$_GET['L'],
0);

// prin($venta);
// prin($venta['asesor_email']);
if($venta['asesor_email']=='massimtr@yahoo.com')
	$venta['asesor_email']='massimtr@prueba.com';


$desistimientos=select("id,nombre","desistimientos","where 1 order by nombre asc",0);


if($_GET['ajax']=='1'){


	// if($_GET['L']!='182334')
	update([
		'motivo'=>$_POST['motivo'],
		'otro_motivo'=>$_POST['otro_motivo'],
		'id_status_pedido'=>'17',
		],'ventas_items','where id='.$_GET['L']);

	$venta_motivo=fila("motivo,otro_motivo","ventas_items","where id=".$_GET['L']);

	$motivo=($venta_motivo['motivo']=='0')?$venta_motivo['otro_motivo']:dato("nombre","desistimientos","where id=".$venta_motivo['motivo']);

	$html ='';
	$html.="Solicitud de Validación de Desistimiento<br><br>";
	$html.="<a href='http://incapower.pe/panel/custom/ventas_items.php?i=".$venta['id']."'>Cotización #".$venta['id']."</a><br><br>";	
	$html.="Vendedor: ".$venta['asesor_nombre'].'<br><br>';
	$html.="Motivo: <br>".$motivo;
	$html.="<br>";
	$html.='<br>';
	$html.="<a href='http://incapower.pe/panel/custom/ventas_items.php?aceptar=1&i=".$venta['id']."'>ACEPTAR</a> ó ";
	$html.="<a href='http://incapower.pe/panel/custom/ventas_items.php?cancelar=1&i=".$venta['id']."'>CANCELAR</a> ";
	$html.='<br>';


	$email_cliente=enviar_email(
		array(
		'emails'=>array(
						// 'ecanevello@schgrupo.com',
						'wtavara@prodiserv.com',
						$venta['jefe_email'],
						'guillekldc@gmail.com',
						)
		,'Subject'=>"Solicitud de Validación de Desistimiento - original - Cotización #".$venta['id']
		,'body'=>$html
		,'From'=>$venta['asesor_email']
		// ,'From'=>'prueba@prueba.com'
		,'FromName'=>$venta['asesor_nombre']
		// ,'Logo'=>$linea['cuenta']['logo']
		)
	);	

	echo "\nemail a jefe: ";
	echo ($email_cliente)?'email enviado':'no fue enviado';

	$html ='';
	$html.="Haz enviado la solicitud de Validación de Desistimiento<br><br>";
	$html.="<a href='http://incapower.pe/panel/custom/ventas_items.php?i=".$venta['id']."'>Cotización #".$venta['id']."</a><br><br>";	
	$html.="Vendedor: ".$venta['asesor_nombre'].'<br><br>';
	$html.="Motivo: <br>".$motivo;
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
						'guillekldc@gmail.com',
						)
		,'Subject'=>"Solicitud de Validación de Desistimiento - copia - Cotización #".$venta['id']
		,'body'=>$html
		,'From'=>$venta['asesor_email']
		// ,'From'=>'prueba@prueba.com'
		,'FromName'=>$venta['asesor_nombre']
		// ,'Logo'=>$linea['cuenta']['logo']
		)
	);	

	echo "\nemail a asesor: ";
	echo ($email_cliente2)?'email enviado':'no fue enviado';

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
	function otros(dis){
		if(dis=='0'){
			document.getElementById("li_otro_motivo").style.visibility='visible';
			document.getElementById("in_otro_motivo").focus();
		} else {
			document.getElementById("li_otro_motivo").style.visibility='hidden';		
		}
	}
	function guardar(){
		new Request({
			url:"<?php echo $SERVER['RUTA'];?>&ajax=1",
			method:'post',
			data:{
				'motivo'			:document.getElementById('in_motivo').value,
				'otro_motivo'	:document.getElementById('in_otro_motivo').value
			},
			onSuccess:function(eee){
				document.getElementById('form').innerHTML='<h2>La solicitud de desistimiento fue enviada a <?php echo $venta["jefe_nombre"];?> para su aprobación</h2>';
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

		if($venta['id_status']=='17'){

			echo "<h2>Actualmente esta atención se encuentra desistida</h2>";
			$noshow=1;

		}

		if($venta['id_status_pedido']=='17'){

			echo "<h2>Actualmente hay una solicitud de desistimiento esperando aprobación</h2>";
			$noshow=1;

		}

		if(!$noshow){

		?>
		<h1 class="titulo_formulario">Por qué motivo el cliente ha desistido?</h1>

		<li class="linea_form linea_derecha_inicio">
			<label for="in_motivo" id="la_motivo">Motivo</label>
			<select onchange="otros(this.value);" id="in_motivo">
				<?php foreach($desistimientos as $des){
					echo "<option value='".$des['id']."'>".$des['nombre']."</option>";
				} ?>
				<option value="0">OTRO MOTIVO</option>
			</select>
		</li>
		<li class="linea_form linea_derecha_inicio" id="li_otro_motivo" style="visibility:hidden;">
			<label for="in_otro_motivo" id="la_otro_motivo">Otro Motivo</label>
			<textarea id="in_otro_motivo" style="width:446px;height:137px;"></textarea>	
		</li>

		<li class="linea_form">
			<label>&nbsp;</label>
			<input type="button" id="ed_save" class="btn  btn-primary" value="Solicitar Aprobación para desistimiento" onclick="guardar();">
			<!-- <input type="button" id="ed_cancelar" class="btn " value="Cancelar" onclick="cancelar();"> -->
		</li>
		<?php 

		} 

		?>
	</ul>
</body>
</html><?

}
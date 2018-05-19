</div>
<div>
<?php



// prin($SERVER);
// prin($_SESSION);
if($_SESSION['usuario_id']!=''){


	$sess=fila("id_permisos","usuarios_acceso","where id=".$_SESSION['usuario_id']);
	// prin($sess);
	if(in_array($sess['id_permisos'],['1','2','4','10','11','12']) and $_GET['i']!=''){
	
		$vens=fila("id_status,id_status_pedido,motivo,otro_motivo","ventas_items","where id=".$_GET['i']);
		//prin($vens);
		$motivo=($vens['motivo']=='0')?$vens['otro_motivo']:dato("nombre","desistimientos","where id=".$vens['motivo']);

		if($vens['id_status_pedido']!='' and $vens['id_status_pedido']!='0' and $vens['id_status']!=$vens['id_status_pedido']){

			if($_GET['aceptar']=='1'){

				if($vens['id_status_pedido']=='17'){ // desistido

					insert([
							"fecha_creacion"=>"now()",
							"id_grupo"	=>	$_GET['i'],
							"id_usuario"=>	$vens["id_usuario"],
							"user"		=>	$vens["user"],
							"texto"		=>	"Desistió, Motivo: ".$motivo,
							"estado"		=>	"6",
							"tipo"		=>	"3",

							]
							,"ventas_mensajes"
							,0
							);

					update(
					['cumplido'=>'1','estado'=>'6'],
					'ventas_mensajes',
					"where alerta is not null and id_grupo=".$_GET['i'],
					0
					);

				}

				if($vens['id_status_pedido']=='10'){ // vendido

					insert([
							"fecha_creacion"=>"now()",
							"id_grupo"	=>	$_GET['i'],
							"id_usuario"=>	$vens["id_usuario"],
							"user"		=>	$vens["user"],
							"texto"		=>	"Vendido",
							"estado"		=>	"7",
							"tipo"		=>	"3",

							]
							,"ventas_mensajes"
							,0
							);

					update(
					['cumplido'=>'1','estado'=>'7'],
					'ventas_mensajes',
					"where alerta is not null and id_grupo=".$_GET['i'],
					0
					);

				}				

				$acepto1=update(['id_status'=>$vens['id_status_pedido'],'id_status_pedido'=>''],"ventas_items","where id=".$_GET['i']);

			}

			if($_GET['cancelar']=='1'){

				$denego1=update(['id_status_pedido'=>'','motivo'=>'','otro_motivo'=>''],"ventas_items","where id=".$_GET['i']);

			}			

			if($acepto1){

				?><div class="alert alert-success div_bloque_cuerpo">
					<div>Cambio de estado pendiente de validación</div>					
					<strong>ACEPTADO!</strong>
				</div><?php

			} elseif($denego1){

				?><div class="alert alert-error div_bloque_cuerpo">
					<div>Cambio de estado pendiente de validación</div>					
					<strong>CANCELADO!</strong>
				</div><?php				

			} else {

			$ventas_status=get_valores("id","nombre","ventas_status","");

			$motiss=($vens['motivo']=='0')?$vens['otro_motivo']:dato("nombre","desistimientos","where id=".$vens['motivo']);

			?>
			<div class="alert alert-info div_bloque_cuerpo">

				<div>Cambio de estado pendiente de validación</div>
				<div>Estado Actual : <strong><?php echo $ventas_status[$vens['id_status']];?></strong></div>
				<div>Estado a Validar : <strong><?php echo $ventas_status[$vens['id_status_pedido']];?></strong></div>

				<div>
				<a class="btn btn-primary " href="custom/ventas_items.php?i=<?php echo $_GET['i']; ?>&aceptar=1">ACEPTAR</a>
				<a class="btn btn-inverse " href="custom/ventas_items.php?i=<?php echo $_GET['i']; ?>&cancelar=1">CANCELAR</a>
				</div>

			</div>

			<?php

			}

		}

	}

}
?>
<!--<?php //á

//$alertas=select("alerta_fecha,estado","ventas_alertas","where 1");

//prin($alertas);

//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  DATE(alerta_fecha) < DATE(NOW()) AND cumplido=0

//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha>NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0

//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha<NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0

update(array('estado'=>'1'),"ventas_alertas","where alerta_fecha < NOW() AND (cumplido=0 or cumplido is null) and ((estado!=1 and estado is not null) or estado is null) ",0);
update(array('estado'=>'2'),"ventas_alertas","where NOW() < alerta_fecha AND DATE(alerta_fecha) = DATE(NOW()) AND (cumplido=0 or cumplido is null) and ((estado!=2 and estado is not null) or estado is null) ",0);
update(array('estado'=>'3'),"ventas_alertas","where alerta_fecha < NOW() AND (cumplido=0 or cumplido is null) and ((estado!=3 and estado is not null) or estado is null) ",0);
update(array('estado'=>'4'),"ventas_alertas","where cumplido=1 and ((estado!=4 and estado is not null) or estado is null)",0);
// update(array('estado'=>'','cumplido'=>'null'),"ventas_mensajes","where (alerta_fecha='0000-00-00 00:00:00' or alerta_fecha is null) and estado!='' and estado is not null",0);


update(array(
'ventas_mensajes.estado'=>'5'),
"ventas_mensajes left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo",
"where 
ventas_items.id_status_pedido!=''
and ventas_items.id_status!=17
and ventas_mensajes.alerta_fecha!='0000-00-00 00:00:00' and ventas_mensajes.alerta_fecha < NOW() AND (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null) 
and ((ventas_mensajes.estado!=5 and ventas_mensajes.estado is not null) or ventas_mensajes.estado is null) ",0);

update(array(
'ventas_mensajes.estado'=>'6'),
"ventas_mensajes left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo",
"where 
ventas_items.id_status='17'
and ventas_mensajes.alerta_fecha!='0000-00-00 00:00:00' AND (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null) 
and ((ventas_mensajes.estado!=6 and ventas_mensajes.estado is not null) or ventas_mensajes.estado is null) 
",0);


?>-->
<script>

function ondlselect(id){

	if(id!=''){

		new Request({url:'base2/checkowner.php?cl='+id,  method:'get', onSuccess:function(ee) { 

			var json=eval("(" + ee + ")");
			// debugger;
			//alert(json.user+' = <?php echo $_SESSION['usuario_id'];?>');

			if(json.user!='<?php echo $_SESSION['usuario_id'];?>'){

				//alert('de otro usuario');
				console.log(ee);
				console.log('pertenece a otro usuario');

				$('span_id_cliente_dl').innerHTML='<span style="float:right;margin-left:4px;">es obligatorio validar los datos antes de grabar</span> <a rel="width:750,height:400" class="mb updateforeig" style="float:right !important;margin:0 !important;" href="formulario_quick.php?OT=clientes&amp;ran=1&amp;proceso=&amp;parent=VENTAS_ITEMS&amp;load='+encodeURIComponent(ee)+'"></a>';

				$('in_id_cliente').value='';


			} else {

				$('span_id_cliente_dl').innerHTML='<a rel="width:750,height:400" class="mb crearforeig" style="float:right !important;margin:0 !important;" href="formulario_quick.php?OT=clientes&amp;ran=1&amp;proceso=&amp;parent=VENTAS_ITEMS"></a>';

				console.log(ee);
				console.log('le pertenece');

			}

			charge_multibox();

		 } } ).send();

	}

}

window.addEvent('domready',function(){ 

//alert('habla causa');

//in_id_cliente

}); 

</script>
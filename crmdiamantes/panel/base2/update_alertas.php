<!--<?php //á

//$alertas=select("alerta_fecha,estado","ventas_alertas","where 1");

//prin($alertas);

//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  DATE(alerta_fecha) < DATE(NOW()) AND cumplido=0

//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha>NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0

//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha<NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0

update(array('estado'=>'1'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and DATE(alerta_fecha) > DATE(NOW()) AND (cumplido=0 or cumplido is null)",0);
update(array('estado'=>'2'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and NOW() < alerta_fecha AND DATE(alerta_fecha) = DATE(NOW()) AND (cumplido=0 or cumplido is null)",0);
update(array('estado'=>'3'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and alerta_fecha < NOW() AND (cumplido=0 or cumplido is null)",0);
update(array('estado'=>'4'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and cumplido=1",0);
update(array('estado'=>''),"ventas_mensajes","where alerta_fecha='0000-00-00 00:00:00'",0);

//update(array('estado'=>'2'),"ventas_alertas","where alerta_fecha = NULL",1);

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
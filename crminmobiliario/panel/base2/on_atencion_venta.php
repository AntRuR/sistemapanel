<?php //á 

// prin($_GET);

// echo "</div><div style='text-align:left;'>";


$fila=fila("
	id,
	saldo_inmobiliaria,
	saldo_inmobiliaria_cuotas,
	saldo_ahorro,
	saldo_ahorro_cuotas,
	id_canal,
	id_cliente,
	id_item,
	pedido,
	forma_pago,
	pvlista,
	pvpromocion,
	porcentaje_cuota_inicial,
	cuota_inicial,
	saldo_financiar,
	separacion,
	id_banco,
	id_sectorista,
	id_usuario",
	
	"ventas_items",
	
	"where id=".$_GET['id'],

	0);

	$venta=fila("id","productos_ventas",'where id_ventas_item='.$fila['id'],0);
	// prin($venta);

	// prin($fila['pedido']);
	
	if(sizeof(json_decode($fila['pedido']))>0){
		echo '<table class="tabla_objetos table table-bordered">
		<thead>
		<tr>
		<th>Inmuebles</th>
		<th>Precio</th>
		<th>Estado</th>
		</tr>
		</thead>
		<tbody>
		';
		$proceder=1;

		foreach(json_decode($fila['pedido']) as $pedido){

			if($pedido->type=="departamento")
				$tt="productos_items_items";
			elseif($pedido->type=="estacionamiento")
				$tt="productos_estacionamientos_items_items";
			elseif($pedido->type=="deposito")
				$tt="productos_depositos_items_items";


			$fila0=fila("id_status",$tt,"where id=".$pedido->id,0,['status'=>['fila'=>['nombre,color','productos_stock_status','where id={id_status}',0]]]);						


			// prin($fila0['id_status']);


			if($tt=='productos_items_items'){
				$id_item_item=$pedido->id;
			}
			if($tt=='productos_estacionamientos_items_items'){
				$id_estacionamientos_item_item=$pedido->id;
			}
			if($tt=='productos_depositos_items_items'){
				$id_depositos_item_item=$pedido->id;
			}



			// prin($fila);
			
			echo '<tr>';		
			echo '<td>'.$pedido->name.'</td>';
			echo '<td>'.$pedido->price.'</td>';
			echo '<td><span style="color:white;background:'.$fila0['status']['color'].';">'.$fila0['status']['nombre'].'</span></td>';
			echo '</tr>';

			if(in_array($fila0['id_status'],[2,3,4]) and $proceder==1){ $proceder=0; } 

		}
		echo '</tbody>
		</table>';
	}

	if(sizeof(json_decode($fila['pedido']))==0){

		echo '<div class="alert alert-danger">
		Esta atención no tiene ningun inmueble agregado<br>
		Es necesario agregar inmueble antes de generar una venta</div>';

		exit();

	}

	// if($venta['id']!=''){

	// 	echo '<div class="alert alert-danger">El inmueble que desea vender ya está separado o vendido</div>';

	// 	exit();		

	// }

	if(!$proceder){

		echo '<div class="alert alert-danger">El inmueble que desea vender ya está separado o vendido</div>';

		echo '<div><a target="_top" href="custom/productos_ventas.php?i='.$venta['id'].'"><b>IR A VENTA</b></a></div>';

		exit();

	}

// prin($fila);
?>
<script>
window.addEvent('domready',function(){

	// alert('<?php echo $fila['forma_pago']; ?>');

	$('in_id_ventas_item').value           	 ='<?php echo $fila['id']; ?>';
	// $('in_id_cliente').value               	 ='<?php echo $fila['id_cliente']; ?>';
	// $('in_id_item').value                  	 ='<?php echo $fila['id_item']; ?>';
	$('in_forma_pago').value               	 ='<?php echo $fila['forma_pago']; ?>';
	$('in_pvlista').value                  	 ='<?php echo $fila['pvlista']; ?>';
	$('in_pvpromocion').value              	 ='<?php echo $fila['pvpromocion']; ?>';
	$('in_porcentaje_cuota_inicial').value 	 ='<?php echo $fila['porcentaje_cuota_inicial']; ?>';
	$('in_cuota_inicial').value            	 ='<?php echo $fila['cuota_inicial']; ?>';
	$('in_saldo_financiar').value          	 ='<?php echo $fila['saldo_financiar']; ?>';
	$('in_separacion').value               	 ='<?php echo $fila['separacion']; ?>';
	$('in_id_usuario').value               	 ='<?php echo $fila['id_usuario']; ?>';

	$('in_saldo_inmobiliaria').value         ='<?php echo $fila['saldo_inmobiliaria']; ?>';
	$('in_saldo_inmobiliaria_cuotas').value  ='<?php echo $fila['saldo_inmobiliaria_cuotas']; ?>';
	$('in_saldo_ahorro').value               ='<?php echo $fila['saldo_ahorro']; ?>';
	$('in_saldo_ahorro_cuotas').value        ='<?php echo $fila['saldo_ahorro_cuotas']; ?>';

	$('in_id_item_item').value        		 ='<?php echo $id_item_item; ?>';

	// $('in_forma_pago').fireEvent('change');
	if($('in_forma_pago').value=='1'){
		$0("id_in_porcentaje_cuota_inicial");$0("id_in_cuota_inicial");$0("id_in_saldo_financiar");
	}
	if($('in_forma_pago').value=='2'){
		$0("id_in_porcentaje_cuota_inicial");$0("id_in_cuota_inicial");$0("id_in_saldo_financiar");
	}
	if($('in_forma_pago').value=='3'){
		$1("id_in_porcentaje_cuota_inicial");$1("id_in_cuota_inicial");$1("id_in_saldo_financiar");
	}
	if($('in_forma_pago').value=='4'){
		$1("id_in_porcentaje_cuota_inicial");$1("id_in_cuota_inicial");$1("id_in_saldo_financiar");
		$1("id_in_saldo_inmobiliaria");$1("id_in_saldo_inmobiliaria_cuotas");$1("id_in_saldo_ahorro");$1("id_in_saldo_ahorro_cuotas");
	}	

});
</script>

<?php //á 
$fila=fila("id_canal,id_cliente,id_item,pedido,forma_pago,pvlista,pvpromocion,porcentaje_cuota_inicial,cuota_inicial,saldo_financiar,separacion,id_banco,id_sectorista,id_usuario,id_jefe","ventas_items","where id=".$_GET['id']);
?>
<script>
window.addEvent('domready',function(){

	$('in_id_cliente').value               ='<?php echo $fila['id_cliente']; ?>';
	$('in_id_item').value                  ='<?php echo $fila['id_item']; ?>';
	$('in_pedido').value                   ='<?php echo $fila['pedido']; ?>';
	$('in_forma_pago').value               ='<?php echo $fila['forma_pago']; ?>';
	$('in_pvlista').value                  ='<?php echo $fila['pvlista']; ?>';
	$('in_pvpromocion').value              ='<?php echo $fila['pvpromocion']; ?>';
	$('in_porcentaje_cuota_inicial').value ='<?php echo $fila['porcentaje_cuota_inicial']; ?>';
	$('in_cuota_inicial').value            ='<?php echo $fila['cuota_inicial']; ?>';
	$('in_saldo_financiar').value          ='<?php echo $fila['saldo_financiar']; ?>';
	$('in_separacion').value               ='<?php echo $fila['separacion']; ?>';
	$('in_id_banco').value                 ='<?php echo $fila['id_banco']; ?>';
	$('in_id_sectorista').value            ='<?php echo $fila['id_sectorista']; ?>';
	$('in_id_usuario').value               ='<?php echo $fila['id_usuario']; ?>';
	$('in_id_jefe').value                  ='<?php echo $fila['id_jefe']; ?>';
	$('in_id_canal').value                 ='<?php echo $fila['id_canal']; ?>';

	// $('in_forma_pago').fireEvent('change');
	if($('in_forma_pago').value=='1' || $('in_forma_pago').value=='2'){
		$0("id_in_porcentaje_cuota_inicial");$0("id_in_cuota_inicial");$0("id_in_saldo_financiar");
	}
	if($('in_forma_pago').value=='3' || $('in_forma_pago').value=='4'){
		$1("id_in_porcentaje_cuota_inicial");$1("id_in_cuota_inicial");$1("id_in_saldo_financiar");
		
	}	

});
</script>

<?php  
if($_GET['id']!=''){
	$venta=fila("id_item_item","productos_ventas","where id=".$_GET['id']." and saldo=0");
	if($venta['id_item_item']){
		update(array('estado'=>'4'),"ventas_items_items","where id='".$venta['id_item_item']."'");
	}
}

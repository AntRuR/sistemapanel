<?php  
if($_GET['i']!=''){
	$venta=fila("id_item_item","productos_ventas","where id=".$_GET['i']." and saldo=0");
	if($venta['id_item_item']){
		update(array('estado'=>'4'),"productos_items_items","where id='".$venta['id_item_item']."'");
	}
}

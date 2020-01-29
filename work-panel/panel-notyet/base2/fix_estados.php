<?php  

// if($_GET['a']=='1'){




if($_GET['i']!=''){
	$venta=fila("id_item_item","productos_ventas","where id=".$_GET['i']." and saldo=0");
	if($venta['id_item_item']){
		update(array('estado'=>'4'),"productos_items_items","where id='".$venta['id_item_item']."'");
	}
} else {


	function onload_include_after_query(){

		global $lineas;	
		global $ids2;
		// prin($lineas);
		foreach($lineas as $linea){
			// echo $linea['id']."<br>\n";
			$idss[]=$linea['id'];
		}
		$ids2=implode(',',$idss);

		$ventas=select("id_item_item","productos_ventas","where id in (".$ids2.") and saldo=0",0);
		// prin($ventas);
		foreach($ventas as $venta){
			if($venta['id_item_item']){
				update(array('estado'=>'4'),"productos_items_items","where id='".$venta['id_item_item']."'");
			}
		}
		// 		
		
	}
	


}







// }
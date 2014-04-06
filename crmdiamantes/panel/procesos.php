<?php //á
?><div style="clear:left;">Procesos</div><?php

include("lib/webutil.php");
require_once('lib/simple_html_dom.php');
chdir("base2/procesos");

set_time_limit(0);

echo "running.................................";


$entregas=select("id,id_cliente,id_item_item","productos_entregas","order by id desc limit 0,1000",0);
// prin($entregas);



foreach($entregas as $entrega)
{
	$item_item=select_fila("venta_id_cliente","productos_items_items","where id='".$entrega['id_item_item']."'",0);
	// prin($item_item);
	// $item_venta=select_fila("venta_id_cliente","productos_ventas","where id_item_item='".$entrega['id_item_item']."'",1);
	// prin($item_venta);
	update(array('id_cliente'=>$item_item['venta_id_cliente']),'productos_entregas','where id="'.$entrega['id'].'"',0);

}

// prin($entregas);
// foreach($entregas as $entrega){
// 	if($entrega["id_cliente"]!='')
// 	update(array("id_cliente"=>$venta["id_cliente"]),"productos_entregas","where id_grupo=".$venta["id"],0);

// }


// include("tramites2014u.php");
// include("importaciones2014u.php");

//delete("productos_items_items","where id>");

// $ventas=select("id,id_cliente","ventas_items","order by id desc limit 0,10",0);
// foreach($ventas as $venta){
// 	if($venta["id_cliente"]!='')
// 	update(array("id_cliente"=>$venta["id_cliente"]),"ventas_mensajes","where id_grupo=".$venta["id"],0);

// }

//delete("productos_items_items","where id>");


// include("final1.php");
/*

require_once 'lib/PHPExcel.php';
require_once 'lib/PHPExcel/IOFactory.php';

$file='base2/prueba.xls';

$objReader = PHPExcel_IOFactory::createReader('Excel5');

$objReader->setReadDataOnly(true);

$objPHPExcel = $objReader->load($file);	

$sheets=$objPHPExcel->getSheetNames();

foreach($sheets as $sheet){
	
	if($sheet){
	
		$objWorksheet = $objPHPExcel->getSheetByName($sheet);
		$highestRow = $objWorksheet->getHighestRow();
		$highestColumn = $objWorksheet->getHighestColumn();
		$state = $objWorksheet->getSheetState();
		if($state=='visible' and $highestRow>1){
			$Sheets[]=array(
				 'name'=>$Marcas[trim($sheet)]
				,'rows'=>$highestRow
				,'colums'=>$highestColumn
				,'sheet'=>$objWorksheet
			);
		}
	}
	
} 

prin($Sheets);
*/

?>
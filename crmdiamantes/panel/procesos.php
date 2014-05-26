<?php //á
?><div style="clear:left;">Procesos</div><?php

include("lib/webutil.php");
require_once('lib/simple_html_dom.php');
chdir("base2/procesos");

set_time_limit(0);

echo "running.................................";
//delete("productos_items_items","where id>");


// yearfab as yearfab,id_color as id_color,id_item as id_item,nummotor as nummotor,venta_id_cliente as id_cliente,venta_id_vendedor as id_vendedor||where id=[id_item_item]'
// $atencion=select('','productos_items_items','where id=');

//ACTUALIZAR VENTAS
if(1)
{

	$atenciones=select("id,id_item_item","productos_entregas","where 1 order by id desc limit 0,1000",0);
	foreach($atenciones as $atencion)
	{

		$item_item=fila('yearfab,id_color,id_item,nummotor,venta_id_cliente,venta_id_vendedor','productos_items_items','where id='.$atencion['id_item_item']);
		
		// prin(array(
		// 	"id_cliente"  => $item_item["venta_id_cliente"],
		// 	"id_vendedor" => $item_item["venta_id_vendedor"],
		// 	"nummotor"    => $item_item["nummotor"],
		// 	"id_item"     => $item_item["id_item"],
		// 	"id_color"    => $item_item["id_color"]
		// 	));
		
		update(array(
			"id_cliente"  =>$item_item["venta_id_cliente"],
			"id_vendedor" =>$item_item["venta_id_vendedor"],
			"nummotor"    =>$item_item["nummotor"],
			"id_item"     =>$item_item["id_item"],
			"id_color"    =>$item_item["id_color"]
			),"productos_entregas","where id=".$atencion["id"],0);

	}
}


//ACTUALIZAR VENTAS
if(0)
{
	$ventas=select("id,id_cliente","ventas_items","order by id desc limit 0,10",0);
	foreach($ventas as $venta){
		if($venta["id_cliente"]!='')
		update(array("id_cliente"=>$venta["id_cliente"]),"ventas_mensajes","where id_grupo=".$venta["id"],0);

	}
}




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
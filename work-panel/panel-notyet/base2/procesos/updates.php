<?php //á
/*
update(array("method"=>"1"),"productos_items_items","where fecha_creacion='0000-00-00 00:00:00'");

update(array("method"=>"1"),"productos_ventas","where tags is NULL",0);

update(array("method"=>"1"),"productos_ventas_documentos","where id_grupo in (select id from productos_ventas where method=1)");

//$vins=select("fecha_creacion,vin,id,venta_id_vendedor","productos_items_items","where method='1'",0);

//$ventas=select("fecha_creacion,vin,id,venta_id_vendedor","productos_items_items","where method='1'",0);

$vendidos=select("id_item_item","productos_ventas","where method='1'");
foreach($vendidos as $vendis){
update(array('id_status'=>'4'),"productos_items_items","where id='".$vendis["id_item_item"]."'");
}
*/
prin(contar("productos_items_items","where method='1'"));
prin(contar("productos_items_items","where method='1' and id_status='4'"));
prin(contar("productos_items_items","where method='1' and id_status!='4'"));
prin(contar("productos_ventas","where method='1'"));
prin(contar("productos_ventas_documentos","where method='1'"));
/*
$vinsA=select("vin","productos_items_items","where method='1' and id_status!='4'");
foreach($vinsA as $vinA){
echo $vinA["vin"]."<br>";
}
*/
$vinsA=select("id,pvfinal","productos_ventas","where method='1'");
foreach($vinsA as $vinA){
$vinsB=select("id,monto,recibido,saldo,operacion,factnum","productos_ventas_documentos","where id_grupo='".$vinA["id"]."'");
$suma=0;
foreach($vinsB as $vinB){
$suma=$suma+$vinB["monto"];
}
echo ($vinA['pvfinal']*1)." = ".$suma."<br>";

if($vinA['pvfinal']*1!=$suma){
update(array("pvfinal"=>$suma),"productos_ventas","where id='".$vinA["id"]."'");
}

$saldo=$suma;
$factura='';
$mon_factura='';
foreach($vinsB as $doc){

	$saldo=$saldo-$doc["monto"];
	//$recibidoT	=$recibidoT+$doc["monto"];
	//$montoT		=$montoT+$doc["monto"];
	if($doc["operacion"]=="2"){
		$factura=$doc["factnum"];
		$mon_factura=$doc["monto"];
		//$fecha	=$doc["fecha_creacion"];
	}
	update(array("saldo"=>$saldo,"recibido"=>$doc["monto"]),"productos_ventas_documentos","where id=".$doc["id"],0);

}

update(array("mon_factura"=>$mon_factura,"num_factura"=>$factura),"productos_ventas","where id='".$vinA["id"]."'",0);

//echo $vinA["vin"]."<br>";
}

?>
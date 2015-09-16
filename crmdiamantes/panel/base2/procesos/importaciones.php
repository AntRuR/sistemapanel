<?php //á

$csvv=file("china3.csv");
$csv=implode("",$csvv);

$csv=str_replace(",,,,TRASCONTINENTAL,,,,,,,,,,\n","",$csv);
$csv=str_replace("'","",$csv);
$lineas=explode("\n",$csv);
$h=0;

/*prin($lineas);
exit();*/
foreach($lineas as $linea){
$linea=",,,".$linea;
$d=explode(",",$linea);

if(enhay($linea,"PEDIDO")){
$h++;
//prin($d);
list($aa,$buf[$h]['pedido'])=explode("PEDIDO",$d[10]);
list($buf[$h]['pedido'],$aa)=explode("  ",$buf[$h]['pedido']);
list($buf[$h]['nave'],$buf[$h]['arribo'])=explode("LLEGO",$d[4]);
$buf[$h]['arribo']=str_replace(".","-",$buf[$h]['arribo']);
$buf[$h]['pedido']=trim($buf[$h]['pedido']);
$buf[$h]['arribo']=trim(str_replace(":","",$buf[$h]['arribo']));
$buf[$h]['arribo']="20".substr($buf[$h]['arribo'],6,2)."-".substr($buf[$h]['arribo'],3,2)."-".substr($buf[$h]['arribo'],0,2)." 00:00:00";
$buf[$h]['nave']=trim($buf[$h]['nave']);
//$buf[$h]['pedido']=$linea;
}

if(trim($d[3])!=''){
$buf[$h]['inserts'][]=$linea;
}

}
/*
prin($buf);
exit();
*/

foreach($buf as $lineas){
foreach($lineas['inserts'] as $linea){
$dato=explode(",",$linea);
//prin($linea);

//0123,4            ,5      ,6       ,7              ,8     ,9     ,10               ,11       ,,13                  ,14  ,15
//,,,1,BJ3248DLPJE-S,FORLAND,VOLQUETE,INCAPOWER FD150,190880,006221,LVBV6PEBXCN019866,TRAVESIAS,,P10290E321612B015868,ROJO,2012


if(hay("productos_items","where nombre like '%".trim($dato['7'])."%'")){
$id_item=dato("id","productos_items","where nombre like '%".trim($dato['7'])."%'");
} else {
$ii=insert(array("nombre"=>trim($dato['7'])),"productos_items",1);
$id_item=$ii['id'];
}
prin($id_item);
if(hay("productos_colores","where nombre like '%".trim($dato['14'])."%'")){
$id_color=dato("id","productos_colores","where nombre like '%".trim($dato['14'])."%'",0);
} else {
$ii=insert(array("nombre"=>trim($dato['14'])),"productos_colores",1);
$id_color=$ii['id'];
}
prin($id_color);

$INSERT=array(
'pedido'=>$lineas['pedido'],
'nave'=>$lineas['nave'],
'fecha_arribo'=>$lineas['arribo'],

'numpoliza'=>$dato['8'],
'nummotor'=>$dato['13'],
'id_ubicacion'=>'3',
'asignado'=>'0',
'id_status'=>'1',
'yearmod'=>$dato['15'],
'yearfab'=>$dato['15'],
'vin'=>$dato['10'],
'id_item'=>$id_item,
'id_color'=>$id_color,
);
//prin($INSERT);
insert($INSERT,"productos_items_items",1);
}
}

?>
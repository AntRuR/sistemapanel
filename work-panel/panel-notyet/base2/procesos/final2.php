<?php //á

if(1){

$archivo="abril.csv";

$csvv=file($archivo);

$csv=implode("",$csvv);
//echo $csv;
$lineas=explode("\n",$csv);
prin(sizeof($lineas));
/*$vi=0;`*/
$fecha='';

foreach($lineas as $t=>$linea){
/*
if(substr($linea,0,1)==','){
continue;
}
*/
$d=str_getcsv($linea); 
/*
if($d['2']=='ANULADO'){
continue;
}
*/
/*
prin($linea);
continue;
*/
/*
if($d['0']==""){
$y['fecha']=$fecha;
} else {
$y['fecha']=$fecha=$d['0'];
}
$y['fecha']=substr($y['fecha'],6,4)."-".substr($y['fecha'],3,2)."-".substr($y['fecha'],0,2)." 00:00:00";
*/

$y['operacion']=$d['2'];
//$cliens=explode(",",$d['3']);
$y['cliente']=$d['3'];
$y['vin']=trim($d['4']);
//$y['modelo']=$d['3'];
$y['vendedor']=$d['5'];
$y['dolares']=str_replace(",","",$d['6'])*1;
//prin($y);
//continue;
//if(hay("productos_items_items","where vin='".$y['vin']."'")){ 
$id_vin=dato("id","productos_items_items","where vin='".$y['vin']."'");

if(!hay("productos_ventas","where id_item_item='".$id_vin."'",1)){ 

//prin($y['vin']);
//$vins[]=$y['vin'];

$devin=fila("id_color,id_item,id_ubicacion,id","productos_items_items","where id='".$id_vin."'",0);

list($uno,$dos)=explode(",",$y['cliente']);
if(trim($dos)==''){	$nombre=$uno; $tipo="2"; $apellidos="";	}else{	$nombre=$dos;	$apellidos=$uno; $tipo="1";	}
if(hay("clientes","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'")){
$id_cliente=dato("id","clientes","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'",0);
} else {
$ii=insert(array("nombre"=>trim($nombre),"apellidos"=>trim($apellidos)),"clientes",0);
$id_cliente=$ii['id'];
}

$tres=explode(" ",$y['vendedor']);
$nombre=$tres['0'];
$apellidos=trim(str_replace($nombre,"",$y['vendedor']));
if(hay("usuarios","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'")){
$id_vendedor=dato("id","usuarios","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'",0);
} else {
$ii=insert(array("nombre"=>trim($nombre),"apellidos"=>trim($apellidos),'id_jefe'=>'9'),"usuarios",0);
$id_vendedor=$ii['id'];
}

$inventa=insert(array(
'fecha_creacion'=>"2012-04-01 00:00:00",
//'numov'=>$y['operacion'],
//'id_ubicacion_salida'=>$devin["id_ubicacion"],//
'id_item'=>$devin["id_item"],//
'id_color'=>$devin["id_color"],//
'id_item_item'=>$devin["id"],//

//'pvpromocional'=>$total*1,
//'descuento'=>'0',
//'pvfinal'=>$total*1,

'id_cliente'=>$id_cliente,
'id_vendedor'=>$id_vendedor,

),"productos_ventas",1);


}//fin if
else {

//

//prin($y['vin']);

}

}//fin bucle

//prin(sizeof($vins));

}

exit();



?>
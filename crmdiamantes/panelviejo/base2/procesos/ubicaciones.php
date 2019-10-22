<?php //á

if(1){

$archivo="ubicaciones2.csv";

$csvv=file($archivo);

$csv=implode("",$csvv);
//echo $csv;
$lineas=explode("\n",$csv);
//prin(sizeof($lineas));

foreach($lineas as $t=>$linea){

$d=str_getcsv($linea); 
/*
if(enhay($d['1'],'REF!') or trim($d['1'])=='Concesionario' or trim($d['0'])=='' or trim($d['1'])==''){ 
continue; 
}
*/
if(
enhay($d['1'],'N/A') 
or trim($d['1'])=='Concesionario' 
or trim($d['0'])=='' 
or trim($d['1'])==''
){ 
continue; 
}

//prin($d);

$y['vin']=$d['0'];
$y['ubicacion']=$d['1'];
//if(hay("productos_items_items","where vin='".$y['vin']."'")){ 

$id_vin=dato("id","productos_items_items","where vin='".$y['vin']."'");

//if(!hay("productos_ventas","where id_item_item='".$id_vin."'",1)){ 
$nombre=$y['ubicacion'];
if(hay("productos_ubicaciones","where nombre like '%".trim($nombre)."%'")){
$id_ubicacion=dato("id","productos_ubicaciones","where nombre like '%".trim($nombre)."%'",0);
} else {
$ii=insert(array("nombre"=>trim($nombre)),"productos_ubicaciones",0);
$id_ubicacion=$ii['id'];
}

update(array('id_ubicacion'=>$id_ubicacion),"productos_items_items","where vin='".$y['vin']."'",1);

update(array('id_ubicacion_salida'=>$id_ubicacion),"productos_ventas","where id_item_item='".$id_vin."'",1);


}//fin bucle

//prin(sizeof($vins));

}

exit();



?>
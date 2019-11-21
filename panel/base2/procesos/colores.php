<?php //á

if(1){

$archivo="china2.csv";

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
//or $d['7']!='LVAV2JBB2BN010644'
){ 
continue; 
}

//prin($d);
//exit();

//prin($d);

$y['vin']=str_replace(" ","",$d['7']);
$y['color']=$d['10'];
//if(hay("productos_items_items","where vin='".$y['vin']."'")){ 

$id_vin=dato("id","productos_items_items","where vin='".$y['vin']."'");
if(trim($id_vin)==''){ continue; }

//if(!hay("productos_ventas","where id_item_item='".$id_vin."'",1)){ 
$nombre=$y['color'];
if(trim($nombre)!=''){

if(hay("productos_colores","where nombre like '%".trim($nombre)."%'")){
$id_color=dato("id","productos_colores","where nombre like '%".trim($nombre)."%'",0);
} else {
$ii=insert(array("nombre"=>trim($nombre)),"productos_colores",0);
$id_color=$ii['id'];
}

update(array('id_color'=>$id_color),"productos_items_items","where vin='".$y['vin']."'",1);

} else {

update(array('id_color'=>''),"productos_items_items","where vin='".$y['vin']."'",1);

}

//update(array('id_ubicacion_salida'=>$id_ubicacion),"productos_ventas","where id_item_item='".$id_vin."'",1);


}//fin bucle

//prin(sizeof($vins));

}

exit();



?>
<?php //á

$cambio=2.8;
if(0){
$vins=select("id,vin","productos_items_items","");
foreach($vins as $vin){
update(array('vin'=>str_replace(array("*"," ","\""),array('','',''),$vin['vin'])),"productos_items_items","where id='".$vin['id']."'");
}
exit();
}

$inexistentes=array(
'LVBVCJEA99N045848',
'LVAV3JA33AN001313',
'LPBMBDTE3CN505279',
'LPBMBDTEXCN505280'
);

$especiales=array(
'LVAV3JA379N036691'
,'LVAV3JA209N036765'
,'LHBPD1US09N219525'
,'LHBM3HTE79N408196'
,'LPBMBDTE0AN506015'
,'LVAV3JA31AN001312'
,'LPBMBDTE5AN506317'
,'LPBMBDTE8AN506330'
,'LVBV5PDC2AN080915'
,'LHBPA1UR8AN230878'
,'LHBPA1UR6AN230877'
,'LHBPD1US7BN205093'
,'LVAV4JA37AN002249'
,'LHBM3HTE9AN408401'
,'LVAV4JA38AN002244'
,'LVAV3JA32AN001402'
,'LCR6U3129AL610140'
,'LVBVCJEAXBN010628'
,'LVAV2JBB5BN010590'
,'LVBVCJEAXBN010631'
,'LPBMBDTE4BN508528'
,'LHBP41TR1BN211874'
,'LVAV2JBB6BN010615'
,'LCR6U3125BL600576'
,'LHBPA1UR8BN211846'
,'LHBP41TR4BN214834'
,'LVAV2JBB1BN011316'
,'LPBMBDTE7CN505074'
,'LCR6U3127CL610754'
,'JDAJ200G0C1033178'
,'LVAV3JA39AN001400'
,'LHBPA1UR9BN206896'
,'LPBMBDTEXBN508551'
,'LCR6U3122BL603970'
,'LVBVCJEA2BN011997'
,'LHBPD1US7BN206874'
,'LVAV2JBB2BN011972'
,'LPBMBDTE7BN508927'
,'LVBV5PDC5BN070803'
,'LHBPA1UR6CN205254'
,'LCR6U3125BL606409'
,'LCR6U3126CL610695'
,'LCR6U3127CL610706'
,'LVAV2JBB3BN011401'
,'JDAJ200G0C1031995'
,'MHKG2CN20BK000525'
);

$files[]=array('file'=>"detalladas1.csv",'cuenta'=>'30'); 
$files[]=array('file'=>"detalladas2.csv",'cuenta'=>'22'); 

$bl=0;
$newvin=0;
$nohasvin=0;
$total=0;
foreach($files as $ttt=>$file){
//if($ttt!=3){ continue; }
$archivo=$file['file'];

$csvv=file($archivo);
//$or_fin_vin=5; $or_fin_use=2;
//$or_fin_vin=4; $or_fin_use=3;

$csv=implode("",$csvv);
//echo $csv;
$lineas=explode("\n",$csv);
/*$vi=0;`*/

foreach($lineas as $t=>$linea){
$d=str_getcsv($linea); 

$y['numventa']=$d['1'];
$y['factura']=$d['2'];
$y['fecha']=$d['3'];
$y['cliente']=$d['4'];
$y['vin']=$d['5'];
$y['vendedor']=$d['6'];
$y['moneda']=$d['7'];
$y['soles']=$d['8'];
$y['dolares']=$d['9'];
$y['cuenta']=$d[$file['cuenta']];
$total++;

$hasvin=0;
if(hay("productos_items_items","where vin='".$y['vin']."'")){ 
$id_vin=dato("id","productos_items_items","where vin='".$y['vin']."'");
if(hay("productos_ventas","where id_item_item='".$id_vin."'")){ 
$hasvin=1;
} else {
$ventas[$y['vin']][$y['numventa']][]=$y;
}
} else { $newvin++; }
if($hasvin==0){ $nohasvin++; }

}

}
$ventas2=array();
foreach($ventas as $vin=>$uno){
	$tvens=array();
	foreach($uno as $ven=>$dos){
		$tvens[]=$ven;
	}
	$ventas2[$vin]=$uno[max($tvens)];
}

prin($ventas2[0]);
foreach($ventas2 as $vin=>$venta){

$venta0=$venta['0'];
$fechi=substr($venta0['fecha'],6,4)."-".substr($venta0['fecha'],3,2)."-".substr($venta0['fecha'],0,2)." 00:00:00";

$devin=fila("id_color,id_item,id_ubicacion,id","productos_items_items","where vin='".$vin."'",0);

list($uno,$dos)=explode(",",$venta0["cliente"]);
if(trim($dos)==''){	$nombre=$uno; $tipo="2"; $apellidos="";	}else{	$nombre=$dos;	$apellidos=$uno; $tipo="1";	}
if(hay("clientes","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'")){
$id_cliente=dato("id","clientes","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'",0);
} else {
$ii=insert(array("nombre"=>trim($nombre),"apellidos"=>trim($apellidos)),"clientes",0);
$id_cliente=$ii['id'];
}
//prin($venta0["vendedor"]);
$tres=explode(" ",$venta0["vendedor"]);
$nombre=$tres['0'];
$apellidos=trim(str_replace($nombre,"",$venta0["vendedor"]));
if(hay("usuarios","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'")){
$id_vendedor=dato("id","usuarios","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'",0);
} else {
$ii=insert(array("nombre"=>trim($nombre),"apellidos"=>trim($apellidos),'id_jefe'=>'9'),"usuarios",0);
$id_vendedor=$ii['id'];
}


$inventa=insert(array(
'fecha_creacion'=>$fechi,
'numov'=>$venta0['numventa'],
'id_ubicacion_salida'=>$devin["id_ubicacion"],//
'id_item'=>$devin["id_item"],//
'id_color'=>$devin["id_color"],//
'id_item_item'=>$devin["id"],//

//'pvpromocional'=>$total*1,
//'descuento'=>'0',
//'pvfinal'=>$total*1,

'id_cliente'=>$id_cliente,
'id_vendedor'=>$id_vendedor,

),"productos_ventas",0);


$total=0;
foreach($venta as $ven){
$rt++;

$fecho=substr($ven['fecha'],6,4)."-".substr($ven['fecha'],3,2)."-".substr($ven['fecha'],0,2)." 00:00:00";

//prin($fecho);

$cuentax=explode(" ",$ven['cuenta']);
$cuenta=$cuentax[sizeof($cuentax)-1];
if(hay("bancos_cuentas","where nombre like '%".trim($cuenta)."%'")){
$id_cuenta=dato("id","bancos_cuentas","where nombre like '%".trim($cuenta)."%'",0);
} else {
$ii=insert(array("nombre"=>trim($cuenta)),"bancos_cuentas",0);
$id_cuenta=$ii['id'];
}

if(str_replace(",","",$ven['dolares'])*1==0) {	$monto=str_replace(",","",$ven['soles'])/$cambio;	}
else {	$monto=str_replace(",","",$ven['dolares']);	}

$total=$total+$monto;
$recibido=$monto;
//$saldoT=$saldoT-$recibido;
//$saldoT=$saldoT*1;
$ttt=insert(array(
'fecha_creacion'=>$fecho,
'id_grupo'=>$inventa['id'],
'operacion'=>($totdocs==$rt)?"2":"1",
'factnum'=>$ven['factura'],

'monto'=>$monto*1,
'recibido'=>$recibido*1,
//'saldo'=>($saldoT<0)?0:$saldoT,

'ctabanco'=>$id_cuenta,//
),"productos_ventas_documentos",1);



}

update(array('pvfinal'=>$total,'pvpromocional'=>$total,),"productos_ventas","where id='".$inventa['id']."'");


}




prin(array('nohasvin'=>$nohasvin,'newvin'=>$newvin,'total'=>$total));

?>
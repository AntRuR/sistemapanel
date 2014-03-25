<?php //á



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



$files[]=array('file'=>"anticipos_incapower.csv",'fin_vin'=>'4','fin_use'=>'3'); //10 repetidos

$files[]=array('file'=>"anticipos_terios.csv",'fin_vin'=>'4','fin_use'=>'3'); //0 repetidos

$files[]=array('file'=>"facturas_incapower.csv",'fin_vin'=>'5','fin_use'=>'2'); //14 repetidos

$files[]=array('file'=>"facturas_terios.csv",'fin_vin'=>'5','fin_use'=>'2'); //2 repetidos



$bl=0;

foreach($files as $ttt=>$file){

//if($ttt!=3){ continue; }

$archivo=$file['file'];

$or_fin_vin=$file['fin_vin'];

$or_fin_use=$file['fin_use'];

$csvv=file($archivo);

//$or_fin_vin=5; $or_fin_use=2;

//$or_fin_vin=4; $or_fin_use=3;



$csv=implode("",$csvv);

//echo $csv;

$lineas=explode("\n",$csv);

/*$vi=0;`*/



foreach($lineas as $t=>$linea){

$d=str_getcsv($linea); 

if($t!=0

and substr(str_replace('"','',$d['0']),0,5)!='Total'

){

//

if(substr(str_replace('"','',$d[$or_fin_vin]),0,5)=='Total'){ 		$open_vin=0; 	$docs[$bl][$vin]['t_vin']=$linea; }

elseif(substr(str_replace('"','',$d[$or_fin_use]),0,5)=='Total'){ 	$open_use=0; 	/*$docs[$bl]['t_use']=$linea;*/ }

else { //prin($linea);

if($open_vin==0){	$vin=str_replace('"','',$d[$or_fin_vin]);	}

if($open_use==0){	$use=str_replace('"','',$d[$or_fin_use]);	}

if($vi==0){	$open_vin=1;	$open_use=1; }  

if(trim($linea)!=''){ $vin=($vin)?$vin:$vin=str_replace('"','',$d[$or_fin_vin]); $docs[$bl][$vin]['docs'][]=$linea; }

}



if($open_use==0){	/*$vi=0;*/ $bl++;	} else {	/*$vi++;*/	}



}

}

}

//prin($docs);

foreach($docs as $y=>$doc){

foreach($doc as $vin=>$data){

//$vins1[$vin]=$vin;

if(in_array($vin,$especiales) or in_array($vin,$inexistentes)){	

	unset($docs[$y][$vin]); 

};

}

}

//prin(sizeof($docs));



foreach($docs as $doc){

foreach($doc as $vin=>$data){

//$vins1[$vin]=$vin;

$vins2[]=$vin;

$vins2b[$vin]=$data;

/*

if(!hay("productos_items_items","where vin='".$vin."'")){

$vins4[]=$vin;

}

*/

}

}

/*

foreach($vins1 as $vvv){

$vins1b[]=$vvv;

}

*/

$vins3 = array_repeated($vins2);

//prin($vins4);

//prin($vins2b);



$cambio=2.8;



$tu=0;

foreach($vins2b as $vin=>$niv){

$tu++;

//continue;



$d0=str_getcsv($niv['t_vin']);

$d0=proces($d0);

if(str_replace(",","",$d0['10'])*1==0) {	$total=str_replace(",","",$d0['10'])/$cambio;	}

else {	$total=str_replace(",","",$d0['10']);	}



$main=$niv['docs'][0];

$d=str_getcsv($main); 

$d=proces($d);

$fechi=substr($d['6'],6,4)."-".substr($d['6'],3,2)."-".substr($d['6'],0,2)." 00:00:00";



$devin=fila("id_color,id_item,id_ubicacion,id","productos_items_items","where vin='".$vin."'",0);



list($uno,$dos)=explode(",",$d["3"]);

if(trim($dos)==''){	$nombre=$uno; $tipo="2"; $apellidos="";	}else{	$nombre=$dos;	$apellidos=$uno; $tipo="1";	}

if(hay("clientes","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'")){

    $id_cliente=dato("id","clientes","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'",0);

} else {

    $ii=insert(array("nombre"=>trim($nombre),"apellidos"=>trim($apellidos)),"clientes",0);

    $id_cliente=$ii['id'];

}

$id_vendedor=1000;

/*

if(hay("clientes","where nombre like '%".trim($dato['13'])."%'")){

$id_color=dato("id","productos_colores","where nombre like '%".trim($dato['13'])."%'",0);

} else {

$ii=insert(array("nombre"=>trim($dato['13'])),"productos_colores",1);

$id_color=$ii['id'];

}

*/

prin(".");

$inventa=insert(array(

'fecha_creacion'=>$fechi,

'numov'=>'',

'id_ubicacion_salida'=>$devin["id_ubicacion"],

'id_item'=>$devin["id_item"],

'id_color'=>$devin["id_color"],

'id_item_item'=>$devin["id"],

'pvpromocional'=>$total*1,

'descuento'=>'0',

'pvfinal'=>$total*1,

'id_cliente'=>$id_cliente,

'id_vendedor'=>$id_vendedor,

),"productos_ventas",1);



//prin($niv['docs']);



/*

foreach($niv as $ni){

$dd=str_getcsv($ni);

}

*/

$totdocs=sizeof($niv['docs']);

$rt=0;

$saldoT=$total;



//prin($niv['docs']);

foreach($niv['docs'] as $ni){

$rt++;

$d1=str_getcsv($ni);

//prin($d1);

$d1=proces($d1);

//prin($d1);

//prin($d1['6']);

$fecho=substr($d1['6'],6,4)."-".substr($d1['6'],3,2)."-".substr($d1['6'],0,2)." 00:00:00";

//prin($fecho);

$cuentax=explode(" ",$d1['9']);

$cuenta=$cuentax[sizeof($cuentax)-1];

if(hay("bancos_cuentas","where nombre like '%".trim($cuenta)."%'")){

$id_cuenta=dato("id","bancos_cuentas","where nombre like '%".trim($cuenta)."%'",0);

} else {

$ii=insert(array("nombre"=>trim($cuenta)),"bancos_cuentas",0);

$id_cuenta=$ii['id'];

}





if(str_replace(",","",$d1['10'])*1==0) {	$monto=str_replace(",","",$d1['10'])/$cambio;	}

else {	$monto=str_replace(",","",$d1['10']);	}

$recibido=$monto;

$saldoT=$saldoT-$recibido;

$saldoT=$saldoT*1;

insert(array(

'fecha_creacion'=>$fecho,

'id_grupo'=>$inventa['id'],

'operacion'=>($totdocs==$rt)?"2":"1",

'factnum'=>$d1['7'],

'monto'=>$monto*1,

'recibido'=>$recibido*1,

'saldo'=>($saldoT<0)?0:$saldoT,

'ctabanco'=>$id_cuenta,

),"productos_ventas_documentos",1);



}



update(array('pvfinal'=>$total,'pvpromocional'=>$total,),"productos_ventas","where id='".$inventa['id']."'");

}

prin("total vins: ".sizeof($vins2));

prin("total inexistentes: ".sizeof($vins4));

//prin(sizeof($vins1b));

prin("total repeditos: ".sizeof($vins3));

//prin($vins3);

//prin($vins3);

//prin($vins1b);

//

//prin($vins2);

//prin($vins1b);

//prin($docs);



function array_repeated($array) 

{ 

    if ( !is_array($array) ) { 

        return false; 

    } 

    

    $duplicates = array(); 

    foreach ( $array as $key => $val ) { 

        end($array); 

        $k = key($array); 

        $v = current($array); 

        

        while ( $k !== $key ) { 

            if ( $v === $val ) { 

                $duplicates[$key] = $v; 

                                break; 

            } 

            

            $v = prev($array); 

            $k = key($array); 

        } 

    } 

    

    return $duplicates; 

} 



exit();



$csv=str_replace(",,,,TRASCONTINENTAL,,,,,,,,,,\n","",$csv);

$csv=str_replace("'","",$csv);

$lineas=explode("\n",$csv);

$h=0;



/*prin($lineas);

exit();*/

foreach($lineas as $linea){

$linea=",,,".$linea;

$d=explode(",",$linea);



if(enhay($linea,"PRODUCCION")){

$h++;

//prin($d);

list($aa,$buf[$h]['pedido'])=explode("PRODUCCION",$d[10]);

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



if(hay("productos_items","where nombre like '%".trim($dato['7'])."%'")){

$id_item=dato("id","productos_items","where nombre like '%".trim($dato['7'])."%'");

} else {

$ii=insert(array("nombre"=>trim($dato['7'])),"productos_items",1);

$id_item=$ii['id'];

}

prin($id_item);

if(hay("productos_colores","where nombre like '%".trim($dato['13'])."%'")){

$id_color=dato("id","productos_colores","where nombre like '%".trim($dato['13'])."%'",0);

} else {

$ii=insert(array("nombre"=>trim($dato['13'])),"productos_colores",1);

$id_color=$ii['id'];

}

prin($id_color);



$INSERT=array(

'pedido'=>$lineas['pedido'],

'nave'=>$lineas['nave'],

'fecha_arribo'=>$lineas['arribo'],

'numpoliza'=>$dato['8'],

'nummotor'=>$dato['12'],

'id_ubicacion'=>'3',

'asignado'=>'0',

'id_status'=>'1',

'yearmod'=>$dato['14'],

'yearfab'=>$dato['14'],

'vin'=>$dato['10'],

'id_item'=>$id_item,

'id_color'=>$id_color,

);

//prin($INSERT);

insert($INSERT,"productos_items_items",1);

}

}



function proces($d){

	if(sizeof($d)>14){

		$d9=$d;

		$d9['3']=$d['2'];

		$d9['9']=$d['7'];

		$d9['4']=$d['5'];

		$d9['7']=$d['6'];

		$d9['11']=$d['15'];

		$d9['6']='';

		$d=$d9;

		return $d;

	} else {

		return $d;

	}

}

?>
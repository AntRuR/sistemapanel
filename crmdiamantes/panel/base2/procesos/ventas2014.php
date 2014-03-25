<?php //á

if(!function_exists('str_getcsv2')) {
    function str_getcsv2($input, $delimiter = ',', $enclosure = '"') {

        if( ! preg_match("/[$enclosure]/", $input) ) {
          return (array)preg_replace(array("/^\\s*/", "/\\s*$/"), '', explode($delimiter, $input));
        }

        $token = "##"; $token2 = "::";
        //alternate tokens "\034\034", "\035\035", "%%";
        $t1 = preg_replace(array("/\\\[$enclosure]/", "/$enclosure{2}/",
             "/[$enclosure]\\s*[$delimiter]\\s*[$enclosure]\\s*/", "/\\s*[$enclosure]\\s*/"),
             array($token2, $token2, $token, $token), trim(trim(trim($input), $enclosure)));

        $a = explode($token, $t1);
        foreach($a as $k=>$v) {
            if ( preg_match("/^{$delimiter}/", $v) || preg_match("/{$delimiter}$/", $v) ) {
                $a[$k] = trim($v, $delimiter); $a[$k] = preg_replace("/$delimiter/", "$token", $a[$k]); }
        }
        $a = explode($token, implode($token, $a));
        return (array)preg_replace(array("/^\\s/", "/\\s$/", "/$token2/"), array('', '', $enclosure), $a);

    }
}

$csvv=file("ventas2014.csv");

$csv=implode("",$csvv);


$lineas=explode("\n",$csv);

$total=$insertados=$actualizados=0;


$alias=array(
    // 'N°'      =>'NUM',
    // 'Lugar'   =>'LUGAR'
    );

// echo "csv: ".sizeof($lineas)."<br>";

foreach($lineas as $key=>$linea)
{

    if($key===0){ 
        $header=str_getcsv2($linea); 
        // $header=explode(",",$linea); 
        foreach($header as $kh=>$hea){
            // $header[$kh]=$alia;
            foreach($alias as $ak=>$alia){
                if($hea==$ak) $header[$kh]=$alia;
            }
        }
    }
    if(
        $key>=1 
        // and $key<=259
        )
    // if($key>=1 and  $key<=1)
    {

        // $ddd=explode(",",$linea);
        $ddd=str_getcsv2($linea); 

        foreach($header as $dk=>$dd){
            if(trim($dd)!='')
            $buf[$key][$header[$dk]]=trim($ddd[$dk]);
        }

        $buf[$key]['IMPORT']=$linea;

    }


}



            // // [NUM] => 1
            // // [FECHA] => 1/3/14
            // // [DOCUMENTO] => F/ 003-6875
            // // [CLIENTE] => INVERSIONES COMERCIALES JF S.A.C.
            // // [FIJO] => NO TIENE OC
            // // [MODELO] => INCAPOWER B30
            // // [SERIE] => LHBP41TR1DN210159
            // // [IMPORTE] => 11,030.80
            // [TIENDA] => PROVINCIA
            // // [VENDEDOR] => J.MALPARTIDA
            // [TIPO DE LAMINAS Y/O ACCESORIOS] => 
            // [EXPDIENTES TARJETA Y PLACAS] => PROVINCIA NO SE HACE TRAMITE
            // // [COMETARIOS ] => 
            // // [IMPORT] => 1,1/3/14,F/ 003-6875,INVERSIONES COMERCIALES JF S.A.C.,NO TIENE OC ,INCAPOWER B30,LHBP41TR1DN210159,"11,030.80",PROVINCIA,J.MALPARTIDA,,PROVINCIA NO SE HACE TRAMITE ,,,,


    

// echo "csv: ".sizeof($buf)."<br>";

$total=$num_ventas=0;
$NUEVOS=$NOEXISTEN=array();

foreach($buf as $linea)
{

    $total++;

    $devin=fila("id_color,id_item,id_ubicacion,id","productos_items_items","where vin='".$linea['SERIE']."'",0);


    if($devin===FALSE){


        $NOEXISTEN[]=$linea['SERIE'];

        continue;


    }

    if(hay("productos_ventas","where id_item_item='".$devin['id']."'")){

        // echo $linea['SERIE']."ya esta vendido<br>";

        continue; 

    }

    $NUEVOS[]=$linea['SERIE'];

    // continue;

    $num_ventas++;

    $id_vendedor=dato("id","productos_ventas","where vin='".$linea['SERIE']."' ",0);


    list($inicial,$apellido)=explode(".",trim($linea['VENDEDOR']));
    $inicial=strtolower($inicial);
    $apellido1=strtolower($apellido);
    $apellido2=ucfirst($apellido);
    // echo "<div style='color:red;'>!!".$apellido1."</div>";

    $id_vendedor=dato("id","usuarios","where ( apellidos like '%".$apellido1."%' or apellidos like '%".$apellido2."%')  ",0);
    // echor "<br>";
    if($id_vendedor!=FALSE){

        // echo '<div style="clear:left;">'.$id_vendedor."</div>";

    } else {

        // echo "<div style='clear:left;'>vendedor nuevo : ".$linea['VENDEDOR']."</div>";
        $ii=insert(array("nombre"=>trim($inicial),"apellidos"=>trim($apellido1)),"usuarios",0);

        $id_vendedor=$ii['id'];

    }


    list($mes,$dia,$ano)=explode("/",$linea['FECHA']);
    $mes=str_pad((int) $mes,2,"0",STR_PAD_LEFT);
    $dia=str_pad((int) $dia,2,"0",STR_PAD_LEFT);
    $fechi="20".$ano."-".$mes."-".$dia." 00:00:00";



    list($uno,$dos)=explode(",",$linea['CLIENTE']);


    if(trim($dos)==''){ $nombre=$uno; $tipo="2"; $apellidos=""; }else{  $nombre=$dos;   $apellidos=$uno; $tipo="1"; }


    if(hay("clientes","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'"))
    {

        $id_cliente=dato("id","clientes","where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'",0);

    } else {

        $ii=insert(array(
                        "nombre"=>trim($nombre),
                        "apellidos"=>trim($apellidos),
                        // "telefono"=>(is_numeric($linea['FIJO']))?$linea['FIJO']:"",
                        ),"clientes",0);

        $id_cliente=$ii['id'];

    }


    $monto=str_replace(",","",$linea['IMPORTE']);

    $venta_array=array(
        'fecha_creacion'      =>$fechi,
        
        'numov'               =>'',
        
        'id_ubicacion_salida' =>$devin["id_ubicacion"],
        
        'id_item'             =>$devin["id_item"],
        
        'id_color'            =>$devin["id_color"],
        
        'id_item_item'        =>$devin["id"],
        
        'pvpromocional'       =>$monto*1,
        
        'descuento'           =>'0',
        
        'pvfinal'             =>$monto*1,
        
        'id_cliente'          =>$id_cliente,
        
        'id_vendedor'         =>$id_vendedor,

        'import'              =>$linea['IMPORT'],
        );



    $inventa=insert($venta_array,"productos_ventas",1);



    insert(array(

        'fecha_creacion'=>$fechi,

        'id_grupo'=>$inventa['id'],

        'operacion'=>'2',

        'factnum'=>$linea['DOCUMENTO'],

        'monto'=>$monto*1,

        'recibido'=>$monto*1,

        'saldo'=>0,

    ),"productos_ventas_documentos",0);


    

}    

echo "<br>
Total registros analizados : ".sizeof($buf)." <br>
Total registros insertados : ".sizeof($NUEVOS)." <br>
Total Vins inexistentess : ".sizeof($NOEXISTEN)."<br><br>

<b>Lista de nuevos</b><br>
".implode("<br>",$NUEVOS)."<br><br>
<b>Lista de Vins inexistentes</b><br>
".implode("<br>",$NOEXISTEN)."<br><br>
<br>
";




// prin($buf); exit();




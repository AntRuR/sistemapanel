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


$csvv=file("tramites2014b.csv");

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



            // [CLIENTE] => GLORIA CCAICO QUICHCA
            // [SERIE] => LCR6U3123DX605433
            // [NUM_TITULO] => 2014-563
            // [FECHA] => 1/2/14
            // [CONDICION] => F4O333
            // [IMPORT] => GLORIA CCAICO QUICHCA,LCR6U3123DX605433,2014-563,1/2/14,F4O333,


            // [CLIENTE] => REPRESENTACIONES ROBIN S.A.C.
            // [SERIE] => LHBPFPUS0DN210524
            // [NUM_TITULO] => 2014-37073
            // [FECHA] => 1/10/14
            // [CONDICION] => F6M717
            // [IMPORT] => REPRESENTACIONES ROBIN S.A.C.,LHBPFPUS0DN210524,2014-37073,1/10/14,F6M717


// prin($buf);
// exit();

// echo "csv: ".sizeof($buf)."<br>";

$actualizar=$noactualizar=array();

$NUEVOS=$NOEXISTEN=array();

foreach($buf as $linea)
{

    $devin=fila("id_color,id_item,id_ubicacion,id","productos_items_items","where vin='".$linea['SERIE']."'",0);


    if($devin===FALSE){


        $NOEXISTEN[]=$linea['SERIE'];

        continue;


    }

    if(hay("productos_documentos","where id_item_item='".$devin['id']."'")){

        $ficha=dato('ficha_sunarp','productos_documentos',"where id_item_item='".$devin['id']."'");


        //     $actualizar[]=$linea['SERIE'];

        // else
        //     $noactualizar[]=$linea['SERIE'];

        // if(trim($ficha)!=trim($linea['CONDICION']))

        if( trim($linea['NUM_TITULO'])!='' and trim($ficha)!=trim($linea['NUM_TITULO']) )
            update(array('ficha_sunarp'=>trim($linea['NUM_TITULO'])),"productos_documentos","where id_item_item='".$devin['id']."'",1);

        // echo $linea['SERIE']."ya esta vendido<br>";

        continue; 

    }



    $NUEVOS[]=$linea['SERIE'];

    continue;
    

}    
// echo 'actualizar:<br>';
// prin($actualizar);
// echo 'no actualizar:<br>';
// prin($noactualizar);
// echo "<br>
// Total registros analizados : ".sizeof($buf)." <br>
// Total registros insertados : ".sizeof($NUEVOS)." <br>
// Total Vins inexistentess : ".sizeof($NOEXISTEN)."<br><br>

// <b>Lista de nuevos</b><br>
// <b>Lista de Vins inexistentes</b><br>
// ".implode("<br>",$NOEXISTEN)."<br><br>
// <br>
// ";



// prin($buf); exit();




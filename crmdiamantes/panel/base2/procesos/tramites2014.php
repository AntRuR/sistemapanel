<?php //á

$csvv=file("tramites2014.csv");

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
        $header=str_getcsv($linea); 
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
        $ddd=str_getcsv($linea); 

        foreach($header as $dk=>$dd){
            if(trim($dd)!='')
            $buf[$key][$header[$dk]]=trim($ddd[$dk]);
        }

        $buf[$key]['IMPORT']=$linea;

    }


}



            [CLIENTE] => GLORIA CCAICO QUICHCA
            [SERIE] => LCR6U3123DX605433
            [NUM_TITULO] => 2014-563
            [FECHA] => 1/2/14
            [CONDICION] => F4O333
            [IMPORT] => GLORIA CCAICO QUICHCA,LCR6U3123DX605433,2014-563,1/2/14,F4O333,


prin($buf);
exit();

// echo "csv: ".sizeof($buf)."<br>";

$total=0;
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


    // $id_vendedor=dato("id","productos_ventas","where vin='".$linea['SERIE']."' ",0);


    // list($inicial,$apellido)=explode(".",trim($linea['VENDEDOR']));
    // $inicial=strtolower($inicial);
    // $apellido1=strtolower($apellido);
    // $apellido2=ucfirst($apellido);
    // // echo "<div style='color:red;'>!!".$apellido1."</div>";

    // $id_vendedor=dato("id","usuarios","where ( apellidos like '%".$apellido1."%' or apellidos like '%".$apellido2."%')  ",0);
    // // echor "<br>";
    // if($id_vendedor!=FALSE){

    //     // echo '<div style="clear:left;">'.$id_vendedor."</div>";

    // } else {

    //     // echo "<div style='clear:left;'>vendedor nuevo : ".$linea['VENDEDOR']."</div>";
    //     $ii=insert(array("nombre"=>trim($inicial),"apellidos"=>trim($apellido1)),"usuarios",0);

    //     $id_vendedor=$ii['id'];

    // }


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


    /*

    $inventa=insert(array(

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

    ),"productos_ventas",0);




    */

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




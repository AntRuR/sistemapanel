<style>

.pdf {
    /* width:90%; */
    /* padding-left:35%; */
}

.pdf .title {
    width:100%;
    text-align:center;
    margin-bottom:10px;
    margin-top:0px;
    font-size:18px;
}

.pdf .legend {
    width:100%;
    padding-top:10px;
    padding-left:4px;
}
.pdf table.linea {
    width:100%;
    padding-top:0px;
}
.pdf table.lin {
    width:100%;
    /* float:left; */
    border:1px solid #fff;
    /* background-color:#000; */
}
.pdf table label {
    /* font-weight:bold; */
    color:#033;
    padding-right:10px;
    margin:0px;
    /* font-size:10px; */
    /* display:inline-block; */
}

</style>
<?php 

// prin($result);

$ordenCompra=$result['rows'][0];

    function table($array,$result)
    {
        
        $html="";
        $html.="<table class='linea'><tr>";
        foreach($array as $key=>$item){
            $ww=$item['w']*5.5;
            $html.="<td style='padding:0;margin:0;background:#f6f3f3;'>";
                $html.="<table width='100%' class='lin' style='border:none;padding:0;margin:0;' ><tr>";
                // $html.="<td bgcolor='#fff'><img  ></td></tr><tr>";
                $html.="<td bgcolor='#fff'><label>".$result['labels'][$key]."</label> : </td>";
                $html.="<td style='width:".$ww."px;border-bottom:1px solid #666;padding-bottom:5px;'>".$result['rows'][0][$key]."</td>";
                $html.="</tr></table>";
            $html.="</td>";
        }
        $html.="</tr></table>";
        echo $html;
    }

    $boletafactura=[
        '1'			=> 'BOLETA',
        '2'			=> 'FACTURA'
    ];

    $orden_dc=dato("id_grupo","productos_ventas_documentos","where id=".$_GET['pvd'],0);
    $venta_item=dato("id_grupo","ventas_items_ordenes","where id=".$orden_dc,0);
    $id_jefe=dato("id_jefe","ventas_items","where id=".$venta_item);
    $id_ptoventa=dato("id_ptoventa","usuarios2","where id=".$id_jefe);
    $direccion_ptoventa=dato("direccion","productos_ptoventa","where id=".$id_ptoventa);

?>

<div class="pdf">

<table style='width:100%;padding-top:0px;padding-bottom:10px;font-weight:bold;float:right;'>
<tr>
    <td valign=bottom style='width:50%;text-align:left;'>
    <?php echo fecha_formato($ordenCompra['orden_fecha'],'10');?>
    </td>
    <td valign=bottom style='width:45%;text-align:right;'>
    <?php echo $boletafactura[$ordenCompra['pag_tipo_documento']];?>
    </td>
</tr>
</table>


<div><img src="img/logo.jpg" width="200px;" /></div>
<div><img src="img/logopdf.png" width="300px;" /></div>
<div style="margin-bottom:15px;"><?php echo $direccion_ptoventa; ?></div>
<div class=" li_id title"><strong>ORDEN DE COMPRA N <?php printf('%08d',$ordenCompra['orde_numero'],$result);?></strong></div>





<?php 


table([
    'asesor_nombre'    =>['w'=>70],
],$result);



echo '<div class="legend"><strong>DATOS DEL CLIENTE</strong></div>';


table([
    'cliente_nombre' => ['w' => 70],
    'cliente_dni'    => ['w' => 30],
],$result);

table([
    'cliente_empresa' => ['w' => 75],
    'cliente_ruc'     => ['w' => 25],
],$result);

table([
    'cliente_direccion'    =>['w'=>100],
],$result);

table([
    'cliente_telefono' => ['w' => 30],
    'cliente_celular'  => ['w' => 35],
    // 'cliente_pc'       => ['w' => 35],
],$result);

table([
    'cliente_email'   => ['w' => 50],
    'giro_negocio' => ['w' =>45],
],$result);

table([
    'cliente_fecha_cliente' => ['w' => 40],
    'cliente_profesion'     => ['w' => 60],
],$result);

table([
    'cliente_estado_civil' => ['w' => 30],
    'cliente_conyuge'      => ['w' => 70],
],$result);

table([
    'cliente_facturara'    =>['w'=>40],
    'pag_factura_ruc'      =>['w'=>30],
],$result);



echo '<div class="legend"><strong>DATOS DEL VEHICULO</strong></div>';


table([
    'producto_marca'  => ['w' => 24],
    'producto_modelo' => ['w' => 24],
    'producto_color'  => ['w' => 24],
    'producto_anio'   => ['w' => 15]
],$result);

table([
    'producto_vin'      => ['w' => 40],
    'monto'             => ['w' => 40],
],$result);

table([
    'producto_precio'       => ['w' => 30],
    'producto_descuento' => ['w' => 20],
    'producto_tc'        => ['w' => 15],
],$result);

table([
    'producto_precio_facturar' => ['w' => 30],
    'producto_conversion'      => ['w' => 30],
],$result);

table([
    'producto_credito_vehicular' => ['w' => 10],
    'producto_credito_leasing'   => ['w' => 10],
    'producto_contado'           => ['w' => 10],
    'producto_otros'             => ['w' => 25]
],$result);



?>

<table style='width:100%;margin-top:130px;padding-bottom:30px;'>
<tr>
    <td style='width:7%;'></td>
    <td valign=bottom style='width:20%;border-top:1px solid #000;text-align:center;'>
        CLIENTE
    </td>
    <td style='width:13%;'></td>
    <td valign=bottom style='width:20%;border-top:1px solid #000;text-align:center;'>
        VENDEDOR
    </td>
    <td style='width:13%;'></td>
    <td valign=bottom style='width:20%;border-top:1px solid #000;text-align:center;'>
        JEFE DE TIENDA
    </td>  
</tr> 
</table>
<div class="nota">
Nota: El cliente declara tener el conocimiento de las políticas de garantía del vehículo.
Si por cualquier circunstancia el comprador decide dejar sin efecto la presente orden de compra, que a convenida en
forma irrevocable que asumirá los gastos administrativos que esto represente.
Sírvase tomar nota de las demoras en los tramites de placa y tarjeta de rodaje
</div>

<div class="legend"><strong>DATOS ADICIONALES</strong></div>

<?php 
table([
    'adicional_marketing'    =>['w'=>40],
    'adicional_origen_fondos'   =>['w'=>30],
],$result);

table([
    'adicional_observaciones'    =>['w'=>75],
],$result);
?>

</div>
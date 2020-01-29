<?php


// prin($SERVER);

// prin($_SESSION);


echo str_replace("  "," ",json_encode(filas(
    [
        "clientes.id as i",
        "CONCAT_WS(' ',nombre,apellidos,dni,info2,email,telefono,telefono_oficina,cliente_celular,celular_claro,celular_movistar,nextel,rpm,rpc) as v"
    ],
    'clientes 
    right join  ventas_items on ventas_items.id_cliente=clientes.id ',
    "where 1  and ( 
        CONCAT_WS(' ',nombre,apellidos,dni,info2,email,telefono) like '%".$_GET['q']."%' or ".
        // "nombre like '%".$_GET['q']."%'  or apellidos like '%".$_GET['q']."%'  or ".
        // "dni like '%".$_GET['q']."%'  or 
        // info2 like '%".$_GET['q']."%'  or 
        // email like '%".$_GET['q']."%'  or 
        // telefono like '%".$_GET['q']."%'  or 
        "telefono_oficina like '%".$_GET['q']."%'  or 
        cliente_celular like '%".$_GET['q']."%'  or 
        celular_claro like '%".$_GET['q']."%'  or 
        celular_movistar like '%".$_GET['q']."%'  or 
        nextel like '%".$_GET['q']."%'  or 
        rpm like '%".$_GET['q']."%'  or 
        rpc like '%".$_GET['q']."%'  ) 
        ".$_SESSION['xt']."
        order by i desc
        limit 0,12",
    0
)));
include("lib/compresionFinal.php");
die();
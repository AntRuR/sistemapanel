<?php
// prin($_GET);
// prin($tbquery);



$items=select(
    ["ventas_items.id as id"],
    $tbl,
    $join_query.
    "\n where 1 $EXTRA_FILTRO $busqueda_query ".$datos_tabla['where_id'].
    "\n order by "
    . ( ($FilTro_o=='')?'':$FilTro_o."," )
    . ( ($datos_tabla['group'])?' '.$datos_tabla['group'].' desc, ':'' )
    . ( ($datos_tabla['order_by']=='')? (  $tbl.".".$datos_tabla['id']." ". (($datos_tabla['orden']=='1')?"desc":"asc") ):$datos_tabla['order_by'] )
    . " limit 0,10000"
    ,
    ( 0 or ($_GET['debug']=='1') )
);	

$inser=insert([
    "nombre"=>$_GET['nombre'],
    "filtros"=>$_GET['filtros'],
    "num"=>sizeof($items),
    ],"grupos_envios",0);

foreach($items as $item){

    insert([
        'id_grupos_envios'=>$inser['id'],
        'id_ventas_items'=>$item['id'],
    ],"grupos_envios_ventas_items");

}

redir("custom/grupos_envios.php");
// prin(sizeof($items));

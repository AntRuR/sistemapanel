<?php //á


$object=[];


$object['header']='PROYECTOS EN EJECUCION';


$object['menu']=select(
                "nombre as label,id",
                "productos_subgrupos",
                "where visibilidad='1' and id_grupo='2'",
                0,
                [
                    'more'=>'data-tab="sec_{id}"',
                    // 'id'=>'null',
                ]
                );
 
$object['menu'][0]['class']='active';

foreach($object['menu'] as $menu){


    $object[$menu['id']]['filas']=select(
        "id,
        fecha_creacion,
        nombre as titulo,
        ciudad,
        fecha
        ",
        'productos_items',
        "where 1 and id_subgrupo='".$menu['id']."' and  visibilidad='1' order by id asc limit 0,100",
        0,
        [
            'foto'=>array('foto'=>array(
                                            "file,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id desc limit 0,1"
                                            ,"profot_imas"
                                            ,array( 
                                                     'atributos'=>'4,158x100,0'
                                            )
                                    )
                        ),
            'url'=>array('url'=>array('modulo=items&tab=proyectos&acc=file&id={id}&friendly={titulo}')),
            'esquema'=>'foto,titulo,ciudad,fecha'
        ]      
    );
    // prin($object[$menu['id']]['filas']);

}

// prin($object);
    

$OBJECT[$PARAMS['this']]=$object;   



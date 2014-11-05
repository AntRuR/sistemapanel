<?php //á

$object=[];


$object['item']=fila('nombre,descripcion as texto','productos_items','where id='.$_GET['id'],0,
    ['esquema'=>'nombre,texto']);

// prin($object['item']);

// die('rel');
$object['header']=$object['item']['nombre'];

$object['menu']=select(
                "nombre as label,id",
                "productos_fotos_tipos",
                "where 1",
                0,
                [
                    'more'=>'data-tab="sec_{id}"',
                    // 'id'=>'null',
                ]
                );
 
$object['menu']=array_merge(
    [[
        'label' => 'Descripción',
        'id'    => '0',
        'more'  => 'data-tab="sec_0"',
    ]],
    $object['menu']
    );


$object['menu'][0]['class']='active';


// exit();

foreach($object['menu'] as $ii=>$menu){

    if($menu['label']=='Descripción') continue;

    $object[$menu['id']]['filas']=select(
        "id,
        fecha_creacion,
        file,
        foto_descripcion
        ",
        'productos_fotos',
        "where 1 and id_tipo='".$menu['id']."' and id_item='".$_GET['id']."' and  visibilidad='1' order by id asc limit 0,100",
        0,
        [
            'foto:atributos'=>['atributos'=>['profot_imas','{fecha_creacion}','{file}',4,'158x174',0]],
            'foto:url'=>['archivo'=>'profot_imas,{fecha_creacion},{file},4'],
            'foto:descripcion'=>'{foto_descripcion}',
            'esquema'=>'foto'

        ]      
    );

    if( sizeof($object[$menu['id']]['filas']) == 0 ){
        unset($object[$menu['id']]);
        unset($object['menu'][$ii]);
    }

}

// prin($object); exit();








$OBJECT[$PARAMS['this']]=$object;   



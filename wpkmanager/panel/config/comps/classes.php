<?php

$objeto_tabla=[];


$objeto_tabla_common['base']=[
	'id'			=>[
			'campo'			=> 'id',
			'tipo'			=> 'id'
	],
	'fecha_creacion'=>[
			'campo'			=> 'fecha_creacion',
			'tipo'			=> 'fcr'
	],
	'fecha_edicion'	=>[
			'campo'			=> 'fecha_edicion',
			'tipo'			=> 'fed'
	],
	// 'posicion'		=>[
	// 		'campo'			=> 'posicion',
	// 		'tipo'			=> 'pos'
	// ],
	'visibilidad'	=>[
			'campo'			=> 'visibilidad',
			'tipo'			=> 'vis'
	],
	// 'calificacion'	=>[
	// 		'campo'			=> 'calificacion',
	// 		'tipo'			=> 'cal'
	// ]
];



function objeto_tabla_sesion($ID_PERMISO){

	return [
		'usuarios_acceso_nombre'=>array(
			'legend'		=> 'Datos de Acceso',
			'campo'			=> 'usuarios_acceso_nombre',
			'label'			=> 'Usuario',
			'tipo'			=> 'inp',
			'unique'		=> '1',
			'validacion'	=> '1',
			'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
			'listable'		=> '1',
			'style'			=> 'width:150px;',
			'width'			=> '150px'
		),
		'usuarios_acceso_password'=>array(
			'campo'			=> 'usuarios_acceso_password',
			'label'			=> 'Password',
			'tipo'			=> 'pas',
			'validacion'	=> '1',
			'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
			'listable'		=> '1',
			'style'			=> 'width:150px;',
			'width'			=> '150px'
		),
		'usuarios_acceso_id_permisos'=>array(
				'campo'			=> 'usuarios_acceso_id_permisos',
				'tipo'			=> 'inp',
				'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
				'default'		=> $ID_PERMISO,
				'indicador'		=> '1',				
		),
		'id_sesion'		=>array(
				'campo'			=> 'id_sesion',
				'label'			=> 'usuario sessión',
				'width'			=> '120px',
				'tipo'			=> 'hid',
				'listable'		=> '0',
				'opciones'		=> 'id,nombre|usuarios_acceso',
				'biunivoca'		=> '1',
				'subform'		=> '1',
				'unique'		=> '1',
				'indicador'		=> '1'
		),
		

	];

};


function tabla_chain($obj,$chain_items=[],$more=[]){

	$chain=[];
	foreach($chain_items as $ii=>$items_str){

		$items=explode(',',$items_str);

		foreach($items as $item){

			if($obj[$chain_items[$ii-1]]['archivo']){
				$chain[$item]['prev']  = 'id_'.$obj[$chain_items[$ii-1]]['nombre_singular'];			
				$chain[$item]['label'] = ucfirst($obj[$chain_items[$ii-1]]['nombre_singular']);
				$chain[$item]['tabla'] = $obj[$chain_items[$ii-1]]['tabla'];			
			}
		
			$iitems=explode(',',$chain_items[$ii+1]);

			$obj[$chain_items[$ii]]['campos']['nombre']['controles']='';

			foreach($iitems as $iitem){

				if($obj[$iitem]['archivo']){
					$next_tabla        = $obj[$iitem]['tabla'];
					$next_archivo      = $obj[$iitem]['archivo'];
					$next_plural       = $obj[$iitem]['nombre_plural'];
					$current_id_foreig = 'id_'.$obj[$chain_items[$ii]]['nombre_singular'];
					$obj[$chain_items[$ii]]['campos']['nombre']['controles'].= "<a href='custom/$next_archivo.php?id=[id]'>{select count(*) from $next_tabla where $current_id_foreig=[id]} $next_plural</a>";
				}

			}

		}

	}

	foreach($chain as $jj=>$chai){

		$prev_id_foreig=$chai['prev'];			
		$prev_tabla=$chai['tabla'];			
		$prev_label=$chai['label'];

		$obj[$jj]['campos']=array_merge(
			[
				$prev_id_foreig=>array_merge(
				[
					'campo'			=> $prev_id_foreig,
					'tipo'			=> 'hid',
					'listable'		=> '0',
					'validacion'	=> '0',
					'default'		=> '[id]',
					'foreig'		=> '1',
					'label'			=> $prev_label,
	
					'opciones'		=> 'id,nombre|'.$prev_tabla,
					'derecha'		=> '1',
					'tags'			=> '1',
					'queries'		=> '1'
				],
				$more
				),
			],
			$obj[$jj]['campos']
		);

	}
	// prin($obj);exit();
	return $obj;
}

function chain_campos($obj,$chain_items=[],$more=[]){

	$chain_campos=[];

	$ee=0;
	$derecha=[1,2,2];
	foreach($chain_items as $ii=>$item){

		$campo='id_'.$obj[$chain_items[$ii]]['nombre_singular'];
		$campo_next='id_'.$obj[$chain_items[$ii+1]]['nombre_singular'];

		$chain_campos[$campo]=[
			'campo'      => $campo,
			'label'      => ucfirst($obj[$chain_items[$ii]]['nombre_singular']),
			'tipo'       => 'hid',
			'listable'   => '1',
			'validacion' => '0',
			'default'    => '['.$campo.']',
			'foreig'     => '1',
			'style'      => 'width                                                            : 100px,',
			'opciones'   => 'id,nombre|'.$obj[$chain_items[$ii]]['tabla'].'|where visibilidad = 1 order by nombre asc',
			'width'      => '80px',
			'derecha'    => $derecha[$ee%3],
			'tags'       => '1',
			'queries'    => '1',
		];
		
		$ee++;

		if($obj[$chain_items[$ii+1]]['tabla']){
				$chain_campos[$campo]=array_merge($chain_campos[$campo],[
				'load' => $campo_next.'||id,nombre|'.$obj[$chain_items[$ii+1]]['tabla'].'|where visibilidad=1 and '.$campo.'=['.$campo.'] order by nombre desc',
			]);

		}

		if($more[$campo]){
			$chain_campos[$campo]=array_merge($chain_campos[$campo],$more[$campo]);
		}
	
	}

	return $chain_campos;

}


function tablas_build($objeto_tabla){
    
    foreach($objeto_tabla as $me_obj => $objeto){
        foreach($objeto['campos'] as $me_camp => $campo){

            // if(isset($campo['connect'])){

            //     foreach($campo['connect'] as $connect){

            //         $tabla     = $objeto_tabla[$connect['obj']]['tabla'];
            //         $plural    = $objeto_tabla[$connect['obj']]['nombre_plural'];
            //         $id_foreig = "id_".$objeto_tabla[$me_obj]['nombre_singular'];
            //         if(!isset($objeto_tabla[$connect['obj']]['campos'][$id_foreig])){
            //             $objeto_tabla[$connect['obj']]['campos'][$id_foreig]=[
							
			// 				'campo' => $id_foreig,
			// 				'tipo' => 'hid',
			// 				'listable' => 0,
			// 				'validacion' => 0,
			// 				'default' => '[id]',
			// 				'foreig' => 1,
			// 				'label' => Equipo
			// 				'opciones' => id,nombre|equipos
			// 				'derecha' => 1
			// 				'tags' => 1
			// 				'queries' => 1

            //             ];
            //         }
            //         $objeto_tabla[$me_obj]['campos'][$me_camp]['controles'].=
            //         "<a rel=\"subs\" href=\"custom/".$tabla.".php?$id_foreig=[$id]\">{select count(*) from ".$tabla." where $id_foreig=[$id]} $plural</a> ";
            //         ;

            //     }

			// }
			
			if($campo['multi']=='1'){

				list($u,$tabla,$dos)=explode("|",$campo['opciones']);
				$tabl=$objeto['tabla']."_".$tabla;
				$id_campo1='id_'.$objeto['tabla'];
				$id_campo2='id_'.$tabla;
				$objec="REL_".strtoupper($tabl);
				$objeto_tabla[$objec]=[
					'me'=>$objec,
					'tabla'=>$tabl,
					'campos'=>[
						$id_campo1=>['campo'=>$id_campo1,'tipo'=>'hid'],
						$id_campo2=>['campo'=>$id_campo2,'tipo'=>'hid'],
					]
				];


			}

        }
    }
    return $objeto_tabla;
}
/*
function tabla_connect($objeto,$model_from,$model_to){

    $tabla     = $objeto[$model_to]['tabla'];
    $plural    = $objeto[$model_to]['nombre_plural'];
    $id_foreig = "id_".$objeto[$model_from]['nombre_singular'];
    $id        = 'id';
    return " <a rel=\"subs\" href=\"custom/".$tabla.".php?$id_foreig=$id\">{select count(*) from ".$tabla." where $id_foreig=[$id]} $plural</a> ";

}
*/
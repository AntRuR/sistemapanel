<?php
chdir('../../');
include("lib/compresionInicio.php");
	
include("lib/global.php");	
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util.php");
include("config/tablas.php");
include("lib/sesion.php");	
include("lib/playmemory.php");

include("objeto.php");

$ii=$_GET['id'];

switch($_GET['type']){

	case "departamento":

		switch($_GET['state']){

			case "0":

				$depa=fila("id,
							nombre,
							numero,
							pvpromocion,
							area_total,
							area_construida,
							descripcion,
							has_balcon,
							num_rooms,
							num_bathrooms,
							id_item,
							id_items_tipo,
							id_subgrupo					
							",
							"productos_items_items",
							"where id=".$ii,
							0,
							array(
								'id_item_name'		=>array('dato'=>array('campo'=>'nombre','tabla'=>'productos_items','donde'=>"where id='{id_item}'")),			//proyecto	
								'id_subgrupo_name'	=>array('dato'=>array('campo'=>'nombre','tabla'=>'productos_subgrupos','donde'=>"where id='{id_subgrupo}'")),	//subgrupo
								'id_items_tipo_name'=>array('dato'=>array('campo'=>'nombre','tabla'=>'productos_tipos','donde'=>"where id='{id_items_tipo}'")),	//tipo de depa
					        	// 'fotos_modelo'  =>array('fotos'=>array(
														// 			"id,file,foto_descripcion,fecha_creacion|productos_fotos|where id_hotel='{id}' and visibilidad='1' order by id asc limit 0,100"
														// 			,"productos_fotos_fotos"
														// 			,array(												 
														// 				   //'archivo'=>'4'
														// 				   'atributos'=>'4,280x1000,0'												   
														// 				   //'atributos'=>'3,624x600,0'												   
														// 				  )
														// 			 )
											  	// 		)	

								)
							);

					// var_dump($depa);

					$modelo=select(
							'id,nombre',
							'productos_fotos',
							'where id_tipo='.$depa['id_items_tipo'],
							0,
							array(

								'fotos'=>array('fotos'=>array(
																"id,file,foto_descripcion,fecha_creacion|productos_fotos_fotos|where id_grupo='{id}' limit 0,8|0"
																,"profot_imas"
																,array( 
																		 'archivo'=>'1'
																		)
																)
															)			
								)											
							);

					

				$html=''
					.'<table class="table table-condensed table-bordered depa">'
					 // .'<tr><td class="title" colspan=2>'
					 // . (($depa['id_item'])?'Proyecto '.$depa['id_item'].' - ':'') 
					 // . (($depa['id_subgrupo'])?$depa['id_subgrupo'].' - ':'') 
					 // . (($depa['id_items_tipo'])?$depa['id_items_tipo'].' - ':'') 
					 // .$depa['numero']
					 // .'</td></tr>'
					 // .'<tr><td>proyecto</td><td>'.$depa['id_item_name'].'</td></tr>'
					 // .'<tr><td>subgrupo</td><td>'.$depa['id_subgrupo_name'].'</td></tr>'
					 // .'<tr><td>modelo</td><td>'.$depa['id_items_tipo_name'].'</td></tr>'
					 // .'<tr><td colspan="2" class="step1"><center><img src="'.$modelo['0']['fotos']['0']['archivo'].'" ></center></td></tr>'	
					 .'<tr>'
					 .'<td rowspan="7" class="step1"><center><img onclick="javascript:$(\'#jqi_state0_buttonver_mas\').trigger(\'click\');" src="'.$modelo['0']['fotos']['0']['archivo'].'" ></center></td>'
					 .'<td>Precio final</td><td>'.$depa['pvpromocion'].'</td>'
					 .'</tr>'
					 .'<tr><td>num habitaciones</td><td>'.$depa['num_rooms'].'</td></tr>'
					 .'<tr><td>num baños</td><td>'.$depa['num_bathrooms'].'</td></tr>'
					 .'<tr><td>area total</td><td>'.$depa['area_total'].'</td></tr>'
					 .'<tr><td>area construído</td><td>'.$depa['area_construida'].'</td></tr>'
					 .( ($depa['has_balcon'])?'<tr><td  colspan=2>tiene balcón</td></tr>':'' )					 
					 .'<tr><td class="desc" colspan=2>'.$depa['descripcion'].'</td></tr>'
					 .'<tr></tr>'
					 .'<table>';

				// $html='<dl>'
				// 	 .'<dt class="title">'.$depa['numero'].'</dt>'
				// 	 .($depa['has_balcon'])?'<dt>tiene balcón</dt>':''
				// 	 .'<dt>area total</dt><dd>'.$depa['area_total'].'</dd>'
				// 	 .'<dt>area construído</dt><dd>'.$depa['area_construida'].'</dd>'
				// 	 .'<dt class="desc">'.$depa['descripcion'].'</dt>'
				// 	 .'<dl>';

				// $fotos_del_tipo=filas("id,nombre",
				// 			   "productos_items_items",
				// 			   "where id=".$depa['id_items_tipo']);

				echo $html;
				// echo var_dump($depa);

			break;
			case "1":




				$depa=fila("id,
							nombre,
							numero,
							pvpromocion,
							area_total,
							area_construida,
							descripcion,
							descripcion2,
							descripcion3,
							descripcion4,							
							has_balcon,
							num_rooms,
							num_bathrooms,
							id_item,
							id_items_tipo,
							id_subgrupo					
							",
							"productos_items_items",
							"where id=".$ii,
							0,
							array(

								'id_item_name'		=>array('dato'=>array('campo'=>'nombre','tabla'=>'productos_items','donde'=>"where id='{id_item}'")),			//proyecto	
								'id_subgrupo_name'	=>array('dato'=>array('campo'=>'nombre','tabla'=>'productos_subgrupos','donde'=>"where id='{id_subgrupo}'")),	//subgrupo
								'id_items_tipo_name'=>array('dato'=>array('campo'=>'nombre','tabla'=>'productos_tipos','donde'=>"where id='{id_items_tipo}'")),	//tipo de depa

					        	'fotos_proyecto'  =>array('filas'=>
						        		[
							        		"id,nombre",
							        		"productos_all_fotos",
							        		"where id_item='{id_item}' and visibilidad='1' order by id asc limit 0,100",
							    			0,
							        		
											[

												'fotos'=>array('fotos'=>array(
																				"id,file,foto_descripcion,fecha_creacion|productos_all_fotos_fotos|where id_grupo='{id}' limit 0,8|0"
																				,"profotall_imas"
																				,array( 
																						 'archivo'=>''
																						)
																				)
																			)			

												
											]
											
						        		]
					        		),
								


					        	'fotos_modelo'  =>array('filas'=>
						        		[
							        		"id,nombre",
							        		"productos_fotos",
							        		"where id_tipo='{id_items_tipo}' and visibilidad='1' order by id asc limit 0,100",
							    			0,
							        		
											[
												// 'fotos'=>[
												// 	'filas'=>[
												// 		"id,file,foto_descripcion,fecha_creacion",
												// 		"productos_fotos_fotos",
												// 		"where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,100",
												// 		1,
												// 		[
												// 			'foto'=[

												// 			]
												// 		]
												// 	]
												// ]

												'fotos'=>array('fotos'=>array(
																				"id,file,foto_descripcion,fecha_creacion|productos_fotos_fotos|where id_grupo='{id}' limit 0,8|0"
																				,"profot_imas"
																				,array( 
																						 'archivo'=>''
																						)
																				)
																			)			

												
											]
											
						        		]
					        		)
								)
							);

					// prin($depa);

					// exit();

					// $modelo=select(
					// 		'id,nombre',
					// 		'productos_fotos',
					// 		'where id_tipo='.$depa['id_items_tipo'],
					// 		0,
					// 		array(

					// 			'fotos'=>array('fotos'=>array(
					// 											"id,file,foto_descripcion,fecha_creacion|productos_fotos_fotos|where id_grupo='{id}' limit 0,8|0"
					// 											,"profot_imas"
					// 											,array( 
					// 													 'archivo'=>'1'
					// 													)
					// 											)
					// 										)			
					// 			)											
					// 		);


					// prin($modelo);
					
				// prin($depa['fotos_proyecto']);
				
				$galeria='';

				$firstgal=1;								    
				if(is_array($depa['fotos_modelo'][0]['fotos']))
				foreach($depa['fotos_modelo'][0]['fotos'] as $fotogaleria){
				$galeria.='<div class="item '. (($firstgal)?'active':'') .'">
				<img src="'.$fotogaleria['archivo'].'" >
				<div class="carousel-caption"><p>'.$fotogaleria['foto_descripcion'].'</p></div>
				</div>';
				if($firstgal==1) $firstgal=0;	
				}

				if(is_array($depa['fotos_proyecto'][0]['fotos']))
				foreach($depa['fotos_proyecto'][0]['fotos'] as $fotogaleria){
				$galeria.='<div class="item '. (($firstgal)?'active':'') .'">
				<img src="'.$fotogaleria['archivo'].'" >
				<div class="carousel-caption"><p>'.$fotogaleria['foto_descripcion'].'</p></div>
            </div>';
				if($firstgal==1) $firstgal=0;	
				}


				$html='<ul class="nav nav-tabs" id="myTab2">
							<li><h4>Departamento '.$depa['numero'].'</h4></li>
							<li><a href="#txt2" data-toggle="tab">Descripción</a></li>
							<li><a href="#txt3" data-toggle="tab">Acabados</a></li>
							<li><a href="#txt4" data-toggle="tab">Areas comunes</a></li>
							<li class="active"><a href="#txt5" data-toggle="tab">Galerías</a></li>
						</ul>'
						.'<div class="tab-content">
							<div class="tab-pane" id="txt2">'

								.'<div style="overflow:auto;height:580px;">'
								.'<table class="table table-condensed table-bordered depa">'
								// .'<tr><td class="title" colspan=2>'
								// . (($depa['id_item'])?'Proyecto '.$depa['id_item'].' - ':'') 
								// . (($depa['id_subgrupo'])?$depa['id_subgrupo'].' - ':'') 
								// . (($depa['id_items_tipo'])?$depa['id_items_tipo'].' - ':'') 
								// .$depa['numero']
								// .'</td></tr>'
								// .'<tr><td>proyecto</td><td>'.$depa['id_item_name'].'</td></tr>'
								// .'<tr><td>subgrupo</td><td>'.$depa['id_subgrupo_name'].'</td></tr>'
								// .'<tr><td>modelo</td><td>'.$depa['id_items_tipo_name'].'</td></tr>'
								// .'<tr><td colspan="2" class="step1"><center><img src="'.$modelo['0']['fotos']['0']['archivo'].'" ></center></td></tr>'	
								.'<tr>'
								//.'<td rowspan="7" class="step1"><center><img src="'.$modelo['0']['fotos']['0']['archivo'].'" ></center></td>'
								.'<td>Precio final</td><td>'.$depa['pvpromocion'].'</td>'
								.'</tr>'
								.'<tr><td>num habitaciones</td><td>'.$depa['num_rooms'].'</td></tr>'
								.'<tr><td>num baños</td><td>'.$depa['num_bathrooms'].'</td></tr>'
								.'<tr><td>area total</td><td>'.$depa['area_total'].'</td></tr>'
								.'<tr><td>area construído</td><td>'.$depa['area_construida'].'</td></tr>'
								.( ($depa['has_balcon'])?'<tr><td colspan=2>tiene balcón</td></tr>':'' )					 
								.'<tr><td class="desc" colspan=2>
								</td></tr>'
								.'<tr></tr>'
								.'</table>'
								.clean_txt($depa['descripcion2'])
								.'</div>'
							.'</div>'
							.'<div class="tab-pane" id="txt3">'
								.'<div style="overflow:auto;height:580px;">'
								.clean_txt($depa['descripcion3'])
								.'</div>'
							.'</div>'
							.'<div class="tab-pane" id="txt4">'
								.'<div style="overflow:auto;height:580px;">'
								.clean_txt($depa['descripcion4'])
								.'</div>'
							.'</div>'
							.'<div class="tab-pane active" id="txt5">'
								.'<div>'
								// .'galería'
								.'<div id="myCarousel" class="carousel slide">
								  <!-- Carousel items -->
								  <div class="carousel-inner">'
								  	.$galeria
								  .'</div>
								  <!-- Carousel nav -->
								  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
								  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
								</div>'

								.'</div>'								
							.'</div>'
						.'</div>';


				echo $html;					 

			break;	
		}

	break;
	case "estacionamiento":

		switch($_GET['state']){

			case "1":

				$depa=fila("id,
							nombre,
							numero,
							area,
							precio,
							descripcion,
							id_item,
							id_items_estacionamiento_tipo,
							id_subgrupo					
							",
							"productos_estacionamientos_items_items",
							"where id=".$ii,
							0,
							array(
								'id_item_name'		=>array('dato'=>array('campo'=>'nombre','tabla'=>'productos_items','donde'=>"where id='{id_item}'")),			//proyecto	
								'id_subgrupo_name'	=>array('dato'=>array('campo'=>'nombre','tabla'=>'productos_subgrupos','donde'=>"where id='{id_subgrupo}'")),	//subgrupo
								'id_items_tipo_name'=>array('dato'=>array('campo'=>'nombre','tabla'=>'productos_estacionamientos_tipos','donde'=>"where id='{id_items_estacionamiento_tipo}'")),	//tipo de depa
								)
							);


					

				$html=''
					.'<table class="table table-condensed table-bordered depa">'
					 .'<tr>'
					 .'<td>Precio</td><td>'.$depa['precio'].'</td>'
					 .'</tr>'
					 .'<tr><td>area</td><td>'.$depa['area'].'</td></tr>'
					 .'<tr><td class="desc" colspan=2>'.$depa['descripcion'].'</td></tr>'
					 .'<tr></tr>'
					 .'<table>';

				echo $html;					 

			break;

		}

	break;
	case "deposito":
		echo "deposito";
	break;	
	case "record":
		echo $_POST['cart'];
	break;

}		

// $proyecto=fila("nombre","productos_items","where id=".$id_project);

// echo "<h3 class='proyecto'>".$proyecto['nombre']."</h3>";

// $torres=select("id,nombre","productos_subgrupos","where id_item=".$id_project);

function clean_txt($txt){

	$txt=str_replace("•","",$txt);

	return $txt;

}

include("lib/compresionFinal.php");
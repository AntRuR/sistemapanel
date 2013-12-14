<?php //á

	$_GET['id_departamento']	=$_SESSION['publicar']['id_departamento'];
	$_GET['id_provincia']		=$_SESSION['publicar']['id_provincia'];
	$_GET['id_distrito']		=$_SESSION['publicar']['id_distrito'];	
			
	$GEO['departamentos'] = select(
			"id,nombre"
			,"geo_departamentos"
			,"where 1 and  visibilidad='1' order by id asc limit 0,100"
			,0
			,array(
				'id'=>array('url_encode_seo'=>array(
											'string'=>'{nombre}'
											)
							   )
				,'selected'=>array('match'=>array(
											'a'=>'{nombre}'
											,'b'=>url_decode_seo($_GET['id_departamento'])
											,'equal'=>'selected'
											,'else'=>''
											)
							   )						   
				)
			);

	if($_GET['id_departamento']!=''){		
	$ID=select_dato("id","geo_departamentos","where nombre='".url_decode_seo($_GET['id_departamento'])."'");
	$GEO['provincias'] = select(
			"id,nombre"
			,"geo_provincias"
			,"where id_departamento='".$ID."' and visibilidad='1' order by id asc limit 0,100"
			,0
			,array(
				'id'=>array('url_encode_seo'=>array(
											'string'=>'{nombre}'
											)
							   )
				,'selected'=>array('match'=>array(
											'a'=>'{nombre}'
											,'b'=>url_decode_seo($_GET['id_provincia'])
											,'equal'=>'selected'
											,'else'=>''
											)
							   )						   
				)	  		
			);	
	}			
			
	if($_GET['id_provincia']!=''){		
	$ID=select_dato("id","geo_provincias","where nombre='".url_decode_seo($_GET['id_provincia'])."'");
	$GEO['distritos'] = select(
			"id,nombre"
			,"geo_distritos"
			,"where id_provincia='".$ID."' and  visibilidad='1' order by id asc limit 0,100"
			,0
			,array(
				'id'=>array('url_encode_seo'=>array(
											'string'=>'{nombre}'
											)
							   )
				,'selected'=>array('match'=>array(
											'a'=>'{nombre}'
											,'b'=>url_decode_seo($_GET['id_distrito'])
											,'equal'=>'selected'
											,'else'=>''
											)
							   )
				)				  		
			);		
	}

$CARGAR=$LOAD['registro']=array(
'tipo_anunciante'=>'1'
/*
,'nombre_empresa'=>'Prodiserv'
,'nombre'=>'Guillermo'
,'apellidos'=>'Lozán del Castillo'
*/
,'genero'=>'1'
/*
,'email'=>'asteruchi@hotmail.com'
,'fecha_nacimiento'=>'2009-02-02 00:00:00'
,'password'=>'platano'
,'check_user_password'=>'platano'
,'website'=>'http://uno.com'
,'telefono_fijo'=>'2614506'
,'telefono_movil'=>'99434984'
,'pais'=>'Peru'
*/
,'id_departamento'=>urlencode($_SESSION['GEO']['id_departamento'])
,'id_provincia'=>urlencode($_SESSION['GEO']['id_provincia'])
,'id_distrito'=>urlencode($_SESSION['GEO']['id_distrito'])
);

			$FORMULARIO['registro']=array(
					'nombre'=>'registro'
					,'legend'=>"Publicar Anuncio"
					,'ajax'=>'1'
					,'method'=>'post'
					,'action'=>'ajax.php?mode=form&tab=registro'
					,'url'=>'index.php?modulo=static&tab=final-registro'
					//,'action'=>'index.php?modulo=formulario&tab=contacto'
					,'exito'=>''
					,'error'=>'Error en el envio, por favor vuelva a intentarlo'				
					,'submit'=>' type="image" src="'.$SERVER['BASE'].THEME_PATH.'img/ico_enviar.jpg" '
					,'submiting'=>' src="'.$SERVER['BASE'].THEME_PATH.'img/ico_enviando.jpg" '					
					,'pie'=>'Los campos con * son obligatorios'
					,'campos'=>array(
																		
						'tipo_anunciante'=>array(
							'label'=>'Usted es'
							,'tipo'=>'input_radio'
							,'opciones'=>array('1'=>'Individuo','2'=>'Empresa')
							,'campo'=>array('tipo_anunciante')
							,'value'=>array($CARGAR['tipo_anunciante'])
						)					
						,'nombre_empresa'=>array(
							'label'=>'Nombre de la empresa'
							,'tipo'=>'input_text'
							,'campo'=>array('nombre_empresa')
							,'value'=>array($CARGAR['nombre_empresa'])
						)
						,'nombre'=>array(
							'label'=>'Su Nombre'
							,'tipo'=>'input_text'
							,'campo'=>array('nombre')
							,'validacion'=>"validate['required']"							
							,'value'=>array($CARGAR['nombre'])
						)
						,'apellidos'=>array(
							'label'=>'Sus Apellidos'
							,'tipo'=>'input_text'
							,'campo'=>array('apellidos')
							,'validacion'=>"validate['required']"							
							,'value'=>array($CARGAR['apellidos'])
						)												
						,'genero'=>array(
							'label'=>'Género'
							,'tipo'=>'input_radio'
							,'opciones'=>array('1'=>'masculino','2'=>'femenino')
							,'campo'=>array('genero')
							,'validacion'=>"validate['required']"							
							,'value'=>array($CARGAR['genero'])
						)					
						,array(
							'label'=>'Fecha Nacimiento'
							,'campo'=>array('fecha_nacimiento')
							,'tipo'=>'input_fecha'
							,'validacion'=>"validate['required']"							
							,'value'=>array($CARGAR['fecha_nacimiento'])
						)							
						,array(
							'label'=>'Email'
							,'tipo'=>'input_text'
							,'campo'=>array('email')
							,'validacion'=>"validate['required','email']"
							,'validacion_unique'=>"email|usuarios"
							,'value'=>array($CARGAR['email'])
							,'after'=>'(Lo usará para ingresar a su cuenta. No será publicado)'
						)
						,array(
							'label'=>'Password'
							,'tipo'=>'input_password'
							,'campo'=>array('password')
							,'validacion'=>"validate['required']"							
							,'value'=>array($CARGAR['password'])
							,'after'=>'(Lo usará para ingresar a su cuenta)'
						)
						,array(
							'label'=>'Confirmar Password'
							,'tipo'=>'input_password'
							,'campo'=>array('check_user_password')
							,'validacion'=>"validate['required','confirm[password]']"							
							,'value'=>array($CARGAR['check_user_password'])
						)						
						,'website'=>array(
							'label'=>'website'
							,'tipo'=>'input_text'
							,'campo'=>array('website')
							,'validacion'=>"validate['url']"														
							,'value'=>array($CARGAR['website'])
						)
						,array(
							'label'=>'Teléfono Fijo'
							,'tipo'=>'input_text'
							,'campo'=>array('telefono_fijo')
							,'validacion'=>"validate['phone']"														
							,'value'=>array($CARGAR['telefono_fijo'])
							,'after'=>'(opcional)'
					
						)
						,array(
							'label'=>'Teléfono Móvil'
							,'tipo'=>'input_text'
							,'campo'=>array('telefono_movil')
							,'validacion'=>"validate['phone']"														
							,'value'=>array($CARGAR['telefono_movil'])
							,'after'=>'(opcional)'
							
						)												
						,'pais'=>array(
							'label'=>'País'
							,'tipo'=>'input_text'
							,'campo'=>array('pais')
							,'value'=>array($CARGAR['pais'])
						)
						,array(
							'label'=>'Localización'
							,'campo'=>array('id_departamento','id_provincia','id_distrito')
							,'value'=>array($CARGAR['id_departamento'],$CARGAR['id_provincia'],$CARGAR['id_distrito'])
							,'control'=>'control_localizacion'
						)
																	
						,'foto'=>array(
							'label'=>'Foto'
							,'tipo'=>'foto'
							,'campo'=>array('foto_1')
							,'value'=>array($CARGAR['foto_1'])							
						)																					
						
					)			
				,'complete'=>"
						var json=JSON.decode(ee,true);
						if(json.t=='error'){
						new Element('div', {
							'class': 'mensaje mensaje_'+json.t,
							'html': json.m,
							'id': 'mensaje_'+json.n										
						}).inject($(json.n+'_form_body'), 'before');
						$0(json.n+'_form_body');
						} else if(json.t=='exito'){
							location.href=json.u;
						}
			"
			);
	
	
	$FORM=$FORMULARIO['registro'];
	
			if($_SERVER['REQUEST_METHOD']=='POST'){

			$insertado=insert(array(	
			'fecha_creacion'=>"now()"	
			,'fecha_edicion'=>"now()"	
			
			,'tipo_anunciante'=>$_POST['tipo_anunciante']	
			,'nombre'=>$_POST['nombre']	
			,'apellidos'=>$_POST['apellidos']	
			,'nombre_empresa'=>$_POST['nombre_empresa']
			,'genero'=>$_POST['genero']	
			,'fecha_nacimiento'=>$_POST['fecha_nacimiento']
			,'email'=>$_POST['email']	
			
			,'password'=>$_POST['password']	
			,'website'=>$_POST['website']
			,'telefono_fijo'=>$_POST['telefono_fijo']	
			,'telefono_movil'=>$_POST['telefono_movil']	

			,'pais'=>$_POST['pais']	
			,'departamento'=>select_dato("id","geo_departamentos","where nombre='".url_decode_seo($_POST['id_departamento'])."'",0)	
			,'provincia'=>select_dato("id","geo_provincias","where nombre='".url_decode_seo($_POST['id_provincia'])."'",0)	
			,'distrito'=>select_dato("id","geo_distritos","where nombre='".url_decode_seo($_POST['id_distrito'])."'",0)	
							
			,'visibilidad'=>'1'	
			)            
            ,"usuarios"
            ,0);			

			if( $insertado['success'] ){
			
				$ret = web_grabar_imagen(
									$_POST['foto_1']
									,array(
										'prefijo'=>'usuario',
										'carpeta'=>'usuario_imas',
										'tamanos'=>'70x70,128x135,328x235'
									)
								);
								
				update(array("file"=>$ret,"fecha_creacion"=>"now()"),"usuarios","where id='".$insertado['id']."' ",0);								
			
			}
			
				if( $insertado['success'] ){
						
						$_SESSION['login']=select_fila(
						"id,nombre,apellidos,nombre_empresa,tipo_anunciante,email,pais,departamento,provincia,distrito"
						,"usuarios"
						,"where id='".$insertado['id']."'"
						,0
						);				
						$_SESSION['login']['status']=1;
						
					if(isset($_SESSION['publicar']['usuario_temp'])){
					
						$actualizado=update(array(      
								'anunciante'=>$insertado['id']	
								)    
							  ,"productos_items"
							  ,"where anunciante='".$_SESSION['publicar']['usuario_temp']."'"
							  ,0);

						if( $actualizado['success'] ){
						
							unset($_SESSION['publicar']['usuario_temp']);
							
							$FORM['url']='index.php?modulo=static&tab=final-publicacion';
											
						}	
																		  
					} 
					
					echo json_encode(array(
								't'=>'exito'
								,'u'=>$FORM['url']
								,'n'=>$FORM['nombre']									
								));					
					
				} else {
				
					echo json_encode(array(
								't'=>'error'
								,'m'=>$FORM['error']
								,'n'=>$FORM['nombre']
								));														
				}	

			} 
				

?>
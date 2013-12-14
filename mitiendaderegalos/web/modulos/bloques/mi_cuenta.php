<?php //á


	$MENU['titulo']='Mi cuenta';

	$MENU_SIN_SESION=array(
						array(
								'nivel'	=>'menu_nivel_1'
								,'url'	=>$COMMON['url_login']
								,'label'=>'Iniciar Sesión'	
							)
						,array(
								'nivel'	=>'menu_nivel_1'
								,'url'	=>$COMMON['url_registro']
								,'label'=>'Registrate aquí'	
							)
						,array(
								'nivel'	=>'menu_nivel_1'
								,'url'	=>$COMMON['url_olvido_clave']
								,'label'=>'¿Olvidaste tu clave?'	
							)																																								
						);
																	
	$MENU_CON_SESION=array(
						array(
								'nivel'	=>'menu_nivel_1'
								,'onclick'=>'cerrar_sesion("")'
								,'label'=>'Cerrar Sesión'	
							)
						,array(
								'nivel'	=>'menu_nivel_1'
								,'url'	=>$COMMON['url_editar_usuario']
								,'label'=>'Editar Datos'	
							)
						,array(
								'nivel'	=>'menu_nivel_1'
								,'url'	=>$COMMON['url_cambiar_clave']
								,'label'=>'Cambio de Clave'	
							)																																								
						);	
		
	/*									
	if(sizeof($_SESSION['carrito'])>0){
										
		$MENU_CON_SESION=array_merge($MENU_CON_SESION,array(
									array(
									'nivel'	=>'menu_nivel_1'
									,'url'	=>$COMMON['url_pedido']
									,'label'=>'Pedido'	
									)
								));			
							
	}
	*/


	$MENU['menu']=($_SESSION['login']['status']=='1')?$MENU_CON_SESION:$MENU_SIN_SESION;

	$MENU['menu']=web_selected($MENU['menu'],$_GET);

	$LISTADO[$PARAMS['conector']]=$MENU;

?>
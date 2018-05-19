<?php //á

// prin($_GET);


switch($_GET['tab']){
	case "deljefe": 
		$speeches_tabla="speeches_asesor";
		$status_actividad=9;		
	break;
	case "deladmin": 
		$speeches_tabla="speeches_asesor";
		$status_actividad=10;				
	break;
	default:
		$speeches_tabla="speeches";		
		$status_actividad=1;		
	break;
}


if($_GET['ajax']=='1'){
	
	chdir("../../");	
	include("lib/global.php");
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util2.php");
	include("lib/webutil2.php");
	include("config/tablas.php");

	include("lib/sesion.php");
	include("lib/playmemory.php");
	include("lib/class.phpmailer.php");

	define("THEME_PATH","web/templates/".$vars['GENERAL']['template']."/");	
	
	include("../web/modulos/common.php");
	include("../web/modulos/formularios/formularios.php");

}

include("lib/simple_html_dom.php");

exit();

include("config/library.php");


	//if($_GET['id']!=''){

		$linea=select_fila(
							array(
							"fecha_creacion",
							"id",
							"id_cliente",
							"id_item",
							"id_usuario",
							"id_status",
							"id_nivel",
							"id_canal",
							"forma_pago",
							"pvlista",
							"pvpromocion",
							"porcentaje_cuota_inicial",
							"cuota_inicial",
							"separacion",
							"saldo_financiar",
							"id_banco",
							"id_sectorista",
							"pedido",
							'sectorista_nombre','sectorista_email','sectorista_telefono','id_banco','id_sectorista',
							'id_promocion'
							),
							'ventas_items',
							'where id='.$_GET['id'],
							0,
							array(
								'cliente'	=>array('fila'=>array('empresa,nombre,apellidos,genero,email,dni,telefono,telefono_oficina,celular_claro,celular_movistar,nextel','clientes','where id="{id_cliente}"')),
								'usuario'	=>array('fila'=>array('id_jefe,nombre,apellidos,genero,email,firma,telefono_oficina,celular_claro,celular_movistar','usuarios','where id="{id_usuario}"')),
								// 'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email,firma','usuarios','where id="{id_usuario}"')),
								//'grupo'		=>array('fila'=>array('nombre','productos_grupos','where id="{id_grupo}"')),
								//'tipo'		=>array('fila'=>array('nombre','productos_tipo','where id="{id_tipo}"')),
								'item'		=>array('fila'=>array('nombre,descripcion5','productos_items','where id="{id_item}"',0)),							
								// 'item_item'	=>array('fila'=>array('nombre,numero,id_items_tipo','productos_items_items','where id="{id_items_item}"')),							
								// 'cuenta'	=>array('fila'=>array('nombre,logo,fecha_creacion,dominio','envios_cuentas','where id="{id_cuenta_email}"',0,
								// 		array('logo'=>array('archivo'=>array('log_imas','{fecha_creacion}','{logo}')))	
								// 	)
								// ),							
								'sectorista'=>array('fila'=>array('nombre,apellidos,email,telefono','bancos_sectoristas','where id="{id_sectorista}"')),
								'banco'=>array('fila'=>array('nombre','bancos','where id="{id_banco}"')),
								'promocion'=>array('fila'=>array('texto','promociones','where id="{id_promocion}"')),
							)							
						);


	// prin($linea);




	$styles=render_style();


	// $tableProps='width="100%" cellpadding="0" cellspacing="0" border="0" ';	ÏÏ					


		// $producto['ficha']=fix_ficha($producto['ficha']);

		//var_dump($producto);

	/**
	 * CLIENTE
	 */
	


	$pblocks=array();


	$pblocks[]=render_logo($linea);


	$pblocks[]=render_cliente($linea);


		$pedido=json_decode($linea['pedido']);
		// prin($linea['pedido']);
		// exit();

		$pdepartamentos=array();
		$pdepositos=array();
		$pestacionamientos=array();

		$suma=0;
		foreach($pedido as $pedi){
			switch($pedi->type){
				case "departamento":
					$pdepartamentos[]=array('id'=>$pedi->id,'price'=>$pedi->price); $suma=$suma+$pedi->price;
				break;
				case "estacionamiento":
					$pestacionamientos[]=array('id'=>$pedi->id,'price'=>$pedi->price); $suma=$suma+$pedi->price;
				break;
				case "deposito":
					$pdepositos[]=array('id'=>$pedi->id,'price'=>$pedi->price); $suma=$suma+$pedi->price;
				break;						
			}

		}

		foreach($pdepartamentos as $pdep)
			$pblocks[]=render_departamentos(extract_departamentos($pdep['id']),$pdep['price']);

		foreach($pdepositos as $pdep)
			$pblocks[]=render_depositos(extract_depositos($pdep['id']),$pdep['price']);

		foreach($pestacionamientos as $pdep)
			$pblocks[]=render_estacionamiento(extract_estacionamiento($pdep['id']),$pdep['price']);	



		$pblocks[]=render_total($linea,$suma);


		if($linea['id_promocion']!=''){

			$pblocks[]=render_promocion($linea);

		}

		$pblocks[]=render_vendedor($linea);

		// $pblocks[]=render_caracteristicas_inmueble($pdepartamentos['0']);

		$pblocks[]=render_caracteristicas_proyecto($linea);

		// prin($pdepartamentos);

		$pblocks[]=render_plano(extract_departamentos($pdepartamentos['0']['id']),$pdepartamentos['0']['price']);

		$pblocks[]=render_firma($linea);

		// prin($pblocks);

		$html=implode("",$pblocks);

		// echo $html;
		// exit();
		// echo '<textarea>'.$html.'</textarea>';
		// die();
		

		$Producto=str_replace("\\\"","\"",$html);
		// echo $Producto;


			if($_SERVER['REQUEST_METHOD']=='POST'){

				$CuentasE=select('nombre,email,logo,fecha_creacion,dominio','envios_cuentas','where 1',0,
									array('logo'=>array('archivo'=>array('log_imas','{fecha_creacion}','{logo}')))	
								);

				$linea['cuenta']['logo']=($linea['id_grupo']=='4')?$CuentasE['1']['logo']:$CuentasE['0']['logo'];		


				$unos=between($_POST['msg'],"<!--","-->");

				$ID_SPEECH=dato("id",$speeches_tabla,"where nombre='".$unos[1]."'",0);			

				$insertado_mensaje=insert(array(
								'id_grupo'=>$_GET['id'],
								'tipo'=>$status_actividad,
								'nombre'=>$_POST['subject'],
								'id_speech'=>$ID_SPEECH,
								'fecha_creacion'=>"now()",
								'fecha_edicion'=>"now()",	
								'visibilidad'=>'1',
								 ),
								 "ventas_mensajes",
								 0
								 );

				$_POST['msg']=str_replace(array(
												"../imagenes_dir/",
												"[IMPRIMIR]",
												)
										 ,array(
										 		$vars_server['httpfiles']."/imagenes_dir/",
				"<a href='http://crmsche.info/index.php?modulo=items&tab=productos_imprimir&acc=file&id_mensaje=".$insertado_mensaje['id']."&id_usuario=".$linea['id_usuario']."'>IMPRIMIR</a>",								 
										 		),$_POST['msg']);
									update(array(
												'texto'=>$_POST['msg'],
												),
											 "ventas_mensajes",
											 "where id='".$insertado_mensaje['id']."'",
											 0
											);
				/*							
				prin(						array(
							'emails'=>array($linea['cliente']['email'],'guillermolozan@gmail.com','wtavara@prodiserv.com')
							,'Subject'=>$_POST['subject']
							,'body'=>$_POST['msg']
							,'From'=>$linea['usuario']['email']
							,'FromName'=>$linea['usuario']['nombre']." ".$linea['usuario']['apellidos']
							,'Logo'=>$linea['cuenta']['logo']
							));
				*/
			


				switch($_GET['tab']){
					case "deljefe":

						$email_cliente=enviar_email(
									array(
									'emails'=>array(
													'ecanevello@schgrupo.com',
													'guillermolozan@gmail.com',
													$linea['usuario']['email'],
													'wtavara@prodiserv.com',
													)
									,'Subject'=>$_POST['subject']
									,'body'=>$_POST['msg'].$style
									,'From'=>dato("email","usuarios2","where id=".$linea['usuario']['id_jefe'])
									,'FromName'=>dato("nombre","usuarios2","where id=".$linea['usuario']['id_jefe']).' '.dato("apellidos","usuarios2","where id=".$linea['usuario']['id_jefe'])
									,'Logo'=>$linea['cuenta']['logo']
									)
								);	

					case "deladmin": 

						$email_cliente=enviar_email(
									array(
									'emails'=>array(
													'ecanevello@schgrupo.com',
													'guillermolozan@gmail.com',
													$linea['usuario']['email'],
													'wtavara@prodiserv.com',
													)
									,'Subject'=>$_POST['subject']
									,'body'=>$_POST['msg'].$style
									,'From'=>'administrador'
									,'FromName'=>'Administrador'
									,'Logo'=>$linea['cuenta']['logo']
									)
								);	

					break;
					default:

						$email_cliente=enviar_email(
									array(
									'emails'=>array(
													'ecanevello@schgrupo.com',
													'guillermolozan@gmail.com',
													$linea['cliente']['email'],
													$linea['usuario']['email'],
													'wtavara@prodiserv.com',
													)
									,'Subject'=>$_POST['subject']
									,'body'=>$_POST['msg'].$style
									,'From'=>$linea['usuario']['email']
									,'FromName'=>$linea['usuario']['nombre']." ".$linea['usuario']['apellidos'] 
									,'Logo'=>$linea['cuenta']['logo']
									)
								);

					break;
				}




				print_r($email_cliente);			
	//			print_r($email_cliente['todos']);

				exit();

			}

		

		//prin($linea);
		$tbcampos['from']		=array(
							'campo'			=> 'from',
							'label'			=> 'Desde',
							'tipo'			=> 'inp',
							'style'			=> 'width:300px;',							
							'size'			=> '250',	
							'derecha'		=> '1',
							'constante'		=> ($_GET['id']=='')?'0':'1',
							'default'		=> ($linea['usuario']['email']=='')?dato("valor","configuraciones_root","where variable='email_from'"):$linea['usuario']['nombre']." ".$linea['usuario']['apellidos']."&lt;".$linea['usuario']['email']."&gt;",
						);

		$tbcampos['mailto']	=array(
							'campo'			=> 'mailto',
							'label'			=> 'Para',
							'tipo'			=> ($_GET['id']=='')?'inp':'hid',
							'style'			=> 'width:300px;',							
							'size'			=> '250',	
							'derecha'		=> '1',
							'constante'		=> ($_GET['id']=='')?'0':'1',
							'default'		=> $linea['id_cliente'],
							'opciones'		=> 'id,nombre;apellidos;email|clientes',
						);


		$tbcampos['asunto']	=array(
							'campo'			=> 'asunto',
							'label'			=> 'Asunto',
							'tipo'			=> 'inp',
							'style'			=> 'width:400px;',							
							'size'			=> '250',	
							'derecha'		=> '1',
							'default'		=> ($_GET['id']=='')?'Cotización':'Cotización &quot;'.$linea['item']['nombre'].'&quot;'
						);


		if($_GET['tab']=='deljefe'){

			$tbcampos['from']['default']  =dato("nombre","usuarios2","where id=".$linea['usuario']['id_jefe'])." ".dato("apellidos","usuarios2","where id=".$linea['usuario']['id_jefe']);
			$tbcampos['mailto']['opciones']='id,nombre;apellidos;email|usuarios';
			$tbcampos['mailto']['default']=$linea['id_usuario'];
			$tbcampos['asunto']['default']='Mensaje del Jefe';

		}


		if($_GET['tab']=='deladmin'){

			$tbcampos['from']['default']  ='Administrador';
			$tbcampos['mailto']['opciones']='id,nombre;apellidos;email|usuarios';
			$tbcampos['mailto']['default']=$linea['id_usuario'];
			$tbcampos['asunto']['default']='Mensaje del Administrador';

		}


		$tbcampos['texto']	=array(
							'campo'			=> 'texto',
							'label'			=> '',
							'tipo'			=> 'html',
							'style'			=> 'width:650px;height:400px;',
							'width'			=> '100px',
							'derecha'		=> '1',
							//'css'			=> 'table { width:100%; margin-bottom:10px; background:none; } table td, table th { border:0 !important; padding:0px !importat;}',
							'default'		=> '',
							
							'botones'		=> ($speeches_tabla=='speeches') ? 'nombre,texto|speeches|where id_item='.$linea['id_item'] : 'nombre,texto|speeches_asesor|where 1',
							
							'variables'		=> array(		
								'ESTIMADO'          =>($linea['cliente']['genero']=='2')?'Estimada':'Estimado',
								'SR'                =>($linea['cliente']['genero']=='2')?'Sra.':'Sr.',
								//'VENDEDOR_NOMBRE' =>$linea['usuario']['nombre'].' '.$linea['usuario']['apellidos'],
								//'VENDEDOR'        =>(($linea['usuario']['genero']=='2')?'la Srta.':'el Sr.')." ".$linea['usuario']['nombre'].' '.$linea['usuario']['apellidos'],
								'VENDEDOR'          =>$linea['usuario']['nombre'].' '.$linea['usuario']['apellidos'],
								//'CLIENTE_NOMBRE'  =>$linea['cliente']['nombre'].' '.$linea['cliente']['apellidos'],
								//'CLIENTE'         =>(($linea['cliente']['genero']=='2')?'Srta.':'Sr.')." ".$linea['cliente']['nombre'].' '.$linea['cliente']['apellidos'],
								'CLIENTE'           =>strtoupper($linea['cliente']['nombre'].' '.$linea['cliente']['apellidos']),							
								// 'MODELO'         =>$linea['grupo']['nombre'].' '.$linea['item']['nombre'],
								
								'INMUEBLE'          =>$linea['item']['nombre'].' - '.$linea['item_item']['nombre'].' '.$linea['item_item']['numero'],
								'FICHA'             =>"<span class=\"id_speech\"></span>".str_replace("'","\"",$Producto),	
								'FIRMA'             =>str_replace("'","\"",$linea['usuario']['firma']),
								'IMPRIMIR'          =>str_replace("'","\"","<a href='http://crmsche.info/cotizacion/".$linea['id']."/imprimir'>IMPRIMIR</a>"),


								'COTIZACION'		  => ''
															 .'PROYECTO: '.$linea['item']['nombre'].'<br>'
															 .'COTIZACIÓN: <a href="http://crmsche.info/panel/custom/ventas_items.php?i='.$linea['id'].'">#'.$linea['id'].'</a><br>'
															 .'FECHA '.fecha_formato($linea['fecha_creacion'],'8b').'<br>'
															 .'CLIENTE: '.strtoupper($linea['cliente']['nombre'].' '.$linea['cliente']['apellidos'])."<br>"

							)
					);

		
		// prin($tbcampos);
		//prin($Productos[$linea['id_item']]);
	?>

	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>		
	<div>
		<?php
		?>	
		<div class="bloque_content_crear" style="width:1000px;" >
	    <ul class="formulario">
		<?php 
		include('formulario_campos.php'); ?>
		<li id="linea_crear" class="linea_form " >
		
		<label>&nbsp;</label>
		<input type="button" onclick="enviar();" value="Enviar Email" class="btn btn-primary enviar" id="in_submit">

		</li>
		</ul>
	    </div>
	    <div class="columna_derecha" id="botones"></div>	    
	    <script>
		<?php include("formulario_camposjs.php"); ?>
		</script>
	    <script>
	 //    var Bot={};
		// //Bot=<?php //echo json_encode($Botones); ?>;
		// var html='';
		// var gr='';
		// for(var i=0;i<Bot.length;i++){
		// 	if(gr!=Bot[i].g){
		// 	html+='<b>'+Bot[i].g+'</b>'; gr=Bot[i].g;
		// 	}
		// 	html+='<a href="#" onclick="mooeditable_texto.selection.insertContent(Bot['+i+'].h);return false;">';
		// 	if(Bot[i].t){html+='<img src="'+Bot[i].t+'"/>';}
		// 	html+=Bot[i].n;
		// 	html+='</a>';
		// }
		// $('botones').innerHTML=html;

		function enviar(){

			var msg=CKEDITOR.instances.in_texto.getData();
			crear_loading("Enviando");
			new Request({url:"base2/apps/enviar_cotizacion.php?id=<?php echo $_GET['id'];?>&tab=<?php echo $_GET['tab'];?>&ajax=1",method:'post',data:{'msg':msg,'subject':$('in_asunto').value},onSuccess:function(eee){

			alert('mensaje enviado');
			window.close();

			}}).send();		

		}

		function crear_loading(string){	
			new Element('div', {'id':'loading', 'html': 'cargando','styles': {
					position: 'absolute',
					'background-color':'#000000',
					top: 0,
					left: 0,
					width: window.getWidth(),
					height: window.getHeight(),
					filter: 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)',
					opacity: 0.4,
					'z-index': 998
				}}).inject($(document.body), 'top');
			new Element('div', {'id':'loading_inner', 'html': string+'...','styles': {
					position: 'absolute',
					'background-color':'#000000',
					height: 'auto',
					padding:'5px 20px',
					width: 140,
					'text-align': 'center',
					left: 964/2 - 70,
					top: window.getHeight()/2 - 20,
					'z-index': 999,
					'color':'red',
					'font-family':'calibri',
					'font-size':'20px'
				}}).inject($(document.body), 'top');				
		}	

	    </script>
	    <?php 
		//m.selection.insertContent('inserted <strong>content</strong>');return false;"
		?>
		<style>


		/*.formulario label { width:50px; text-align:left; text-transform:uppercase; } */
/*		.bloque_content_crear { float:left; }
		.columna_derecha { float:left; height:500px; overflow:auto; }
		.columna_derecha b { float:left; clear:left; }
		.columna_derecha a { float:left; clear:left; text-decoration:none; height:17px; width:140px; overflow:hidden; background:#FFF; border:1px solid #DDD; text-align:left; margin-bottom:0px; padding-left:3px; }
		.columna_derecha a:hover { background-color:#FFC; }	
		.columna_derecha a img { height:12px; margin-right:3px; }
		#linea_crear input { float:right !important; }*/
		</style> 

	</div>

<script language="JavaScript" type="text/javascript">

window.moveTo(0,0);

window.resizeTo(1100,750);

<?php

$NUM_ALERTAS_PENDIENTES=contar('ventas_mensajes','where id_grupo="'.$_GET['id'].'" and alerta_fecha>NOW() ',0);

$id_venta=$_GET['id'];

if($_GET['tab']==''){

echo "
window.addEvent('domready', function(){

	new Element('a', {

				'id':'imprimir-button',
				'html': '". ( ($NUM_ALERTAS_PENDIENTES==0)?"ANTES DEBES PROGRAMAR ALERTA":"ENVIAR") ."',
				'title': '". ( ($NUM_ALERTAS_PENDIENTES==0)?"Debe programar una alerta para poder enviar":"click para enviar") ."',
				'class':'btn btn-small ". ( ($NUM_ALERTAS_PENDIENTES==0)?"btn-danger":"btn-primary") ."',
				'styles': {
	 				'position'	: 'absolute',
					'right'		: '10px',
					'top'		: '10px',
					'cursor'	: 'pointer',
					'z-index'	: 1
				},
				'events': {
	                'click': function(el){
					".( ($NUM_ALERTAS_PENDIENTES==0)?"parent.program_alert($id_venta);parent.initMultiBox.close();":"enviar()" ) ."
            		}
    		    }
	}).inject($(document.body), 'top');

	$0('in_submit');

});
/*
function imprimir(){
$0('imprimir-button');
window.print();
new Request({url:'panel/base2/imprimir_click.php',method:'post',data:{'id_venta':'$id_venta'},onSuccess:function(eee){
	parent.ax('recargar');
    parent.initMultiBox.close();
}});
}
*/
";

}

?>
</script>
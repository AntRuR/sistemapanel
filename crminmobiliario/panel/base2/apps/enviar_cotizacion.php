<?php //á

// prin($_GET);

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
include("config/library.php");



	//if($_GET['id']!=''){

		$linea=select_fila(
							array(
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
								'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email,firma,telefono_oficina,celular_claro,celular_movistar','usuarios','where id="{id_usuario}"')),
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

				$ID_SPEECH=dato("id","speeches","where nombre='".$unos[1]."'",0);			

				$insertado_mensaje=insert(array(
								'id_grupo'=>$_GET['id'],
								'tipo'=>'1',
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
				"<a href='http://crminmobiliario.info/index.php?modulo=items&tab=productos_imprimir&acc=file&id_mensaje=".$insertado_mensaje['id']."&id_usuario=".$linea['id_usuario']."'>IMPRIMIR</a>",								 
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


				print_r($email_cliente);			
	//			print_r($email_cliente['todos']);

				exit();

			}

		


		//prin($linea);
		$tbcampos=array(
						'from'		=>array(
							'campo'			=> 'from',
							'label'			=> 'Desde',
							'tipo'			=> 'inp',
							'style'			=> 'width:300px;',							
							'size'			=> '250',	
							'derecha'		=> '1',
							'constante'		=> ($_GET['id']=='')?'0':'1',
							'default'		=> ($linea['usuario']['email']=='')?dato("valor","configuraciones_root","where variable='email_from'"):$linea['usuario']['nombre']." ".$linea['usuario']['apellidos']."&lt;".$linea['usuario']['email']."&gt;",
						),
						'mailto'		=>array(
							'campo'			=> 'mailto',
							'label'			=> 'Para',
							'tipo'			=> ($_GET['id']=='')?'inp':'hid',
							'style'			=> 'width:300px;',							
							'size'			=> '250',	
							'derecha'		=> '1',
							'constante'		=> ($_GET['id']=='')?'0':'1',
							'default'		=> $linea['id_cliente'],
							'opciones'		=> 'id,nombre;apellidos;email|clientes',
						),

						'asunto'		=>array(
							'campo'			=> 'asunto',
							'label'			=> 'Asunto',
							'tipo'			=> 'inp',
							'style'			=> 'width:400px;',							
							'size'			=> '250',	
							'derecha'		=> '1',
							'default'		=> ($_GET['id']=='')?'Cotización':'Cotización &quot;'.$linea['item']['nombre'].'&quot;'
						),

						'texto'			=>array(
							'campo'			=> 'texto',
							'label'			=> '',
							'tipo'			=> 'html',
							'style'			=> 'width:650px;height:400px;',
							'width'			=> '100px',
							'derecha'		=> '1',
							//'css'			=> 'table { width:100%; margin-bottom:10px; background:none; } table td, table th { border:0 !important; padding:0px !importat;}',
							'default'		=> '',
							'botones'		=> 'nombre,texto|speeches|where id_item='.$linea['id_item'],
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
							)
					),

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
			new Request({url:"base2/apps/enviar_cotizacion.php?id=<?php echo $_GET['id'];?>&ajax=1",method:'post',data:{'msg':msg,'subject':$('in_asunto').value},onSuccess:function(eee){

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
	window.resizeTo(1080,750); 
</script> 
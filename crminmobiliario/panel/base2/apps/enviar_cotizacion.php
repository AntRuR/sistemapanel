<?php //á
if($_GET['ajax']=='1'){
	chdir("../../");	
	include("lib/global.php");
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util.php");
	include("lib/webutil.php");
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
							array('id_cliente','pedido','id_item','id_usuario','id_status','pedido'),
							'ventas_items',
							'where id='.$_GET['id'],
							0,
							array(
								'cliente'	=>array('fila'=>array('nombre,apellidos,genero,email,dni','clientes','where id="{id_cliente}"')),
								'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email,firma','usuarios','where id="{id_usuario}"')),
								//'grupo'		=>array('fila'=>array('nombre','productos_grupos','where id="{id_grupo}"')),
								//'tipo'		=>array('fila'=>array('nombre','productos_tipo','where id="{id_tipo}"')),
								'item'		=>array('fila'=>array('nombre','productos_items','where id="{id_item}"')),							
								// 'item_item'	=>array('fila'=>array('nombre,numero,id_items_tipo','productos_items_items','where id="{id_items_item}"')),							
								'cuenta'	=>array('fila'=>array('nombre,logo,fecha_creacion,dominio','envios_cuentas','where id="{id_cuenta_email}"',0,
										array('logo'=>array('archivo'=>array('log_imas','{fecha_creacion}','{logo}')))	
									)
								),							
							)							
						);


$telefonos_fijos=$telefonos_moviles=array();

if($linea['cliente']['telefono']!='')$telefonos_fijos[]=$linea['cliente']['telefono'];
if($linea['cliente']['telefono_oficina']!='')$telefonos_fijos[]=$linea['cliente']['telefono_oficina'];

if($linea['cliente']['celular_claro']!='')$telefonos_moviles[]=$linea['cliente']['celular_claro'];
if($linea['cliente']['celular_movistar']!='')$telefonos_moviles[]=$linea['cliente']['celular_movistar'];
if($linea['cliente']['nextel']!='')$telefonos_moviles[]=$linea['cliente']['nextel'];

$telefonos_fijos_string = implode("/ ",$telefonos_fijos);
$telefonos_moviles_string = implode("/ ",$telefonos_moviles);



	$style=render_style();


	// $tableProps='width="100%" cellpadding="0" cellspacing="0" border="0" ';						


		// $producto['ficha']=fix_ficha($producto['ficha']);

		//var_dump($producto);

	/**
	 * CLIENTE
	 */
			
	$html='';
	$html.='<table '.$style['table'].' width="650px" cellpadding=0 cellspacing=0 border=0>';
	$html.='<tr><td colspan=4 '.$style['section'].'>Cliente</td></tr>';
	$html.='<tr><td '.$style['variable'].'>Nombre</td><td '.$style['valor'].' colspan=3>'.strtoupper($linea['cliente']['nombre']." ".$linea['cliente']['apellidos']).'</td></tr>';
	$html.='<tr><td '.$style['variable'].'>Email</td><td '.$style['valor'].'>'.$linea['cliente']['email'].'</td>';
	$html.='<td '.$style['variable'].'>DNI</td><td '.$style['valor'].'>'.$linea['cliente']['dni'].'</td></tr>';
	$html.='<tr><td '.$style['variable'].'>Teléfono Fijo</td><td '.$style['valor'].'>'.$telefonos_fijos_string.'</td>';
	$html.='<td '.$style['variable'].'>Teléfono Móvil</td><td '.$style['valor'].'>'.$telefonos_moviles_string.'</td></tr>';
	$html.='</table>';



		$pedido=json_decode($linea['pedido']);
		// prin($linea['pedido']);
		// exit();

		$pblocks=array();
		$pdepartamentos=array();
		$pdepositos=array();
		$pestacionamientos=array();

		foreach($pedido as $pedi){
			switch($pedi->type){
				case "departamento":
					$pdepartamentos[]=array('id'=>$pedi->id,'price'=>$pedi->price);
				break;
				case "estacionamiento":
					$pestacionamientos[]=array('id'=>$pedi->id,'price'=>$pedi->price);
				break;
				case "deposito":
					$pdepositos[]=array('id'=>$pedi->id,'price'=>$pedi->price);
				break;						
			}

		}

		foreach($pdepartamentos as $pdep)
			$pblocks[]=render_departamentos(extract_departamentos($pdep['id']));

		foreach($pdepositos as $pdep)
			$pblocks[]=render_depositos(extract_depositos($pdep['id']));

		foreach($pestacionamientos as $pdep)
			$pblocks[]=render_estacionamiento(extract_estacionamiento($pdep['id']));	
		

		// prin($pblocks);

		$html=$html.implode("",$pblocks);

		// echo $html;
		// exit();
		
		$Producto=str_replace("\\\"","\"",$html);



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
											$linea['cliente']['email'],
											$linea['usuario']['email'],
											'guillermolozan@gmail.com',
											'wtavara@prodiserv.com',
											)
							,'Subject'=>$_POST['subject']
							,'body'=>$_POST['msg'].$styles
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
							'default'		=> $linea['usuario']['nombre']." ".$linea['usuario']['apellidos']."&lt;".$linea['usuario']['email']."&gt;",
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
							'default'		=> ($_GET['id']=='')?'Cotización':'Cotización &quot;'.$linea['item']['nombre'].' - '.$linea['item_item']['nombre'].' '.$linea['item_item']['numero'].'&quot;'
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
								//'IMPRIMIR'        =>str_replace("'","\"","<a href='http://".(($linea['cuenta']['dominio'])?$linea['cuenta']['dominio']:"www.vehiculos.com.pe")."/index.php?modulo=items&tab=productos_imprimir&acc=file&id=".$linea['id_item']."&id_cliente=".$linea['id_cliente']."'>IMPRIMIR</a>"),

							)
					),

		);
		// prin($tbcampos);
		//prin($Productos[$linea['id_item']]);
		?>
	<div>
		<?php
		?>	
		<div class="bloque_content_crear" style="width:659px;" >
	    <ul class="formulario">
		<?php 
		include('formulario_campos.php'); ?>
		<li id="linea_crear" class="linea_form " >
		<label>&nbsp;</label>
		<input type="button" onclick="enviar();" style="float:left;" value="Enviar" class="form_boton_1" id="in_submit">
		</li>
		</ul>
	    </div>
	    <div class="columna_derecha" id="botones"></div>	    
	    <script>
		<?php include("formulario_camposjs.php"); ?>
		</script>
	    <script>
	    var Bot={};
		//Bot=<?php //echo json_encode($Botones); ?>;
		var html='';
		var gr='';
		for(var i=0;i<Bot.length;i++){
			if(gr!=Bot[i].g){
			html+='<b>'+Bot[i].g+'</b>'; gr=Bot[i].g;
			}
			html+='<a href="#" onclick="mooeditable_texto.selection.insertContent(Bot['+i+'].h);return false;">';
			if(Bot[i].t){html+='<img src="'+Bot[i].t+'"/>';}
			html+=Bot[i].n;
			html+='</a>';
		}
		$('botones').innerHTML=html;

		function enviar(){
			var msg=mooeditable_texto.getContent();
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


		.formulario label { width:50px; text-align:left; text-transform:uppercase; } 
		.bloque_content_crear { float:left; }
		.columna_derecha { float:left; height:500px; overflow:auto; }
		.columna_derecha b { float:left; clear:left; }
		.columna_derecha a { float:left; clear:left; text-decoration:none; height:17px; width:140px; overflow:hidden; background:#FFF; border:1px solid #DDD; text-align:left; margin-bottom:0px; padding-left:3px; }
		.columna_derecha a:hover { background-color:#FFC; }	
		.columna_derecha a img { height:12px; margin-right:3px; }
		#linea_crear input { float:right !important; }
		</style> 

	</div>
<script language="JavaScript" type="text/javascript"> 
	window.moveTo(0,0); 
	window.resizeTo(1100,750); 
</script> 
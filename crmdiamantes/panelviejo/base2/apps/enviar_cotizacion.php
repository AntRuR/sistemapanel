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



	function fix_ficha($ficha){



		$ficha=str_replace('&nbsp;','',$ficha);

		$ficha=preg_replace("/id=(\")(?)(\")/",'',$ficha);

		$ficha=preg_replace("/<br>/",'',$ficha);

		$ficha=str_replace('<br />','',$ficha);

		$html = str_get_html($ficha);

		$tables=$html->find("table td");

		foreach($tables as $ta){

			$tabl=$ta->find("table");

			if(sizeof($tabl)>0){

			$tat=$ta->innertext();

			$tat=str_replace("<table","<table cellspacing=0 cellpadding=4 style='border-collapse:collapse;margin-bottom:5px;font-size:11px;' ",$tat);

			$tat=str_replace("colspan=\"2\"","colspan=\"2\" style='border:1px solid #ddd;background-color:#ccc;' valign=top ",$tat);

			$tat=preg_replace("/<td(\s*)>/","<td style='border:1px solid #ddd;;' width='50%' valign=top>",$tat);

			$Tabl[]=$tat;

			}

		}

		$html->clear();

		unset($html);



		$ficha="<table width='100%' cellpadding=5 cellspacing=5>

		<tr>

		<td valign=top width='50%'>".$Tabl[0]."</td>

		<td valign=top width='50%'>".$Tabl[1]."</td>

		</tr></table>";

		return $ficha;



	}



	$productos=select(

					array('id','nombre','ficha','id_grupo'),

					//array('id','nombre','id_grupo'),

					"productos_items",

					"where visibilidad=1 and id_grupo in (select id from productos_grupos where visibilidad=1) order by id_grupo asc, id asc",

					0,

					array(

						'grupo'=>array('fila'=>array('nombre','productos_grupos','where id="{id_grupo}"')),

						'fotos'=>array('fotos'=>array(

													"id,file,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id asc limit 0,100"

													,$objeto_tabla['PRODUCTOS_FOTOS']['campos']['file']['carpeta']

													,array(

														   'archivo'=>'1',

														   'thumb'=>'3,260x200,0',

														   'box'=>'4'

														   //'atributos'=>'3,624x600,0'

														  )

													 )

									  )

					)

				);



	$tableProps='width="100%" cellpadding="0" cellspacing="0" border="0" ';



	foreach($productos as $pp=>$producto){



		$producto['ficha']=fix_ficha($producto['ficha']);



		$html='';

		$html.="<table width='650px' cellpadding=0 cellspacing=0 border=0  >";

		$html.='<tr><td style="text-align:center;font-weight:bold;color:#F10102;">'.$producto['nombre'].'</td></tr>';

		if(trim(strip_tags($producto['ficha']))!=''){

		$html.='<tr><td>'.$producto['ficha'].'</td></tr>';

		}

		$html.='<tr><td>';

		if(sizeof($producto['fotos'])>0){

			$html.="<table $tableProps >";

			$ttt=0;

			foreach($producto['fotos'] as $t=>$foto){

				if($ttt==0){ $html.='<tr>'; }

				$html.="<td align=center valign=middle style=\"border:1px solid #999 !important;\"><a href='".$foto['box']."'><img ".$foto['thumb']." /></a></td>";

				if($ttt==1){ $html.='</tr>'; }

				if($ttt==1){ $ttt=0; } else { $ttt=1; }

			}

			$html.="</table><br>";

		}

		$html.='</td></tr>';

		$html.='<tr><td height="5"></td></tr>';

		$html.='</table>';



		$Productos[$producto['id']]=str_replace("\\\"","\"",$html);



		$Botones[]=array(

						'g'=>$producto['grupo']['nombre'],

						'n'=>$producto['nombre'],

						't'=>$producto['fotos'][0]['archivo'],

						'h'=>$html,

						);



	}





	if($_GET['id']!=''){

	$linea=select_fila(

						array('id_cliente','id_grupo','id_item','id_usuario','id_status','id_cuenta_email'),

						'ventas_items',

						'where id='.$_GET['id'],

						0,

						array(

							'cliente'	=>array('fila'=>array('nombre,apellidos,genero,email','clientes','where id="{id_cliente}"')),

							'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email,firma','usuarios','where id="{id_usuario}"')),

							'grupo'		=>array('fila'=>array('nombre','productos_grupos','where id="{id_grupo}"')),

							'item'		=>array('fila'=>array('nombre','productos_items','where id="{id_item}"')),

							'cuenta'	=>array('fila'=>array('nombre,logo,fecha_creacion,dominio','envios_cuentas','where id="{id_cuenta_email}"',0,

									array('logo'=>array('archivo'=>array('log_imas','{fecha_creacion}','{logo}')))

								)

							),

						)

						);



		//prin($linea);



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

			"<a href='http://incapower.pe/index.php?modulo=items&tab=productos_imprimir&acc=file&id_mensaje=".$insertado_mensaje['id']."&id_usuario=".$linea['id_usuario']."'>IMPRIMIR</a>",

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

						,'body'=>$_POST['msg']

						,'From'=>$linea['usuario']['email']

						,'FromName'=>$linea['usuario']['nombre']." ".$linea['usuario']['apellidos']

						,'Logo'=>$linea['cuenta']['logo']

						)

					);





			print_r($email_cliente);

//			print_r($email_cliente['todos']);



			exit();

		}



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

						'opciones'		=> 'id,nombre;apellidos;email|clientes|where 0',

					),



					'asunto'		=>array(

						'campo'			=> 'asunto',

						'label'			=> 'Asunto',

						'tipo'			=> 'inp',

						'style'			=> 'width:400px;',

						'size'			=> '250',

						'derecha'		=> '1',

						'default'		=> ($_GET['id']=='')?'Cotización':'Cotización &quot;'.$linea['grupo']['nombre'].' '.$linea['item']['nombre'].'&quot;'

					),



					'texto'			=>array(

						'campo'			=> 'texto',

						'label'			=> '',

						'tipo'			=> 'html',

						'style'			=> 'width:650px;height:360px;',

						'width'			=> '100px',

						'derecha'		=> '1',

						//'css'			=> 'table { width:100%; margin-bottom:10px; background:none; } table td, table th { border:0 !important; padding:0px !importat;}',

						'default'		=> '',

						'botones'		=> 'nombre,texto|speeches',

						'variables'		=> array(

							'ESTIMADO'=>($linea['cliente']['genero']=='2')?'Estimada':'Estimado',

							'SR'=>($linea['cliente']['genero']=='2')?'Sra.':'Sr.',

							//'VENDEDOR_NOMBRE'=>$linea['usuario']['nombre'].' '.$linea['usuario']['apellidos'],

							//'VENDEDOR'=>(($linea['usuario']['genero']=='2')?'la Srta.':'el Sr.')." ".$linea['usuario']['nombre'].' '.$linea['usuario']['apellidos'],

							'VENDEDOR'=>$linea['usuario']['nombre'].' '.$linea['usuario']['apellidos'],

							//'CLIENTE_NOMBRE'=>$linea['cliente']['nombre'].' '.$linea['cliente']['apellidos'],

							//'CLIENTE'=>(($linea['cliente']['genero']=='2')?'Srta.':'Sr.')." ".$linea['cliente']['nombre'].' '.$linea['cliente']['apellidos'],

							'CLIENTE'=>strtoupper($linea['cliente']['nombre'].' '.$linea['cliente']['apellidos']),

							'MODELO'=>$linea['grupo']['nombre'].' '.$linea['item']['nombre'],

							'FICHA'=>"<span class=\"id_speech\"></span>".str_replace("'","\"",$Productos[$linea['id_item']]),

							//'IMPRIMIR'=>str_replace("'","\"","<a href='http://".(($linea['cuenta']['dominio'])?$linea['cuenta']['dominio']:"www.vehiculos.com.pe")."/index.php?modulo=items&tab=productos_imprimir&acc=file&id=".$linea['id_item']."&id_cliente=".$linea['id_cliente']."'>IMPRIMIR</a>"),
							'FIRMA'=>$linea['usuario']['firma'],


						)

				),



	);

	//prin($tbcampos['texto']);

	//prin($Productos[$linea['id_item']]);



?>

<div>

	<?php

	if(trim($linea['usuario']['email'])==''){

	echo "<div style='color:red;font-weight:bold;padding:50px 30px;text-transform:uppercase;'>No se puede enviar debido a que el vendedor no tiene configurado un email.</div>";

	} else { ?>

	<div class="bloque_content_crear" style="width:659px;" >

    <ul class="formulario">

	<?php

	include('formulario_campos.php'); ?>

	<li id="linea_crear" class="linea_form " >

	<label>&nbsp;</label>

	<!-- input type="button" onclick="enviar();" style="float:left;" value="Enviar" class="btn btn-primary" id="in_submit"-->

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

    <?php  } ?>

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

<?php

$NUM_ALERTAS_PENDIENTES=contar('ventas_mensajes','where id_grupo="'.$_GET['id'].'" and alerta_fecha>NOW() ',0);

$id_venta=$_GET['id'];
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
?>
</script>
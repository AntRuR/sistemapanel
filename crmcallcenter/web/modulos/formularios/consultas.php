<?php

// exit();

$temp=true;

$speech_respuesta='respuesta_web_incapower';

$id_cuenta=3;


include_once("formularios/formularios.php");

include("../../panel/lib/simple_html_dom.php");



/*
function fix ficha
 */
function fix_ficha($ficha){


	$ficha=str_replace('&nbsp;','',$ficha);

	$ficha=preg_replace("/id=(\")(?)(\")/",'',$ficha);

	$ficha=preg_replace("/<br>/",'',$ficha);

	$ficha=str_replace('<br />','',$ficha);

	$html = str_get_html($ficha);

	$tables=$html->find("table td");

	foreach($tables as $ta)
	{

		$tabl=$ta->find("table");

		if(sizeof($tabl)>0)
		{

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


/*
campos
 */
$CAMPOS=array(


	'id_item'=>array(

		'label'=>'Producto'

		,'tipo'=>'input_hidden'

		// ,'tipo'=>'textarea'

		,'value'=>array($ITEM['id'])

		,'value_email'=>array(select_dato('nombre','productos_items','where id="'.$_POST['id_item'].'"'))

	),

	'nombre'=>array(

		'label'=>'Nombre'

		,'validacion'=>"validate['required']"

		),

	'apellidos'=>array(

		'label'=>'Apellidos',

		'validacion'=>"validate['required']",

		),

	'genero'=>array(

		'label'=>'Género',

		'tipo'=>'input_combo',

		'validacion'=>"validate['required']",

		'opciones'=>array('1'=>'Masculino','2'=>'Femenino','3'=>'Empresa'),

		),

	'telefono'=>array(

		'label'=>'Teléfono'

		,'validacion'=>"validate['required','phone']"

	)

	,'email'=>array(

		'label'=>'E-mail'

		,'validacion'=>"validate['required','email']"

	)

	,'ciudad'=>array(

		'label'=>'Ciudad'

		,'validacion'=>"validate['required']"

	)


	,'consulta'=>array(

		'label'=>'Consulta'

		,'tipo'=>'textarea'

		,'validacion'=>"validate['required']"

	//,'value'=>array('')

	)

		,'captcha'=>array(
			'tipo'=>'captcha'
		)	
		
);

/*
form
 */
$FORM=array(

	'nombre'=>$PARAMS['conector']

	,'titulo'=>"Comentario"

	,'legend'=>$ITEM['consulta']

	,'ajax'=>'1'

	,'action'=>'ajax.php?mode=form&tab='.$PARAMS['this'].'&name='.$PARAMS['conector']

	//,'url'=>'index.php?modulo=app&tab=home'

	,'exito'=>'Gracias por su mensaje en breve nos estaremos comunicando con usted.'

	,'error'=>'Ocurrió un error en el proceso de envio'

	,'submit'=>' type="submit" value="Enviar Consulta" '

	,'pie'=>'los campos con * son obligatorios'

	/*CAMPOS-BEGIN*/

	,'tabla'=>'ventas_items'

	,'campos'=>$CAMPOS

	/*CAMPOS-END*/


	,'complete'=>"



	var json=JSON.decode(ee,true);

	new Element('div', {

	'class': 'mensaje mensaje_'+json.t,

	'html': json.m,

	'id': 'mensaje_'+json.n

	}).inject(\$(json.n+'_form_body'), 'before');

	\$0(json.n+'_form_body');


	setTimeout(\"\$('mensaje_\"+json.n+\"').destroy(); \$1('\"+json.n+\"_form_body'); \",7000);


	"

);



$FORM=pre_proceso_form($FORM);



/*
if post ini
 */
if($_SERVER['REQUEST_METHOD']=='POST' )
{


				if($_SESSION['captchaword']!=$_POST['captcha']){
				
					echo json_encode(array(
								't'=>'error'
								,'m'=>'Error de verificación'
								,'n'=>$FORM['nombre']
								));					
					exit();

				}	


//data_insert


	$_POST['id_cliente']=dato("id","clientes","where email='".$_POST['email']."'");

	/*
	if no hay cliente
	 */
	if($_POST['id_cliente']=='')
	{


		$Insert=insert(

			array(

				'nombre'=>mb_convert_case($_POST['nombre'],MB_CASE_TITLE,"UTF-8"),
				'apellidos'=>mb_convert_case($_POST['apellidos'],MB_CASE_TITLE,"UTF-8"),
				'telefono'=>$_POST['telefono'],
				'email'=>$_POST['email'],
				'genero'=>($_POST['genero']=='3')?'':$_POST['genero'],
				'ciudad'=>$_POST['ciudad'],
				'tipo_cliente'=>($_POST['genero']=='3')?'2':1,

			),

			"clientes"

			,0

		);

		$_POST['id_cliente']=$Insert['id'];

	}


	$cuenta=fila('nombre,email,logo,fecha_creacion','envios_cuentas',"where id='$id_cuenta'",0,array(

	'logo'=>array('archivo'=>array('log_imas','{fecha_creacion}','{logo}'))

	));

	$insertado=insert(array(

	'id_cliente'=>$_POST['id_cliente'],

	'id_item'=>$_POST['id_item'],

	'id_grupo'=>dato('id_grupo','productos_items','where id="'.$_POST['id_item'].'"'),

	'id_usuario'=>'2',

	'id_status'=>'7',

	'id_canal'=>'8',

	'id_cuenta_email'=>$id_cuenta,

	'fecha_creacion'=>"now()",

	'fecha_edicion'=>"now()",

	'visibilidad'=>'1',

	'consulta'=>"
nombre    : ".$_POST['nombre']. "
apellidos : ".$_POST['apellidos']. "
genero    : ".$_POST['genero']. "
telefono  : ".$_POST['telefono']. "
email     : ".$_POST['email']. "
ciudad    : ".$_POST['ciudad']. "
consulta  : ".$_POST['consulta']. "
URL 	  : ".$_SERVER['HTTP_REFERER']."
"

	 ),

	 $FORM['tabla'],

	 0

	 );



//body_mensaje



	$producto=fila(

	array('id','nombre','ficha','id_grupo'),

	//array('id','nombre','id_grupo'),

	"productos_items",

	"where id='".$_POST['id_item']."' order by id_grupo asc, id asc",

	0,

	array(

	'grupo'=>array('fila'=>array('nombre','productos_grupos','where id="{id_grupo}"')),

	'fotos'=>array('fotos'=>array(

	"id,file,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id asc limit 0,100"

	,"profot_fot"

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



	$producto['ficha']=fix_ficha($producto['ficha']);


	$html='';

	$html.="<table width='600px' cellpadding=0 cellspacing=0 border=0  >";

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

 


	$cliente=fila("email,nombre,apellidos,genero,tipo_cliente","clientes","where id='".$_POST['id_cliente']."'");



	$body_cliente=str_replace(

	array(

	'[ESTIMADO]',

	'[SR]',

	'[CLIENTE]',

	'[MODELO]',

	'[VENDEDOR]',

	'[FICHA]',

	//'[IMPRIMIR]',

	),

	array(

	($cliente['tipo_cliente']=='2')?'Estimados':(($cliente['genero']=='2')?'Estimada':'Estimado'),

	($cliente['tipo_cliente']=='2')?'Sres.':(($cliente['genero']=='2')?'Srta.':'Sr.'),

	$cliente['nombre']." ".$cliente['apellidos'],

	$producto['nombre'],

	dato("nombre","usuarios","where id='".$_POST['id_usuario']."'"),

	$html,

	//"<a href='".$vars['REMOTE']['url_publica']."index.php?modulo=items&tab=productos_imprimir&acc=file&id=".$_POST['id_item']."&id_cliente=".$_POST['id_cliente']."'>IMPRIMIR</a>"

	),

	dato("texto","speeches","where nombre='$speech_respuesta'")

	);

//email_cliente


	$insertado_mensaje=insert(array(

	'id_grupo'=>$insertado['id'],

	'tipo'=>'2',

	'nombre'=>'consulta desde la web',

	'texto'=>$_POST['consulta'],




	'id_cliente'=>$_POST['id_cliente'],

	'id_item'=>$_POST['id_item'],

	'id_usuario'=>'2',




	'fecha_creacion'=>"now()",

	'fecha_edicion'=>"now()",

	'visibilidad'=>'1',

	 ),

	 "ventas_mensajes",

	 0

	 );



 	if($temp){

	$insertado_mensaje=insert(array(

	'id_grupo'=>$insertado['id'],

	'tipo'=>'1',

	'nombre'=>'respuesta automática de la web',

	'texto'=>$body_cliente,

	'id_speech'=>dato("id","speeches","where nombre='".$speech_respuesta."'"),

	'fecha_creacion'=>"now()",

	'fecha_edicion'=>"now()",

	'visibilidad'=>'1',

	 ),

	 "ventas_mensajes",

	 0

	 );

	}
 

 

	$body_cliente=str_replace(

	array(

	'[IMPRIMIR]',

	),

	array(

	"<a href='".$vars['REMOTE']['url_publica']."index.php?modulo=items&tab=productos_imprimir&acc=file&id_mensaje=".$insertado_mensaje['id']."'>IMPRIMIR</a>",

	),

	$body_cliente

	);

	if($temp){

	$email_cliente=enviar_email(

	array(

	'emails'=>array($cliente['email'],'guillermolozan@gmail.com','wtavara@prodiserv.com')

	,'Subject'=>"Mensaje de ".$PARAMETROS_EMAIL['nombre_web']

	,'body'=>$body_cliente

	,'From'=>$cuenta['email']

	,'FromName'=>$cuenta['nombre']

	,'Logo'=>$cuenta['logo']

	)

	);

	}

 	if($temp){

	update(array(

	'texto'=>$body_cliente,

	),

	 "ventas_mensajes",

	 "where id='".$insertado_mensaje['id']."'",

	 0

	);

	}
	
	crear_email_debug(array(

	"EMAIL QUE SE LE ENVIA AL USUARIO"=>$email_cliente['debug'],

	//"EMAIL QUE SE LE ENVIA AL ADMINISTRADOR"=>$email_administrador['debug']

	),"../../debug/emails_".$FORM['nombre'].".html");


	//if( $email_cliente['todos'] and $email_administrador['todos'] ){

	if( $email_cliente['todos'] or 1){


		echo json_encode(array(

		't'=>'exito'

		,'m'=>$FORM['exito']

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

$FORMULARIO[$PARAMS['conector']]=$FORM;

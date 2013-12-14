<?php //á

require_once('class.phpmailer.php');

$dominio='http://olvacompras.com';
$color1="#FFD00A";
$color2='#FFF';
if(0){
	$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
		
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "mail.globalvsc.com"; // SMTP server
	$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
											   // 1 = errors and messages
											   // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	
	$mail->Username = "promociones001@globalvsc.com";
	$mail->Password = "ecoco2010";
	
	$mail->From = "noticias001@globalvsc.com";
	$mail->FromName = "Portafolio Económico"; 
	$mail->AddAddress("guillermolozan@gmail.com");
	//$mail->AddReplyTo("Email Address HERE", "Name HERE"); // Adds a "Reply-to" address. Un-comment this to use it.
	$mail->Subject = "prueba de asunto";
	$mail->Body = "Prueba de mensaje.";
	
	if ($mail->Send() == true) {
	echo "The message has been sent";
	}
	else {
	echo "<p>The email message has <strong>NOT</strong> been sent for some reason. Please try again later.</p>";
	echo "Mailer error: " . $mail->ErrorInfo;
	
	}
	exit();
	
}

chdir("../");
//include("lib/includes.php");
	include("lib/global.php");	
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util.php");	
	include("config/tablas.php");
//	include("lib/sesion.php");	
	include("lib/playmemory.php");
	
	require_once( "lib/ini_manager.php" );
	
chdir("base2");

if($_GET['verprueba']=='1'){

if($_GET['id']!=''){	
	$where=" id='".$_GET['id']."' ";
}elseif($_GET['id_filtro']!=''){
	$where=" id_filtro='".$_GET['id_filtro']."' ";
}

$item= select_fila(
        "id,fecha,nombre,email,empresa,telefono,enabled,fecha_creacion"
        ,"boletines"
        ,"where ".$where." and  visibilidad='1' order by id asc limit 0,100"
        ,0
        );
echo makeHtml($item); exit();
}
?>
<html>
<style>
.uno { float:left;width:300px; clear:left; overflow:hidden;}
.dos { float:left;width:100px; }
.tres { float:left;width:350px; }
.cuatro { float:left;width:300px; }
</style>
<?php

set_time_limit(0);

require_once('class.phpmailer.php');

//prin($_SERVER);

$PROVEEDOR=4;

switch($PROVEEDOR){
case "4":
	//limite: 250 por dia
	$bloque_envios=50; //MUY IMPORTANTE	
	$RELAYS=100;	
	$num_segundos=3600*24; //un dia	
	$limite_fallidos=100;
	//500 disponibles
break;
}

//echo 'http://'.$_SERVER['SERVER_NAME'].'/panel/base2/open.php?read=1&email='.$email['email']['address']);



//REACTUALIZA LAS CUENTAS

/*
$items=select("usuario,proveedor,clave,relays,enabled,time_0,","cuentas","where enabled='1' and	proveedor='$PROVEEDOR'");
prin($items);
*/

$return=update(
	array('relays'=>$RELAYS)
	,"cuentas"
	,"where 
		( TIME_TO_SEC(TIMEDIFF(now(),time_0))>$num_segundos )
			and 
		enabled='1'
			and
		proveedor='$PROVEEDOR'			
	"
	,0
	);
//prin($return);
//SELECT DE LA BASE

//prin($_GET);

if($_GET['enviarprueba']=='1'){


$fila = select_fila(
        "id,email as address,nombre"
        ,"boletines"
		,"where id='".$_GET['id']."' and enabled!='0' and visibilidad!='0' "
        ,0
		);

$base[] = array('email'=>$fila);
			
} else {
	
$faltan = contar(
        "lista_envio"
        ,"where enviado='0' and ( fallido is NULL or fallido<".$limite_fallidos." ) "
		);

echo "$faltan solicitudes faltan por enviar<br>";		

$base = select(
        "id,id_grupo,id_email,enviado,leido,linkeado,fallido"
        ,"lista_envio"
        ,"where enviado='0' and ( fallido is NULL or fallido<".$limite_fallidos." ) order by id asc limit 0,$bloque_envios"
        ,0
		,array(
		
        	'email'=>array('sub_select_fila'=>array(
		                			    'campos'=>"id,email as address,nombre
										"
                                	    ,'tabla' =>"boletines"
                                	    ,'donde' =>"where id='{id_email}' and enabled!='0' "
                                       	,'debug' =>0
                                      )
                                )
								
			)  
 			      
		);

}
		
//prin($SERVER);
//exit();	

//prin($base);
	
foreach($base as $item){


	$cuentas= select(
			"id,usuario,clave,relays,enabled,time_0,fecha_creacion"
			,"cuentas"
			,"where 1 and enabled='1' and proveedor='$PROVEEDOR' and relays>0 order by relays desc, id asc limit 0,1"
			,0
			);
		
	$cuenta=$cuentas[0];		

	if(!empty($cuenta)){
	
		// $item['email']['address']='guillermolozan@gmail.com';
		// echo $campain_datos['enviar_texto'].":<br>";
		if(!empty($item['email'])){		
			$Enviado=sendTo($item['email']['address'],$cuenta['usuario'],$cuenta['clave'],$archivos['ASUNTO'],makeHtml($item['email']),'Virtual Shopping Center',$campain_datos['replayto'],$PROVEEDOR);
			$RETURN = "<span class='uno'>".$item['email']['address']." -> </span>".( ($Enviado)?"<span class='dos' style='color:green;'>enviado</span>":"<span style='color:red;'  class='dos'>no enviado</span>" ) ;			
		} else {	
	//		prin($Enviado);
			$RETURN = "";
		}
		
			$RETURN .= "<span class='tres'>".$cuenta['usuario']." (".$cuenta['relays']." relays)</span><span class='cuatro'>".$campain_datos['nombre']."</span>";
		
	
	} else {
	
		$RETURN = "no hay cuenta disponible<br>";
		
	}
	
	$num_fallidos=0;
	$new_num_fallidos=0;
	
	if($Enviado){

		if($_GET['enviarprueba']!='1'){		
		
			//EN EL CASO DE EXITO
			update(
				array('enviado'=>1)
				,"lista_envio"
				,"where id='".$item['id']."'"
				);	

		}
		
		//EN EL CASO DE EXITO
		$data=array();
		if($cuenta['relays']==$RELAYS){
			$data['time_0']="now()";
		}
		$data['relays']=$cuenta['relays']-1;
		update(
			$data
			,"cuentas"
			,"where id='".$cuenta['id']."'"
			,0
		);
	
	} else {
	
		//EN EL CASO FALLO
		if($_GET['enviarprueba']!='1'){		

			$fila = select_fila(
					"id_email,fallido"
					,"lista_envio"
					,"where id='".$item['id']."'"
					,0
					);
	//		prin($fila);		
		
			//prin($new_num_fallidos);
		
			$new_num_fallidos=($fila['fallido']!='')?( $fila['fallido']+ 1 ):"1";
		
			if($fila['fallido']>$limite_fallidos){
			
				update(array(    
						'enabled'=>"0"
						)    
					  ,"boletines"
					  ,"where id='".$fila['id_email']."'"
					  ,0);
			
			} else {
			
				update(
					array('fallido'=>$new_num_fallidos)
					,"lista_envio"
					,"where id='".$item['id']."'"
					,0
					);
						
			}
		
		}
				
	}
	
	echo $RETURN. ( ($Enviado)?"":" ".$fila['fallido']." intentos fallidos" ) ."<br>";
	
}

function sendTo($email,$cuenta,$pass,$asunto,$html,$fromName,$replayTo,$IdProveedor){

	$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
	$mail->IsSMTP(); // telling the class to use SMTP
	try {
	
	  switch($IdProveedor){
	  case "4":
	  
			$mail->Host       = "mail.globalvsc.com"; // SMTP server
			//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
													   // 1 = errors and messages
													   // 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 465;    

	  break;
	  }
	  
	  $mail->CharSet = "UTF-8";		  
	  	  
	  $eemails=array();
	  $eemails=explode(",",$email);
	  foreach($eemails as $eemail){
	  	$mail->AddAddress($eemail);
	  }

	  $mail->Subject = $asunto;

	  
	  $mail->MsgHTML($html);
	  
	  $mail->Username   = $cuenta;  // GMAIL username
	  $mail->Password   = $pass;            // GMAIL password
	  
	  $mail->AddReplyTo("boletin@globalvsc.com", $fromName);
	  $mail->SetFrom($cuenta, $fromName);
	  //$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
	//$mail->AddAttachment('images/phpmailer.gif');      // attachment
	//$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
	$exito = $mail->Send();
	$intentos=1;
	while ((!$exito) && ($intentos++ < 5))
	{   sleep(2); // esperar 2 segundos
		$exito = $mail->Send();
	}
	return $exito;
		  
	} catch (phpmailerException $e) {
	  echo "errorA:" . $e->errorMessage(); //Pretty error messages from PHPMailer
	  echo "[$cuenta]";
	} catch (Exception $e) {
	  echo "errorB:" . $e->getMessage(); //Boring error messages from anything else!
	  echo "[$cuenta]";
	}
}
				
function makeHtml($data){

//	prin($data);

global $dominio;
global $SERVER;

$html='';
$html.='<body  topmargin="0" marginheight="0" >';

	$archivos= select(
			"id,nombre,fichero,fecha_creacion,url as link,dimensiones,texto"
			,"banners_boletin"
			,"where 1 and  visibilidad='1' order by id asc limit 0,100"
			,0
			,array(
					'get_archivo'=>array('get_archivo'=>array('carpeta'=>'banbol_imas','fecha'=>'{fecha_creacion}','file'=>'{fichero}'))
				  )
			);
			
	foreach($archivos as $archivo){
		$BANNERS[$archivo['nombre']]=$archivo;
	}		


/**********    QUERY    ************/

				
	$html.='<table border="0" cellpadding="0" cellspacing="0" width="689" align="center">';
	
	$html.='<br>Estimado '.ucwords(strtolower($data['nombre']))."<br><br>";
		
  if($BANNERS['logo']!=''){ $html.='<tr><td bgcolor="#A3A3A3" colspan="2" align="center">'.render_fichero($BANNERS['logo']).'</td></tr>'; }
   
  $html.='<tr><td colspan="2"><table border="0" cellpadding="0" cellspacing="0" width="100%" align="center"><tr>
    <td height="30" bgcolor="#E8E8E8"  align="left" style="font-size:12px;color:#000;padding-left:10px;">
	';
	$html.=fecha_formato("now()",2);
	//$html.='<a href="'.$dominio.'/recomiende_a_un_amigo.html"><font face="Tahoma, Helvetica, sans-serif" size="2" color="#000000" >Recomiende a un amigo</font></a>';
	$html.='</td><td bgcolor="#E8E8E8" align="right" style="padding-right:10px;">';
	$html.='<a style="font-size:12px;color:#000;" href="'.$dominio.'/contactenos"><img src="'.$dominio.'/web/templates/default/img/contacto.jpg" border="0"/></a>';
	//$html.='&nbsp;&nbsp;&nbsp;';
	//$html.='<a href="'.$dominio.'/suscribase.html"><font face="Tahoma, Helvetica, sans-serif" size="2" color="#000000" >Suscríbase</font></a>';
	$html.='</td>
  </tr></table></td></tr>';
  
  	  $html.='<tr><td width="689" height="5" bgcolor="#ffffff" colspan="2" ></td></tr>';	


	  $html.='<tr>
	  <td width="344" bgcolor="#ffffff" >'.render_fichero($BANNERS['banner001izq']).'</td>
	  <td width="345" bgcolor="#ffffff" >'.render_fichero($BANNERS['banner001der']).'</td>
	  </tr>
	  <tr>
	  <td width="335" bgcolor="'.$color1.'"><a href="'.$BANNERS['banner001izq']['link'].'" ><img src="'.$dominio.'/img_boletin_globalvsc/compra_ya01.jpg" border="0"/></a></td>
	  <td width="334" bgcolor="'.$color1.'"><a href="'.$BANNERS['banner001der']['link'].'"><img src="'.$dominio.'/img_boletin_globalvsc/compra_ya01.jpg" border="0"/></a></td>	  
	  </tr>';	

	  $html.='<tr><td width="689" height="15" bgcolor="#ffffff" colspan="2" ></td></tr>';	

  for($r=1;$r<=4;$r++){
	   	
	  $html.='<tr><td width="689" height="28" bgcolor="'.$color1.'" colspan="2" > <font size="2" face="Tahoma, Helvetica, sans-serif" color="#000">&nbsp;&nbsp;&nbsp;<b>'.$BANNERS['nombre_categoria0'.$r]['texto'].'</b></font></td></tr>';
	  $html.='<tr><td width="689" height="15" bgcolor="#ffffff" colspan="2" ></td></tr>';	
	  		  
	  $html.='<tr><td colspan="2"><table cellpadding="0" cellspacing="0" border="0">';	  
	  $html.='<tr>';
	  for($t=1;$t<=4;$t++){
		  $item=$BANNERS['producto_'.$r.'_00'.$t];
		  
	  	  $html.='<td width="13" height="179" bgcolor="#ffffff"></td>';
	  	  $html.='<td width="152" height="179">';
		  $html.='<table width="152" height="179" cellpadding="0" cellspacing="0" border="0">';
		  $html.='<tr><td colspan="3" height="186">'.render_fichero($item).'</td></tr>';
		  $html.='<tr>
		  <td height="25" bgcolor="'.$color2.'" align="right" width="30"><a title="Ver detalle del producto" href="'.$item['link'].'"><img src="'.$dominio.'/web/templates/default/img/particular/items/carrito.jpg" border="0" /></a></td>
		  <td bgcolor="#8BB42A" align="center"><a href="'.$item['link'].'" style="color:#000;font-family:Tahoma;font-size:12px;text-decoration:none;">'.$item['texto'].'</a></td>
		  <td height="25" bgcolor="'.$color2.'" align="left" width="30"><a title="Ver detalle del producto" href="'.$item['link'].'"><img src="'.$dominio.'/web/templates/default/img/particular/items/lupa.jpg" border="0" /></a></td>
		  </tr>';
		  $html.='</table>';
		  $html.='</td>';
	  }
	  $html.='</tr>';
	  $html.='</table></td></tr>';		
	  
      $rr=$r+1;		  

 	  $html.='<tr><td colspan="2" height="15" bgcolor="#ffffff" colspan="2" ></td></tr>';	

  	  if($BANNERS['banner00'.$rr]!=''){ $html.='<tr><td bgcolor="#A3A3A3" colspan="2" align="center">'.render_fichero($BANNERS['banner00'.$rr]).'</td></tr>'; }
 	  $html.='<tr><td colspan="2" height="15" bgcolor="'.$color1.'" colspan="2" ><a href="'.$BANNERS['banner00'.$rr]['link'].'"><img src="'.$dominio.'/img_boletin_globalvsc/compra_ya03.jpg" border="0"/></a></td></tr>';	
 	  $html.='<tr><td colspan="2" height="15" bgcolor="#ffffff" colspan="2" ></td></tr>';	
 
  }




		  






    
   //prin($LISTA['filas']);
  
    /*
  
	  foreach($LISTA as $ii=>$fila){	
		
		  if($ii<4){
			  $iii=$ii+2;
			  if($BANNERS['banner0'.$iii]!=''){
				  $html.='<tr><td height="120" bgcolor="#A3A3A3" colspan="2" align="center">'.render_fichero($BANNERS['banner0'.$iii]).'</td></tr>';
				  $html.='<tr><td height="5" colspan="2" bgcolor="#CCCCCC"></td></tr>';
			  }
		  }
	
	  }

	*/
	
	
  $html.='<tr><td colspan="2">';
  
		$html.='<table  border="0" align="center" cellpadding="0" cellspacing="0"><tr><td height="80">		    
			<table width="100%" height="auto" border="0" cellpadding="0" cellspacing="0"><tr><td  height="auto" style="font-family:Arial, Helvetica, sans-serif;font-size:11px">
			  <div align="center">
			  
Si no desea seguir recibiendo esta información haga clic <a href="'.$dominio.'/panel/base2/exclusiones.php?bloquear='.$data['address'].'">aqu&iacute;</a>.

			  <br/>
<br/></div>
			</td></tr></table>					
		 </td></tr></table>';  
  
  $html.='</td></tr>'; 
  
  
$html.='</table>';




	//cierra todo
	
//$html.='<img width="1" height="1" src="'.$SERVER['BASE'].'open.php?id='.$email['id'].'&id2='.$email['email']['id'].'" style="display:" />';
$html.='</body>
';

//echo "<textarea>".$html."</textarea>";

//$html=str_replace("calandriatravel.com","calandriapromociones.info",$html);
//$html="prueba";
//echo "body:".$html;

return $html;

}		

function render_fichero($item){

	$link=$item['link'];
	$filE=$item['get_archivo'];
	$titulo=$item['titulo'];
	$fa=explode(".",$filE);
	$ext = $fa[sizeof($fa)-1];
	$html='';
	list($ww,$hh)=explode("x",$item['dimensiones']);
	$linc="http://".str_replace("http://","",$link);
	$html.= ($link!='')?"<a href='$linc' target='_blank'>":'';
	$html.= '<img border="0" src="'.$filE.'" ';
	$html.= ($ww!='')?' width="'.$ww.'" height="'.$hh.'" ':'';
	//echo ($titulo!='')?' title="'.$titulo.'" alt="'.$titulo.'" ':'';
	$html.= ' />';
	$html.= ($link!='')?"</a>":'';
	return $html;
}

?>
</html>
<?php //á

chdir("../");
//include("lib/includes.php");
	include("lib/global.php");	
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util.php");	
	include("config/tablas.php");
	include("lib/sesion.php");	
	include("lib/playmemory.php");	
	require_once( "lib/ini_manager.php" );


	
chdir("../");

$emails = select(
        "id,email"
        ,"boletines"
        ,"where enabled='1' and visibilidad!='0'"
        ,0
	);
	
//	prin($emails);

	//echo "<div style='position:absolute;right:10px;width:auto;'><b><a href='hilo_de_envio.php'>ENVIAR EL PRIMER BLOQUE</a></b></div>";
	$id_solicitud=$datos_solicitud['id'];
	foreach($emails as $emails_){
	//echo "<div>".$emails_['email']."</div>";
	insert(
		array(	'visibilidad'=>'1',
				'fecha_creacion'=>'now()',
				'fecha_edicion'=>'now()',				
				'visibilidad'=>'1',
				'id_email'=>$emails_['id'],
				//'email'=>$email,
				'id_grupo'=>'0',
				'enviado'=>'0',
				'leido'=>'0',
				'linkeado'=>'0'
			  )
    	  ,"lista_envio"
    	  ,0
		);	
	}
					
		
?>
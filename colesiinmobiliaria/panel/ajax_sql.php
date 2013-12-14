<?php

@session_start(); // Iniciar variables de sesión

	include("lib/global.php");	
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util.php");
//	include("lib/stripattributes.php");
	include("config/tablas.php");	

//	prin($_GET);
	
	$datos_tabla = procesar_objeto_tabla($objeto_tabla[$_REQUEST['v_o']]);	
	$tbl		=	$datos_tabla['tabla'];	
	$tbcampos	=	$datos_tabla['form'];
	$id			=	$datos_tabla['id'];
	$occ		=	$datos_tabla['oncreate'];
	$oce		=	$datos_tabla['onedit'];
	$id2	    =   trim(str_replace(array($id,"=","'","\"","where"),array("","","","",""),$_REQUEST['v_d']));
	
	switch($_GET['f']){
	case "get_fila":
	foreach($objeto_tabla[$_REQUEST['v_o']]['campos'] as $tbcampA){ 
	if($tbcampA['tipo']=='img'){
	$get_imagenes[$tbcampA['campo'].'_get_archivo']=array('get_archivo'=>array(
												'carpeta'=>$tbcampA['carpeta']
												,'fecha'=>'{'.$datos_tabla['fcr'].'}'
												,'file'=>'{'.$tbcampA['campo'].'}'
												,'tamano'=>$tbcampA['tamano_listado']
													)
												);	
	}
	$ttbb[]=$tbcampA['campo'];
	}
	$item= select_fila(
        implode(",",$ttbb)
        ,$tbl
        ,str_replace("\'","'",$_REQUEST['v_d'])
        ,$_GET['debug']
		,$get_imagenes
        );

	echo ($SERVER['browser']=='IE7')?str_replace("null","\"\"",json_encode($item)):json_encode($item);
			
	break;
	case "remoto_get":
	
		$cc=array();
		$url_remoto=$_GET['url_remoto'];
		$_GET['f']=$_GET['f_2'];
		unset($_GET['f_2']);
		unset($_GET['url_remoto']);
		foreach($_GET as $aa=>$bb){
			$cc[]="$aa=".nl2br($bb);
		}

//		echo $url_remoto."?".implode("&",$cc);
		echo file_get_contents($url_remoto."?".implode("&",$cc));
		
	break;
	case "insert_get":

		foreach($_GET as $c=>$v){
			if(substr($c,0,5)=='post_'){
				switch($tipo_){
					case "yot": $array[substr($c,5)]=get_youtube_code($v); break;
					default: 	$array[substr($c,5)]=$v; break;
				}
			}
		}
		

		
		$ret=insert($array,$tbl,$_GET['debug']);
		
		if(!(strpos($ret['error'],"Duplicate")===false)){

			$rr=explode("for key",str_replace("Duplicate entry","",$ret['error']));
			$ret['error']="ya existe ".trim($rr[0]);			
			 
		}
				
		echo json_encode($ret);

		switch($_REQUEST['v_o']){
		case "FEEDBACK":
			include("feedback.php");
		break;
		}
				
	break;	
	case "insert":
	
		$imagenes=array();
		$ficheros=array();
		foreach($_POST as $c=>$v){
			if($c!='v_t' and $c!='v_o'){
				if(substr($c,0,7)=='tempar_'){
					if(trim($v)!=''){
						list($tabla,$campo,$valor)=explode("|",$v);
						$parents[]=array('t'=>$tabla,'c'=>$campo,'v'=>$valor);
					}
				} elseif(substr($c,0,10)=='stoupload_'){
					if(trim($v)!=''){
						$ficheros[]=array($c,$v,$tbl,$_POST['v_o']);
					}
				} elseif(substr($c,0,7)=='upload_'){
					if(trim($v)!=''){
						$imagenes[]=array($c,$v,$tbl,$_POST['v_o']);
					}
				} else {
					foreach($tbcampos as $cam){
						if( $cam['campo']==$c ){ $tipo_=$cam['tipo']; continue; }
					}
					switch($tipo_){
						case "yot": $array[$c]=get_youtube_code($v); break;
						default:
							$vv=removeemptytags($v);
							$array[$c]=($vv=='')?'NULL':$vv;
						break;
					}
				}
			}
		}
		$ret=insert($array,$tbl,$_GET['debug']);
		if($ret['success']){
			$id=$ret['id'];
			foreach($imagenes as $i=>$imas){
	//			echo $imas[0].",".$imas[1].",".$imas[2].",".$imas[3].",".$id;		
				grabar_imagen($imas[0],$imas[1],$imas[2],$imas[3],$id);
			}
			foreach($ficheros as $i=>$imas){
	//			echo $imas[0].",".$imas[1].",".$imas[2].",".$imas[3].",".$id;		
				grabar_fichero($imas[0],$imas[1],$imas[2],$imas[3],$id);
			}			
			foreach($parents as $i=>$pare){
	//			echo $imas[0].",".$imas[1].",".$imas[2].",".$imas[3].",".$id;		
				update(array($pare['c']=>$id),$pare['t'],"where ".$pare['c']."='".$pare['v']."'");
			}			
		}
		
		if(!(strpos($ret['error'],"Duplicate")===false)){

			$rr=explode("for key",str_replace("Duplicate entry","",$ret['error']));
			$ret['error']="ya existe ".trim($rr[0]);			
			 
		}
	
		if($occ!=''){ if(file_exists($occ)){ $ret['oncreate']="1"; } }
				
		echo json_encode($ret);
		
	break;
	case "delete":

		eliminar_imagenes($datos_tabla,$_POST['v_d']);	
			
		$ret=delete($tbl,str_replace("\\'","'",$_POST['v_d']),$_GET['debug']);	
		
		echo json_encode($ret);
	
	break;
	
	case "update":
		
		$imagenes=array();	
		$ficheros=array();			
			foreach($_POST as $c=>$v){
				if(substr($c,0,10)=='stoupload_'){
					if(trim($v)!=''){
						$ficheros[]=array($c,$v,$tbl,$_POST['v_o']);
					}	
				} elseif(substr($c,0,7)=='upload_'){
					if(trim($v)!=''){
						$imagenes[]=array($c,$v,$tbl,$_POST['v_o']);
					}	
				} else {			
					if($c!='v_t' and $c!='v_d' and $c!='v_o'){
							$vv=removeemptytags($v);
							$array[$c]=($vv=='')?'NULL':$vv;						
					}
				}
			}	
		//echo "<pre>"; print_r($imagenes); echo "</pre>";
		$ret=update($array,$tbl,str_replace("\\'","'",$_POST['v_d']),$_GET['debug']);
		foreach($imagenes as $i=>$imas){
			//echo $imas[0].",".$imas[1].",".$imas[2].",".$imas[3].",".$id2;
			eliminar_imagenes($datos_tabla,$_POST['v_d']);
			if($imas[1]=='eliminar'){
				update(array(str_replace("upload_","",$imas[0])=>'NULL'),$tbl,str_replace("\\'","'",$_POST['v_d']),0);
			} else {
				grabar_imagen($imas[0],$imas[1],$imas[2],$imas[3],str_replace("\\","",$id2));
				//prin($imas[0].",".$imas[1].",".$imas[2].",".$imas[3].",".str_replace("\\","",$id2));
			}
		}
		
		foreach($ficheros as $i=>$imas){
			//echo $imas[0].",".$imas[1].",".$imas[2].",".$imas[3].",".$id2;
			//eliminar_ficheros($datos_tabla,$_POST['v_d']);
			if($imas[1]=='eliminar'){
				update(array(str_replace("stoupload_","",$imas[0])=>'NULL'),$tbl,str_replace("\\'","'",$_POST['v_d']),0);
			} else {
				grabar_fichero($imas[0],$imas[1],$imas[2],$imas[3],str_replace("\\","",$id2));
				//prin($imas[0].",".$imas[1].",".$imas[2].",".$imas[3].",".str_replace("\\","",$id2));
			}
		}		
		
		if(!(strpos($ret['error'],"Duplicate")===false)){

			$rr=explode("for key",str_replace("Duplicate entry","",$ret['error']));
			$ret['error']="ya existe ".trim($rr[0]);			
			 
		}

		if($oce!=''){ if(file_exists($oce)){ $ret['onedit']="1"; file_get_contents($SERVER['BASE'].$oce); } }
				
		echo json_encode($ret);		
							
	break;
	case "login":
	
		$id					=	$datos_tabla['id'];
		$sesion_password	=	$datos_tabla['sesion_password'];
		$sesion_login		=	$datos_tabla['sesion_login'];
		$sesion_vis			=	($datos_tabla['vis']=='')?"":" and ".$datos_tabla['vis']."='1' ";
	
		$return = select_dato(
			$id,
			$tbl,
			"where $sesion_login='".$_POST[$sesion_login]."' and $sesion_password='".$_POST[$sesion_password]."' $sesion_vis "
			,0
			); 	
			
		//echo $return;
		
		
		if($return != false){	
			
			$_SESSION['usuario_id']=$return;
			
			setcookie("c_usuario", $_POST[$sesion_login], time() + (14*24*60*60), "/");
			setcookie("c_password", $_POST[$sesion_password], time() + (14*24*60*60), "/");			
			echo $return;
			
		}
		
								
	break;	
	case "resample":
				
		foreach($datos_tabla['imagenes'] as $imagen){	
		
			$tamas=explode(",",$datos_tabla[$imagen]['tamanos']);
					
			$num_tamas=sizeof($tamas);		
			$item=select_fila($datos_tabla['id'].",".$datos_tabla['fcr'].",".$datos_tabla['fed'].",".$imagen,$datos_tabla['tabla'],"where ".$datos_tabla['id']."='".$_GET['id']."'",0);	
	
			$Original=str_replace('//','/',str_replace('_1.','.',get_imagen($datos_tabla[$imagen]['carpeta'],$item[$datos_tabla['fcr']],$item[$imagen],'1')));

			$Ima['original']=str_replace("//","/",$ftp_files_root.str_replace("$httpfiles","",str_replace('_1.','.',get_imagen($datos_tabla[$imagen]['carpeta'],$item[$datos_tabla['fcr']],$item[$imagen],1))));
			
			for($i=1;$i<=$num_tamas+1;$i++){
			$Ima[$i]=str_replace("//","/",$ftp_files_root.str_replace("$httpfiles","",get_imagen($datos_tabla[$imagen]['carpeta'],$item[$datos_tabla['fcr']],$item[$imagen],$i)));
			}
	
			grabar_imagen("upload_".$imagen,$Original,$datos_tabla['tabla'],$_GET['v_o'],str_replace("\\","",$item[$datos_tabla['id']]));
			$Imas[]=$Ima;
			eliminar_imagenes_from_array($Imas);
			unset($Ima);		
			unset($Imas);		
								
		}
	break;	
	}

?>
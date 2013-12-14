<?php //á
/* */
//////// MENU ///////


$tablas_creadas=array();
$sql = "show tables";
$result=mysql_query($sql,$link);
$total=mysql_num_rows($result);
if($total>0){
	while ($row = mysql_fetch_row($result)){
			$tablas_creadas[] = $row[0];
	}
}

if($mostrar_menu){

	$menus=array();
	$menus_1=array();
	$menus_2=array();
	
	foreach($objeto_tabla as $item){
		if(isset($item['alias_grupo']) and ($item['alias_grupo']!='') ){	$ALIAS_GRUPO[$item['grupo']]=$item['alias_grupo'];	}	
	}

	//prin($objeto_tabla);
	
	foreach($objeto_tabla as $item){
	
		$mmm = '';
		if($item['seccion']){
			$mmm.='<li class="seccion"><b>'.$item['seccion'].'</b></li>';
		}
		if( $Open=='1' and $item['menu_label']=='' ){
		$BGDD="#F8F895";
		$ExtraStyle="font-weight:normal;text-transform:uppercase;letter-spacing:0px;font-size:8px;";
		$ExtraStyle="";	
		}else{
		$BGDD=$BGCOLOR_DESARROLLO;
		$ExtraStyle="";
		}
		
		if($item['menu_label']==''){	$item['menu_label']=$item['archivo'];	}
		
		$classhijo=" hijomenu";
		$classhijosel=" hijomenusel";
		if( $item['menu']=='1' or ($Open=='1' and $item['menu_label']!='' ) or ($script_name=="maquina.php") ){
	
			if(
				(
				file_exists($DIR_CUSTOM.$item['archivo'].".php") 
				and in_array($item['tabla'],$tablas_creadas) 
				and (!($item['disabled']=='1')) 
				)
				or
				(
				!in_array($item['tabla'],$tablas_creadas) and $Open
				)
				
				){
	
				
				$bbgg = ( !( ($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php") ) and ($item['menu']!='1') )?1:0;
			
							
				if($bbgg){ $BBB[]=$item['me']; }
				$mmm .="<li class='". ((($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php"))?"selected $classhijosel":" $classhijo ") ." ' style='" . ( ($bbgg)?"background-color:".$BGDD.";":(!in_array($item['tabla'],$tablas_creadas)?"background-color:#37F73B;":"")) . "'>";
				$mmm .="<a style='". ( ($bbgg)?"background-image:none;":"") . ( ( !( ($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php") ) and ($item['menu']!='1') )?"color:;":'') . $ExtraStyle. "' href='".$DIR_CUSTOM.$item['archivo'].".php' >".$item['menu_label'].$item['archivo_padre'];
				$nume=contar($item['tabla'],"");
				$mmm.=" <span class='numero'>$nume</span>";
				$mmm.="</a>";
				
				if($Open=='1'){
					$mmm.="<a class='derech' href='maquina.php?me=".$item['me']."#blo_objetos' title='Editar Propiedades'>P</a>";
					$mmm.="<a class='derech2' href='maquina.php?me=".$item['me']."#edicion_indices_sub' title='Editar Campos'>C";
					$mmm.="</a>";
				}
	
				$mmm.="</li>";
				
				if($item['app']!=''){
				$item['app']=str_replace("'","\"",$item['app']);				
				$aps=explode("<a",$item['app']);
				foreach($aps as $ap){ if(trim($ap)!=''){
				$mmm.="<li class='".(($this_app_menu==$ap)?'hijomenusel selected':'hijomenu')."'>";
				$mmm.="<a".$ap;			
				$mmm.="</li>";	
				} }	}
				
				if(  !( ($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php") ) and ($item['menu']!='1') ){						
				$menus_2[]=array('h'=>$mmm,'g'=>$item['grupo']);
				} else {
				$menus_1[]=array('h'=>$mmm,'g'=>$item['grupo']);
				}
				
				$menus[($item['grupo'])?$item['grupo']:'general'][]=$mmm;
				if(!in_array($item['grupo'],$grupi)){
					$grupi[]=$item['grupo'];
	
						if(trim($item['grupo'])!='' ){
						$GrupLi[$item['grupo']]="<li id='idg_".$item['grupo']."' class='padre' ><a ". (($item['grupo']=='sistema')?"class='admincc'":'') ." onclick='javascript:opcl(\"opcl_".$item['grupo']."\");return false;' >". ( ($ALIAS_GRUPO[$item['grupo']])?$ALIAS_GRUPO[$item['grupo']]:$item['grupo'] ) ."</a></li>";
						}
				}		
			}		
		}
	}
	
/*
	$GGR['0'][]=array('productos'	,$GrupLi['productos']);	
	$GGR['0'][]=array('ventas'	,$GrupLi['ventas']);
	
	$GGR['2'][]=array('marketing'	,$GrupLi['marketing']);
	$GGR['2'][]=array('contenidos'	,$GrupLi['contenidos']);
	$GGR['2'][]=array('publicidad'	,$GrupLi['publicidad']);
	
	$GGR['3'][]=array('formularios'	,$GrupLi['formularios']);
	$GGR['3'][]=array('boletin'	,$GrupLi['boletin']);

	$GGR['4'][]=array('sistema'		,$GrupLi['sistema']);
	
	foreach($GGR as $GGR2){ foreach($GGR2 as $GGR3){ $GgrupoS[]=$GGR3[0]; } }
		
	$GGR['1']=array();
	
	foreach($GrupLi as $iii=>$ggg){
		if(!in_array($iii,$GgrupoS)){ $GGR['1'][]=array($iii,$GrupLi[$iii]); }
	}
	
	unset($GgrupoS);
	unset($GrupLi);

	foreach($GGR as $GGR2){ foreach($GGR2 as $GGR3){ $GrupLi[$GGR3['0']]=$GGR3['1']; } } 
*/

	$htmlmenu .= "<ul class='ul_menus". ( ($SERVER['ARCHIVO']=="maquina.php" and $_GET['accion']=='' )?' ul_menus_fixed':'' ) ."'>";
	if(sizeof($GrupLi)>0){
		foreach($GrupLi as $ttm=>$gl){
			$htmlmenu .= $gl;
			if(sizeof($menus[$ttm])>0){
				$htmlmenu .= "<ul id='opcl_".$ttm."' class='opcl ".(($ttm==$this_grupo or $SERVER['ARCHIVO']=="maquina.php")?'open':'')."' >";
				foreach($menus[$ttm] as $menn){
					$htmlmenu .=$menn;
				}
				$htmlmenu .= "</ul>";
			}
		}
	} else {
		foreach($menus['general'] as $menn){
			$htmlmenu .=$menn;
		}
	}
	$htmlmenu .='</ul>';
	
	echo str_replace("<ul class='ul_menus'></ul>","<ul class='ul_menus ul_menus_empty'></ul>",$htmlmenu);

}

?>
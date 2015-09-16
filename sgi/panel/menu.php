<?php //á
/* */
//////// MENU ///////

$tablas_creadas=array();
$sql = "show tables";
$result=mysql_query($sql,$link);
$total=mysql_num_rows($result);
if($total>0)
{
	while ($row = mysql_fetch_row($result))
	{
		$tablas_creadas[] = $row[0];
	}
}

// prin($SERVER);

if($mostrar_menu)
{

	$menus=array();
	$menus_1=array();
	$menus_2=array();


	foreach($objeto_tabla as $item)
	{
		if(isset($item['alias_grupo']) and ($item['alias_grupo']!='') ){	$ALIAS_GRUPO[$item['grupo']]=$item['alias_grupo'];	}
	}


	//prin(array_keys($objeto_tabla));
	/*
	foreach($objeto_tabla as $t_o=>$o_t){
	if($o_t['disabled']!='1'){
		$oottoo[]=$t_o;
	}
	}
	prin($oottoo);
	*/
	foreach($objeto_tabla as $meit=>$item)
	{
		// prin($item);
		$mmm = '';

		if($item['menu_label']=='')
		{	
			$item['menu_label']=$item['archivo'];
		}

		if( $item['menu']=='1' or ($Open=='1' and $item['menu_label']!='' ) or ($script_name=="maquina.php") )
		{

			if(
				(
				// file_exists($DIR_CUSTOM.$item['archivo'].".php") and 
				in_array($item['tabla'],$tablas_creadas)
				and (!($item['disabled']=='1'))
				)
				or
				(
				!in_array($item['tabla'],$tablas_creadas) and $Open
				)

				)
				{

				$bbgg = ( !( ($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php") ) and ($item['menu']!='1') )?1:0;


				if($bbgg){ $BBB[]=$item['me']; }

				if($item['seccion'])
				{

					$mmm.='<li class="seccion"><b>'.$item['seccion'].'</b></li>';

				}
				
				// prin(  $item['archivo'].".php" .'=='.$item['archivo']);

				$bitselected=( enhay( $script_name ,  $item['archivo'].".php" ) or ($script_name==$item['archivo_hijo'].".php") );

				//$otto[]=$meit;
				$mmm .="<li". ( ($bitselected) ? ' class="selected"': '' ) .">";

					$mmm .="<a href='".$DIR_CUSTOM.$item['archivo'].".php' >";

						$mmm .=$item['menu_label'].$item['archivo_padre'];

						$nume=contar($item['tabla'],"where 1 ".get_extra_filtro(array('user'=>$item['user'],'web'=>($filtrar_web)?$item['web']:0,'page'=>($filtrar_page)?$item['page']:0)));

						$mmm.="<span class='number'>$nume</span>";

					$mmm.="</a>";

					//DEVEL
					if($Open=='1')
					{

						$mmm.="<a class='derech' href='maquina.php?me=".$item['me']."#blo_objetos' title='Editar Propiedades'>P</a>";

						$mmm.="<a class='derech2' href='maquina.php?me=".$item['me']."#edicion_indices_sub' title='Editar Campos'>C</a>";

					}

				$mmm.="</li>";

			}

		}

		if( $script_name!="login.php" )
		{
			//prin($item['app']);
			if($item['app']!=''
			//temporal
			//and trim($mmm)!=''
			){

				$item['app']=str_replace("'","\"",$item['app']);

				$aps=explode("<a",$item['app']);
				
				foreach($aps as $ap)
				{ 
					if(trim($ap)!='')
					{

						$bitselected=(enhay($ap,$script_name)); 	
						// prin("$script_name == $ap");
						$mmm='';
						$mmm.="<li".(($bitselected)?" class='selected'":'').">";
						$mmm.="<a".$ap;
						$mmm.="</li>";

						$menus[($item['grupo'])?$item['grupo']:'general'][]=[$mmm,$bitselected];

					} 
				}	
			}

		}

		// if($mmm!=''){ echo "<textarea>".$mmm."</textarea>"; }

		if(  !( ($script_name==$item['archivo'].".php") or ($script_name==$item['archivo_hijo'].".php") ) and ($item['menu']!='1')  ){

			$menus_2[]=array('h'=>$mmm,'g'=>$item['grupo']);	

		} else {
		
			$menus_1[]=array('h'=>$mmm,'g'=>$item['grupo']);

		}

		if($item['app']=='')
		{
			$menus[($item['grupo'])?$item['grupo']:'general'][]=[$mmm,$bitselected];
		}

		if($mmm!='')
		{
			if(!in_array($item['grupo'],$grupi))
			{
				$grupi[]=$item['grupo'];

				if(trim($item['grupo'])!='')
				{
				
					$paddre=($ALIAS_GRUPO[$item['grupo']])?$ALIAS_GRUPO[$item['grupo']]:$item['grupo'];

					$GrupLi[$item['grupo']]['open']="<li id='group_".$item['grupo']."' class='group {selected}". (($item['grupo']=='sistema')?" admincc":'') ."' >".
					
					"<a class='padre'>".
					
					"<i class='zzz ic_". str_replace(
											array(" ",'á','é','í','ó',''), 
											array("_",'a','e','i','o','u'), 
											strtolower($paddre)
											) . "'></i>".

					$paddre .

					"</a>";

					$GrupLi[$item['grupo']]['close']="</li>";

				}
			}
		}
	}

	// prin($menus);

	//prin($otto);


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

	$htmlmenu .= "<ul id='menu_main' class='ul_menus". ( ($SERVER['ARCHIVO']=="maquina.php" and $_GET['accion']=='' )?' ul_menus_fixed':'' ) ."'>";
	if(sizeof($GrupLi)>0)
	{

		$ttmi=-1;
		foreach($GrupLi as $ttm=>$gl)
		{

			$ttmi++;

			$htmlmenu1='';

			$htmlmenu0 = str_replace('{selected}','',$gl['open']);

			if(sizeof($menus[$ttm])>0)
			{
				
				if($ttm==$this_grupo or $SERVER['ARCHIVO']=="maquina.php"){ $OpEn=$ttmi; }

				$htmlmenu1 .= "<div class='mcontent'><ul>";
				foreach($menus[$ttm] as $menn)
				{
					$htmlmenu1 .=$menn[0]; if( $menn[1] or $SERVER['ARCHIVO_REAL']=='maquina.php' ){ $htmlmenu0 = str_replace('{selected}','selected',$gl['open']); }
				}
				$htmlmenu1 .= "</ul></div>";
			}

			$htmlmenu2 = $gl['close'];

			$htmlmenu.=$htmlmenu0.$htmlmenu1.$htmlmenu2;

		}

	} else {

		foreach($menus['general'] as $menn)
		{
			$htmlmenu .=$menn;
		}

	}

	$htmlmenu .='</ul>';

	if(str_replace('Array','',$htmlmenu)=="<ul id='menu_main' class='ul_menus'></ul>"){

		echo "<ul id='menu_main' class='ul_menus ul_menus_empty' id='ul_menus_empty'></ul>";

	} else {

		echo $htmlmenu;

		/*
		if($SERVER['ARCHIVO']!='maquina.php'){
		echo '<script>';
		?>if(!Browser.Engine.webkit || 1){
			window.addEvent('domready', function(){ 
				new Fx.Accordion('.ul_menus .padre', '.ul_menus .opcl',{initialDisplayFx :false,opacity:false,display:<?php echo ($OpEn)?$OpEn:"''"; ?>});
			});

		}<?php
		echo '</script>';
		}
		*/
	}

}



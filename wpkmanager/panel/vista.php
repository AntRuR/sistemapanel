<?php

include("objeto.php");

$galleta='galleta';
$sesionhid='sesionhid3';

// echo ($IS_MOBILE)?"es movil":"no es movil";


//forNACYN
if(isset($_GET[$galleta])){

	if($_SESSION[$sesionhid]!='unlocked'){

		echo '<div class="ingreseclave"><form method="post">
		CLAVE: <input name="clavesecreta">
		<input type="submit" value="ENVIAR">
		</form></div>';

	} else {

		redir(str_replace("?".$galleta,"",$SERVER['RUTA']));

	}

	if($_POST['clavesecreta']=='chaluja'){

		$_SESSION[$sesionhid]='unlocked';
		redir(str_replace("?".$galleta,"",$SERVER['RUTA']));
		// prin($SERVER);

	}

}


// if($_SESSION[$sesionhid]=='unlocked'){

// 	prin('unlocked');
// 	prin($_SESSION);

// }



parse_str($_GET['filter'],$oouutt);

// prin($SERVER);
// prin($oouutt);

$filtros123=getStringFilters($oouutt,$objeto_tabla,$this_me);

// prin($filtros123);

if($_GET['ran']!=1){ 

	echo '<div style="display:none;">';
	include_once($objeto_tabla[$this_me]['onload_include']);
	echo '</div>';
	
}

include("setup.php");

if($_GET['ran']==0){ unset($_GET['ran']); }


//prin(sizeof($objeto_tabla[$this_me]['campos']));

// prin($SERVER);
// prin($_SERVER);

// prin($_GET);
// prin($objeto_tabla[$this_me]);

$DeRecha=array(
''=>'linea_derecha_inicio',
'1'=>'linea_derecha_inicio',
'2'=>'linea_derecha_inicio',
);




$joinss=array();




if(1){

	// ! HACKEA PARAMETROS con variable CONF2
	if($_GET['conf2']){
		// var_dump($datos_tabla);
		$_GET['conf']=urldecode($_GET['conf2']);
		$confes=explode("&",$_GET['conf']);
		// prin($confes);
		foreach($confes as $confe){
			list($uno,$dos)=explode("=",$confe);
			if(enhay($uno,"|")){
				
				//var_dump($uno);
				list($tres,$cuatro)=explode("|",$uno);
				$objeto_tabla[$_REQUEST['OB']]['campos'][$tres][$cuatro]=$dos;

			} else {

				$objeto_tabla[$_REQUEST['OB']][$uno]=$dos;

			}
		} 
		
		unset($confes); unset($confe); unset($uno); unset($dos); unset($tres); unset($cuatro);

		if(isset($_GET['conf2'])) unset($_GET['conf2']);

		$datos_tabla = procesar_objeto_tabla($objeto_tabla[$_REQUEST['OB']]);

	}

// prin($datos_tabla);

	


	if($datos_tabla['set_fila_fijo']){	

		$_COOKIE[$tb.'_colap']=$datos_tabla['set_fila_fijo']; 
		$ocultar_opciones_filas=1;	

	}

	// $_COOKIE[$tb.'_colap']=(isset($_COOKIE[$tb.'_colap']))?$_COOKIE[$tb.'_colap']:(($datos_tabla['por_linea']>1)?1:(($tblistadosize>6)?4:1));
	
	$_COOKIE[$tb.'_colap']=(isset($_COOKIE[$tb.'_colap']))?$_COOKIE[$tb.'_colap']:(($tblistadosize>6)?4:1);

	$ocultaresquina=($tblistadosize<8)?1:0;


	
	if(!isset($_GET['ran']) or $_GET['ran']==''){


		//EVAL
		if(isset($datos_tabla['script'])){
			
			eval($datos_tabla['script']);

		}



		echo '<input type="hidden" id="resaltar"  />';

	    if($_GET['block']!='form'){

			echo '<div class="div_bloque_cuerpo" '. ( ($datos_tabla['width_listado'])?"style=\"width:".$datos_tabla['width_listado'].";\"":"" ) .' >';

				echo '<div class="refreshing2" id="cargando_form" style="display:none;">cargando</div>';
				//echo "<div>ocho</div>";
				//echo show_parent($_GET,$objeto_tabla,$datos_tabla['me']);

				//////////////////////////////////////////////////////////////////////////////////////////////////////////
				//		formulario inicio 		//////////////////////////////////////////////////////////////////////////
				//////////////////////////////////////////////////////////////////////////////////////////////////////////

				if($Open){ $datos_tabla['crear']='1'; }
				//prin($SERVER);
				
				include("titulo_bar.php");


		} else {


			$_COOKIE[$tb.'_colap']=($_GET['tipo']=='listado')?4:0;


		}

	?>
	<div id="bloque_content_crear" class="bloque_content_crear">
	<?php 
		if( ($Proceso=='login') or ($_GET['block']=='form') or ($datos_tabla['crear_quick']=='1') ){ 
			include("formulario.php"); 
		?>
		<script>window.addEvent('load',function(){ pre_crear(); });</script>
	<?php 
		} 
	?>
	</div>

	<div id="bloque_content_stat" class="bloque_content_stat"></div>
	<div id="bloque_content_mass" class="bloque_content_mass"></div>
	<div id="bloque_content_repos" class="bloque_content_repos"></div>

	<?php
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	//		formulario fin 		//////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////





    echo '<div class="inner_listado"  id="inner" style=" width:100%; ';

	if($_GET['block']=='form' and $_GET['tipo']!='listado'){ 
		echo 'width:50%; float:left;'; 
	}

	echo '" >';


		///// ZONA AJAX INICIO  ////

		//////////////////////////////////////////////////////////////////////////////////////////////////////////
		//		listado inicio	//////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////

		}





		$listable_after  = [];
		$listable_end    = [];

		$tblistado_after = [];
		$tblistado_end   = [];


		// !
		// ! GET LOS CAMPOS PARA EL LISTADO
		// !
		foreach($tblistado as $zapati)
			if($zapati['listable']=='1') 
				$tillas[]=$zapati['campo'];
		


		$first_listable=$tillas[0];
		

		$last_listable=end($tillas);



		/*
		######## #### ##       ######## ######## ########   ######
		##        ##  ##          ##    ##       ##     ## ##    ##
		##        ##  ##          ##    ##       ##     ## ##
		######    ##  ##          ##    ######   ########   ######
		##        ##  ##          ##    ##       ##   ##         ##
		##        ##  ##          ##    ##       ##    ##  ##    ##
		##       #### ########    ##    ######## ##     ##  ######
		*/

		include("vista_filters.php");

		foreach($tblistado as $df){
							
			$tblistado2[]=$df;
			if(isset($tblistatado_after[$df['campo']])){
				// prin($tblistatado_after[$df['campo']]);
				foreach($tblistatado_after[$df['campo']] as $ffdd){
					$tblistado2[]=$ffdd[1];
				}
				
			}

		} unset($df);


		$tblistado=$tblistado2;


		$tblistado=array_merge($tblistado,$tblistado_end);







		/*prin($tblistadosize);	*/

	    if($tblistadosize!='0'){


			if($_GET['i']!=''){

				//$busqueda_query = " ".$_GET['filter']." ";
				$busqueda_query = " and ".$tbl.".id = '".$_GET['i']."' ";
				$linkPagina = "pagina_file";
				$linkRecPagina = "recargar_file";
				$vvvalos = $_GET['i'];
				$_COOKIE[$tb.'_colap']='2';
				$datos_tabla['order_by']='';

			}elseif($_GET['filter']!=''){

				//$busqueda_query = " ".$_GET['filter']." ";			
				$query_filter_parts=query_filter($FiL);
				foreach($query_filter_parts['joins'] as $joi){
					$joinss[$joi]=$joi;
				}
				// $join_query = "\n".implode("\n",);
				$busqueda_query = " and ( ".$query_filter_parts['filter']." ) ";
				$linkPagina = "pagina_filter";
				$linkRecPagina = "recargar_filter";
				$vvvalos = $_GET['filter'];

			}elseif($FilTro!=''){

				$busqueda_query = " and ( ".$FilTro." ) ";
				$linkPagina = "pagina_filtro";
				$linkRecPagina = "recargar_filtro";
				$vvvalos = $FilTro_l;

			} elseif($_GET['buscar']!=''){

				if(is_numeric($_GET['buscar'])){
					
					prin($_GET);
					$numbuscar=contar($tbl,"where ".$tbl.".id = '".$_GET['buscar']."'",1);
					if($numbuscar==1){
						redir("?i=".$_GET['buscar']);
					}
				}

				$busqueda_query = search_query($datos_tabla['fulltext'],$datos_tabla['like'],$datos_tabla['id'],$_GET['buscar']);
				$linkPagina = "pagina_buscar";
				$linkRecPagina = "recargar_buscar";
				$vvvalos = $_GET['buscar'];

			} else {

				$busqueda_query = "";
				$linkPagina = "pagina";
				$linkRecPagina = "recargar";
				$vvvalos = "";

			}

	//		prin($datos_tabla);
			//update_tags($objeto_tabla[$this_me],162);
			/*
			$tbcampos	=	$datos_tabla['form'];
			$tblistado	=	$datos_tabla['list'];
			$tbquery	=   $datos_tabla['query'];
			*/
			
			/*prin($datos_tabla['query']);*/

			if($_GET['i']!='' ){

				// $tblistado	=	$datos_tabla['list'] = $datos_tabla['form'];
				$tblistado	=	$datos_tabla['list']=$MEEE['campos'];


				foreach($tblistado as $tblistado_item){
					
					$tblistado3[$tblistado_item['campo']]=$tblistado_item;

				}
								

				foreach($MEEE['campos'] as $tblistado_item){
				
					$tblistado3[$tblistado_item['campo']]=$tblistado_item;

				}	


				
			
				

				// prin($tblistado3);

				$tblistado=$tblistado3;
				


				//$array=$MEEE;
				/*prin($datos_tabla['list']);*/

				if(is_array($datos_tabla['list']))
				foreach($datos_tabla['list'] as $tyt=>$camp){
			
					if( $camp['disabled']=='1' ){ continue; }

					if( 
						in_array($camp['tipo'],array('fed','pos','vis','cal')) 
						and $camp['listable']!='1'
					){ continue; }

					if( 
						in_array($camp['tipo'],array('hid')) and !isset($camp['opciones']) and $camp['foreig']!=1
					){ continue; }

					
					if( $camp['campo']!=$array['group'] and $camp['autotags']!='1' ){

						/*prin($camp);*/

						$tblistado[$tyt]['listable']='1';
						$datos_tabla['list'][$tyt]['listable']='1';
						$query[]=$camp['campo'];

					}

				}
				
				
				$tbquery= $datos_tabla['query']= implode(",",$query);

			
			}




			$tbquery_items=explode(',',$tbquery);	
			$tbquery=array();
			$join_query_arr=array();
			$join_query_arr2=array();

			foreach($tbquery_items as $tbquery_item)
			{
				$tbquery[]=$tbl.".".$tbquery_item." as ".$tbquery_item;
			}
			foreach($listable_end as $campokey => $tblque)
			{
				$joinss[$tblque['tabla']]=$tblque['tabla'];
				$tbquery[]=$tblque['tabla'].".".$campokey." as ".$campokey;	
				$tbquery0[]=$campokey;
			}
			$join_query='';
			foreach($joinss as $tttiii=> $joi_)
			{
				$onn=explode(".",$datos_tabla['joins'][$joi_]);
				$jqnext[$tttiii]=$onn[0];
				$join_query_arr[$tttiii]="\n left join ".$joi_." on ".$datos_tabla['joins'][$joi_]." ";
			}

			// prin($jqnext);

			foreach($join_query_arr as $tttiii=>$joi_)
			{
				$join_query_arr2[$jqnext[$tttiii]]=$join_query_arr[$jqnext[$tttiii]];
				$join_query_arr2[$tttiii]=$join_query_arr[$tttiii];
			}

			foreach($join_query_arr2 as $joi_)
			{
				$join_query.=$joi_;
			}
			// prin($join_query);
			/*			
			$joins[$FA0]=" left join ".$FA0." on ".$joi[$FA0]." ";
			prin(sizeof($tbcampos));
			prin(sizeof($tblistado));
			prin(sizeof($query));
			*/
			//prin($SERVER);
			//prin($vars['GENERAL']['mostrar_toolbars']);

			$extra_where='';
			if($datos_tabla['extra_where']){

				$extra_where=$datos_tabla['extra_where'];

				if(
					preg_match_all('/{+(.*?)}/', $extra_where, $matches)
					) {
				   foreach($matches[1] as $match){

				    	$extra_where =str_replace('{'.$match.'}', $_GET[$match], $extra_where);
				   }
				}


			}



			if($_GET['format']=='excel'){		

				/*
				######## ##     ##  ######  ######## ##
				##        ##   ##  ##    ## ##       ##
				##         ## ##   ##       ##       ##
				######      ###    ##       ######   ##
				##         ## ##   ##       ##       ##
				##        ##   ##  ##    ## ##       ##
				######## ##     ##  ######  ######## ########
				*/
				include('excel.php');
			
			// } elseif($_GET['ran']=='1') {
			} else {


				// $_GET['debug']='1';
				// prin(	prin($tbquery);
				// $datos_tabla['where_id']);
				// prin($tbquery);


				$pagina_items=paginacion(
										array(
											'separador'    =>''
											,'porpag'      =>($LOCAL and $vars['GENERAL']['mostrar_toolbars'])?20:$datos_tabla['por_pagina']
											// ,'porpag'      =>1
											,'anterior'    =>'&laquo;'
											,'siguiente'   =>'&raquo;'
											,'enlace'      =>"#"
											,'onclick'     =>"ax(\"". $linkPagina ."\",\"". urlencode($vvvalos) ."\",PAG);return false;"
											/*,'onclick':'go_page'*/
											,'tren_limite' =>'10'
											,'tipo'        =>'data',
											'noquery'	   => ( $_GET['i']=='' && $_GET['ran']!=1 && $datos_tabla['nocharge']==1),
										),
										$tbquery,
										$tbl,
										$join_query
										. "\n where 1 "
										. "$EXTRA_FILTRO $busqueda_query ".$datos_tabla['where_id']
										. "\n $extra_where"
										
										. "\n order by "
										. ( ($FilTro_o=='')?'':$FilTro_o."," )


										. ( ($datos_tabla['group'])?' '.$datos_tabla['group'].' desc, ':'' )
										. ( ($datos_tabla['order_by']=='')? (  $tbl.".".$datos_tabla['id']." ". (($datos_tabla['orden']=='1')?"desc":"asc") ):$datos_tabla['order_by'] )
										,
										(0 or ($_GET['debug']=='1') )
										);

				
				
				if(0 or ($_GET['debug']=='1'))
					prin(array(
						'EXTRA_FILTRO'=>$EXTRA_FILTRO,
						'busqueda_query'=>$busqueda_query,
						'where_id'=>$datos_tabla['where_id']
					));


			}




			$lineas          = $pagina_items['filas'];

			$paginas_linea   = $pagina_items['tren'];
			$anterior_linea  = $pagina_items['anterior'];
			$siguiente_linea = $pagina_items['siguiente'];
			
			$total_linea     = $pagina_items['total'];
			$desde_linea     = $pagina_items['desde'];
			$hasta_linea     = $pagina_items['hasta'];
			
			$lineassize      =sizeof($lineas);
			
			if( $_GET['i']=='' && $_GET['ran']!=1 && $datos_tabla['nocharge']==1)
			{
				$lineas=[];
			}

			if(function_exists("onload_include_after_query")){

				onload_include_after_query();
				
			}

			// prin($oouutt);

			?>
			<input type="hidden" id="nfilter" value="filter='<?=str_replace("&","%26",http_build_query($oouutt))?>'" style="width:100%;">

			<input type="hidden" id="linkopagina" style="width:100%;" value="<?=$linkPagina?>" >

			<input type="hidden" id="linkovals" style="width:100%;" value="<?=urlencode($vvvalos)?>" >

			<input type="hidden" id="ffilter" style="width:100%;" value="<?=urlencode($_GET['filter'])?>" >

			<input type="hidden" id="pagina" style="width:100%;" value="<?=(($_GET['pag']=='')?"1":$_GET['pag'])?>"  />
			<!-- //echo '<input type="hidden" id="tipolista" value="'.$linkRecPagina.'"  />'; -->
			
			<input type="hidden" id="edit_hidd" style="width:100%;"  />

			<div class="cover" id="refresh-cover" style="display:none;"></div>

			<div class="refreshing" id="refresh" style="display:none;">cargando......</div>

		<?php

		if($lineassize!=0 or $_GET['buscar']!='' or $_GET['filter']!=''){

	        // echo '<div style="'.$display_barra.'">';

			$vars['GENERAL']['controles_listados']=($vars['GENERAL']['controles_listados'])?$vars['GENERAL']['controles_listados']:1;


			/*
			######## #### ########   #######     ##       ####  ######  ########    ###    ########   #######
			   ##     ##  ##     ## ##     ##    ##        ##  ##    ##    ##      ## ##   ##     ## ##     ##
			   ##     ##  ##     ## ##     ##    ##        ##  ##          ##     ##   ##  ##     ## ##     ##
			   ##     ##  ########  ##     ##    ##        ##   ######     ##    ##     ## ##     ## ##     ##
			   ##     ##  ##        ##     ##    ##        ##        ##    ##    ######### ##     ## ##     ##
			   ##     ##  ##        ##     ##    ##        ##  ##    ##    ##    ##     ## ##     ## ##     ##
			   ##    #### ##         #######     ######## ####  ######     ##    ##     ## ########   #######
			*/
			if(!$ocultar_opciones_filas and $vars['GENERAL']['controles_listados']){

			?>

				<span class="brazzz">

				   	<a id="set_filas_2"
						title="Vista de Resúmen" 
				   		class="braz z" 
		        		onclick="set_filas_x('<?php echo $tb?>','modificador');return false;" 
		        	></a>
				
					<a id="set_filas_4" 
						title="Vista de Tabla" 
						class="braz z"
						onclick="set_filas_x('<?php echo $tb?>','modificador_grilla');return false;" 
					></a>

				</span>
<script>

function set_filas_x(tb,val){

document.body.classList.remove('list_modificador');
document.body.classList.remove('list_modificador_grilla');
document.body.classList.add('list_'*val);

document.querySelectorAll('.bl').forEach(function(blo) {
	
	$(blo).removeClass('modificador');
	$(blo).removeClass('modificador_grilla');
	$(blo).addClass(val);
	
});

Cookie.write(tb+'_colap', val, {duration: 10});
fetch(`ajax_change_cookie.php?var=${tb}_colap&val=${val}&ajax=1`);

}

</script>
				<?php

			
			}




			/*
			MENU
			 ######   #######  ##          ###    ########   ######  ######## ########
			##    ## ##     ## ##         ## ##   ##     ## ##    ## ##       ##     ##
			##       ##     ## ##        ##   ##  ##     ## ##       ##       ##     ##
			##       ##     ## ##       ##     ## ########   ######  ######   ##     ##
			##       ##     ## ##       ######### ##              ## ##       ##     ##
			##    ## ##     ## ##       ##     ## ##        ##    ## ##       ##     ##
			 ######   #######  ######## ##     ## ##         ######  ######## ########
			*/
			/*
			?>
			<span class="mmm">
				<a id="msino"
				title="Ocultar menú" 
				onclick='document.body.classList.add("menu_colapsed");fetch("ajax_change_cookie.php?var=men&val=1&ajax=1");return false;'></a>
				<a id="mnosi"
				title="Mostrar menú"
				onclick='document.body.classList.remove("menu_colapsed");fetch("ajax_change_cookie.php?var=men&val=0&ajax=1");return false;'></a>
			</span>				
			<?php
			*/

			/*
			########  ##     ##  ######   ######     ###    ########
			##     ## ##     ## ##    ## ##    ##   ## ##   ##     ##
			##     ## ##     ## ##       ##        ##   ##  ##     ##
			########  ##     ##  ######  ##       ##     ## ########
			##     ## ##     ##       ## ##       ######### ##   ##
			##     ## ##     ## ##    ## ##    ## ##     ## ##    ##
			########   #######   ######   ######  ##     ## ##     ##
			*/			
			if(sizeof($datos_tabla['fulltext'])>0 or sizeof($datos_tabla['like'])>0){ ?>
				<form 
				action="<?php echo "custom/".$datos_tabla['archivo'].".php";?>" 
				onsubmit="if($v('buscar')=='buscar <?php echo $datos_tabla['nombre_singular'];?>'){ return false; }"
				method="get">
					<div id="linea_buscador">
						<span class="z ico_search"></span>
						<input id="buscar" 
							type="text" 
							class="<?php echo ($_GET['buscar']!='')?"inuse":"";?>" 
							value='<?php echo $_GET['buscar'];?>' 
							autocomplete="off" 
							placeholder="buscar <?php echo $datos_tabla['nombre_singular'];?>"
							name="buscar" />
						<span id="buscar_span"></span>
					</div>
				</form>
			<?php }


			/**
			 * FILTROS
			 */
			

			$html_filter="<div class='byother'>".implode("\n",$html_filter_A)."</div>";

			echo "<div class='filters' id='dfilters' >".
				 implode("\n",$html_filter_fecha_A).$html_filter.
			"</div>";

		}

		echo $htmlfil;


		if($lineassize==0){ ?>
		
			<div class="nohay">
				0 <?php echo $datos_tabla['nombre_plural']?>
			</div>
			
		<?php } else { ?>
		
			<?php if($tblistadosize!='0'){
	
				/* RENDER
				########     ###     ######   #### ##    ##    ###     ######  ####  #######  ##    ##
				##     ##   ## ##   ##    ##   ##  ###   ##   ## ##   ##    ##  ##  ##     ## ###   ##
				##     ##  ##   ##  ##         ##  ####  ##  ##   ##  ##        ##  ##     ## ####  ##
				########  ##     ## ##   ####  ##  ## ## ## ##     ## ##        ##  ##     ## ## ## ##
				##        ######### ##    ##   ##  ##  #### ######### ##        ##  ##     ## ##  ####
				##        ##     ## ##    ##   ##  ##   ### ##     ## ##    ##  ##  ##     ## ##   ###
				##        ##     ##  ######   #### ##    ## ##     ##  ######  ####  #######  ##    ##
				*/

				render_view([
					// 'prev'=>$anterior_linea,
					// 'next'=>$siguiente_linea,
					'current'=>($_GET['pag'])?$_GET['pag']:'1',
					'train'=>$paginas_linea,
					'range'=>($total_linea==$lineassize)?"":"(desde $desde_linea hasta $hasta_linea)",
					'total'=>[
						'num'=>$total_linea,
						'item'=>($total_linea==1)?$datos_tabla['nombre_singular']:$datos_tabla['nombre_plural']
					]
				],"pager.php");

	
			} ?>
	
		<?php }

		if ($_GET['i']!=''){ ?>

			<div class="title_detail">
				<?=$datos_tabla['nombre_singular']." #".$_GET['i']?>
			</div>

		<?php }


		$numero_de_campo_en_lista=$tblistadosize-4;

		$needs['html']=0;

		// prin($tblistado);
		?>

		<div class="listado_grilla">
		
			<ul id="ordenable">
			
				<?php include("vista_items.php"); ?>
			
			</ul>
		
		</div>

		<?php

	}

	?>
	<script language="javascript">

		window.addEvent('domready',function(){
	        ax('actualizar_total',this.value);
			if(document.getElementById('error_creacion')){
				document.getElementById('error_creacion').innerHTML='';
			}
		});

	</script>
    <?php

	/* ?></div><?php */

	// FIN AJAX
	
	

	if(!isset($_GET['ran']) or $_GET['ran']==''){

		echo "</div>";
		include("vista_ax.php");

	}

}
//prin(0);
if(isset($_GET['ran']) and $_GET['ran']!=''){

	include("lib/compresionFinal.php");	/*para Content-Encoding*/

}
// prin($_GET);
?>
<script language="javascript">

if(window.location.hash=='#create'){ abrir_crear('1','0'); }

<?php if($_GET['i']!=''){ ?>
window.addEvent('load',()=>{
if($('ab_<?php echo $_GET['i']; ?>'))
$('ab_<?php echo $_GET['i']; ?>').fireEvent('mouseover');
// $('ab_<?php echo $_GET['i']; ?>').removeEvents('mouseover');
});
<?php } ?>

<?php if($datos_tabla['nocharge']=='1' && $_GET['i']==''){ ?>
window.addEvent('load',()=>{
ax("pagina","",1);
});
<?php } ?>
</script>
<?php

include("objeto.php");
//prin($datos_tabla);

if( in_array($_GET['verdesarrollo'],array('1','0')) ){
	$_SESSION['verdesarrollo']=$_GET['verdesarrollo'];
	redireccionar_a($_SERVER['HTTP_REFERER']);
}

if(1){
	
if(isset($datos_tabla['por_linea']) and $datos_tabla['por_linea']>3){ $datos_tabla['set_fila_fijo']='1';  } 
if($datos_tabla['set_fila_fijo']){	$_COOKIE[$tb.'_colap']=$datos_tabla['set_fila_fijo']; $ocultar_opciones_filas=1;	}
$_COOKIE[$tb.'_colap']=(isset($_COOKIE[$tb.'_colap']))?$_COOKIE[$tb.'_colap']:(($datos_tabla['por_linea']>1)?1:(($tblistadosize>6)?4:1));
$ocultaresquina=($tblistadosize<8)?1:0;

?><!-- INICIO AJAX --><?php 

if($_GET['ran']==''){
	

	?><style><?php
	 if($datos_tabla['crear_label']!=''){ ?> .formulario label { width:<?php echo $datos_tabla['crear_label']?>; }<?php } 
	 if($datos_tabla['crear_txt']!=''){ ?>.formulario .form_input, .formulario .in_span span  { width:<?php echo $datos_tabla['crear_txt']?>; }<?php }
	 if($datos_tabla['altura_listado']!=''){ ?>.bl .bd { height:<?php echo $datos_tabla['altura_listado']?>; }.bl .bd { height:auto; }<?php }
	 $porr_linea=($datos_tabla['por_linea']=='')?'100':((ceil(100/$datos_tabla['por_linea']))-1); 
	 ?>.bl { float:left; clear:none; width:<?php echo $porr_linea;?>%;   }<?php
	?></style><?php  	
	
	echo '<input type="hidden" id="resaltar"  />';
	
    if($_GET['block']!='form'){
	
	echo '<div class="div_bloque_cuerpo" '. ( ($datos_tabla['width_listado'])?"style=\"width:".$datos_tabla['width_listado'].";\"":"" ) .' ><div class="refreshing2" id="cargando_form" style="display:none;">cargando</div>';	    
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	//		formulario inicio 		//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	 
		if($Open){ $datos_tabla['crear']='1'; }
		
		echo '<div class="bloque_titulo">';
			 
			$saved[$datos_tabla['me']]['crearopen']=($saved[$datos_tabla['me']]['crearopen']=='')?0:$saved[$datos_tabla['me']]['crearopen'];
			
			if(!($datos_tabla['crear']=='0' or $tblistadosize=='0' )){ 
			
            ?><span id="abri_cerrar_crear"><?php        
            ?><a id="abrir_crear" <?php
            ?>onclick="abrir_crear('1','0'); return false;" <?php
            ?>class="linkstitu itr ico_Abajo ico_Crear" <?php
            ?>style=" <?php echo ($saved[$datos_tabla['me']]['crearopen']=='1')?"display:none;":""?>" <?php
            ?>>crear <?php echo $datos_tabla['nombre_singular']?></a><?php
            
            ?><a id="cerrar_crear" <?php
            ?>onclick="abrir_crear('0','0'); return false;" <?php 
            ?>class="linkstitu itr ico_Arriba ico_Crear" <?php
            ?>style=" <?php echo ($saved[$datos_tabla['me']]['crearopen']=='1')?"":"display:none;"?>" <?php       
            ?>>cancelar</a> <?php        
			?></span><?php
            
			if($Open and ($datos_tabla['crear_pruebas']!='0' and $EdicionPanel) ){ 

            ?><a onclick="ax('insertar_prueba_rapida',''); return false;" <?php 
            ?>class="linkstitu" <?php
            ?>id="insertar_prueba" <?php
            ?>style=" background-color:<?php echo $BGCOLOR_DESARROLLO;?>; color:#000; display:none;" <?php
            ?>>Crear <?php echo $datos_tabla['nombre_singular']?> de prueba</a><?php            
            ?><script>window.addEvent('domready',function(){	$1("insertar_prueba");	});</script><?php
			
            } 

            if(trim($datos_tabla['controles'])!=''){ echo procesar_controles_html($datos_tabla['controles']); }
            
			if($datos_tabla['exportar_excel']=='1'){ 
			?><a href="exportar_excel.php?me=<?php echo $datos_tabla['me'];?>" <?php
			?>class="linkstitu  itr ico_Excel" <?php
			?>title="Descargar Excel">Exportar Excel</a> <?php
			}

			if($datos_tabla['importar_csv']=='1'){ 
			echo '<a href="#" rel="nofollow" onclick="javascrip:procesar_recargar(\'importar_csv.php?me='.$datos_tabla['me']."&".$SERVER['PARAMS'].'\');return false;" class="linkstitu  itr ico_Excel" title="Importar CSV">Importar CSV</a>';
			}

			} 
							            
            ?><a name="titulo" ><?php echo $tbtitulo?></a><?php
        
			
		
    ?></div><?php
		
	} else { 

	$_COOKIE[$tb.'_colap']=0;
	
	?><style>
	#linea_buscador { display:none; } 
	#segunda_barra_2 { float:left; width:48%; clear:none; #margin-top:10px; margin-top:0px; }
	.bl { width:99%;#width:95%; }
	.inner_listado { overflow:auto; min-height:135px;position:relative; background-color:#F7F7F7; float:left; width:48%; }	
	.formulario label { padding-left:0px; }
	.nohay { text-align:center; font-family:Arial; padding:10px 0px; width:100%; color:#666666; font-size:16px;  }
	.segunda_barra { 
	background-color:#FFF; color:#000; border:0; margin-top:10px; 
	}
	body { background:#FFF; }
	h1.titulo_formulario { display:none; }
	.contenido_principal { border:0; padding-right:0px; }
	#segunda_barra_3 { display:none;}
	.form_boton_1 {
background-color:#FF0000; 
background-image: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0, #FF0000),
    color-stop(1, #000000)
);
background-image: -moz-linear-gradient(
    center top,
    #FF0000 0%,
    #000000 100%
);	
	color:#FFF; padding-top:2px; padding-bottom:2px; border:0; position:relative; } 
	.formulario { #padding-left:10px; }
	#contenido_principal { 
    border-radius: 0;
    box-shadow:	none;
	}	
	.bloque_content_crear { /*background-color:#FFF;*/ }
	
	<?php 
	//$display_barra='display:none;';
	if($_GET['tipo']=='listado'){ $_COOKIE[$tb.'_colap']=4; ?>
    #div_allcontent { width:98%; }
	<?php } else { 	$_COOKIE[$tb.'_colap']=0; ?>
    #div_allcontent { width:680px; min-width:0%; }
	.bloque_content_crear { width:50%; float:left; }
	.formulario label { width:99%; }
	.formulario .form_input { width:99%; }
	<?php } ?>
		
    </style><?php
	
    	} 		
			
		?><div id="bloque_content_crear" class="bloque_content_crear"><?php 
		if( ($Proceso=='login') or ($_GET['block']=='form') or ($datos_tabla['crear_quick']=='1') ){ include("formulario.php");
		?><script>window.addEvent('load',function(){ pre_crear(); });</script><?
		} ?></div><?php 
	
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	//		formulario fin 		//////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	
    echo '<div class="segunda_barra" id="segunda_barra_2">';
    
	if($tblistadosize!='0'){ 
    
    ?><b style="float:left; text-align:left; width:50%;" id="inner_span_num" ></b><?php  
    ?><b id="inner_span_tren" class="inner_span_tren" ></b><?php

    	}   

    echo '</div>';
            
                  
    echo '<div class="inner_listado"  id="inner" style=" width:100%; ';
	if($_GET['block']=='form' and $_GET['tipo']!='listado'){ echo 'width:50%; float:left;'; }  
	echo '" >';


		///// ZONA AJAX INICIO  ////

		//////////////////////////////////////////////////////////////////////////////////////////////////////////
		//		listado inicio	//////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////
					
		}				

		if(1){
			
			foreach($datos_tabla['form'] as $df){
				if($df['queries']=='1'){
					$queries[]=$df;
				}
			}
			parse_str($_GET['filter'],$FiL);
			$html_filter='';
			foreach($queries as $querie){
				if($querie['tipo']=='hid' and ($querie['opciones'])){
					list($primO,$tablaO,$whereO)=explode("|",$querie['opciones']);
					list($idO,$camposO)=explode(",",$primO);
					$oopciones=select(array($idO,"CONCAT_WS(' ',". str_replace(";",",",$camposO) .") as value"),$tablaO,$whereO);
					$html_filter.="<select id='filtr_".$querie['campo']."' onchange=\"render_filder();\">";
					$html_filter.="<option value='' style='color:#999;'>".$querie['label']."</option>";						
					foreach($oopciones as $pppooo){
					$html_filter.="<option ".(($pppooo[$idO]==$FiL[$querie['campo']])?'selected':'')." value='".$pppooo[$idO]."'>".$pppooo['value']."</option>";						
					}
					$html_filter.="</select>";		
					$terfil[]=$querie['campo'];		
				}
			}
			?>
			<script>
			function render_filder(){
			var url='';
			<?php foreach($terfil as $tert){
			echo "url+='".$tert."%3D'+$('filtr_".$tert."').value+'%26';\n";
			} ?>
			location.href="custom/<?php echo $datos_tabla['archivo']; ?>.php?filter="+url;
			}
			</script>
			<?php
		}
		if($Open==1 and 0){
		$filtros1=array(); $filtros2=array(); $filtros3=array();
		$filtros1=explode(";",$datos_tabla['filtros']);
		$filtros2=explode(";",$datos_tabla['filtros_extra']);
		$filtros3=array_merge($filtros1,$filtros2);
		$datos_tabla['filtros']=implode(";",$filtros3);
		$datos_tabla['filtros']=($datos_tabla['filtros']==',')?$datos_tabla['filtros']:'';
		}
		if($datos_tabla['filtros']!=''){
			$fils=explode(";",$datos_tabla['filtros']);
            foreach($fils as $fil){
                list($label,$filt,$ordf,$txtx)=explode("|",trim($fil));
				$Filtross[$label]=array($filt,$ordf,$txtx);
            }

			if($Filtross[$datos_tabla['filtro_default']][0]!='' and $_GET['filtro']==''){	$_GET['filtro']=$datos_tabla['filtro_default']; }
			if($Filtross[$datos_tabla['filtro_default']][0]!='' ){ $no_mostrar_todos=1;	}
		
            $htmlfil = '<div class="blo_filtros">';
			if(!$no_mostrar_todos){
            $htmlfil.= "<a $selesele href='".$DIR_CUSTOM.$datos_tabla['archivo'].".php'>".$datos_tabla['nombre_plural']."</a><b>:</b>";
			}
            foreach($fils as $fil){
                list($label,$filt,$ordf,$txtx)=explode("|",trim($fil));
				$Filtross[$label]=array($filt,$ordf,$txtx);
				$selesele='';
				if($label==$_GET['filtro']){
					$FilTro=$filt;
					$FilTro_l=$label;
					$FilTro_o=$ordf;					
					$selesele='class="selected"';					
					if($txtx!=''){
					$BarFiltro=$txtx;
					}
				}
				if(!in_array(trim($label),array("","\n","\r","\t"))){
                	$htmlfil.= "<a $selesele href='".$DIR_CUSTOM.$datos_tabla['archivo'].".php?filtro=".$label."'>".$label."</a>";
				}
            }
            $htmlfil.= '</div>';	
        } 		

		//if($BarFiltro!=''){
		//}       
		
		if($BarFiltro!=''){
			echo "<div class='barfiltro'>$BarFiltro</div>";
		}

		echo "<div style='font-size:0px;'>&nbsp;</div>";
	    if($tblistadosize!='0'){ 

		if($_GET['filter']!=''){

			$busqueda_query = " and ( ".query_filter($_GET['filter'])." ) ";
			$linkPagina = "pagina_filter";
			$linkRecPagina = "recargar_filter";
			$vvvalos = $_GET['filter'];
			
		}elseif($FilTro!=''){
		
			$busqueda_query = " and ( ".$FilTro." ) ";
			$linkPagina = "pagina_filtro";
			$linkRecPagina = "recargar_filtro";
			$vvvalos = $FilTro_l;
				
		} elseif($_GET['buscar']!=''){
		
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
			
		$pagina_items=paginacion(
								array(
									'separador'=>''
									,'porpag'=>$datos_tabla['por_pagina']
									,'anterior'=>'&laquo;'
									,'siguiente'=>'&raquo;'
									,'enlace'=>"#"
									,'onclick'=>"ax(\"". $linkPagina ."\",\"". $vvvalos ."\",PAG);return false;"
									/*,'onclick':'go_page'*/
									,'tren_limite'=>'10'
								),
								$tbquery,
								$tbl,
								"where 1 $busqueda_query ".$datos_tabla['where_id']." 
								order by "
								. ( ($FilTro_o=='')?'':$FilTro_o."," )
								. ( ($datos_tabla['group'])?' '.$datos_tabla['group'].' desc, ':'' )
								. ( ($datos_tabla['order_by']=='')? (  $datos_tabla['id']." ". (($datos_tabla['orden']=='1')?"desc":"asc") ):$datos_tabla['order_by'] )
								,
								0);
											
		$lineas	 = $pagina_items['filas'];	
		$paginas_linea = $pagina_items['tren'];
		$anterior_linea = $pagina_items['anterior'];
		$siguiente_linea = $pagina_items['siguiente'];
		
		$total_linea = $pagina_items['total'];
		$desde_linea = $pagina_items['desde'];
		$hasta_linea = $pagina_items['hasta'];
		
		$lineassize=sizeof($lineas);
					
		
        echo '<input type="hidden" id="pagina" value="'.(($_GET['pag']=='')?"1":$_GET['pag']).'"  />';        
        //echo '<input type="text" id="tipolista" value="'.$linkRecPagina.'"  />';		        
        echo '<input type="hidden" id="edit_hidd"  />';
		
        echo '<div style="position:relative;height:auto;float:left;width:100%;">';
        ?><ul id="ordenable" ><?php
        echo '<div class="refreshing" id="refresh" style="display:none;">cargando......</div>';
	
		if($lineassize!=0 or $_GET['buscar']!='' or $_GET['filter']!=''){ 
        
        echo '<div style="background-color:#FFF;height:auto;padding:0;clear:left;float:left;width:100%;'.$display_barra.'">';
       
		$vars['GENERAL']['controles_listados']=($vars['GENERAL']['controles_listados'])?$vars['GENERAL']['controles_listados']:1;
		
		echo '<div class="barbar2">';
		
        ?><span style=" <?php echo ($ocultar_opciones_filas==1)?'display:none;':''; ?>"><?php
        
	   	?><a class="braz <?php if($_COOKIE[$tb.'_colap']=='2'){?>brasselected<?php }?>" <?php  
        ?>onclick="set_filas('<?php echo $tb?>','<?php echo $tbf?>','2');return false;" <?php 
        ?>title="Vista de Resúmen" <?php 
        echo (in_array($vars['GENERAL']['controles_listados'],array('1','2')))?'':'style="display:none;"'; 
        ?>id="set_filas_2"></a><?php  	    
                
	   	?><a class="braz <?php if($_COOKIE[$tb.'_colap']=='1'){?>brasselected<?php }?>" <?php  
        ?>onclick="set_filas('<?php echo $tb?>','<?php echo $tbf?>','1');return false;" <?php 
        ?>title="Filas en Bloque" <?php 
        echo (in_array($vars['GENERAL']['controles_listados'],array('1','3')))?'':'style="display:none;"'; 
        ?>id="set_filas_1"></a><?php  
                                       
	   	?><a class="braz <?php if($_COOKIE[$tb.'_colap']=='3'){?>brasselected<?php }?>" <?php  
        ?>onclick="set_filas('<?php echo $tb?>','<?php echo $tbf?>','3');return false;" <?php 
        ?>title="Vista de Filas" <?php 
        ?>id="set_filas_3"></a><?php 
        
        ?><a class="braz <?php if($_COOKIE[$tb.'_colap']=='4'){?>brasselected<?php }?>" <?php  
        ?>onclick="set_filas('<?php echo $tb?>','<?php echo $tbf?>','4');return false;" <?php 
        ?>title="Vista de tabla" <?php 
        echo (in_array($vars['GENERAL']['controles_listados'],array('1','3')))?'':'style="display:none;"'; 
        ?>id="set_filas_4" style="text-decoration:none;"></a><?php   
                
		?></span><?php	
				
		if(sizeof($datos_tabla['fulltext'])>0 or sizeof($datos_tabla['like'])>0){
		?><form action="<?php echo "custom/".$datos_tabla['archivo'].".php";?>" method="get"
		onsubmit="if($v('buscar')=='buscar <?php echo $datos_tabla['nombre_singular'];?>'){ return false; }"    
		><?php
			?><div id="linea_buscador"><?php
				?><input type="text" style="color:<?php echo ($_GET['buscar']!='')?"#000":"#999";?>; " <?php
				?>onfocus="if(this.value=='buscar <?php echo $datos_tabla['nombre_singular'];?>'){ this.value=''; this.style.color='#000'; } " <?php
				?>onblur="if(this.value==''){ this.style.color='#999'; this.value='buscar <?php echo $datos_tabla['nombre_singular'];?>'; } " <?php
				/* onkeyup=" if(event.keyCode=='13' && this.value!=''){ ax('buscar',this.value,'buscar <?php echo $datos_tabla['nombre_singular'];?>'); } " */ 
				?>value='<?php echo ($_GET['buscar']!='')?$_GET['buscar']:"buscar ".$datos_tabla['nombre_singular'];?>' autocomplete="off" <?php
				?>id="buscar" name="buscar" /><?php
				
				?><input type="submit" value="buscar" <?php 
				/*onclick="ax('buscar',$v('buscar'),'buscar <?php echo $datos_tabla['nombre_singular'];?>');" */ 
				?>style="background-color:#000; color:#FFF; padding:0px 2px 0px 0px; font-size:18px; text-transform:uppercase;float:left; border:0; margin-right:10px; font-weight:bold; display:none;" /> <?php
				?><span id="buscar_span"></span><?php
			?></div><?php 
		?></form><?php    
		}   
		
		echo "<div class='filters'>$html_filter</div>";		
	
		} 
		
		echo $htmlfil; 
		
		echo "</div>";
		 
		if($lineassize==0){ ?><div class="nohay" style=" padding-top:60px; height:auto;">0 <?php echo $datos_tabla['nombre_plural']?> </div><?php } 
		
		echo '<div>';
		
		
		//$lineas=array($lineas[0]);
		
		$numero_de_campo_en_lista=$tblistadosize-4;
		
		$needs['html']=0;
		foreach($tblistado as $tbli){
		if($tbli['tipo']=='html'){ $needs['html']=1; }
		}
			            				
		$datos_tabla['edicion_completa']=($datos_tabla['edicion_completa']!='')?$datos_tabla['edicion_completa']:( (($needs['html']) or($numero_de_campo_en_lista>$limite_campos_en_lista))?1:0 );		
		
		$datos_tabla['edicion_rapida']=($datos_tabla['edicion_rapida']!='')?$datos_tabla['edicion_rapida']:( (($needs['html']) or($numero_de_campo_en_lista>$limite_campos_en_lista))?0:1 );			
		
		$urd=0;				
		$groupvalue='';		
		
		foreach($tblistado as $tbli){		
			$pdfrom[]="[".$tbli['campo']."]";
		}
        foreach($lineas as $tete=>$linea){ 
		$urd++;
		$datos_tabla['edicion_completa']=($_GET['block']=='form' and $_GET['tipo']=='listado')?0:$datos_tabla['edicion_completa'];
			
						
			if($datos_tabla['por_linea']!=''){ if($tete%$datos_tabla['por_linea']==0){ echo ($tete!=0)?"</div>":""; echo "<div style='clear:left;'>"; } } 
            echo '<li alt="'.$linea[$datos_tabla['id']].'" class="bl ';
						
			switch($_COOKIE[$tb.'_colap']){
				case "1": echo ''; break;
				case "2": echo 'modificador'; break;
				case "3": echo 'modificador_linea'; break;
				case "4": echo 'modificador_grilla'; break;	
			}
			
			echo '" id="i_'.$linea[$datos_tabla['id']].'"  >';
            echo '<a class="ie">'.$linea[$datos_tabla['id']].'</a>';
			echo '<div class="lc '. ( ($datos_tabla['vis']!='')?(($linea[$datos_tabla['vis']]=='0')?"oc":""):'' ).'" id="lc_'.$linea[$datos_tabla['id']].'">';		
			
			if($datos_tabla['eliminar']=='1'){ 
			echo '<a  id="ad_'.$linea[$datos_tabla['id']].'" onclick="ax(\'x\',\''.$linea[$datos_tabla['id']].'\');return false;" class="bl1 itr i_x z" title="eliminar '.$datos_tabla['nombre_singular'].'" ></a>'; 
			} 
			
			if($datos_tabla['vis']!='' and $datos_tabla['visibilidad']!='0' ){
                    
                         ?><a  id="av_<?php echo $linea[$datos_tabla['id']]?>" onclick="ax('v','<?php echo $linea[$datos_tabla['id']]?>'); return false;" class="bl1 itr i_m z" title="habilitar <?php echo $datos_tabla['nombre_singular'];?>" ></a><?php
                         ?><a  id="ah_<?php echo $linea[$datos_tabla['id']]?>" onclick="ax('o','<?php echo $linea[$datos_tabla['id']]?>'); return false;" class="bl1 itr i_o z" title="deshabilitar <?php echo $datos_tabla['nombre_singular'];?>" ></a><?php
                                                
                    } 
					
					if($datos_tabla['cal']!='' and $datos_tabla['calificacion']!='0' ){ 
                    
                        ?><a  id="as_<?php echo $linea[$datos_tabla['id']]?>" onclick="ax('star','<?php echo $linea[$datos_tabla['id']]?>'); return false;" class="bl1 itr ico_star_<?php echo ($linea[$datos_tabla['cal']])?$linea[$datos_tabla['cal']]:'0';?> z" <?php  echo 'rel="'. ( ($linea[$datos_tabla['cal']]==5)?'0':($linea[$datos_tabla['cal']]+1) ).'"'; ?> title="calificar <?php echo $datos_tabla['nombre_singular'];?>" ></a><?php                        
                                                
                     } 
						
					if($datos_tabla['editar']=='1'){ 
						 
                        if($datos_tabla['edicion_completa']=='1'){ 
                       
                             ?><a  id="ae_<?php echo $linea[$datos_tabla['id']]?>" onclick="ax('ec','<?php echo $linea[$datos_tabla['id']]?>'); return false;" class="bl1 itr i_ec z" title="editar <?php echo $datos_tabla['nombre_singular'];?>" ></a><?php	

							 
                            if($datos_tabla['duplicar']=='1' and $_GET['block']!='form'){ 
                            
                                ?><a  id="ae_<?php echo $linea[$datos_tabla['id']]?>" onclick="if(confirm('Desea Crear un nuevo registro de <?php echo $datos_tabla['nombre_singular'];?> con estos datos?')){ ax('ec','<?php echo $linea[$datos_tabla['id']]?>','nuevo'); } return false;" class="bl1 itr i_d z" title="Crear un nuevo <?php echo $datos_tabla['nombre_singular'];?> con estos datos" ></a><?php	
                                                    
                             	}
							} 
                        if($datos_tabla['edicion_rapida']=='1'){ 
                                            
                            ?><a  id="ae_<?php echo $linea[$datos_tabla['id']]?>" onclick="ax('e','<?php echo $linea[$datos_tabla['id']]?>'); return false;" class="bl1 itr i_e z" title="editar <?php echo $datos_tabla['nombre_singular'];?>" ></a><?php }                                                                          
                   
             			}  
                    ?></div><?php    
                            
					 if($datos_tabla['editar']=='1'){ 
                    ?><div id="lec_<?php echo $linea[$datos_tabla['id']]?>" class="lec <?php echo ($urd=='1')?"first_linea_exl ":" ";?>" style="display:none;"><a  id="aec_<?php echo $linea[$datos_tabla['id']]?>" onclick="ax('e_a','<?php echo $linea[$datos_tabla['id']]?>'); return false;" class="bl1 itr ico_Cancelar z" title="cancelar edición" >cancel</a><a  id="aeg_<?php echo $linea[$datos_tabla['id']]?>" onclick="ax('e_g','<?php echo $linea[$datos_tabla['id']]?>'); return false;"   class="bl1 itr ico_Guardar z" title="guardar cambios" >guardar</a></div><?php
                     } 
                                        
            ?><a class="expanlink <?php echo ($urd=='1')?"first_linea_exl ":" ";?>" id="exl_<?php echo $linea[$datos_tabla['id']]?>" style=" <?php 
			echo ( ($ocultaresquina=='1') or ( $_COOKIE[$tb.'_colap']=='2' or $_COOKIE[$tb.'_colap']=='1') )?"":"display:none;"; ?>" onclick="ax('set_fila_1','<?php echo $linea[$datos_tabla['id']]?>'); return false;" title="expandir"></a><a class="colaplink <?php echo ($urd=='1')?"first_linea_exl ":" ";?>" id="cll_<?php echo $linea[$datos_tabla['id']]?>" style=" <?php 
			echo ( ($ocultaresquina=='1') or ( $_COOKIE[$tb.'_colap']=='3' or $_COOKIE[$tb.'_colap']=='4') )?"display:none;":""; ?> " onclick="ax('set_fila_3','<?php echo $linea[$datos_tabla['id']]?>'); return false;" title="colapsar"></a><?php    
                                               
                     
                    echo '<div id="ldd_'.$linea[$datos_tabla['id']].'" class="ldd ';
					echo ($urd=='1')?"first_linea ":"";		
					
								
					if($datos_tabla['vis']!=''){ echo ($linea[$datos_tabla['vis']]=='0')?"oc":""; } 
					echo '" >';
					
					echo '<div class="truc"></div>';
					$tbid=0;
					$pdto=array();
					foreach($tblistado as $tbli){
						$pdto[]=$linea[$tbli['campo']];
					}
					foreach($tblistado as $tbli){
						
                        if($tbli['listable']=='1'){ 	
						$tbid++;
					
							if($urd==1){
								if($tbli['controles']!=''){ 
								list($tbli['controles'],$controles)=getControles($tbli['controles'],$objeto_tabla); 
//								prin($controles);
								$controlEs[$tbli['campo']]=$tbli['controles'];
								$load_foto[$tbli['campo']]=$controles['foto'][0]['obj'];
								if($controles['subs']){ 	$load_subs[$tbli['campo']]=$controles['subs']; }
								if($controles['mensajes']){ $load_mensajes[$tbli['campo']]=$controles['mensajes']; }	
								}								
							}
													
							$SuprimirLabel=(
											strtolower($tbli['label'])=='nombre' 
											or strtolower($tbli['label'])==strtolower($datos_tabla['nombre_singular'])
											or $tbli['label']=='Título'
											or strtolower($tbli['label'])=='foto'
											or strtolower($tbli['label'])=='fecha'
											or strtolower($tbli['label'])=='vista'
											or strtolower($tbli['label'])=='email'
											or strtolower($tbli['label'])=='estado'
											or strtolower($tbli['label'])=='web'
											or strtolower($tbli['label'])=='categoría'
											or strtolower($tbli['label'])=='tipo'
											or strtolower($tbli['listhtml'])=='1'
											or strtolower($tbli['campo'])==strtolower($datos_tabla['group'])	
											)?1:0;											
											
							$nuevoDad='';
							if(strtolower($tbli['campo'])==strtolower($datos_tabla['group'])){
								$nuevoDad='od';
								if($groupvalue!=$linea[$datos_tabla['group']]){
									$groupvalue=$linea[$datos_tabla['group']];
									$nuevoDad='nd';
								}				
							}											
											
							$Firstmain=(	
											strtolower($tbli['label'])=='nombre' 
											or strtolower($tbli['label'])==strtolower($datos_tabla['nombre_singular'])
											or $tbli['label']=='Título'
											)?1:0;											
											
							$nomodificar=(
											strtolower($tbli['label'])=='fecha'
											or strtolower($tbli['label'])=='email'
											)?1:0;																	
							$poner_title=(
											(
											$tbli['tipo']!='com'
											and $SuprimirLabel 
											and !$nomodificar
											)
										 or ($tbid==1)
										 or $tbli['tipo']=='pas'
										)?1:0;
//							$tbli['label']=str_replace(array('Categoría'),array('Cat'),$tbli['label']);
																							
							$tbli['controles']=($tbli['control']=='0')?'':procesar_controles_html($controlEs[$tbli['campo']]);						
					
							$tbli['width']=($tbli['width']=='' or $tbli['width']=='100px')?"":"width:".$tbli['width'].";";
                            echo '<div class="bld '.$nuevoDad.'" >';

							if($tbli['tipo']=='inp' and $load_foto[$tbli['campo']]!=''){ 
																		$obj=$load_foto[$tbli['campo']];
																		$hayfotoexterna=render_foreig_foto($objeto_tabla[$obj],$linea[$datos_tabla['id']]);
																		} 
							//IMG
							if($tbli['tipo']=='img'){ 
									echo '<b class="nc '.(($SuprimirLabel)?'sp':'').'" '.( ($urd=='1')?' title="'.$tbli['label'].'" ':'').' >'.$tbli['label'].'&nbsp;';
									if($urd=='1' and $EdicionPanel){ ?><a class='edot' onclick='tog("<?php echo $tbli['campo']?>");return false;'>&diams;</a><?php }
									echo '</b>';
									                                                            
                                     echo '<span class="bd" ';
									 echo 'style="'.($tbli['style']=='')?"":str_replace(",",";",$tbli['style']).'"';
									 echo ' id="i_'.$tbli['campo'].'_'.$linea[$datos_tabla['id']].'">'; 
                                     if($linea[$tbli['campo']]!=''){ 
								   $cec=0; if(($tbli['enlace']=='lightbox') or !($tbli['enlace']) ){ $cec=1; 
                                   ?><a style="float:none;margin:0;text-align:center;" href="<?php echo get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']]);?>" rel="[images],noDesc" class="mb" ><?php } elseif($tbli['enlace']) { $cec=1;
								   echo '<a href="'.str_replace(array("[id]","[enlace]"),array($linea[$datos_tabla['id']],$linea[$tbli['campo']]),$tbli['enlace']).'" >'; }
                                   ?><img  id="<?php echo $tb?>_file_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" <?php echo dimensionar_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']],$tbli['tamano_listado']);?> /><?php if($cec){?></a><?php } 
								   } else { 
                                   ?><img id="<?php echo $tb?>_file_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" <?php
                                   ?>class='img_default' src="<?php echo $USU_IMG_DEFAULT;?>" /><?php 
                                   } 
								   echo '</span>';
								   ?><div class="pt" id="p_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" ></div><?php
                                    if($tbli['controles']){
                                    $dts=str_replace(
													$pdfrom,
													$pdto,	
													//"[id]",
													//$linea[$datos_tabla['id']],
													procesar_dato($tbli['controles'],$linea[$datos_tabla['id']]));
									if($urd==1){ $sizeE[$tbli['campo']]='style="width:'.( str_control($dts) ).'px;"'; }
									echo "<div class='cd' ".$sizeE[$tbli['campo']].">";
                                    echo $dts;
									echo "</div>";
                                    } 
									
									} 
							//STO	
							if($tbli['tipo']=='sto'){ 
								
									list($uuno,$extens)=explode(".",$linea[$tbli['campo']]); 
								
									echo '<b class="nc '.(($SuprimirLabel)?'sp':'').'" 
									'.( ($urd=='1')?' title="'.$tbli['label'].'" ':'').' 									
									>'.$tbli['label'].'&nbsp;';
									if($urd=='1' and $EdicionPanel){ ?><a class='edot' onclick='tog("<?php echo $tbli['campo']?>");return false;'>&diams;</a><?php }									
									echo '</b>';									
									;?><span class="bd" style=' padding-left:10px;' id="i_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" ><?php
                                    if($linea[$tbli['campo']]!=''){ 
								   $cec=0; 
								   if(($tbli['enlace']=='lightbox') or !($tbli['enlace']) and in_array($extens,array('gif','jpg','png')) ){ 
								   $cec=1; 
                                   echo '<a style="float:none;margin:0;text-align:left;" href="'.get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']]).'" rel="[images],noDesc" class="mb" >';
								    } elseif($tbli['enlace']) { 
								   $cec=1;  
								   echo "<a href=\"";
								   
								   if($tbli['enlace']=='down'){								   
								   		echo "down.php?name=".urlencode($linea[($tbli['name'])?$tbli['name']:'nombre'])."&file=".urlencode(str_replace($vars['REMOTE']['httpfiles'],'',get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']])))."\" title=\"Descargar ".$linea[($tbli['name'])?$tbli['name']:'nombre'];
								   } else {									   
								   		echo str_replace(array("[id]","[enlace]"),array($linea[$datos_tabla['id']],$linea[$tbli['campo']]),$tbli['enlace']);								
								   }
								   echo "\">";
								   
								   } 
								    
								   if(($tbli['enlace']=='down') and in_array($extens,array('txt','doc','xls','pdf')) ){ 
									   echo "Descargar <img src='img/ico_".$extens.".png' align=center border=0 >";
								   }else{
									   echo $linea[$tbli['campo']]; 
								   }
								    
								   if($cec){ echo "</a>"; } 
								   
								   } else { ?>---<?php } 
								   ?></span><?php

                                   ?><input type='hidden' value='' id="txt_<?php echo $tb?>_<?php echo $tbli['campo']?>_name_<?php echo $linea[$datos_tabla['id']]?>" /><?php
                                   
                                   ?><div class="pt" id="p_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" style=' <?php echo ($tbli['style']=='')?"":str_replace(",",";",$tbli['style'])?>'></div><?php 
								   if($tbli['controles']){
                                    $dts=str_replace($pdfrom,$pdto,procesar_dato($tbli['controles'],$linea[$datos_tabla['id']]));
									if($urd==1){ $sizeE[$tbli['campo']]='style="width:'.( str_control($dts) ).'px;"'; }
									echo "<div class='cd' ".$sizeE[$tbli['campo']].">";
                                    echo $dts;
									echo "</div>";
                                    } 
									
								}
														
							//PAS	
							if($tbli['tipo']=='pas'){                                   
                                   ?><b class="nc"><?php echo $tbli['label']?>:</b><?php
                                   ?><span class="bd" style=' <?php echo $tbli['width']; ?>' <?php
                                   ?>id="i_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" <?php
								   echo "title=\"".addslashes($linea[$tbli['campo']])."\"";
                                   ?>><?php
                                   
								   	$passs='';
									for($iu=0;$iu<strlen($linea[$tbli['campo']]);$iu++){
										$passs.="*";
									}
									echo ($_COOKIE['admin']=='1')?$linea[$tbli['campo']]:$passs; 
									
                                   ?></span><input type="hidden" value="<?php echo $linea[$tbli['campo']]?>" id="i_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>_temp" /><div class="pt" id="p_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" style=" <?php echo $tbli['width']; ?>"></div><?php  
								 } 
							
								if($tbli['controles']){
									$dts=str_replace($pdfrom,$pdto,procesar_dato($tbli['controles'],$linea[$datos_tabla['id']]));
									if($urd==1){ 
									$sizeE[$tbli['campo']]='style="width:'.( str_control($dts) ).'px;"'; 
									if($load_foto[$tbli['campo']]!=''){
									$sizeF[$tbli['campo']]='style="width:'.( str_control($dts) ).'px;margin-left:52px;"'; 									
									}else{
									$sizeF[$tbli['campo']]='style="width:'.( str_control($dts) ).'px;"'; 									
									}
									
									}
								}
								
							//OTROS
							if(
							in_array($tbli['tipo'],array('txt','inp','com','yot','fch','fcr','html','bit'))
							or
							($tbli['tipo']=='hid' and ($tbli['combo']=='1' or $tbli['listable']=='1') )
							){ 															
									$tbli['tip_foreig']=( ($tbli['tipo']=='hid') and ($tbli['opciones']!=''))?$tbli['tip_foreig']:0;
								
									//echo ($SuprimirLabel)?"":'<b class="nc">'.$tbli['label'].':</b>';
									echo '<b class="nc '.(($tbli['label']=='' or $SuprimirLabel)?'sp':'').'" '.( ($urd=='1')?' title="'.$tbli['label'].'" ':'').' >'.$tbli['label'].'&nbsp;';
									if($urd=='1' and $EdicionPanel){ ?><a class='edot' onclick='tog("<?php echo $tbli['campo']?>");return false;'>&diams;</a><?php }									
									echo '</b>';																		
									
                                    if($tbli['extra']!='')
									echo "<span style='float:left;margin:0 3px; font-size:11px; '>".procesar_dato($tbli['extra'],$linea[$datos_tabla['id']])."</span>"; 
									if($tbli['tipo']=='yot'){
									echo "<img style='float:left;' src='http://i4.ytimg.com/vi/".$linea[$tbli['campo']]."/default.jpg' />";									
									}
									$adiv0='';
									if($tbli['enlace']){ $adiv0.='<a class="bd '; } else { $adiv0.='<div class="bd '; }
									if($tbli['tip_foreig']=='1'){ $adiv0.='tipper '; } else { $adiv0.=''; }
									
									$adiv0.= ($SuprimirLabel and !$nomodificar)?"mn ":"";
									$adiv0.= ($Firstmain and !$nomodificar and $tbli['listhtml']!='1')?"fm ":"";
									$adiv0.= '"';
									if($tbli['tip_foreig']=='1'){ 
									list($primO,$tablaO)=explode("|",$tbli['opciones']);
									list($idO,$camposO)=explode(",",$primO);									
									$adiv0.='rel="{ajax:\'ajax_sql.php?v_t='.$tablaO.'&v_d='.$idO.'%3D'.$linea[$tbli['campo']].'&exc='.$camposO.'&f=get_quick\'}"'; 
									} else { $adiv0.=''; }									
									$adiv0.= "style='".$tbli['width'].";";
									$adiv0.= ($tbli['tipo']=='txt')?'max-height:95px;overflow:hidden;':'';
									$adiv0.= "' ";
									$adiv0.= "id=\"i_".$tbli['campo']."_".$linea[$datos_tabla['id']]."\" ";
									if($tbli['enlace']){
									$adiv0.= "href=\"".str_replace(array("[id]","[enlace]"),array($linea[$datos_tabla['id']],$linea[$tbli['campo']]),$tbli['enlace'])."\" "; }
									
									$adiv1= '';									
									switch($tbli['tipo']){
										case "fch":case "fcr":
										$adiv1.= fecha_formato($linea[$tbli['campo']],($tbli['formato'])?$tbli['formato']:'0b')."<input type='hidden' value='".substr($linea[$tbli['campo']],0,13)."' id='".$tb."_fchhid_".$tbli['campo']."_".$linea[$datos_tabla['id']]."' >";
										break;										
										case "html":
										if($tbli['listhtml']=='1'){	$adiv1.= "<div class='htmlenlista'>".stripslashes($linea[$tbli['campo']])."</div>"; } else {
										$adiv1.= substr(strip_tags($linea[$tbli['campo']]),0,3000);
										}
										$adiv1.= "<textarea style='".(($tbli['width'])?'width:'.$tbli['width'].';':'')."display:none;' id='".$tb."_htmlhid_".$tbli['campo']."_".$linea[$datos_tabla['id']]."'  >".stripslashes($linea[$tbli['campo']])."</textarea>";										
										break;
										case "hid":
										$adiv1.= '<input type="hidden" value="'.$linea[$tbli['campo']].'" id="i_'.$tbli['campo'].'_hido_'.$linea[$datos_tabla['id']].'" />';
										list($primO,$tablaO)=explode("|",$tbli['opciones']);
										list($idO,$camposO)=explode(",",$primO);
										$camposOA=array();
										$camposOA=explode(";",$camposO);
										$bufy='';
										foreach($camposOA as $COA){
										$bufy.= select_dato($COA,$tablaO,"where ".$idO."='".$linea[$tbli['campo']]."'")." ";
										}
										$adiv1.= $bufy;
										$adiv0.= ( $poner_title )?"title=\"".addslashes($bufy)."\"":""; 
										break;
										case "bit":
										$adiv1.= '<input type="hidden" value="'.$linea[$tbli['campo']].'" id="i_'.$tbli['campo'].'_hido_'.$linea[$datos_tabla['id']].'" />';
										switch($linea[$tbli['campo']]){
											case "1":$adiv1.= "&nbsp;<a title='si' class='ico_yes z ico_list'></a>"; break;	
											case "0":$adiv1.= "&nbsp;<a title='no' class='ico_no z ico_list'></a>"; break;	
										}
										break;	
										case "com":
										$adiv1.= '<input type="hidden" value="'.$linea[$tbli['campo']].'" id="i_'.$tbli['campo'].'_hido_'.$linea[$datos_tabla['id']].'" />';
										if(is_array($tbli['opciones'])){
										list($opppp,$color)=explode("|",$tbli['opciones'][$linea[$tbli['campo']]]);
										switch(str_replace(
											array('á','é','í','ó','ú'),
											array('a','e','i','o','u'),
											strtolower($opppp))){											
										case "comentario":							$adiv1.= "&nbsp;<a title='enviado' class='ico_tack z ico_list'></a>"; break;	
										case "soporte":								$adiv1.= "&nbsp;<a title='soporte' class='ico_clip z ico_list'></a>"; break;	
										case "enviado":								$adiv1.= "&nbsp;<a title='enviado' class='ico_left z ico_list'></a>"; break;	
										case "recibido":							$adiv1.= "&nbsp;<a title='recibido' class='ico_right z ico_list'></a>"; break;	
										case "si":case "sí":						$adiv1.= "&nbsp;<a title='si' class='ico_yes z ico_list'></a>"; break;	
										case "no":									$adiv1.= "&nbsp;<a title='no' class='ico_no z ico_list'></a>"; break;	
										case "nuevos soles":case "soles": 			$adiv1.= "S/."; break;
										case "dolares":case "dolares americanos": 	$adiv1.= "\$US"; break;
										default : 									$adiv1.= "<span style='color:$color;'>".$opppp."</span>";	break;
											}
										} else {
										$adiv0.= ( $poner_title )?"title=\"".addslashes($linea[$tbli['campo']])."\"":""; 
										$adiv1.= $linea[$tbli['campo']];
										}									
										break;	
																			
										default:																					
										$adiv0.= ( $poner_title )?"title=\"".addslashes($linea[$tbli['campo']])."\"":""; 
										$adiv1.= $linea[$tbli['campo']];										
										break;
																	
									}
										
									if($tbli['enlace']){ $adiv2= '</a>'; } else { $adiv2= '</div>'; }

									$adiv0.= " >";
									
									echo $adiv0.$adiv1.$adiv2;
									//echo ($tbli['foreig'])?"†":"";
									?><div class="pt" id="p_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" style=" <?php echo $tbli['width']; ?>"></div><?php 
									if($tbli['controles']){                                   
									echo "<div class='cd' ". ( ($hayfotoexterna)?$sizeE[$tbli['campo']]:$sizeF[$tbli['campo']]).">";
                                    echo $dts;
									echo "</div>";
									}
                                    
									} 
                    		 echo '</div>';
							 } 
                    	}             
										
					echo '</div>';

						if($urd==1){ 
						$load_subs_render=(sizeof($load_subs)>0)?1:0;
						}
						if($load_subs_render){
						render_foreig_subs($load_subs,$linea[$datos_tabla['id']],$urd);
						}


                    echo "</li>";
		
		
		//////////////////////////////////////////////////////////////////////////////////////////////////////////
		//		listado fin 	//////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////
		 } 
		
		if($datos_tabla['por_linea']!=''){ echo "</div>"; } 
		
		?></ul><?php 
        ?></div><?php
   
        }        
		?><input type="hidden" id="inner_hidden_num" value='<span id="span_num" ><?php echo $total_linea; ?></span> <?php echo ($total_linea==1)?$datos_tabla['nombre_singular']:$datos_tabla['nombre_plural']?> <span style="font-weight:normal;"><?php echo ($total_linea==$lineassize)?"":"(desde $desde_linea hasta $hasta_linea)"; ?></span>' /><?php
		?><input type="hidden" id="inner_hidden_num2" value='<span id="span_num2" ><?php echo $total_linea; ?></span> <?php echo ($total_linea==1)?$datos_tabla['nombre_singular']:$datos_tabla['nombre_plural']?> <span style="font-weight:normal;"><?php echo ($total_linea==$lineassize)?"":"(desde $desde_linea hasta $hasta_linea)"; ?></span>' /><?php        
		?><textarea id="inner_hidden_tren" style="display:none;"><div class='train'><?php echo $anterior_linea.$paginas_linea.$siguiente_linea;?></div></textarea><?php        
		?><script>
		
		window.addEvent('domready',function(){
	        ax('actualizar_total',this.value);
		});
		
        </script><?php 
                    
  
     /**/ 
	 
	if(strpos($_SERVER['SCRIPT_NAME'], "login.php")===false){ 

    ?><div class="segunda_barra"  id="segunda_barra_3" style="clear:left;" ><?php
    
		 if($tblistadosize!='0'){ 
            ?><b style="float:left; text-align:left; width:50%;" id="inner_span_num2" ></b><?php
            ?><b id="inner_span_tren2" class="inner_span_tren" ></b><?php
         }  
    
	?></div><?php 
    
    } else {  
    ?><style>
	#div_allcontent { width:680px; margin-top:5%; min-width:0%; }
	ul.ul_menus { width:25%;}
    .div_bloque_cuerpo { float:left; width:60%; margin-left:4%; } 
	.formulario .linea_form:hover label { background:none; }
    </style> 
    <script>
	window.addEvent('domready',function() { 
	$('error_creacion').innerHTML='';
	$('val_in_nombre');
	});	
	</script>   
    <?php } 
	
	?></div><?php    

    ?><!-- FIN AJAX --><?php
  
 
if($_GET['ran']==''){  

echo "</div>";
?><script>
var styleinfi='<?php
	if($SERVER['browser']=='Firefox'){
	echo "margin-left:-117px;";
	} elseif($SERVER['browser']=='Opera'){
	echo "margin-left:-154px;";
	} elseif($SERVER['browser']=='Chrome'){
	echo "margin-left:-1px;";	
	} elseif($SERVER['browser']=='IE9'){
	echo "margin-left:-150px;";
	} elseif($SERVER['browser']=='IE7'){
	echo "margin-left:-150px;";
	} else{
	echo "margin-left:-1px;";
	}	
	?>';
var errores=[];
errores[1]="los campos con * son obligatorios";
errores[2]="no coinciden las contraseñas";
errores[3]="datos de login incorrectos";
var Loren_ipsum='<?php echo $LOREN_IPSUM;?>';
var Recargar='ajax';
var mooedit;
var FORMULARIO_ABIERTO;<?php 
$datos_tabla['expandir_vertical']='1'; ?>
//alert('<?php echo $tbl?>');
var tbl = "<?php echo $tbl?>";
var MMEE="<?php echo $datos_tabla['me'];?>";
var USU_IMG_DEFAULT="<?php echo $USU_IMG_DEFAULT;?>";<?php

?>function ax(accion,id,pag){
switch(accion){
case "set_fila_3":
$("exl_"+id).setStyles({'display':''});
$("cll_"+id).setStyles({'display':'none'});<?php 	
if($datos_tabla['expandir_vertical']=='1') {?>
 $('i_'+id).removeClass('modificador');
$('i_'+id).removeClass('modificador');
if($('set_filas_3').getStyle('color')=='#000000' || $('set_filas_1').getStyle('color')=='#000000' || $('set_filas_2').getStyle('color')=='#000000'){
$('i_'+id).removeClass('modificador_grilla');
$('i_'+id).addClass('modificador_linea');
} else {
$('i_'+id).removeClass('modificador_linea');
$('i_'+id).addClass('modificador_grilla');
}<?php
 } ?>
break;
case "set_fila_2":
$("exl_"+id).setStyles({'display':'none'});
$("cll_"+id).setStyles({'display':''});<?php 
if($datos_tabla['expandir_vertical']=='1') { 
?>$('i_'+id).removeClass('modificador');
$('i_'+id).removeClass('modificador_linea');
$('i_'+id).removeClass('modificador_grilla');
$('i_'+id).addClass('modificador');<?php 
} ?>
break;	
case "set_fila_1":
$("exl_"+id).setStyles({'display':'none'}); 
$("cll_"+id).setStyles({'display':''});<?php  
if($datos_tabla['expandir_vertical']=='1') { ?>
$('i_'+id).removeClass('modificador'); 
$('i_'+id).removeClass('modificador_linea'); 		
$('i_'+id).removeClass('modificador_grilla');<?php 		
} ?>	
break;	
case "actualizar_total":
if($('inner_span_num'))
$('inner_span_num').innerHTML=$('inner_hidden_num').value;
if($('inner_span_tren'))
$('inner_span_tren').innerHTML=$('inner_hidden_tren').value;			
if($('inner_span_num2'))
$('inner_span_num2').innerHTML=$('inner_hidden_num2').value;
if($('inner_span_tren2'))
$('inner_span_tren2').innerHTML=$('inner_hidden_tren').value;<?php 	
if($needs['img']){ 		
?>charge_multibox();<?php
} 
if($needs['mootooltips']){ 		
?>charge_tooltips();<?php
}
 ?>
break;
case "recargar":
$1('refresh');
new Request({url:"vista.php?OB="+MMEE+"&pag="+$v('pagina')+"&ran=1<?php echo $datos_tabla['get_id']?>",  method:'get', onSuccess:function(ee) { 
$('inner').innerHTML=ee; 
if($('resaltar').value!=''){
$($('resaltar').value).highlight('#FF0', '#FFF');	
var resal = $('resaltar').value;
$($('resaltar').value).setStyles({'border-top':'1px solid #333','border-bottom':'1px solid #333','border-left':'1px solid #333','border-right':'1px solid #333'});
setTimeout("\$('"+resal+"').setStyles({'border-top':'1px dashed #999','border-bottom':'1px dashed #fff','border-left':'1px solid #fff','border-right':'1px solid #fff'});",8000);
$('resaltar').value='';
}
ax('actualizar_total',this.value);
$0('refresh');
} } ).send();
break;
case "recargar_buscar":
$1('refresh');
new Request({url:"vista.php?OB="+MMEE+"&buscar=<?php echo addslashes($_GET['buscar']);?>&pag="+$v('pagina')+"&ran=1<?php echo $datos_tabla['get_id']?>",  method:'get', onSuccess:function(ee) { 
$('inner').innerHTML=ee; 
if($('resaltar').value!=''){
$($('resaltar').value).highlight('#FF0', '#FFF');				
var resal = $('resaltar').value;
$($('resaltar').value).setStyles({'border-top':'1px solid #333','border-bottom':'1px solid #333','border-left':'1px solid #333','border-right':'1px solid #333'});
setTimeout("\$('"+resal+"').setStyles({'border-top':'1px dashed #999','border-bottom':'1px dashed #fff','border-left':'1px solid #fff','border-right':'1px solid #fff'});",8000);
$('resaltar').value='';
}
ax('actualizar_total',this.value); 
$0('refresh'); 
} } ).send();
break;			
case "recargar_filter":
$1('refresh');
new Request({url:"vista.php?OB="+MMEE+"&filter=<?php echo $_GET['filter'];?>&pag="+$v('pagina')+"&ran=1<?php echo $datos_tabla['get_id']?>",  method:'get', onSuccess:function(ee) { 
$('inner').innerHTML=ee; 
if($('resaltar').value!=''){
$($('resaltar').value).highlight('#FF0', '#FFF');				
var resal = $('resaltar').value;
$($('resaltar').value).setStyles({'border-top':'1px solid #333','border-bottom':'1px solid #333','border-left':'1px solid #333','border-right':'1px solid #333'});
setTimeout("\$('"+resal+"').setStyles({'border-top':'1px dashed #999','border-bottom':'1px dashed #fff','border-left':'1px solid #fff','border-right':'1px solid #fff'});",8000);
$('resaltar').value='';
}
ax('actualizar_total',this.value); 
$0('refresh'); 
} } ).send();
break;	
case "recargar_filtro":
$1('refresh');
new Request({url:"vista.php?OB="+MMEE+"&filtro=<?php echo $_GET['filtro'];?>&pag="+$v('pagina')+"&ran=1<?php echo $datos_tabla['get_id']?>",  method:'get', onSuccess:function(ee) { 
$('inner').innerHTML=ee; 
if($('resaltar').value!=''){
$($('resaltar').value).highlight('#FF0', '#FFF');				
var resal = $('resaltar').value;
$($('resaltar').value).setStyles({'border-top':'1px solid #333','border-bottom':'1px solid #333','border-left':'1px solid #333','border-right':'1px solid #333'});
setTimeout("\$('"+resal+"').setStyles({'border-top':'1px dashed #999','border-bottom':'1px dashed #fff','border-left':'1px solid #fff','border-right':'1px solid #fff'});",8000);
$('resaltar').value='';
}
ax('actualizar_total',this.value); 
$0('refresh'); 
} } ).send();
break;			
case "pagina":
$1('refresh');
new Request({url:"vista.php?OB="+MMEE+"&pag="+pag+"&ran=1<?php echo $datos_tabla['get_id']?>", method:'get', onSuccess:function(ee) { $('inner').innerHTML=ee; ax('actualizar_total',this.value); $0('refresh'); } } ).send();
break;
case "pagina_buscar":
$1('refresh');
new Request({url:"vista.php?OB="+MMEE+"&buscar="+id+"&pag="+pag+"&ran=1<?php echo $datos_tabla['get_id']?>", method:'get', onSuccess:function(ee) { $('inner').innerHTML=ee; ax('actualizar_total',this.value); $0('refresh'); } } ).send();
break;
case "pagina_filter":
$1('refresh');
new Request({url:"vista.php?OB="+MMEE+"&filter="+id+"&pag="+pag+"&ran=1<?php echo $datos_tabla['get_id']?>", method:'get', onSuccess:function(ee) { $('inner').innerHTML=ee; ax('actualizar_total',this.value); $0('refresh'); } } ).send();
break;	
case "pagina_filtro":
$1('refresh');
new Request({url:"vista.php?OB="+MMEE+"&filtro="+id+"&pag="+pag+"&ran=1<?php echo $datos_tabla['get_id']?>", method:'get', onSuccess:function(ee) { $('inner').innerHTML=ee; ax('actualizar_total',this.value); $0('refresh'); } } ).send();
break;					
case "buscar":
if( (id.trim()=='')||(id.trim()==pag) ){ return; }
$('buscar_span').innerHTML='<div class="refreshing" style="position:relative;text-align:left; padding-left:5px;float:left;width:auto;">buscando....</div>';
new Request({url:"vista.php?OB="+MMEE+"&buscar="+id+"&ran=1<?php echo $datos_tabla['get_id']?>", method:'get', onSuccess:function(ee) {			 
 $('inner').innerHTML=ee; 
 ax('actualizar_total',this.value);
 $('buscar_span').innerHTML='<a href="" onclick=\'$("buscar_span").innerHTML="";ax("pagina","",1);return false;\' >volver</a>';
 } } ).send();
break;				
case "validar":<?php
?>var ret=true;<?php
foreach($tbcampos as $tbcampA){ 
	if($tbcampA['validacion']=='1'){ 
	 if($tbcampA['constante']=='1'){ continue; }
	 if($tbcampA['tipo']=='img'){ 
		?> if($v('upload_in_<?php echo $tbcampA['campo']?>').trim()==''){ show_error(1); ret=false; } <?php
	 } elseif($tbcampA['tipo']=='sto'){ 
		?>if($v('upload_in_<?php echo $tbcampA['campo']?>').trim()==''){ show_error(1); ret=false; } <?php
	 } elseif($tbcampA['tipo']=='pas'){ 
		?>	if($v('in_<?php echo $tbcampA['campo']?>').trim()==''){ show_error(1); ret=false; }	
		if($v('in_<?php echo $tbcampA['campo']?>').trim()!=$v('in_<?php echo $tbcampA['campo']?>_2').trim()){ show_error(2); ret=false; } <?php
	 } else { 	
		?>if($v('in_<?php echo $tbcampA['campo']?>').trim()==''){ show_error(1); ret=false; } <?php
	 } 
 } 
} 
?> return ret;
break;			
case "resetear":
<?php
	foreach($tbcampos as $tbcampA){ 
	
	if($tbcampA['tipo']=='com'){ 
		if(sizeof($tbcampA['opciones'])=='2' and 
		   strtolower($tbcampA['opciones']['0'])=='no' and 
		   str_replace("í","i",strtolower($tbcampA['opciones']['1']))=='si'){
				$tbcampA['tipo']='bit';
		}
	}
			
	if($tbcampA['constante']=='1'){	continue; ?> $('in_<?php echo $tbcampA['campo']?>').disabled=false; <?php } 
	switch($tbcampA['tipo']){
	case "img": 
	?>reset_img_foto('<?php echo $tb?>','<?php echo $tbcampA['campo']?>');<?php 
	break;
	case "sto": 
	?>reset_img_sto('<?php echo $tb?>','<?php echo $tbcampA['campo']?>');<?php 
	break;					
	case "fch": 
	?>$('in_<?php echo $tbcampA['campo']?>_a').value='';<?php
	?>$('in_<?php echo $tbcampA['campo']?>_m').value='';<?php
	?>$('in_<?php echo $tbcampA['campo']?>_d').value='';<?php
	?>$('in_<?php echo $tbcampA['campo']?>_t').value='';<?php
	?>$('in_<?php echo $tbcampA['campo']?>').value='';<?php 
	break;
	case "pas": 
	?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';<?php										
	?>$('in_<?php echo $tbcampA['campo']?>_2').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';															
	<?php
	break;
	case "hid": 
	if($tbcampA['combo']=='1'){ 
	?>$('in_<?php echo $tbcampA['campo']?>').value='';<?php
	 }
	break;
	case "html": 
	?>mooeditable_<?php echo $tbcampA['campo']?>.setContent('');<?php
	break;								
	case "com": 
	if($tbcampA['radio']=='1' and is_array($tbcampA['opciones']) ){
	foreach($tbcampA['opciones'] as $ooppcc=>$opcopc){ 
	?>$('in_<?php echo $tbcampA['campo']?>_<?php echo $ooppcc;?>').checked=false;<?php } 
	?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';<?php												
	} else { 
	?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';<?php 										
	}	
	break;	
	case "bit": 
	?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor']);?>';<?php								
	?>$('in_<?php echo $tbcampA['campo']?>_check').checked=($('in_<?php echo $tbcampA['campo']?>').value)?true:false;<?php
	break;					
	default: 
	?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';<?php										
	
	break;
	} 
	} 
	
	foreach($HHijos as $HHijoYY){ 
	list($HHijo,$TipoHijo)=explode("|",$HHijoYY);
	?>render_son('<?php echo $HHijo;?>',999999000+$random(1,999),true,'<?php echo $TipoHijo;?>');<?php 
	} 	
								
	?>$('in_submit').value='Crear <?php echo $datos_tabla['nombre_singular']?>';<?php  
	?>$('in_submit').disabled=false;<?php  
	?>$('ed_save').value='Guardar <?php echo $datos_tabla['nombre_singular']?>';<?php  
	/*?>$('bloque_crear').setStyles({'display':'block'});<?php */
	?>$('ed_save').disabled=false;<?php  								
	?>$1('area_hijos');
break;
<?php if($Open and ($datos_tabla['crear_pruebas']!='0') ){ 
?>case "insertar_prueba":<?php
?>var rann=Math.floor(100000*Math.random() + 1);<?php
foreach($tbcampos as $tbcampA){ 
		if($tbcampA['tipo']=='com'){	
		$opciones_select=(is_array($tbcampA['opciones']))?array_keys($tbcampA['opciones']):explode(",",$tbcampA['opciones']);
		shuffle($opciones_select);
		?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo $opciones_select[0];?>';<?php
		} elseif($tbcampA['tipo']=='img'){
				$IMASS=file("lib/fotos_prueba/". ( ($datos_tabla['archivo_pruebas']!='')?$datos_tabla['archivo_pruebas']:$vars['GENERAL']['fotos_de_prueba']) );
				foreach($IMASS as $imm){
					if(trim($imm)!=''){
						$IMAGENES_PRUEBA[]=trim($imm);
					}
				}			
			shuffle($IMAGENES_PRUEBA); 
			?>upload_terminar('<?php echo $IMAGENES_PRUEBA[0];?>','<?php echo $tb?>','<?php echo $tbcampA['campo']?>',true);<?php
		} elseif($tbcampA['tipo']=='pas'){ 
			?>$('in_<?php echo $tbcampA['campo']?>').value='prueba';<?php						
			?>$('in_<?php echo $tbcampA['campo']?>_2').value='prueba';<?php
		} elseif($tbcampA['tipo']=='hid'){ 
			//
		} elseif($tbcampA['tipo']=='txt'){ 
			?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo ucfirst($tbcampA['campo'])." ".ucfirst($datos_tabla['nombre_singular']);?> '+rann+" "+Loren_ipsum;<?php
		} elseif($tbcampA['tipo']=='fch'){ 
			?>var pdia=Math.floor(28*Math.random() + 1);<?php
			?>pdia=(pdia<10)?"0"+pdia:pdia;<?php
			?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo date("Y");?>-<?php echo date("m");?>-'+pdia+' <?php echo date("H");?>:00:00';<?php
		} else {
		
			if($tbcampA['variable']=='float'){ 
				?>$('in_<?php echo $tbcampA['campo']?>').value=rann;<?php
			} else { 
			
				if(!(strpos($tbcampA['campo'],"email")===false)){ 
					?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo strtolower($tbcampA['campo'])?>'+rann+'@prueba.com';<?php
				} elseif(!(strpos($tbcampA['campo'],"precio")===false) ){ 
					?>$('in_<?php echo $tbcampA['campo']?>').value=rann;<?php
				} elseif(!(strpos($tbcampA['campo'],"codigo")===false) or !(strpos($tbcampA['campo'],"registro")===false) ){ 
					?>$('in_<?php echo $tbcampA['campo']?>').value='0000000'+rann;<?php
				} elseif(!(strpos($tbcampA['campo'],"telefono")===false)){
					?>$('in_<?php echo $tbcampA['campo']?>').value='99999'+rann;<?php
				} elseif(!(strpos($tbcampA['campo'],"edad")===false)){
					?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo rand(20,49);?>';<?php
				} else {
					?>$('in_<?php echo $tbcampA['campo']?>').value='<?php echo ucfirst($tbcampA['campo'])." ".ucfirst($datos_tabla['nombre_singular']);?> '+rann+' '+Loren_ipsum;<?php							
				} 
			
			} 
		
		} 
} ?>
break;	
case "insertar_prueba_rapida":
if(Recargar=='ajax'){
Recargar='sin_ajax';		
ax("insertar_prueba");		
$('insertar_prueba').innerHTML='creando.................................................';
ax("insertar_interno");
}
break;					
<?php } ?>
case "insertar":
Recargar='ajax';
ax("insertar_interno");
break;
case "insertar_interno":
hide_error();
if(ax("validar")==true){
$('bloque_content_crear').setStyles({'opacity':'0.4'});
$('in_submit').value='creando...';
$('in_submit').disabled=true;
var datos = {<?php
foreach($tbcampos as $tbcampA){ 
	if($tbcampA['tipo']=='sto'){ 
		?>stoupload_<?php echo $tbcampA['campo']?>	:  $v('upload_in_<?php echo $tbcampA['campo']?>'),<?php
	} elseif($tbcampA['tipo']=='img'){
		?>upload_<?php echo $tbcampA['campo']?>	:  $v('upload_in_<?php echo $tbcampA['campo']?>'),<?php
	} elseif($tbcampA['tipo']=='html'){
		echo $tbcampA['campo']?>			:  mooeditable_<?php echo $tbcampA['campo']?>.getContent(),<?php
	} else { 
		echo $tbcampA['campo']?>			:  $v('in_<?php echo $tbcampA['campo']?>'),<?php
	} 
} 
echo $datos_tabla['fcr']?>:  "now()",<?php
if($datos_tabla['vis']!=''){ echo $datos_tabla['vis']?> : "1", <?php }
foreach($HHijos as $HHijo){ 
	list($HHijo,$TipoHijo)=explode("|",$HHijo);								
	?>tempar_<?php echo $HHijo;?>			:  $v('tempar_<?php echo $HHijo;?>'),<?php
} 
?>v_o:MMEE
};
new Request({url:"ajax_sql.php?f=insert&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
var json=eval("(" + ee + ")");
if(json.success=='1'){
if(Recargar=='ajax'){
ax("resetear");
ax("<?php echo $linkRecPagina;?>");
$('bloque_content_crear').setStyles({'opacity':'1'});
} else if(Recargar=='sin_ajax'){
location.reload();
}
} else if(json.success=='0'){
show_error_texto(json.error);
$('in_submit').value='crear <?php echo $datos_tabla['nombre_singular']?>';
$('in_submit').disabled=false;
$('bloque_content_crear').setStyles({'opacity':'1'});
}
} } ).send();
}
break;
<?php if($Proceso=='login'){ 
?>case "login":
hide_error();
if(ax("validar")==true){
$('in_submit').value='Entrando...';
$('in_submit').disabled=true;
var datos = {<?php
foreach($tbcampos as $tbcampA){ 
	echo $tbcampA['campo']?>: $v('in_<?php echo $tbcampA['campo']?>'),<?php
} 
?>v_o:MMEE<?php
?>};<?php
?>new Request({url:"ajax_sql.php?f=login&debug=0", method:'post', data:datos, onSuccess:function(ee) {<?php 
?>if(ee!=''){ location.href='index.php'; } else {<?php 
?>show_error(3);<?php 
?>$('in_submit').disabled=false;<?php
?>$('in_submit').value='Entrar';<?php
?>} } } ).send();<?php				
?>}
break;				
<?php } ?>
case "x":
if(confirm('¿Está seguro que desea eliminar este registro?')){
Element('div', {
'class' : 'sv',
'html' : 'eliminando...',						
'id':'sv_'+id			
}).inject($('i_'+id));	
var datos = {
v_o : MMEE,
v_d : "where <?php echo $datos_tabla['id']?>='"+id+"' "
};
new Request({url:"ajax_sql.php?f=delete&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
$('i_'+id).destroy(); 
$('span_num').innerHTML=$('span_num').innerHTML -  1;
$('span_num2').innerHTML=$('span_num2').innerHTML -  1;
} } ).send();				
}
break;
case "star":
var datos = {
'<?php echo $datos_tabla['cal']?>':$('as_'+id).rel,
v_o : MMEE,
v_d : "where <?php echo $datos_tabla['id']?>='"+id+"' "
};
new Request({url:"ajax_sql.php?f=update&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
var rele = parseFloat($('as_'+id).rel);
$('as_'+id).rel=(rele==10)?0:rele+1;
<?php for($io=0;$io<=10;$io++){ ?>
$('as_'+id).removeClass('ico_star_<?php echo $io;?>'); 
<?php } ?> 
$('as_'+id).addClass('ico_star_'+rele); 
} } ).send();			
break;			
case "v":
var datos = {
'<?php echo $datos_tabla['vis']?>':'1',
v_o : MMEE,
v_d : "where <?php echo $datos_tabla['id']?>='"+id+"' "
};
new Request({url:"ajax_sql.php?f=update&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
//$('i_'+id).removeClass('oc'); 
$('ldd_'+id).removeClass('oc'); 
$('lc_'+id).removeClass('oc'); 
} } ).send();					
break;			
case "o":
var datos = {
'<?php echo $datos_tabla['vis']?>':'0',
v_o : MMEE,
v_d : "where <?php echo $datos_tabla['id']?>='"+id+"' "
};
new Request({url:"ajax_sql.php?f=update&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
//$('i_'+id).addClass('oc'); 
$('ldd_'+id).addClass('oc'); 
$('lc_'+id).addClass('oc'); 
} } ).send();					
break;					
case "editar_completo_cancelar":		
$1('segunda_barra_2');
if($('linea_buscador'))	$1('linea_buscador');
$('error_creacion').innerHTML='<span style="color:#000000;">los campos con * son obligatorios</span>';
$0('titulo_editar');
$1('titulo_crear');
if($('abri_cerrar_crear'))	$1('abri_cerrar_crear');
$1('linea_crear');
$0('linea_grabar');
abrir_crear(0);
$1('inner');
$('id_guardar').value='';
ax("resetear",'');
$('mode').value='insert';<?php 
foreach($tbcampos as $tbcampA){ if($tbcampA['indicador']=='1' or $tbcampA['constante']=='1') continue; 
	if($tbcampA['tipo']=='sto'){
		?>$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload_sto('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','','null');<?php	
	 } elseif($tbcampA['tipo']=='img'){ 
		?>$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','','<?php echo $USU_IMG_DEFAULT;?>');<?php									
	 } elseif($tbcampA['tipo']=='html'){ 
	?>//	<?php echo $tbcampA['campo']?>			:  mooeditable.getContent(),<?php
	 } else { 
	?>//	$('in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;<?php
	 } 
 } ?>	
break;		
case "ec":
if($('abri_cerrar_crear')) $0('abri_cerrar_crear');
Element('div', {
'class' : 'sv',
'html' : 'cargando...',						
'id':'sv_'+id			
}).inject($('i_'+id));
if($('titulo_crear')){
$('bloque_content_crear').setStyles({'display':'block'});
ax("ec2",id);
} else {	
new Request({'url':'formulario.php?OB='+MMEE+'&ran=1<?php echo ($datos_tabla['get_id'])?'&'.$datos_tabla['get_id']:'';?>&proceso=<?php echo $Proceso;?>',  method:'get', onSuccess:function(ee) { 
$('bloque_content_crear').innerHTML=ee;
pre_crear('ax("ec2","'+id+'","'+pag+'");');
//ax("ec2",id,pag);
//setTimeout(,3500);	
} } ).send();
}
break;
case "ec2":
window.scrollTo(0,80);
if(pag=='nuevo'){
$0('titulo_editar');
$1('titulo_crear');
$1('linea_crear');
$0('linea_grabar');
$1('inner');
$('id_guardar').value='';
ax("resetear",'');
$('mode').value='insert';
$0('area_hijos');
} else {
$1('titulo_editar');
$0('titulo_crear');
$0('linea_crear');
$1('linea_grabar');
$0('inner');
$('id_guardar').value=id;
$('mode').value='update';
$1('load');
$1('area_hijos');
}							
var datos = {
v_o : MMEE,
v_d : "where <?php echo $datos_tabla['id']?>='"+id+"' ",
id:id,
f:'get_fila',
debug:'0'
};
new Element('div',{'class':'refreshing','id':'cargando_dato_ec','html':'Cargando datos'}).inject($('bloque_content_crear'),'top');
new Request({url:"ajax_sql.php", method:'get', data:datos, onSuccess:function(ee) {
	var json=eval("(" + ee + ")");<?php 
	foreach($tbcampos as $tbcampA){ if($tbcampA['indicador']=='1') continue; 
	
		if($tbcampA['constante']=='1'){			
			?>$('in_<?php echo $tbcampA['campo']?>_span').innerHTML=json.<?php echo $tbcampA['campo']?>;<?php				
		}else{
			
		if($tbcampA['tipo']=='com'){ 
			if(sizeof($tbcampA['opciones'])=='2' and 
			   strtolower($tbcampA['opciones']['0'])=='no' and 
			   str_replace("í","i",strtolower($tbcampA['opciones']['1']))=='si'){
					$tbcampA['tipo']='bit';
			}
		}
		if($tbcampA['tipo']=='img'){ 
			?>$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','',json.<?php echo $tbcampA['campo']?>_get_archivo);<?php												
		 } elseif($tbcampA['tipo']=='sto'){ 
			?>$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload_sto('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','',json.<?php echo $tbcampA['campo']?>_get_archivo);<?php
		 } elseif($tbcampA['tipo']=='fch'){  						
			?>var fechaaa=json.<?php echo $tbcampA['campo']?>;<?php
			?>if(fechaaa=='0000-00-00 00:00:00' || fechaaa==null){<?php
			?>$('in_<?php echo $tbcampA['campo']?>_a').value='';<?php
			?>$('in_<?php echo $tbcampA['campo']?>_m').value='';<?php
			?>$('in_<?php echo $tbcampA['campo']?>_d').value='';<?php
			?>$('in_<?php echo $tbcampA['campo']?>_t').value='';<?php
			?>$('in_<?php echo $tbcampA['campo']?>').value='';<?php
			?>} else {<?php
			?>$('in_<?php echo $tbcampA['campo']?>_a').value=fechaaa.substring(0,4);<?php
			?>$('in_<?php echo $tbcampA['campo']?>_m').value=fechaaa.substring(5,7);<?php
			?>$('in_<?php echo $tbcampA['campo']?>_d').value=fechaaa.substring(8,10);<?php
			?>$('in_<?php echo $tbcampA['campo']?>_t').value=fechaaa.substring(11,13);<?php
			?>$('in_<?php echo $tbcampA['campo']?>').value=fechaaa;<?php
			?>}<?php 
		} elseif($tbcampA['tipo']=='hid'){ 
			/*?>if($('<?php echo $tbcampA['campo']?>_load_combo')){<?php
			?>$('<?php echo $tbcampA['campo']?>_load_combo').setProperty('title',json.<?php echo $tbcampA['campo']?>);<?php
			?>}<?php */
			?>$('in_<?php echo $tbcampA['campo']?>').rel=json.<?php echo $tbcampA['campo']?>;<?php 							
			?>$('in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;<?php 							
		} elseif($tbcampA['tipo']=='pas'){ 
			?>$('in_<?php echo $tbcampA['campo']?>_2').value=json.<?php echo $tbcampA['campo']?>;<?php
			?>$('in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;<?php
		 } elseif($tbcampA['tipo']=='bit'){
		?>$('in_<?php echo $tbcampA['campo']?>_check').checked=(json.<?php echo $tbcampA['campo']?>=='1')?true:false;<?php
		?>$('in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;<?php
		 } elseif($tbcampA['tipo']=='html'){ 
			?>if(json.<?php echo $tbcampA['campo']?>)mooeditable_<?php echo $tbcampA['campo']?>.setContent(json.<?php echo $tbcampA['campo']?>);<?php 
		 } elseif($tbcampA['tipo']=='com'){
		if($tbcampA['radio']=='1' and is_array($tbcampA['opciones'])){
		foreach($tbcampA['opciones'] as $ooppcc=>$opcopc_a){ 
		list($opcopc,$color)=explode("|",$opcopc_a); 
		?>$('in_<?php echo $tbcampA['campo']?>_<?php echo $ooppcc;?>').checked=false;<?php
		} 
		?>if($('in_<?php echo $tbcampA['campo']?>_'+json.<?php echo $tbcampA['campo']?>)){<?php
		?>$('in_<?php echo $tbcampA['campo']?>_'+json.<?php echo $tbcampA['campo']?>).checked=true;<?php
		?>}<?php
		?>$('in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;<?php
		} else {
		?>$('in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;<?php						
		} 
		} else { 
			?>$('in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;<?php 
			if($tbcampA['constante']=='1'){
			 ?>$('in_<?php echo $tbcampA['campo']?>').setProperties({'readonly':'true','ondblclick':"javascript:this.removeProperty('readonly')"});<?php 
			} 
		} 
		if($tbcampA['load']!=''){ 
		$looop=explode("||",$tbcampA['load']);
		/* ?>cargar_combo2('<?php echo $looop[0]?>','<?php echo $looop[1]?>',json.<?php echo $tbcampA['campo']?>,'<?php echo $tb?>');<?php */
		?>load_combo('<?php echo $looop[0]?>','<?php echo $looop[1]?>',json.<?php echo $tbcampA['campo']?>);<?php
		 } 
		}
	} 
	
	?>$0('load');
	$('sv_'+id).destroy();
	$('cargando_dato_ec').destroy();
}}).send();
$0('segunda_barra_2');
if($('linea_buscador')) $0('linea_buscador');
if(pag!='nuevo'){<?php 

    if($datos_tabla['creacion_hijo']){ 
    $Hijos=explode(",",$datos_tabla['creacion_hijo']);
    foreach($Hijos as $HijoD){ 
    list($Hijo,$TipoHijo)=explode("|",$HijoD);    
    foreach($objeto_tabla as $obbb){
        if($obbb['archivo']==$Hijo){
            $Pplural=$obbb['nombre_plural'];
            foreach($obbb['campos'] as $canp){
                if($canp['foreig']=='1'){
                    $HijoCampo=$canp['campo'];
                }
            }
        }
    }
    $HHijos[]=$HijoD;
	}
	}

 foreach($HHijos as $rrr=>$HHijoYY){ 
	list($HHijo,$TipoHijo)=explode("|",$HHijoYY);			
?>render_son('<?php echo $HHijo;?>',id,true,'<?php echo $TipoHijo;?>');<?php
	} 
?>}
break;
case "guardar_completo":
Recargar='ajax';
ax("guardar_completo_interno",id);
break;
case "guardar_completo_interno":
$('cll_'+id).setStyles({'visibility':'visible'});
hide_error();
if(ax("validar")==true){
$('ed_save').value='guardando...';
$('ed_save').disabled=true;
var datos = {<?php
foreach($tbcampos as $tbcampA){ if($tbcampA['indicador']=='1' or $tbcampA['constante']=='1') continue; 
	if($tbcampA['tipo']=='sto'){ 
		?>stoupload_<?php echo $tbcampA['campo']?>	:  $v('upload_in_<?php echo $tbcampA['campo']?>'),<?php
	 } elseif($tbcampA['tipo']=='img'){ 
		?>upload_<?php echo $tbcampA['campo']?>	:  $v('upload_in_<?php echo $tbcampA['campo']?>'),<?php
	 } elseif($tbcampA['tipo']=='html'){ 
		echo $tbcampA['campo']?>:mooeditable_<?php echo $tbcampA['campo']?>.getContent(),<?php
	 } else { 
		echo $tbcampA['campo']?>:$v('in_<?php echo $tbcampA['campo']?>'),<?php
	} 
} 
if($datos_tabla['vis']!=''){ echo $datos_tabla['vis']?> : "1", <?php } 
?>v_o : MMEE,<?php
echo $datos_tabla['fed']?>			:  "now()",<?php
?>v_d : "where <?php echo $datos_tabla['id']?>='"+id+"' "<?php
?>};		
new Request({url:"ajax_sql.php?f=update&debug=0", method:'post', data:datos, onSuccess:function(ee) {
var json=eval("(" + ee + ")");
if(json.success=='1'){
if(Recargar=='ajax'){
ax("editar_completo_cancelar");
$('resaltar').value='i_'+id;
ax("<?php echo $linkRecPagina;?>");
location.href='<?php echo $SERVER['BASE'].$SERVER['URL'];?>#i_'+id;
} else if(Recargar=='sin_ajax'){
location.reload();
}
} else if(json.success=='0'){
show_error_texto(json.error);
$('in_submit').value='crear <?php echo $datos_tabla['nombre_singular']?>';
$('in_submit').disabled=false;
}
} } ).send();
}
break;
case "e":
$('cll_'+id).setStyles({'visibility':'hidden'});
//$('i_'+id).removeClass('modificador_grilla');
$('i_'+id).addClass('editar_rapido');
if($('edit_hidd').value.trim()!=id && $('edit_hidd').value.trim()!=''){	ax('e_a',$('edit_hidd').value); }
$('edit_hidd').value=id;
$0('lc_'+id);
$1('lec_'+id);<?php
			foreach($tblistado as $tbli){ if($tbli['indicador']=='1') continue; 
				if($tbli['listable']=='1' and $tbli['constante']!='1'){ 
				
						   if($tbli['tipo']=='sto'){ 
							?>$0('i_<?php echo $tbli['campo']?>_'+id);<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML=render_upload_sto('<?php echo $tb?>','<?php echo $tbli['campo']?>',id,$('txt_<?php echo $tb?>_<?php echo $tbli['campo']?>_name_'+id).value);<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php			   
						    } 
						   
						   if($tbli['tipo']=='img'){ 
							
							?>$0('i_<?php echo $tbli['campo']?>_'+id);<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML=render_upload('<?php echo $tb?>','<?php echo $tbli['campo']?>',id,$('<?php echo $tb?>_file_<?php echo $tbli['campo']?>_'+id).src);<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php
						   }
						   
						   if(in_array($tbli['tipo'],array('pas'))){ 
						
							?>var val=$('i_<?php echo $tbli['campo']?>_'+id+'_temp').value.trim();
							$('p_<?php echo $tbli['campo']?>_'+id).innerHTML="<input type='password' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"' value='"+val+"'/><br /><input type='password' style='margin-top:2px;' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"_2' value='"+val+"'/>";<?php
							
							?>$('p_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php
							?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});<?php
						   } 
						  

						   if(in_array($tbli['tipo'],array('com'))){ 
							
							?>var val=$('i_<?php echo $tbli['campo']?>_hido_'+id).value;<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML='<select  id="<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'" class="form_input" style="float:left;width:'+$('i_<?php echo $tbli['campo']?>_'+id).getStyle('width')+';" ><option></option><?php
							$opciones_select=array();
							$iti=(is_array($tbli['opciones']))?1:0;
							$opciones_select=(is_array($tbli['opciones']))?$tbli['opciones']:explode(",",$tbli['opciones']);
							foreach($opciones_select as $opcccion=>$opcion_select_a){ 
							list($opcion_select,$color)=explode("|",$opcion_select_a); 
							?><option value="<?php echo ($iti)?$opcccion:$opcion_select;?>" '+ ( ("<?php echo ($iti)?$opcccion:$opcion_select;?>"==val)?'selected':'' ) +' ><?php echo $opcion_select?></option><?php
							}
							?></select>';<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php
							?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});<?php
						
							} 

						   if(in_array($tbli['tipo'],array('hid')) and $tbli['opciones']!=''){ 
							?>var val=$('i_<?php echo $tbli['campo']?>_hido_'+id).value;<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML='<select  id="<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'" class="form_input" style="float:left;width:'+$('i_<?php echo $tbli['campo']?>_'+id).getStyle('width')+';" ><option></option><?php							
							list($primO,$tablaO,$whereO)=explode("|",$tbli['opciones']);
							list($idO,$camposO)=explode(",",$primO);
							$camposOA=array();
							$camposOA=explode(";",$camposO);						
							$oopciones=select(array_merge(array($idO),$camposOA),$tablaO,procesar_dato($whereO));
							
							foreach($oopciones as $oooo2){ 
							?><option value="<?php echo $oooo2[$idO];?>" '+ ( ("<?php echo $oooo2[$idO];?>"==val)?'selected':'' ) +' ><?php 
							//echo $oooo2[$camposOA[0]]
							foreach($camposOA as $COA){ echo $oooo2[$COA]." ";	}
							?></option><?php
							}
																					
							?></select>';<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php
							?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});<?php							
						    }
						   						   
						    if(in_array($tbli['tipo'],array('inp','yot'))){ 
						
							?>var val=$('i_<?php echo $tbli['campo']?>_'+id).innerHTML.trim().replace(/"/g,"&quot;");<?php

							?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML="<input style='float:left;width:"+$('i_<?php echo $tbli['campo']?>_'+id).getStyle('width')+";' type='text' onkeypress='if(event.keyCode==13){ ax(\"e_g\",\""+id+"\"); } if(event.keyCode==27){ ax(\"e_a\",\""+id+"\"); }' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"' value=\""+val+"\"/>";<?php        
							?>$('p_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php
							?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});<?php							
							} 

							if(in_array($tbli['tipo'],array('fch'))){ 
							
							if($tbcampA['rango']){
							list($uuno,$ddos)=explode(",",$tbcampA['rango']);
							$FromYear = date("Y",strtotime($uuno));
							$ToYear = date("Y",strtotime($ddos));										
							} else {
							$FromYear = date("Y")-99;
							$ToYear = date("Y")+1;
							}							
							
							?>var val=$('i_<?php echo $tbli['campo']?>_'+id).innerHTML.trim();<?php
							?>input_date('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id,'p_<?php echo $tbli['campo']?>_'+id,<?php echo $FromYear;?>,<?php echo $ToYear;?>,'<?php echo $tbli['time']?>');<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php																
							?>$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_d').setStyles({'clear':'none'});<?php
							?>$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_m').setStyles({'clear':'none'});<?php
							?>$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_a').setStyles({'clear':'none'});<?php
							?>$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_t').setStyles({'clear':'none'});<?php
							?>var fecha=$('<?php echo $tb?>_fchhid_<?php echo $tbli['campo']?>_'+id).value;<?php
							?>var fechaa=new Array();var fechab=new Array();<?php
							?>fechaa = fecha.split("-");fechab = fechaa[2].split(" ");<?php
							?>$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_d').value=fechab[0];<?php
							?>$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_m').value=fechaa[1];<?php
							?>$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_a').value=fechaa[0];<?php
							?>$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_t').value=fechab[1];<?php
							?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});<?php
							?>fechaChange("<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id);<?php
							} 	
							
							
							if(in_array($tbli['tipo'],array('txt'))){ 
							?>var val=$('i_<?php echo $tbli['campo']?>_'+id).innerHTML.trim();<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML="<textarea style='height:80px;width:100%;' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"' >"+val+"</textarea>";<?php        
							?>$('p_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php                      
							?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});<?php
							}	
							
							
							if(in_array($tbli['tipo'],array('html'))){
							?>var val=$('<?php echo $tb?>_htmlhid_<?php echo $tbli['campo']?>_'+id).value;<?php
							?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML="<textarea style='height:200px;background-color:#FFF;width:100%;' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"' >"+val+"</textarea>";<?php        
							?>$('p_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php
							?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});<?php
							 
							?>mooedit = $('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id).mooEditable({
								actions: '<?php echo $MEactions;?>',
								externalCSS: 'css/Editable.css',
								baseCSS: '<?php echo $MEbaseCSS;?> <?php echo $tbli['css']?>'
							});<?php
							
							
							} 																															  
							
				} 
			} ?>		
break;		
case "e_a":
$('cll_'+id).setStyles({'visibility':'visible'});
$('i_'+id).removeClass('editar_rapido');
if($('set_filas_4').getStyle('color')=='#000000'){	$('i_'+id).addClass('modificador_grilla'); 	}
$('edit_hidd').value='';
$1('lc_'+id);
$0('lec_'+id);
<?php foreach($tblistado as $tbli){ if($tbli['indicador']=='1') continue; 
	if($tbli['listable']=='1' and $tbli['constante']!='1'){ 

			   if($tbli['tipo']=='img'){                                 

				?>$1('i_<?php echo $tbli['campo']?>_'+id);<?php
				?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML='';<?php
				?>$0('p_<?php echo $tbli['campo']?>_'+id);<?php
				
			    } 
			   
			    if($tbli['tipo']=='sto'){                                  

				?>$1('i_<?php echo $tbli['campo']?>_'+id);<?php
				?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML='';<?php
				?>$0('p_<?php echo $tbli['campo']?>_'+id);<?php 
				
			    }								   
			   
			    if($tbli['tipo']=='pas'){                                  

				?>$1('i_<?php echo $tbli['campo']?>_'+id);<?php
				?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML='';<?php
				?>$0('p_<?php echo $tbli['campo']?>_'+id);<?php 
				?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php
				
				
			    } 								   
			   
			    if(
				in_array($tbli['tipo'],array('txt','inp','com','yot','fch'))
				or
				(in_array($tbli['tipo'],array('hid')) and $tbli['opciones']!='')
				){ 
			
				?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML="";<?php        
				?>$0('p_<?php echo $tbli['campo']?>_'+id);<?php                      
				?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php
				
				} 	
				
				
			   if(in_array($tbli['tipo'],array('html'))){ 
			
				?>$('p_<?php echo $tbli['campo']?>_'+id).innerHTML="";<?php        
				?>$0('p_<?php echo $tbli['campo']?>_'+id);<?php                      
				?>$('i_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});<?php
				
				} 																		
			
		
	 } 
} 

?>
break;
case "validar_editar":
var ret=true;
/*
<?php foreach($tblistado as $tbcampA){ if($tbcampA['indicador']=='1') continue; 
		if($tbcampA['listable']=='1' and $tbcampA['constante']!='1'){ 
			if($tbcampA['validacion']=='1'){ 
	
			if($tbcampA['tipo']=='sto'){ 	
				?>//if($v('upload_in_<?php echo $tbcampA['campo']?>').trim()=='' && ret){ show_error(1); ret=false; }<?php
			} elseif($tbcampA['tipo']=='img'){ 
				?>//if($v('upload_in_<?php echo $tbcampA['campo']?>').trim()=='' && ret){ show_error(1); ret=false; }<?php														
			} elseif($tbcampA['tipo']=='pas'){ 
				?>if($v('<?php echo $tb?>_text_<?php echo $tbcampA['campo']?>_'+id).trim()=='' && ret){ show_error_alert(1); ret=false; }	
				if($v('<?php echo $tb?>_text_<?php echo $tbcampA['campo']?>_'+id).trim()!=$v('<?php echo $tb?>_text_<?php echo $tbcampA['campo']?>_'+id+"_2").trim() && ret){ show_error_alert(2); ret=false; }	<?php					
			 } elseif($tbcampA['tipo']=='hid'){ 
				//echo "";
			} else { 								
				?>if($v('<?php echo $tb?>_text_<?php echo $tbcampA['campo']?>_'+id).trim()=='' && ret){ show_error_alert(1); ret=false; }<?php
			} 

		}
	} 
} ?>
*/
return ret;
break;
case "e_g":
if(ax("validar_editar",id)==true){			
Element('div', {
'class' : 'sv',
'html' : 'guardando...',						
'id':'sv_'+id			
}).inject($('i_'+id));	
var datos = {
<?php foreach($tblistado as $tbli){ if($tbli['indicador']=='1') continue; 
	if($tbli['listable']=='1' and $tbli['constante']!='1'){ 
		if(in_array($tbli['tipo'],array('html'))){
			?>'<?php echo $tbli['campo']?>'			:  mooedit.getContent(),<?php
		} elseif(in_array($tbli['tipo'],array('img'))){ 
			?>upload_<?php echo $tbli['campo']?>	:  $v('upload_in_<?php echo $tbli['campo']?>_'+id),<?php
		} elseif(in_array($tbli['tipo'],array('sto'))){ 
			?>stoupload_<?php echo $tbli['campo']?>	:  $v('upload_in_<?php echo $tbli['campo']?>_'+id),<?php
		} elseif(
			in_array($tbli['tipo'],array('txt','inp','com','yot','fch','pas','html'))
			or
		    (in_array($tbli['tipo'],array('hid')) and $tbli['opciones']!='')
			){
			?>'<?php echo $tbli['campo']?>'			:  $v('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id),<?php
		} 

	}
} 
echo $datos_tabla['fed']?>:"now()",
v_o : MMEE,
v_d : "where <?php echo $datos_tabla['id']?>='"+id+"' "
};	
new Request({url:"ajax_sql.php?f=update&debug=0", method:'post', data:datos, onSuccess:function(ee) {
var json=eval("(" + ee + ")");
if(json.success=='1'){
ax('e_a',id);
$('sv_'+id).destroy();
$('resaltar').value='i_'+id;
ax("<?php echo $linkRecPagina;?>");
<?php if($needs['img']){ ?>charge_multibox();<?php } ?>
} else if(json.success=='0'){
show_error_alert_text(json.error);
//$0('sv_'+id);
ax('e_a',id);
}
} } ).send();
}
break;		
}
}
<?php
foreach($tbcampos as $tbcampA){
	switch($tbcampA['tipo']){ 									 
		case "html": ?>var mooeditable_<?php echo $tbcampA['campo']?>;<?php	break;
	}
} ?>
precrear_loaded=0;
function pre_crear(next){
if(precrear_loaded){ if(next){ eval(next); } return; }
	
<?php						

	include("formulario_camposjs.php");

    if($datos_tabla['creacion_hijo']){ 
    $Hijos=explode(",",$datos_tabla['creacion_hijo']);
    foreach($Hijos as $HijoD){ 
    list($Hijo,$TipoHijo)=explode("|",$HijoD);    
    foreach($objeto_tabla as $obbb){
        if($obbb['archivo']==$Hijo){
            $Pplural=$obbb['nombre_plural'];
            foreach($obbb['campos'] as $canp){
                if($canp['foreig']=='1'){
                    $HijoCampo=$canp['campo'];
                }
            }
        }
    }
    $HijoValor=999999000 + rand(1,999);
    $HHijos[]=$HijoD;
    ?>render_son('<?php echo $Hijo;?>',999999000+$random(1,999),false,'<?php echo $TipoHijo;?>');<?php 
    } } 

?>				
precrear_loaded=1;

if(next){ eval(next); }

}

function load_crear(){	
$1('cargando_form');
new Request({url:'formulario.php?OB='+MMEE+'&ran=1&proceso=<?php echo $Proceso;?>&<?php echo $SERVER['PARAMS'];?>',  method:'get', onSuccess:function(ee) { 
$('bloque_content_crear').setStyles({'display':'block'});
$('bloque_content_crear').innerHTML=ee;
pre_crear();
$0('cargando_form');
} } ).send();	
}

function render_son(hijo,idparent,relo,TipoHijo){
var reloa='';
<?php if(substr($SERVER['browser'],0,2)=='IE'){ ?>
reloa = (relo)?"&rt="+$random(1,999):"";
<?php } ?>
$('tempar_'+hijo).value=$('tempar_'+hijo+'_pre').value+"|"+idparent;
$('tempar_'+hijo+'_iframe').innerHTML="<iframe frameborder='0' src='custom/"+hijo+".php?block=form"+reloa+"&tipo="+TipoHijo+"&id="+idparent+"' ></iframe>";
}

</script><?php
}
 
}
//prin(0);
if($_GET['ran']!=''){
	include("lib/compresionFinal.php");	/*para Content-Encoding*/ 
}

?>
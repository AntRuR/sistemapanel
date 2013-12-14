<?php

//prin($datos_tabla);

if( in_array($_GET['verdesarrollo'],array('1','0')) ){
	$_SESSION['verdesarrollo']=$_GET['verdesarrollo'];
	redireccionar_a($_SERVER['HTTP_REFERER']);
}

if(0){

} else {
//prin($Grupos);
//prin($SERVER);
//prin($datos_tabla['me']);

$_COOKIE[$tb.'_colap']=isset($_COOKIE[$tb.'_colap'])?$_COOKIE[$tb.'_colap']:1;

?>
<!-- INICIO AJAX -->
<input type="hidden" id="resaltar"  />
<?php
if($_GET['ran']==''){

?>
	
    <?php if($_GET['block']!='form'){?>
    
    <div class="div_bloque_cuerpo" style="position:relative;z-inde:3; background-color:#FFFFFF; margin-top:3px; 
    border-right:1px solid #<?php echo $vars['GENERAL']['BG_COLOR_3'];?>;
    border-left:2px solid #<?php echo $vars['GENERAL']['BG_COLOR_3'];?>;
    border-bottom:1px solid #<?php echo $vars['GENERAL']['BG_COLOR_3'];?>;
    "><?php 
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	//		formulario inicio 		//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	 
	if($Open){ $datos_tabla['crear']='1'; }
	?>
    <div class="bloque_titulo">

			<?php $saved[$datos_tabla['me']]['crearopen']=($saved[$datos_tabla['me']]['crearopen']=='')?1:$saved[$datos_tabla['me']]['crearopen'];?>
            <?php if(!($datos_tabla['crear']=='0' or sizeof($tblistado)=='0' )){ ?>
            <span id="abri_cerrar_crear_<?php echo $datos_tabla['me']?>">        
            <a href="#" id="abrir_crear_<?php echo $datos_tabla['me']?>"
            onclick="javascript:abrir_crear('<?php echo $datos_tabla['me']?>','1'); return false;" rel="nofollow" 
            class="linkstitu iconos_text_right ico_Abajo ico_Crear"
            style=" <?php echo ($saved[$datos_tabla['me']]['crearopen']=='1')?"display:none;":""?>"
            >crear <?php echo $datos_tabla['nombre_singular']?></a>
            
            <a href="#" id="cerrar_crear_<?php echo $datos_tabla['me']?>"
            onclick="javascript:abrir_crear('<?php echo $datos_tabla['me']?>','0'); return false;" rel="nofollow" 
            class="linkstitu iconos_text_right ico_Arriba ico_Crear"
            style=" <?php echo ($saved[$datos_tabla['me']]['crearopen']=='1')?"":"display:none;"?>"        
            >crear <?php echo $datos_tabla['nombre_singular']?></a>        
			</span>
            
			<?php 
			if($Open and ($datos_tabla['crear_pruebas']!='0') ){ ?>

            <a href="#"
            onclick="javascript:<?php echo $tbf?>_ajax('insertar_prueba_rapida',''); return false;" rel="nofollow" 
            class="linkstitu"
            id="<?php echo $tbf?>_insertar_prueba";
            style=" background-color:<?php echo $BGCOLOR_DESARROLLO;?>; float:right; color:#000000; padding:1px 5px; display:none;"
            >Crear <?php echo $datos_tabla['nombre_singular']?> de prueba</a>
            
            <script>
			window.addEvent('domready',function(){	$1("<?php echo $tbf?>_insertar_prueba");	});
			</script>            

            <?php } ?>


            <?php if(trim($datos_tabla['controles'])!=''){ echo procesar_controles_html($datos_tabla['controles']); } ?>
            
            <?php if($datos_tabla['exportar_excel']=='1'){ ?>
				<a href="exportar_excel.php?me=<?php echo $datos_tabla['me'];?>"
				 class="linkstitu  iconos_text_right ico_Excel"
				 title="Descargar Excel">Excel</a> 
			<?php } ?>                                    
            <script>
			
			function abrir_crear(nombre,set){
			
			var crearHeight=$('altura_form').value;
			$0( ( (set==1)?"abrir":"cerrar" )+"_crear_"+nombre);	
			if(set==1){	
			
				$('bloque_content_crear_'+nombre).setStyles({'height':'auto'});				
				new Fx.Morph($('bloque_crear_'+nombre),
				{duration: 'long', transition: Fx.Transitions.Quad.easeIn}
				).start({'margin-top':[crearHeight*(-1), 0]});
			
			} else {
			
				var crearChor=$('bloque_crear_'+nombre).getCoordinates();
				var crearHeight=crearChor.height + 15;
				$('altura_form').value=crearHeight;
				
				new Fx.Morph($('bloque_crear_'+nombre),
				{duration: 'long', transition: Fx.Transitions.Quad.easeIn,onComplete:function(){$('bloque_content_crear_'+nombre).setStyles({'height':'0px'});}}
				).start({'margin-top':[0, crearHeight*(-1)]});
			
			}
					
			new Request({url:"ajax_change_memory.php?mi="+nombre+"&set="+set+"&cam=crearopen&ajax=1", method:'get', onSuccess:function(ee) { 
			$1( ( (set==1)?"cerrar":"abrir" )+"_crear_"+nombre);			
			 } } ).send();
			 
			}
			
			function cargar_combo(span,sql,value){			
			new Request({url:'cargar_combo.php?obj=<?php echo $datos_tabla['me']?>&s='+sql.replace("=","")+'&s2='+value+'&camp='+span,  method:'get', onSuccess:function(ee) { 
			$(span+"_load_combo").innerHTML=ee;
			 } } ).send();
			 
			}
			
			function cargar_combo2(span,sql,value,tab){	
			var opc;
			new Request({url:'cargar_combo.php?obj=<?php echo $datos_tabla['me']?>&s='+sql.replace("=","")+'&s2='+value+'&camp='+span,  method:'get', onSuccess:function(ee) { 
			$(span+"_load_combo").innerHTML=ee;
			opc = $(span+"_load_combo").getProperty('title'); 
			$(span+"_load_combo").removeProperty('title');
			$(tab+'_in_'+span).value=opc;
			 } } ).send();			 
			 }			
			
			</script>
			<?php } ?>
            
            <a name="titulo" ><?php echo $tbtitulo?></a>
        
			
		
    </div>
    
    
    <div id="bloque_content_crear_<?php echo $datos_tabla['me']?>" style="overflow: hidden; position:relative; " >
    <div class="bloque_pregunta" style=" padding-bottom:10px; height:auto; margin-top:0px; width:100%; float:left; <?php echo ($saved[$datos_tabla['me']]['crearopen']=='0')?"visibility:hidden;":"";
	/*
	if($necesita_mooeditable){
	echo ($datos_tabla['crear']=='0')?"visibility:hidden;": ( ($saved[$datos_tabla['me']]['crearopen']=='0')?"visibility:hidden;":"" ) ;
	} else {
	echo ($datos_tabla['crear']=='0')?"display:none;": ( ($saved[$datos_tabla['me']]['crearopen']=='0')?"display:none;":"" ) 	;
	}
	*/
	?>" id="bloque_crear_<?php echo $datos_tabla['me']?>" >

		<style>
		.truc { display:block; }	
        <?php if($datos_tabla['crear_label']!=''){ ?>
        .formulario label { width:<?php echo $datos_tabla['crear_label']?>; }
		.modificador bloque_listado_dato .nombre_campo { width:<?php echo $datos_tabla['crear_label']?>; }
		
        <?php } ?>
        <?php if($datos_tabla['crear_txt']!=''){ ?>
        .formulario .form_input { width:<?php echo $datos_tabla['crear_txt']?>; }
        <?php } ?>	        
		<?php if($datos_tabla['altura_listado']!=''){ ?>
        .bloque_listado .bloque_dato { height:<?php echo $datos_tabla['altura_listado']?>; }
        <?php } ?>	
		<?php $porr_linea=($datos_tabla['por_linea']=='')?'97':((ceil(100/$datos_tabla['por_linea']))-2); ?>
		
		<?php if($datos_tabla['por_linea']!=''){ ?>
        .bloque_listado { float:left; clear:none; width:<?php echo $porr_linea;?>%; overflow:hidden; height:auto; padding-bottom:10px; margin-right:1%; margin-bottom:10px; }
        <?php } ?>
		

    	</style>
        <div id="inner_formulario" <?php if($datos_tabla['crear']=='0'){ ?> style='opacity:0;' <?php } ?>>
		<?php include("formulario.php");?>        
        </div>        
        </div>
        
    </div>
    <?php } else { 
	
	$_COOKIE[$tb.'_colap']=0;
	
	?>
	<style>
	#linea_buscador { display:none; } 
	#segunda_barra_2 { float:left; width:48%; clear:none; #margin-top:10px; margin-top:0px; }
	.bloque_listado { width:99%;#width:95%; }
	.inner_listado { overflow:auto; height:310px;#height:290px; position:relative; background-color:#F7F7F7; float:left; width:48%; }	
	.formulario label { padding-left:0px; }
	.nohay { text-align:center; font-family:Arial; padding:10px 0px; width:100%; color:#666666; font-size:16px;  }
	.segunda_barra { 
	background-color:#FFF; color:#000; border:0; margin-top:10px; 
	}
	body { background:#FFF; }
	h1.titulo_formulario { display:none; }
	.contenido_principal { border:0; }
	#segunda_barra_3 { display:none;}
	.form_boton_1 { background-color:#DDD; color:#000; margin:10px 0 10px 0px; padding-top:2px; padding-bottom:2px; border:1px solid #666; position:relative; } 
	.formulario { #padding-left:10px; }
	<?php if($_GET['tipo']=='listado'){ ?>
    #div_allcontent { width:100%; }
	<?php } else { ?>
    #div_allcontent { width:660px; }
	#inner_formulario { width:50%; float:left; }
	
	<?php } ?>
	
    </style>
    <div id="bloque_crear_<?php echo $datos_tabla['me']?>" >
        <div id="inner_formulario" style=' <?php if($_GET['tipo']=='listado'){ echo 'display:none;'; } if($datos_tabla['crear']=='0'){ echo 'opacity:0;'; } ?>' >
            <?php include("formulario.php");?>        
        </div>
    </div>
    <?php } ?>
    <input type="hidden" id="altura_form"  />
    <?php if($_GET['block']!='form'){ ?>
	<script>
	window.addEvent('domready',function(){
	var crearChor=$('bloque_crear_<?php echo $datos_tabla['me']?>').getCoordinates();
	var crearHeight=crearChor.height;
	$('bloque_crear_<?php echo $datos_tabla['me']?>').alt=crearHeight+'px';
	$('altura_form').value=crearHeight;
	
    <?php echo ($datos_tabla['crear']=='0')?"
	\$('inner_formulario').setStyles({'opacity':'1'});	
	\$('bloque_crear_".$datos_tabla['me']."').setStyles({'visibility':'visible','margin-top':'-'+crearHeight+'px'});
	\$('bloque_content_crear_".$datos_tabla['me']."').setStyles({'height':'0px'});	
	": ( ($saved[$datos_tabla['me']]['crearopen']=='0')?"
	\$('bloque_crear_".$datos_tabla['me']."').setStyles({'visibility':'visible','margin-top':'-'+crearHeight+'px'});
	\$('bloque_content_crear_".$datos_tabla['me']."').setStyles({'height':'0px'});	
	":"" ) ?>
	
	});	
	</script>	
    <?php } ?>
    
	<?php 
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	//		formulario fin 		//////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
	?>
    
    <div class="segunda_barra" id="segunda_barra_2">
    
	<?php if(sizeof($tblistado)!='0'){ ?>
    
    <b style="float:left; text-align:left; width:50%;" id="inner_span_num_<?php echo $tb?>" >
	    
    </b>  
    <b style="float:left; text-align:right; width:49%;" id="inner_span_tren_<?php echo $tb?>" >
	   
    </b>

    <?php } ?>  

    </div>
            
                  
    <div 
    class="inner_listado"
    id="inner_<?php echo $tbf?>"
    style=" width:99%; <?php if($_GET['block']=='form' and $_GET['tipo']!='listado'){ ?> width:50%; float:left; <?php } ?> "
    ><?php 

		///// ZONA AJAX INICIO  ////

		//////////////////////////////////////////////////////////////////////////////////////////////////////////
		//		listado inicio	//////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////
					
		} 	


		if($datos_tabla['filtros']!=''){
            $htmlfil = '<div class="blo_filtros">';
            $htmlfil.= "<a $selesele href='".$DIR_CUSTOM.$datos_tabla['archivo'].".php'>".$datos_tabla['nombre_plural']."</a><b>:</b>";
			$fils=explode(";",$datos_tabla['filtros']);
            foreach($fils as $fil){
                list($label,$filt,$ordf)=explode("|",trim($fil));
				$selesele='';
				if($label==$_GET['filtro']){
					$FilTro=$filt;
					$FilTro_l=$label;
					$FilTro_o=$ordf;					
					$selesele='class="selected"';					
				}
                $htmlfil.= "<a $selesele href='".$DIR_CUSTOM.$datos_tabla['archivo'].".php?filtro=".$label."'>".$label."</a>";
            }
            $htmlfil.= '</div>';	
        } 
        
		?>
        
        <input type="hidden" id="<?php echo $tbf;?>_pagina" value="<?php echo ($_GET['pag']=='')?"1":$_GET['pag'];?>"  />
        <?php

		echo "<div style='font-size:0px;'>&nbsp;</div>";
	    if(sizeof($tblistado)!='0'){ 

		if($FilTro!=''){
		
			$busqueda_query = " and ".$FilTro;
			$linkPagina = "pagina_filtro";
			$linkRecPagina = "recargar_filtro";
			$vvvalos = $FilTro_l;
				
		} elseif($_GET['buscar']!=''){
		
			$busqueda_query = search_query($datos_tabla['fulltext'],$datos_tabla['like'],$_GET['buscar']);
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
			
		$pagina_items=paginacionnumerada(
								array(
									'separador'=>''
									,'porpag'=>$datos_tabla['por_pagina']
									,'anterior'=>'&laquo;'
									,'siguiente'=>'&raquo;'
									,'enlace'=>"#"
									,'onclick'=>$tbf."_ajax(\"". $linkPagina ."\",\"". $vvvalos ."\",PAG);return false;"
									/*,'onclick':'go_page'*/
									,'tren_limite'=>'10'
								),
								$tbquery,
								$tbl,
								"where 1 $busqueda_query ".$datos_tabla['where_id']." 
								order by ". ( ($FilTro_o=='')?'':$FilTro_o."," ). ( ($datos_tabla['order_by']=='')? (  $datos_tabla['id']." ". (($datos_tabla['orden']=='1')?"desc":"asc") ):$datos_tabla['order_by'] )
								,
								0);
											
		$lineas	 = $pagina_items['filas'];	
		$paginas_linea = $pagina_items['tren'];
		$anterior_linea = $pagina_items['anterior'];
		$siguiente_linea = $pagina_items['siguiente'];
		
		$total_linea = $pagina_items['total'];
		$desde_linea = $pagina_items['desde'];
		$hasta_linea = $pagina_items['hasta'];
					
		//$lineas=select($tbquery,$tbl,"where 1 ".$datos_tabla['where_id']." order by ".$datos_tabla['id']." ". (($datos_tabla['orden']=='1')?"desc":"asc") ,0);
		
		
		?>
        
        <input type="hidden" id="edit_hidd_<?php echo $tb?>"  />
        <div style="position:relative;height:auto;float:left;width:100%;">
        <ul id="ordenable" style="min-height:200px;" >
        <div class="refreshing" id="<?php echo $tbf?>_refresh" style="display:none;">cargando......</div>
       
	
		<?php if(sizeof($lineas)!=0 or $_GET['buscar']!=''){ ?>
        
        <div style="height:auto;padding:0;clear:left;float:left;width:100%;">
                
	   	<a class="braz <?php if($_COOKIE[$tb.'_colap']=='2'){?>brasselected<?php }?>" rel="nofollow" href="#" onclick="javascript:set_filas('<?php echo $tb?>','<?php echo $tbf?>','2');return false;" 
        title="Filas Expandidas"
        id="set_filas_2">&Xi;</a> 
	   	<a class="braz <?php if($_COOKIE[$tb.'_colap']=='1'){?>brasselected<?php }?>" rel="nofollow" href="#" onclick="javascript:set_filas('<?php echo $tb?>','<?php echo $tbf?>','1');return false;" 
        title="Filas en Bloque"
        id="set_filas_1">=</a>                                
	   	<a class="braz <?php if($_COOKIE[$tb.'_colap']=='3'){?>brasselected<?php }?>" rel="nofollow" href="#" onclick="javascript:set_filas('<?php echo $tb?>','<?php echo $tbf?>','3');return false;" 
        title="Filas Colapsadas"
        id="set_filas_3">_</a>         


		<?php
		
		//if($_GET['filtro']==''){
		
    if(sizeof($datos_tabla['fulltext'])>0 or sizeof($datos_tabla['like'])>0){

    ?>
    <form action="<?php echo $SERVER['BASE'].str_replace("_vista","",$SERVER['ARCHIVO']);?>" method="get"
    onsubmit="if($v('buscar')=='buscar <?php echo $datos_tabla['nombre_singular'];?>'){ return false; }"    
    >
 		<div id="linea_buscador">
            <input type="text" style=" border:2px solid #<?php echo $vars['GENERAL']['BG_COLOR_3'];?>; font-family:Arial; width:218px; font-size:17px; color:<?php echo ($_GET['buscar']!='')?"#000":"#999";?>; margin:1px; float:left; "
            onfocus="if(this.value=='buscar <?php echo $datos_tabla['nombre_singular'];?>'){ this.value=''; this.style.color='#000'; } " 
            onblur="if(this.value==''){ this.style.color='#999'; this.value='buscar <?php echo $datos_tabla['nombre_singular'];?>'; } "
            <?php /* onkeyup=" if(event.keyCode=='13' && this.value!=''){ <?php echo $tbf?>_ajax('buscar',this.value,'buscar <?php echo $datos_tabla['nombre_singular'];?>'); } " */ ?> 
            value="<?php echo ($_GET['buscar']!='')?$_GET['buscar']:"buscar ".$datos_tabla['nombre_singular'];?>" autocomplete="off" 
            id="buscar" name="buscar"
              />
            <input type="submit" value="buscar" 
            <?php /*onclick="<?php echo $tbf?>_ajax('buscar',$v('buscar'),'buscar <?php echo $datos_tabla['nombre_singular'];?>');" */ ?>
            style="padding:1px 4px 2px;float:left;"  />
            <span id="buscar_span"></span>
    	</div> 
    </form>    
    <?php } ?>	
    
		<?php  } 
		
		echo $htmlfil; 
		
		 ?>

        <?php if(sizeof($lineas)==0){ ?>

	        <div class="nohay" style=" padding-top:80px; height:auto;">aún no hay <?php echo $datos_tabla['nombre_plural']?> </div>

		<?php } ?>	
                          
        </div>


        		
		<?php //} 
		
		
		//$lineas=array($lineas[0]);
		
		$numero_de_campo_en_lista=sizeof($tblistado)-4;
		
		$necesita_mooeditable=0;
		foreach($tblistado as $tbli){
		if($tbli['tipo']=='html'){ $necesita_mooeditable=1; }
		}
			            				
		$datos_tabla['edicion_completa']=($datos_tabla['edicion_completa']!='')?$datos_tabla['edicion_completa']:( (($necesita_mooeditable) or($numero_de_campo_en_lista>$limite_campos_en_lista))?1:0 );		
		
		$datos_tabla['edicion_rapida']=($datos_tabla['edicion_rapida']!='')?$datos_tabla['edicion_rapida']:( (($necesita_mooeditable) or($numero_de_campo_en_lista>$limite_campos_en_lista))?0:1 );			
						
        foreach($lineas as $tete=>$linea){ 
		
		$datos_tabla['edicion_completa']=($_GET['block']=='form' and $_GET['tipo']=='listado')?0:$datos_tabla['edicion_completa'];
						
			?>
            <?php if($datos_tabla['por_linea']!=''){ if($tete%$datos_tabla['por_linea']==0){ echo ($tete!=0)?"</div>":""; echo "<div style='clear:left;'>"; } } ?>
            <li 
            alt="<?php echo $linea[$datos_tabla['id']]?>" 
            class="bloque_listado <?php 
			if($_COOKIE[$tb.'_colap']=='1'){ echo ""; } 
			elseif($_COOKIE[$tb.'_colap']=='2'){ echo "modificador"; } 
			elseif($_COOKIE[$tb.'_colap']=='3'){ echo "modificador_linea"; } 
			?>" 
            id="<?php echo $tb?>_item_<?php echo $linea[$datos_tabla['id']]?>" 
            style=" "  >

				<a class="indiceesquina"><?php echo $linea[$datos_tabla['id']]?></a>



                    <div class="linea_controles" id="linea_controles_<?php echo $linea[$datos_tabla['id']]?>">
                    <?php if($datos_tabla['eliminar']=='1'){ ?>
                    
                        <a href="#" id="<?php echo $tb?>_bu_del_<?php echo $linea[$datos_tabla['id']]?>" onclick="javascript:<?php echo $tbf?>_ajax('eliminar','<?php echo $linea[$datos_tabla['id']]?>'); return false;" rel="nofollow"  class="buton_link_1 iconos_text_right ico_Eliminar zipico" 
                        title="eliminar <?php echo $datos_tabla['nombre_singular'];?>" ><!--eliminar--></a>	
                        
                    <?php } ?>                       
                                       
                    <?php if($datos_tabla['vis']!='' and $datos_tabla['visibilidad']!='0' and !$datos_tabla['eliminar']=='0'){ ?>
                    
                        <a href="#" id="<?php echo $tb?>_bu_vis_<?php echo $linea[$datos_tabla['id']]?>" onclick="javascript:<?php echo $tbf?>_ajax('visible','<?php echo $linea[$datos_tabla['id']]?>'); return false;" rel="nofollow" style="display:<?php echo ($linea[$datos_tabla['vis']]==1)?"none":""?>" class="buton_link_1 iconos_text_right ico_Mostrar zipico" title="habilitar <?php echo $datos_tabla['nombre_singular'];?>" ></a>
                        
                        <a href="#" id="<?php echo $tb?>_bu_hid_<?php echo $linea[$datos_tabla['id']]?>" onclick="javascript:<?php echo $tbf?>_ajax('ocultar','<?php echo $linea[$datos_tabla['id']]?>'); return false;" rel="nofollow"  style="display:<?php echo ($linea[$datos_tabla['vis']]==0)?"none":""?>;" class="buton_link_1 iconos_text_right ico_Ocultar zipico" title="deshabilitar <?php echo $datos_tabla['nombre_singular'];?>" ></a>	
                        
                    <?php } ?>
                    
					<?php if($datos_tabla['editar']=='1'){ ?>

                        <?php 
                        if($datos_tabla['edicion_completa']=='1'){ 
                        ?>
                            <a href="#" id="<?php echo $tb?>_bu_edit_<?php echo $linea[$datos_tabla['id']]?>" 
                            onclick="javascript:<?php echo $tbf?>_ajax('editar_completo','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
                            rel="nofollow"  class="buton_link_1 iconos_text_right ico_EditarComplete zipico"  
                            title="editar <?php echo $datos_tabla['nombre_singular'];?> en pantalla completa" ></a>	
                                                
                        <?php } ?>    
                                            
						<?php 
                        if($datos_tabla['edicion_rapida']=='1'){ 
                        ?>                    
                            <a href="#" id="<?php echo $tb?>_bu_edit_<?php echo $linea[$datos_tabla['id']]?>" 
                            onclick="javascript:<?php echo $tbf?>_ajax('editar','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
                            rel="nofollow"  class="buton_link_1 iconos_text_right ico_Editar zipico" 
                            style="padding-left:0px; padding-right:20px; background-position:top right;"                            
                            title="editar <?php echo $datos_tabla['nombre_singular'];?>" >&laquo;</a>	
                            
                        <?php } ?>    
                                            
            
                    
             		<?php } ?> 
                    </div>    
                            
					<?php if($datos_tabla['editar']=='1'){ ?>
                    <div id="linea_editar_controles_<?php echo $linea[$datos_tabla['id']]?>" class="linea_editar_controles" style="display:none;">
                        <a href="#" id="<?php echo $tb?>_bu_edit_cancelar_<?php echo $linea[$datos_tabla['id']]?>" onclick="javascript:<?php echo $tbf?>_ajax('editar_cancelar','<?php echo $linea[$datos_tabla['id']]?>'); return false;" rel="nofollow"  class="buton_link_1 iconos_text_right ico_Cancelar zipico" style="color:#FF0000;" title="cancelar edición" >cancelar</a>                                            
						<a href="#" id="<?php echo $tb?>_bu_edit_guardar_<?php echo $linea[$datos_tabla['id']]?>" onclick="javascript:<?php echo $tbf?>_ajax('editar_guardar','<?php echo $linea[$datos_tabla['id']]?>'); return false;" rel="nofollow"  class="buton_link_1 iconos_text_right ico_Guardar zipico" style="color:#FF0000;" title="guardar cambios" >guardar</a>                        
                    </div>
                    <?php } ?>
                    
                                
            <a class="expanlink" id="<?php echo $tb?>_expanlink_<?php echo $linea[$datos_tabla['id']]?>"
            style=" <?php echo ($_COOKIE[$tb.'_colap']=='2' or $_COOKIE[$tb.'_colap']=='1')?"display:none;":""; ?>" 
             onclick="javascript:<?php echo $tbf?>_ajax('set_fila_1','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
             rel="nofollow" href="#" title="expandir"
             ></a>
             
            <a class="colaplink" id="<?php echo $tb?>_colaplink_<?php echo $linea[$datos_tabla['id']]?>"
            style=" <?php echo ($_COOKIE[$tb.'_colap']=='3')?"display:none;":""; ?>  "
             onclick="javascript:<?php echo $tbf?>_ajax('set_fila_3','<?php echo $linea[$datos_tabla['id']]?>'); return false;" 
             rel="nofollow" href="#" title="colapsar"
             ></a>             
            
            <a name="lineax_<?php echo $linea[$datos_tabla['id']]?>" style="font-size:1px;display:block; height:1px;">&nbsp;</a>
                     <div class="saving"  id="<?php echo $tbf?>_savi_<?php echo $linea[$datos_tabla['id']]?>" style="display:none;" >guardando...</div>
                     
                     <div class="saving"  id="<?php echo $tbf?>_elim_<?php echo $linea[$datos_tabla['id']]?>" style="display:none;" >eliminando...</div>
                    <?php
                    echo '<div 
                    id="linea_de_datos_'.$linea[$datos_tabla['id']].'" 
                    class="linea_de_datos ';
					if($datos_tabla['vis']!=''){ echo ($linea[$datos_tabla['vis']]==1)?"":"ocultar"; } 
					echo '" >';
					
					echo '<div class="truc"></div>';
					
					foreach($tblistado as $tbli){ 
				
						
                        if($tbli['listable']=='1'){ 	
						
							$SuprimirLabel=(strtolower($tbli['label'])=='nombre' 
											or strtolower($tbli['label'])==strtolower($datos_tabla['nombre_singular'])
											or $tbli['label']=='Título'
											or strtolower($tbli['label'])=='foto'
											or strtolower($tbli['label'])=='fecha'
											or strtolower($tbli['label'])=='vista'
											or strtolower($tbli['label'])=='email'
											)?1:0;
											
							$nomodificar=(
											strtolower($tbli['label'])=='fecha'
											or strtolower($tbli['label'])=='email'
											)?1:0;																	
						
						
							$tbli['controles']=($tbli['control']=='0')?'':procesar_controles_html($tbli['controles']);
					
							$tbli['width']=($tbli['width']=='')?"width:200px;":"width:".$tbli['width'].";";
                            echo '<div class="bloque_listado_dato" >';
 							?>
								<?php if($tbli['tipo']=='img'){ ?>    
                                    <?php echo ($SuprimirLabel)?"<span style='float:left;width:10px;'>&nbsp;</span>":'<b class="nombre_campo">'.$tbli['label'].':</b>';?>                                                              
                                   <span class="bloque_dato" style=' padding-left:0;  
                                   <?php if($linea[$tbli['campo']]!=''){ ?>
                                   border:1px solid #ccc; 
                                   <?php } else { ?>
                                   border:0px; 
                                   <?php } ?>
                                   text-align:center; <?php echo ($tbli['style']=='')?"":str_replace(",",";",$tbli['style'])?>' id="<?php echo $tb?>_item_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" >
                                   <?php if($linea[$tbli['campo']]!=''){ ?>                                   
                                   <?php $cec=0; if(($tbli['enlace']=='lightbox') or !($tbli['enlace']) ){ $cec=1; ?>
                                   <a style="float:none;margin:0;text-align:center;" href="<?php echo get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']]);?>" rel="[images],noDesc" class="mb" ><?php } elseif($tbli['enlace']) { $cec=1; ?>
                                   <a 
                                   href="<?php echo str_replace(array("[id]","[enlace]"),array($linea[$datos_tabla['id']],$linea[$tbli['campo']]),$tbli['enlace'])?>"
                                    ><?php } ?>
                                   <img  id="<?php echo $tb?>_file_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" <?php echo dimensionar_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']],$tbli['tamano_listado']);?> />
                                   <?php if($cec){?></a><?php } ?>          
                                   <?php } else { ?>
                                   <img id="<?php echo $tb?>_file_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>"
                                   style="height:1px; width:1px;"
								   src="<?php echo $USU_IMG_DEFAULT;?>" 
                                   />
                                   <?php } ?>
                                   </span>
                                   
                                    <div class="inputt" id="<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" 
                                    style="display:none; padding-right:0px;
                                    <?php //echo $tbli['width']; ?>"></div>

                                    <?php if($tbli['controles']){
									echo "<div class='controles_dato'>";
                                    echo str_replace("[id]",$linea[$datos_tabla['id']],$tbli['controles']);
									echo "</div>";
                                    } ?>   
                                                                       
								<?php } ?>

								<?php if($tbli['tipo']=='sto'){ ?>    
                                    <?php echo ($SuprimirLabel)?"<span style='float:left;width:10px;'>&nbsp;</span>":'<b class="nombre_campo">'.$tbli['label'].':</b>';?>                                                              
                                   <span class="bloque_dato" style=' padding-left:10px;
                                   <?php echo ($tbli['style']=='')?"":str_replace(",",";",$tbli['style'])?>' id="<?php echo $tb?>_item_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" >
                                   <?php if($linea[$tbli['campo']]!=''){ ?>
                                                                    
                                   <?php
								   $cec=0; 
								   if(($tbli['enlace']=='lightbox') or !($tbli['enlace']) ){ 
								   $cec=1; ?>
                                   <a style="float:none;margin:0;text-align:left;" href="<?php echo get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']]);?>" rel="[images],noDesc" class="mb" >
								   <?php } elseif($tbli['enlace']) { 
								   $cec=1; ?>
                                   <a href="<?php echo str_replace(array("[id]","[enlace]"),array($linea[$datos_tabla['id']],$linea[$tbli['campo']]),$tbli['enlace'])?>">
								   <?php } ?>
                                   <?php echo $linea[$tbli['campo']]; ?>
                                   
                                   <?php if($cec){?></a><?php } ?>          
                                   
                                   <?php } else { ?>
                                   ---
                                   <?php } ?>
                                   </span>

                                   <input type='hidden' value='' id="txt_<?php echo $tb?>_<?php echo $tbli['campo']?>_name_<?php echo $linea[$datos_tabla['id']]?>" />
                                   
                                    <div class="inputt" id="<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" 
									 style=' padding-left:10px;display:none; <?php echo ($tbli['style']=='')?"":str_replace(",",";",$tbli['style'])?>'></div>

                                    <?php if($tbli['controles']){
									echo "<div class='controles_dato'>";
                                    echo str_replace("[id]",$linea[$datos_tabla['id']],$tbli['controles']);
									echo "</div>";
                                    } ?>   
                                                                       
								<?php } ?>                                
                                
								<?php if($tbli['tipo']=='pas'){ ?>                                  
                                   <b class="nombre_campo"> <?php echo $tbli['label']?>:</b>
                                   <span class="bloque_dato" 
                                   style=' <?php echo $tbli['width']; ?> 
                                   ' id="<?php echo $tb?>_item_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" >
                                   <?php
								   	$passs='';
									for($iu=0;$iu<strlen($linea[$tbli['campo']]);$iu++){
										$passs.="*";
									}
									echo ($_COOKIE['admin']=='1')?$linea[$tbli['campo']]:$passs; 
									?>
                                   </span>
                                   <input type="hidden" value="<?php echo $linea[$tbli['campo']]?>" id="<?php echo $tb?>_item_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>_temp" />
                                   <div class="inputt" id="<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" style="display:none; padding-right:4px; <?php echo $tbli['width']; ?>"></div>  
								<?php } ?>
                                                                    
                                <?php 
								if(
								in_array($tbli['tipo'],array('txt','inp','com','yot','fch','fcr','html'))
								or
								($tbli['tipo']=='hid' and ($tbli['combo']=='1' or $tbli['listable']=='1') )
								){ 							
								
								?>
                                
                                    <?php echo ($SuprimirLabel)?"":'<b class="nombre_campo">'.$tbli['label'].':</b>';?>

									<?php 
									
                                    if($tbli['extra']!='')
									echo "<span style='float:left;margin:0 3px; font-size:11px; '>".procesar_dato($tbli['extra'],$linea[$datos_tabla['id']])."</span>"; 
									if($tbli['tipo']=='yot')
									echo "<img style='float:left;' src='http://i4.ytimg.com/vi/".$linea[$tbli['campo']]."/default.jpg' />";									
									
									?>
                                    
									<?php if($tbli['enlace']){  
									?>
                                    <a class="bloque_dato <?php echo ($SuprimirLabel and !$nomodificar)?"mainnombre":""; ?>" 
                                    style=' <?php echo $tbli['width']; ?> '
                                     id="<?php echo $tb?>_item_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>"  href="<?php echo str_replace(array("[id]","[enlace]"),array($linea[$datos_tabla['id']],$linea[$tbli['campo']]),$tbli['enlace'])?>"><?php } else { ?>
                                    <div 
                                    class="bloque_dato <?php echo ($SuprimirLabel and !$nomodificar)?"mainnombre":""; ?>" 
                                    style=' <?php echo $tbli['width']; 
									echo ($tbli['tipo']=='txt')?'max-height:95px;overflow:hidden;':'';
									?> ' 
                                    id="<?php echo $tb?>_item_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" >
                                    <?php } ?>

                                        <?php 
										switch($tbli['tipo']){
										case "fch":case "fcr":
										echo fecha_formato($linea[$tbli['campo']],($tbli['formato'])?$tbli['formato']:0)."<input type='hidden' value='".fecha_formato($linea[$tbli['campo']],5)."' id='".$tb."_fchhid_".$tbli['campo']."_".$linea[$datos_tabla['id']]."' >";
										break;
										
										case "html":
										echo substr(strip_tags($linea[$tbli['campo']]),0,300)."...<textarea style='display:none;' id='".$tb."_htmlhid_".$tbli['campo']."_".$linea[$datos_tabla['id']]."'  >".$linea[$tbli['campo']]."</textarea>";										
										break;
										case "hid":
										$opo1=explode("|",$tbli['opciones']);
										$opo0=explode(",",$opo1[0]);
										echo select_dato($opo0[1],$opo1[1],"where ".$opo0[0]."='".$linea[$tbli['campo']]."'");
										break;
										case "com":
										if(is_array($tbli['opciones'])){
										echo $tbli['opciones'][$linea[$tbli['campo']]];	
										} else {
										echo $linea[$tbli['campo']];
										}									
										break;										
										default:
										echo $linea[$tbli['campo']];										
										break;										
										}
										?>    
                                        
									<?php if($tbli['enlace']){?>
                                    </a>
                                    <?php } else { ?>
                                    </div>
                                    <?php } ?>                                                                 
                                        
                                    <div class="inputt" id="<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_<?php echo $linea[$datos_tabla['id']]?>" style="display:none; padding-right:4px; <?php echo $tbli['width']; ?>"></div>
                                    
                                    <?php 
									if($tbli['controles']){
									echo "<div class='controles_dato'>";
                                    echo str_replace("[id]",$linea[$datos_tabla['id']],procesar_dato($tbli['controles'],$linea[$datos_tabla['id']]));
									echo "</div>";
									}
                                    ?>   
                                                                        
                                <?php } 
                    		 echo '</div>';

							 } 
                    	}             
                    
					echo '</div>';
					
                    ?> 


                
            </li>	        
		<?php 
		//////////////////////////////////////////////////////////////////////////////////////////////////////////
		//		listado fin 	//////////////////////////////////////////////////////////////////////////////////
		//////////////////////////////////////////////////////////////////////////////////////////////////////////
		?> 
        <?php } ?>  
        <?php if($datos_tabla['por_linea']!=''){ echo "</div>"; } ?>

        </ul>  
        </div>
   
        <?php } ?>       
		<input type="hidden" id="inner_hidden_num_<?php echo $tb?>" value='<span id="span_num_<?php echo $tb?>" ><?php echo $total_linea; ?></span> <?php echo ($total_linea==1)?$datos_tabla['nombre_singular']:$datos_tabla['nombre_plural']?> <span style="font-weight:normal;"><?php echo ($total_linea==sizeof($lineas))?"":"(desde $desde_linea hasta $hasta_linea)"; ?></span>' />
		<input type="hidden" id="inner_hidden_num2_<?php echo $tb?>" value='<span id="span_num2_<?php echo $tb?>" ><?php echo $total_linea; ?></span> <?php echo ($total_linea==1)?$datos_tabla['nombre_singular']:$datos_tabla['nombre_plural']?> <span style="font-weight:normal;"><?php echo ($total_linea==sizeof($lineas))?"":"(desde $desde_linea hasta $hasta_linea)"; ?></span>' />        
		<textarea id="inner_hidden_tren_<?php echo $tb?>" style="display:none;"><?php echo $anterior_linea.$paginas_linea.$siguiente_linea;?></textarea>        
		<script>
		
		window.addEvent('domready',function(){
	        <?php echo $tbf?>_ajax('actualizar_total',this.value);
		});
		
        </script> 
                    
  
    <?php /**/ ?>
    <?php if(strpos($_SERVER['SCRIPT_NAME'], "login.php")===false){ ?>

    <div class="segunda_barra"  id="segunda_barra_3" style="clear:left;" >
    
		<?php if(sizeof($tblistado)!='0'){ ?>
            <b style="float:left; text-align:left; width:50%;" id="inner_span_num2_<?php echo $tb?>" ></b>
            <b style="float:left; text-align:right; width:49%;" id="inner_span_tren2_<?php echo $tb?>" ></b>
        <?php } ?>  
    
	</div>    

    
    <?php } else { ?> 
    <style>
	#div_allcontent { width:680px; margin-top:5%; }
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
    <?php } ?>
	<?php /**/ ?>
	
	</div>    

    <!-- FIN AJAX -->
  
 
<?php if($_GET['ran']==''){  ?>
    
</div> 


<script>
//window.addEvent('domready',function() { 
	//smooooooth scrolling enabled
//	new SmoothScroll({ duration:700 }, window); 
//});
/* Javascript de upload de imagen */


function eliminar_img_foto(tab,camp)
{
	$1('image_'+tab+'_'+camp+'_controles1');
	$0('image_'+tab+'_'+camp+'_copiando');
	$1('image_'+tab+'_'+camp+'_default');
	$('image_'+tab+'_'+camp+'_img').src='<?php echo $USU_IMG_DEFAULT;?>';
	$('form_'+tab+'_'+camp).reset();
	$0('image_'+tab+'_'+camp+'_img_cerrar');
	$('upload_'+tab+'_in_'+camp).value='eliminar';
	
}

function reset_img_foto(tab,camp)
{
	$1('image_'+tab+'_'+camp+'_controles1');
	$0('image_'+tab+'_'+camp+'_copiando');
	$1('image_'+tab+'_'+camp+'_default');
	$('image_'+tab+'_'+camp+'_img').src=$('image_'+tab+'_'+camp+'_temp').value;
	$('form_'+tab+'_'+camp).reset();
	$0('image_'+tab+'_'+camp+'_img_cerrar');
	$('upload_'+tab+'_in_'+camp).value='';
	
}

function upload(tab,camp)
{
	$1('image_'+tab+'_'+camp+'_controles1');
	$1('image_'+tab+'_'+camp+'_copiando');
	$0('image_'+tab+'_'+camp+'_default');
	$('form_'+tab+'_'+camp).submit();
	$('error_'+tab+'_'+camp).innerHTML='';

}

function upload_sto(tab,camp)
{
	$1('image_'+tab+'_'+camp+'_controles1');
	$1('image_'+tab+'_'+camp+'_copiando');
	$('form_'+tab+'_'+camp).submit();
	$('error_'+tab+'_'+camp).innerHTML='';

}
    
function upload_err(m,tab,camp)
{
	$1('image_'+tab+'_'+camp+'_controles1');
	$0('image_'+tab+'_'+camp+'_copiando');
	$1('image_'+tab+'_'+camp+'_default');
	$('error_'+tab+'_'+camp).innerHTML=m;
	$('form_'+tab+'_'+camp).reset();
}

function upload_terminar_sto(i,tab,camp,name)
{
	$0('image_'+tab+'_'+camp+'_copiando');
	$('error_'+tab+'_'+camp).innerHTML='';
	$('upload_'+tab+'_in_'+camp).value=i;
	$('txt_'+tab+'_'+camp+'_name').innerHTML=name;
	$0('image_'+tab+'_'+camp+'_controles1');
	$1('image_'+tab+'_'+camp+'_img_cerrar');
}

function upload_terminar(i,tab,camp,resized)
{
	//alert('image_'+tab+'_'+camp+'_copiando');
	$0('image_'+tab+'_'+camp+'_copiando');
	//alert('image_'+tab+'_'+camp+'_default'); 
	$1('image_'+tab+'_'+camp+'_default');	
	//alert('error_'+tab+'_'+camp); 
	$('error_'+tab+'_'+camp).innerHTML='';	
	//alert('image_'+tab+'_'+camp+'_img');
	 $('image_'+tab+'_'+camp+'_img').src=i;
	if(resized!=null){
	if(resized==true){
	//alert('image_'+tab+'_'+camp+'_img'); 
	$('image_'+tab+'_'+camp+'_img').width='100';
	}
	}
	$('upload_'+tab+'_in_'+camp).value=i;	//alert(6);
	$0('image_'+tab+'_'+camp+'_controles1');	//alert(7);
	$1('image_'+tab+'_'+camp+'_img_cerrar');	//alert(8);
}
	var styleinfi='<?php
	if($SERVER['browser']=='Firefox'){
	echo "margin-left:-124px;";
	} elseif($SERVER['browser']=='Opera'){
	echo "margin-left:-154px;";
	} elseif($SERVER['browser']=='IE7'){
	echo "margin-left:-150px;";
	} else{
	echo "margin-left:-150px;";
	}	
	?>';
function render_upload(tb,campo,id,img_default){
	var id2=(id=='')?'':'_'+id;
	var html='<div style="width:auto;float:left;position:relative; ">';
	if(img_default!='<?php echo $USU_IMG_DEFAULT;?>'){
	html+='<a style="position:absolute;display:block;top:3px;right:10px;font-weight:bold;color:red;background-color:#FFF;padding:0 1px;" href="#" onclick="eliminar_img_foto(\''+tb+'\',\''+campo+id2+'\');return false;" rel="nofollow" title="eliminar imágen">X</a>';
	}
	html+='<input type="hidden" id="upload_'+tb+'_in_'+campo+id2+'" />'+
	'<input type="hidden" id="image_'+tb+'_'+campo+id2+'_temp"  value="'+img_default+'" />'+
	'<form style="float:left;height:auto;" id="form_'+tb+'_'+campo+id2+'" action="script_upload.php?obj=<?php echo $datos_tabla['me']?>&tb='+tb+'&camp='+campo+id2+'&objcam='+campo+'" enctype="multipart/form-data" method="post" target="iframe_upload" >'+
		'<table id="image_'+tb+'_'+campo+id2+'_default" cellpadding="0" border="0" cellspacing="0"  class="upload_table1">'+
		'<tr><td align="center" valign="middle" class="upload_table2">'+
			'<img src="'+img_default+'" id="image_'+tb+'_'+campo+id2+'_img" class="upload_img_default"/>'+
		'</td></tr></table>'+
		'<img src="img/cerrarfoto.gif" id="image_'+tb+'_'+campo+id2+'_img_cerrar" class="upload_img_cerrar" '+
		 'style="display:none;" onclick="reset_img_foto(\''+tb+'\',\''+campo+id2+'\');" title="cerrar"/>'+
		'<span  class="upload_copiando" style=" display:none;" id="image_'+tb+'_'+campo+id2+'_copiando">'+
			'<span class="upload_preview">vista previa</span><br />'+
			'<img src="img/load.gif" />'+
		'</span>'+
		'<div class="upload_controles1" id="image_'+tb+'_'+campo+id2+'_controles1">'+
			'<div id="error_'+tb+'_'+campo+id2+'" class="upload_error"></div>'+
			'<div class="input_file_content">'+
			'<input style="'+styleinfi+'" type="file" name="v_file_'+tb+'_'+campo+id2+'"   '+
			'onchange="if(this.value!=\'\') upload(\''+tb+'\',\''+campo+id2+'\'); " '+
			'class="upload_input_file"  autocomplete="off" />'+
			'</div>'+						
		'</div>'+
	'</form>'+
	'<iframe width="300" height="300" frameborder="0" style="position: absolute; display:none;" name="iframe_upload" id="iframe_upload"></iframe>';
	html+='</div>'
	return html;
	
}

function render_upload_sto(tb,campo,id,name){
	var id2=(id=='')?'':'_'+id;
	var html='<div style="width:auto;float:left;position:relative;">';
	if(name!=''){
	html+='<a style="position:absolute;display:block;top:3px;right:10px;font-weight:bold;color:red;background-color:#FFF;padding:0 1px;" href="#" onclick="eliminar_img_foto(\''+tb+'\',\''+campo+id2+'\');return false;" rel="nofollow" title="eliminar">X</a>';
	}
	html+='<input type="hidden" id="upload_'+tb+'_in_'+campo+id2+'" />'+
	'<span id="txt_'+tb+'_'+campo+id2+'_name"  value="'+name+'" ></span>'+
	'<form style="float:left;height:auto;" id="form_'+tb+'_'+campo+id2+'" action="script_upload_sto.php?obj=<?php echo $datos_tabla['me']?>&tb='+tb+'&camp='+campo+id2+'&objcam='+campo+'" enctype="multipart/form-data" method="post" target="iframe_upload" >';
		/*html+='<table id="image_'+tb+'_'+campo+id2+'_default" cellpadding="0" border="0" cellspacing="0"  class="upload_table1">'+
		'<tr><td align="center" valign="middle" class="upload_table2">'+
			'<img src="'+img_default+'" id="image_'+tb+'_'+campo+id2+'_img" class="upload_img_default"/>'+
		'</td></tr></table>';*/
		html+='<img src="img/cerrarfoto.gif" id="image_'+tb+'_'+campo+id2+'_img_cerrar" class="upload_img_cerrar" '+
		 'style="display:none;" onclick="reset_img_foto(\''+tb+'\',\''+campo+id2+'\');" title="cerrar"/>'+
		'<span  class="upload_copiando2" style=" display:none;" id="image_'+tb+'_'+campo+id2+'_copiando">'+
			'<img src="img/load2.gif" />'+
		'</span>'+
		'<span class="upload_controles1" id="image_'+tb+'_'+campo+id2+'_controles1">'+
			'<span class="input_file_content">'+
			'<input style="margin-top:0px;'+styleinfi+'" type="file" name="v_file_'+tb+'_'+campo+id2+'"   '+
			'onchange="if(this.value!=\'\') upload_sto(\''+tb+'\',\''+campo+id2+'\'); " '+
			'class="upload_input_file"  autocomplete="off" />'+
			'<span id="error_'+tb+'_'+campo+id2+'" class="upload_error"></span>'+
			'</span>'+						
		'</span>'+
	'</form>'+
	'<iframe width="300" height="300" frameborder="0" style="position: absolute; display:none;" name="iframe_upload" id="iframe_upload"></iframe>';
	html+='</div>'
	return html;
	
}
								
 /* Fin de Javascript de upload de imagen */
 
	var errores=[];
	errores[1]="los campos con * son obligatorios";
	errores[2]="no coinciden las contraseñas";
	errores[3]="datos de login incorrectos";
	function show_error(a){
	
		$('error_creacion').innerHTML=errores[a];
	
	}
	
	function show_error_texto(txt){
	
		$('error_creacion').innerHTML=txt;
	
	}	
	
	function show_error_alert(a){
	
		alert(errores[a]);
	
	}
	
	function show_error_alert_text(text){
	
		alert(text);
	
	}	
		
	function hide_error(){
	
		$('error_creacion').innerHTML='<span style="color:#000000;">los campos con * son obligatorios</span>';
	
	}
	
	var Loren_ipsum='<?php echo $LOREN_IPSUM;?>';
	var Recargar='ajax';
	var mooedit;
	var FORMULARIO_ABIERTO;
	<?php $datos_tabla['expandir_vertical']='1'; ?>
    function <?php echo $tbf?>_ajax(accion,id,pag){
		
		var tbl = "<?php echo $tbl?>";
        switch(accion){
		case "set_fila_3":
		//$("<?php echo $tb?>_item_"+id).setStyles({'background-color':'#fff','height':prev_Height,'position':'relative'}); 
		$("<?php echo $tb?>_expanlink_"+id).setStyles({'display':''}); 
		$("<?php echo $tb?>_colaplink_"+id).setStyles({'display':'none'}); 	
				
		<?php if($datos_tabla['expandir_vertical']=='1') { ?>
		$('<?php echo $tb?>_item_'+id).removeClass('modificador'); 
		$('<?php echo $tb?>_item_'+id).removeClass('modificador'); 		
		$('<?php echo $tb?>_item_'+id).addClass('modificador_linea'); 	
		<?php } ?>
						
		break;
		case "set_fila_2":
		//$("<?php echo $tb?>_item_"+id).setStyles({'visibility':'visible','opacity':'1','background-color':'#FDFDFD','height':'18px','position':'relative'}); 
		$("<?php echo $tb?>_expanlink_"+id).setStyles({'display':'none'}); 
		$("<?php echo $tb?>_colaplink_"+id).setStyles({'display':''}); 

		<?php if($datos_tabla['expandir_vertical']=='1') { ?>
		$('<?php echo $tb?>_item_'+id).removeClass('modificador'); 
		$('<?php echo $tb?>_item_'+id).removeClass('modificador_linea'); 		
		$('<?php echo $tb?>_item_'+id).addClass('modificador'); 
		<?php } ?>	
				
		break;	
		case "set_fila_1":
		//$("<?php echo $tb?>_item_"+id).setStyles({'visibility':'visible','opacity':'1','background-color':'#FDFDFD','height':'18px','position':'relative'}); 
		$("<?php echo $tb?>_expanlink_"+id).setStyles({'display':'none'}); 
		$("<?php echo $tb?>_colaplink_"+id).setStyles({'display':''}); 

		<?php if($datos_tabla['expandir_vertical']=='1') { ?>
		$('<?php echo $tb?>_item_'+id).removeClass('modificador'); 
		$('<?php echo $tb?>_item_'+id).removeClass('modificador_linea'); 		
		<?php } ?>	
				
		break;		
		case "actualizar_total":
			
			if($('inner_span_num_<?php echo $tb?>'))
			$('inner_span_num_<?php echo $tb?>').innerHTML=$('inner_hidden_num_<?php echo $tb?>').value;
			if($('inner_span_tren_<?php echo $tb?>'))
			$('inner_span_tren_<?php echo $tb?>').innerHTML=$('inner_hidden_tren_<?php echo $tb?>').value;	
			
			if($('inner_span_num2_<?php echo $tb?>'))
			$('inner_span_num2_<?php echo $tb?>').innerHTML=$('inner_hidden_num2_<?php echo $tb?>').value;
			if($('inner_span_tren2_<?php echo $tb?>'))
			$('inner_span_tren2_<?php echo $tb?>').innerHTML=$('inner_hidden_tren_<?php echo $tb?>').value;	
			
			charge_multibox();
					
		break;
		case "recargar":
			$1('<?php echo $tbf?>_refresh');
			new Request({url:"<?php echo $DIR_CUSTOM?><?php echo $tbf?>_vista.php?pag="+$v('<?php echo $tbf;?>_pagina')+"&ran="+Math.random()+"<?php echo $datos_tabla['get_id']?>",  method:'get', onSuccess:function(ee) { 
			$('inner_<?php echo $tbf?>').innerHTML=ee; 
			if($('resaltar').value!=''){
				$($('resaltar').value).highlight('#FF0', '#FFF');				
				var resal = $('resaltar').value;

				$($('resaltar').value).setStyles({'border-top':'1px solid #333','border-bottom':'1px solid #333','border-left':'1px solid #333','border-right':'1px solid #333'});
				setTimeout("\$('"+resal+"').setStyles({'border-top':'1px dashed #999','border-bottom':'1px dashed #fff','border-left':'1px solid #fff','border-right':'1px solid #fff'});",8000);

				$('resaltar').value='';
			}
			<?php echo $tbf?>_ajax('actualizar_total',this.value); 
			$0('<?php echo $tbf?>_refresh'); 
			} } ).send();
		break;	
		case "recargar_buscar":
			$1('<?php echo $tbf?>_refresh');
			new Request({url:"<?php echo $DIR_CUSTOM?><?php echo $tbf?>_vista.php?buscar=<?php echo $_GET['buscar'];?>&pag="+$v('<?php echo $tbf;?>_pagina')+"&ran="+Math.random()+"<?php echo $datos_tabla['get_id']?>",  method:'get', onSuccess:function(ee) { 
			$('inner_<?php echo $tbf?>').innerHTML=ee; 
			if($('resaltar').value!=''){
				$($('resaltar').value).highlight('#FF0', '#FFF');				
				var resal = $('resaltar').value;

				$($('resaltar').value).setStyles({'border-top':'1px solid #333','border-bottom':'1px solid #333','border-left':'1px solid #333','border-right':'1px solid #333'});
				setTimeout("\$('"+resal+"').setStyles({'border-top':'1px dashed #999','border-bottom':'1px dashed #fff','border-left':'1px solid #fff','border-right':'1px solid #fff'});",8000);

				$('resaltar').value='';
			}
			<?php echo $tbf?>_ajax('actualizar_total',this.value); 
			$0('<?php echo $tbf?>_refresh'); 
			} } ).send();
		break;			
		case "recargar_filtro":
			$1('<?php echo $tbf?>_refresh');
			new Request({url:"<?php echo $DIR_CUSTOM?><?php echo $tbf?>_vista.php?filtro=<?php echo $_GET['filtro'];?>&pag="+$v('<?php echo $tbf;?>_pagina')+"&ran="+Math.random()+"<?php echo $datos_tabla['get_id']?>",  method:'get', onSuccess:function(ee) { 
			$('inner_<?php echo $tbf?>').innerHTML=ee; 
			if($('resaltar').value!=''){
				$($('resaltar').value).highlight('#FF0', '#FFF');				
				var resal = $('resaltar').value;

				$($('resaltar').value).setStyles({'border-top':'1px solid #333','border-bottom':'1px solid #333','border-left':'1px solid #333','border-right':'1px solid #333'});
				setTimeout("\$('"+resal+"').setStyles({'border-top':'1px dashed #999','border-bottom':'1px dashed #fff','border-left':'1px solid #fff','border-right':'1px solid #fff'});",8000);

				$('resaltar').value='';
			}
			<?php echo $tbf?>_ajax('actualizar_total',this.value); 
			$0('<?php echo $tbf?>_refresh'); 
			} } ).send();
		break;			
		case "pagina":
			$1('<?php echo $tbf?>_refresh');
			new Request({url:"<?php echo $DIR_CUSTOM?><?php echo $tbf?>_vista.php?pag="+pag+"&ran="+Math.random()+"<?php echo $datos_tabla['get_id']?>", method:'get', onSuccess:function(ee) { $('inner_<?php echo $tbf?>').innerHTML=ee; <?php echo $tbf?>_ajax('actualizar_total',this.value); $0('<?php echo $tbf?>_refresh'); } } ).send();
		break;
		case "pagina_buscar":
			$1('<?php echo $tbf?>_refresh');
			new Request({url:"<?php echo $DIR_CUSTOM?><?php echo $tbf?>_vista.php?buscar="+id+"&pag="+pag+"&ran="+Math.random()+"<?php echo $datos_tabla['get_id']?>", method:'get', onSuccess:function(ee) { $('inner_<?php echo $tbf?>').innerHTML=ee; <?php echo $tbf?>_ajax('actualizar_total',this.value); $0('<?php echo $tbf?>_refresh'); } } ).send();
		break;
		case "pagina_filtro":
			$1('<?php echo $tbf?>_refresh');
			new Request({url:"<?php echo $DIR_CUSTOM?><?php echo $tbf?>_vista.php?filtro="+id+"&pag="+pag+"&ran="+Math.random()+"<?php echo $datos_tabla['get_id']?>", method:'get', onSuccess:function(ee) { $('inner_<?php echo $tbf?>').innerHTML=ee; <?php echo $tbf?>_ajax('actualizar_total',this.value); $0('<?php echo $tbf?>_refresh'); } } ).send();
		break;					
		case "buscar":
			if( (id.trim()=='')||(id.trim()==pag) ){ return; }
			$('buscar_span').innerHTML='<div class="refreshing" style="position:relative;text-align:left; padding-left:5px;float:left;width:auto;">buscando....</div>';
			new Request({url:"<?php echo $DIR_CUSTOM?><?php echo $tbf?>_vista.php?buscar="+id+"&ran="+Math.random()+"<?php echo $datos_tabla['get_id']?>", method:'get', onSuccess:function(ee) {			 
			 $('inner_<?php echo $tbf?>').innerHTML=ee; 
			 <?php echo $tbf?>_ajax('actualizar_total',this.value);
			 $('buscar_span').innerHTML='<a href="" onclick=\'javascript:$("buscar_span").innerHTML="";<?php echo $tbf?>_ajax("pagina","",1);return false;\' >volver</a>';
			 } } ).send();
		break;				
        case "validar":
				var ret=true;
            	<?php foreach($tbcampos as $tbcampA){ ?>
					<?php	if($tbcampA['validacion']=='1'){ ?>
						<?php if($tbcampA['tipo']=='img'){ ?>
							if($v('upload_<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').trim()==''){ show_error(1); ret=false; }
						<?php } elseif($tbcampA['tipo']=='sto'){ ?>
							if($v('upload_<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').trim()==''){ show_error(1); ret=false; }
						<?php } elseif($tbcampA['tipo']=='pas'){ ?>	
							if($v('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').trim()==''){ show_error(1); ret=false; }	
							if($v('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').trim()!=$v('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_2').trim()){ show_error(2); ret=false; }
						<?php } else { ?>	
							if($v('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').trim()==''){ show_error(1); ret=false; }
						<?php } ?>
					<?php } ?>
				<?php } ?>
				return ret;
        break;			
        case "resetear":
				<?php foreach($tbcampos as $tbcampA){ 
					if($tbcampA['constante']=='1'){	?> $('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').disabled=false; <?php } ?>
					<?php 
					switch($tbcampA['tipo']){
					case "img": ?>
					reset_img_foto('<?php echo $tb?>','<?php echo $tbcampA['campo']?>');					
					<?php break;
					case "sto": ?>
					reset_img_foto_sto('<?php echo $tb?>','<?php echo $tbcampA['campo']?>');					
					<?php break;					
					case "fch": ?>
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_a').value='';
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_m').value='';
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_d').value='';
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='';
					<?php break;
					case "pas": ?>
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';										
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_2').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';															
					<?php
					break;
					case "hid": 
					if($tbcampA['combo']=='1'){ ?>
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='';
					<?php }
					break;
					case "html": ?>
					mooeditable_<?php echo $tbcampA['campo']?>.setContent('');
					<?php
					break;					
					
					case "com": 
					if($tbcampA['radio']=='1' and is_array($tbcampA['opciones']) ){
					foreach($tbcampA['opciones'] as $ooppcc=>$opcopc){ ?>
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_<?php echo $ooppcc;?>').checked=false;
					<?php } ?>
					
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';										
					
					<?php
					} else { ?>
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';										
					<?php }	
					break;				
					
					default: ?>
					$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo ($tbcampA['valor']=='')?'':procesar_dato($tbcampA['valor'])?>';										
					<?php
					break;
					} ?>
				<?php } ?>
				
				<?php foreach($HHijos as $HHijoYY){ 
					list($HHijo,$TipoHijo)=explode("|",$HHijoYY);
					?>
		            render_son('<?php echo $HHijo;?>',999999000+$random(1,999),true,'<?php echo $TipoHijo;?>');//alert('r');
				<?php } ?>	
												
				$('<?php echo $tb?>_in_submit').value='Crear <?php echo $datos_tabla['nombre_singular']?>'; 
				$('<?php echo $tb?>_in_submit').disabled=false; 
				$('<?php echo $tb?>_ed_save').value='Guardar <?php echo $datos_tabla['nombre_singular']?>'; 
				$('bloque_crear_<?php echo $datos_tabla['me']?>').setStyles({'opacity':'1'});
				$('<?php echo $tb?>_ed_save').disabled=false; 								
        break;
        case "insertar_prueba":

				var rann=Math.floor(100000*Math.random() + 1);
            	<?php foreach($tbcampos as $tbcampA){ ?>
						<?php if($tbcampA['tipo']=='com'){	
                        $opciones_select=(is_array($tbcampA['opciones']))?array_keys($tbcampA['opciones']):explode(",",$tbcampA['opciones']);
						shuffle($opciones_select);
						?>
						$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo $opciones_select[0];?>';
						<?php } elseif($tbcampA['tipo']=='img'){
						
								$IMASS=file("lib/fotos_prueba/". ( ($datos_tabla['archivo_pruebas']!='')?$datos_tabla['archivo_pruebas']:$vars['GENERAL']['fotos_de_prueba']) );
								foreach($IMASS as $imm){
									if(trim($imm)!=''){
										$IMAGENES_PRUEBA[]=trim($imm);
									}
								}			
											
							shuffle($IMAGENES_PRUEBA); ?>
							upload_terminar('<?php echo $IMAGENES_PRUEBA[0];?>','<?php echo $tb?>','<?php echo $tbcampA['campo']?>',true);
						<?php } elseif($tbcampA['tipo']=='pas'){ ?>	
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='prueba';						
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_2').value='prueba';
						<?php } elseif($tbcampA['tipo']=='hid'){ ?>	
							//
						<?php } elseif($tbcampA['tipo']=='txt'){ ?>	
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo ucfirst($tbcampA['campo'])." ".ucfirst($datos_tabla['nombre_singular']);?> '+rann+" "+Loren_ipsum;
						<?php } elseif($tbcampA['tipo']=='fch'){ ?>	
							var pdia=Math.floor(28*Math.random() + 1);
							pdia=(pdia<10)?"0"+pdia:pdia;
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo date("Y");?>-<?php echo date("m");?>-'+pdia+' 00:00:00';
						<?php } else { ?>
						
							<?php if($tbcampA['variable']=='float'){ ?>
								$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=rann;
							<?php } else { ?>	
							
								<?php if(!(strpos($tbcampA['campo'],"email")===false)){ ?>							
									$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo strtolower($tbcampA['campo'])?>'+rann+'@prueba.com';
								<?php } elseif(!(strpos($tbcampA['campo'],"precio")===false) ){ ?> 
									$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=rann;
								<?php } elseif(!(strpos($tbcampA['campo'],"codigo")===false) or !(strpos($tbcampA['campo'],"registro")===false) ){ ?> 
									$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='0000000'+rann;
								<?php } elseif(!(strpos($tbcampA['campo'],"telefono")===false)){ ?> 
									$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='99999'+rann;
								<?php } elseif(!(strpos($tbcampA['campo'],"edad")===false)){ ?> 	
									$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo rand(20,49);?>';
								<?php } else { ?>	
									$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo ucfirst($tbcampA['campo'])." ".ucfirst($datos_tabla['nombre_singular']);?> '+rann+' '+Loren_ipsum;							
								<?php } ?>
							
							<?php } ?>
						
						<?php } ?>
				<?php } ?>		
				
        break;	
        case "insertar_prueba_rapida":
			if(Recargar=='ajax'){
				Recargar='sin_ajax';
				
				<?php echo $tbf?>_ajax("insertar_prueba");	
				
				$('<?php echo $tbf?>_insertar_prueba').innerHTML='creando.................................................';
				<?php echo $tbf?>_ajax("insertar_interno");			
			}	
        break;					
		case "insertar":
			Recargar='ajax';
			<?php echo $tbf?>_ajax("insertar_interno");
		break;
        case "insertar_interno":
				hide_error();
				if(<?php echo $tbf?>_ajax("validar")==true){
					$('bloque_crear_<?php echo $datos_tabla['me']?>').setStyles({'opacity':'0.4'});				
					$('<?php echo $tb?>_in_submit').value='creando...';
					$('<?php echo $tb?>_in_submit').disabled=true;
					var datos = {
					
								<?php foreach($tbcampos as $tbcampA){ ?>
									<?php if($tbcampA['tipo']=='sto'){ ?>
										upload_<?php echo $tbcampA['campo']?>	:  $v('upload_<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>'),
									<?php } elseif($tbcampA['tipo']=='img'){ ?>
										upload_<?php echo $tbcampA['campo']?>	:  $v('upload_<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>'),
									<?php } elseif($tbcampA['tipo']=='html'){ ?>
										<?php echo $tbcampA['campo']?>			:  mooeditable_<?php echo $tbcampA['campo']?>.getContent(),
									<?php } else { ?>
										<?php echo $tbcampA['campo']?>			:  $v('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>'),
									<?php } ?>
								<?php } ?>
								<?php echo $datos_tabla['fcr']?>			:  "now()",
								<?php if($datos_tabla['vis']!=''){ echo $datos_tabla['vis']?> : "1", <?php } ?>
								<?php foreach($HHijos as $HHijo){ 
									list($HHijo,$TipoHijo)=explode("|",$HHijo);								
								?>
										tempar_<?php echo $HHijo;?>			:  $v('tempar_<?php echo $HHijo;?>'),
								<?php } ?>									
								v_o:'<?php echo $datos_tabla['me']?>'
								
								};
				
					new Request({url:"ajax_sql.php?f=insert&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
						
						var json=eval("(" + ee + ")");
						if(json.success=='1'){
						
							if(Recargar=='ajax'){
								<?php echo $tbf?>_ajax("resetear"); 
								<?php echo $tbf?>_ajax("<?php echo $linkRecPagina;?>");
							} else if(Recargar=='sin_ajax'){
								location.reload();
							}
						
						} else if(json.success=='0'){
							
							show_error_texto(json.error);
							$('<?php echo $tb?>_in_submit').value='crear <?php echo $datos_tabla['nombre_singular']?>';
							$('<?php echo $tb?>_in_submit').disabled=false;						
							
						}
						
					  } } ).send();				
				}
        break;	
        case "login":
				hide_error();
				if(<?php echo $tbf?>_ajax("validar")==true){
				$('<?php echo $tb?>_in_submit').value='Entrando...';
       	 		$('<?php echo $tb?>_in_submit').disabled=true;
                var datos = {
							<?php foreach($tbcampos as $tbcampA){ ?>
									<?php echo $tbcampA['campo']?>			:  $v('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>'),
							<?php } ?>
							
							v_o:'<?php echo $datos_tabla['me']?>'
							
                            };
            
                new Request({url:"ajax_sql.php?f=login&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
	
					if(ee!=''){ 
						location.href='index.php'; 
					} else { 
						show_error(3); 
						$('<?php echo $tb?>_in_submit').disabled=false;
						$('<?php echo $tb?>_in_submit').value='Entrar';					
					}
				
				} } ).send();				
				}
        break;				
        case "eliminar":
		
				if(confirm('¿Está seguro que desea eliminar este registro?')){
					$1('<?php echo $tbf?>_elim_'+id);				
					var datos = {
								v_o:'<?php echo $datos_tabla['me']?>',
								v_d :  "where <?php echo $datos_tabla['id']?>='"+id+"' "
								};
				
					new Request({url:"ajax_sql.php?f=delete&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
									$0('<?php echo $tb?>_item_'+id); 
									$0('<?php echo $tbf?>_elim_'+id);
									
									$('span_num_<?php echo $tb?>').innerHTML=$('span_num_<?php echo $tb?>').innerHTML -  1;
									$('span_num2_<?php echo $tb?>').innerHTML=$('span_num2_<?php echo $tb?>').innerHTML -  1;
									
									} } ).send();				
					
        		}
		break;
        case "visible":
                var datos = {
                            '<?php echo $datos_tabla['vis']?>':'1',
							v_o:'<?php echo $datos_tabla['me']?>',
                            v_d :  "where <?php echo $datos_tabla['id']?>='"+id+"' "
                            };
                new Request({url:"ajax_sql.php?f=update&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
						$0('<?php echo $tb?>_bu_vis_'+id); 
						$1('<?php echo $tb?>_bu_hid_'+id); 
						$('linea_de_datos_'+id).removeClass('ocultar'); 
					} } ).send();					
        break;			
        case "ocultar":
                var datos = {
                            '<?php echo $datos_tabla['vis']?>':'0',
							v_o:'<?php echo $datos_tabla['me']?>',
                            v_d :  "where <?php echo $datos_tabla['id']?>='"+id+"' "
                            };
                new Request({url:"ajax_sql.php?f=update&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
						$1('<?php echo $tb?>_bu_vis_'+id); 
						$0('<?php echo $tb?>_bu_hid_'+id); 
						$('linea_de_datos_'+id).addClass('ocultar'); 
					} } ).send();					
        break;					
		case "editar_completo_cancelar":
				
				
				$1('segunda_barra_2');
				if($('linea_buscador'))	$1('linea_buscador');
									
				$('error_creacion').innerHTML='<span style="color:#000000;">los campos con * son obligatorios</span>';
				$0('titulo_editar_<?php echo $datos_tabla['me']?>');
				$1('titulo_crear_<?php echo $datos_tabla['me']?>');
				if($('abri_cerrar_crear_<?php echo $datos_tabla['me']?>'))	$1('abri_cerrar_crear_<?php echo $datos_tabla['me']?>');
				
				$1('linea_crear');
				$0('linea_grabar');

				if(!FORMULARIO_ABIERTO){
				var crearHeight=$('altura_form').value;
				$('bloque_content_crear_<?php echo $datos_tabla['me']?>').setStyles({'height':'0px'});
				$('bloque_crear_<?php echo $datos_tabla['me']?>').setStyles({'margin-top':'-'+crearHeight+'px'});
				}
				
				$1('inner_<?php echo $tbf?>');					
				$('<?php echo $tb?>_id_guardar').value='';
				<?php echo $tbf?>_ajax("resetear",'');
				$('<?php echo $tb?>_mode').value='insert';
				<?php foreach($tbcampos as $tbcampA){ ?>
					<?php if($tbcampA['tipo']=='sto'){ ?>
						$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload_sto('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','','null');	
					<?php } elseif($tbcampA['tipo']=='img'){ ?>
						$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','','<?php echo $USU_IMG_DEFAULT;?>');									
					<?php } elseif($tbcampA['tipo']=='html'){ ?>
					//	<?php echo $tbcampA['campo']?>			:  mooeditable.getContent(),
					<?php } else { ?>
					//	$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;
					<?php } ?>
				<?php } ?>	
										
		break;		
		case "editar_completo":
				
				window.scrollTo(0,186);	
				$1('titulo_editar_<?php echo $datos_tabla['me']?>');				
				$0('titulo_crear_<?php echo $datos_tabla['me']?>');				
				if($('abri_cerrar_crear_<?php echo $datos_tabla['me']?>')){
					$0('abri_cerrar_crear_<?php echo $datos_tabla['me']?>');
				}
				$0('linea_crear');
				$1('linea_grabar');	
								
				FORMULARIO_ABIERTO=($("bloque_content_crear_<?php echo $datos_tabla['me']?>").style.height=='0px')?0:1;
				if(!FORMULARIO_ABIERTO){
				
				var crearChor=$('bloque_crear_<?php echo $datos_tabla['me']?>').getCoordinates();
				var crearHeight=crearChor.height + 15;
				$('altura_form').value=crearHeight;
				
				$('bloque_content_crear_<?php echo $datos_tabla['me']?>').setStyles({'height':'auto'});
				
				new Fx.Morph($('bloque_crear_<?php echo $datos_tabla['me']?>'),{duration: 'long', transition: Fx.Transitions.Sine.easeOut}).start({'margin-top':[crearHeight*(-1), 0]});
				
				} 
				
				$0('inner_<?php echo $tbf?>');					
				$('<?php echo $tb?>_id_guardar').value=id;
				$('<?php echo $tb?>_mode').value='update';
				$1('<?php echo $tbf?>_load');
																
				var datos = {
							v_o:'<?php echo $datos_tabla['me']?>',
							v_d :  "where <?php echo $datos_tabla['id']?>='"+id+"' ",
							id:id,
							f:'get_fila',
							debug:'0'
							};
				
				new Request({url:"ajax_sql.php", method:'get', data:datos, onSuccess:function(ee) { 
															
					var json=eval("(" + ee + ")");
					<?php foreach($tbcampos as $tbcampA){ ?>

						<?php if($tbcampA['tipo']=='img'){ ?>
							$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','',json.<?php echo $tbcampA['campo']?>_get_archivo);												
						<?php } elseif($tbcampA['tipo']=='sto'){ ?>
							$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','',json.<?php echo $tbcampA['campo']?>_get_archivo);
						<?php } elseif($tbcampA['tipo']=='fch'){ ?> 						
							var fechaaa=json.<?php echo $tbcampA['campo']?>;
							if(fechaaa=='0000-00-00 00:00:00' || fechaaa==null){
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_a').value=''
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_m').value=''
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_d').value=''
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='';							
							} else {
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_a').value=fechaaa.substring(0,4)
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_m').value=fechaaa.substring(5,7)
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_d').value=fechaaa.substring(8,10)
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=fechaaa;
							}
						<?php } elseif($tbcampA['tipo']=='hid'){ ?>
							if($('<?php echo $tbcampA['campo']?>_load_combo')){
							$('<?php echo $tbcampA['campo']?>_load_combo').setProperty('title',json.<?php echo $tbcampA['campo']?>);
							}
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;							
						<?php } elseif($tbcampA['tipo']=='pas'){ ?>
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_2').value=json.<?php echo $tbcampA['campo']?>;
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;
						<?php } elseif($tbcampA['tipo']=='html'){ ?>
							mooeditable_<?php echo $tbcampA['campo']?>.setContent(json.<?php echo $tbcampA['campo']?>);
							//	<?php echo $tbcampA['campo']?>			:  mooeditable.getContent(),
						<?php } elseif($tbcampA['tipo']=='com'){
						if($tbcampA['radio']=='1' and is_array($tbcampA['opciones'])){
						foreach($tbcampA['opciones'] as $ooppcc=>$opcopc){ ?>
						$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_<?php echo $ooppcc;?>').checked=false;
						<?php } 
						?>
						if($('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_'+json.<?php echo $tbcampA['campo']?>)){
						$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_'+json.<?php echo $tbcampA['campo']?>).checked=true;
						}
						$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;
						<?php } else { ?>
						$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;						
						<?php } ?>
						<?php } else { ?>
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=json.<?php echo $tbcampA['campo']?>;
							<?php if($tbcampA['constante']=='1'){ ?>
							$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').disabled=true;
							<?php } ?>							
						<?php } ?>
						
						<?php if($tbcampA['load']!=''){ 
						$looop=explode("||",$tbcampA['load']);
						?>
						cargar_combo2('<?php echo $looop[0]?>','<?php echo $looop[1]?>',json.<?php echo $tbcampA['campo']?>,'<?php echo $tb?>');
						<?php } ?>
												
					<?php } ?>
					
					$0('<?php echo $tbf?>_load');
													
				}}).send();		
				
				$0('segunda_barra_2');

				if($('linea_buscador')) $0('linea_buscador');	

				<?php foreach($HHijos as $rrr=>$HHijoYY){ 
					list($HHijo,$TipoHijo)=explode("|",$HHijoYY);			
				?>
		            render_son('<?php echo $HHijo;?>',id,true,'<?php echo $TipoHijo;?>');
				<?php } ?>	 
		
		break;	
		case "guardar_completo":
			Recargar='ajax';
			<?php echo $tbf?>_ajax("guardar_completo_interno",id);
		break;		
        case "guardar_completo_interno":
		
				$('<?php echo $tb?>_colaplink_'+id).setStyles({'visibility':'visible'});
				
				hide_error();
				if(<?php echo $tbf?>_ajax("validar")==true){
					$('<?php echo $tb?>_ed_save').value='guardando...';
					$('<?php echo $tb?>_ed_save').disabled=true;
					var datos = {
					
								<?php foreach($tbcampos as $tbcampA){ ?>
									<?php if($tbcampA['tipo']=='sto'){ ?>
										stoupload_<?php echo $tbcampA['campo']?>	:  $v('upload_<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>'),
									<?php } elseif($tbcampA['tipo']=='img'){ ?>
										upload_<?php echo $tbcampA['campo']?>	:  $v('upload_<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>'),
									<?php } elseif($tbcampA['tipo']=='html'){ ?>
										<?php echo $tbcampA['campo']?>			:  mooeditable_<?php echo $tbcampA['campo']?>.getContent(),
									<?php } else { ?>
										<?php echo $tbcampA['campo']?>			:  $v('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>'),
									<?php } ?>
								<?php } ?>

								<?php if($datos_tabla['vis']!=''){ echo $datos_tabla['vis']?> : "1", <?php } ?>
								v_o:'<?php echo $datos_tabla['me']?>',
								
								<?php echo $datos_tabla['fed']?>			:  "now()",														
								v_d :  "where <?php echo $datos_tabla['id']?>='"+id+"' "
															
								};
				
					new Request({url:"ajax_sql.php?f=update&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
						
						var json=eval("(" + ee + ")");
						if(json.success=='1'){
						
							if(Recargar=='ajax'){
								<?php echo $tbf?>_ajax("editar_completo_cancelar"); 
								$('resaltar').value='<?php echo $tb?>_item_'+id;
								<?php echo $tbf?>_ajax("<?php echo $linkRecPagina;?>");
								location.href='<?php echo $SERVER['BASE'].$SERVER['URL'];?>#lineax_'+id;
							} else if(Recargar=='sin_ajax'){
								location.reload();
							}
						
						} else if(json.success=='0'){
							
							show_error_texto(json.error);
							$('<?php echo $tb?>_in_submit').value='crear <?php echo $datos_tabla['nombre_singular']?>';
							$('<?php echo $tb?>_in_submit').disabled=false;						
							
						}
						
					  } } ).send();				
				}
        break;				
		case "editar":

					$('<?php echo $tb?>_colaplink_'+id).setStyles({'visibility':'hidden'});				

					$('<?php echo $tb?>_item_'+id).addClass('editar_rapido'); 		
					
					if($('edit_hidd_<?php echo $tb?>').value.trim()!=id && $('edit_hidd_<?php echo $tb?>').value.trim()!=''){
						
						<?php echo $tbf?>_ajax('editar_cancelar',$('edit_hidd_<?php echo $tb?>').value);
						
					}

					$('edit_hidd_<?php echo $tb?>').value=id;
					
					$0('linea_controles_'+id);
					$1('linea_editar_controles_'+id);
					
					<?php foreach($tblistado as $tbli){ 
                        if($tbli['listable']=='1' and $tbli['constante']!='1'){ ?>
 
								   <?php if($tbli['tipo']=='sto'){ ?>
									
									$0('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id);
									$('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML=render_upload_sto('<?php echo $tb?>','<?php echo $tbli['campo']?>',id,$('txt_<?php echo $tb?>_<?php echo $tbli['campo']?>_name_'+id).value);
									$1('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id); 
				                                   
								   <?php } ?>
								   <?php if($tbli['tipo']=='img'){ ?>
									
									$0('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id);
									$('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML=render_upload('<?php echo $tb?>','<?php echo $tbli['campo']?>',id,$('<?php echo $tb?>_file_<?php echo $tbli['campo']?>_'+id).src);
									$1('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id); 
				                                   
								   <?php } ?>
								   <?php if(in_array($tbli['tipo'],array('pas'))){ ?>
                                
									var val=$('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id+'_temp').value.trim();
                                    $('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML="<input type='password' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"' value='"+val+"'/><br /><input type='password' style='margin-top:2px;' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"_2' value='"+val+"'/>";
									
                                    $1('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id);                      
                                    $('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});
									
                                   <?php } ?>								   
								   <?php if(in_array($tbli['tipo'],array('inp','yot'))){ ?>
                                
									var val=$('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).innerHTML.trim().replace(/"/g,"&quot;");

                                    $('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML="<input style='float:left;width:100%;' type='text' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"' value=\""+val+"\"/>";        
                                    $1('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id);                      
                                    $('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});
									
                                	<?php } ?>

								    <?php if(in_array($tbli['tipo'],array('fch'))){ ?>
                                	
									var val=$('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).innerHTML.trim();
									input_date_<?php echo $tbli['campo']?>('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id,'<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id);
                                    $1('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id);                      
																		
									$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_d').setStyles({'clear':'none'});
									$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_m').setStyles({'clear':'none'});
									$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_a').setStyles({'clear':'none'});

									var fecha=$('<?php echo $tb?>_fchhid_<?php echo $tbli['campo']?>_'+id).value;
									var fechaa=new Array();
									fechaa = fecha.split("-");
									$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_d').value=fechaa[0];
									$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_m').value=fechaa[1];
									$('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'_a').value=fechaa[2];
									
                                    $('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});
									
									<?php echo $tb?>_<?php echo $tbli['campo']?>_change("<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id);
									
                                	<?php } ?>	
									
								    <?php if(in_array($tbli['tipo'],array('txt'))){ ?>
                                	
									var val=$('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).innerHTML.trim();
                                    $('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML="<textarea style='height:130px;width:100%;' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"' >"+val+"</textarea>";        
                                    $1('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id);                      
                                    $('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});
									
                                	<?php } ?>	
								    <?php if(in_array($tbli['tipo'],array('html'))){ ?>
                                	
									var val=$('<?php echo $tb?>_htmlhid_<?php echo $tbli['campo']?>_'+id).value;
                                    $('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML="<textarea style='width:750px;height:300px;' id='<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"' >"+val+"</textarea>";        
                                    $1('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id);                      
                                    $('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});
									 
									mooedit = $('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id).mooEditable({
										actions: 'bold italic underline | formatBlock justifyleft justifyright justifycenter justifyfull | insertunorderedlist insertorderedlist indent outdent | undo redo removeformat | urlimage createlink unlink | flash | toggleview',
										externalCSS: 'css/Editable.css',
										baseCSS: 'html{ height: 100%; cursor: text; } body{ font-family: arial; font-size:12px; }'
									});
									
									//eval("mooedit_<?php echo $tb?>_text_<?php echo $tbli['campo']?>_"+id+"=mooedit;");
									
                                	<?php } ?>																			
									
								   <?php if(in_array($tbli['tipo'],array('com'))){ ?>
                                	
									var val=$('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).innerHTML.trim();
                                    $('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML='<select  id="<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id+'" class="form_input" style="float:left;width:100%;" ><option></option><?php
									$opciones_select=array();
									$iti=(is_array($tbli['opciones']))?1:0;
									$opciones_select=(is_array($tbli['opciones']))?$tbli['opciones']:explode(",",$tbli['opciones']);
									foreach($opciones_select as $opcccion=>$opcion_select){
									?><option value="<?php echo ($iti)?$opcccion:$opcion_select;?>" '+ ( ("<?php echo ($iti)?$tbli['opciones'][$opcccion]:$opcion_select;?>"==val)?'selected':'' ) +' ><?php echo $opcion_select?></option><?php
									}
									?></select>';        
                                    $1('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id);                      
                                    $('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'none'});
									
                                	<?php } ?>																		
                                
                            
                        <?php } ?>
                    <?php } ?>
							
		break;
		
		case "editar_cancelar":
					
					$('<?php echo $tb?>_colaplink_'+id).setStyles({'visibility':'visible'});
					//<?php echo $tbf?>_ajax('colapsar',id);


					$('<?php echo $tb?>_item_'+id).removeClass('editar_rapido'); 		
										
					$('edit_hidd_<?php echo $tb?>').value='';
					
					$1('linea_controles_'+id);
					$0('linea_editar_controles_'+id);
					
					<?php foreach($tblistado as $tbli){ 
                        if($tbli['listable']=='1' and $tbli['constante']!='1'){ ?>
 
								   <?php if($tbli['tipo']=='img'){ ?>                                  

								    $1('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id);
									$('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML='';
									$0('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id); 
									
								   <?php } ?>
								   
								   <?php if($tbli['tipo']=='sto'){ ?>                                  

								    $1('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id);
									$('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML='';
									$0('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id); 
									
								   <?php } ?>								   
								   
								   <?php if($tbli['tipo']=='pas'){ ?>                                  

								    $1('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id);
									$('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML='';
									$0('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id); 
                                    $('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});
									
									
								   <?php } ?>								   
								   
								   <?php if(in_array($tbli['tipo'],array('txt','inp','com','yot','fch'))){ ?>
                                
                                    $('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML="";        
                                    $0('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id);                      
                                    $('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});
									
                                	<?php } ?>	
									
									
								   <?php if(in_array($tbli['tipo'],array('html'))){ ?>
                                
                                    $('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id).innerHTML="";        
                                    $0('<?php echo $tb?>_inpu_<?php echo $tbli['campo']?>_'+id);                      
                                    $('<?php echo $tb?>_item_<?php echo $tbli['campo']?>_'+id).setStyles({'display':'block'});
									
                                	<?php } ?>																		
                                
                            
                        <?php } ?>
                    <?php } ?>
							
		break;
		
        case "validar_editar":
				
				var ret=true;
            	<?php foreach($tblistado as $tbcampA){ ?>
					<?php	if($tbcampA['listable']=='1' and $tbcampA['constante']!='1'){ ?>
						<?php	if($tbcampA['validacion']=='1'){ ?>
					
							<?php if($tbcampA['tipo']=='sto'){ ?>	
								//if($v('upload_<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').trim()=='' && ret){ show_error(1); ret=false; }
							<?php } elseif($tbcampA['tipo']=='img'){ ?>	
								//if($v('upload_<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').trim()=='' && ret){ show_error(1); ret=false; }														
							<?php } elseif($tbcampA['tipo']=='pas'){ ?>	
								if($v('<?php echo $tb?>_text_<?php echo $tbcampA['campo']?>_'+id).trim()=='' && ret){ show_error_alert(1); ret=false; }	
								if($v('<?php echo $tb?>_text_<?php echo $tbcampA['campo']?>_'+id).trim()!=$v('<?php echo $tb?>_text_<?php echo $tbcampA['campo']?>_'+id+"_2").trim() && ret){ show_error_alert(2); ret=false; }						
							<?php } elseif($tbcampA['tipo']=='hid'){ 
								//echo "";
						  	} else { ?>								
								if($v('<?php echo $tb?>_text_<?php echo $tbcampA['campo']?>_'+id).trim()=='' && ret){ show_error_alert(1); ret=false; }
							<?php } ?>

						<?php } ?>						
					<?php } ?>
				<?php } ?>
				return ret;
        break;			
		
        case "editar_guardar":
				if(<?php echo $tbf?>_ajax("validar_editar",id)==true){								
				<?php 
				/* 
				foreach($tblistado as $tbli){ 
				if($tbli['listable']=='1' and $tbli['constante']!='1'){ 
				if(in_array($tbli['tipo'],array('html'))){ ?>				
				if(mooedit){ mooedit.saveContent(); }
				<?php } } } 
				*/
				?>				
				$1('<?php echo $tbf?>_savi_'+id);
                var datos = {
							<?php foreach($tblistado as $tbli){ 
								if($tbli['listable']=='1' and $tbli['constante']!='1'){ ?>
									<?php if(in_array($tbli['tipo'],array('html'))){ ?>
										'<?php echo $tbli['campo']?>'			:  mooedit.getContent(),
									<?php } elseif(in_array($tbli['tipo'],array('img'))){ ?>
										upload_<?php echo $tbli['campo']?>	:  $v('upload_<?php echo $tb?>_in_<?php echo $tbli['campo']?>_'+id),
									<?php } elseif(in_array($tbli['tipo'],array('sto'))){ ?>
										stoupload_<?php echo $tbli['campo']?>	:  $v('upload_<?php echo $tb?>_in_<?php echo $tbli['campo']?>_'+id),										
									<?php } elseif(in_array($tbli['tipo'],array('txt','inp','com','yot','fch','pas','html'))){ ?>
										'<?php echo $tbli['campo']?>'			:  $v('<?php echo $tb?>_text_<?php echo $tbli['campo']?>_'+id),
									<?php } ?>

								<?php } ?>
							<?php } ?>
							<?php echo $datos_tabla['fed']?>			:  "now()",
							
							v_o:'<?php echo $datos_tabla['me']?>',
							v_d :  "where <?php echo $datos_tabla['id']?>='"+id+"' "

                            };
            
                new Request({url:"ajax_sql.php?f=update&debug=0", method:'post', data:datos, onSuccess:function(ee) { 
				
						var json=eval("(" + ee + ")");
						if(json.success=='1'){
						
							<?php echo $tbf?>_ajax('editar_cancelar',id);
							$0('<?php echo $tbf?>_savi_'+id);
							$('resaltar').value='<?php echo $tb?>_item_'+id;
							<?php echo $tbf?>_ajax("<?php echo $linkRecPagina;?>"); 

							charge_multibox();
		
						} else if(json.success=='0'){
							
							show_error_alert_text(json.error);
							$0('<?php echo $tbf?>_savi_'+id);					
							<?php echo $tbf?>_ajax('editar_cancelar',id);
							
						}				
				
				} } ).send();				
				
				}
        break;			
				
        }
	
    }




window.addEvent('domready',function(){
if(0){

	var varFrom;
	var varTo;
	var sb = new Sortables('ordenable', {
    clone:true,
    revert: true,
    initialize: function() { 
      
    },
    onStart: function(el) { 
      el.setStyles({'background':'#add8e6'});
    },
    onComplete: function(el) {
      el.setStyles({'background':'#FDFDFD'});
	  //alert(varFrom+' a '+varTo);
      //var sort_order = '';
      //$$('#ordenable li').each(function(li) { sort_order = sort_order +  li.get('alt')  + '|'; });
      //$('sort_order').value = sort_order;      
		
        var req = new Request({
          url:'<?php  echo $_SERVER['PHP_SELF']; ?>',
          method:'post',
          autoCancel:true,
          data:'sort_order=' + sort_order + '&ajax=' + $('auto_submit').checked + '&do_submit=1&byajax=1',
          onRequest: function() {
            $('message-box').set('text','Updating the sort order in the database.');
          },
          onSuccess: function() {
            $('message-box').set('text','Database has been updated.');
          }
        }).send();
		
    }
  });
 }
});

var prev_Height;
function set_filas(tb,tbf,val){

	var eee=0;
	
	$("set_filas_1").setStyles({'color':'#FF0000','border':'1px solid #CCC'}); 
	$("set_filas_2").setStyles({'color':'#FF0000','border':'1px solid #CCC'}); 
	$("set_filas_3").setStyles({'color':'#FF0000','border':'1px solid #CCC'}); 

	
    $$('.bloque_listado').each(function(blo) { 
		$(blo).removeClass('modificador_linea');					
		$(blo).removeClass('modificador');				
	});	

				
	if(val=='1'){


/* 
		$$('.bloque_listado').each(function(ee) { 
		if(eee==0){ var size = ee.getSize(); prev_Height=size.y; } eee++;
		ee.setStyles({'visibility':'visible','opacity':'1','background-color':'#FDFDFD','height':'18px','position':'relative'}); 

		eval(tbf+"_ajax('editar_cancelar','"+ee.get('alt')+"');");
		}); */
		$("set_filas_1").setStyles({'color':'#000','border':'1px solid #000'}); 
		
		$$('.bloque_listado').each(function(blo) { 
			$(tb+"_expanlink_"+blo.get('alt')).setStyles({'display':'none'}); 
			$(tb+"_colaplink_"+blo.get('alt')).setStyles({'display':''}); 				
		});								
		Cookie.write(tb+'_colap', '1', {duration: 10});
		
	} else if(val=='2'){

		
/* 		$$('.bloque_listado').each(function(ee) { 
		ee.setStyles({'background-color':'#fff','height':prev_Height,'position':'relative'}); 
		$(tb+"_expanlink_"+ee.get('alt')).setStyles({'display':'none'}); 
		$(tb+"_colaplink_"+ee.get('alt')).setStyles({'display':''}); 		
		}); */
		$("set_filas_2").setStyles({'color':'#000','border':'1px solid #000'}); 
							
      	$$('.bloque_listado').each(function(blo){
			$(tb+"_expanlink_"+blo.get('alt')).setStyles({'display':'none'}); 
			$(tb+"_colaplink_"+blo.get('alt')).setStyles({'display':''}); 	
			$(blo).addClass('modificador');				
		});
		Cookie.write(tb+'_colap', '2', {duration: 10});
		
	} else if(val=='3'){
	
/* 		$$('.bloque_listado').each(function(ee) { 
		ee.setStyles({'background-color':'#fff','height':prev_Height,'position':'relative'}); 
	
		}); */
		$("set_filas_3").setStyles({'color':'#000','border':'1px solid #000'}); 
							
      	$$('.bloque_listado').each(function(blo){
			$(tb+"_expanlink_"+blo.get('alt')).setStyles({'display':''}); 
			$(tb+"_colaplink_"+blo.get('alt')).setStyles({'display':'none'}); 				
			$(blo).addClass('modificador_linea');
		});
		Cookie.write(tb+'_colap', '3', {duration: 10});
			
	}

}
</script>

<?php } ?>
<?php } ?>
<?php //á
?>
                           
    <!--FORM INICIO-->
    <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios" action="<?php echo $FORM['action'];?>" >
    
                  
    <div id="<?php echo $FORM['nombre'];?>_form_body" class="form_body">
    
		<?php if($tiene_de_delivery){ ?>
        <div id="env_tarjeta_regalo" style="float:left;width:420px;height:auto;" class="cuadro <?php 
	web_selector_control($SELECTED,"tarjetas","bloques,listados");
	?>" >
        
        	<input type="hidden" name="env_tarjeta_regalo" id="pedido_env_tarjeta_regalo"  />
            <div class="cuadro"  >     
                <div class="div_borde div_inner" >
                                
                         <?php $NOOB=$TARS; ?>
                
                         <div  id="contenedor_slider_<?php echo $NOOB['label'];?>_fijo" class="contenedor_slider_fijo">                
                            <div  id="contenedor_slider_<?php echo $NOOB['label'];?>_movil" class="contenedor_slider_movil">
                                                
                                <?php  
                                if(sizeof($NOOB['num_items'])==0){ ?><p class="vacio"><?php echo $NOOB['vacio']; ?></p><?php } else {
                                    foreach($NOOB['items_bloques'] as $i=>$itembloque){ 
                                    ?>
                                    <div class="slid">                              
                                        <ul  class="listado_items">   
                                        <?php foreach($itembloque as $item){ ?>                                             
                                            <li class="listado_item" id="tarjeta_<?php echo $item['id'];?>">
                                               <div class="capa" >
                                                 <div class="inner" >  
                                                 	<a href="#" onclick="javascript:set_tarjeta('<?php echo $item['id'];?>');return false;" rel="nofollow" title="<?php echo $item['nombre'];?>">
                                                    <img border="0" <?php echo $item['get_atributos'];?> />
                                                    </a>
                                                 </div>                                    
                                               </div>                    
                                            </li>							   
        
                                        <?php } ?>
                                        </ul> 
                                    </div>   
        
                                    <?php 
                                    }
                                }
                                ?>
                                             
                            </div>
                        </div>                                               
                          
                </div>
            
            </div>
            
            <div class="barra_abajo listado_paginacion">
                <?php web_render_slider_pie($NOOB); ?>       
           </div>  
           <?php web_render_slider_javascript($NOOB); ?>  
           <script>
		   function set_tarjeta(id){
			    $('pedido_env_tarjeta_regalo').value=id;
				$$('#env_tarjeta_regalo .listado_item').each(function(element) {
					element.removeClass('selected');						
				})			   
				$('tarjeta_'+id).addClass('selected');
		   }
		   </script>
           
        </div>        
        
        <div  id="env_localizacion"><?php web_render_control_localizacion($FORM,$GEO,array('env_departamento','env_provincia','env_distrito'),'carrito_gastosdeenvio(this.id);'); ?></div>
        <?php } ?>
    	<?php if($tiene_de_nodelivery){ ?>
        <div  id="envgen_localizacion"><?php web_render_control_localizacion($FORM,$GEO,array('envgen_departamento','envgen_provincia','envgen_distrito')); ?></div>
        <?php } ?>
        <div  id="pag_factura_localizacion"><?php web_render_control_localizacion($FORM,$GEO,array('pag_factura_departamento','pag_factura_provincia','pag_factura_distrito')); ?></div>
        
   		<?php web_render_form($FORM); ?>        
         
    </div>                   
    
    <?php web_render_form_javascript($FORM); ?>        
    <script>
	function sin_factura(){
		$('p_pedido_pag_factura_ruc').setStyle('display','none');
		$('p_pedido_pag_factura_razonsocial').setStyle('display','none');
		$('p_pedido_pag_factura_direccion').setStyle('display','none');
		$('p_pedido_pag_factura_departamento').setStyle('display','none');
		$('p_pedido_pag_factura_contacto').setStyle('display','none');
		$('p_pedido_pag_factura_telefono').setStyle('display','none');		
	}
	function con_factura(){
		$('p_pedido_pag_factura_ruc').setStyle('display','block');
		$('p_pedido_pag_factura_razonsocial').setStyle('display','block');
		$('p_pedido_pag_factura_direccion').setStyle('display','block');
		$('p_pedido_pag_factura_departamento').setStyle('display','block');
		$('p_pedido_pag_factura_contacto').setStyle('display','block');
		$('p_pedido_pag_factura_telefono').setStyle('display','block');		
	}	
	window.addEvent('domready', function(){
		$('pedido_pag_tipo_documento_1').addEvent('click', function(){
			if($('pedido_pag_tipo_documento').value=='2'){	con_factura(); } else { sin_factura(); }
		});
		$('pedido_pag_tipo_documento_2').addEvent('click', function(){
			if($('pedido_pag_tipo_documento').value=='2'){	con_factura(); } else { sin_factura(); }
		});		
		sin_factura();
		<?php if($tiene_de_delivery and $tiene_de_nodelivery){ ?>		
		$0('regalos_delivery');		
		<?php } ?>
	});
	</script>

	<?php 
    $THIS="carrito";
    ?>
    <div style="float:left;width:100%;" class="cuadro <?php 
        web_selector_control($SELECTED,$THIS,"carritos");
        ?>" >
        <?php //web_render_esquinas(1,4);?>
		<div id="actualizar_carrito" style="display:none;">actualizando carrito</div>
    
       <div class="barra_arriba">
       <?php web_render_item_borde('bors-b',1,2);?>        
        Carrito de compras
       </div>
             
        <div class="div_borde div_inner" id="div_carrito">
        </div>
        
    </div>
    
    </form>
    <!--FORM FIN--> 

    <div class="clean"></div>    

                   
<script type="text/javascript">
//window.addEvent('domready', function() {
var json_carrito=<?php echo json_encode($_SESSION['carrito']);?>	
render_carrito(json_carrito,{main:'1',controles:'1',precio:'1',enviar:'0'},0,0);
//});
</script>


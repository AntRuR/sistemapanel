<?php //á
$ITEMS=$LISTADO['videos'];
//prin($ITEMS);
?>
<a id="ver_video_cerrar" href="#" onclick="cerrar_ver_video(); return false;">volver a la lista de videos</a>
<div id="ver_video_titulo"></div>
<div id="ver_video_eventos_embed" style="text-align:center;"></div>
<div id="div_inner_video_eventos"> 
    
<div id="listado_productos" class="div_fila cuadro <?php 
    /* Style del Cuadro */ echo "bloque_cuadro_6"; ?> <?php
    /* Style del Listado */ echo "grilla_1"; ?>" >
    <?php web_render_esquinas(0,0);?>        
    <div class="div_borde">        
    
        <!--PAGINACION DEL LISTADO-->
        <div class="listado_paginacion div_barra barra_listado margen_arr"  >   
        	<h1 class='titulo'><?php echo  $ITEMS['titulo'];?></h1>           	
            <!--<span class="total"><?php echo $ITEMS['total']." ".$lang['productos'];?></span>-->
            &nbsp;<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
        </div>
    
        <!--GRILLA-->
        <ul class="listado_items">
        <?php  
    
        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
    
            foreach($ITEMS['filas'] as $i=>$item){ 
        
            ?>
        
            <li class="listado_item" <?php echo ($i%3==2)?' style="border-right:none;" ':''; ?> >
        
                <!--foto-->
                <a href="#" class="foto" rel="nofollow" onclick="ver_video('<?php echo $item['titulo'];?>','<?php echo $item['codigo'];?>'); return false;">
                    <img border="0" width="134px" src="http://i4.ytimg.com/vi/<?php echo $item['codigo'];?>/default.jpg" />
                </a>
                <!--nombre-->
                <h2 class="nombre"><a href="<?php echo $item['link'];?>" ><?php echo $item['titulo'];?></a></h2>
                
            </li>
        
            <?php 
        
            }
    
        }
        ?>
        </ul>
        
        <!--PAGINACION DEL LISTADO-->
        <!--
        <?php if($ITEMS['total']>0){ ?>
        
            <div class="listado_paginacion div_barra">
            &nbsp;<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
            </div>
            
        <?php } ?>
        -->
        
	</div>        
</div>
</div>
    
<script>
	
	function ver_video(titulo,cod){
	
	$('ver_video_eventos_embed').innerHTML='<embed width="500" height="375" allowfullscreen="true" wmode="transparent" menu="false" quality="high" bgcolor="#FFFFFF" name="id'+cod+'" id="id'+cod+'" style="" src="http://www.youtube.com/v/'+cod+'&amp;fs=1&amp;showsearch=0&amp;autoplay=1" type="application/x-shockwave-flash"/>';
	$('ver_video_titulo').innerHTML=titulo;
	$0('div_inner_video_eventos');
	$('ver_video_cerrar').style.display='block';
	$1('ver_video_titulo');
	$1('ver_video_eventos_embed');
	
	}
	
	function cerrar_ver_video(){
	
	$('ver_video_eventos_embed').innerHTML='';
	$('ver_video_titulo').innerHTML='';
	$1('div_inner_video_eventos');
	$0('ver_video_cerrar');
	$0('ver_video_titulo');
	$0('ver_video_eventos_embed');
	
	}
	
</script>    
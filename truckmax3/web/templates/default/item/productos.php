<?php //á



$ITE=$ITEM['productos'];

//prin($ITE);



?>

<div id="listado_productos" class="div_fila cuadro margen_arr <?php 

    /* Style del Cuadro  */ echo "bloque_cuadro_6"; ?> <?php

    /* Style de la Ficha */ echo "ficha_1"; ?>" >

    <?php web_render_esquinas(0,0);?>        

		

    <div class="barra_arriba">

        <!--esquinas--><?php web_render_esquinas(1,2);?>

        <h1><?php echo $ITE['datos']['nombre']; ?></h1>

    </div>



    <div class="div_borde">              

    

        <!--PAGINACION DEL LISTADO-->

        

        <div class="div_barra"  >

        

                <span class="div_menu <?php

                /* Style de MENU */ echo "menu_filtros"; ?>" id="pestanias">

                <?php web_render_menu($ITE['pestanias'],array(

                                                            'lados_externos'=>0

                                                            ,'lados_internos'=>0

                                                            ,'id'=>'pestanias'

                                                            )); ?>

                </span>

                

        </div>

        

        <div class="div_columna div_bloque" id="pestanias_areas_productos" style="overflow:hidden;width:472px;">

        

            <div class="pestanias_area_tab div_inner" id="pestanias_area_tab_1">



				                            

				<div class="marco" id="producto_zoom">

                

                    <img "<?php echo $ITE['fotos']['items'][0]['foto_grande'];?>" alt="<?php echo $ITE['fotos']['items'][0]['foto_descripcion'];?>" />

                    

                </div>                    

                

                <div class="info">

                

                    <h2><?php echo $lang['descripcion'];?></h2>

                    <p><?php echo $ITE['datos']['descripcion'];?></p>

                    

                    <a class="agregar_carrito" rel="nofollow" href="#" 

                    onclick="javascript:carrito({accion:'agregar',id:'<?php echo $ITE['datos']['id'];?>'},0,0); return false;"

                    ><?php echo $lang['agregar_al_carrito'];?></a>

                

                </div>    

                

                <div class="clean"></div>

                

            </div>

            

            <div class="pestanias_area_tab div_inner" id="pestanias_area_tab_2" style="display:none;">

            

        		<p><?php echo $ITE['datos']['precio']; ?></p>

                

            </div>

            

            <div class="pestanias_area_tab" id="pestanias_area_tab_3" style="display:none;">

            

                <img src="<?php echo $SERVER['BASE'].THEME_PATH;?>img/estampado_logo.jpg" />

                

            </div>

            

            <div class="pestanias_area_tab div_inner" id="pestanias_area_tab_4" style="display:none;">



				<?php include("formularios/recomendar_pagina.php"); ?>

                

            </div>



        </div>

        

        <div class="div_columna div_bloque <?php 

		/* CSS del Listado */ echo "listado_3"; ?>" id="id_tren_fotos" style="width:182px; border-left:1px dotted #ccc;">



			<?php /*

            <ul>

            <?php foreach($vistas as $vista){ ?>

            <li><table><tr><td align="center"><a

            rel="lightbox[atomium]" 

            href="<?php echo str_replace('"',"",str_replace('src="',"",str_replace(array('width=""','height=""'),array('',''),dimensiona_img('prodsubite_imas', $vista['fecha_creacion'], str_replace(".","_3.",$vista['file'])))))?>"

            ><img  <?php echo str_replace(array('width=""','height=""'),array('',''),dimensiona_img('prodsubite_imas', $vista['fecha_creacion'], str_replace(".","_2.",$vista['file'])))?> border="0" /></a></td></tr></table></li>

            <?php } ?>

            </ul>        

			*/ ?>





			<?php    	

            $NOOB=$NOODSLICE['producto_vistas'];

            ?>

            

            <div id="bloque_producto_vistas_elemento_0">

                

                <div id="contenedor_slider_<?php echo $NOOB['label'];?>_fijo" class="contenedor_slider_fijo">    

                    <div id="contenedor_slider_<?php echo $NOOB['label'];?>_movil" class="contenedor_slider_movil">

                            

                        <?php if($NOOB['num_items']==0){ echo $NOOB['vacio']; } else { ?>   

                        <?php foreach($NOOB['items_bloques'] as $itembloque){ ?>            

                        <div class="slid">      

                            <ul>    

                                <?php foreach($itembloque as $item){ ?>

                                <!-- inicio frame -->

                                <li>



                                    <!--foto-->

                                    <a class="foto" href="#" rel="nofollow" 

                                    onclick='javascript:$("producto_zoom").innerHTML="<img <?php echo addslashes($item['foto_grande']);?> />";return false;'>

                                        <img alt="<?php echo $item['alt'];?>" title="<?php echo $item['title'];?>" <?php echo $item['foto_thumb'];?> />

                                    </a>

                                                           

                                </li>

                                <!-- fin frame -->

                                <?php } ?>

                            </ul>

                        </div>                

                        <?php } ?>                

                        <?php } ?>

                        

                    </div>

                </div>

                

                <?php web_render_slider_pie($NOOB); ?>

                

            </div>        

            <?php 

            web_render_slider_javascript($NOOB); unset($NOOB);

            ?>

        

        </div>       

        

		<!--clean--><div class="clean"></div><!--clear-->

        

	</div>        



</div>


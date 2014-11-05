<?php //á

$THIS=$PARAMS['this'];

$ITEM=$OBJECT[$PARAMS['this']];

?>
<section class="<?php echo $PARAMS['classStyle']; ?>" >


    <div class="header">
        <h1><?php echo $ITEM['titulo']; ?></h1>
    </div>

         

    <article class="inner">	   
		   <?php
		   echo "<ul class='album'>";
		   foreach($ITEM['fotos'] as $foto){
			   echo "<li class='thumb' style='margin-top:35px;' >";
			   // echo "<a rel='imagezoom[album]' ";
			   // echo "href='".$foto['href']."' ";
			   // //echo "style='background-image:url(".$foto['foto_thumb'].");' title='".$foto['foto_descripcion']."' ";
			   // echo ">";
			   echo "<img ";
			   //echo " src='".$foto['foto_thumb']."' ";
			   echo $foto['get_atributos'];
			   echo "alt='".$foto['foto_descripcion']."' >";
			   // echo "</a>";
			   echo "</li>";
			}
		   echo "</ul>"; 	
		   ?>
		   <?php //web_render_slideshow_proceso($SLIDE); ?>                                	            

             
        <div class="div_borde div_inner">
		            
            <?php echo $ITEM['texto']; ?>          
        </div>
        
    </article>
 
</div> 
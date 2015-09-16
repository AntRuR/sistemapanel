<?php //á
?>	
<div id="div_bloque_sidebar" >

	<div class="cuadro bloque_cuadro_4">
    
        <div class="barra_arriba"></div>
        <div class="barra_abajo"></div>
        
        <div class="arriba_izquierda"></div>
        <div class="arriba_derecha"></div>
        <div class="abajo_izquierda"></div>
        <div class="abajo_derecha"></div>
                
        <h3 class="bloque_cabeza"><?php echo $PUBLICACION['menu']['titulo_menu'];?></h3>    
        <div class="bloque_contenido">  

						            
		<?php
        switch($_GET['tab']){
        default:					 

			if(sizeof($PUBLICACION['menu']['items'])==0){
			echo $PUBLICACION['menu']['sin_items'];
			} else { ?>
				<ul>    
					<?php foreach($PUBLICACION['menu']['items'] as $item){ ?>
					<li>
						<div class="fecha"><?php echo fecha_formato($item['fecha'],6);?></div>
						<a class="titular <?php echo ($ID==$item['id'])?"selected":"";?>" href="<?php echo $item['url'];?>">
						<?php echo limit_string($item['titular'],120);?>
                        </a>
						<div class="linea"></div>
					</li>
					<?php } ?>
				</ul>
			<?php }

	   break;
	   case "consejos":
			if(sizeof($PUBLICACION['menu']['items'])==0){
			echo $PUBLICACION['menu']['sin_items'];
			} else { ?>
				<ul>    
					<?php foreach($PUBLICACION['menu']['items'] as $item){ ?>
					<li>
						<a class="titular <?php echo ($ID==$item['id'])?"selected":"";?>" href="<?php echo $item['url'];?>"><?php echo limit_string($item['titular'],120);?></a>
						<div class="linea"></div>
					</li>
					<?php } ?>
				</ul>
			<?php }	   
	   break;
	   
	   case "locales":
			if(sizeof($PUBLICACION['menu']['items'])==0){
			echo $PUBLICACION['menu']['sin_items'];
			} else { ?>
				<ul>    
					<?php foreach($PUBLICACION['menu']['items'] as $item){ ?>
					<li>
						<a class="titular <?php echo ($_GET['id']==$item['id'])?"selected":"";?>" style="height:auto; margin-top:5px;" href="<?php echo $item['url'];?>"><?php echo $item['nombre'];?></a>
						<div class="linea"></div>
					</li>
					<?php } ?>
				</ul>
			<?php }	   
	   break;
	   	   
       case "eventos":					 
		
			if(sizeof($PUBLICACION['menu']['items'])==0){
			echo $PUBLICACION['menu']['sin_items'];
			} else { ?>
				<ul>    
					<?php foreach($PUBLICACION['menu']['items'] as $item){ ?>
					<li>
						<div class="fecha"><?php echo fecha_formato($item['fecha'],6);?></div>
						<a class="titular <?php echo ($ID==$item['id'])?"selected":"";?>" href="<?php echo $item['url'];?>"><?php echo limit_string($item['titular'],120);?></a>
						<div class="linea"></div>
					</li>
					<?php } ?>
				</ul>
			<?php }

	   break;	
       case "boletines":					 
		
			if(sizeof($PUBLICACION['menu']['items'])==0){
			echo $PUBLICACION['menu']['sin_items'];
			} else { ?>
				<ul>    
					<?php foreach($PUBLICACION['menu']['items'] as $item){ ?>
					<li class="lista_boletin">
                        <a class="titulo <?php echo ($ID==$item['id'])?"selected":"";?>" href="<?php echo $item['url'];?>"  >
						<img <?php echo $item['get_atributos'];?> align="right" alt="<?php echo $item['nombre'];?>" />
                        </a>
                    	<span class="fecha"><?php echo fecha_formato($item['fecha'],6);?></span>
						<a class="titulo <?php echo ($ID==$item['id'])?"selected":"";?>" href="<?php echo $item['url'];?>"  ><?php echo $item['nombre'];?></a>
                        
					</li>
					<?php } ?>
				</ul>
			<?php }

	   break;		      
	   }     
       ?>     
                        
        </div>        
        
    </div>
</div>
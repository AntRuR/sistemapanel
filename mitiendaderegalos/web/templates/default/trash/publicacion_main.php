<?php //á
?><div id="div_bloque_desarrollo">
	<div class="cuadro bloque_cuadro_5" >
        <div class="barra_arriba"></div>
        
        <div class="arriba_izquierda"></div>
        <div class="arriba_derecha"></div>

        <div class="min_height"></div>
 
        <div class="bloque_contenido area_desarrollo">  
        <?php
		switch($_GET['tab']){	
		case "noticias": 
		?>
        	<h1 class="titulo">Notiafarmach : <?php echo fecha_formato($PUBLICACION['item']['fecha'],2);?></h1>   
            <h2 class="variable"><?php echo $PUBLICACION['item']['titular'];?></h2>
            <p class="valor">
            <?php if($PUBLICACION['item']['get_atributos']!=''){ ?>
			<img alt="<?php echo $PUBLICACION['item']['alt'];?>" title="<?php echo $PUBLICACION['item']['title'];?>" <?php echo $PUBLICACION['item']['get_atributos'];?> align="left" style=" margin-right:20px;" class="foto" />            
            <?php } ?>
			<?php echo $PUBLICACION['item']['descripcion'];?>
            </p> 
		<?php 
		break;
		case "consejos": 
		?>			
        	<h1 class="titulo">Consejos para la buena salud</h1>   				
            <h2 class="variable"><?php echo $PUBLICACION['item']['titulo'];?></h2>
            <p class="valor">
            <?php if($PUBLICACION['item']['get_atributos']!=''){ ?>
			<img alt="<?php echo $PUBLICACION['item']['alt'];?>" title="<?php echo $PUBLICACION['item']['title'];?>" <?php echo $PUBLICACION['item']['get_atributos'];?> align="right" class="foto margen-izquierda" />
            <?php } ?>
			<?php echo $PUBLICACION['item']['texto'];?>
            </p> 
		<?php 
		break;
		case "eventos":			
		?>
        	<h1 class="titulo">Eventos : <?php echo fecha_formato($PUBLICACION['item']['fecha'],2);?></h1>   				
            <h2 class="variable">
            <?php if($PUBLICACION['item']['get_atributos']!=''){ ?>
			<img alt="<?php echo $PUBLICACION['item']['alt'];?>" title="<?php echo $PUBLICACION['item']['title'];?>" <?php echo $PUBLICACION['item']['get_atributos'];?> align="right" class="foto margen-izquierda" />
            <?php } ?>
			<?php echo $PUBLICACION['item']['titular'];?>
            </h2>
            <p class="valor">
			<?php echo $PUBLICACION['item']['descripcion'];?>
            </p>         
		<?php 
		break;
		case "boletines":
		?>               
        	<h1 class="titulo">Boletín : <?php echo limit_string($PUBLICACION['listado']['nombre_boletin'],80);?></h1>   				
	        <div class="paginacion paginacion_boletin"><?php echo $PUBLICACION['listado']['anterior'];?><?php echo $PUBLICACION['listado']['tren'];?><?php echo $PUBLICACION['listado']['siguiente'];?></div>
            <h2 class="variable">
			<?php echo fecha_formato($PUBLICACION['listado']['fecha_boletin'],2);?>
            </h2>
            <p class="valor">
            <?php foreach($PUBLICACION['listado']['filas'] as $item){ ?>
            <span style="text-align:center; margin-top:15px; display:block;">
				<?php if($PUBLICACION['listado']['href_siguiente']!=''){ ?>
                <a href='<?php echo procesar_url($PUBLICACION['listado']['href_siguiente']);?>'>
                <?php } ?>
                <img alt="<?php echo $item['alt'];?>" title="<?php echo $item['title'];?>" <?php echo $item['get_atributos'];?> class="foto" />                        
                <?php if($PUBLICACION['listado']['href_siguiente']!=''){ ?>
                </a>
                <?php } ?>            
            </span>
            <?php } ?>           
            </p>
		<?php 
		break;
		case "locales":  
		?>
        <h1 class="titulo">Centros de distribución</h1>   				
        <div class="paginacion"><?php echo $PUBLICACION['listado']['anterior'];?><?php echo $PUBLICACION['listado']['tren'];?><?php echo $PUBLICACION['listado']['siguiente'];?></div>
                 
        	<div style="margin-bottom:15px;">
            <h2 class="variable">
			<?php echo $PUBLICACION['listado']['nombre_local'];?>
            </h2>
            <div class="valor">
			<?php    
            foreach($PUBLICACION['listado']['filas'] as $local){
			?>   
				<div style="padding-top:14px;">
					<a class="anchor" name="local_<?php echo $local['id'];?>"><b><?php echo $local['nombre'];?></b></a>
					<div><?php echo $local['descripcion'];?></div>
					<div><b>Dirección</b> : <address><?php echo $local['direccion'];?></address></div>
					<div><b>Teléfono</b> : <?php echo $local['telefono'];?></div>
					<div><b>Email</b> : <?php echo $local['email'];?></div>                        
				</div>
			<?php 
            }
            ?>            
            </div>
            </div>
		<?php 
		break;			
		case "testimonios":  
		?>
        <h1 class="titulo">Testimonios</h1>   				
        <div class="paginacion"><?php echo $PUBLICACION['listado']['anterior'];?><?php echo $PUBLICACION['listado']['tren'];?><?php echo $PUBLICACION['listado']['siguiente'];?></div>
        <a class="link_dejar-testimonio" href="<?php echo $PUBLICACION['add_url'];?>">Dejar Testimonio</a>
        <?php    
        foreach($PUBLICACION['listado']['filas'] as $item){
        ?>                    
        	<div style="border-bottom:1px solid #999; margin-bottom:15px;">
                <h2 class="variable">
                <?php echo $item['fecha'];?>
                </h2>
                <p class="valor">
                <strong><?php echo $item['nombre'];?></strong>
                <div><?php echo $item['comentario'];?></div>
                </p>
            </div>
		<?php 
		} 
		break;	
		case "videos_1":  case "videos_2":  
		?>
        <div class="titulo"><?php echo $PUBLICACION['listado']['titulos']; ?></div>   				
        <div class="paginacion"><?php echo $PUBLICACION['listado']['anterior'];?><?php echo $PUBLICACION['listado']['tren'];?><?php echo $PUBLICACION['listado']['siguiente'];?></div>
        <?php    
        foreach($PUBLICACION['listado']['filas'] as $item){//id,url,titulo,tipo,descripcion,foto,fecha_creacion

        ?>                    
        	<div style="margin-bottom:15px;">
                <h2 class="variable">
                <?php echo $item['titulo'];?>
                </h2>
                <p class="valor">
                <a href="<?php echo $item['url'];?>" id="mb<?php echo $item['id'];?>" class="mb foto" title="<?php echo $item['title'];?>" rel="width:320,height:266,[flash]"><img alt="<?php echo $item['alt'];?>" title="<?php echo $item['title'];?>" <?php echo $item['get_atributos'];?> align="right" class="foto margen-izquierda"/></a>
                <?php echo $item['descripcion'];?> 
                <a href="<?php echo $item['url'];?>"  class="mb ver_video" title="<?php echo $item['title'];?>" rel="width:320,height:266,[flash]">ver video</a>
                </p>
               
                <div class="multiBoxDesc mb<?php echo $item['id'];?> mbHidden"><?php echo $item['titulo'];?></div>            
            </div>
		<?php 
		} ?>
		<script type="text/javascript">
        window.addEvent('domready', function(){
            //call multiBox
            var initMultiBox = new multiBox({
                mbClass: '.mb',//class you need to add links that you want to trigger multiBox with (remember and update CSS files)
                container: $(document.body),//where to inject multiBox
                descClassName: 'multiBoxDesc',//the class name of the description divs
                path: './swf/',//path to mp3 and flv players
                useOverlay: true,//use a semi-transparent background. default: false;
                maxSize: {w:600, h:400},//max dimensions (width,height) - set to null to disable resizing
                addDownload: false,//do you want the files to be downloadable?
                //pathToDownloadScript: './Scripts/ForceDownload.asp',//if above is true, specify path to download script (classicASP and ASP.NET versions included)
                addRollover: true,//add rollover fade to each multibox link
                addOverlayIcon: false,//adds overlay icons to images within multibox links
                addChain: true,//cycle through all images fading them out then in
                recalcTop: true,//subtract the height of controls panel from top position
                addTips: true//adds MooTools built in 'Tips' class to each element (see: http://mootools.net/docs/Plugins/Tips)
            });
        });
        </script>        
        <?php
		break;
		}
		?>              
		</div>
        
	</div>
</div>
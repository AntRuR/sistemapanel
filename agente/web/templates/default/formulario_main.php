<?php //á
?>
<div id="div_formulario_main">

         <?php
		switch($_GET['tab']){	
		
		
		case "boletin":
		?>

        	<h1 class="titulo">Boletín Electrónico</h1>   
            <div class="valor">            
            <?php
			if($FORMULARIO['boletin']['gracias']!=''){

			echo "<div class='mensaje'>".$FORMULARIO['boletin']['gracias']."</div>";
			
			} else { 
			
			?>
            <form id="boletin" method="post" name="contacto" class="formularios boletin" action="<?php echo procesar_url('index.php?modulo=formulario&tab=boletin');?>" >
            <fieldset>
            <legend><a name="boletin">Inscríbete en nuestro boletín electrónico</a></legend>
            
            <?php 
			foreach($FORMULARIO['boletin']['campos'] as $field){ 
			?>
            <p class="camps">
            <label for="<?php echo $field['campo'];?>"><?php echo $field['label'];?>:</label>
            <?php switch($field['tipo']){ 
            case "input_text": ?>
            <input type="text" name="<?php echo $field['campo'];?>" id="<?php echo $field['campo'];?>" class="<?php echo $field['validacion'];?>" />
			<?php break; 
            case "textarea": ?>
            <textarea name="<?php echo $field['campo'];?>" cols="30" rows="7" id="<?php echo $field['campo'];?>" class="<?php echo $field['validacion'];?>" ></textarea>
			<?php break;
            } ?>
            </p>
            <?php 
			} 
			?>
            <p class="submit">
			<label>&nbsp;</label>
            <input type="submit" value="Enviar"  />
            <input type="reset" value="Cancelar"  />
            </p>
            </fieldset>
            </form>
			<script type="text/javascript">
			
                window.addEvent('domready', function(){
                    new FormCheck('boletin');
                });
				
            </script>             
            <?php
			
			} 
			
			?>
            </div> 
        <?php
		break;
		
				
		case "contacto": 
		?>
        	<h1 class="titulo">Contacto</h1>   
            <div class="texto">
            <?php
			if($FORMULARIO['contacto']['gracias']!=''){
			
				echo "<div class='mensaje'>";
				echo $FORMULARIO['contacto']['gracias'];
				echo "</div>";
			
			} else { 
			?>            
            <p class="contacto_texto">
            AGENTE INMOBILIARIO<br />
            <br />
			<?php echo $COMMON['direccion'];?><br />
            <?php echo $COMMON['telefonos'];?><br />
            <?php echo $COMMON['email'];?>
            </p>	            
            
            <form id="contacto" method="post" name="contacto" class="formularios contacto" action="<?php echo procesar_url('index.php?modulo=formulario&tab=contacto'); ?>">
            <fieldset>
            <legend>Déjenos su consulta y le contestaremos en breve</legend>
            
            <?php 
			foreach($FORMULARIO['contacto']['campos'] as $field){ 
			?>
            <p class="camps">
            <label for="<?php echo $field['campo'];?>"><?php echo $field['label'];?>:</label>
            <?php switch($field['tipo']){ 
            case "input_text": ?>
            <input type="text" name="<?php echo $field['campo'];?>" id="<?php echo $field['campo'];?>" class="<?php echo $field['validacion'];?>" />
			<?php break; 
            case "textarea": ?>
            <textarea name="<?php echo $field['campo'];?>" cols="30" rows="7" id="<?php echo $field['campo'];?>" class="<?php echo $field['validacion'];?>" ></textarea>
			<?php break;
            } ?>
            </p>
            <?php 
			} 
			?>
            <p class="submit">
			<label>&nbsp;</label>
            <input type="submit" value="Enviar"  />
            <input type="reset" value="Cancelar"  />
            </p>
            </fieldset>
            </form>
			<script type="text/javascript">
			
                window.addEvent('domready', function(){
                    new FormCheck('contacto');
                });
			
            </script>            
			<?php } ?>            
            
            </div> 
        <?php
		break;		
		case "dejar-testimonio":
		?>

        	<h1 class="titulo">Déjanos tu testimonio</h1>   
            <div class="valor">            
            <?php
			if($FORMULARIO['dejar-testimonio']['gracias']!=''){

			echo "<div class='mensaje'>";
			echo $FORMULARIO['dejar-testimonio']['gracias'];
			echo "</div>";
			
			} else { 
			
			?>
            <form id="dejar-testimonio" method="post" name="contacto" class="formularios dejar-testimonio" action="<?php echo procesar_url('index.php?modulo=formulario&tab=dejar-testimonio');?>" >
            <fieldset>
            <legend><a name="contactenos">Déjanos tu testimonio y en brevé lo verás publicado</a></legend>
            
            <?php 
			foreach($FORMULARIO['dejar-testimonio']['campos'] as $field){ 
			?>
            <p class="camps">
            <label for="<?php echo $field['campo'];?>"><?php echo $field['label'];?>:</label>
            <?php switch($field['tipo']){ 
            case "input_text": ?>
            <input type="text" name="<?php echo $field['campo'];?>" id="<?php echo $field['campo'];?>" class="<?php echo $field['validacion'];?>" />
			<?php break; 
            case "textarea": ?>
            <textarea name="<?php echo $field['campo'];?>" cols="30" rows="7" id="<?php echo $field['campo'];?>" class="<?php echo $field['validacion'];?>" ></textarea>
			<?php break;
            } ?>
            </p>
            <?php 
			} 
			?>
            <p class="submit">
			<label>&nbsp;</label>
            <input type="submit" value="Enviar"  />
            <input type="reset" value="Cancelar"  />
            </p>
            </fieldset>
            </form>
			<script type="text/javascript">
			
                window.addEvent('domready', function(){
                    new FormCheck('dejar-testimonio');
                });
				
            </script>             
            <?php
			
			} 
			
			?>
            </div> 
        <?php
		break;		
		}
		?>

</div>
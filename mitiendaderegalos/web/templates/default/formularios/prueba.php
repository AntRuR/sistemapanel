<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"  />
<meta http-equiv="Content-Style-Type" content="text/css" />
</head>
<link type="text/css" rel="stylesheet" href="css/css.css" />
<link type="text/css" rel="stylesheet" href="css/theme/grey/formcheck.css" />
<script type="text/javascript" src="js/mootools-core-1.3.2-full-compat-yc.js"></script>
<script type="text/javascript" src="js/mootools-more-1.3.2.1.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/lang/es.js"></script>
<script type="text/javascript" src="js/formcheck.js"></script>

<body>



	<div class='cuadro id_registro registro-bloques bloque_cuadro_18 registro-formularios form_02' style="width:400px; text-align:left;">
    <!--FORM INICIO-->
    <form action="formulario.php" class="formularios" name="registro" method="post" id="formulario_registro">
    
    <div class="form_body" id="registro_form_body">

		<div id="p_registro_nombre" class="camps">                
            <label for="registro_nombre" class="name">Nombre y Apellidos<b>*</b></label>
            <input type="text" value="" class="caja validate['required']" id="registro_nombre" name="nombre">
        </div>    
    					    
		<div id="p_registro_ciudad" class="camps">
        	<label for="registro_ciudad" class="name">Ciudad y Pais de procedencia<b>*</b></label>
            <input type="text" value="" class="caja validate['required']" id="registro_ciudad" name="ciudad">
        </div>    
    					    
		<div id="p_registro_fecha" class="camps">
        	<label for="registro_fecha" class="name">Fecha de servicio<b></b></label>
            <span style="position:relative;" class="control">
		        <input type="text" class="validate['required']" style="position:absolute; right:0px; visibility:hidden;" id="registro_fecha" name="fecha">
        		<select id="registro_fecha_d" class="registro_fecha">
			        <option value="">día</option>
        			<option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
        			</select>
        		<select id="registro_fecha_m" class="registro_fecha">
        			<option value="">mes</option>
        			<option value="01">Enero</option><option value="02">Febrero</option><option value="03">Marzo</option><option value="04">Abril</option><option value="05">Mayo</option><option value="06">Junio</option><option value="07">Julio</option><option value="08">Agosto</option><option value="09">Setiembre</option><option value="10">Octubre</option><option value="11">Noviembre</option><option value="12">Diciembre</option></select>
        		<select id="registro_fecha_a" class="registro_fecha">
        			<option value="">año</option>	
        			<option value="2012">2012</option><option value="2011">2011</option>
                  </select>
            
        		<script>
				$$('.registro_fecha').addEvent('change',function(){
				if($('registro_fecha_a').value!='' && $('registro_fecha_m').value!='' && $('registro_fecha_d').value!=''){$('registro_fecha').value=$('registro_fecha_a').value+'-'+$('registro_fecha_m').value+'-'+$('registro_fecha_d').value+' 00:00:00';}});
		        </script>
    		</span>
    	</div>    
    					    
		<div id="p_registro_hora_servicio" class="camps">                
        	<label for="registro_hora_servicio" class="name">Hora exacta de servicio<b>*</b></label>
            <input type="text" value="" class="caja validate['required']" id="registro_hora_servicio" name="hora_servicio">
        </div>    
    					                          
		<div id="p_registro_lugar_servicio" class="camps">                
        	<label for="registro_lugar_servicio" class="name">Lugar de recojo<b>*</b></label>
            <select value="6" class="caja validate['required']" id="registro_lugar_servicio" name="lugar_servicio">
    			<option value=""></option>
    			<option value="Aeropuerto">Aeropuerto</option>
                <option value="Hotel">Hotel</option>
                <option value="Domicilio">Domicilio</option>
            </select>
	    </div>                                 
    					    
		<div id="p_registro_direccion_recojo" class="camps">                
        	<label for="registro_direccion_recojo" class="name">Dirección de recojo en Lima<b>*</b></label>
            <input type="text" value="" class="caja validate['required']" id="registro_direccion_recojo" name="direccion_recojo">
        </div>    
    					    
		<div id="p_registro_direccion_destino" class="camps">                
        	<label for="registro_direccion_destino" class="name">Dirección de destino en Lima</label>
            <input type="text" value="" class="caja" id="registro_direccion_destino" name="direccion_destino">
        </div>    
    					    
		<div id="p_registro_telefono" class="camps">                
        	<label for="registro_telefono" class="name">Teléfono<b>*</b></label>
            <input type="text" value="" class="caja validate['phone','required']" id="registro_telefono" name="telefono">
        </div>    
    					    
		<div id="p_registro_email" class="camps">                
             <label for="registro_email" class="name">Email</label>
             <input type="text" value="" class="caja validate['email']" id="registro_email" name="email">
        </div>    
    					    
		<div id="p_registro_vuelo" class="camps">                
        	<label for="registro_vuelo" class="name">Aerolínea y N° de Vuelo (servicio de Llegada)</label>
            <input type="text" value="" class="caja" id="registro_vuelo" name="vuelo">
        </div>    
    					    
		<div id="p_registro_pasajeros" class="camps">                
        	<label for="registro_pasajeros" class="name">Número de Pasajeros</label>
            <input type="text" value="" class="caja" id="registro_pasajeros" name="pasajeros">
        </div>    
        
		<div id="p_registro_tipo_movilidad" class="camps">                
        	<label for="registro_tipo_movilidad" class="name">Tipo de Movilidad solicitada<b>*</b></label>
            <select value="6" class="caja validate['required']" id="registro_tipo_movilidad" name="tipo_movilidad">
    			<option value=""></option>
    			<option value="Auto">Auto</option>
                <option value="Van">Van</option>
            </select>
	    </div>           
    					    
		<div id="p_registro_comentario" class="camps">                
        	<label for="registro_comentario" class="name">Comentario<b></b></label>
            <textarea class="caja" id="registro_comentario" rows="7" cols="30" name="comentario"></textarea>
    	</div>    
        
        <div id="p_registro_submit" class="camps submit">
	    	<label class="name">&nbsp;</label>
    		<input type="submit" value="Enviar" id="registro_submit">
	        <!--<input type="reset" value="Cancelar"  />-->
	    </div>
    	<div id="p_registro_pie" class="camps pie small"><label class="name">&nbsp;</label>
			<span class="small">los campos con * son obligatorios</span></div>        
		</div>                   
    
                <script type="text/javascript">
                window.addEvent('domready', function(){
                    $$('.autoinput').each(function(ee) { 
                        ee.title=ee.value;
                        ee.addEvent('blur',function(event){ if(ee.value=='') ee.value=ee.title; });
                        ee.addEvent('focus',function(event){ if(ee.value==ee.title) ee.value=''; });	
                    });						
                    $('formulario_registro').addEvent('submit', function(event){
                        $$('#formulario_registro .autoinput').each(function(ee) { 
                            if(ee.title==ee.value){ ee.value=''; }
                        });
                    });
					$('formulario_registro').addEvent('submit', function(event){
						$$('#formulario_registro textarea').each(function(el){
						if (el.title =='html'){	el.value=MOOEDITABLE.getContent(); }
						});						
                    });	
					var submit_temp_registro;			
                    new FormCheck('formulario_registro',{
                        onSubmit:function() { 
						}       
                        ,submitByAjax:true
                        ,onAjaxRequest:function() { 
                            $('registro_submit').value="Enviando...";
							submit_temp_registro=$('registro_submit').value;
                            $('registro_submit').disabled=true; 
							                        }
                        ,onAjaxSuccess:function(ee) { 
                            $('formulario_registro').reset();
                            $('registro_submit').value=submit_temp_registro;
                            $('registro_submit').disabled=false; 
							var json=JSON.decode(ee,true);
							new Element('div', {
								'class': 'mensaje mensaje_'+json.t,
								'html': json.m,
								'id': 'mensaje_'+json.n										
							}).inject($(json.n+'_form_body'), 'before');
							$0(json.n+'_form_body');
							setTimeout("$('mensaje_"+json.n+"').destroy(); if('"+json.t+"'=='error'){$1('"+json.n+"_form_body');}else{if('"+json.u+"'!=''){	location.href='"+json.u+"'; } else { location.reload(); } } ",10000);							
                        }					
						,display : {
							closeTipsButton : 1
						}

                    });
                });
            </script>  
         
    
    </form>
    <!--FORM FIN-->
    </div>
    
	<div class="clean"></div>    
    
</body>

</html>

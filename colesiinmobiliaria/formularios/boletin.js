		function render_boletin(){
				$0('b1'); $0('b2'); $1('b3'); 
        if (http_request.readyState == 4) {		
            if (http_request.status == 200) {
		$0('b1'); $1('b2'); $0('b3');
		setTimeout("pedir('formularios/boletin_formulario.html','render_b');",10000);
            } else {
                alert('Hubo problemas con el envio de la informaci�n por favor vuelva a intentarlo.');
            }
        }
		}

function press_boletin(tecla){
if (tecla == 13)  { enviar_boletin(); }
}

function enviar_boletin(){
if(
   ($(nombreb).value!='aqu� su nombre')&&
   ($(emailb).value!='aqu� su email')
   ){
pedir('formularios/boletin_envio.php?'+
	  'email='+$(emailb).value+
	  '&nombre='+$(nombreb).value+
	  '&ajax=ran','render_boletin')
} else {
alert('es obligatorio registrar el campos nombre y el campo email, despues haga clic en enviar.');
}
}
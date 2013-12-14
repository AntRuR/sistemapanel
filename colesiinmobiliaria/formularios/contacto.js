
function render_contacto(){

	$0('c1'); $0('c2'); $1('c3'); 
        if (http_request.readyState == 4) {		
            if (http_request.status == 200) {
		$0('c1'); $1('c2'); $0('c3');
		setTimeout("pedir('formularios/contacto_formulario.html','render_c');",10000);
		  } else {
                alert('Hubo problemas con el envio de la información por favor vuelva a intentarlo.');
            }
        }
		}
		
function press_contacto(tecla){
if (tecla == 13)  { enviar_contacto(); }
}

function enviar_contacto(){
if(($(nombrec).value!='')&&($(emailc).value!='')&&($(comentariosc).value!='')){
pedir('formularios/contacto_envio.php?'+
'email='+$(emailc).value+
'&nombre='+$(nombrec).value+
'&telefono='+$(telefonoc).value+
'&celular='+$(celularc).value+
'&pais='+$(paisc).value+
'&mensaje='+$(comentariosc).value.split('\n').join('<br>')+
'&ajax=ran','render_contacto')
} else {
alert('por favor escriba su nombre y su email y despues haga clic en enviar.');
}
}
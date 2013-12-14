function render_terreno(){
	$0('t1'); $0('t2'); $1('t3'); 
        if (http_request.readyState == 4) {		
            if (http_request.status == 200) {
$0('t1'); $1('t2'); $0('t3');
		setTimeout("pedir('formularios/terreno_formulario.html','render_t');",10000);
		} else {
                alert('Hubo problemas con el envio de la información por favor vuelva a intentarlo.');
            }
        }
		}

function press_terreno(tecla){
if (tecla == 13)  { enviar_terreno(); }
}

function enviar_terreno(){
if(($(nombret).value!='')&&($(emailt).value!='')){
pedir('formularios/terreno_envio.php?'+
'email='+$(emailt).value+
'&nombre='+$(nombret).value+
'&telefono='+$(telefonot).value+
'&celular='+$(celulart).value+
'&direccion='+$(direcciont).value+
'&mensaje='+$(comentariost).value+
'&direccionterreno='+$(direccionterreno).value+
'&distritoterreno='+$(distritoterreno).value+
'&areaterreno='+$(areaterreno).value+
'&medidasterreno='+$(medidasterrenot).value+
'&comentarios='+$(comentariost).value.split('\n').join('<br>')+
'&ajax=ran','render_terreno')
} else {
alert('por favor escriba su nombre y su email y despues haga clic en enviar.');
}
}
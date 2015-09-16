function $v(a){ return $(a).value; }
function $1(a){ $(a).style.display=''; }
function $0(a){ $(a).style.display='none'; }


/*BUSCADOR*/
function enviar_buscar(){

	var url='';	
	url+=($('buscador_tipo')&&($v('buscador_tipo')!=''))?"buscar-"+$v('buscador_tipo'):"buscar-inmuebles";	
	url+=($('buscador_aviso')&&($v('buscador_aviso')!=''))?"/"+$v('buscador_aviso'):"/alquiler-y-venta";	
	url+=($('buscador_departamento')&&($v('buscador_departamento')!=''))?"/en-"+$v('buscador_departamento'):"";
	url+=($('buscador_provincia')&&($v('buscador_provincia')!=''))?","+$v('buscador_provincia'):"";
	url+=($('buscador_distrito')&&($v('buscador_distrito')!=''))?","+$v('buscador_distrito'):"";	

	location.href=BASE+url;

}

function get_provincias(id){

	if(id==''){
		
		html ='<select id="buscador_provincia" disabled="disabled" name="provincia" onchange="get_distritos(this.value);" >'+
		'<option value="">Provincia</option>';
		html+='</select>';
		$('div_buscador_provincia').innerHTML=html;
	
	} else {
		
		new Request({url:"ajax.php?mode=get", method:'get', data:{'get':'provincias','id':id}, onSuccess:function(ee) {
		
		var json=JSON.decode(ee,true);
		
		html ='<select id="buscador_provincia" '+ ( (json.length==0)?"disabled='disabled'":"") +' name="provincia" onchange="get_distritos(this.value);" >'+
		'<option value="">Provincia</option>';
		for(var i=0;i<json.length;i++){
		html+='<option value="'+json[i].i+'">'+json[i].n+'</option>';
		}
		html+='</select>';
		$('div_buscador_provincia').innerHTML=html;
		}}).send();
	
	}
	
	html ='<select id="buscador_distrito" disabled="disabled" name="distrito" >'+
	'<option value="">Distrito</option>';
	html+='</select>';
	$('div_buscador_distrito').innerHTML=html;	

}

function get_distritos(id){

	if(id==''){

	html ='<select id="buscador_distrito" disabled="disabled" name="distrito" >'+
	'<option value="">Distrito</option>';
	html+='</select>';
	$('div_buscador_distrito').innerHTML=html;
	
	} else {
		
	new Request({url:"ajax.php?mode=get", method:'get', data:{'get':'distritos','id':id}, onSuccess:function(ee) {
	
	var json=JSON.decode(ee,true);
	
	html ='<select id="buscador_distrito" '+ ( (json.length==0)?"disabled='disabled'":"") +' name="distrito" >'+
	'<option value="">Distrito</option>';
	for(var i=0;i<json.length;i++){
	html+='<option value="'+json[i].i+'">'+json[i].n+'</option>';
	}
	html+='</select>';
	$('div_buscador_distrito').innerHTML=html;
	
	}}).send();
	
	}

}

/*AUTOCOMPLETAR INPUT*/
/*
window.addEvent('domready',function(){
	$$('.autoinput').each(function(ee) { 
	ee.value=ee.title;
	ee.addEvent('blur',function(event){ if(ee.value=='') ee.value=ee.title; });
	ee.addEvent('focus',function(event){ if(ee.value==ee.title) ee.value=''; });	
	});
});
*/



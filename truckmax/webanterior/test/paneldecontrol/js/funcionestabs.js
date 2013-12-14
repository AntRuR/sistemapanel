// JavaScript Document
var peticion = false; 
if (window.XMLHttpRequest) {
      peticion = new XMLHttpRequest();
      } else if (window.ActiveXObject) {
            peticion = new ActiveXObject("Microsoft.XMLHTTP");
}
function ObtenerDatos(datos,divID) { 
if(peticion) {
     var obj = document.getElementById(divID);
     peticion.open("GET", datos);
     peticion.onreadystatechange = function()  { 
	 //le aumente el peticion.readyState == 1 porque 1 es cuando esta cargandose la pagina
	if(peticion.readyState == 1){
			obj.innerHTML= '<img src="imagenes/loading.gif">';
		}
	  if (peticion.readyState == 4) {
		  //peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		   obj.innerHTML = peticion.responseText;
	  }
     } 
peticion.send(null); 
}
}
// JavaScript Document
function validarEmail(valor) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)){
   return (true)
  } else {
   return (false);
  }
}
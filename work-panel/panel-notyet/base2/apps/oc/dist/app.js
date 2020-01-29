"use strict";

window.addEvent('load', function () {
  // document.body.classList.add("noedit");
  // document.body.classList.add("validado");
  // document.body.classList.add("editarvin");
  console.log("id_orden_lista : ".concat(id_orden_lista));
  console.log("id_documento : ".concat(id_documento));
  console.log("ModoFormulario : ".concat(ModoFormulario));
  console.log("id_permisos : ".concat(id_permisos));
  console.log("current_status : ".concat(current_status));
  document.getElementById("inner").insertAdjacentHTML('afterend', "<li id=\"i_".concat(id_orden_lista, "\"></li>"));

  if ((ModoFormulario == 'activacion' || ModoFormulario == 'activacion_editar') && id_permisos != 3) {
    document.getElementById("message").innerHTML = "\n        <div class=\"alert alert-danger\" role=\"alert\">\n            s\xF3lo el asesor comercial puede activar una orden de compra\n        </div>";
    return;
  }

  if (ModoFormulario == 'activacion' && id_permisos == 3) {
    abrir_crear('1', '0');
  }

  if (ModoFormulario == 'modificacion' && id_permisos == 3 || ModoFormulario == 'aprobacion' && id_permisos == 2 || ModoFormulario == 'aprobado' || ModoFormulario == 'aceptaranulacion' || ModoFormulario == 'aceptaraprobacion' || ModoFormulario == 'activacion_editar' && id_permisos == 3 || ModoFormulario == 'anulado') {
    ax('ec', id_orden_lista);
  }

  cuando_cargue_el_form();
});

var cuando_cargue_el_form = function cuando_cargue_el_form() {
  var intervalo = setInterval(function () {
    if (document.getElementById("linea_crear") && document.getElementById('load').style.display == 'none') {
      clearInterval(intervalo);

      if (ModoFormulario == 'activacion' || ModoFormulario == 'activacion_editar') {
        cargar_botones_chequear();
      }

      if ((ModoFormulario == 'modificacion' || ModoFormulario == 'aceptaraprobacion') && id_permisos == 3) {
        cargar_modificar();
      }

      if ((ModoFormulario == 'aprobacion' || ModoFormulario == 'aceptaraprobacion') && id_permisos == 2) {
        cargar_aprobar();
      }

      if (ModoFormulario == 'aprobado' || ModoFormulario == 'aceptaranulacion' || ModoFormulario == 'anulado') {
        cargar_aprobado();
      }

      carga_datos(dataRow, model);

      if (closed) {
        documento_cerrado();
      }
    }
  }, 100);
};

var documento_cerrado = function documento_cerrado() {
  bloquear_campos();
  document.getElementById('status_label').innerHTML = "Terminada";
  document.getElementById('message').innerHTML = "\n            <div class=\"alert alert-danger\" role=\"alert\">\n                Orden de Compra terminada, no se puede realizar ninguna acci\xF3n.\n            </div>         \n    ";
};
/*
   ###     ######  ######## #### ##     ##    ###     ######  #### ##    ##
  ## ##   ##    ##    ##     ##  ##     ##   ## ##   ##    ##  ##  ###   ##
 ##   ##  ##          ##     ##  ##     ##  ##   ##  ##        ##  ####  ##
##     ## ##          ##     ##  ##     ## ##     ## ##        ##  ## ## ##
######### ##          ##     ##   ##   ##  ######### ##        ##  ##  ####
##     ## ##    ##    ##     ##    ## ##   ##     ## ##    ##  ##  ##   ###
##     ##  ######     ##    ####    ###    ##     ##  ######  #### ##    ##
*/


var cargar_botones_chequear = function cargar_botones_chequear() {
  document.getElementById('titulo_crear').innerHTML = "";
  document.getElementById('titulo_editar').innerHTML = "";
};

var carga_datos = function carga_datos(datos, model) {
  Object.keys(datos).map(function (key, index) {
    var inkey = "in_".concat(key);
    var eleInKey = document.getElementById(inkey);

    if (eleInKey) {
      var campo = model[key];

      if (campo.tipo == 'inp' || campo.tipo == 'txt' || campo.tipo == 'com' || campo.tipo == 'hid' || campo.tipo == 'fch' && datos[key] != null // || campo.tipo=='com'
      ) {
          // before
          if (campo.tipo == 'fch' // && false
          ) {
              var cal = datos[key];
              var cals = cal.split(" ");
              var cal1 = cals[0].split("-");
              document.getElementById("in_".concat(key, "_d")).value = cal1[2];
              document.getElementById("in_".concat(key, "_m")).value = cal1[1];
              document.getElementById("in_".concat(key, "_a")).value = cal1[0];
              document.getElementById("in_".concat(key, "_t")).value = cals[1];
            } // else if(
          //     campo.tipo=='hid' && (campo.load) 
          //     && false 
          // ){
          //     eleInKey.setAttribute('data-await',datos[key]);
          //     console.log(`Campo ${key} del tipo ${campo.tipo} con valor ${datos[key]} 
          //     tiene un load ${campo.load}`);
          // } 


          eleInKey.value = datos[key]; // after

          if (campo.tipo == 'com' && campo.eventos) {
            eleInKey.onchange();
          }
        } else {
        console.log("Campo ".concat(key, " del tipo ").concat(campo.tipo, " con valor ").concat(datos[key], " \n                no hizo un input correcto"));
      }
    } // else 
    //     console.log(`No hay ${key}`);

  }); // document.getElementById('in_banco_operacion').value='123123';
  // document.getElementById('in_moneda').value='dolares';
  // document.getElementById('in_banco_monto').value='19000';
  // document.getElementById('in_producto_tc').value='3.2';
};

var click_check_code = function click_check_code() {
  var banco_operacion = document.getElementById('in_banco_operacion').value;

  if (banco_operacion.trim() == '') {
    document.getElementById("message").innerHTML = "\n        <div class=\"alert alert-danger\" role=\"alert\">\n            no se permite c\xF3digo de operaci\xF3n vacio\n        </div>";
    return;
  }

  new Request({
    url: "".concat(RUTA, "&ajax=1&req=check_code"),
    method: 'post',
    data: {
      'codigo': document.getElementById('in_banco_operacion').value
    },
    onSuccess: function onSuccess(eee) {
      var mydata = JSON.parse(eee);
      var eleme = document.getElementById("alert_in_banco_operacion");
      if (eleme) eleme.parentNode.removeChild(eleme); // document.getElementById("id_in_banco_operacion").insertAdjacentHTML(
      //     'afterend',
      //     '<li id="alert_in_banco_operacion" class="linea_form"></li>'
      // );

      if (mydata.check) {
        document.getElementById("message").innerHTML = "\n                    <div class=\"alert alert-success\" role=\"alert\">\n                        C\xD3DIGO \xDANICO\n                    </div>";
        document.getElementById("id_in_banco_explicacion_duplicidad").style.display = "none";
        document.body.classList.add("validado");
      } else {
        document.getElementById("message").innerHTML = "\n                    <div class=\"alert alert-danger\" role=\"alert\">\n                        Este c\xF3digo ya ha sido ingresado con anterioridad. Indique el motivo de la duplicidad\n                    </div>";
        document.getElementById("id_in_banco_explicacion_duplicidad").style.display = "block";
        document.body.classList.add("validado");
      }

      cargar_botones_activar(); // alert('mensaje enviado');
      // window.close();
    }
  }).send();
};

var cargar_botones_activar = function cargar_botones_activar() {
  document.getElementById('titulo_crear').innerHTML = "Orden de Compra Activada"; // document.getElementById('linea_crear').innerHTML=`
  //         <label>&nbsp;</label>
  //         <input type="hidden" id="mode" value="insert">`
  // +`<input type="button" id="in_submit" class="btn  btn-primary" value="Activar OC" onclick="ax('insertar','');cuando_termine_de_grabar('activar');">`
  // +`<input type="button" id="in_cancel" class="btn  btn_default" value="Cerrar" onclick="click_close_window();">`
};

var cuando_termine_de_grabar_activar = function cuando_termine_de_grabar_activar() {
  var intervalo = setInterval(function () {
    if (document.getElementById("bloque_content_crear").style.display == "none") {
      clearInterval(intervalo);
      cargar_despues_de_activar();
      return false;
    }
  }, 100);
};

var cargar_despues_de_activar = function cargar_despues_de_activar() {
  document.body.classList.add("after_save");
  document.getElementById('status_label').innerHTML = 'Activado';
  document.getElementById('message').innerHTML = "\n            <div class=\"alert alert-success\" role=\"alert\">\n                Activado exitosamente. \n            </div>\n            <div class=\"alert alert-primary\" role=\"alert\">\n                Desea editar la orden de compra?\n            </div>                       \n            ";
  return false;
};
/*
##     ##  #######  ########  #### ######## ####  ######     ###     ######  ####  #######  ##    ##
###   ### ##     ## ##     ##  ##  ##        ##  ##    ##   ## ##   ##    ##  ##  ##     ## ###   ##
#### #### ##     ## ##     ##  ##  ##        ##  ##        ##   ##  ##        ##  ##     ## ####  ##
## ### ## ##     ## ##     ##  ##  ######    ##  ##       ##     ## ##        ##  ##     ## ## ## ##
##     ## ##     ## ##     ##  ##  ##        ##  ##       ######### ##        ##  ##     ## ##  ####
##     ## ##     ## ##     ##  ##  ##        ##  ##    ## ##     ## ##    ##  ##  ##     ## ##   ###
##     ##  #######  ########  #### ##       ####  ######  ##     ##  ######  ####  #######  ##    ##
*/


var cargar_modificar = function cargar_modificar() {
  document.getElementById('titulo_editar').innerHTML = "Editar Orden de Compra";
  bloqueados_desde_elinicio();
  if (not_first) bloquear_campos('#group_cliente');

  if (current_status == '2') {
    document.getElementById('status_label').innerHTML = 'Modificado';
    document.body.classList.add('modificado');
  }

  if (current_status == '8') {
    document.getElementById('status_label').innerHTML = 'Modificado - En espera de aprobación';
    bloquear_campos();
    document.getElementById('message').innerHTML = "\n        <div class=\"alert alert-warning\" role=\"alert\">\n            La orden de compra est\xE1 a la espera de la aprobaci\xF3n del jefe. \n        </div>                   \n        ";
  }
};

var editar = function editar() {
  var campo = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

  if (ModoFormulario == 'aprobado' || ModoFormulario == 'aprobacion' || ModoFormulario == 'aceptaranulacion') //  && !(document.body.classList.contains('after_save'))
    {
      if (campo == 'vin') {
        document.body.classList.add('editarvin');
        document.getElementById('titulo_editar').innerHTML = "Editar Vin";
      } else {
        document.getElementById('titulo_editar').innerHTML = "Editar Orden de Compra";
      }

      document.body.classList.remove('after_save');
      document.body.classList.remove('noedit');
      ax('ec', id_orden_lista);
    } else {
    window_reload();
  }
};

var window_reload = function window_reload() {
  location.reload();
};

var cuando_termine_de_grabar_modificar = function cuando_termine_de_grabar_modificar() {
  var intervalo = setInterval(function () {
    if (document.getElementById("bloque_content_crear").style.display == "none") {
      clearInterval(intervalo);
      cargar_despues_de_modificar();
    }
  }, 100);
};

var cargar_despues_de_modificar = function cargar_despues_de_modificar() {
  document.body.classList.add("after_save");
  document.body.classList.add("modificado");
  document.body.classList.remove("editarvin");
  document.getElementById('titulo_crear').innerHTML = "Orden de Compra Modificada";
  document.getElementById('status_label').innerHTML = 'Modificado';
  document.getElementById('message').innerHTML = "\n    <div class=\"alert alert-success\" role=\"alert\">\n        Modificado exitosamente. \n    </div>                   \n    "; // document.getElementById('linea_grabar').style.display='none'
  // document.getElementById('linea_crear').style.display='block'
  // document.getElementById('linea_crear').innerHTML=`
  //         <div class="alert alert-success" role="alert">
  //             Modificado Exitosamente.
  //         </div>
  //         <div class="alert alert-primary" role="alert">
  //             Desea volver a editar la orden de compra?
  //         </div>     
  //         <label>&nbsp;</label>
  //         <input type="button" id="ed_save" class="btn  btn-primary" value="Editar OC" onclick="window_reload();">
  //         <input type="button" id="in_cancel" class="btn  btn_default" value="Cerrar" onclick="click_close_window();">
  // `
};
/*
   ###    ########  ########   #######  ########     ###     ######  ####  #######  ##    ##
  ## ##   ##     ## ##     ## ##     ## ##     ##   ## ##   ##    ##  ##  ##     ## ###   ##
 ##   ##  ##     ## ##     ## ##     ## ##     ##  ##   ##  ##        ##  ##     ## ####  ##
##     ## ########  ########  ##     ## ########  ##     ## ##        ##  ##     ## ## ## ##
######### ##        ##   ##   ##     ## ##     ## ######### ##        ##  ##     ## ##  ####
##     ## ##        ##    ##  ##     ## ##     ## ##     ## ##    ##  ##  ##     ## ##   ###
##     ## ##        ##     ##  #######  ########  ##     ##  ######  ####  #######  ##    ##
*/


var cargar_aprobar = function cargar_aprobar() {
  if (current_status == '2') {
    document.getElementById('status_label').innerHTML = 'Modificado';
  }

  if (current_status == '8') {
    document.getElementById('status_label').innerHTML = 'Modificado - En espera de aprobación';
    document.getElementById('message').innerHTML = "\n        <div class=\"alert alert-warning\" role=\"alert\">\n            Orden de compra en espera de ser aprobada.\n        </div>                   \n        ";
  }

  document.getElementById('titulo_crear').innerHTML = "Aprobar la Orden de Compra?"; // document.body.classList.add("noedit");

  bloqueados_desde_elinicio(); // ax('ec',id_orden_lista);
  // bloquear_campos();
  // document.getElementById('linea_grabar').innerHTML=`
  //         <label>&nbsp;</label>
  //         <input type="hidden" id="id_guardar" value="${id}">`
  // +`<input type="button" id="ed_save" class="btn  btn-primary" value="Guardar" onclick="ax('guardar_completo',$v('id_guardar'));cuando_termine_de_grabar('modificar');">`
  // +`<input type="button" class="btn  btn-success" value="Aprobar" onclick="aprobar_oc();">`
  // +`<input type="button" id="in_cancel" class="btn  btn_default" value="Cerrar" onclick="click_close_window();">`
};

var aprobar_oc = function aprobar_oc() {
  new Request({
    url: "".concat(RUTA, "&ajax=1&req=aprobar"),
    method: 'get',
    onSuccess: function onSuccess(eee) {
      document.body.classList.add("aprobado");
      document.body.classList.remove("aprobacion");
      document.body.classList.add("after_aproved");
      document.body.classList.add("noedit");
      document.getElementById("bloque_content_crear").style.display = "";
      document.getElementById('status_label').innerHTML = 'Aprobado';
      document.getElementById('message').innerHTML = "\n                    <div class=\"alert alert-success\" role=\"alert\">\n                        Aprobado exitosamente. \n                    </div>         \n                    ";
    }
  }).send();
};

var click_solicitar_aprobar = function click_solicitar_aprobar() {
  new Request({
    url: "".concat(RUTA, "&ajax=1&req=solicitaraprobar"),
    method: 'get',
    onSuccess: function onSuccess(eee) {
      document.body.classList.remove('aceptando_aprobacion');
      document.body.classList.add("after_requested");
      document.body.classList.add("aceptaraprobacion");
      document.body.classList.remove("modificacion");
      document.getElementById('titulo_crear').innerHTML = "Orden de compra";
      document.getElementById('status_label').innerHTML = 'Aprobación Solicitada';
      document.getElementById('message').innerHTML = "\n                    <div class=\"alert alert-success\" role=\"alert\">\n                        Solicitud de Aprobaci\xF3n Enviada. \n                    </div>";
      bloquear_campos();
    }
  }).send();
};

var click_aceptar_aprobar = function click_aceptar_aprobar() {
  if (true) {
    var not_first_value = not_first ? 1 : 0;
    new Request({
      url: "".concat(RUTA, "&ajax=1&req=aceptaraprobar&notfirst=").concat(not_first_value),
      method: 'get',
      onSuccess: function onSuccess(eee) {
        click_aceptar_aprobar_enviar_after();
      }
    }).send();
  } else {
    document.body.classList.add('aceptando_aprobacion');
    var html_select = "<select id=\"new_status\" class=\"form_input\">";
    html_select += "<option value=\"\"></option>";
    Object.keys(ventas_items_status).map(function (key, value) {
      html_select += "<option value=\"".concat(key, "\">").concat(ventas_items_status[key], "</option>");
    });
    html_select += "</select>";
    document.getElementById('message').innerHTML = "\n                <input type=\"hidden\" id=\"old_status\" value=\"".concat(old_ventas_items_status, "\">\n                <div class=\"alert alert-warning\" role=\"alert\">\n                    Debe modificar el estado de la atenci\xF3n : \n                    ").concat(html_select, "\n                </div>"); // document.getElementById('new_status').value='10';
  }
};

var click_aceptar_aprobar_cancelar = function click_aceptar_aprobar_cancelar() {
  document.body.classList.remove('aceptando_aprobacion');
};

var click_aceptar_aprobar_enviar = function click_aceptar_aprobar_enviar() {
  new Request({
    url: "".concat(RUTA, "&ajax=1&req=aceptaraprobar"),
    method: 'post',
    data: {
      'old_status': document.getElementById('old_status').value,
      'new_status': document.getElementById('new_status').value
    },
    onSuccess: function onSuccess(eee) {
      click_aceptar_aprobar_enviar_after();
    }
  }).send();
};

var click_aceptar_aprobar_enviar_after = function click_aceptar_aprobar_enviar_after() {
  document.body.classList.add("after_save");
  document.body.classList.add("after_answer");
  document.body.classList.remove("aceptando_aprobacion");
  document.getElementById('titulo_crear').innerHTML = "Orden de compra";
  document.getElementById('status_label').innerHTML = 'Aprobación Aceptada';
  document.getElementById('message').innerHTML = "\n            <div class=\"alert alert-warning\" role=\"alert\">\n                Solicitud de Aprobaci\xF3n Aceptada. \n            </div>         \n    ";
};

var click_denegar_aprobar = function click_denegar_aprobar() {
  new Request({
    url: "".concat(RUTA, "&ajax=1&req=denegaraprobar"),
    method: 'get',
    onSuccess: function onSuccess(eee) {
      document.body.classList.add("after_save");
      document.body.classList.add("after_answer");
      document.getElementById('titulo_crear').innerHTML = "Orden de compra";
      document.getElementById('status_label').innerHTML = 'Aprobación Denegada';
      document.getElementById('message').innerHTML = "\n                    <div class=\"alert alert-danger\" role=\"alert\">\n                        Solicitud de Aprobaci\xF3n Denegada. \n                    </div>         \n            ";
    }
  }).send();
};
/*
   ###    ########  ########   #######  ########     ###    ########   #######
  ## ##   ##     ## ##     ## ##     ## ##     ##   ## ##   ##     ## ##     ##
 ##   ##  ##     ## ##     ## ##     ## ##     ##  ##   ##  ##     ## ##     ##
##     ## ########  ########  ##     ## ########  ##     ## ##     ## ##     ##
######### ##        ##   ##   ##     ## ##     ## ######### ##     ## ##     ##
##     ## ##        ##    ##  ##     ## ##     ## ##     ## ##     ## ##     ##
##     ## ##        ##     ##  #######  ########  ##     ## ########   #######
*/


var cargar_aprobado = function cargar_aprobado() {
  document.getElementById('titulo_editar').innerHTML = "Orden de compra"; // document.body.classList.add("noedit");
  // ax('ec',id_orden_lista);

  if (id_permisos == 2 || id_permisos == 3) {
    bloquear_campos(); // document.getElementById("in_producto_color").disabled = false
    // document.getElementById("in_producto_anio").disabled = false
    // document.getElementById("in_producto_vin").disabled = false
    // document.getElementById("in_adicional_observaciones").disabled = false
  }

  if (id_permisos == 10) {
    bloquear_campos(); // bloquear_campos("#group_general");

    document.getElementById("in_producto_color").disabled = false;
    document.getElementById("in_producto_anio").disabled = false;
    document.getElementById("in_producto_vin").disabled = false;
    document.getElementById("in_adicional_observaciones").disabled = false;
  }

  if (ModoFormulario == 'aprobado') {// bloquear_campos();
    // document.getElementById('message').innerHTML=`
    // <div class="alert alert-warning" role="alert">
    //     Se ha solicitado la anulación de la orden de compra.
    // </div>`
  }

  if (ModoFormulario == 'aceptaranulacion') {
    if (id_permisos == 2 || id_permisos == 3) {
      document.getElementById('message').innerHTML = "\n                    <div class=\"alert alert-warning\" role=\"alert\">\n                        Se ha solicitado la anulaci\xF3n de la orden de compra al administrador.\n                        A la espera que sea Aceptada o Denegada. \n                    </div>";
    }

    if (id_permisos == 10) {
      document.getElementById('message').innerHTML = "\n                    <div class=\"alert alert-warning\" role=\"alert\">\n                        Se ha solicitado la anulaci\xF3n de la orden de compra.<br>\n                        con el siguiente motivo:\n                        <p><strong>\n                            ".concat(motivo_anulacion, "\n                        </strong></p>\n                    </div>");
    }
  }
};

var generar_pdf = function generar_pdf() {
  window.open("".concat(RUTA, "&ajax=1&req=pdf&id=").concat(id_orden_lista), '_blank');
};

var email = function email() {
  new Request({
    url: "".concat(RUTA, "&ajax=1&req=email"),
    method: 'get',
    onSuccess: function onSuccess(eee) {
      var mydata = JSON.parse(eee);

      if (mydata.emailed) {
        document.getElementById('message').innerHTML = "\n                <div class=\"alert alert-success\" role=\"alert\">\n                    Orden de Compra enviado a ".concat(mydata.to, "\n                </div>");
      } else {
        document.getElementById('message').innerHTML = "\n                <div class=\"alert alert-danger\" role=\"alert\">\n                    error al enviar\n                </div>";
        console.log("error:".concat(mydata.error));
      }
    }
  }).send();
};

var click_excel = function click_excel() {
  // location.href(`${RUTA}&ajax=1&req=req&id=${id}`, '_blank');
  window.open("".concat(RUTA, "&ajax=1&req=excel&id=").concat(id_orden_lista), '_blank');
};
/*
   ###    ##    ## ##     ## ##          ###     ######  ####  #######  ##    ##
  ## ##   ###   ## ##     ## ##         ## ##   ##    ##  ##  ##     ## ###   ##
 ##   ##  ####  ## ##     ## ##        ##   ##  ##        ##  ##     ## ####  ##
##     ## ## ## ## ##     ## ##       ##     ## ##        ##  ##     ## ## ## ##
######### ##  #### ##     ## ##       ######### ##        ##  ##     ## ##  ####
##     ## ##   ### ##     ## ##       ##     ## ##    ##  ##  ##     ## ##   ###
##     ## ##    ##  #######  ######## ##     ##  ######  ####  #######  ##    ##
*/


var click_solicitar_anulacion = function click_solicitar_anulacion() {
  document.body.classList.add('solicitando_anulacion'); // document.getElementById('leg_motivo_anulacion').innerHTML='Cual es el motivo para la anulación?';
  // document.getElementById('in_motivo_anulacion').focus();
  // document.getElementById('in_motivo_anulacion').innerHTML='tengo mis motivos';
  // document.getElementById("in_motivo_anulacion").insertAdjacentHTML(
  //     'afterend',
  //     `<li><a id="btn-enviar-solicitar-aprobacion" class="btn btn-warning" onclick="click_solicitar_anulacion_enviar();">Enviar</a>
  //     <a id="btn-cancelar-solicitar-aprobacion" class="btn btn-dark" onclick="click_solicitar_anulacion_cancelar();">Cancelar</a></li>`
  // );

  document.getElementById('message').innerHTML = "\n    <div class=\"alert alert-warning\" role=\"alert\">\n        Cual es el motivo para la anulaci\xF3n?\n        <textarea id=\"anulacion_motivo\"></textarea>\n    </div>                   \n    ";
  document.getElementById('anulacion_motivo').focus();
};

var click_solicitar_anulacion_cancelar = function click_solicitar_anulacion_cancelar() {
  document.body.classList.remove('solicitando_anulacion');
};

var click_solicitar_anulacion_enviar = function click_solicitar_anulacion_enviar() {
  new Request({
    url: "".concat(RUTA, "&ajax=1&req=anulacion"),
    method: 'post',
    data: {
      'motivo': document.getElementById('anulacion_motivo').value
    },
    onSuccess: function onSuccess(eee) {
      document.body.classList.remove('solicitando_anulacion');
      document.body.classList.add("after_requested");
      document.getElementById('titulo_editar').innerHTML = "Orden de compra";
      document.getElementById('status_label').innerHTML = 'Anulación Solicitada';
      document.getElementById('message').innerHTML = "\n                    <div class=\"alert alert-success\" role=\"alert\">\n                        Solicitud de Anulaci\xF3n Enviada. \n                    </div>";
    }
  }).send();
};

var click_aceptar_anulacion = function click_aceptar_anulacion() {
  new Request({
    url: "".concat(RUTA, "&ajax=1&req=aceptaranulacion"),
    method: 'get',
    onSuccess: function onSuccess(eee) {
      document.body.classList.add("after_save");
      document.getElementById('titulo_editar').innerHTML = "";
      document.getElementById('status_label').innerHTML = 'Anulado Aceptada';
      document.getElementById('message').innerHTML = "\n                    <div class=\"alert alert-success\" role=\"alert\">\n                        Solicitud de Anulaci\xF3n Aceptada. \n                    </div>         \n            ";
    }
  }).send();
};

var click_denegar_anulacion = function click_denegar_anulacion() {
  new Request({
    url: "".concat(RUTA, "&ajax=1&req=denegaranulacion"),
    method: 'get',
    onSuccess: function onSuccess(eee) {
      document.body.classList.add("after_save");
      document.getElementById('titulo_editar').innerHTML = "";
      document.getElementById('status_label').innerHTML = 'Anulación Denegada';
      document.getElementById('message').innerHTML = "\n                    <div class=\"alert alert-success\" role=\"alert\">\n                        Solicitud de Anulaci\xF3n Denegada. \n                    </div>         \n            ";
    }
  }).send();
}; // CERRAR


var click_close_window = function click_close_window() {
  parent.initMultiBox.close();
}; // RESET


var click_reset = function click_reset() {
  new Request({
    url: "".concat(RUTA, "&ajax=1&req=reset"),
    method: 'get',
    onSuccess: function onSuccess(eee) {
      location.reload();
    }
  }).send();
};

var bloquear_campos = function bloquear_campos() {
  var bloque = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
  var inputs = document.querySelectorAll("".concat(bloque, " .linea_form input,").concat(bloque, " .linea_form select,").concat(bloque, " .linea_form textarea"));
  inputs.forEach(function (item) {
    item.disabled = true;
  });
};

var bloqueados_desde_elinicio = function bloqueados_desde_elinicio() {
  bloquear_campos('#group_general');
  bloquear_campos('#group_operación');
  document.getElementById("in_producto_tc").disabled = true;
  document.getElementById("in_producto_marca").disabled = true;
  document.getElementById("in_producto_modelo").disabled = true;
  document.getElementById("in_producto_precio").disabled = true;
};

var noedit = function noedit() {
  document.body.classList.add('noedit');
  document.body.classList.remove('editarvin');
};
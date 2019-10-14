window.addEvent('load',()=>{

    // document.body.classList.add("noedit");
    // document.body.classList.add("validado");
    // document.body.classList.add("editarvin");
    
    console.log(`id_orden_lista : ${id_orden_lista}`);
    console.log(`id_documento : ${id_documento}`);
    console.log(`ModoFormulario : ${ModoFormulario}`);
    console.log(`id_permisos : ${id_permisos}`);
    console.log(`current_status : ${current_status}`);

    document.getElementById("inner").insertAdjacentHTML(
        'afterend',
        `<li id="i_${id_orden_lista}"></li>`
    );

    if((ModoFormulario=='activacion' || ModoFormulario=='activacion_editar') && id_permisos!=3){

        document.getElementById("message").innerHTML=`
        <div class="alert alert-danger" role="alert">
            sólo el asesor comercial puede activar una orden de compra
        </div>`;
        return;

    }

    if(ModoFormulario=='activacion' && id_permisos==3){

        abrir_crear('1','0');

    } 
    if( 
        (ModoFormulario=='modificacion' && id_permisos==3)
        || (ModoFormulario=='aprobacion' && id_permisos==2) 
        || (ModoFormulario=='aprobado')
        || (ModoFormulario=='aceptaranulacion')
        || (ModoFormulario=='aceptaraprobacion')
        || (ModoFormulario=='activacion_editar' && id_permisos==3)
        || (ModoFormulario=='anulado')
        )
    {          
        ax('ec',id_orden_lista);
    }	

    cuando_cargue_el_form();

});


const cuando_cargue_el_form = () => {

    let intervalo=setInterval( () => {
        if(
            document.getElementById("linea_crear") && 
            document.getElementById('load').style.display=='none'
        )
        {
            clearInterval(intervalo)
            if(ModoFormulario=='activacion' || ModoFormulario=='activacion_editar')
            {
                cargar_botones_chequear();
            }
            if( (ModoFormulario=='modificacion' || ModoFormulario=='aceptaraprobacion') && id_permisos==3){
                cargar_modificar();
            }
            if( (ModoFormulario=='aprobacion'|| ModoFormulario=='aceptaraprobacion') && id_permisos==2){
                cargar_aprobar();
            }      
            if(ModoFormulario=='aprobado' || ModoFormulario=='aceptaranulacion'  ||  ModoFormulario=='anulado')
            {
                cargar_aprobado();
            }
            carga_datos(dataRow,model);

            if(closed){
                documento_cerrado();
            }
                
        }
    },100);

}
const documento_cerrado = () => {

    bloquear_campos();
    document.getElementById('status_label').innerHTML=`Terminada`;
    document.getElementById('message').innerHTML=`
            <div class="alert alert-danger" role="alert">
                Orden de Compra terminada, no se puede realizar ninguna acción.
            </div>         
    `;

}
/*
   ###     ######  ######## #### ##     ##    ###     ######  #### ##    ##
  ## ##   ##    ##    ##     ##  ##     ##   ## ##   ##    ##  ##  ###   ##
 ##   ##  ##          ##     ##  ##     ##  ##   ##  ##        ##  ####  ##
##     ## ##          ##     ##  ##     ## ##     ## ##        ##  ## ## ##
######### ##          ##     ##   ##   ##  ######### ##        ##  ##  ####
##     ## ##    ##    ##     ##    ## ##   ##     ## ##    ##  ##  ##   ###
##     ##  ######     ##    ####    ###    ##     ##  ######  #### ##    ##
*/
const cargar_botones_chequear = () => {

    document.getElementById('titulo_crear').innerHTML=``;
    document.getElementById('titulo_editar').innerHTML=``;

}

const carga_datos = (datos,model) => {

    Object.keys(datos).map( (key, index) => {

        let inkey=`in_${key}`;
        let eleInKey=document.getElementById(inkey);
        if( eleInKey ){

            let campo=model[key];
            if( 
                campo.tipo=='inp'
                || campo.tipo=='txt'
                || campo.tipo=='com'
                || campo.tipo=='hid'
                || campo.tipo=='fch'
                
                && (datos[key]!=null) 
                // || campo.tipo=='com'
            ){

                // before
                if( 
                    campo.tipo=='fch' 
                    // && false
                ){

                    let cal = datos[key];
                    let cals = cal.split(" ");
                    let cal1 = cals[0].split("-");
    
                    document.getElementById(`in_${key}_d`).value=cal1[2];
                    document.getElementById(`in_${key}_m`).value=cal1[1];
                    document.getElementById(`in_${key}_a`).value=cal1[0];
                    document.getElementById(`in_${key}_t`).value=cals[1];
                        
                }

                // else if(
                //     campo.tipo=='hid' && (campo.load) 
                //     && false 
                // ){
                    
                //     eleInKey.setAttribute('data-await',datos[key]);
                    
                //     console.log(`Campo ${key} del tipo ${campo.tipo} con valor ${datos[key]} 
                //     tiene un load ${campo.load}`);

                // } 
                
                eleInKey.value=datos[key];

                // after
                if(
                    campo.tipo=='com' && (campo.eventos)

                ){

                    eleInKey.onchange();

                } 

            }  else {

                console.log(`Campo ${key} del tipo ${campo.tipo} con valor ${datos[key]} 
                no hizo un input correcto`);
                
            }

        }
        // else 
        //     console.log(`No hay ${key}`);
    });

    // document.getElementById('in_banco_operacion').value='123123';
    // document.getElementById('in_moneda').value='dolares';
    // document.getElementById('in_banco_monto').value='19000';
    // document.getElementById('in_producto_tc').value='3.2';
    
}

const click_check_code = () =>{

    let banco_operacion=document.getElementById('in_banco_operacion').value;
    if(banco_operacion.trim()==''){
        document.getElementById("message").innerHTML=`
        <div class="alert alert-danger" role="alert">
            no se permite código de operación vacio
        </div>`;
        return;
    }


    new Request({

        url     :`${RUTA}&ajax=1&req=check_code`,
        method  :'post',
        data:{
            'codigo'		:document.getElementById('in_banco_operacion').value
        },
        onSuccess:(eee)=>{

            let mydata = JSON.parse(eee);
            let eleme = document.getElementById("alert_in_banco_operacion");

            if(eleme)
                eleme.parentNode.removeChild(eleme);
                
            // document.getElementById("id_in_banco_operacion").insertAdjacentHTML(
            //     'afterend',
            //     '<li id="alert_in_banco_operacion" class="linea_form"></li>'
            // );

            if(mydata.check){

                document.getElementById("message").innerHTML=`
                    <div class="alert alert-success" role="alert">
                        CÓDIGO ÚNICO
                    </div>`;

                document.getElementById("id_in_banco_explicacion_duplicidad").style.display = "none";
                document.body.classList.add("validado");


            } else {

                document.getElementById("message").innerHTML=`
                    <div class="alert alert-danger" role="alert">
                        Este código ya ha sido ingresado con anterioridad. Indique el motivo de la duplicidad
                    </div>`;
                document.getElementById("id_in_banco_explicacion_duplicidad").style.display = "block";

                document.body.classList.add("validado");

            }

            cargar_botones_activar();

            // alert('mensaje enviado');
            // window.close();
        }
    }).send();				
}

const cargar_botones_activar = () => {

    document.getElementById('titulo_crear').innerHTML=`Orden de Compra Activada`;

    // document.getElementById('linea_crear').innerHTML=`
    //         <label>&nbsp;</label>
    //         <input type="hidden" id="mode" value="insert">`
            // +`<input type="button" id="in_submit" class="btn  btn-primary" value="Activar OC" onclick="ax('insertar','');cuando_termine_de_grabar('activar');">`
            // +`<input type="button" id="in_cancel" class="btn  btn_default" value="Cerrar" onclick="click_close_window();">`

}

const cuando_termine_de_grabar_activar = () =>{

    let intervalo=setInterval( () => {
        if(document.getElementById("bloque_content_crear").style.display=="none")
        {
            clearInterval(intervalo)
            cargar_despues_de_activar();
            return false;
        }
    },100);

}

const cargar_despues_de_activar = () => {
    

    document.body.classList.add("after_save");

    document.getElementById('status_label').innerHTML='Activado'

    document.getElementById('message').innerHTML=`
            <div class="alert alert-success" role="alert">
                Activado exitosamente. 
            </div>
            <div class="alert alert-primary" role="alert">
                Desea editar la orden de compra?
            </div>                       
            `;

    return false;

}

/*
##     ##  #######  ########  #### ######## ####  ######     ###     ######  ####  #######  ##    ##
###   ### ##     ## ##     ##  ##  ##        ##  ##    ##   ## ##   ##    ##  ##  ##     ## ###   ##
#### #### ##     ## ##     ##  ##  ##        ##  ##        ##   ##  ##        ##  ##     ## ####  ##
## ### ## ##     ## ##     ##  ##  ######    ##  ##       ##     ## ##        ##  ##     ## ## ## ##
##     ## ##     ## ##     ##  ##  ##        ##  ##       ######### ##        ##  ##     ## ##  ####
##     ## ##     ## ##     ##  ##  ##        ##  ##    ## ##     ## ##    ##  ##  ##     ## ##   ###
##     ##  #######  ########  #### ##       ####  ######  ##     ##  ######  ####  #######  ##    ##
*/
const cargar_modificar = () => {

    document.getElementById('titulo_editar').innerHTML=`Editar Orden de Compra`;

    bloqueados_desde_elinicio();

    if(not_first)
        bloquear_campos('#group_cliente');

    if(current_status=='2'){ 

        document.getElementById('status_label').innerHTML='Modificado'

        document.body.classList.add('modificado'); 

    }
    if(current_status=='8'){ 

        document.getElementById('status_label').innerHTML='Modificado - En espera de aprobación'

        bloquear_campos();

        document.getElementById('message').innerHTML=`
        <div class="alert alert-warning" role="alert">
            La orden de compra está a la espera de la aprobación del jefe. 
        </div>                   
        `    
    }

}

const editar = ( campo = null ) =>{

    if( 
        (ModoFormulario=='aprobado' ||  ModoFormulario=='aprobacion' ||  ModoFormulario=='aceptaranulacion')
        //  && !(document.body.classList.contains('after_save'))
        ) 
    {
        if(campo=='vin'){
            
            document.body.classList.add('editarvin');
            document.getElementById('titulo_editar').innerHTML=`Editar Vin`;

        } else {

            document.getElementById('titulo_editar').innerHTML=`Editar Orden de Compra`;

        }

        document.body.classList.remove('after_save');
        document.body.classList.remove('noedit');

        ax('ec',id_orden_lista);

    } else {

        window_reload();

    }

}

const window_reload = () => {

    location.reload();

}

const cuando_termine_de_grabar_modificar = () =>{

    let intervalo=setInterval( () => {
        if(document.getElementById("bloque_content_crear").style.display=="none")
        {
            clearInterval(intervalo)
        
            cargar_despues_de_modificar();

        }
    },100);

}

const cargar_despues_de_modificar = () => {

    document.body.classList.add("after_save");
    document.body.classList.add("modificado");

    document.body.classList.remove("editarvin");

    document.getElementById('titulo_crear').innerHTML=`Orden de Compra Modificada`;

    document.getElementById('status_label').innerHTML='Modificado'

    document.getElementById('message').innerHTML=`
    <div class="alert alert-success" role="alert">
        Modificado exitosamente. 
    </div>                   
    `;
    
    // document.getElementById('linea_grabar').style.display='none'
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

}
/*
   ###    ########  ########   #######  ########     ###     ######  ####  #######  ##    ##
  ## ##   ##     ## ##     ## ##     ## ##     ##   ## ##   ##    ##  ##  ##     ## ###   ##
 ##   ##  ##     ## ##     ## ##     ## ##     ##  ##   ##  ##        ##  ##     ## ####  ##
##     ## ########  ########  ##     ## ########  ##     ## ##        ##  ##     ## ## ## ##
######### ##        ##   ##   ##     ## ##     ## ######### ##        ##  ##     ## ##  ####
##     ## ##        ##    ##  ##     ## ##     ## ##     ## ##    ##  ##  ##     ## ##   ###
##     ## ##        ##     ##  #######  ########  ##     ##  ######  ####  #######  ##    ##
*/
const cargar_aprobar = () => {

    if(current_status=='2'){ 

        document.getElementById('status_label').innerHTML='Modificado'

    }
    if(current_status=='8'){ 

        document.getElementById('status_label').innerHTML='Modificado - En espera de aprobación'

        document.getElementById('message').innerHTML=`
        <div class="alert alert-warning" role="alert">
            Orden de compra en espera de ser aprobada.
        </div>                   
        `

    }

    document.getElementById('titulo_crear').innerHTML=`Aprobar la Orden de Compra?`;

    // document.body.classList.add("noedit");

    bloqueados_desde_elinicio();


    // ax('ec',id_orden_lista);
    // bloquear_campos();
 
    // document.getElementById('linea_grabar').innerHTML=`
    //         <label>&nbsp;</label>
    //         <input type="hidden" id="id_guardar" value="${id}">`
            // +`<input type="button" id="ed_save" class="btn  btn-primary" value="Guardar" onclick="ax('guardar_completo',$v('id_guardar'));cuando_termine_de_grabar('modificar');">`
            // +`<input type="button" class="btn  btn-success" value="Aprobar" onclick="aprobar_oc();">`
            // +`<input type="button" id="in_cancel" class="btn  btn_default" value="Cerrar" onclick="click_close_window();">`
    

}

const aprobar_oc = () =>{

    new Request({

        url     :`${RUTA}&ajax=1&req=aprobar`,
        method  :'get',
        onSuccess:(eee)=>{


            document.body.classList.add("aprobado");
            document.body.classList.remove("aprobacion");

            document.body.classList.add("after_aproved");
            document.body.classList.add("noedit");
        
        
            document.getElementById("bloque_content_crear").style.display="";
        
            document.getElementById('status_label').innerHTML='Aprobado'
        
            document.getElementById('message').innerHTML=`
                    <div class="alert alert-success" role="alert">
                        Aprobado exitosamente. 
                    </div>         
                    `

        }
    }).send();				
}


const click_solicitar_aprobar = () =>{
    
    new Request({

        url     :`${RUTA}&ajax=1&req=solicitaraprobar`,
        method  :'get',
        onSuccess:(eee)=>{

            document.body.classList.remove('aceptando_aprobacion');

            document.body.classList.add("after_requested");
            
            document.body.classList.add("aceptaraprobacion");
            document.body.classList.remove("modificacion");

            document.getElementById('titulo_crear').innerHTML=`Orden de compra`;
            document.getElementById('status_label').innerHTML='Aprobación Solicitada'
            document.getElementById('message').innerHTML=`
                    <div class="alert alert-success" role="alert">
                        Solicitud de Aprobación Enviada. 
                    </div>`            

            bloquear_campos();

        }
    }).send();				
}

const click_aceptar_aprobar = () =>{

    
    if(true) {

        let not_first_value=(not_first)?1:0;
        new Request({

            url     :`${RUTA}&ajax=1&req=aceptaraprobar&notfirst=${not_first_value}`,
            method  :'get',       
            onSuccess:(eee)=>{
    
                click_aceptar_aprobar_enviar_after();
    
            }
        }).send();

    } else {

        document.body.classList.add('aceptando_aprobacion');

        let html_select=`<select id="new_status" class="form_input">`;
        html_select+=`<option value=""></option>`;
        Object.keys(ventas_items_status).map( (key, value) => {
            html_select+=`<option value="${key}">${ventas_items_status[key]}</option>`;
        });
        html_select+=`</select>`;

        document.getElementById('message').innerHTML=`
                <input type="hidden" id="old_status" value="${old_ventas_items_status}">
                <div class="alert alert-warning" role="alert">
                    Debe modificar el estado de la atención : 
                    ${html_select}
                </div>`;

        // document.getElementById('new_status').value='10';

    }

}
const click_aceptar_aprobar_cancelar = () =>{

    document.body.classList.remove('aceptando_aprobacion');

}
const click_aceptar_aprobar_enviar = () =>{

    new Request({

        url     :`${RUTA}&ajax=1&req=aceptaraprobar`,
        method  :'post',
        data:{
            'old_status':document.getElementById('old_status').value,
            'new_status':document.getElementById('new_status').value
        },        
        onSuccess:(eee)=>{

            click_aceptar_aprobar_enviar_after();

        }
    }).send();				
}

const click_aceptar_aprobar_enviar_after = () =>{
    
    document.body.classList.add("after_save");
    document.body.classList.add("after_answer");
    document.body.classList.remove("aceptando_aprobacion");
    document.getElementById('titulo_crear').innerHTML=`Orden de compra`;
    document.getElementById('status_label').innerHTML='Aprobación Aceptada'
    document.getElementById('message').innerHTML=`
            <div class="alert alert-warning" role="alert">
                Solicitud de Aprobación Aceptada. 
            </div>         
    `;
}

const click_denegar_aprobar = () =>{

    new Request({

        url     :`${RUTA}&ajax=1&req=denegaraprobar`,
        method  :'get',
        onSuccess:(eee)=>{

            document.body.classList.add("after_save");
            document.body.classList.add("after_answer");
            document.getElementById('titulo_crear').innerHTML=`Orden de compra`;
            document.getElementById('status_label').innerHTML='Aprobación Denegada'
            document.getElementById('message').innerHTML=`
                    <div class="alert alert-danger" role="alert">
                        Solicitud de Aprobación Denegada. 
                    </div>         
            `;

        }
    }).send();				
}

/*
   ###    ########  ########   #######  ########     ###    ########   #######
  ## ##   ##     ## ##     ## ##     ## ##     ##   ## ##   ##     ## ##     ##
 ##   ##  ##     ## ##     ## ##     ## ##     ##  ##   ##  ##     ## ##     ##
##     ## ########  ########  ##     ## ########  ##     ## ##     ## ##     ##
######### ##        ##   ##   ##     ## ##     ## ######### ##     ## ##     ##
##     ## ##        ##    ##  ##     ## ##     ## ##     ## ##     ## ##     ##
##     ## ##        ##     ##  #######  ########  ##     ## ########   #######
*/
const cargar_aprobado = () => {
    
    document.getElementById('titulo_editar').innerHTML=`Orden de compra`;

    // document.body.classList.add("noedit");

    // ax('ec',id_orden_lista);

    if(id_permisos==2 || id_permisos==3){

        bloquear_campos();
        // document.getElementById("in_producto_color").disabled = false
        // document.getElementById("in_producto_anio").disabled = false
        // document.getElementById("in_producto_vin").disabled = false
        // document.getElementById("in_adicional_observaciones").disabled = false

    }
    if(id_permisos==10){

        bloquear_campos();
        // bloquear_campos("#group_general");
        document.getElementById("in_producto_color").disabled = false
        document.getElementById("in_producto_anio").disabled = false
        document.getElementById("in_producto_vin").disabled = false
        document.getElementById("in_adicional_observaciones").disabled = false

    }    

    if(ModoFormulario=='aprobado'){
        
        // bloquear_campos();
        // document.getElementById('message').innerHTML=`
        // <div class="alert alert-warning" role="alert">
        //     Se ha solicitado la anulación de la orden de compra.
        // </div>`

    }

    if(ModoFormulario=='aceptaranulacion'){

        if(id_permisos==2 || id_permisos==3){

            document.getElementById('message').innerHTML=`
                    <div class="alert alert-warning" role="alert">
                        Se ha solicitado la anulación de la orden de compra al administrador.
                        A la espera que sea Aceptada o Denegada. 
                    </div>`

        }

        if(id_permisos==10){

            document.getElementById('message').innerHTML=`
                    <div class="alert alert-warning" role="alert">
                        Se ha solicitado la anulación de la orden de compra.<br>
                        con el siguiente motivo:
                        <p><strong>
                            ${motivo_anulacion}
                        </strong></p>
                    </div>`

        } 
    }


}

const generar_pdf = () => {

    window.open(`${RUTA}&ajax=1&req=pdf&id=${id_orden_lista}`, '_blank');

}

const email = () => {

    new Request({

        url     :`${RUTA}&ajax=1&req=email`,
        method  :'get',
        onSuccess:(eee)=>{

            let mydata = JSON.parse(eee);
            if(mydata.emailed){
                document.getElementById('message').innerHTML=`
                <div class="alert alert-success" role="alert">
                    Orden de Compra enviado a ${mydata.to}
                </div>`           
            } else {
                document.getElementById('message').innerHTML=`
                <div class="alert alert-danger" role="alert">
                    error al enviar
                </div>`  
                console.log(`error:${mydata.error}`);             
            }

        }
    }).send();	

}


const click_excel = () => {

    // location.href(`${RUTA}&ajax=1&req=req&id=${id}`, '_blank');
    window.open(`${RUTA}&ajax=1&req=excel&id=${id_orden_lista}`, '_blank');

}

/*
   ###    ##    ## ##     ## ##          ###     ######  ####  #######  ##    ##
  ## ##   ###   ## ##     ## ##         ## ##   ##    ##  ##  ##     ## ###   ##
 ##   ##  ####  ## ##     ## ##        ##   ##  ##        ##  ##     ## ####  ##
##     ## ## ## ## ##     ## ##       ##     ## ##        ##  ##     ## ## ## ##
######### ##  #### ##     ## ##       ######### ##        ##  ##     ## ##  ####
##     ## ##   ### ##     ## ##       ##     ## ##    ##  ##  ##     ## ##   ###
##     ## ##    ##  #######  ######## ##     ##  ######  ####  #######  ##    ##
*/

const click_solicitar_anulacion = () =>{

    document.body.classList.add('solicitando_anulacion');
    // document.getElementById('leg_motivo_anulacion').innerHTML='Cual es el motivo para la anulación?';
    // document.getElementById('in_motivo_anulacion').focus();
    // document.getElementById('in_motivo_anulacion').innerHTML='tengo mis motivos';
    // document.getElementById("in_motivo_anulacion").insertAdjacentHTML(
    //     'afterend',
    //     `<li><a id="btn-enviar-solicitar-aprobacion" class="btn btn-warning" onclick="click_solicitar_anulacion_enviar();">Enviar</a>
    //     <a id="btn-cancelar-solicitar-aprobacion" class="btn btn-dark" onclick="click_solicitar_anulacion_cancelar();">Cancelar</a></li>`
    // );
    document.getElementById('message').innerHTML=`
    <div class="alert alert-warning" role="alert">
        Cual es el motivo para la anulación?
        <textarea id="anulacion_motivo"></textarea>
    </div>                   
    `;
    document.getElementById('anulacion_motivo').focus();
}

const click_solicitar_anulacion_cancelar = () =>{

    document.body.classList.remove('solicitando_anulacion');

}

const click_solicitar_anulacion_enviar = () =>{

    new Request({

        url     :`${RUTA}&ajax=1&req=anulacion`,
        method  :'post',
        data:{
            'motivo':document.getElementById('anulacion_motivo').value
        },        
        onSuccess:(eee)=>{

            document.body.classList.remove('solicitando_anulacion');

            document.body.classList.add("after_requested");
            document.getElementById('titulo_editar').innerHTML=`Orden de compra`;
            document.getElementById('status_label').innerHTML='Anulación Solicitada'
            document.getElementById('message').innerHTML=`
                    <div class="alert alert-success" role="alert">
                        Solicitud de Anulación Enviada. 
                    </div>`

        }
    }).send();				
}


const click_aceptar_anulacion = () =>{

    new Request({

        url     :`${RUTA}&ajax=1&req=aceptaranulacion`,
        method  :'get',
        onSuccess:(eee)=>{

            document.body.classList.add("after_save");
            document.getElementById('titulo_editar').innerHTML=``;
            document.getElementById('status_label').innerHTML='Anulado Aceptada'
            document.getElementById('message').innerHTML=`
                    <div class="alert alert-success" role="alert">
                        Solicitud de Anulación Aceptada. 
                    </div>         
            `;

        }
    }).send();				
}


const click_denegar_anulacion = () =>{

    new Request({

        url     :`${RUTA}&ajax=1&req=denegaranulacion`,
        method  :'get',
        onSuccess:(eee)=>{

            document.body.classList.add("after_save");
            document.getElementById('titulo_editar').innerHTML=``;
            document.getElementById('status_label').innerHTML='Anulación Denegada'
            document.getElementById('message').innerHTML=`
                    <div class="alert alert-success" role="alert">
                        Solicitud de Anulación Denegada. 
                    </div>         
            `;

        }
    }).send();				
}



// CERRAR
const click_close_window = () =>{

    parent.initMultiBox.close();    

}
// RESET
const click_reset = () =>{

    new Request({

        url     :`${RUTA}&ajax=1&req=reset`,
        method  :'get',
        onSuccess:(eee)=>{

            location.reload();

        }
    }).send();				
}

const bloquear_campos = (bloque='') => {


    var inputs = document.querySelectorAll(`${bloque} .linea_form input,${bloque} .linea_form select,${bloque} .linea_form textarea`);
    inputs.forEach( (item)=>{
        item.disabled=true;
    });

}

const bloqueados_desde_elinicio = () => {

    bloquear_campos('#group_general');
    bloquear_campos('#group_operación');

    document.getElementById("in_producto_tc").disabled = true
    document.getElementById("in_producto_marca").disabled = true
    document.getElementById("in_producto_modelo").disabled = true
    document.getElementById("in_producto_precio").disabled = true

}

const noedit = () => {

    document.body.classList.add('noedit');
    document.body.classList.remove('editarvin');

}
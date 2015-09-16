

var storage;
var session;
//localStorage.clear();
//sessionStorage.clear();

//Comprobar si el navegador soporta WebStorage
try {
    if (localStorage.getItem && sessionStorage.getItem) {
        storage = localStorage;
        session = sessionStorage;
    }
} catch(e) {

    storage = {};
    session = {};

}

var cart={};

var sololectura;

PROJECT = {  

    common : {

        init : function() {

            if($("#in_id_item").val()=='' && parent.document.getElementById('in_id_item').value!=''){

                location.href='base2/apps/depa.php?p='+parent.document.getElementById('in_id_item').value;

                return;

            }

            parent.document.getElementById('in_id_item').value=$("#in_id_item").val();

            parent.document.getElementById('in_id_item_button').href='base2/apps/depa.php?p='+$("#in_id_item").val();

            if(parent.document.getElementById('in_pedido').value!=''){
            
                var pedido=eval("{"+parent.document.getElementById('in_pedido').value+"}");

                $.each(pedido, function( index, ee ) {

                    add_cart(ee.type,ee.price,ee.id,ee.num,ee.torre);

                });

            }

            /*alert(parent.document.getElementById('in_id_item').value);*/

            $(".esquinabtn").on("click", function(event){
                // var html = new Element('div#second');
                parent.$('in_id_item_button').inject("hola", 'after');
                parent.initMultiBox.close();
            });

            $('#myTab a:first').tab('show');

            PROJECT.loadCss.init( "css/jquery-impromptu.css");

            // sololectura=(parent.document.getElementById('in_id_status').value==6 || parent.document.getElementById('in_id_status').value==7);

            // alert(sololectura);

            if(!sololectura){

                require(['vendor/jquery-impromptu'], function() {

                    $(".button.disponible").on("click", function(event){
                        
                        var current_state =0;
                        var ii            =$(this).data('ii');
                        var type          =$(this).data('type');
                        var num           =$(this).data('num');
                        var torre         =$(this).data('torre');
                        var price         =$(this).data('price');
                        var titl          =$(this).attr('title');
                        var dis           =$(this);
                        var myPrompt      = $.prompt(
                            {

                            state0:{
                                position: { 
                                    container: '#'+$(this).attr('id'), 
                                    arrow: 'tl',                            
                                    x: 0, 
                                    y: 25, 
                                    width: 420 
                                },          
                                title:titl,
                                html: "<div "
                                +"id='icontent0' "
                                +">"
                                +'cargando....'
                                +"</div>",
                                buttons: { 
                                    "cancelar": 0, 
                                    "ver_mas" : 1, 
                                    "agregar" : 2 
                                },
                                submit:function(e,v,m,f){
                                    if(v==0){ 
                                        $.prompt.close();                                                               
                                    }
                                    if(v==1){
                                        e.preventDefault();
                                        current_state=1;
                                        $.prompt.goToState('state1');
                                    }
                                    if(v==2){
                                        $.prompt.close();
                                        add_cart(type,price,ii,num,torre);
                                    }
                                    return false; 
                                }
                           },
     
                           state1:{
                                position: { 
                                    // container   : 'body', 
                                    // arrow: 'tl',                            
                                    X           : 0, 
                                    y           : -1, 
                                    width       : 1050,
                                },          
                                // title   : titl,                        
                                html    : "<div id='icontent1'>cargando....</div>",
                                buttons : { "cancelar": 0, "agregar":2 },
                                submit:function(e,v,m,f){
                                    if(v==0){ 
                                        $.prompt.close();                                                               
                                    }    
                                    // if(v==1){
                                    //     e.preventDefault();
                                    //     current_state=2;
                                    //     $.prompt.goToState('state2');
                                    // }
                                    if(v==2){
                                        $.prompt.close();                                    
                                        add_cart(type,price,ii,num,torre);
                                    }
                                    return false; 
                                }                            
                           }                    

                        });  

                        myPrompt.bind('promptloaded', function(e){ 
                            
                            if(current_state==0){

                                $.ajax({
                                    url: 'base2/apps/depa_ajax.php?type='+type+'&state=0&id='+ii,
                                    type: 'GET',
                                    success: function (data) {
                                        $("#icontent0").empty();
                                        $(data).appendTo("#icontent0");
                                    }                                
                                });   

                            } 

                        });

                        myPrompt.bind('promptstatechanging', function(e){ 

                            if(current_state>0){    

                                $.ajax({
                                    url: 'base2/apps/depa_ajax.php?type='+type+'&state=1&id='+ii,
                                    type: 'GET',
                                    success: function (data) {
                                        $("#icontent1").empty();
                                        $(data).appendTo("#icontent1");
                                        $('.carousel').carousel();
                                    }                                
                                });

                            }

                        });                                      

                    });              

                });

            }

        }   // --> End method: init

    }, // --> End : common


    //Load aditional CSS
    loadCss : {
        init: function(url) {
            var newCSS = document.createElement("link");
                newCSS.type = "text/css";
                newCSS.rel 	= "stylesheet";
                newCSS.href = encodeURI(url);

            document.getElementsByTagName("head")[0].appendChild(newCSS);
        }
    },   // --> End method:   loadCss

    //Load aditional CSS
    loadJs : {
        init: function(url) {
            var newJS = document.createElement("script");
                newJS.type = "text/javascript";
                newJS.src  = encodeURI(url);

            document.getElementsByTagName("head")[0].appendChild(newJS);
        }
    }   // --> End method:   loadJs

};

//Ejecutador de metodos segun vista
UTIL = {
    exec: function(controller, action) {

        var ns = PROJECT;
        var action = (action === undefined) ? "init" : action;

        if (controller !== "" && ns[controller] && typeof ns[controller][action] === "function") {
            ns[controller][action]();
        }

    },

    init: function() {
        var body        = document.body;
        var controller  = body.getAttribute("data-controller");
        var action      = body.getAttribute("data-action");

        UTIL.exec("common");
        UTIL.exec(controller);
        UTIL.exec(controller, action);
    }
};

$(document).on('ready', UTIL.init);


var iii=0;



function add_cart(type,price,ii,num,torre){

    cart[type+ii]={'type':type,'price':price,'id':ii,'name':torre+' - '+type+' '+num,'num':num,'torre':torre};
    // console.log(cart[type+ii]);
    console.log(cart);
    render_cart();

}

function delete_item(index){

    delete cart[index];

    render_cart();

}

function render_cart(){

    // console.log(cart);
    var html='<table class="table table-condensed table-bordered torre">';
    var price=0;
    // for(var i=0;i<cart.length;i++){
    //   ee=cart[i];
    //   price = price + ee.price;
    //   html+="<tr id='"+ee.type+ee.id+"' class='"+ee.type+"'><td>"+ee.type+" "+ee.num+"</td><td style='text-align:right;font-weight:bold;'>"+ee.price+"</td></tr>";
    // }

    $('.inmu').removeClass('agregado');

    // console.log("cart");
    // console.log(cart);
    $.each(cart, function( index, ee ) {
        $('#'+ee.type+ee.id).addClass('agregado');
        price += Number(ee.price);

        html+="<tr class='"+ee.type+"'><td class='labe'>"+ee.name+"</td><td class='vals'>"+ee.price+"</td><td>"+
         ( (sololectura) ? "" : "<a class='cerrar' title='cerrar' onclick=\"delete_item('"+ee.type+ee.id+"');\">X</a>" ) +
         "</td></tr>";
    });

    html+="<tr id='total' ><td class='labe'>TOTAL</td><td class='vals'>"+price+"</td><td></td></tr>";

    html+="</table>";

    html=(price==0)?'':html;

    // console.log(html);
    // document.getElementById('cart').innerHTML=html;
    $('#cart').html(html);

    // alert(price);
    // alert(sololectura);
    if(price>0 && !sololectura){
        // $('.esquinabtn').show();
        $('#fb1').show();
    } else {
        // $('.esquinabtn').hide();        
        $('#fb1').hide();
    }

}
// function confirmControl(object){
    
//     var ontrue       = (object.ontrue!=null)?object.ontrue:'Shadowbox.close()';
//     var onfalse      = (object.onfalse!=null)?object.onfalse:'Shadowbox.close()';
//     var true_button  = (object.true_button!=null)?object.true_button:'OK';
//     var false_button = (object.false_button!=null)?object.false_button:'Annuler';
//     var html         =  '<div class=ajax_content>';
    
//     if(object.title !=null) html +='<h1 class=main-text>'+object.title+'</h1>'
//     if(object.text  !=null) html +='<p>'+object.text+'</p>'
//     html +='<a class="btn pull-right" style="margin-right:50px;" onclick=\''+ontrue+'\'>'+true_button+'</a>'
//     if(true_button!='OK') html +='<a class="btn btn-grey pull-right" style="margin-right:20px;" onclick="'+onfalse+'">'+false_button+'</a>'
//     html +='</div>';

//     Shadowbox.open({
//         content  : html,
//         player   : "html",
//         width    : 600,
//         height   : 160,
//         // modal :true,
//         options  : {
//             onOpen: function(){
//                 $("#sb-container").addClass("confirm");
//             },
//             viewportPadding : 10                
//         }
//     });     
//     return false;

// }

// function confirmControlToolTip(el,object){

//     var tool_tip     = "tool_tip";
//     var delay         = (object.delay!=null)?object.delay:250;
//     var ontrue       = (object.ontrue!=null)?object.ontrue:'$(\'#'+tool_tip+'\').hide('+delay+');';
//     var onfalse      = (object.onfalse!=null)?object.onfalse:'$(\'#'+tool_tip+'\').hide('+delay+');';

//     var true_button  = (object.true_button!=null)?object.true_button:'Oui';
//     var false_button = (object.false_button!=null)?object.false_button:'Retour';

//     if(!($("#"+tool_tip).length>0)){
        
//         var w=$(el).innerWidth();

//         var classs = (object.ontrue==null)?'':'form_confirm';

//         var html = '<div '
//                  + 'style="right:-'+ (300 - w)/2 +'px;" '
//                  + 'id="'+tool_tip+'" '
//                  + 'class="form_alert '+classs+'" >';

//         if(object.title !=null) html +='<b>'+object.title+'</b>';
//         if(object.text  !=null) html +=object.text; 
//             html +='<div style="margin-top:10px;">';
//             html +='<a class="btn pull-right hard_btn" onclick=\''+ontrue+'\'>'+true_button+'</a>';
//         if(object.ontrue!=null) html +='<a class="btn hard_btn back-btn pull-right" onclick="'+onfalse+'">'+false_button+'</a>';
//             html +='</div>' ;
//             html +='</div>';

//         $(el).after(html);

//         $("#"+tool_tip).show(250,function(){
        
//             $(el).on("click",function(e) { e.stopPropagation(); })
            
//             $("#"+tool_tip).on("click",function(e) { e.stopPropagation(); });

//             $(document).on("click",function() { $("#"+tool_tip).hide(delay); }); 

//         });

//     } else {

//         $("#"+tool_tip).show(delay);

//     }

// }

function record()
{
    var total_price=0;
    cart_s= new Array();
    // console.log('cart');
    // console.log(cart);
    /*
    for(var i=0;i<cart.length;i++){
        cart_s[i]="{\"type\":\""+cart[i].type+"\",\"price\":\""+cart[i].price+"\",\"id\":\""+cart[i].id+"\",\"num\":\""+cart[i].num+"\",\"torre\":\""+cart[i].torre+"\"}";
        console.log(cart_s[i]);
        // console.log(cart[i].type);
        // console.log(cart[i].id);
        // if(cart[i].type=='departamento'){
        //     parent.document.getElementById('in_id_item_item').value=cart[i].id;
        // } else if(cart[i].type=='estacionamiento'){
        //     parent.document.getElementById('in_id_item_estacionamiento').value=cart[i].id;
        // } else if(cart[i].type=='deposito'){
        //     parent.document.getElementById('in_id_item_deposito').value=cart[i].id;
        // }
    }
    */
    var i=0;
    $.each(cart, function( index, ee ) {
        cart_s[i++]="{\"type\":\""+ee.type+"\",\"price\":\""+ee.price+"\",\"id\":\""+ee.id+"\",\"name\":\""+ee.name+"\",\"num\":\""+ee.num+"\",\"torre\":\""+ee.torre+"\"}";
        // console.log(cart_s[i]);
        total_price += Number(ee.price);
    });    

    var string_cart='['+ cart_s.join(',')+']';

    parent.document.getElementById('in_pedido').value=string_cart;

    parent.document.getElementById('in_pedido_obj').innerHTML=render_obj(string_cart);

    parent.document.getElementById('in_pvlista').value=total_price;

    parent.document.getElementById('in_pvpromocion').value=total_price;

    parent.initMultiBox.close();
    parent.initMultiBox.close();
    parent.initMultiBox.close();
    parent.initMultiBox.close();

    // 
    // var closesecure = function (){

    //     setTimeout(function() {
            
    //         console.log('close');
    //         parent.initMultiBox.close();
    //         closesecure();

    //     },1000);

    // }

    // closesecure();

}


function render_obj(objeto){
    var json = eval(objeto);
    console.log(json);
    if(objeto==null) return '';
    var html='<ul>';
    for(var i=0;i<json.length;i++){
        html+='<li>'+json[i].name + '</li>';
    }
    html+='</ul>';
    return html;
    // console.log(json);
}


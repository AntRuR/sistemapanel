

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

PROJECT = {  

    common : {

        init : function() {

            $(".esquinabtn").on("click", function(event){
                // var html = new Element('div#second');
                parent.$('in_id_item_button').inject("hola", 'after');
                parent.initMultiBox.close();
            });

            $('#myTab a:first').tab('show');

            PROJECT.loadCss.init( "css/jquery-impromptu.css");

            require(['vendor/jquery-impromptu'], function() {

                $(".button").on("click", function(event){

                    var current_state=0;
                    var ii=$(this).data('ii');
                    var type=$(this).data('type');
                    var price=$(this).data('price');
                    var titl=$(this).attr('title');
                    var dis=$(this);
                    var myPrompt = $.prompt(
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
                            buttons: { "cancelar": 0, "ver mas": 1, "agregar":2 },
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
                                    add_cart(type,price,ii);
                                }
                                return false; 
                            }
                       },
 
                       state1:{
                            position: { 
                                container: 'body', 
                                // arrow: 'tl',                            
                                x: 10, 
                                y: 10, 
                                width: 950
                            },          
                            title:titl,                        
                            html: "<div "
                            +"id='icontent1' "
                            +">"
                            +'cargando....'
                            +"</div>",
                            buttons: { "cancelar": 0, "agregar":2 },
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
                                    add_cart(type,price,ii);
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

                                }                                
                            });  
                        }

                    });                                      

                });              

            });


            // /**
            //  * favoris and acquise
            //  */
            // $(".favoris_button").on("click", function(event){
            //     var el=$(this);
            //     var goal_id = el.data('param1');
            //     $.ajax({
            //         url: "../aide/ajax/favoris",
            //         type: "POST",
            //         data: { 'goal_id': goal_id },                 
            //         success: function(data){
            //             el.removeClass('favoris_on');
            //             el.removeClass('favoris_off');
            //             if(data=='1') el.addClass('favoris_on');
            //             else el.addClass('favoris_off');
            //         }
            //     });
            // });   
            // $(".acquise_button").on("click", function(event){
            //     var el=$(this);
            //     var goal_id = el.data('param1');
            //     $.ajax({
            //         url: "../aide/ajax/acquise",
            //         type: "POST",
            //         data: { 'goal_id': goal_id },                 
            //         success: function(data){
            //             el.removeClass('acquise_on');
            //             el.removeClass('acquise_off');
            //             if(data=='1') el.addClass('acquise_on');
            //             else el.addClass('acquise_off');
            //         }
            //     });
            // });                        

            // /**
            //  * TOGGLE
            //  */
            // if($('.toggle_menu').length  > 0){
            //     $(".toggle_menu").on("click", function(event){
            //         $(".toggle_menu").removeClass('selected');
            //         $(this).addClass('selected');
            //         var group = $(this).data('group');
            //         var show = $(this).data('show');
            //         $('.'+group).hide();
            //         $('#'+show).show();
            //     });

            //     if($('.show_on_ready').length  > 0){
            //     $(".toggle_evaluer").trigger("click");
            //     } else {
            //     $(".toggle_menu:first").trigger("click");
            //     }

            // } 

            // /**
            //  * MULTI SELECT
            //  */
            // if($('.multi_select').length  > 0){

            //     PROJECT.loadCss.init( "css/select2.css");
            //     require(['select2'], function(){           
                
            //         $('.multi_select').select2();
                    
            //     }); 

            // } 

            // /**
            //  * PAGES
            //  */
            
            // var width   = $("#pages_container").width(),
            //     slides  = $("#pages_container ul"),
            //     numPage = 1,
            //     top     = 1,
            //     alignTops= new Array(),
            //     block = false,
            //     num     = 1;

            // if(slides.length<2)
            //     $("#pages_prev,#pages_next").hide();
            
            
            // $("#page_slide").css({
            //     width: slides.length * width
            // });  

            // $('#pages_prev').on("click",(function(){

            //     if (numPage > 1) 
            //         numPage--;
            //     else
            //         numPage= slides.length

            //     $('#page_slide').animate({
            //         marginLeft: '-' + (width * (numPage-1) )
            //     }, 600);

            // }));
            
            // $('#pages_next').on("click",(function(){

            //     if (numPage < slides.length)
            //         numPage++;
            //     else
            //         numPage=1

            //     $('#page_slide').animate({
            //         marginLeft: '-' + (width * (numPage-1) )
            //     }, 600);
                
            // }));              

            // /**
            //  * POP
            //  */    
            // $(".pop").popover();            

            // /**
            //  * SHOW ON READY
            //  */
            
            // if($('.show_on_ready').length  > 0){

            //     $('#form_content').addClass('show_on');

            //     var launcher = $('.show_on_ready').data('launcher');
                
            //     var el = $("#"+launcher);

            //     var elpos = el.offset();

            //     // alert(elpos.top+','+elpos.left);

            //     var w=$(el).innerWidth();

            //     var tool_tip     = "tool_tip";

            //     var delay = 250;

            //     $('.show_on_ready').css('top',elpos.top + 38);

            //     $('.show_on_ready').css('left',elpos.left - (300 - w)/2);    

            //     $(".show_on_ready").show(300);

            //     $('html').animate({

            //      scrollTop: $(".show_on_ready").offset().top
                 
            //     }, 2000,function(){

            //         // $(el).on("click",function(e) { e.stopPropagation(); })
                    
            //         $("#"+tool_tip).on("click",function(e) { e.stopPropagation(); });

            //         $(document).on("click",function() { $("#"+tool_tip).hide(delay); }); 

            //     });

            // }

            // /**
            //  * STARS IN FORMS
            //  */
            // var ul='ul.stars';

            // $(ul+" li").on("hover", function(event){
            //     var width = $(this).width();
            //     $(this).parent().children().css('background-position', '-'+width+'px 0');                var value = $(this).data('value');
            //     var go=true;
            //     $(this).parent().children().each(function( index ) {
            //         if(go) $(this).css('background-position','0 0');
            //         if($(this).data('value')==value) go=false;
            //     });
            //     //var len = $(this).parent().children().length;
            // })
            
            // $(ul+" li").on("mouseout", function(event){
            //     var width = $(this).width();
            //     $(this).parent().children().css('background-position', '-'+width+'px 0');
            //     var input = $(this).parent().data('input');
            //     var value = $('#'+input).val();
            //     var go=(value!=0);
            //     $(this).parent().children().each(function( index ) {
            //         if(go) $(this).css('background-position','0 0');
            //         if($(this).data('value')==value) go=false;
            //     });
            // });

            // $(ul+" li").on("click", function(event){
            //     var value = $(this).data('value');
            //     var input = $(this).parent().data('input');
            //     $('#'+input).attr("value",value);
            // });                      

            /**
             * UPLOAD BOOTSTRAP
             */

            // PROJECT.loadCss.init( "css/bootstrap-fileupload.min.css");

            // require(['js/vendor/bootstrap-fileupload.min.js']);

        }   // --> End method: init

    }, // --> End : common

    // expressyourself : {

    //     init : function() {

    //         show($("#topic").val());
            
    //     }

    // },

    // platform_profile : {

    //     init : function() {

    //         $('.radio_buttons label[for="gender_male"]').on("click",(function(){
    //             $("#default_user").attr("src","img/default_male.png");
    //         }));
    //         $('.radio_buttons label[for="gender_female"]').on("click",(function(){
    //             $("#default_user").attr("src","img/default_female.png");
    //         }));          

    //     }
    // },

    // platform_child_profile : {

    //     init : function() {

    //         $('.radio_buttons label[for="gender_male"]').on("click",(function(){
    //             $("#default_user").attr("src","img/default_child_male.png");
    //         }));
    //         $('.radio_buttons label[for="gender_female"]').on("click",(function(){
    //             $("#default_user").attr("src","img/default_child_female.png");
    //         }));          

    //     }
    // },    

    // advice : {

    //     init : function() {

    //         //console.log('pagina de consejo');

    //         // var video_holder = null;//cache jquery object

    //         /**polyfill Android that doesnt have canPlayType() */
    //         var ua = window.navigator.userAgent.toLowerCase();
    //         if (ua.match(/android 2\.[12]/) !== null) {
    //             HTMLMediaElement.prototype.canPlayType = function(type) {
    //                 return (type.match(/video\/(mp4|m4v)/gi) !== null) ? 'maybe' : '';
    //             }
    //         }

    //         /** on page load*/
    //         // function ready(id) {
    //         //     video_holder = $('#video_holder');
    //         //     load_showreel("sd", id);
    //         // }

    //             var title = $('#video').data('title'),
    //                 hd    = $('#video').data('hd'),
    //                 sd    = $('#video').data('sd'),
    //                 hd    = $('#video').data('hd');



    //             //$("#buttons li.on a").trigger("click");

    //             PROJECT.loadCss.init( "css/video.css");

    //             if(hd){

    //                 require(['vendor/video','vendor/video_custom'], function(){

    //                         loadVideo('video','sd',false,this,'img/video_poster.png',title
    //                                     ,hd+'.mp4',hd+'.oggtheora.ogv',hd+'.webmhd.webm'
    //                                     ,sd+'.mp4',sd+'.oggtheora.ogv',sd+'.webmhd.webm'
    //                                     );

    //                 });

    //             } else {

    //                 PROJECT.loadCss.init( "css/audio.css");

    //                 require(['vendor/mediaelement-and-player'], function() {

    //                     $('#audio-player').mediaelementplayer({
    //                         // alwaysShowControls: true,
    //                         // features: ['playpause','volume','progress'],
    //                         // audioVolume: 'horizontal',
    //                         audioWidth: 320,
    //                         audioHeight: 30
    //                     });

    //                 });

    //             }   

    //     }

    // },
        
    // videos : {

    //     init : function() {

    //         //console.log('pagina de video');

    //         // var video_holder = null;//cache jquery object

    //         /**polyfill Android that doesnt have canPlayType() */
    //         var ua = window.navigator.userAgent.toLowerCase();
    //         if (ua.match(/android 2\.[12]/) !== null) {
    //             HTMLMediaElement.prototype.canPlayType = function(type) {
    //                 return (type.match(/video\/(mp4|m4v)/gi) !== null) ? 'maybe' : '';
    //             }
    //         }

    //         /** on page load*/
    //         // function ready(id) {
    //         //     video_holder = $('#video_holder');
    //         //     load_showreel("sd", id);
    //         // }

    //         PROJECT.loadCss.init( "css/video.css");

    //         require(['vendor/video','vendor/video_custom'], function() {

    //             $("#buttons li.on a").trigger("click");

    //         });

    //         /**
    //          * PLAQUETTE POP UP
    //          * arroz left, right
    //          * buttons more, less
    //          */
    //         $('#link-plaquette').on('click', function() {
    //             $.ajax({
    //                 url:$(this).data('load'),
    //                 success: function(data){

    //                     Shadowbox.open({
    //                         content : data,
    //                         player  : "html",
    //                         width   : 516,
    //                         height  : 570,
    //                         block   : false,
    //                         options : {
    //                             onOpen: function(){
    //                                 $("#sb-container").addClass("novideo");
    //                                 $("#sb-container").addClass("plaquettes");
    //                             },
    //                             onFinish: function (){

    //                                 var html = '<div class="form_line buttons">'
    //                                           +'<a class="pull-right btn hard_btn with_butterfly btn-green" href="'+$('#link-plaquette').data('download')+'">Télécharger le document</a>'
    //                                           +'<a class="btn hard_btn back-btn pull-right" href="#" onclick="javascript:Shadowbox.close();return false;">Retour</a>'    
    //                                           +'</div>'
    //                                           +'<a id="plaquette_prev"></a>'
    //                                           +'<a id="plaquette_next"></a>';
    //                                           // +'<a id="plaquette_up"></a>'
    //                                               // +'<a id="plaquette_down"></a>';
                                    
    //                                 //if(!($("#sb-info").length>0)){  

    //                                     $('#sb-title').hide();
    //                                     $('#sb-info-inner').hide(); 
    //                                     $("#sb-info").css('width',440);         
    //                                     $("#sb-info").append(html);

    //                                 //}

    //                                 var width   = $("#plaquette_container").width(),
    //                                     height  = $("#plaquette_container").height(),
    //                                     slides  = $("#plaquette_container ul li"),
    //                                     numPage = 1,
    //                                     top     = 1,
    //                                     heights = new Array(),
    //                                     alignTops= new Array(),
    //                                     block = false,
    //                                     num     = 1;

    //                                 slides.each(function( index ) {
    //                                     heights[num]=$(this).height();
    //                                     alignTops[num]=0;
    //                                     num++
    //                                 });
                                    
    //                                 $("#plaquette_container ul").css({
    //                                     width: slides.length * width
    //                                 });

    //                                 $('#plaquette_prev').on("click",(function(){

    //                                     if (numPage > 1) 
    //                                         numPage--;
    //                                     else
    //                                         numPage= slides.length

    //                                     $('#plaquette_container ul').animate({
    //                                         marginLeft: '-' + (width * (numPage-1) )
    //                                     }, 600);

    //                                 }));
                                    
    //                                 $('#plaquette_next').on("click",(function(){

    //                                     if (numPage < slides.length)
    //                                         numPage++;
    //                                     else
    //                                         numPage=1

    //                                     $('#plaquette_container ul').animate({
    //                                         marginLeft: '-' + (width * (numPage-1) )
    //                                     }, 600);
                                        
    //                                 }));


    //                                 // $('#plaquette #plaquette_down').on("click",(function(){

    //                                 //     var currentTop =(-1)*parseInt( $('#plaquette_container ul li:nth-child('+numPage+')').css('margin-top') );

    //                                 //     if( currentTop + height < heights[numPage] && !block){

    //                                 //         block = true;     
    //                                 //         $('#plaquette_container ul li:nth-child('+numPage+')').animate({
    //                                 //             marginTop: '-' + ( currentTop + height )
    //                                 //         }, 600, function(){ block=false; });

    //                                 //     }
    //                                 //     return false;

    //                                 // }));

    //                                 // $('#plaquette #plaquette_up').on("click",(function(){
                                        
    //                                 //     var currentTop =(-1)*parseInt( $('#plaquette_container ul li:nth-child('+numPage+')').css('margin-top') );

    //                                 //     if( currentTop > 0  && !block){

    //                                 //         block = true;
    //                                 //         $('#plaquette_container ul li:nth-child('+numPage+')').animate({
    //                                 //             marginTop: '-' + ( currentTop - height )
    //                                 //         }, 600, function(){ block=false; });

    //                                 //     }
    //                                 //     return false;

    //                                 // }));                                    

    //                             },
    //                             viewportPadding : 10,
    //                             enableKeys: true
    //                         }
    //                     });
    //                 }
    //             });
    //             return false;
    //         });

    //     }   // --> End method: init
    // }, // --> End : videos_sponsor

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


var cart=new Array();
var iii=0;

function add_cart(type,price,ii){

    cart[iii]={'type':type,'price':price,'id':ii}
    iii++;
    render_cart();

}

function render_cart(){

    var html='<table class="table table-condensed table-bordered torre">';
    var price=0;
    for(var i=0;i<cart.length;i++){
      ee=cart[i];
      price = price + ee.price;
      html+="<tr id='"+ee.type+ee.id+"' class='"+ee.type+"'><td>"+ee.type+" "+ee.id+"</td><td style='text-align:right;font-weight:bold;'>"+ee.price+"</td></tr>";
      // console.log( "type: " + ee.type + " "+"id: " + ee.id );
    }
    html+="<tr id='total' ><td>TOTAL</td><td style='text-align:right;font-weight:bold;'>"+price+"</td></tr>";
    html+="</table>";
    // console.log(html);
    // document.getElementById('cart').innerHTML=html;
    $('#cart').html(html);

    if(cart.length>0){
        $('.esquinabtn').show();
        $('#fb1').show();
    } else {
        $('.esquinabtn').hide();        
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
    cart_s= new Array();
    for(var i=0;i<cart.length;i++){
        cart_s[i]="{'type':"+cart[i].type+",'price':"+cart[i].price+",'id':"+cart[i].id+"}";
    }

    parent.document.getElementById('in_pedido').value='['+ cart_s.join(',')+']';
    parent.initMultiBox.close();

    // $.ajax({
    //     url: 'base2/apps/depa_ajax.php?type=record',
    //     type: 'POST',
    //     data: { cart : '['+ cart_s.join(',')+']' },
    //     success: function (data) {
    //         parent.document.getElementById('in_id_canal').value=
    //         parent.initMultiBox.close();
    //     }                                
    // });

}



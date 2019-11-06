import * as lib from '../libs';

const vendor='calendarTail';

// docs
// https://github.com/pytesNET/tail.DateTime
// https://www.cssscript.com/datetime-picker-tail/

// loaders
lib.loadCss(`${lib.vendor_dir}/${vendor}/css/tail.datetime-harx-light.css?2`);
lib.loadJs(`${lib.vendor_dir}/${vendor}/js/tail.datetime-full.min.js`);


window.addEventListener("load",function(){


    lib.loadScript(`
    function load_calendar(id,min,max){
    
        // document.getElementById("#"+id).value=default;
        picker=tail.DateTime("#"+id, {
            dateFormat: 'YYYY-mm-dd',
            locale: 'es',
            today:true
            // timeHours: true,  
            // timeMinutes: true,  
            // timeSeconds: 0
        });    

        eval('Fields.'+id+'=picker;');

    }
    `);
        
	console.log(vendor);

});

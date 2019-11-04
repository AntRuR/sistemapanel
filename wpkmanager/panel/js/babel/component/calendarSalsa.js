import * as lib from '../libs';

const vendor='calendarSalsa';

// foopicker
lib.loadCss(`${lib.vendor_dir}/${vendor}/css/SalsaCalendar.min.css`);
lib.loadJs(`${lib.vendor_dir}/${vendor}/js/SalsaCalendar.min.js`);

window.addEventListener("load",function(){

	var calendar_from = new SalsaCalendar({
		inputId: 'checkin',
		lang: 'en',
		range: {
		  min: 'today'
		},
		calendarPosition: 'right',
		fixed: false,
		connectCalendar: true
	});
	console.log('sueño');

});

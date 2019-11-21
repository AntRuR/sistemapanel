/*
Script: MooEditable.Extras.js
	Extends MooEditable to include more (simple) toolbar buttons.

License:
	MIT-style license.
*/

MooEditable.Actions.extend({

	formatBlock: {
		title: 'Block Formatting',
		type: 'menu-list',
		options: {
			list: [
				{text: 'P&aacute;rrafo', value: 'p'},
				//{text: 'Heading 1', value: 'h1', style: 'font-size:24px; font-weight:bold;'},
				{text: 'T&iacute;tulo', value: 'h2'},
				{text: 'Subt&iacute;tulo', value: 'h3'}
			]
		},
		states: {
			tags: ['p', 'h1', 'h2', 'h3']
		},
		command: function(menulist, name){
			var argument = '<' + name + '>';
			this.focus();
			this.execute('formatBlock', false, argument);
		}
	},
	
	justifyleft:{
		title: 'Alinear a la Izquierda',
		states: {
			css: {'text-align': 'left'}
		}
	},
	
	justifyright:{
		title: 'Alinear a la Derecha',
		states: {
			css: {'text-align': 'right'}
		}
	},
	
	justifycenter:{
		title: 'Centrar',
		states: {
			tags: ['center'],
			css: {'text-align': 'center'}
		}
	},
		
	justifyfull:{
		title: 'Justificar',
		states: {
			css: {'text-align': 'justify'}
		}
	}

});

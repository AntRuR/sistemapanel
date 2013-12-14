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
				{text: 'Parrafos', value: 'p'},
				//{text: 'Heading 1', value: 'h1', style: 'font-size:24px; font-weight:bold;'},
				{text: 'T&iacute;tulos', value: 'h2', style: 'font-size:18px; font-weight:bold;'},
				{text: 'SubT&iacute;tulos', value: 'h3', style: 'font-size:14px; font-weight:bold;'}
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
		title: 'Align Left',
		states: {
			css: {'text-align': 'left'}
		}
	},
	
	justifyright:{
		title: 'Align Right',
		states: {
			css: {'text-align': 'right'}
		}
	},
	
	justifycenter:{
		title: 'Align Center',
		states: {
			tags: ['center'],
			css: {'text-align': 'center'}
		}
	},
	
	justifyfull:{
		title: 'Align Justify',
		states: {
			css: {'text-align': 'justify'}
		}
	}

});

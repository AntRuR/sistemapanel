/* 
---

script: MooEditable.Extras.js

description: Extends MooEditable to include more (simple) toolbar buttons.

license: MIT-style license

authors:
- Lim Chee Aun
- Ryan Mitchell

requires:
# - MooEditable
# - MooEditable.UI
# - MooEditable.UI.MenuList

provides: 
- MooEditable.Actions.formatBlock
- MooEditable.Actions.justifyleft
- MooEditable.Actions.justifyright
- MooEditable.Actions.justifycenter
- MooEditable.Actions.justifyfull
- MooEditable.Actions.removeformat
- MooEditable.Actions.insertHorizontalRule

...
*/

MooEditable.lang.set({
	blockFormatting: 'Formato de Bloque',
	paragraph: 'Párrafo',
	heading1: 'Heading 1',
	heading2: 'Título',
	heading3: 'SubTítulo',
	heading4: 'Estilo 1',
	heading5: 'Estilo 2',
	heading6: 'Estilo 3',
	alignLeft: 'Alinear a la Izquierda',
	alignRight: 'Alinear a la Derecha',
	alignCenter: 'Centrar',
	alignJustify: 'Justificar',
	removeFormatting: 'Remover formato',
	insertHorizontalRule: 'Insertar Línea Horizontal'
});

MooEditable.Actions.extend({

	formatBlock: {
		title: MooEditable.lang.get('blockFormatting'),
		type: 'menu-list',
		options: {
			list: [
				{text: MooEditable.lang.get('paragraph'), value: 'p'},
				//{text: MooEditable.lang.get('heading1'), value: 'h1', style: 'font-size:24px; font-weight:bold;'},
				{text: MooEditable.lang.get('heading2'), value: 'h2', style: 'font-size:20px; font-weight:bold; color:#222;'},
				{text: MooEditable.lang.get('heading3'), value: 'h3', style: 'font-size:18px; font-weight:bold; color:#111;'},
				{text: MooEditable.lang.get('heading4'), value: 'h4', style: 'font-size:16px; font-weight:bold; color:#000;'},
				{text: MooEditable.lang.get('heading5'), value: 'h5', style: 'font-size:14px; font-weight:bold; color:#000;'},
				{text: MooEditable.lang.get('heading6'), value: 'h6', style: 'font-size:14px; font-weight:bold; color:#222;'}
			]
		},
		states: {
//			tags: ['p', 'h1', 'h2', 'h3']
			tags: ['p', 'h2', 'h3']
		},
		command: function(menulist, name){
			var argument = '<' + name + '>';
			this.focus();
			this.execute('formatBlock', false, argument);
		}
	},
	
	justifyleft:{
		title: MooEditable.lang.get('alignLeft'),
		states: {
			css: {'text-align': 'left'}
		}
	},
	
	justifyright:{
		title: MooEditable.lang.get('alignRight'),
		states: {
			css: {'text-align': 'right'}
		}
	},
	
	justifycenter:{
		title: MooEditable.lang.get('alignCenter'),
		states: {
			tags: ['center'],
			css: {'text-align': 'center'}
		}
	},
	
	justifyfull:{
		title: MooEditable.lang.get('alignJustify'),
		states: {
			css: {'text-align': 'justify'}
		}
	},
	
	removeformat: {
		title: MooEditable.lang.get('removeFormatting')
	},
	
	insertHorizontalRule: {
		title: MooEditable.lang.get('insertHorizontalRule'),
		states: {
			tags: ['hr']
		},
		command: function(){
			this.selection.insertContent('<hr>');
		}
	}

});

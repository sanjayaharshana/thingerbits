(function() {
	tinymce.create('tinymce.plugins.Addshortcodes', {
		init : function(ed, url) {
		
			//Add Thingerbits shortcodes button
			ed.addButton('Thingerbits', {
				title : 'Add Thingerbits shortcodes',
				cmd : 'alc_sility',
				image : url + '/images/Thingerbits.png'
			});
			ed.addCommand('alc_sility', function() {
				ed.windowManager.open({file : url + '/ui.php?page=Thingerbits',  width : 604 ,	height : 520 ,	inline : 1});
			});	
		},
		getInfo : function() {
			return {
				longname : "Weblusive Shortcodes",
				author : 'Weblusive',
				authorurl : 'http://www.weblusive.com/',
				infourl : 'http://www.weblusive.com/',
				version : "1.0"
			};
		}
	});
	tinymce.PluginManager.add('SilityShortcodes', tinymce.plugins.Addshortcodes);	
	
})();


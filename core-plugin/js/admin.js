// make sure we always have a console, even if it does nothing...
if (!window.console) {
	window.console = {
		log: function() {},
		debug: function() {},
		info: function() {},
		error: function() {},
		trace: function() {}
	};
}

;(function($) {
	$(function() {
		$('a.confirm-delete').click(function() {
			return confirm('Are you sure you want to delete this record?');
		});
		
		$('a.confirm-cancel').click(function() {
			return confirm('Are you sure you want to cancel?');
		});
		
		$('.focus-first').focus();
	});
})(jQuery);

if (!window.send_to_editor) {
	window.send_to_editor = function(snippet) {
		var editor = window.send_to_editor.next_editor;

		var start = snippet.indexOf('<img src="');
		var end = snippet.indexOf('"', start+10);
		var href = snippet.substring(start+10, end);
	
		console.log(href);
		
		jQuery('#'+editor).val(href);
		
		tb_remove();
	}
}

function set_next_editor(id) {
	if (window.send_to_editor) {
		window.send_to_editor.next_editor = id;
	}
}
/**
 * WP-CI The CodeIgniter plugin for WordPress.
 * Copyright (C)2009-2010 Collegeman.net, LLC.
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

(function($) {
	$(function() {
		$('form.paginated').paginated();
	});
	
	$.fn.paginated = function(options) {
		if (this.length) {
			var form = this;
			
			options = $.extend({
				validation: []
			}, options);
		
			// wrap the form's fieldset pages with a scrollable div
			form.children('fieldset.page').wrapAll('<div class="scrollable" style="position:relative; overflow:hidden;"><div class="scroller" style="position:relative; top:0;"></div></div>');
	
			
			// grab references for the family...
			var scrollable = form.children('div.scrollable:first');
			var scroller = scrollable.children('div.scroller:first');
			
			// page count
			var pageCount = scroller.children('fieldset.page').size();
			
			var buttons = form.children('div.buttons:first');
			// step box
			var stepsClass = "formsteps"+pageCount;
			form.before('<span class="'+stepsClass+'">Step X of Y</span>');
			var steps = $('.'+stepsClass+':first');

			// page index
			var index = -1;
		
			// change page action
			var changePage = function() {
				var page = scroller.children('fieldset.page:eq('+index+')');
				scrollable.height(page.height());
				scroller.css('top', -1*page.position().top);
				$(window).scrollTo(Math.max(0, form.position().top-50), 500);
			
				if (index == pageCount-1) {
					buttons.children('.btnNext').hide();
					buttons.children('.btnFinish').show();
				}
				else {
					buttons.children('.btnNext').show();
					buttons.children('.btnFinish').hide();
				}
			
				steps.text('Step '+(index+1)+' of '+pageCount);
				for(var i=1; i<=pageCount; i++)
					steps.removeClass('step_'+i);
				steps.addClass('step_'+(index+1));
			
				buttons.children('.btnBack').attr('disabled', (index > 0 ? '' : 'disabled'));
				
				$(".formError").remove();
			};
		
			var valid = function() {
				return form.validationEngine({returnIsValid:true, page: index});
			};
		
			var goTo = function(page) {
				index = page-1;
				changePage();
			};
		
			// next action
			var next = function() {
				if (index > -1 && !valid()) {
					return false;
				}
				else {
					if (index >= pageCount)
						return;
					index++;
					changePage();
				}
			};
		
			// back action
			var back = function() {
				if (index <= 0)
					return;
				// hide all errors - may be too inclusive here
				index--;
				changePage();
			};
		
			// replace the buttons
			if (!buttons.hasClass('static')) {
				buttons.children().remove();
				buttons.append('<input type="button" class="btnBack" value="Go Back" style="float:right;" disabled="disabled" />');
				buttons.append('<input type="button" class="btnNext" value="Next &raquo;" />');
				buttons.append('&nbsp;<input type="submit" class="btnFinish" value="Send &raquo;" />');
			}
	
			buttons.children('.btnNext').click(next);
			buttons.children('.btnBack').click(back);
		
			// prime the tool
			next();
			
			form.submit(function() {
				return valid();
			});
			
			return {
				next: next,
				back: back,
				goTo: goTo
			}
		}
	};
})(jQuery);


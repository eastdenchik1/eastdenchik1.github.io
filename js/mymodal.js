


$(function() {
    		var link = $('.cd-modal-trigger');
    		link.on('click', function(event) {
    			var work = $(this).attr('data-work');
    			$('.modal-content').load(work+'.html');
    		});
    	});
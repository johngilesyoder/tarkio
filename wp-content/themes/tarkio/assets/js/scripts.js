(function ($, root, undefined) {

	$(function () {

		'use strict';
		// DOM ready, take it away
		// Account Access toggle (open)
		// $(document).on('click', '[data-toggle="collapse"]', function() {
		// 	$("#site-header").toggleClass( "is--open" );
		// });

		$('.navbar-collapse').on('show.bs.collapse', function(){
			 $('#site-header').addClass('is--open');
		});
		$('.navbar-collapse').on('hidden.bs.collapse', function(){
			 $('#site-header').removeClass('is--open');
		});

	});

})(jQuery, this);

!function(s,e,n){s(function(){"use strict";
// DOM ready, take it away
// Account Access toggle (open)
// $(document).on('click', '[data-toggle="collapse"]', function() {
// 	$("#site-header").toggleClass( "is--open" );
// });
s(".navbar-collapse").on("show.bs.collapse",function(){s("#site-header").addClass("is--open")}),s(".navbar-collapse").on("hidden.bs.collapse",function(){s("#site-header").removeClass("is--open")})})}(jQuery,this);
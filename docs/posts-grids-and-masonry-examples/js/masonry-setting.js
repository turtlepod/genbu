jQuery( document ).ready( function($) {

	/* === MASONRY Settings Example === */
	if ( $("body").hasClass( "col-masonry" ) && $("body").hasClass( "plural" ) ){
		$("body").addClass( "col-masonry-active" );
	}
	if ( $("body").hasClass( "col-masonry-active" ) ){
		var container = document.querySelector('.col-masonry-active .content-entry-wrap');
		var msnry = new Masonry( container, {
			"itemSelector": ".entry"
		});
	}

});
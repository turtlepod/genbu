jQuery( document ).ready( function($) {

	/* Display search on search page */
	if ( $("body").hasClass("search") ){
		$( ".search-toggle" ).parents( ".menu-search" ).addClass( "search-toggle-active" )
	}

	/* Show menu search */
	$( ".search-toggle" ).click( function(e) {
		e.preventDefault();
		$( this ).parents( ".menu-search" ).toggleClass( "search-toggle-active" );
		$( this ).siblings( ".search-field" ).focus();
	});

	/* Mobile sub-menu */
	if ( $("body").hasClass("wp-is-mobile") ){
		$("body").addClass("mobile-menu-active");
	}
	if ( $("body").hasClass("mobile-menu-active") ){
		$( ".menu-container .menu-item-has-children" ).each( function () {

			/* if this parent menu item have sub-menu available */
			if ( $(this).children( "ul" ).length > 0 ){

				/* Toggle class to open .sub-menu */
				$(this).children( "a" ).click( function(e) {
					e.preventDefault();
					$( this ).parent("li").siblings("li").removeClass( "menu-item-open-children" );
					$( this ).parent("li").toggleClass( "menu-item-open-children" );

					/* Get menu link, and add it as first children */
					if ( !$(this).parent("li").children( ".sub-menu" ).children( "li" ).hasClass("menu-item-parent-link") ){
						/* Only if not linked to "#" */
						if ( $(this).attr("href") != "#" ){
							$(this).parent("li").children( ".sub-menu" ).prepend( '<li class="menu-item menu-item-parent-link">' + $(this).parent("li").html() + '</li>' );
						}
					}
					/* Remove sub menu from this */
					$( ".menu-item-parent-link" ).children( ".sub-menu" ).remove();
				});
			}
		});
	}
	/* Mobile Menu */
	$( ".menu-toggle a" ).click( function(e) {
		e.preventDefault();
		$( this ).parents(".menu-container").toggleClass( "menu-toggle-active" );
	});
});
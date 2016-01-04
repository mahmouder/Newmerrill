
function topExpand(initState) {

	var bodyEl = document.body,
        //logo = document.getElementbyId( 'logo' ),
		content = document.querySelector( '.content-wrap' ),
		openbtn = document.getElementById( 'open-button' ),
		closebtn = document.getElementById( 'close-button' ),
		isOpen = initState;
	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		// content.addEventListener( 'click', function(ev) {
		// 	var target = ev.target;
		// 	if( isOpen && target !== openbtn ) {
		// 		toggleMenu();
		// 	}
		// } );
	}

	function toggleMenu() {
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
            classie.remove( logo, 'logohide' );
            classie.add( logo2, 'transhide' );
            classie.add( content, 'content-wrap_push' );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
            classie.add( logo, 'logohide' );
            classie.remove( logo2, 'transhide' );
            classie.remove( content, 'content-wrap_push' );
		}
		isOpen = !isOpen;
	}

	init();

};
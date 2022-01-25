class Theme extends Component {

	init() {
		this.addMenuClass();
		//this.bindUIActions();
		// this.addOpenClass();
	}

	addMenuClass() {
		$( document ).on( 'ready', () => {
			$( 'li.menu-item:has( ul.sub-menu )' ).addClass( 'menu-item-has-children' );
		});

		document.addEventListener("DOMContentLoaded", function(){
			/////// Prevent closing from click inside dropdown
			document.querySelectorAll('.dropdown-menu').forEach(function(element){
				element.addEventListener('click', function (e) {
				e.stopPropagation();
				});
			})



			// make it as accordion for smaller screens
			if (window.innerWidth < 992) {

				// close all inner dropdowns when parent is closed
				document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
					everydropdown.addEventListener('hidden.bs.dropdown', function () {
						// after dropdown is hidden, then find all submenus
						this.querySelectorAll('.submenu').forEach(function(everysubmenu){
							// hide every submenu as well
							everysubmenu.style.display = 'none';
						});
					})
				});
				
				document.querySelectorAll('.dropdown-menu a').forEach(function(element){
					element.addEventListener('click', function (e) {
			
						let nextEl = this.nextElementSibling;
						if(nextEl && nextEl.classList.contains('submenu')) {	
							// prevent opening link if link needs to open dropdown
							e.preventDefault();
							console.log(nextEl);
							if(nextEl.style.display == 'block'){
								nextEl.style.display = 'none';
							} else {
								nextEl.style.display = 'block';
							}

						}
					});
				})
			}
			// end if innerWidth

		}); 
	}

	// addOpenClass() {
	// 	$( '.menu-item-has-children::before' ).on( 'click', () => {
	// 		console.log( e.currentTarget, this );
	// 	});
	// }

	// bindUIActions() {
	// 	this.element
	// 		.on( 'click', e => {
	// 			console.log( e.currentTarget, this );
	// 			alert( `${e.currentTarget} clicked!` );
	// 		});
	// }
}

Theme.addComponent( 'body' );

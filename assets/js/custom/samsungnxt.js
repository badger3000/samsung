//theme JS object that will have methods of all the functionality

var themeJS = {
	init: function () {
		this.slider();
    this.scroll();
	},
	slider: function () {
		var elem = document.querySelector('.ourTeam__cards');

		//init carousel
		var flkty = new Flickity(elem, {
			// options
			cellAlign: 'left',
			setGallerySize: false,
			prevNextButtons: false,
			pageDots: false,
			contain: false
		});

		// previous
		var previousButton = document.querySelector('.flickity-button--previous');
		previousButton.addEventListener('click', function () {
			flkty.previous();
		});
		// next
		var nextButton = document.querySelector('.flickity-button--next');
		nextButton.addEventListener('click', function () {
			flkty.next();
		});
	},
	scroll: function () {
    //init the animation libary, use data-aos on element
		AOS.init();
	}
}

//init js for the theme
themeJS.init();
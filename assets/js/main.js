"use strict";

//theme JS object that will have methods of all the functionality
var themeJS = {
  init: function init() {
    this.slider();
  },
  slider: function slider() {
    var elem = document.querySelector('.ourTeam__cards'); //init carousel

    var flkty = new Flickity(elem, {
      // options
      cellAlign: 'left',
      setGallerySize: false,
      prevNextButtons: false,
      pageDots: false,
      contain: false
    }); // previous

    var previousButton = document.querySelector('.flickity-button--previous');
    previousButton.addEventListener('click', function () {
      flkty.previous();
    }); // next

    var nextButton = document.querySelector('.flickity-button--next');
    nextButton.addEventListener('click', function () {
      flkty.next();
    });
  } //init js for the theme

};
themeJS.init();
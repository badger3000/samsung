"use strict";

//theme JS object that will have methods of all the functionality
var themeJS = {
  init: function init() {
    this.slider();
    this.scroll();
    this.onHover();
  },
  slider: function slider() {
    var elem = document.querySelector('.ourTeam__cards');
    var viewPort = document.querySelector('.ourTeam__cards');
    var container = document.querySelector('.grid-container');
    var getValue = container.getBoundingClientRect(); //this sets the container to align with the grid container when page loads

    viewPort.style.marginLeft = getValue.left + 'px'; //init carousel

    var flkty = new Flickity(elem, {
      // options
      cellAlign: 'left',
      //wrapAround: true,
      //groupCells: '78%',
      //percentPosition: false,
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
    }); // listen for the window if it resizes

    window.addEventListener('resize', function (event) {
      //get the updated value, this is repetive, should be done different
      var getValue = container.getBoundingClientRect(); //set the new value, this is repetive, should be done different

      viewPort.style.marginLeft = getValue.left + 'px';
    });
  },
  onHover: function onHover() {//want to add a parallax hover state to thumbnails/dots in header
  },
  scroll: function scroll() {
    //init the animation libary, use data-aos on element
    AOS.init();
  } //init js for the theme

};
themeJS.init();
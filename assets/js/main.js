"use strict";

//element to use for carousel
var elem = document.querySelector('.ourTeam__cards'); //init carousel

var flkty = new Flickity(elem, {
  // options
  cellAlign: 'left',
  setGallerySize: false,
  prevNextButtons: false,
  pageDots: false,
  contain: false
});
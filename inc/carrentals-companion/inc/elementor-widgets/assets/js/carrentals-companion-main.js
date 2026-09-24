/**
 * CarRentals Elementor widgets, front end: the Mailchimp signup form, the
 * about and car model carousels, the booking form's date fields, the gallery
 * and the counters. No jQuery.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  //  Mailchimp ajax
  UI.ajaxChimp('#mc_embed_signup form');

  // About widget owlCarousel
  UI.owl('.active-about-carusel', {
    items: 1,
    loop: true,
    margin: 30,
    dots: true
  });

  // Exibition widget owlCarousel
  UI.owl('.active-model-carusel', {
    items: 1,
    loop: true,
    margin: 30,
    dots: true
  });

  // Datepicker
  UI.datepicker('#datepicker', { wrap: false });
  UI.datepicker('#datepicker2', { wrap: false });

  //  Gallery
  UI.justifiedGallery('#grid-container', {
    rowHeight: 200,
    captions: false,
    margins: 30
  });

  //  Counter Js
  if (document.querySelector('.facts-area')) {
    UI.counter('.counter', { time: 1000 });
  }
}());

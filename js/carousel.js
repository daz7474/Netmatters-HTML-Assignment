// Carousels

$(document).ready(function () {
  // Hero banner
  $('.slides').slick({
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
  });

  // Partners banner
  $('.partners').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    variableWidth: true,
    draggable: false,
    swipe: false
  });

  // Clients banner
  $('.clients').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    variableWidth: true,
    draggable: false,
    swipe: false
  });
});
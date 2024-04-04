$ = jQuery.noConflict(); 

let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$( document ).ready(function() {

  //MOBILE MENU
  $('.site-header__menu-icon').click(function() {
    $(this).toggleClass('open');
    $('.mobile-menu-overlay').toggleClass('mobile-menu-overlay__active');
  });

  $('.mobile-menu-overlay__close-icon').click(function() {
    $('.mobile-menu-overlay').removeClass('mobile-menu-overlay__active');
  });
  

  // VIDEO PLAYER
  const player = new Plyr('video');

  // Expose player so it can be used from the console
  window.player = player;

  const audioPlayer = new Plyr('audio');

  window.player = audioPlayer;


  //Search
  $('.site-header__search').click(function() {
    $(".overlay-menu").addClass("show-overlay-menu");
  });

  $(".close-icon").click(function () {
    $(".overlay-menu").removeClass("show-overlay-menu");
  });



}); 
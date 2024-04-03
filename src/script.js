$ = jQuery.noConflict(); 

let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$( document ).ready(function() {

  // VIDEO PLAYER
  const player = new Plyr('video');

  // Expose player so it can be used from the console
  window.player = player;

  const audioPlayer = new Plyr('audio');

  window.player = audioPlayer;

}); 
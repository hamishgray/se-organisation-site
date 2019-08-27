// remap jQuery to $
jQuery(document).ready(function($) {


console.log('loaded site.js');

// Timeline
function timeline(){
  var timeline = $('#timeline');
  var slides = timeline.find('.timeline__slide');
  var inactiveClass = 'timeline__slide--inactive';
  var activeClass = 'timeline__slide--active';
  var nav = timeline.find('.timeline__nav-item');

  // if timeline exists
  if( timeline.length ){
    // show first year
    timeline.find('.timeline__slide:first').addClass(activeClass);

    // NAVIGATION
    nav.on('click', function(){
      var targetSlide = $(this).data('nav-id'); // target year

      timeline.find('.timeline__slide.timeline__slide--active').removeClass(activeClass);

      timeline.find('.timeline__slide[data-slide-id=' + targetSlide + ']').addClass(activeClass);
    });

  }
}

timeline();



});
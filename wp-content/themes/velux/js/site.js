// remap jQuery to $
jQuery(document).ready(function($) {


  // Timeline
  function timeline(){
    var timeline = $('#timeline');
    var slides = timeline.find('.timeline__slide');
    var activeClass = 'timeline__slide--active';
    var nav = timeline.find('.timeline__nav-item');

    // if timeline exists
    if( timeline.length ){
      // show first year
      nav.first().addClass('is-active');
      timeline.find('.timeline__slide:first').addClass(activeClass);

      // NAVIGATION
      nav.on('click', function(){
        $('.timeline__nav-item.is-active').removeClass('is-active');
        $(this).addClass('is-active');
        var targetSlide = $(this).data('nav-id'); // target year

        timeline.find('.timeline__slide.timeline__slide--active').removeClass(activeClass);

        timeline.find('.timeline__slide[data-slide-id=' + targetSlide + ']').addClass(activeClass);
      });

    }
  }

  timeline();


});
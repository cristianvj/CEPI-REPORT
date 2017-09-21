$(document).ready(function() {
  $('.fades, .bounces, .zooms, .flips').on('change', function() {
    var elem = $('#sandbox'),
      effect = $(this).val();

    elem.removeClass().addClass('animating bm-remove').addClass(effect);

    elem.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
      elem.removeClass(effect).removeClass('animating');
    });
  });

  $('.show-off').on('change', function() {
    var elem = $('#sandbox'),
      effect = $(this).val(),
      exit = $(this).attr('data-exit');

    if (exit) animateEnd('#sandbox', true, true, effect);
    else animate('#sandbox', effect);
  });
   $('a.ancla').click(function(e){       
	  e.preventDefault();
	  var strAncla=$(this).attr('href');
	    $('body,html').stop(true,true).animate({        
	      scrollTop: $(strAncla).offset().top
	    },1000);
	  
	});
});
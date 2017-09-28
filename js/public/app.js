//-- Function show menu
function openNav() {
    document.getElementById("mySidenav").style.width = "20em";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0em";
}
//-- end sFunction show menu


$(function() {

  // Funcion hover menu
  $('#item-home').hover(function() {
    $('#icon-home').css('background-color', '#8CC640');
  }, function() {
    $('#icon-home').css('background-color', '#bdbdbd');
  });

  $('#item-sustainability').hover(function() {
    $('#icon-sustainability').css('background-color', '#6CBD56');
  }, function() {
    $('#icon-sustainability').css('background-color', '#bdbdbd');
  });

  $('#item-snapshot').hover(function() {
    $('#icon-snapshot').css('background-color', '#009347');
  }, function() {
    $('#icon-snapshot').css('background-color', '#bdbdbd');
  });

  $('#item-outlook').hover(function() {
    $('#icon-outlook').css('background-color', '#6AA242');
  }, function() {
    $('#icon-outlook').css('background-color', '#bdbdbd');
  });

  $('#item-policy').hover(function() {
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-policy').css('background-color', '#bdbdbd');
  });

  $('#item-forest').hover(function() {
    $('#icon-forest').css('background-color', '#51A332');
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-forest').css('background-color', '#bdbdbd');
    $('#icon-policy').css('background-color', '#bdbdbd');
  });

  $('#item-bioeconomy').hover(function() {
    $('#icon-bioeconomy').css('background-color', '#51A332');
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-bioeconomy').css('background-color', '#bdbdbd');
    $('#icon-policy').css('background-color', '#bdbdbd');
  });

  $('#item-circular').hover(function() {
    $('#icon-circular').css('background-color', '#51A332');
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-circular').css('background-color', '#bdbdbd');
    $('#icon-policy').css('background-color', '#bdbdbd');
  });

  $('#item-energy').hover(function() {
    $('#icon-energy').css('background-color', '#51A332');
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-energy').css('background-color', '#bdbdbd');
    $('#icon-policy').css('background-color', '#bdbdbd');
  });

  $('#item-enviroment').hover(function() {
    $('#icon-enviroment').css('background-color', '#51A332');
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-enviroment').css('background-color', '#bdbdbd');
    $('#icon-policy').css('background-color', '#bdbdbd');
  });

  $('#item-latest').hover(function() {
    $('#icon-latest').css('background-color', '#26B6CC');
  }, function() {
    $('#icon-latest').css('background-color', '#bdbdbd');
  });

  $('#item-glossary').hover(function() {
    $('#icon-glossary').css('background-color', '#005EB8');
  }, function() {
    $('#icon-glossary').css('background-color', '#bdbdbd');
  });

  // End Funcion hover menu

});

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

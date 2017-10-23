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

//-- Function show menu
function openNav() {
    document.getElementById("mySidenav").style.width = "20em";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0em";
}
//-- end sFunction show menu

//-- Function menu hover --
$(function() {
  $('#item-home').hover(function() {
    $('#icon-home').css('background-color', '#8CC640');
  }, function() {
    $('#icon-home').css('background-color', '');
  });

  $('#item-sustainability').hover(function() {
    $('#icon-sustainability').css('background-color', '#6CBD56');
  }, function() {
    $('#icon-sustainability').css('background-color', '');
  });

  $('#item-snapshot').hover(function() {
    $('#icon-snapshot').css('background-color', '#009347');
  }, function() {
    $('#icon-snapshot').css('background-color', '');
  });

  $('#item-outlook').hover(function() {
    $('#icon-outlook').css('background-color', '#6AA242');
  }, function() {
    $('#icon-outlook').css('background-color', '');
  });

  $('#item-policy').hover(function() {
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-policy').css('background-color', '');
  });

  $('#item-forest').hover(function() {
    $('#icon-forest').css('background-color', '#51A332');
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-forest').css('background-color', '');
    $('#icon-policy').css('background-color', '');
  });

  $('#item-bioeconomy').hover(function() {
    $('#icon-bioeconomy').css('background-color', '#51A332');
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-bioeconomy').css('background-color', '');
    $('#icon-policy').css('background-color', '');
  });

  $('#item-circular').hover(function() {
    $('#icon-circular').css('background-color', '#51A332');
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-circular').css('background-color', '');
    $('#icon-policy').css('background-color', '');
  });

  $('#item-energy').hover(function() {
    $('#icon-energy').css('background-color', '#51A332');
    $('#icon-policy').css('background-color', '#51A332');
  }, function() {
    $('#icon-energy').css('background-color', '');
    $('#icon-policy').css('background-color', '');
  });

  $('#item-enviroment').hover(function() {
      $('#icon-enviroment').css('background-color', '#51A332');
      $('#icon-policy').css('background-color', '#51A332');
    }, function() {
    $('#icon-enviroment').css('background-color', '');
    $('#icon-policy').css('background-color', '');
  });
 
  $('#item-latest').hover(function() {
    $('#icon-latest').css('background-color', '#039be5');
  }, function() {
    $('#icon-latest').css('background-color', '');
  });

  $('#item-practices').hover(function() {
    $('#icon-practices').css('background-color', '#2f7cba');
  }, function() {
    $('#icon-practices').css('background-color', '');
  });

  $('#item-glossary').hover(function() {
    $('#icon-glossary').css('background-color', '#005EB8');
  }, function() {
    $('#icon-glossary').css('background-color', '');
  });

  //-- Function click menu --
    $("#item-home").click(function(){
      $("#icon-home:first").addClass("active");
    });
    
});
//-- Function menu hover --




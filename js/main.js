jQuery(document).ready(function($) {

    /* ======= Scrollspy ======= */
    $('body').scrollspy({ target: '#top', offset: 400});
   
    /* ======= ScrollTo ======= */
    $('a.scrollto').on('click', function(e){
        
        //store hash
        var target = this.hash;
                
        e.preventDefault();
        
		$('body').scrollTo(target, 800, {offset: -80, 'axis':'y', easing:'easeOutQuad'});
        //Collapse mobile menu after clicking
		if ($('.navbar-collapse').hasClass('in')){
			$('.navbar-collapse').removeClass('in').addClass('collapse');
		}
		
	});
	
    /* ======= Flexslider ======= */
    $('.flexslider').flexslider({
        animation: "fade",
        touch: true,
        directionNav: false
    });

    /* ======= jQuery Placeholder ======= */
    $('input, textarea').placeholder();
    
    /* ======= jQuery FitVids - Responsive Video ======= */
    $("#video-container").fitVids();    
    
    /* ======= jQuery Responsive equal heights plugin ======= */
    /* Ref: https://github.com/liabru/jquery-match-height */
    
    $('#testimonials .quote-box').matchHeight(); 
    
    /* ======= Style Switcher (Remove on production site) ======= */
    $('#config-trigger').on('click', function(e) {
        var $panel = $('#config-panel');
        var panelVisible = $('#config-panel').is(':visible');
        if (panelVisible) {
            $panel.hide();
        } else {
            $panel.show();
        }
        e.preventDefault();
    });
    
    $('#config-close').on('click', function(e) {
        e.preventDefault();
        $('#config-panel').hide();
    });
    
    
    $('#color-options a').on('click', function(e) {
        var $styleSheet = $(this).attr('data-style');
        var $logoImage = $(this).attr('data-logo');
		$('#theme-style').attr('href', $styleSheet);
		$('#logo-image').attr('src', $logoImage);
				
		var $listItem = $(this).closest('li');
		$listItem.addClass('active');
		$listItem.siblings().removeClass('active');
		
		e.preventDefault();
		
	});
	


});

// Smooth Scroll

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

   /*---------------------------------------*/
    /*  MAILCHIMP
    /*---------------------------------------*/

    $('.mailchimp').ajaxChimp({
        callback: mailchimpCallback,
        url: "http://scholarsintown.us9.list-manage.com/subscribe/post?u=690ea2774a3b131a480ab839c&amp;id=77e7e33be7"
    });

    function mailchimpCallback(resp) {
        if (resp.result === 'success') {
            $('.mailchimp-success').fadeIn(1000);
            $('.mailchimp-error').fadeOut(500);
        } else if (resp.result === 'error') {
            $('.mailchimp-error').fadeIn(1000);
            $('.mailchimp-success').fadeOut(500);
        }
    }

/*  WEBFORM AJAX
------------------------------------*/
(function($){
	$(function(){
		$('.stayInformed').ajaxSuccess(function(event){
			/*if ($('.error', $(this)).length > 0) {
				$('.tooltip p').html('There appears to be an error... Please fix it.');
			} else if ($('.messages.status', $(this)).length > 0) {
				$('.tooltip p').html($('.messages.status li p', $(this)).first().html());
			}*/
			killTooltip();
		});
		$('.stayInformed form').click(function(){
			killTooltip();
		});
		function killTooltip(){
			$('.tooltip').fadeOut(100).animate({top: '-50px'}, {duration: 100, queue: false});
		}
	});
})(jQuery);


/*  NEWS/EVENTS TOGGLE
------------------------------------
(function($){
	$(function(){
		var $news = $('.news');
		var $newsNav = $('.newsNav', $news);
		var $rows = $('.row', $news).slice(1);
		//var $eventsItems = $('.eventsList, .newsNav a:first')
		//var $newsItems = $('.newsList, .newsNav a:last');

		// Create navigation
		$list = $().add('<ul>');
		$newsNav.append($list);
		$rows.each(function(){
			_self = $(this);
			_h1 = $('h1', _self).hide();
			$list.append('<li><a href="#">' + _h1.html() + '</a></li>');
		});

		$('li', $list).first().addClass('active');
		$rows.hide().first().show();

		$('a', $newsNav).click(function(event){
			_selectedSection = $(this).parent().index();
			$rows.hide();
			$rows.eq(_selectedSection).show();
			$('li', $list).removeClass('active').eq(_selectedSection).addClass('active');
			event.preventDefault();
		});
	});
})(jQuery);*/


/*	FEATURE SLIDESHOW
-------------------------------------------------*/
(function($){
	var fadeSpeed = 500;
	var fadeDelay = 5500;

	/* move to next slide */
	window.changeSlide = function(){
		$('.featureSlideshow .featureSlide').each(
			function(){
				if ($(this).hasClass('active') == false){
					$(this).hide();
				}
			}
		);
		var $nextSlide;
		if($('.featureSlideshow .featureSlide').last().hasClass('active')){
			$nextSlide = $('.featureSlideshow .featureSlide').first();
		} else {
			$nextSlide = $('.featureSlideshow .featureSlide.active').next();
		}
		$nextSlide.addClass('next');
		updateNav();
		$nextSlide.fadeIn(fadeSpeed, function(){
			$('.featureSlideshow .featureSlide').removeClass('active');
			$nextSlide.addClass('active');
			$nextSlide.removeClass('next');
		});
	}

	/* populate the navigation */
	function populateFeatureNav(){
		$('.featureNav nav').html('<ul></ul>');
		$('.featureSlideshow .featureSlide').each(function(){
			$('.featureNav nav ul').append('<li><a href="#">'+ $(this).index() +'</a></li>');
		});
		$('.featureNav li:first').addClass('active');
	}

	/* update navigation to show active slide */
	function updateNav(){
		var theActiveSlide = $('.featureSlideshow .featureSlide.next').index();
		$('.featureNav li').removeClass('active');
		$('.featureNav li:eq('+theActiveSlide+')').addClass('active');
	}

	/* make the dots clickable */
	$(function(){
		$('.featureSlideshow .featureSlide').hide();
		$('.featureSlideshow .featureSlide').first().fadeIn().addClass('active');

		populateFeatureNav();
		var slideComplete = 1;
		$('.featureNav nav a').click(function(){
			if (slideComplete == 1){
				slideComplete = 0;
				var theSelectedLink = $(this).index('.featureNav nav a');
				var theSelectedSlide = $('.featureSlide:eq('+theSelectedLink+')');
				$('.featureSlideshow .featureSlide').each(
					function(){
						if ($(this).hasClass('active') == false){
							$(this).hide();
						}
					}
				);
				$(theSelectedSlide).addClass('next');
				updateNav();
				$(theSelectedSlide).fadeIn(fadeSpeed, function(){
					$('.featureSlideshow .featureSlide').each(
						function(){
							$(this).removeClass('active');
						}
					);
					$(theSelectedSlide).addClass('active');
					$(theSelectedSlide).removeClass('next');
					slideComplete = 1;
				});
			}
			return false;
		});

		/* Next Arrow */
		$('.featureNav .next').click(function(){
			if($('.featureNav li').last().hasClass('active')){
				$('.featureNav li').first().children().click();
			} else {
				$('.featureNav li.active').next().children().click();
			}
			return false;
		});

		/* Previous Arrow */
		$('.featureNav .prev').click(function(){
			if($('.featureNav li').first().hasClass('active')){
				$('.featureNav li').last().children().click();
			} else {
				$('.featureNav li.active').prev().children().click();
			}
			return false;
		});
	});

	/* set the timer */
	var slideTimer;
	$(function(){
		slideTimer = setInterval('changeSlide()', fadeDelay);
		$('.featureBox, .featureNav').mouseenter(function(){
			clearInterval(slideTimer);
		});
		$('.featureBox, .featureNav').mouseleave(function(){
			clearInterval(slideTimer);
			slideTimer = setInterval('changeSlide()', fadeDelay);
		});
	});

	/* update feature slider height */
	$(function(){
		var $featureDivs = $('.featureSlideshow, .featureSlide');
		var _newsHeight = 95;
		var _notificationsBar = $('.notificationsBar');
		function changeFeatureHeight(){
			if (!isMobile()) {
				if ($(window).height() > 730 + _notificationsBar.height()){
					$featureDivs.css('height', $(window).height() - _newsHeight);
				} else {
					$featureDivs.css('height', 730 + _notificationsBar.height() - _newsHeight);
				}
			}
		}
		changeFeatureHeight();
		$(window).resize(changeFeatureHeight);
		$('.notificationsBar .closeBtn').click(changeFeatureHeight);
	});
})(jQuery);
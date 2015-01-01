//
// ON LOAD stuff
//

	// fancy loader image
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	})

//
// UTILITIES
//

	var utility = new function() {
		
		// Are we mobile?
		this.isMobile = function(){
			/* getting viewport width */
			var responsive_viewport = $(window).width();

			/* if is below 488px */
			if (responsive_viewport < 488) {
				return true;
			} else {
				return false;
			}
		}

		// Smooth scrollin;
		this.scrollTo = function(anchor){
			$('html, body').animate({ scrollTop: $(anchor).offset().top }, 200);
			return false;
		}

	}

//
// INSTRUMENTS FUNCTIONALITY
//
	var play = new function(){

		var aniSpeed  = 100;

		this.called = function(name){
			play.closeInfo(); // close any open info
			setTimeout(function() {
				play.showInfo(name);
			}, aniSpeed);
		}

		this.showInfo = function(name){

			var infoContainer = '<div class="learn-info"><span class="close">x</span><div class="inner"></div><div class="bottomlink">Find out how to contact LSO</div></div>';

			$('.' + name).after(infoContainer);

			infoContainer = $('.learn-info');
			infoInner = $('.learn-info > .inner');

			// populate information
			$(instruments).each(function() {
				// Get information relevant to instrument
				if (this.id == name) {

					var output = '<h1>' + this.name + '</h1><p>' + this.info + '</p>';

					$(infoInner).append(output);
				};
			});

			// Finally, show the box
			if(utility.isMobile()){
				$($('.learn-info')).slideDown(aniSpeed);
			} else {
				// show info div
				$('.learn-info').show();
				$($('.learn-info')).animate({width: 500},aniSpeed);
			}
		}

		this.closeInfo = function() {

			if(utility.isMobile()){

				$('.learn-info').slideUp(aniSpeed);
				// important to hide and empty to avoid glitches when resizing the window
				setTimeout(function() {
					$('.learn-info').remove();
				}, aniSpeed);

			} else {

				$('.learn-info').animate({width: 0},350);
				// important to hide and empty to avoid glitches when resizing the window
				setTimeout(function() {
					$('.learn-info').remove();
				}, aniSpeed);

			}
		}

	}

	// Things that trigger the info:

		$('.click_learn').click(function(){
			var name = $(this).parent().parent('.instrument').attr('data-name');
			play.called(name);
		});

		$('.click_play').click(function(){
			var name = $(this).parent().parent('.instrument').attr('data-name');
			// play.note(name);
			$('#m_' + name)[0].play();
		});
		
		$('.note').click(function(){
			var name = $(this).parent().parent().parent('.instrument').attr('data-name');
			var number = $(this).attr('data-note');
			$('#m_' + name + '_' + number)[0].play();
		});



	// End of Things that trigger the info:

	// Things that close the info

		$(document).on('click', '.close', function() { // dynamic version
			play.closeInfo();
		});

		$('html').click(function(event){ // close if click anywhere but info container
			// close if desktop version, and is not trying to open another div
			if($('.learn-info').is(":visible") && !utility.isMobile() && !$(event.target).is('span.click_learn')) {
				play.closeInfo();
			}
		});

	// End Things that close the info


//
// MISC
//

	// contact details link
	$('.bottomlink').click(function(){
		utility.scrollTo('footer');
	});

	// contact details link
	$('.uplink').click(function(){
		utility.scrollTo('.gamelan_hero');
	});

	$('#compose').click(function(){
		$('#disclaimer').slideToggle();
	});
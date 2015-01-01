// Tried proper OOJS. Yay me.

//
// ON LOAD stuff
//

	// fancy loader image
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	})

	// RESPONSIVE STUFF
	$(document).ready(function(e) {
		$('img[usemap]').rwdImageMaps(); // make the map responsive
		map.labelMap(); // and label it up
	});

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
// MAP CONTENT SETUP - IMAGES
//

// as called by map.showInfo()

	var showImg = new function(){
		this.image = function(route, area){
			var img = '<img src="assets/img/routes/' + route + '/' + area + '-1.jpg" class="photos">';
			return img;
		}

		this.slider = function(slides_total, route, area){
			var ul = '.photos ul',
				slides = ul + ' li',
				slider_w = slides_total * 100,
				slides_width = 100 / slides_total;
				moveNav = false;

			var photos = '<div class="photos slider"><ul style="width:' + slider_w + '%;">';

			for(i = 1; i <= slides_total; i++) {
				var img = '<li style="width:'+ slides_width +'%; background:url(assets/img/routes/' + route + '/' + area + '-' + i +'.jpg) center center; background-size: cover;"></li>';
				var photos = photos + img;
			}

			var photos = photos + '</ul></div>'

			hero.init(ul, slides, slides_total, moveNav);

			return photos;

		}
	}
//
// MAP FUNCTIONALITY
//
	var map = new function(){

		var infoContainer = $('.map-info');
		var infoInner = $('.map-info .inner');
		var aniSpeed  = 100;

		var hallImg = $('#hall');
		var basementImg = $('#basement');


		this.labelMap = function(){

			$(hallfloor).each(function() {
				var label = '<div class="label label-' + this.id + '" data-area="' + this.area + '"><span>' + this.name + '</span><i class="marker">x</i></div>';

				$('.map-inner[data-map="hallfloor"]').append(label);
			});

			$(basementfloor).each(function() {
				var label = '<div class="label label-' + this.id + '" data-area="' + this.area + '"><span>' + this.name + '</span><i class="marker">x</i></div>';

				$('.map-inner[data-map="basementfloor"]').append(label);
			});
		}


		this.mapCalled = function(area, currentmap, route){
			if (area == 'clore1' || area == 'clore2'){
				var area = 'clore'; // as the only json array with info
			}
			// check to see if the room called is a special room (Eg 'up/down levels')
			if ( $.isFunction(map[area]) ) {
				// room with its own function
				map[area]();
			} else {
				// standard room
				// map.closeInfo(); // close any open info
				setTimeout(function() {
					map.showInfo(area, currentmap, route);
				}, aniSpeed);
			}

		}

		this.showInfo = function(area, currentmap, route){
			var currentContainer = ('#' + currentmap + '> .map-info');
			var currentInner = (currentContainer + ' .inner');

			// populate information
			$(window[currentmap]).each(function() {
				// Get information relevant to area
				if (this.area == area) {

					// Get information relevant to route
					var output = '<h1>' + this.name + '</h1><p>' + this.content[route].text + '</p>';

					// if a video is specified
					if(!this.content[route].video){
					} else {
						var video = '<iframe src="//www.youtube.com/embed/' + this.content[route].video + '" frameborder="0" allowfullscreen></iframe>';
						var output = output + video;
					}

					// Is there a single image to show?
					if (this.content[route].img === 1){
						var output = output + showImg.image(route, area);
					}

					// Is there more than one image to show? If so, slider!
					if (this.content[route].img > 1){
						var slides_total = this.content[route].img;
						var output = output + showImg.slider(slides_total, route, area);
					};

					$(currentInner).append(output);
				};
			});

			// Finally, show the box
			if(utility.isMobile()){
				infoContainer.css('width', '100%');
				$(currentContainer).slideDown(aniSpeed);
			} else {
				// show info div
				infoContainer.show();
				$(currentContainer).animate({width: 500},aniSpeed);
			}
		}

		this.closeInfo = function() {

			if(utility.isMobile()){

				infoContainer.slideUp(aniSpeed);
				// important to hide and empty to avoid glitches when resizing the window
				setTimeout(function() {
					infoInner.empty();
				}, aniSpeed);

			} else {

				infoContainer.animate({width: 0},350);
				// important to hide and empty to avoid glitches when resizing the window
				setTimeout(function() {
					infoInner.empty();
					infoContainer.hide();
				}, aniSpeed);

			}
		}

		this.updateMaps = function(route, name){
			var filepath = 'assets/img/maps/';

			$('.map-inner').attr('data-route', route);
			$('.map-info').attr('data-route', route);
			$('.routename').html(name);

			hallImg.attr('src', filepath + 'hallfloor-' + route + '.png');
			basementImg.attr('src', filepath + 'basementfloor-' + route + '.png');

			map.closeInfo(); // close any info boxes open

			
		};

		// MAP AREAS (by data-area attribute)
		this.basementfloor = function(){
			map.closeInfo();
			utility.scrollTo('#basementfloor');
		};

		this.hallfloor = function(){
			map.closeInfo();
			utility.scrollTo('#hallfloor');
		};

		// to disable a room:
		// this.toilets = function(){
		// 	return true;
		// };

	}

	// Things that trigger the map:

		$(document).on('click', '[data-area]', function() {

			var area = $(this).attr('data-area');
			var currentmap = $(this).closest('.map-inner').attr('data-map');
			var route = $(this).closest('.map-inner').attr('data-route');

			map.mapCalled(area, currentmap, route);

		});

	// End of Things that trigger the map:

	// Things that close the map

		$('.close').click(function(){
			map.closeInfo();
		});

		$('html').click(function(){ // close if click anywhere but info container
			if($('.map-info').is(":visible") && !utility.isMobile()) {
				map.closeInfo();
			}
		});

	// End Things that close the map


	// Things that change the map route:
	$('.type li').click(function(){

		if($(this).hasClass('toplink')){

			utility.scrollTo('#hero');

		} else {
			var route = $(this).attr('data-route');
			var name = $(this).html();

			// updating maps
			map.updateMaps(route, name);
		}

	});

	$('#hero .type li').click(function(){
		utility.scrollTo('#mapintro');
	});
	// End Things that change the map route

//
// MISC
//

	// contact details link
	$('.bottomlink').click(function(){
		utility.scrollTo('footer');
	});
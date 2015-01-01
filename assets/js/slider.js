var hero = new function(slider){

	this.setup = function(slider){
		// slider variables
		var ul = slider + ' ul',
			slides = ul + ' li',
			slides_total = $(slides).length,
			slider_w = slides_total * 100,
			moveNav = true;
			slides_width = 100 / slides_total;

		// slider essential css (on the fly because adaptive yeah)
		$(ul).css('width', slider_w + '%');
		$(slides).css('width', slides_width + '%');

		hero.init(ul, slides, slides_total, moveNav);
	};

	this.init = function(ul, slides, slides_total, moveNav){
		console.log('slides_total ' + slides_total);
		// slider variables
		var speed = 880,
			count = 0;

		// slides
		setInterval(function () {

			count += 1;

			((count === slides_total) ? count = 0 : count = count); // end of slides?

			var left = '-' + count + '00%'; // css set up

			$(ul).animate({'margin-left': left}, speed); // move it

			// figure out which is active
			$(slides + '.active').removeClass('active');
			$(slides + ':nth-child(' + (count + 1) + ')').addClass('active');

		}, speed * 5);

		if(moveNav === true){
			// navigation moves
			var nav = '#hero .type > li';

			setInterval(function () {
				hero.moveNav(count, nav);
			}, speed * 5);
		}

	};

	this.moveNav = function(count, nav){

		var margin = $('#hero .type > li:nth-child(' + count + ')').css('margin-left');

		$(nav + '.active').removeClass('active'); // move it
		$(nav + ':nth-child(' + (count + 2) + ')').addClass('active'); // move it

	};

};

hero.setup('.banner');
// With thanks to Akshat Mittal's Beat Drummer:
// https://github.com/akshatmittal/beatdrummer
// 
// This version: Zoe Bryant zoeabryant@gmail.com

// fancy loader image
$(window).load(function() {
	$(".loader").fadeOut("slow");
})

// play variables
var hash = [],
	row = -1,
	isPlaying = !1,
	curBeat = 0;

// beat lengths
var beat_loop = 4000, // ms
	beat_long = 2000, // ms
	beat_medium = 1000, // ms
	beat_short = 125; // ms


var initTitle = document.title;


// playback calculations
var units = Math.ceil(beat_long / beat_short), // how many whole short beats in a long beat
	max = 32; // 1 long beat per loop

var compose = new function(){

	// they'll be 2 seconds for the long ones, 1 second for the medium and 125 ms for the short ones. gongs will be longer


	this.setup = function(){
		$('section.group').each(function(){
			var name = this.title,
				id = this.id,
				help = $(this).attr('data-help');

			var groupli = $('<li id="'+id+'">');

			var groupheader = $('<h2 class="grouptoggle">' + name + ' <span>' + help +'</span></h2>').click(function(){
				$(this).siblings('ul').slideToggle();
			});

			groupli.append(groupheader).append('<ul class="controls">').appendTo('#lights');

		});

		$("audio").each(function(){

			var	name = this.title,
				group = $(this).parent().attr('id');
				id = this.id,
				length = $(this).attr('data-length'),
				ul = $('<ul id="control_' + id + '" class="soundrow ' + length + '">');

			ul.append('<li class="header">' + name + '</li>');

			row ++; // which row are we on?

			for (i = 0; i < max; i++) {
				hash.push('.'); // make sure there is enough places (beats * row) in the array
			}

			// add sound beats/pox - not the same as place due to different length sounds
			for (i = 0; i < max;) {

				number = (row * max) + i; // keep place count

				var li = $('<li class="pox col_' + i + '" data-place="' + number + '">' + number + '</li>').click(function(){
						$(this).toggleClass('active');
						var place = $(this).attr('data-place');
						compose.url(id, place);
				}).data('sound_id', this.id);

				ul.append(li);

				switch(length) {
					case 'loop': i+=(max);break; // 1 loop beat per loop
					case 'long': i+=(max/2);break; // 2 long beat per loop
					case 'medium': i+=(max/4);break; // 4 medium beats per loop
					case 'short': i++ ;break; // 32 short beats per loop
				};
			}

			$('<li>').append(ul).appendTo('#lights #'+ group + ' .controls');
		});
	}

	this.url = function(id, place){
		var pox = $(".soundrow[id^=control] li.pox[data-place=" + place + "]");
		$(pox).is('.active') ? hash[place] = ',' : hash[place] = '.';
		var newhash = hash.join('');
		if (location.hash != '#' + newhash) location.hash = newhash;
	}


	this.playNextBeat = function() {
		if (isPlaying !== false) {
			$("#tracker li.pox").removeClass("active");
			$("#tracker li.pox.col_" + curBeat).addClass("active");
			var tmpAudio;
			$(".soundrow[id^=control] li.pox.active.col_" + curBeat).each(function(i){
				tmpAudio = document.getElementById($(this).data('sound_id'));
				if (!tmpAudio.paused) {
					tmpAudio.pause();
					tmpAudio.currentTime = 0.0;
				}
				tmpAudio.play();
			});
			curBeat = (curBeat + 1) % max;
		}
	}


	this.loadHash = function() {
		hash = decodeURIComponent(location.hash);
		compose.processHash(hash);
	}

	this.sample = function(a) {
		switch(a) {
			case 1:
				hash = '#,...,...,...,.,.,...,...,...,.,................................................................................................,,...................................,.........,.......................,.........,.......................,.....................,.........................,....,......................,.......,.............,...........,.....................,.....................................................,.,.,..,,.,.,..,,.,.,,.,,.,,,.................................,...............................................................,.........,.....,.........,......,.......,.,.....,.......,.,......,.....,...,.....,.....,...,......,...,.....,.....,...,.....,......,.,.......,.....,.,.......,................,...............,....,.,.........,...,.,.......,....,...,.........,.,...,.....,....,.....,...............,...,....,.......,.......,.,.....,.,....,.........,.....,...,......................,...,.....,...,.,...,............,.,.......,.,...,.,.................................................................................................................................................................................................................................................................,...............................................,.......................,...............................................,.....................................................................................................................,.................................,.................................................,.......,...............,.........................,.......,.....................,...,.......,.....,.......,...................................................................................................................................................................................................................................................,...............................................,.......................,...............................................,.....................................................................................................................,.................................,.................................................,.......,.........................................,.......,.....................,...,.......,.....,.......,.............,......................................................................................................................................................................................................................................................................................................................,,.,.,,......,..........,,.,............,,..,...,,.,.,.......,.............,...................................................................................................................,...............................................,...............................................................................................................................................................................,...............................................,...............................................................'
				compose.processHash(hash);
				break;
			default : break;
		};
	}

	this.processHash = function(hash) {
		if (hash.length > 0) {
			var pieces = hash.substring(1).split('|');
			var lights = pieces[0];
			$(".soundrow[id^=control] li.pox").each(function(i){
				if (i >= lights.length) return false;
				if (lights.charAt(i) == ',') {
					$(this).addClass('active');
				} else {
					$(this).removeClass('active');
				}
			});
			if (typeof pieces[1] !== 'undefined') {
				$('#temposlider').slider('value', parseInt(pieces[1]));
				$('#tempovalue').innerHTML = pieces[1];
				curSpeed = parseInt(pieces[1]);
			}
			curBeat = 0;
			// console.log($("#soundstart"));
			$("#soundstart").text("Stop!");
			document.title = "♪ " + initTitle;
			isPlaying = setInterval(compose.playNextBeat, beat_short);
		}
	}

}

$(document).ready(function(){
	compose.setup();

	$("#soundstart").click(function(){
		if (isPlaying === false) {
			curBeat = 0;
			isPlaying = setInterval(compose.playNextBeat, beat_short);
			$(this).empty();
			$(this).append("Stop!");
			document.title = "♪ " + initTitle;
		} else {
			clearInterval(isPlaying);
			isPlaying = false;
			$("#tracker li.pox").removeClass("active");
			$("audio").each(function(){
				this.pause();
				this.currentTime = 0.0;
			});
			$(this).empty();
			$(this).append("Start!");
			document.title = initTitle;
		}
	});

	$('.control_clear').click(function(){
		$(".soundrow[id^=control] li.pox.active").removeClass('active');
		 $.each(hash, function( i, val ){
			hash[i] = '.';
		 });
		var newhash = hash.join('');
		location.hash = newhash;
		var urlOriginal = window.location.href.match(/^[^\#\?]+/)[0];
		window.open("urlOriginal",_self);
		// history.go(0)
	});
	$('.control_hide').click(function(){
		$(".controls").slideUp();
	});
	$('.control_show').click(function(){
		$(".controls").slideDown();
	});
	$('.control_load').click(function(){
		compose.loadHash();
	});
	$('.sample_1').click(function(){
		compose.sample(1);
	});
	$('.share').click(function(){
	console.log(new Date().getTime());
	mainelm = this;
	mainelm.innerText = "loading...";
	mainelm.disabled = true;
	var url = window.location.href;
//	var url = tiny_url;
	prompt("Copy this URL and share with your friends!", url);
	mainelm.innerText = "Share!";
	mainelm.disabled = false;
    });

});
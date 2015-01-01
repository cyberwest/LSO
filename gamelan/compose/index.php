<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>LSO Gamelan Compose!</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../../assets/css/normalize.css">
	<link rel="stylesheet" href="compose.css">

	<meta name="keywords" content="venue,wedding,rehearsal,reception,hire,dinner,venue hire london,banquet,concert,event,chamber,recital,jazz,classical,filming,recording,bbc sessions,hawksmoor,UBS,old street, old st,lukes,st lukes,lukes church,gamelan,online music,gamelan music, gamelan instruments,london" />

	<meta name="keywords" content="venue,wedding,rehearsal,reception,hire,dinner,venue hire london,banquet,concert,event,chamber,recital,jazz,classical,filming,recording,bbc sessions,hawksmoor,UBS,old street, old st,lukes,st lukes,lukes church," />

	<meta property="og:site_name" content="London Symphony Orchestra" />

	<meta property="og:title" content="LSO St Luke’s Gamelan - London Symphony Orchestra" />

	<meta itemprop="name" content="LSO St Luke’s Gamelan - London Symphony Orchestra" />

	<meta property="og:description" content="Compose with the instruments in the London Symphony Orchestra’s St Luke’s Gamelan" />
	<meta itemprop="description" content="Compose with the instruments in the London Symphony Orchestra’s St Luke’s Gamelan" />

	<!-- icons & favicons -->
	<link rel="apple-touch-icon" href="../../assets/img/device_icons/apple-icon-touch.png">
	<link rel="icon" href="../../assets/img/device_icons/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="assets/img/device_icons/favicon.ico">
	<![endif]-->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../../assets/img/device_icons/win8-tile-icon.png">


<!-- 
	# LSO St Lukes Project
	Zoe Bryant
	zoeabryant@gmail.com
	zoeabryant.com
	@zoeabryant

	HTML/CSS(LESS)/PHP/jQuery/JSON

	Created as a Ravensbourne Student http://www.ravensbourne.ac.uk/

	June 2014

	Gamelan sound recording by the talented Martyna Staruszniak:
	uk.linkedin.com/pub/martyna-staruszniak/36/28b/b59 
-->
	<!-- ShareThis -->
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "d08d8aef-95a3-4e6b-bbf4-5dc7f8baa60b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>
<body>

<!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 
<div class="loader"></div>

<section class="gamelan_hero">
	<a href="/"><img src="../assets/img/logo.png" class="logo" alt="LSO St Lukes"></a>
	<div class="inner">
		<h1>
			Let's compose!
		</h1>
		<p>
			Click on an instrument to open out the different notes. Click on a note to set up a sequence.
		</p>
		<p>
			Press "Start!" on the buttons below to hear how your track sounds.
		</p>
		<p>
			If you have been directed here by a friend with their unique composition URL, click "Load from URL" to hear their composition, or listen to the sample gamelan composition by the LSO's Andy Channing, <i>Dream Topeng</i>. After listening, please reload this page before starting your own composition.
		</p>
		<p>
			Be sure to share your own composition when you are done using the "Share your composition!" button below.
		</p>
        
        <p>
			Please share this page via your social networks if you have enjoyed composing!
		</p>

		<div class="sharethis">
			<span class='st_twitter_large' displayText='Tweet'></span>
			<span class='st_facebook_large' displayText='Facebook'></span>
			<span class='st_linkedin_large' displayText='LinkedIn'></span>
			<span class='st_email_large' displayText='Email'></span>
			<span class='st_sharethis_large' displayText='ShareThis'></span>
		</div>
	</div>
</section>

<div class="wrapper">

	<ul class="global_controls">
		<li id="soundstart">Start!</li>
		<li class="control_clear">Clear all</li>
		<li class="control_hide">Hide all</li>
		<li class="control_show">Show all</li>
        <li class="control_load">Load from URL</li>
		<li class="sample_1">Sample - <i>Dream Topeng</i></li>
        <li class="share">Share your composition!</li>
	</ul>


	<ul id="lights">
		<li>
			<ul id="tracker" class="soundrow">
	 <li class="header"><h2>Tracker</h2></li><li class="pox col_0">1</li><li class="pox col_1">2</li><li class="pox col_2">3</li><li class="pox col_3">4</li><li class="pox col_4">5</li><li class="pox col_5">6</li><li class="pox col_6">7</li><li class="pox col_7">8</li><li class="pox col_8">42</li><li class="pox col_9">43</li><li class="pox col_10">44</li><li class="pox col_11">45</li><li class="pox col_12">46</li><li class="pox col_13">47</li><li class="pox col_14">48</li><li class="pox col_15">49</li><li class="pox col_16">50</li><li class="pox col_17">51</li><li class="pox col_18">52</li><li class="pox col_19">53</li><li class="pox col_20">54</li><li class="pox col_21">55</li><li class="pox col_22">56</li><li class="pox col_23">57</li><li class="pox col_24">58</li><li class="pox col_25">59</li><li class="pox col_26">60</li><li class="pox col_27">61</li><li class="pox col_28">62</li><li class="pox col_29">63</li><li class="pox col_30">64</li><li class="pox col_31">65</li>
			</ul>
		</li>
	</ul> <!-- #lights -->

	<section id="sounds" title="sounds">

		<section id="kempli" title="Kempli" class="group" data-help="acts like a metronome, try playing every 4th beat.">
			
			<audio id="kempli_beat" preload="true" title="Kempli" autobuffer data-length="short">
				<source src="../assets/sounds/kempli/kempli.ogg" type="application/ogg">
				<source src="../assets/sounds/kempli/kempli.mp3" type="audio/mpeg">
			</audio>

		</section>

		<section id="ugal" title="Ugal" class="group" data-help="is the gangsa melody leader, make a melody.">
			
			<audio id="ugal_1" title="Ugal low 2" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_1.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_1.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_2" title="Ugal low 3" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_2.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_3" title="Ugal low 5" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_3.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_4" title="Ugal low 6" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_4.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_5" title="Ugal key 1" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_5.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_6" title="Ugal key 2" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_6.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_7" title="Ugal key 3" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_7.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_7.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_8" title="Ugal key 4" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_8.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_8.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_9" title="Ugal key 5" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_9.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_9.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_10" title="Ugal key 6" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_10.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_10.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_11" title="Ugal key 7" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_11.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_11.mp3" type="audio/mpeg">
			</audio>
			<audio id="ugal_12" title="Ugal high 1" autobuffer preload="true" data-length="short">
				<source src="../assets/sounds/ugal/short_12.ogg" type="application/ogg">
				<source src="../assets/sounds/ugal/short_12.mp3" type="audio/mpeg">
			</audio>

		</section>

		<section id="cengceng" title="Ceng-Ceng" class="group" data-help="are little cymbals.">

			<audio id="cengceng_left_short" preload="true" title="Ceng-Ceng" autobuffer data-length="short">
				<source src="../assets/sounds/cengceng/left_short.ogg" type="application/ogg">
				<source src="../assets/sounds/cengceng/left_short.mp3" type="audio/mpeg">
			</audio>

		</section>

		<section id="gong" title="Gongs" class="group" data-help="mark the gong cycles.">

			<audio id="gong_left" preload="true" title="Kempur" autobuffer data-length="loop">
				<source src="../assets/sounds/gong/left.ogg" type="application/ogg">
				<source src="../assets/sounds/gong/left.mp3" type="audio/mpeg">
			</audio>
			<audio id="gong_middle" preload="true" title="Gong Lanang" autobuffer data-length="loop">
				<source src="../assets/sounds/gong/middle.ogg" type="application/ogg">
				<source src="../assets/sounds/gong/middle.mp3" type="audio/mpeg">
			</audio>
			<audio id="gong_right" preload="true" title="Gong Wadon" autobuffer data-length="loop">
				<source src="../assets/sounds/gong/right.ogg" type="application/ogg">
				<source src="../assets/sounds/gong/right.mp3" type="audio/mpeg">
			</audio>

		</section>

		<section id="reyong" title="Reyong" class="group" data-help="is a set of small gongs; try to make a pattern">

			<audio id="reyong_short_1" preload="true" title="reyong short low 3" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_14.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_14.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_2" preload="true" title="reyong short low 5" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_13.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_13.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_3" preload="true" title="reyong short low 6" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_12.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_12.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_4" preload="true" title="reyong short 1" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_11.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_11.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_5" preload="true" title="reyong short 2" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_10.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_10.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_6" preload="true" title="reyong short 3" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_9.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_9.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_7" preload="true" title="reyong short 4" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_8.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_8.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_8" preload="true" title="reyong short 5" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_7.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_7.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_9" preload="true" title="reyong short 6" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_6.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_10" preload="true" title="reyong short 7" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_5.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_11" preload="true" title="reyong short high 1" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_4.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_12" preload="true" title="reyong short high 2" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_3.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_13" preload="true" title="reyong short high 3" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_2.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="reyong_short_14" preload="true" title="reyong short high 5" autobuffer data-length="short">
				<source src="../assets/sounds/reyong/short_1.ogg" type="application/ogg">
				<source src="../assets/sounds/reyong/short_1.mp3" type="audio/mpeg">
			</audio>

		</section>

		<section id="calung_left" title="Calung Pengumbang" class="group" data-help="is a low-pitched instrument that plays pokok, a core melody. There are a variety of note lengths to try.">

			<audio id="calung_left_long_1" preload="true" title="Calung Long 1" autobuffer data-length="long">
				<source src="../assets/sounds/calung/left/long_7.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/long_7.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_long_2" preload="true" title="Calung Long 2" autobuffer data-length="long">
				<source src="../assets/sounds/calung/left/long_6.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/long_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_long_3" preload="true" title="Calung Long 3" autobuffer data-length="long">
				<source src="../assets/sounds/calung/left/long_5.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/long_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_long_4" preload="true" title="Calung Long 4" autobuffer data-length="long">
				<source src="../assets/sounds/calung/left/long_4.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/long_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_long_5" preload="true" title="Calung Long 5" autobuffer data-length="long">
				<source src="../assets/sounds/calung/left/long_3.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/long_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_long_6" preload="true" title="Calung Long 6" autobuffer data-length="long">
				<source src="../assets/sounds/calung/left/long_2.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/long_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_long_7" preload="true" title="Calung Long 7" autobuffer data-length="long">
				<source src="../assets/sounds/calung/left/long_1.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/long_1.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_medium_1" preload="true" title="Calung Medium 1" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/left/medium_7.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/medium_7.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_medium_2" preload="true" title="Calung Medium 2" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/left/medium_6.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/medium_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_medium_3" preload="true" title="Calung Medium 3" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/left/medium_5.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/medium_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_medium_4" preload="true" title="Calung Medium 4" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/left/medium_4.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/medium_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_medium_5" preload="true" title="Calung Medium 5" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/left/medium_3.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/medium_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_medium_6" preload="true" title="Calung Medium 6" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/left/medium_2.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/medium_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_medium_7" preload="true" title="Calung Medium 7" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/left/medium_1.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/medium_1.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_short_1" preload="true" title="Calung Short 1" autobuffer data-length="short">
				<source src="../assets/sounds/calung/left/short_1.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/short_1.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_short_2" preload="true" title="Calung Short 2" autobuffer data-length="short">
				<source src="../assets/sounds/calung/left/short_2.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/short_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_short_3" preload="true" title="Calung Short 3" autobuffer data-length="short">
				<source src="../assets/sounds/calung/left/short_3.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/short_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_short_4" preload="true" title="Calung Short 4" autobuffer data-length="short">
				<source src="../assets/sounds/calung/left/short_4.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/short_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_short_5" preload="true" title="Calung Short 5" autobuffer data-length="short">
				<source src="../assets/sounds/calung/left/short_5.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/short_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_short_6" preload="true" title="Calung Short 6" autobuffer data-length="short">
				<source src="../assets/sounds/calung/left/short_6.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/short_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_left_short_7" preload="true" title="Calung Short 7" autobuffer data-length="short">
				<source src="../assets/sounds/calung/left/short_7.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/left/short_7.mp3" type="audio/mpeg">
			</audio>

		</section>

		<section id="calung_right" title="Calung Pengisep" class="group" data-help="is the male part of a pair of instruments. Match them together to enrich the melody.">

			<audio id="calung_right_long_1" preload="true" title="Calung Long 1" autobuffer data-length="long">
				<source src="../assets/sounds/calung/right/long_7.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/long_7.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_long_2" preload="true" title="Calung Long 2" autobuffer data-length="long">
				<source src="../assets/sounds/calung/right/long_6.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/long_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_long_3" preload="true" title="Calung Long 3" autobuffer data-length="long">
				<source src="../assets/sounds/calung/right/long_5.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/long_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_long_4" preload="true" title="Calung Long 4" autobuffer data-length="long">
				<source src="../assets/sounds/calung/right/long_4.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/long_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_long_5" preload="true" title="Calung Long 5" autobuffer data-length="long">
				<source src="../assets/sounds/calung/right/long_3.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/long_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_long_6" preload="true" title="Calung Long 6" autobuffer data-length="long">
				<source src="../assets/sounds/calung/right/long_2.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/long_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_long_7" preload="true" title="Calung Long 7" autobuffer data-length="long">
				<source src="../assets/sounds/calung/right/long_1.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/long_1.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_medium_1" preload="true" title="Calung Medium 1" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/right/medium_7.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/medium_7.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_medium_2" preload="true" title="Calung Medium 2" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/right/medium_6.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/medium_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_medium_3" preload="true" title="Calung Medium 3" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/right/medium_5.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/medium_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_medium_4" preload="true" title="Calung Medium 4" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/right/medium_4.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/medium_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_medium_5" preload="true" title="Calung Medium 5" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/right/medium_3.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/medium_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_medium_6" preload="true" title="Calung Medium 6" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/right/medium_2.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/medium_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_medium_7" preload="true" title="Calung Medium 7" autobuffer data-length="medium">
				<source src="../assets/sounds/calung/right/medium_1.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/medium_1.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_short_1" preload="true" title="Calung Short 1" autobuffer data-length="short">
				<source src="../assets/sounds/calung/right/short_7.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/short_7.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_short_2" preload="true" title="Calung Short 2" autobuffer data-length="short">
				<source src="../assets/sounds/calung/right/short_6.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/short_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_short_3" preload="true" title="Calung Short 3" autobuffer data-length="short">
				<source src="../assets/sounds/calung/right/short_5.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/short_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_short_4" preload="true" title="Calung Short 4" autobuffer data-length="short">
				<source src="../assets/sounds/calung/right/short_4.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/short_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_short_5" preload="true" title="Calung Short 5" autobuffer data-length="short">
				<source src="../assets/sounds/calung/right/short_3.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/short_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_short_6" preload="true" title="Calung Short 6" autobuffer data-length="short">
				<source src="../assets/sounds/calung/right/short_2.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/short_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="calung_right_short_7" preload="true" title="Calung Short 7" autobuffer data-length="short">
				<source src="../assets/sounds/calung/right/short_1.ogg" type="application/ogg">
				<source src="../assets/sounds/calung/right/short_1.mp3" type="audio/mpeg">
			</audio>

		</section>

		<section id="gangsa" title="Gangsa" class="group" data-help="expands the pokok through a technique called kotekan. Fill in the gaps of the melody.">
			
			<audio id="gangsa_pemade_short_1" preload="true" title="gangsa pemade short low 2" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_1.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_1.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_2" preload="true" title="gangsa pemade short low 3" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_2.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_3" preload="true" title="gangsa pemade short low 5" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_3.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_4" preload="true" title="gangsa pemade short low 6" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_4.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_5" preload="true" title="gangsa pemade short 1" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_5.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_6" preload="true" title="gangsa pemade short 2" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_6.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_7" preload="true" title="gangsa pemade short 3" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_7.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_7.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_8" preload="true" title="gangsa pemade short 4" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_8.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_8.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_9" preload="true" title="gangsa pemade short 5" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_9.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_9.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_10" preload="true" title="gangsa pemade short 6" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_10.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_10.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_11" preload="true" title="gangsa pemade short 7" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_11.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_11.mp3" type="audio/mpeg">
			</audio>
			<audio id="gangsa_pemade_short_12" preload="true" title="gangsa pemade short high 1" autobuffer data-length="short">
				<source src="../assets/sounds/gangsa_pemade/left/short_12.ogg" type="application/ogg">
				<source src="../assets/sounds/gangsa_pemade/left/short_12.mp3" type="audio/mpeg">
			</audio>

		</section>

		<section id="jegogan_left" title="Jegogan Pengisep" class="group" data-help="is the male part of a pair of instruments. Match them together to enrich the melody.">

			<audio id="jegogan_left_1" preload="true" title="jegogan 1" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/left/long_1.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/left/long_1.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_left_2" preload="true" title="jegogan 2" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/left/long_2.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/left/long_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_left_3" preload="true" title="jegogan 3" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/left/long_3.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/left/long_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_left_4" preload="true" title="jegogan 4" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/left/long_4.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/left/long_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_left_5" preload="true" title="jegogan 5" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/left/long_5.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/left/long_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_left_6" preload="true" title="jegogan 6" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/left/long_6.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/left/long_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_left_7" preload="true" title="jegogan 7" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/left/long_7.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/left/long_7.mp3" type="audio/mpeg">
			</audio>

		</section>

		<section id="jegogan_right" title="Jegogan Pengumbang" class="group" data-help="is the lowest of the metallophones to reinforce the strongest notes of the melody.">

			<audio id="jegogan_right_1" preload="true" title="jegogan 1" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/right/long_1.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/right/long_1.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_right_2" preload="true" title="jegogan 2" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/right/long_2.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/right/long_2.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_right_3" preload="true" title="jegogan 3" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/right/long_3.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/right/long_3.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_right_4" preload="true" title="jegogan 4" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/right/long_4.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/right/long_4.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_right_5" preload="true" title="jegogan 5" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/right/long_5.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/right/long_5.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_right_6" preload="true" title="jegogan 6" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/right/long_6.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/right/long_6.mp3" type="audio/mpeg">
			</audio>
			<audio id="jegogan_right_7" preload="true" title="jegogan 7" autobuffer data-length="long">
				<source src="../assets/sounds/jegogan/right/long_7.ogg" type="application/ogg">
				<source src="../assets/sounds/jegogan/right/long_7.mp3" type="audio/mpeg">
			</audio>

		</section>

	</section>


</div>

<footer>
	<p><a href="/gamelan/">Head back to the main gamelan page.</a></p>
</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
    <script>
var tiny_url = "<?php 
//gets the URL  
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//gets the TinyURL data from the URL  
function get_tiny_url($url)  {  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$data = curl_exec($ch);  
	curl_close($ch);  
	return $data;  
} 
echo get_tiny_url($url);
?>";
</script>
    <script src="compose.js"></script>
</body>
</html>
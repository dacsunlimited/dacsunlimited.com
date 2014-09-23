<?php include( "partials/lang.php" ); ?>
<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Dacs Unlimited" />
	<meta name="description" content="<?=$translate[ $lang ][ "metatitle" ]?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="favicon.png" rel="shortcut icon" />
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<title><?=$translate[ $lang ][ "title" ]?></title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/fonts.css" rel="stylesheet">
	



	<!-- jQuery Files -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>

	<!-- Royal Preloader -->
	<link rel="stylesheet" type="text/css" href="css/royal_preloader.css" />
	<script type="text/javascript" src="js/royal_preloader.min.js"></script>

	<script type="text/javascript">

		// Change to your image paths
	    var images = {
	    	'  slide1':     		'img/slider/slide1.jpg',
	    	  'logo':           'img/logo.svg',
	        'Xicon':     	    'img/btsx-ico-w.svg',
	        'news1':  			  'img/news/news1.jpg',
	        'news2':   			  'img/news/news2.jpg',
          'news3':   			  'img/news/news3.jpg',
	        'news1thumb':     'img/news/thumbs/news1.jpg',
	        'news2thumb':   	'img/news/thumbs/news2.jpg',
	        'news3thumb':   	'img/news/thumbs/news3.jpg',
	        'quote1':     		'img/bg1.jpg',
	    };
	 
	    // config
	    Royal_Preloader.config({
	        mode:       'text',
	        images:     images,
	        timeout:    2,
	        showInfo:   true,
	        background: ['#272727']
	    });
	</script>

	<!-- Icon Fonts -->
	<link href='css/ionicons.min.css' rel='stylesheet' type='text/css'>
</head>
<body class="royal_loader" data-spy="scroll" data-target="#myScrollSpy" data-offset="200">

	<!-- Begin Intro -->
	<div class="jumbotron intro clearfix" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker p">
<div class="logo-icon-intro" style="position: absolute; left: 50%; top: 12%;"><i style=" position: relative;font-size: 64px;left: -50%;" class="ion-ios7-sunny-outline"></i></div>
		<!-- Content -->
		<div class="container center-vertically">

		<p><?=$translate[ $lang ][ "introtitle" ]?></p>
		<div class="ticker">
			<h1><?=$translate[ $lang ][ "ticker1" ]?></h1>
			<h1><?=$translate[ $lang ][ "ticker2" ]?></h1>
			<h1><?=$translate[ $lang ][ "ticker3" ]?></h1>
			<h1><?=$translate[ $lang ][ "ticker4" ]?></h1>
		</div>
	
			<hr><p>
			<a href="#" data-id="section1" class="btn btn-default bolt-button-light scroll-link" style="margin-top:10px;"><?=$translate[ $lang ][ "getstarted" ]?>&nbsp;&nbsp;<span class="ion-ios7-arrow-right"></span>
			</a></p>

			</a>
		    <div style="position: absolute; left: 50%; bottom: 4%;">
<div class="intro-scroll logo-icon-intro"><small><?=$translate[ $lang ][ "scroll" ]?></small><br>

</div>
</div>
		</div>

	</div>
	<!-- End Intro -->

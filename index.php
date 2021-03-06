<!DOCTYPE html>
<html>
	<head>
		<title>BoxBox (flosd) | Home</title>
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="ROBOTS" content="INDEX, FOLLOW">
            <meta name="title" content="BoxBox | Home">
            <meta name="description" content="The personal website of BoxBox (flosd), you can check your chatpoints, if hes streaming, his latest video and even subscribe or donate to him. Learn more!">
            <meta name="keywords" content="flosd, box, boxbox, lol, league, legends, of, riven, good, best, na, twitch, stream">
            <meta name="author" content="Ryan (Shixma)">
            <meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom_edit_style.css" rel="stylesheet">
        <link href="css/animations.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"></link>
        <link rel="shortcut icon" href="/favicon.ico">
        <script type="text/javascript" src="js/smoothwheel.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script src="http://dfcb.github.io/BigVideo.js/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
            <script src="http://vjs.zencdn.net/4.3/video.js"></script>
            <script src="http://dfcb.github.io/BigVideo.js/bower_components/BigVideo/lib/bigvideo.js"></script>
            <link href="http://dfcb.github.io/BigVideo.js/bower_components/BigVideo/css/bigvideo.css" rel="stylesheet">
            <script>
            var BV;
                $(function() {
                // initialize BigVideo
                BV = new $.BigVideo({
                container: $('.main-background')
                });
                    BV.init();
                    BV.show('http://vid1349.photobucket.com/albums/p743/Shixma/Flosd1_zpszqxelidf.mp4',{ambient:true});
                    $('#big-video-wrap').delay(350).fadeIn('slow');
                });
                BV.getPlayer().on('durationchange',function(){
                    $('#big-video-wrap').delay(350).fadeIn('slow');
                });
            </script>
	</head>
	<body data-spy="scroll" data-target=".navbar">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <?php include 'header.php'; ?>
<!-- Content -->
<div class="main-background content-home" id="home"></div>
<div class="main-content">
<div class="row">
    <div class="col-xs-4 main-image"><div class="main-big-riven"></div></div>
    <div class="col-xs-8 main-text"><h1 class="box-welcome">Welcome to www.flosd.com</h1><br /><h2><div id='streamWidget'><i class="fa fa-gear fa-spin"></i><!-- Loading Animation while querying data --></div></h2></div>
</div>
<div class="sponsors">
    <div class="sponsor-wrap">
        <div style="margin-left: -12%;">
        <a href="#"><img src="img/sponsors/cursevoice.png" style="margin-bottom: 10px;"></a> 
        <a href="#"><img src="img/sponsors/g2a-color.png" style="margin-bottom: 15px;"></a>
        <a href="#"><img src="img/sponsors/ibp-logo-color.png" style="margin-bottom: 15px;"></a>
        <a href="#about" class="main-tonext"><i class="fa fa-chevron-down"></i></a>
        <a href="#"><img src="img/sponsors/vulcan.png" style="margin-bottom: 15px;"></a>
        <a href="#"><img src="img/sponsors/twitch.png" width="182px" height="60" style="margin-bottom: 10px; margin-left: 10px;"></a>
        <a href="#"><img src="img/sponsors/hyperx.png" style="margin-bottom: 10px; margin-left: 10px;"></a>
        </div>
    </div>
</div>
</div> 
<div class="content">
    <div style="height: 600px; background-color: blue;" class="content-about" id="about">
        <h1 style="text-align: center; margin-top: 0px;vertical-align:middle;">PLACEHOLDER</h1>
    </div>
    <div style="height: 600px; background-color: orange;" class="content-points" id="points">
        <h1 style="text-align: center;margin-top: 0px;vertical-align:middle;">PLACEHOLDER</h1>
    </div>
    <div style="height: 600px; background-color: red;" class="content-sub" id="sub">
        <h1 style="text-align: center;margin-top: 0px;vertical-align:middle;">PLACEHOLDER</h1>
    </div>
    <div style="height: 600px; background-color: green;" class="content-youtube" id="youtube">
        <h1 style="text-align: center;margin-top: 0px;vertical-align:middle;">PLACEHOLDER</h1>
    </div>
    <div style="height: 600px; background-color: yellow;" class="content-donate" id="donate">
        <h1 style="text-align: center;margin-top: 0px;vertical-align:middle;">PLACEHOLDER</h1>
    </div>
</div>
<!-- End Content -->
<?php include 'footer.php'; ?>
        
	<!--More Script-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script> <!--Calling scripts again as fall back if other don't load-->
	<script src="js/bootstrap.js"></script> <!--Calling scripts again as fall back if other don't load-->
    <script type="text/javascript" src="js/custom.js"></script> <!--Calling scripts again as fall back if other don't load-->
    <script type="text/javascript" src="js/smoothwheel.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
        <!-- Big Video-->
    <?php include("analyticstracking.php") ?>
    <!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').delay(3000).fadeOut('slow'); // will first fade out the loading animation
            $('#preloader').delay(3000).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(3000).css({'overflow':'visible'});
        })
    //]]>
</script> 
    </body>
</html>
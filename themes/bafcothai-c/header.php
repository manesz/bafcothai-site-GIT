<?php
/**
 * 	Theme Name: BAFCOTHAI BUSINESS THEME
 *  Theme URI: http://demo.ideacorners.com/bafcothai
 *  Description: This theme for business style. Copyright 2012, IdeaCorners Developers.
 *  Version: 1.0
 *  Author: IdeaCorners Developer
 *  Author URI: http://www.ideacorners.com
 *
 * @package Business Theme by IdeaCorners Developer
 * @subpackage ic-business
 * @author Business Themes - www.ideacorners.com
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Bangkok Freight Forwarders Co.,Ltd.</title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-114x114.png">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri();?>/assets/scripts/ie9.js">IE7_PNG_SUFFIX=".png";</script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/stylesheets/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/stylesheets/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/stylesheets/flexslider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/stylesheets/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/stylesheets/nivoslider.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <style>
        .img_wrap .bwWrapper a img{width: 100% !important;}
        .flex-caption{font-family: 'Roboto', sans-serif;}
    </style>
    <script src="<?php echo get_template_directory_uri();?>/assets/scripts/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/scripts/jquery.flexslider-min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/scripts/jquery.bxSlider.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/scripts/jquery.nivo.slider.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/scripts/jquery.prettyPhoto.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/scripts/jquery.blackandwhite.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/scripts/js_func.js"></script>
    <script>
        $(function(){
            $('.flexslider').flexslider({
                animation: "slide",              //String: Select your animation type, "fade" or "slide"
                randomize: true,               //Boolean: Randomize slide order
                easing: "swing"
            });
            $('.features_slider').bxSlider({
                auto: false,
                displaySlideQty: 4,
                moveSlideQty: 1,
                speed : 1000
            });
            $(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme: 'dark_rounded'});
            $('.bwWrapper').BlackAndWhite({
                hoverEffect : true,
                webworkerPath : false,
                responsive:true,
                invertHoverEffect:false
            });

            $('#slider').nivoSlider({
                controlNav: false
            });
            $('.post_slider').bxSlider({
                auto: false,
                speed : 1000
            });
            $('.clients_slider').bxSlider({
                auto: false,
                controls : false,
                mode: 'fade',
                pager: true
            });
            $('.bwWrapper').BlackAndWhite({
                hoverEffect : true,
                webworkerPath : false,
                responsive:true,
                invertHoverEffect:false
            });
        })
    </script>
    <!-- #### Google Analyti Script #### -->
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-28094135-2', 'bafcothai.com');
	  ga('send', 'pageview');

	</script>
    <!-- #### END: Google Analytic Script #### -->
    <!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>
<!--<body class="index_v2">-->
<body class="">
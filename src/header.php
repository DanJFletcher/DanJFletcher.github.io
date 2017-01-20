<?php 
/**
 * Template: Header
 * 
 */
 
 // Requires go here.
 require('env.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>Dan Fletcher</title>

        <!--META-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Reset CSS -->
        <!--<link rel="stylesheet" href="<?php // echo SITE_URL ?>/vendor/normalize-css/normalize.css" type="text/css" />-->
        
        <!-- CSS Libs/Frameworks -->
        <!--<link rel="stylesheet" href="<?php // echo SITE_URL ?>/vendor/bootstrap/bootstrap.min.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="<?php // echo SITE_URL ?>/vendor/owl2/owl.carousel.min.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="<?php // echo SITE_URL ?>/vendor/owl2/owl.theme.default.min.css" type="text/css" />-->


        <!--CSS-->
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link href="https://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet">
        
        <!-- SEO -->
        <meta name="description" content="I am a web developer in Stratford Ontario and surrounding area. Experienced in Wordpress and custom CMS's.">
        <meta name="keywords" content="web developer, websites, stratford ontario, wordpress, open cart">
        
        <!-- OG:Tags -->
        <meta property="og:type" content="profile">
        <meta property="og:title" content="Dan J Fletcher">
        <meta property="og:url" content="danjfletcher.ca">
        <meta property="og:image" content="http://www.danjfletcher.ca/images/logos/profile-pic.jpg">
        <meta property="profile:first_name" content="Dan">
        <meta property="profile:last_name" content="Fletcher">
        
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@danfletcherblog">
        <meta name="twitter:title" content="Dan Fletcher - Web Developer">
        <meta name="twitter:description" content="Developing clean, elegant sites by day, and studying computer science by night. I'm a developer with a drive to create the best.">
        <meta name="twitter:image" content="http://www.danjfletcher.ca/images/logos/profile-pic.jpg">
        
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


    </head>

    <!--BODY-->
    <body>

      <!-- PAGE LOADER -->
      <!--<div id="loader-wrapper">-->
      <!--  <div id="loader"></div>-->

      <!--  <div class="loader-section section-left"></div>-->
      <!--  <div class="loader-section section-right"></div>-->
      <!--</div>-->

    	<!--HEADER-->
        <header class="full">
            <div id="header-menuholder" class="full">
            	<div class="center">
                	<div id="header-logo">
                    	<a href="<?= SITE_URL ?>" title="Home"><img src="images/logos/profile-pic.jpg" alt="Profile"></a>
                  </div>

                  <div id="header-menu">
                  	<div class="header-menuitem">
                      	<a href="<?= SITE_URL ?>#about" title="About">about</a>
                    </div>
                  	<div class="header-menuitem">
                      	<a href="<?= SITE_URL ?>#projects" title="Projects">projects</a>
                    </div>
                  	<div class="header-menuitem">
                      	<a href="<?= SITE_URL ?>#testamonies" title="Testomonies">testimonies</a>
                    </div>
                  	<div class="header-menuitem">
                      	<a href="<?= SITE_URL ?>#contact" title="Contact">contact</a>
                    </div>
                    <div class="clear"></div>
                  </div> <!-- end #header-menu -->
                  <div class="main-heading">
                  <a href="<?= SITE_URL ?>" title="Home">
                      <h1>Dan Fletcher</h1>
                      Web Developer
                  </a>
                  </div>
                  <div class="clear"></div>
              </div>
            </div>
            
            <section class="social-links">
                <a href="//ca.linkedin.com/in/danjfletcher" target="_blank" title="LinkedIn"><img src="images/icons/icon_linkedin.png" alt="LinkedIn" /></a>
                <a href="//facebook.com" target="_blank" title="Facebook"><img src="images/icons/icon_facebook.png" alt="Facebook" /></a>
                <a href="//plus.google.com" target="_blank" title="Google Plus"><img src="images/icons/icon_googleplus.png" alt="Google Plus" /></a>
                <a href="//twitter.com" target="_blank" title="Twitter"><img src="images/icons/icon_twitter.png" alt="Twitter" /></a>
                <a href="//github.com/DanJFletcher" target="_blank" title="Github"><img src="images/icons/icon_github.png" alt="Github" /></a>
            </section>
        </header>
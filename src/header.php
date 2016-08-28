<?php 
/**
 * Template: Header
 * 
 */
 
 // Requires go here.
 require('../env.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>Dan Fletcher</title>

        <!--META-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Reset CSS -->
        <link rel="stylesheet" href="<?php echo SITE_URL ?>/vendor/normalize-css/normalize.css" type="text/css" />
        
        <!-- CSS Libs/Frameworks -->
        <!--<link rel="stylesheet" href="<?php // echo SITE_URL ?>/vendor/bootstrap/bootstrap.min.css" type="text/css" />-->
        <link rel="stylesheet" href="<?php echo SITE_URL ?>/vendor/owl2/owl.carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo SITE_URL ?>/vendor/owl2/owl.theme.default.min.css" type="text/css" />


        <!--CSS-->
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link href="https://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet">


    </head>

    <!--BODY-->
    <body>

      <!-- PAGE LOADER -->
      <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>

    	<!--HEADER-->
        <header class="full">
            <div id="header-menuholder" class="full">
            	<div class="center">
                	<div id="header-logo">
                    	<a href="<?= SITE_URL ?>" title="Home"><img src="images/logos/profile-pic.jpg" alt="Profile"></a>
                  </div>

                  <div id="header-menu">
                  	<div class="header-menuitem">
                      	<a href="<?= SITE_URL ?>#about">about</a>
                    </div>
                  	<div class="header-menuitem">
                      	<a href="<?= SITE_URL ?>#projects">projects</a>
                    </div>
                  	<div class="header-menuitem">
                      	<a href="<?= SITE_URL ?>#testamonies">testamonies</a>
                    </div>
                  	<div class="header-menuitem">
                      	<a href="<?= SITE_URL ?>#contact">contact</a>
                    </div>
                    <div class="clear"></div>
                  </div> <!-- end #header-menu -->
                  <div class="main-heading">
                  <h1>Dan Fletcher</h1>
                  Web Developer
                  </div>
                  <div class="clear"></div>
              </div>
            </div>
        </header>
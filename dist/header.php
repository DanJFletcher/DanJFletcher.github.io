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
    	<title>Beard Pack</title>

        <!--META-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Reset CSS -->
        <link rel="stylesheet" href="<?php echo SITE_URL ?>/vendor/normalize-css/normalize.css" type="text/css" />
        
        <!-- CSS Libs/Frameworks -->
        <link rel="stylesheet" href="<?php echo SITE_URL ?>/vendor/bootstrap/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo SITE_URL ?>/vendor/owl2/owl.carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo SITE_URL ?>/vendor/owl2/owl.theme.default.min.css" type="text/css" />


        <!--CSS-->
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">


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
                    	<a href="index.html" title="Home"><img src="images/logos/profile-pic.jpg" alt="Profile"></a>
                  </div>

                  <div id="header-menu">
                  	<div class="header-menuitem">
                      	about
                    </div>
                  	<div class="header-menuitem">
                      	projects
                    </div>
                  	<div class="header-menuitem">
                      	testamonies
                    </div>
                  	<div class="header-menuitem">
                      	contact
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
        <main>
        <section class="about">
          <h2>About Me.</h2>
          <hr />
          <p>Clean. Responsive. Mobile-first. Simple. This is the montra of the modern developer, and words I live by when developing my own projects. Developing clean, elagant sites by day, and studying computer science by night. I'm a developer with a drive to create the best.</p>
          <a class="btn" href="">Hire Me</a>
        </section>
        </main>
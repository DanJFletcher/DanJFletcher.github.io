<?php
/**
 * Page: Home
 * 
 */
 
 // Requires/Includes go here.
 require('env.php');
 
 // Generate the header markup
 include('header.php');
 
?>

<!-- TODO: Add page content -->
        <main>
        <section class="about" id="about">
          <h2>About Me.</h2>
          <hr />
          <p>
            Web developer by trade. CS student at 
            <a href="//www.uopeople.edu/" title="uopeople.edu" target="_blank" class="link-inline">
              UoPeople</a>, 
              student ambassador, 
            <a href="//www.danfletcherblog.ca/" title="danfletcherblog.ca" target="_blank" class="link-inline">
              blogger</a>, 
              gamer, dad, hubby, enjoys walks, fishing, Lego, camping, blah blah etc 
            etc - usually not in that order (in sequence or in magnitude).    
          </p>
          <a href="mailto:dan@danjfletcher.ca" class="btn btn-light btn-margin">Email Me</a>
          <a href="<?= SITE_URL ?>/docs/CV_08-27-2016.pdf" target="_blank" class="btn btn-light btn-margin">View CV</a>
        </section>
        
        <div class="padding">
          <i class="icono-arrow1-down"></i>
        </div>
        
        
        <section class="work" id="projects">
          <h2>Showcase.</h2>
          <hr />
          <p class="showcase-description">Here are some samples of my professional work as well as some of my side projects. Click the "See Project" button to view more details.</p>
            <div class="owl-carousel owl-theme">
              <div>
                <h3 class="showcase-title">The Family Central Restaruant</h3>
                <img src="<?= SITE_URL ?>/images/screenshots/family_central_landing_page.png" alt="Family Central Restaruant landing page">
                <p>Dynamic events calendar and custom event pages.</p>
                <a href="http://familycentral.ca/" target="_blank" class="btn btn-light">Visit Site</a>
              </div>
              <div>
                <h3 class="showcase-title">The London Beatles Fest Trivia</h3>
                <img src="<?= SITE_URL ?>/images/screenshots/beatles_landing_page.png" alt="The London Beatles Festival Trivia landing page">
                <p>Multiple choice, timed quiz that has user authentication, custom admin dashboard and date-triggered events.</p>
                <a href="http://trivia.thelondonbeatlesfestival.com/" target="_blank" class="btn btn-light">Visit Site</a>
              </div>
              <div>
                
                <!-- Patio Depot -->
                <h3 class="showcase-title">Patio Depot</h3>
                <img src="<?= SITE_URL ?>/images/screenshots/patio_depot_landing_page.jpg" alt="Patio Depot landing page">
                <p>Mobile-first, responsive, website with static content.</p>
                <a href="patiodepot.php" class="btn btn-light">See Project</a>
              </div>
              <div>
                <h3 class="showcase-title">Electronic Calculator</h3>
                <img src="<?= SITE_URL ?>/images/screenshots/electronic_calculator.jpg" alt="Electronic Calculator">
                <p>Web app simulating a simple desktop calculator.</p>
                <a href="//danjfletcher.github.io/electronic-calculator/" class="btn btn-light">See Project</a>
              </div>
            </div>
        </section>
        </main>

<?php 

// Gernerate the footer markup
include('footer.php') 

?>




<?php
/**
 * Page: Home
 * 
 */
 
 // Requires/Includes go here.
 require('../env.php');
 
 // Generate the header markup
 include('header.php');
 
?>

<!-- TODO: Add page content -->
        <main>
        <section class="about">
          <h2>About Me.</h2>
          <hr />
          <p>Clean. Responsive. Mobile-first. Simple. This is the montra of the modern developer, and words I live by when developing my own projects. Developing clean, elagant sites by day, and studying computer science by night. I'm a developer with a drive to create the best.</p>
          <a class="btn" href="">Hire Me</a>
        </section>
        
        
        <section class="work">
          <h2>My Work.</h2>
          <hr />
          <p>Here are some short snippets to showcase samples of my professional work. Click the "See Project" button to view more details about any of my projects.</p>
            <div class="owl-carousel owl-theme">
              <div>
                <h3>The Family Central Restaruant</h3>
                <img src="<?= SITE_URL ?>/images/screenshots/family_central_landing_page.png" alt="Family Central Restaruant landing page">
                <p>Developed dynamic events calendar and event pages.</p>
                <a href="#" class="btn">See Project</a>
              </div>
              <div>
                <h3>The London Beatles Fest Trivia</h3>
                <img src="<?= SITE_URL ?>/images/screenshots/beatles_landing_page.png" alt="The London Beatles Festival Trivia landing page">
                <p>Developed a multiple choice, timed quiz that has user authentication, custom admin dashboard and date-triggered events.</p>
                <a href="#" class="btn">See Project</a>
              </div>
              <div>
                <h3>Patio Depot</h3>
                <img src="<?= SITE_URL ?>/images/screenshots/patio_depot_landing_page.jpg" alt="Patio Depot landing page">
                <p>Developed a mobile-first, responsive, website with static conetent.</p>
                <a href="#" class="btn">See Project</a>
              </div>
              <div> Your Content </div>
              <div> Your Content </div>
              <div> Your Content </div>
              <div> Your Content </div>
            </div>
        </section>
        </main>

<?php 

// Gernerate the footer markup
include('footer.php') 

?>




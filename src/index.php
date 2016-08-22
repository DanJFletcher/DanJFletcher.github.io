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
            <div class="owl-carousel owl-theme">
              <div> Your Content </div>
              <div> Your Content </div>
              <div> Your Content </div>
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




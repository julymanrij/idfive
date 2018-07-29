<?php
/*
  Template Name: About
 */
get_header(); ?>
<main class="clear">
  <div class="grid">
    <div class="col-large-4 col-wooser-3 nav-tier-bubble">
      <nav class="nav nav-tier">
        <ul>
          <li><a href="/">
                <svg class="symbol symbol-arrow-left">
                  <use xlink:href="#arrow-left"></use>
                </svg><span>Back to parentPage</span></a></li>
          <li><a href="/">2nd Level Page link</a></li>
          <li><a href="/">2nd Level Page link</a></li>
          <li><a href="/">2nd Level Page link</a></li>
          <li><a href="/">2nd Level Page link</a></li>
          <li><a href="/">2nd Level Page link</a></li>
          <li><a href="/">2nd Level Page link</a></li>
        </ul>
      </nav>
    </div>
    <div class="col-large-8 col-wooser-9">
      <div class="main-content">
          <div class="hero hero--mask hero--default">
            <div class="compartment">
              <h1 class="hero__title">About Us</h1>
            </div><img src="<?php echo get_template_directory_uri(); ?>./assets/images/interior.jpg" alt="undefined">
          </div>
        <div class="section">
          <div class="compartment">
            <div class="nav-tier-container">
              <button class="nav-tier-switch"> <span>Page Menu</span>
                  <svg class="symbol symbol-chevron-down">
                    <use xlink:href="#chevron-down"></use>
                  </svg>
              </button>
              <nav class="nav nav-tier nav-tier--clone">
                <ul>
                  <li><a href="/">
                        <svg class="symbol symbol-arrow-left">
                          <use xlink:href="#arrow-left"></use>
                        </svg><span>Back to parentPage</span></a></li>
                  <li><a href="/">2nd Level Page link</a></li>
                  <li><a href="/">2nd Level Page link</a></li>
                  <li><a href="/">2nd Level Page link</a></li>
                  <li><a href="/">2nd Level Page link</a></li>
                  <li><a href="/">2nd Level Page link</a></li>
                  <li><a href="/">2nd Level Page link</a></li>
                </ul>
              </nav>
            </div>
            <p class="lead-in">Lead in Copy Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lectus arcu, euismod bibendum sapien id, faucibus viverra purus. Nullam vel metus ipsum. Praesent neque arcu, commodo a eros eget, ultrices.</p>
            <h2>Our Approach, People, Process, Technology</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue. Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, id congue, sit amet faucibus ipsum In Text Link justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue. Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula.</p>
          </div>
        </div>
        <div class="hero product product--interior">
          <div class="compartment">
            <div class="product__details product__details--interior">
              <h2 class="larger">Meet Our Team</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor consectetur adipiscing elit mauris vitae. </p><a href="" class="button">Learn More</a>
            </div>
          </div><img src="<?php echo get_template_directory_uri(); ?>./assets/images/table.jpg" alt="undefined">

        </div>
        <?php

        if( have_posts() ):

          while( have_posts() ): the_post(); ?>

            <div class="section"><?php the_content(); ?></div>
          <?php endwhile;

        endif;

        ?>
        <div class="section">
          <div class="compartment">
            <h2>Our Location</h2>
            <div class="grid grid--40">
              <div class="col-wooser-6"><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12345.090945813037!2d-76.64704685!3d39.32740585!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1470407379214" class="titled-image" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                <h3> <a href="">Barcoding Inc.</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam</p>
              </div>
              <div class="col-wooser-6"><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12345.090945813037!2d-76.64704685!3d39.32740585!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1470407379214" class="titled-image" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                <h3> <a href="">Technology Integration Center</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam</p>
              </div>
            </div>
            <div class="flex flex--justified flex--bordered">
              <h2>Our Partners</h2><a href="" class="discover">View All</a>
            </div>
            <ul class="styled-list divided-list condensed-list">
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>Advantech</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>Elo TouchSystems</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>LXE</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>CaptureSoft</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>Brother</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>ID Label</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>Microscan</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>MobileFrame</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>CaptureTech</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>Internec</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>O'Neil</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>Savant Solutions</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>Datalogic</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>Janam</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>Zebra Printers</span></a></li>
              <li><a href="">
                    <svg class="symbol symbol-arrow-right">
                      <use xlink:href="#arrow-right"></use>
                    </svg><span>SOTI Inc.</span></a></li>
            </ul>
          </div>
        </div>
        <div class="callout--extreme">
          <h1>Got what it takes? We're hiring.</h1><a href="" class="button">Browse Jobs</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>

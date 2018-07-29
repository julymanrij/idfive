<?php
/*
  Template Name: Business Areas
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
              <h1 class="hero__title">Business Areas</h1>
            </div><img src="<?php echo get_template_directory_uri(); ?>./assets/images/interior.jpg" alt="undefined">
          </div>
          <?php

          if( have_posts() ):

            while( have_posts() ): the_post(); ?>

              <div class="content"><?php the_content(); ?></div>
            <?php endwhile;

          endif;

          ?>
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
            <ul class="swift-slide business-slide">
              <li class="business"><span class="business__label">Data Capture</span>
                <div class="business__details">
                  <h2>Data Capture</h2>
                  <h3>Header Lorem Ipsum Dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue.Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, condimentum justo arcu nec orci.</p>
                  <div class="h5">Interested in Data Capture?&nbsp;<a href="">Learn More.</a></div>
                </div>
              </li>
              <li class="business"><span class="business__label">Consumables</span>
                <div class="business__details">
                  <h2>Consumables</h2>
                  <h3>Header Lorem Ipsum Dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue.Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, condimentum justo arcu nec orci.</p>
                  <div class="h5">Interested in Consumables?&nbsp;<a href="">Learn More.</a></div>
                </div>
              </li>
              <li class="business"><span class="business__label">Supply Chain Architecture</span>
                <div class="business__details">
                  <h2>Supply Chain Architecture</h2>
                  <h3>Header Lorem Ipsum Dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue.Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, condimentum justo arcu nec orci.</p>
                  <div class="h5">Interested in Supply Chain Architecture?&nbsp;<a href="">Learn More.</a></div>
                </div>
              </li>
              <li class="business"><span class="business__label">RFID</span>
                <div class="business__details">
                  <h2>RFID</h2>
                  <h3>Header Lorem Ipsum Dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue.Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, condimentum justo arcu nec orci.</p>
                  <div class="h5">Interested in RFID?&nbsp;<a href="">Learn More.</a></div>
                </div>
              </li>
              <li class="business"><span class="business__label">Device Lifestyle Management</span>
                <div class="business__details">
                  <h2>Device Lifestyle Management</h2>
                  <h3>Header Lorem Ipsum Dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue.Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, condimentum justo arcu nec orci.</p>
                  <div class="h5">Interested in Device Lifestyle Management?&nbsp;<a href="">Learn More.</a></div>
                </div>
              </li>
              <li class="business"><span class="business__label">Software Services Group</span>
                <div class="business__details">
                  <h2>Software Services Group</h2>
                  <h3>Header Lorem Ipsum Dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue.Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, condimentum justo arcu nec orci.</p>
                  <div class="h5">Interested in Software Services Group?&nbsp;<a href="">Learn More.</a></div>
                </div>
              </li>
              <li class="business"><span class="business__label">Supply Chain Analytics</span>
                <div class="business__details">
                  <h2>Supply Chain Analytics</h2>
                  <h3>Header Lorem Ipsum Dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue.Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, condimentum justo arcu nec orci.</p>
                  <div class="h5">Interested in Supply Chain Analytics?&nbsp;<a href="">Learn More.</a></div>
                </div>
              </li>
              <li class="business"><span class="business__label">OnePay</span>
                <div class="business__details">
                  <h2>OnePay</h2>
                  <h3>Header Lorem Ipsum Dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue.Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, condimentum justo arcu nec orci.</p>
                  <div class="h5">Interested in OnePay?&nbsp;<a href="">Learn More.</a></div>
                </div>
              </li>
            </ul>
            <div class="flag">
              <h3>You Might Also Like...</h3>
            </div>
            <div class="grid">
              <div class="col-gamagori-4">
                <div class="callout callout--orange"><a href="" class="callout__details">
                    <h3 class="mini">Whitepapers</h3>
                    <h2 class="stay">Asset, Patient Tracking Technology Jockeys for Bottom-line Position.</h2></a>
                    <div class="callout__share">
                      <h3 class="mini"><span>Share +</span></h3>
                      <nav class="nav nav-social">
                        <ul>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-pinterest">
                                    <use xlink:href="#pinterest"></use>
                                  </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-google">
                                    <use xlink:href="#google"></use>
                                  </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-linkedin">
                                    <use xlink:href="#linkedin"></use>
                                  </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
                          <li><a href="" target="_blank"> <span class="bottle">
                                  <svg class="symbol symbol-twitter">
                                    <use xlink:href="#twitter"></use>
                                  </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-facebook">
                                    <use xlink:href="#facebook"></use>
                                  </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
                        </ul>
                      </nav>
                    </div>
                </div>
              </div>
              <div class="col-gamagori-4">
                <div class="callout callout--gray"><a href="" class="callout__details">
                    <h3 class="mini">Events</h3>
                    <h2 class="stay">Annual Barcoding, Inc. Executive Forum</h2>
                    <h2 class="stay">9.12.16</h2></a>
                    <div class="callout__share">
                      <h3 class="mini"><span>Share +</span></h3>
                      <nav class="nav nav-social">
                        <ul>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-pinterest">
                                    <use xlink:href="#pinterest"></use>
                                  </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-google">
                                    <use xlink:href="#google"></use>
                                  </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-linkedin">
                                    <use xlink:href="#linkedin"></use>
                                  </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
                          <li><a href="" target="_blank"> <span class="bottle">
                                  <svg class="symbol symbol-twitter">
                                    <use xlink:href="#twitter"></use>
                                  </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-facebook">
                                    <use xlink:href="#facebook"></use>
                                  </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
                        </ul>
                      </nav>
                    </div>
                </div>
              </div>
              <div class="col-gamagori-4">
                <div class="callout callout--blue"><a href="" class="callout__details">
                    <h3 class="mini">Events</h3>
                    <h2 class="stay">Annual Barcoding, Inc. Executive Forum</h2>
                    <h2 class="stay">9.12.16</h2></a>
                    <div class="callout__share">
                      <h3 class="mini"><span>Share +</span></h3>
                      <nav class="nav nav-social">
                        <ul>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-pinterest">
                                    <use xlink:href="#pinterest"></use>
                                  </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-google">
                                    <use xlink:href="#google"></use>
                                  </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-linkedin">
                                    <use xlink:href="#linkedin"></use>
                                  </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
                          <li><a href="" target="_blank"> <span class="bottle">
                                  <svg class="symbol symbol-twitter">
                                    <use xlink:href="#twitter"></use>
                                  </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-facebook">
                                    <use xlink:href="#facebook"></use>
                                  </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
                        </ul>
                      </nav>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>

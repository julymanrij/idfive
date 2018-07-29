<?php
/*
  Template Name: Kitchen sink
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
              <h1 class="hero__title">Kitchen Sink</h1>
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
            <h2>Section Header Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue. Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, id congue, sit amet faucibus ipsum <a href="">In Text Link</a> justo.</p>
            <div class="grid grid--40">
              <div class="col-wooser-6">
                <h2>Section Header Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue. Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, id condimentum justo arcu nec orci.</p>
              </div>
              <div class="col-wooser-6">
                <h2>Section Header Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue. Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, id condimentum justo arcu nec orci.</p>
              </div>
            </div>
            <hr>
            <h2>Example Accordion</h2>
            <div class="silk-harmonica silk-harmonica--condensed">
              <header role="tab" class="silk-harmonica__header">
                <h3>Lorem Ipsum Dolor</h3>
              </header>
              <article role="tabpanel" class="silk-harmonica__content">
                <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
              </article>
              <header role="tab" class="silk-harmonica__header">
                <h3>Lorem Ipsum Dolor</h3>
              </header>
              <article role="tabpanel" class="silk-harmonica__content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
              </article>
              <header role="tab" class="silk-harmonica__header">
                <h3>Lorem Ipsum Dolor</h3>
              </header>
              <article role="tabpanel" class="silk-harmonica__content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
              </article>
            </div>
            <h2>Section Header Title</h2>
            <h3>Header Lorem Ipsum Dolor</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam commodo lacus vitae malesuada congue. Morbi vehicula mi quis felis congue, sit amet faucibus ipsum vehicula. Suspendisse fringilla, risus id vehicula venenatis, velit velit tristique nulla, id congue, sit amet faucibus ipsum  condimentum justo.</p>
            <ul class="styled-list">
              <li>
                  <svg class="symbol symbol-arrow-right">
                    <use xlink:href="#arrow-right"></use>
                  </svg><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
              </li>
              <li>
                  <svg class="symbol symbol-arrow-right">
                    <use xlink:href="#arrow-right"></use>
                  </svg><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
              </li>
              <li>
                  <svg class="symbol symbol-arrow-right">
                    <use xlink:href="#arrow-right"></use>
                  </svg><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
              </li>
            </ul>
          </div>
        </div>
          <div class="hero hero--mask hero--empty">
            <div class="compartment">
              <h1 class="hero__title"></h1>
            </div><img src="<?php echo get_template_directory_uri(); ?>./assets/images/interior.jpg" alt="undefined">
          </div>
        <div class="section">
          <div class="compartment">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit interdum diam. Donec gravida nulla at.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, <a href="">In Text Link</a>. Donec gravida nulla at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit interdum. </p>
              <figure class="shifted-asset shifted-asset--right"><img src="<?php echo get_template_directory_uri(); ?>./assets/images/figure.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit.">
                <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit.</figcaption>
              </figure>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit interdum diam. Donec gravida nulla at.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit interdum diam. Donec gravida nulla at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit interdum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit interdum diam. Donec gravida nulla at.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit interdum diam. Donec gravida nulla at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elit mi,aliquam eget sem eu, hendrerit interdum diam. </p>
            <hr>
            <div class="clear">
                <figure class="shifted-asset shifted-asset--left"><img src="<?php echo get_template_directory_uri(); ?>./assets/images/circle.png" alt="">
                  <figcaption></figcaption>
                </figure>
              <div class="block-out">
                <blockquote>“Whether it’s modifying existing software or buying new hardware, the <strong>team at Barcoding, Inc. has my best interest at heart</strong>. They’ve learned my business and they’re willing to help me however they can.”
                  <cite>DONNA BECRAFT, CIO, Dunbar Armored</cite>
                </blockquote>
              </div>
            </div>
            <hr>
            <div class="silk-table">
              <table>
                <thead>
                  <tr>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Heading</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Lorem Ipsum</td>
                    <td>Lorem Ipsum</td>
                    <td>Lorem Ipsum</td>
                  </tr>
                  <tr>
                    <td>Lorem Ipsum</td>
                    <td>Lorem Ipsum</td>
                    <td>Lorem Ipsum</td>
                  </tr>
                  <tr>
                    <td>Lorem Ipsum</td>
                    <td>Lorem Ipsum</td>
                    <td>Lorem Ipsum</td>
                  </tr>
                  <tr>
                    <td>Lorem Ipsum</td>
                    <td>Lorem Ipsum</td>
                    <td>Lorem Ipsum</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <h2>Section Header Title</h2>
            <div class="silk-harmonica silk-harmonica--expanded">
              <header role="tab" class="silk-harmonica__header">
                <h3>Tab Title</h3>
              </header>
              <article role="tabpanel" class="silk-harmonica__content">
                <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
              </article>
              <header role="tab" class="silk-harmonica__header">
                <h3>Tab Title</h3>
              </header>
              <article role="tabpanel" class="silk-harmonica__content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
              </article>
              <header role="tab" class="silk-harmonica__header">
                <h3>Tab Title</h3>
              </header>
              <article role="tabpanel" class="silk-harmonica__content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
              </article>
            </div>
            <div class="grid grid--90">
              <div class="col-wooser-6"><img src="<?php echo get_template_directory_uri(); ?>./assets/images/figure.jpg" class="full-width titled-image">
                <h3>Header Lorem Ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam</p><a href="" class="button">Button</a>
              </div>
              <div class="col-wooser-6"><img src="<?php echo get_template_directory_uri(); ?>./assets/images/figure.jpg" class="full-width titled-image">
                <h3>Header Lorem Ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam</p><a href="" class="button">Button</a>
              </div>
            </div>
            <div class="grid grid--40">
              <div class="col-yatterman-4"><img src="<?php echo get_template_directory_uri(); ?>./assets/images/figure.jpg" class="full-width titled-image">
                <h3>Header Lorem Ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam</p>
              </div>
              <div class="col-yatterman-4"><img src="<?php echo get_template_directory_uri(); ?>./assets/images/figure.jpg" class="full-width titled-image">
                <h3>Header Lorem Ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam</p>
              </div>
              <div class="col-yatterman-4"><img src="<?php echo get_template_directory_uri(); ?>./assets/images/figure.jpg" class="full-width titled-image">
                <h3>Header Lorem Ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ligula dolor. Praesent semper ipsum eleifend leo fringilla auctor. Nam</p>
              </div>
            </div>
          </div>
        </div>
        <div class="callout--extreme">
          <h1>Cta Call out can go here lorem ipsum dolor</h1><a href="" class="button">Action</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>

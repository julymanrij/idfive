
<footer class="site__footer">
  <div class="lace clear"><a href="" class="site__logo">Barcoding</a>
    <?php wp_nav_menu(array('theme_location'=>'nav-social', 'container_class'=>'nav nav-social', 'menu_class'=>'', 'container'=>'nav')); ?>
  </div>
  <div class="sole clear">
    <div class="tread">
      <?php wp_nav_menu(array('theme_location'=>'secondary-main', 'container_class'=>'nav nav-secondary-main', 'menu_class'=>'', 'container'=>'nav')); ?>

    </div>
    <div class="tread">
      <?php wp_nav_menu(array('theme_location'=>'nav-action', 'container_class'=>'nav nav-bulleted nav-action', 'menu_class'=>'', 'container'=>'nav')); ?>
      <?php wp_nav_menu(array('theme_location'=>'nav-legal', 'container_class'=>'nav nav-bulleted nav-legal', 'menu_class'=>'', 'container'=>'nav')); ?>
    </div>
  </div>
</footer>
  <?php wp_footer(); ?>
  </body>
</html>

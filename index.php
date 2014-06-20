<?php get_header(); ?>
  <?php require_once( get_stylesheet_directory(). '/includes/home/home_carousel.php' ); ?>
  <?php require_once( get_stylesheet_directory(). '/includes/home/home_info_docencia.php' ); ?>
  <div class='fondo-blanco'>
    <div class='wrap'>
      <?php require_once( get_stylesheet_directory(). '/includes/home/home_events.php' ); ?>  
      <?php require_once( get_stylesheet_directory(). '/includes/home/home_news.php' ); ?>
    </div>
  </div>
  <?php require_once( get_stylesheet_directory(). '/includes/home/home_franja.php' ); ?>
  <div class='fondo-blanco'>
    <?php require_once( get_stylesheet_directory(). '/includes/home/home_news_per_career.php' ); ?>
    <?php require_once( get_stylesheet_directory(). '/includes/home/home_news_per_category.php' ); ?>  
  </div>
<?php get_footer() ?>
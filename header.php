<!DOCTYPE html>
 
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta charset="utf-8" />
  <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
  <?php   header("Cache-Control: max-age=86400"); ?>
  <style type="text/css" media="screen">
    @import url( <?php bloginfo('stylesheet_url'); ?> );
  </style>

  <?php $date = new DateTime(); ?>

  <link href='<?php bloginfo('template_directory') ?>/js/ead-bar/css/meta.min.css' rel='stylesheet' />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
  <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.js "></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/scrollspy.js"></script>  
</head>

<body data-spy="scroll" data-target="#menu-fixed">
  <div class='fondo-header'>

    <div class='wrap header cf'>
      <a class='inicio' href=' <?php echo home_url(); ?> '>
        <div class='logo'>
          <p class='logo-ead marca'>e[ad]</p>
        </div>
        <div class='logo'>
            <p class='logo-ead'>Escuela de Arquitectura y Diseño
            <span class='bajas'>Pontificia Universidad Católica de Valparaíso</span>
            </p>
        </div>
      </a>
      
        <?php
          wp_nav_menu( array(
              'menu'              => '',
              'theme_location'    => 'header',
              'depth'             => 3,
              'menu_class'      => 'dropdown',
              'container_class'      => 'navegacion cf oculto-sm oculto-xs',
              'menu_class'        => 'nav nav-pills',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          );
        ?>
      
    </div> <!-- fin wrap -->
  </div>  
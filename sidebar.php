<?php

  if (is_single()) {
    $tags = wp_get_post_tags($post->ID);
    $args=array('tag__in' => array($tags[0]->term_id,$tags[1]->term_id,$tags[2]->term_id ),'post__not_in' => array($post->ID),'posts_per_page'=>7,'caller_get_posts'=>1);
    $related_posts = new WP_Query($args);
  } else if (is_page( 'diseno-grafico' ) ) {
    $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(8), 'no_found_rows' => true, 'cache_results' => false));
  } else if (is_page( 'arquitectura' ) ) {
    $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(7), 'no_found_rows' => true, 'cache_results' => false));
  } else if (is_page( 'diseno-industrial' ) ) {
    $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(9), 'no_found_rows' => true, 'cache_results' => false));
  } else if (is_category()) {
    $category = get_category(get_query_var('cat'));
    $cat_id = $category->cat_ID;
    if (is_category( 'docencia' ) ) {
      $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(123), 'no_found_rows' => true, 'cache_results' => false));
    } else {
      $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array($cat_id), 'no_found_rows' => true, 'cache_results' => false));
    }

  }

  // Noticias
  $latest_cat_post = new WP_Query( array('posts_per_page' => 7, 'post__not_in' => array($post->ID), 'category__in' => array(1), 'no_found_rows' => true, 'cache_results' => false));
?>

<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
  <div class='aside'>
    <div class='bloque-aside'><h5 class='negro'>Enlaces</h5><hr></div>
    <?php if ($related_posts && $related_posts->have_posts()) { ?>
      <div class='bloque-aside sm'>
        <h6 class='gris'><i class="icn icn-enlace-hor icn-md"></i> Articulos Relacionados </h6>
        <ul class='publicaciones-enlazadas'>
          <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; wp_reset_query(); ?>
        </ul>
        <hr>
      </div>
    <?php } ?> 

    <div class='bloque-aside sm'>
      <h6 class='gris'><i class="icn icn-noticias icn-md"></i> más noticias</h6>
      <ul class='publicaciones-enlazadas'>
        <?php if ( $latest_cat_post->have_posts() ) { ?>
          <?php while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post(); ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; } wp_reset_query(); ?>
      </ul>
      <hr>
    </div>
    <div class='bloque-aside oculto-sm oculto-xs'>
      <h6 class='naranja-opuesto'><i class="icn icn-twitter icn-lg"></i> @eadpucv</h6>
      <a class="twitter-timeline"  href="https://twitter.com/eadpucv"  data-widget-id="451107933158244352">Tweets por @eadpucv</a>
      <script type="text/javascript">
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
      </script>
    </div>
    <div class='bloque-aside'>
      <h5 class='fino'><i class="icn icn-vinculo icn-md"></i> Comparte esta publicación</h5>
        <a class='red-social' href='#'>
          <span class="icn-stack icn-md">
            <i class="icn icn-cuadro icn-stack-2x naranja-opuesto"></i>
            <i class="icn icn-twitter icn-stack-1x icn-inverse"></i>
          </span>
        </a>
        <a class='red-social' href='#'>
          <span class="icn-stack icn-md">
            <i class="icn icn-cuadro icn-stack-2x damasco-opuesto"></i>
            <i class="icn icn-facebook icn-stack-1x icn-inverse"></i>
          </span>
        </a>
        <a class='red-social' href='#'>
          <span class="icn-stack icn-md">
            <i class="icn icn-cuadro icn-stack-2x rojo-claro"></i>
            <i class="icn icn-enlace icn-stack-1x icn-inverse"></i>
          </span>
        </a>
        <a class='red-social' href='#'>
          <span class="icn-stack icn-md">
            <i class="icn icn-cuadro icn-stack-2x naranja"></i>
            <i class="icn icn-rss icn-stack-1x icn-inverse"></i>
          </span>
        </a>
    </div>
  </div>
</div>
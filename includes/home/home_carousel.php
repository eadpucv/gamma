<?php 
  // ultimo posts de "Carrusel"
  $cat_id = 1915; 
  $i = 0;
  $carrusel_posts = new WP_Query( array('posts_per_page' => 5, 'category__in' => array($cat_id)));
?>  
<div class='alto-lg'>
  <div data-ride="carousel" class="carousel slide" id="carousel-example-generic"> 
    <ol class="carousel-indicators"> 
      <?php if( $carrusel_posts->have_posts() ) : while( $carrusel_posts->have_posts() ) : $carrusel_posts->the_post(); ?>        
        <li data-slide-to="<?php echo $i; ?>" data-target="#carousel-example-generic" <?php if ($i===0) { ?> class="active"<?php } ?>></li> 
        <?php $i++; ?>
      <?php endwhile; endif; ?>   
    </ol> 

    <div class="carousel-inner"> 
      <?php $i=0; ?>
      <?php if( $carrusel_posts->have_posts() ) : while( $carrusel_posts->have_posts() ) : $carrusel_posts->the_post(); ?>        
        <div class="item <?php if ($i == 0){ echo ' active '; $i=1; }?> imagen-carousel">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
          if ($image) : ?>
              <img src="<?php echo $image[0]; ?>" alt="" class="altura-maxima img_carrusel" />
          <?php endif; ?> 

          <div class='pie-de-foto'> 
            <p class='centrado'><i class="icn icn-noticias icn-lg"></i><?php the_title(); ?></p> 
          </div> 
          <div class='wrap-carousel'> 
            <div class='col-lg-3 oculto-sm oculto-xs cita-carousel'> 
              <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1> </a>
              <p><?php echo the_excerpt_max_charlength(250); ?></p>
              <span class='derecha'> <?php the_author(); ?> </span>
            </div>
          </div> 
        </div>
      <?php endwhile; endif; ?>     
    </div>
  </div>
</div> 
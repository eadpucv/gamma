<?php 
  // ultimo posts de "Informacion de Docencia"
  $cat_id = 1915; 
  $carrusel_posts = new WP_Query( array('posts_per_page' => 5, 'category__in' => array($cat_id)));
?>  
<div class='alto-lg'>
  <div data-ride="carousel" class="carousel slide" id="carousel-example-generic"> 
    <ol class="carousel-indicators"> 
      <li data-slide-to="0" data-target="#carousel-example-generic" class="active"></li> 
      <li data-slide-to="1" data-target="#carousel-example-generic"></li>  
    </ol> 
 
<div class='alto-lg'>
  <div data-ride="carousel" class="carousel slide" id="carousel-example-generic"> 
    <ol class="carousel-indicators"> 
      <li data-slide-to="0" data-target="#carousel-example-generic" class="active"></li> 
      <li data-slide-to="1" data-target="#carousel-example-generic"></li> 
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
              <h1><?php the_title(); ?></h1> 
              <?php the_excerpt() ?>
              <span class='derecha'> Francesca Cambiaso </span>
            </div>
          </div> 
        </div>
      <?php endwhile; endif; ?>     
    </div>
  </div>
</div> 
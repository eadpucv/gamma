<?php 
  // ultimo posts de "Carrusel"

global $post;
$args = array( 'numberposts' => 6, 'category_name' => 'carrusel', 'no_found_rows' => true, 'cache_results' => false  );
$posts = get_posts( $args );
$i = 0;
?>

<div class='alto-lg'>
  <div data-ride="carousel" class="carousel slide" id="carousel-example-generic"> 
    <ol class="carousel-indicators"> 
      <?php foreach( $posts as $post ): setup_postdata($post);  ?>
        <li data-slide-to="<?php echo $i; ?>" data-target="#carousel-example-generic" <?php if ($i===0) { ?> class="active"<?php } ?>></li> 
        <?php $i++; ?>
      <?php endforeach;  ?>
    </ol> 

    <div class="carousel-inner"> 
      <?php $i=0; ?>
      <?php foreach( $posts as $post ): setup_postdata($post);  ?>
        <div class="item <?php if ($i == 0){ echo ' active '; $i=1; }?> imagen-carousel">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); 
          if ($image) : ?>
              <img src="<?php echo $image[0]; ?>" alt="" class="altura-maxima img_carrusel" />
          <?php endif; ?> 

          <div class='pie-de-foto'> 
            <p class='centrado'><i class="icn icn-noticias-lig icn-lg"></i><?php the_title(); ?></p> 
          </div> 
          <div class='wrap-carousel'> 
            <div class='col-lg-3 oculto-sm oculto-xs cita-carousel'> 
              <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1> </a>
              <p><?php echo the_excerpt_max_charlength(250); ?></p>
              <span class='derecha'> <?php the_author(); ?> </span>
            </div>
          </div> 
        </div>
      <?php endforeach;  ?>     
    </div>
  </div>
</div> 
<?php wp_reset_query(); ?>
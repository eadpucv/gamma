<?php 
  // ultimo posts de "Informacion de Docencia"
  $cat_id = 123; 
  $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
?>
<div class='wrap'>
  <div class='fila'>
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 alto-xs'>
      <?php if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post(); ?>        
      <?php $content = apply_filters('the_content', $post->post_content);  ?>
        <div class='pagina info-docencia xs'>
          <a href='<?php the_permalink() ?>'>
            <div class='referencia-cita'>
              <div class='icono-info'>
                <i class="izquierda gris icn icn-anuncio icn-lg"></i>
              </div>
              <h6><?php the_title(); ?></h6>
              <aside class='entry-details negro'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
            </div>
            <p class='cita'><?php echo get_the_excerpt() ?></p>
          </a>
        </div>
      <?php endwhile; endif; ?>      
    </div>
  </div>
</div>
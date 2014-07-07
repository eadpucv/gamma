<?php 
  // noticia más reciente"
  $cat_id = 1; 
  $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
?>
<div class='seccion'>
  <h5><i class="icn icn-noticias icn-md"></i> Noticias </h5>
</div>
<div class='fila'> <!-- sección noticias inferior -->
  <?php if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post(); ?>        
    <div class='col-lg-3 col-md-8 col-sm-6 col-xs-12 alto-md primera-noticia'> <!-- noticia 1 -->
      <a href='<?php the_permalink() ?>' class='enlace-noticia primera'>
          <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
          <div class='seguir-leyendo-cuadro'>
          <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
          </div>
          <div class='prev-imagen sm primera'>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
            if ($image) : ?>
            <img src="<?php echo $image[0]; ?>" alt="" class="ancho-maximo" />
            <?php endif; ?> 
          </div>
          <h6><?php the_title(); ?></h6>
          <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
          <p class='extracto-primera-noticia'><?php echo get_the_excerpt(); ?></p>
      </a>
    </div>
  <?php endwhile; endif; ?>
<?php 
  // 7 noticias más"
  $cat_id = 1; 
  $latest_cat_post = new WP_Query( array('posts_per_page' => 7, 'offset' => 1, 'category__in' => array($cat_id)));
?>
  <?php if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post(); ?>        
    <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 alto-md'> <!-- noticia 1 -->
      <a href='<?php the_permalink() ?>' class='enlace-noticia'>
          <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
          <div class='seguir-leyendo-cuadro'>
          <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
          </div>
          <div class='prev-imagen sm'>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
            if ($image) : ?>
            <img src="<?php echo $image[0]; ?>" alt="" class="ancho-maximo" />
            <?php endif; ?> 
          </div>
          <h6><?php the_title(); ?></h6>
          <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
          <?php the_excerpt() ?>
      </a>
    </div>
  <?php endwhile; endif; ?>
</div> <!-- fin sección noticias inferior -->
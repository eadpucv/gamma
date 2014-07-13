<div class='seccion'>
  <a href='<?php echo get_category_link(1); ?>'><h5><i class="icn icn-noticias icn-md"></i> Noticias</h5></a>
</div>
<div class='fila'> <!-- sección noticias inferior -->
<?php 
  // 7 noticias"
  $cat_id = 1; 
  $latest_cat_post = new WP_Query( array('posts_per_page' => 8, 'category__in' => array($cat_id)));
?>
  <?php if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post(); ?>        
    <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 alto-md'> <!-- noticia 1 -->
      <a href='<?php the_permalink() ?>' class='enlace-noticia'>
        <div class='pagina md'>
          <div class='franja-seguir'>
            <p>seguir leyendo +</p>
          </div>
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
          <p><?php echo the_excerpt_max_charlength(150); ?></p>
        </div>
      </a>
    </div>
  <?php endwhile; endif; ?>
  <div class='oculto-lg col-md-4 oculto-sm oculto-xs alto-md'>
    <a class="twitter-timeline"  href="https://twitter.com/eadpucv"  data-widget-id="451107933158244352">Tweets por @eadpucv</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div> <!-- fin sección noticias inferior -->
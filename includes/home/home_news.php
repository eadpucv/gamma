<?php 
  // ultimo posts de "Informacion de Docencia"
  $cat_id = 1; 
  $latest_cat_post = new WP_Query( array('posts_per_page' => 7, 'category__in' => array($cat_id)));
?>
<div class='seccion'>
  <h5><i class="icn icn-noticias icn-md"></i> Noticias </h5>
</div>
<div class='fila'> <!-- sección noticias inferior -->
  <?php if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post(); ?>        
    <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 alto-md'> <!-- noticia 1 -->
      <a href='<?php the_permalink() ?>' class='enlace-noticia'>
          <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
          <div class='seguir-leyendo-cuadro'>
          <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
          </div>
          <div class='prev-imagen sm'>
            <?php the_post_thumbnail( 'medium', array( 'class' => "ancho-maximo") ); ?>
          </div>
          <h6><?php the_title(); ?></h6>
          <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
          <?php the_excerpt() ?>
      </a>
    </div>
  <?php endwhile; endif; ?>
  <div class='col-lg-3 oculto-md oculto-sm oculto-xs alto-md'>
    <a class="twitter-timeline"  href="https://twitter.com/eadpucv"  data-widget-id="451107933158244352">Tweets por @eadpucv</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div> <!-- fin sección noticias inferior -->
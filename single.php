<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>

  <div class='fondo-gris'>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class='prev-imagen franja'>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
        if ($image) : ?>
          <img src="<?php echo $image[0]; ?>" alt="" class="centrado-vertical" />
        <?php endif; ?>                 
    </div>
  <?php } ?>
  <div class='wrap'>
    <div class='contenedor-sin-relleno oculto-xs'>
      <?php the_breadcrumb(); ?>
    </div>
    <h1 class="entry-title especifico"><?php the_title(); ?></h1> <!-- título del post -->
    <aside class='entry-details'>
      <span class='categorias'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?> por <?php the_author(); ?></span><br>
      <span class='categorias'>Archivado en: <?php the_category(', ') ?></span><br>
      <span class='categorias'><?php the_tags(__('Palabras claves: '), ', ', ' ') ?></span>
      <div class='derecha botones-auxiliares'>
        <?php echo edit_post_link("<span>Editar</span><i class='icn icn-lapiz icn-md'></i>","",""); ?>
      </div>
      <div class='derecha botones-auxiliares'>
        <a class='btn btn-md ver-todo botones-post' data-toggle="modal" data-target="#compartir"><span>Compartir</span> <i class="icn icn-vinculo icn-md"></i></a> 
      </div>
    </aside>
  </div>
</div>

<div class='fondo-gris'>
  <div class='wrap'>
    <div class='fila'>
      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <article class="h-entry">
            <div class="e-content p-summary p-name">
              <div class='bloque'><?php the_content();  ?></div>
            </div>
          </article> 
            <div class='bloque-aside noticia comparte'>
              <div class="e-content p-summary p-name">
                <div class='bloque'>
                <h5 class='fino rotulo-compartir'><i class="icn icn-vinculo icn-md"></i> Comparte esta publicación</h5>
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
      </div>
    </div>
  </div> <!-- fin wrap -->
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
  <div class='wrap'>
    <div class='fila'>
      <div class="e-content p-summary p-name">
        <div class='bloque'>
            <?php

      if (is_single()) {
        $tags = wp_get_post_tags($post->ID);
        $args=array('tag__in' => array($tags[0]->term_id,$tags[1]->term_id,$tags[2]->term_id ),'post__not_in' => array($post->ID),'posts_per_page'=>7,'caller_get_posts'=>1);
        $related_posts = new WP_Query($args);
      } else if (is_page( 'diseno-grafico' ) ) {
        $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(8)));
      } else if (is_page( 'arquitectura' ) ) {
        $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(7)));
      } else if (is_page( 'diseno-industrial' ) ) {
        $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(9)));
      } else if (is_category()) {
        $category = get_category(get_query_var('cat'));
        $cat_id = $category->cat_ID;
        if (is_category( 'docencia' ) ) {
          $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(123)));
        } else {
          $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array($cat_id)));
        }

      }

      // Noticias
      $latest_cat_post = new WP_Query( array('posts_per_page' => 7, 'post__not_in' => array($post->ID), 'category__in' => array(1)));
    ?>

        <?php if ($related_posts && $related_posts->have_posts()) { ?>
          <div class='bloque-aside noticia'>
            <h6 class='gris'><i class="icn icn-enlace-hor icn-md"></i> Articulos relacionados </h6>
            <ul class='publicaciones-enlazadas'>
              <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; wp_reset_query(); ?>
            </ul>
          </div>
        <?php } ?>
        <div class='bloque-aside noticia'>
          <h6 class='gris'><i class="icn icn-noticias icn-md"></i> Más noticias</h6>
          <ul class='publicaciones-enlazadas'>
            <?php if ( $latest_cat_post->have_posts() ) { ?>
              <?php while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post(); ?>
                <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; } wp_reset_query(); ?>
          </ul>
          </div>
        </div>
      </div>
    </div> 
  </div>
    </div>
</div>

<div id="compartir" class="modal fade" style="display: none;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="myModalLabel" class="modal-title">Compartir en redes sociales</h4>
      </div>
      <div class="modal-body centrado">
        <a class='red-social' href='#'>
          <span class="icn-stack icn-lg">
            <i class="icn icn-cuadro icn-stack-2x naranja-opuesto"></i>
            <i class="icn icn-twitter icn-stack-1x icn-inverse"></i>
          </span>
        </a>
        <a class='red-social' href='#'>
          <span class="icn-stack icn-lg">
            <i class="icn icn-cuadro icn-stack-2x damasco-opuesto"></i>
            <i class="icn icn-facebook icn-stack-1x icn-inverse"></i>
          </span>
        </a>
        <a class='red-social' href='#'>
          <span class="icn-stack icn-lg">
            <i class="icn icn-cuadro icn-stack-2x rojo-claro"></i>
            <i class="icn icn-enlace icn-stack-1x icn-inverse"></i>
          </span>
        </a>
        <a class='red-social' href='#'>
          <span class="icn-stack icn-lg">
            <i class="icn icn-cuadro icn-stack-2x naranja"></i>
            <i class="icn icn-rss icn-stack-1x icn-inverse"></i>
          </span>
        </a>
      </div>
      <div class="modal-footer">
        <a class="btn btn-default btn-sm" type="button" data-dismiss="modal">Cerrar ventana</a>
      </div>
    </div>
  </div>
</div> <!-- modal compartir social media -->

<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php comments_template( '/comments.php' ); ?> 
<?php get_footer(); ?>
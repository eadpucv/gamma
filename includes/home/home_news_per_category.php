<?php 
  // ultimo posts de "Informacion de Docencia"
  $cat_archivo = 40;
  $cat_ciudad_territorio = 714; 
  $cat_nautico_maritimo = 35;
  $cat_trabajos = 15;
  $cat_observacion = 157;
  $cat_investigacion = 11;

  $latest_archivo = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_archivo), 'no_found_rows' => true, 'cache_results' => false ));
  $latest_ciudad_territorio = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_ciudad_territorio), 'no_found_rows' => true, 'cache_results' => false ));
  $latest_nautico_maritimo = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_nautico_maritimo), 'no_found_rows' => true, 'cache_results' => false ));
  $latest_trabajos = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_trabajos), 'no_found_rows' => true, 'cache_results' => false ));  
  $latest_obs = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_observacion), 'no_found_rows' => true, 'cache_results' => false ));    
  $latest_investigacion = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_investigacion), 'no_found_rows' => true, 'cache_results' => false ));      
?>
  <div class='wrap'>
    <div class='seccion'>
      <h5><i class="icn icn-lapiz icn-md"></i> Publicaciones</h5>
    </div>
    <div class='fila'>
      <?php if( $latest_archivo->have_posts() ) : while( $latest_archivo->have_posts() ) : $latest_archivo->the_post(); ?>
      <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 alto-categoria'>
        <a href='<?php echo get_category_link(40); ?>'><h6 class='categoria-publicacion'> archivo histórico josé vial armstrong</h6></a>
          <a href='<?php the_permalink() ?>' class='bloque-enlace categoria'>
            <div class='pagina categoria'>
              <h5 class='rojo-claro'><?php the_title(); ?></h5>
              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
              <p><?php echo the_excerpt_max_charlength(250); ?></p>
            </div>
          </a>
        <?php endwhile; endif; ?>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 alto-categoria'>
          <a href='<?php echo get_category_link(714); ?>'><h6 class='categoria-publicacion'>magíster ciudad y territorio</h6></a>
        <?php if( $latest_ciudad_territorio->have_posts() ) : while( $latest_ciudad_territorio->have_posts() ) : $latest_ciudad_territorio->the_post(); ?>
          <a href='<?php the_permalink() ?>' class='bloque-enlace categoria'>
            <div class='pagina categoria'>
              <h5 class='rojo-claro'><?php the_title(); ?></h5>
              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
              <p><?php echo the_excerpt_max_charlength(250); ?></p>
            </div>
          </a>
        <?php endwhile; endif; ?>   
      </div>
      <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 alto-categoria'>
        <a href='<?php echo get_category_link(35); ?>'><h6 class='categoria-publicacion'>magíster náutico y marítimo</h6></a>
        <?php if( $latest_nautico_maritimo->have_posts() ) : while( $latest_nautico_maritimo->have_posts() ) : $latest_nautico_maritimo->the_post(); ?>
          <a href='<?php the_permalink() ?>' class='bloque-enlace categoria'>
            <div class='pagina categoria'>
              <h5 class='rojo-claro'><?php the_title(); ?></h5>
              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
              <p><?php echo the_excerpt_max_charlength(250); ?></p>
            </div>
          </a>
        <?php endwhile; endif; ?>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 alto-categoria'>
          <a href='<?php echo get_category_link(15); ?>'><h6 class='categoria-publicacion'>bolsa de trabajo</h6></a>
        <?php if( $latest_trabajos->have_posts() ) : while( $latest_trabajos->have_posts() ) : $latest_trabajos->the_post(); ?>        
          <a href='<?php the_permalink() ?>' class='bloque-enlace categoria'>
            <div class='pagina categoria'>
              <h5 class='rojo-claro'><?php the_title(); ?></h5>
              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
              <p><?php echo the_excerpt_max_charlength(250); ?></p>
            </div>
          </a>
        <?php endwhile; endif; ?>
      </div>
      <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 alto-categoria'>
        <a href='<?php echo get_category_link(157); ?>'><h6 class='categoria-publicacion'>observación de la semana</h6></a>
        <?php if( $latest_obs->have_posts() ) : while( $latest_obs->have_posts() ) : $latest_obs->the_post(); ?>        
          <a href='<?php the_permalink() ?>' class='bloque-enlace categoria'>
            <div class='pagina categoria'>
              <h5 class='rojo-claro'><?php the_title(); ?></h5>
              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
              <p><?php echo the_excerpt_max_charlength(250); ?></p>
            </div>
          </a>
        <?php endwhile; endif; ?>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 alto-categoria'>
          <a href='<?php echo get_category_link(11); ?>'><h6 class='categoria-publicacion'>Investigación</h6></a>
        <?php if( $latest_investigacion->have_posts() ) : while( $latest_investigacion->have_posts() ) : $latest_investigacion->the_post(); ?>        
          <a href='<?php the_permalink() ?>' class='bloque-enlace categoria'>
            <div class='pagina categoria'>
              <h5 class='rojo-claro'><?php the_title(); ?></h5>
              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
              <p><?php echo the_excerpt_max_charlength(250); ?></p>
            </div>
          </a>
        <?php endwhile; endif; ?>
      </div>      
    </div>
  </div> <!-- wrap -->
  <?php wp_reset_query(); ?>

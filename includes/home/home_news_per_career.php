<?php 
  // ultimo posts de "Informacion de Docencia"
  $cat_arquitectura = 7;
  $cat_diseno_grafico = 8; 
  $cat_diseno_industrial = 9;

  $latest_dg = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_diseno_grafico),'no_found_rows' => true, 'cache_results' => false ));
  $latest_di = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_diseno_industrial), 'no_found_rows' => true, 'cache_results' => false ));
  $latest_ar = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_arquitectura), 'no_found_rows' => true, 'cache_results' => false ));
?>
  <div class='wrap-ancho-maximo'>
    <div class='col-lg-12'>
      <div class='fila'>
        <div class='seccion'>
          <h5><i class="icn icn-noticias icn-lg"></i> noticias por carrera</h5>
        </div>
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 alto-md'>
          <a href='<?php the_permalink() ?>'> 
          <?php if( $latest_ar->have_posts() ) : while( $latest_ar->have_posts() ) : $latest_ar->the_post(); ?>
            <div class='bloque-enlace oficio'>
              <div class='franja-seguir fija'>
                <p>seguir leyendo +</p>
              </div>
              <div class='prev-imagen md'><?php the_post_thumbnail( 'medium', $attr ); ?></div>
              <div class='seguir-leyendo-cuadro'>
                <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
              </div>
              <a href='<?php echo get_category_link(7); ?>'><h6>| arquitectura</h6></a>
              <div class='pagina md carrera'>
                <h3 class='blanco'><?php the_title(); ?></h3>
                <aside class='blanco entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                <p class='blanco'><?php echo the_excerpt_max_charlength(350); ?></p>
              </div>
               <a href='<?php echo get_category_link(7); ?>' class='btn btn-md derecha ver-todo noticias-por-carrera gris-oscuro'>Ver todas<i class="icn icn-flecha-der icn-sm input"></i></a>
            </div>
          <?php endwhile; endif; ?>
          </a>        
        </div>
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 alto-md'>
          <a href='<?php the_permalink() ?>'>
          <?php if( $latest_dg->have_posts() ) : while( $latest_dg->have_posts() ) : $latest_dg->the_post(); ?>                  
            <div class='bloque-enlace oficio'>
              <div class='franja-seguir fija'>
                <p>seguir leyendo +</p>
              </div>
              <div class='prev-imagen md'><?php the_post_thumbnail( 'medium', $attr ); ?></div>
              <div class='seguir-leyendo-cuadro'>
                <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
              </div>
              <a href='<?php echo get_category_link(8); ?>'><h6>| diseño gráfico</h6></a>
              <div class='pagina md carrera'>
                <h3 class='blanco'><?php the_title(); ?></h3>
                <aside class='blanco entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                <p class='blanco'><?php echo the_excerpt_max_charlength(350); ?></p>
              </div>
              <a href='<?php echo get_category_link(8); ?>' class='btn btn-md derecha ver-todo noticias-por-carrera gris-oscuro'>Ver todas<i class="icn icn-flecha-der icn-sm input"></i></a>
            </div>
          <?php endwhile; endif; ?>    
          </a>      
        </div>
        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 alto-md'>
          <a href='<?php the_permalink() ?>'>
          <?php if( $latest_di->have_posts() ) : while( $latest_di->have_posts() ) : $latest_di->the_post(); ?>                                         
            <div class='bloque-enlace oficio'>
              <div class='franja-seguir fija'>
                <p>seguir leyendo +</p>
              </div>
              <div class='prev-imagen md'><?php the_post_thumbnail( 'medium', $attr ); ?></div>
              <div class='seguir-leyendo-cuadro'>
                <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
              </div>
              <a href='<?php echo get_category_link(9); ?>'><h6>| diseño industrial</h6></a>
              <div class='pagina md carrera'>
                <h3 class='blanco'><?php the_title(); ?></h3>
                <aside class='blanco entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                <p class='blanco'><?php echo the_excerpt_max_charlength(350); ?></p>
              </div>
              <a href='<?php echo get_category_link(9); ?>' class='btn btn-md derecha ver-todo noticias-por-carrera gris-oscuro'>Ver todas<i class="icn icn-flecha-der icn-sm input"></i></a>
            </div>
          <?php endwhile; endif; ?>  
          </a>                  
        </div>
      </div>
    </div>
  </div>
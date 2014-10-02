<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>
<?php 
  $cat_estudios_avanzados = 1953; // categoría genérica de estudios avanzados
  $cat_tesis_nautico_maritimo = 1950; //CATEGORÍA DE TÉSIS

  $latest_estudios_avanzados = new WP_Query( array('posts_per_page' => 6, 'category__in' => array($cat_estudios_avanzados)));
  $latest_tesis_nautico_maritimo  = new WP_Query( array('posts_per_page' => 6, 'category__in' => array($cat_tesis_nautico_maritimo))); //CATEGORÍA DE TÉSIS
?>
<div class='fondo-gris'>
  <div class='wrap'>
    <h1 class="entry-title especifico"><?php the_title(); ?></h1> <!-- título del post -->
  </div>
</div>

<div class='fondo-gris'>
  <div class='wrap'>
    <div class='fila'>
      <div class='col-lg-12 col-md-12 col-sm-12'>
        <div class='fila'>
          <div class='col-lg-3 col-md-3 oculto-sm oculto-xs'>
            <div class='menu-affix' id='menu-fixed'>
              <div id='nav-page'>
                <ul class="nav" id="title_list"></ul>
              </div>
            </div>
          </div>
          <div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
            <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
              <div class="carousel-inner">
                <div class="item active">
                  <div class='noticia grande'>
                    <div class='noticia-imagen'>
                      <img alt="First slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-3.jpg'>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class='noticia grande'>
                    <div class='noticia-imagen'>
                      <img alt="third slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-6.jpg'>
                    </div>
                  </div>
                </div>  <!-- fin de item -->
                <div class="item">
                  <div class='noticia grande'>
                    <div class='noticia-imagen'>
                      <img alt="third slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-4.jpg'>
                    </div>
                  </div>
                </div>  <!-- fin de item -->
                <div class="item">
                  <div class='noticia grande'>
                    <div class='noticia-imagen'>
                      <img alt="third slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-5.jpg'>
                    </div>
                  </div>
                </div>  <!-- fin de item -->
                <div class="item">
                  <div class='noticia grande'>
                    <div class='noticia-imagen'>
                      <img alt="third slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-1.jpg '>
                    </div>
                  </div>
                </div>  <!-- fin de item -->
              </div>
              <!-- Controles -->
              <a data-slide="prev" href="#carousel-example-generic" class="left carrera carousel-control"><i class="icn icn-nav-izq"></i></a>
              <a data-slide="next" href="#carousel-example-generic" class="right carrera carousel-control"><i class="icn icn-nav-der"></i></a>
            </div>
            <div class='bloque'>
              <article class="h-entry enunciado">
                <div class="e-content p-summary p-name carrera">
                  <div class='bloque' id="bloque_texto">
                    <?php the_content(); ?>
                    <h2>Proyecto de tésis recientes</h2>
                    <div class='fila'>
                        <?php if( $latest_tesis_nautico_maritimo->have_posts() ) : while( $latest_tesis_nautico_maritimo->have_posts() ) : $latest_tesis_nautico_maritimo->the_post(); ?>
                      <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 5 --> <!-- <h5><a href='<?php echo get_category_link(35); ?>' class='categoria-titulo noticias'>Magister Náutico y Marítimo</a></h5>-->
                        <a href='<?php the_permalink() ?>' class='bloque-enlace portada magister'>
                          <div class='franja-seguir fija'>
                            <p>seguir leyendo <i class='icn icn-lentes-lig icn-md'></i></p>
                          </div>
                          <div class='seguir-leyendo-cuadro'>
                            <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
                          </div>
                          <div class='prev-imagen sm'>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); 
                              if ($image) : ?>
                                <img src="<?php echo $image[0]; ?>" alt="" class="ancho-maximo" />
                            <?php endif; ?> 
                          </div>
                          <h6 class='h-sin-margen'><?php the_title(); ?></h6>
                          <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                          <p class='rojo-claro'><?php the_excerpt(); ?></p>
                        </a>
                      </div><!-- fin reciente nautico y maritimo -->
                      <?php endwhile; endif; ?>
                    </div>
                      
                    <h2>Publicaciones recientes</h2>
                    <div class='fila'>
                      <?php if( $latest_estudios_avanzados->have_posts() ) : while( $latest_estudios_avanzados->have_posts() ) : $latest_estudios_avanzados->the_post(); ?>
                        <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 5 --> <!-- <h5><a href='<?php echo get_category_link(35); ?>' class='categoria-titulo noticias'>Magister Náutico y Marítimo</a></h5>-->
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada magister'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-lentes-lig icn-md'></i></p>
                            </div>
                            <div class='seguir-leyendo-cuadro'>
                              <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
                            </div>
                            <div class='prev-imagen sm'>
                              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); 
                                if ($image) : ?>
                                  <img src="<?php echo $image[0]; ?>" alt="" class="ancho-maximo" />
                              <?php endif; ?> 
                            </div>
                            <h6 class='h-sin-margen'><?php the_title(); ?></h6>
                            <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                            <?php the_excerpt(); ?>
                          </a>
                        </div>
                      <?php endwhile; endif; ?>
                    </div>
                  </div> 
                </div>
              </article> 
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>  
</div>
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<script>
  // busco todos los titulos dentro de #bloque_texto
  $( "#bloque_texto" ).find( "h3:not(:has(*)),h2:not(:has(*))" ).each(function() {
      id = "title_"+randomNumberRange(1111, 9999);
      $(this).addClass("rojo-claro");
      $(this).attr("id",id);
      $("#title_list").append("<li><a class='ancla-fixed sin-aside' data-scroll href='#"+id+"'>"+$(this).html()+"</a></li>")
  });

  function randomNumberRange(min, max)
  {
    return Math.floor(Math.random() * (max - min + 1) + min);
  }
  $('.enunciado').scrollspy({ target: '#menu-fixed' })
</script>

<?php get_footer(); ?>
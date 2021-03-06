<?php 
  // ultimo posts de "Informacion de Docencia"
  $cat_arquitectura = 7;
  $cat_diseno = 8; 
  $cat_industrial = 9; 
  $cat_archivo = 40;
  $cat_estudios_avanzados = 1953;
  $cat_concursos = 1067; 
  $cat_observacion = 157;
  $cat_investigacion = 11;
  $cat_trabajos = 15;
  $cat_actualidad = 1945;
  $cat_carreras = 34;
  $cat_estudiantes = 63;


  $latest_archivo = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_archivo)));
  $latest_concursos = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_concursos)));
  $latest_estudios_avanzados = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_estudios_avanzados)));
  $latest_trabajos = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_trabajos)));  
  $latest_investigacion = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_investigacion)));      
  $latest_arquitectura = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_arquitectura)));  
  $latest_diseno = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_diseno)));    
  $latest_industrial = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_industrial)));        
  $latest_obs = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_observacion)));     
  $latest_actualidad = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_actualidad)));
  $latest_carreras = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_carreras)));
  $latest_estudiantes = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_estudiantes)));       
?>
<?php get_header(); ?>

<div class='fondo-gris'>
  <div class='wrap'>
    <h1 class="entry-title especifico"><i class="icn icn-noticias-lig icn-md"></i> Portada de noticias</h1> <!-- título del post -->
    <div class='contenedor-sin-relleno oculto-xs'>
      <?php the_breadcrumb(); ?>
    </div>
  </div>
</div>
<!-- contenido -->
<div class='fondo-gris'>
    <div class='wrap'>
        <div class='fila'>
			<div class='col-lg-9 col-md-12 col-sm-12 col-xs-12'>
                <div class='bloque'>
                    <div class='fila'>
                          <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'>
                            <h5><a href='<?php echo get_category_link(1945); ?>' class='categoria-titulo noticias'>Actualidad</a></h5>
                            <?php if( $latest_actualidad->have_posts() ) : while( $latest_actualidad->have_posts() ) : $latest_actualidad->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div>
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 8 -->
                            <h5><a href='<?php echo get_category_link(63); ?>' class='categoria-titulo noticias'>Estudiantes</a></h5>
                            <?php if( $latest_estudiantes->have_posts() ) : while( $latest_estudiantes->have_posts() ) : $latest_estudiantes->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div><!-- fin noticia 9 -->
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 8 -->
                            <h5><a href='<?php echo get_category_link(15); ?>' class='categoria-titulo noticias'>Carreras</a></h5>
                            <?php if( $latest_carreras->have_posts() ) : while( $latest_carreras->have_posts() ) : $latest_carreras->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div><!-- fin noticia 9 -->
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 1 -->
                            <?php if( $latest_arquitectura->have_posts() ) : while( $latest_arquitectura->have_posts() ) : $latest_arquitectura->the_post(); ?>
                            <h5><a href='<?php echo get_category_link(7); ?>' class='categoria-titulo noticias'>Arquitectura</a></h5>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div><!-- fin noticia 1 -->
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 2 -->
                            <h5><a href='<?php echo get_category_link(8); ?>' class='categoria-titulo noticias'>Diseño Gráfico</a></h5>
                            <?php if( $latest_diseno->have_posts() ) : while( $latest_diseno->have_posts() ) : $latest_diseno->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div><!-- fin noticia 2 -->
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 3 -->
                            <h5><a href='<?php echo get_category_link(9); ?>' class='categoria-titulo noticias'>Diseño Industrial</a></h5>
                            <?php if( $latest_industrial->have_posts() ) : while( $latest_industrial->have_posts() ) : $latest_industrial->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div><!-- fin noticia 3 -->
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 4 -->
                            <h5><a href='<?php echo get_category_link(40); ?>' class='categoria-titulo noticias'>Archivo Histórico JVA</a></h5>
                            <?php if( $latest_archivo->have_posts() ) : while( $latest_archivo->have_posts() ) : $latest_archivo->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div><!-- fin noticia 4 -->
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 5 -->
                            <h5><a href='<?php echo get_category_link(35); ?>' class='categoria-titulo noticias'>Estudios avanzados</a></h5>
                            <?php if( $latest_estudios_avanzados->have_posts() ) : while( $latest_estudios_avanzados->have_posts() ) : $latest_estudios_avanzados->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div><!-- fin noticia 5 -->
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 6 -->
                            <h5><a href='<?php echo get_category_link(714); ?>' class='categoria-titulo noticias'>Concursos</a></h5>
                            <?php if( $latest_concursos->have_posts() ) : while( $latest_concursos->have_posts() ) : $latest_concursos->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div><!-- fin noticia 6 -->
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 7 -->
                            <h5><a href='<?php echo get_category_link(157); ?>' class='categoria-titulo noticias'>Observación de la semana</a></h5>
                            <?php if( $latest_obs->have_posts() ) : while( $latest_obs->have_posts() ) : $latest_obs->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div><!-- fin noticia 7 -->
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'>
                            <h5><a href='<?php echo get_category_link(15); ?>' class='categoria-titulo noticias'>Bolsa de trabajo</a></h5>
                            <?php if( $latest_trabajos->have_posts() ) : while( $latest_trabajos->have_posts() ) : $latest_trabajos->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div>
                        <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'>
                            <h5><a href='<?php echo get_category_link(15); ?>' class='categoria-titulo noticias'>Investigación</a></h5>
                            <?php if( $latest_investigacion->have_posts() ) : while( $latest_investigacion->have_posts() ) : $latest_investigacion->the_post(); ?>
                          <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                            <div class='franja-seguir fija'>
                              <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                              <h6><?php the_title(); ?></h6>
                              <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                              <?php the_excerpt() ?>
                          </a>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class='oculto-md'>
			       <?php get_sidebar(); ?>
           </div>
        </div>
	</div>
</div>
<?php get_footer(); ?>        
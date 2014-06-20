<?php get_header(); ?>
<div class='fondo-negro'>
    <div class='wrap'>
        <h1 class="entry-title generico">TAG : <?php single_tag_title(); ?> </h1> <!-- título del post -->
    </div>
</div>

<div class='fondo-blanco'>
    <div class='wrap'>
        <div class='fila'>
            <div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
                
                <div class='contenedor-trio-noticias'>
                    <div class='fila pbd-alp-load-posts' id="first_container" >
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class='col-lg-4 col-xs-12 post'>                            
                                    <div class='noticia-chica'>
                                        <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                                            <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
                                            <div class='seguir-leyendo-cuadro'>
                                            <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
                                            </div>
                                            <div class='prev-imagen sm'>
                                                <?php if ( has_post_thumbnail() ) { ?>
                                                    <?php the_post_thumbnail( 'medium', array( 'class' => "ancho-maximo") ); ?>
                                                <?php } else { ?>
                                                    <img class='ancho-maximo' src='<?php echo catch_that_image() ?>'>
                                                <?php } ?>
                                            </div>
                                            <h6><?php the_title(); ?></h6>
                                            <aside class='entry-details'>    <aside class='entry-details blanco'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?> por <?php the_author(); ?></aside>    </aside>
                                            <p><?php echo get_the_limit_excerpt() ?></p>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>                             
                    </div>

                </div>
                <div class='centrado extendido' id="loadmore"></div>                    
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>        
<?php 
    // What page are we on? And what is the pages limit?
    $max = $wp_query->max_num_pages;
    $paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;
     
    // Add some parameters for the JS.
    wp_localize_script(
        'pbd-alp-load-posts',
        'pbd_alp',
        array(
            'startPage' => $paged,
            'maxPages' => $max,
            'nextLink' => next_posts($max, false)
        )
    );
?>
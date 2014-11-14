<?php get_header(); ?>
<div class='fondo-gris'>
  <div class='wrap'>
    <h1 class="entry-title especifico"><?php single_cat_title( '', true ); ?></h1> <!-- título de la categoría -->
  </div>
</div>

<div class='fondo-gris'>
    <div class='wrap'>
        <div class='fila'>
			<div class='col-lg-9 col-md-12 col-sm-12 col-xs-12'>
                
                <div class='contenedor-trio-noticias'>
                    <div class='fila pbd-alp-load-posts' id="first_container" >
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 noticia-portada'>                            
                                    <div class='noticia-chica'>
                                        <a href='<?php the_permalink() ?>' class='bloque-enlace portada'>
                                            <div class='franja-seguir fija'>
                                                <p>seguir leyendo <i class='icn icn-mas-lig icn-md'></i></p>
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
                                            <aside class='entry-details'>    <aside class='entry-details blanco'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?> por <?php the_author(); ?></aside>    </aside>
                                            <p><?php echo the_excerpt_max_charlength(160); ?></p>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>Lo siento, no hay entradas que coincidan con tu búsqueda.</p>
                        <?php endif; ?>                             
                    </div>

                </div>
                <div class='centrado extendido' id="loadmore"></div>                    
            </div>
            <div class='oculto-md'>
                   <?php get_sidebar(); ?>
            </div>
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
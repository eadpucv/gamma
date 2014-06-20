<?php get_header(); ?>

<div class='contenedor-sin-relleno'>
 	<div class='fila'>
 		<div class='col-lg-12 oculto-xs'>
    		<?php the_breadcrumb(); ?>
 		</div>
 	</div>
</div>

<div class='fondo-negro'>
    <div class='wrap'>
 		<h1 class="entry-title generico"> <i class="icn icn-anuncio icn-lg"></i> Información académica</h1>
	</div>
</div>

<div class='fondo-blanco'>
	<div class='wrap'>
		<div class='fila'>
			<div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
				<div class='fila pbd-alp-load-posts' id="first_container">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 post'>
								<a href='<?php the_permalink() ?>' class='bloque-enlace portada info-docencia'> 
									<p class='seguir-leyendo'><?php the_time("d")?> de <?php the_time("F, Y") ?></p>
									<h6><?php the_title(); ?></h6>
									<p><?php echo get_the_limit_excerpt() ?></p>
								</a>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?> 						
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
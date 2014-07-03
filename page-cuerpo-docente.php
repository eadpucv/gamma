<?php get_header(); 
  if (have_posts()) : while (have_posts()) : the_post();
?>
	<div class='fondo-negro'>
		<div class='wrap'>
  <div class='contenedor-sin-relleno oculto-xs'>
    <?php the_breadcrumb(); ?>
  </div>
			<h1 class="entry-title generico"> <i class="icn icn-anuncio icn-lg"></i> Cuerpo docente</h1> <!-- título del post -->
		</div>
	</div>
	<div class='fondo-blanco'>
		<div class='wrap'>
			<div class='fila'>
					<div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
						<?php the_content();  ?>
					</div>
					<?php get_sidebar(); ?>
			</div>
		</div>
	</div>	
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>
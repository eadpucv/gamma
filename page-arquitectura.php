<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>
	<div class='fondo-negro'>
		<div class='wrap'>
  <div class='contenedor-sin-relleno oculto-xs'>
    <?php the_breadcrumb(); ?>
  </div>
		   <h1 class="entry-title especifico">Arquitectura</h1> <!-- título del post -->
		</div>
	</div>
	<div class='fondo-blanco'>
		<div class='wrap'>
			<div class='fila'>
				<div class='col-lg-9 col-md-9 col-sm-12'>
					<div class='fila'><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<script>
$('.enunciado').scrollspy({ target: '#menu-fixed' })
</script>



<?php get_footer(); ?>
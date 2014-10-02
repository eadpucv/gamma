<?php get_header(); 
  if (have_posts()) : while (have_posts()) : the_post();
?>
<div class='fondo-gris'>
  <div class='wrap'>
    <h1 class="entry-title especifico"><?php the_title(); ?></h1> <!-- título del post -->
  </div>
</div>
	<div class='fondo-gris'>
		<div class='wrap'>
			<div class='fila'>
				<div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
					<?php the_content(); ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>	
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>
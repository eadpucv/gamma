<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>
<div class='fondo-blanco'>
  <div class='contenedor-sin-relleno oculto-xs'>
    <?php the_breadcrumb(); ?>
  </div>
</div>
<div class='fondo-negro'>
  <div class='wrap'>
    <h1 class="entry-title especifico"><?php the_title(); ?></h1> <!-- título del post -->
    <aside class='entry-details blanco'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?> por <?php the_author(); ?></aside>    
    <aside class='categorias'>Categorías: <?php the_category(', ') ?></aside>
    <aside class='categorias'><?php the_tags(__('Tags: '), ', ', ' ') ?></aside>
 </div>
</div>

<div class='fondo-blanco'>
  <div class='wrap'>
    <div class='fila'>
      <div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
        <div class='bloque'>
          <article class="h-entry especifico">
            <?php if ( has_post_thumbnail() ) { ?>
              <div class='prev-imagen franja'>
                <?php the_post_thumbnail( 'full', array( 'class' => "centrada-vertical") ); ?>
              </div>
            <?php } ?>
            <h2 class='subtitulo rojo-claro'></h2>
            <div class="e-content p-summary p-name">
              <div class='bloque'><?php the_content();  ?></div>
            </div>
            <div class='keywords'>
              <p class='palabras'> <?php the_category(', ') ?></p>
            </div>
          </article> 
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php comments_template( '/comments.php' ); ?> 
<?php get_footer(); ?>
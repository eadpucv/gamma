<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>
<div class='fondo-negro'>
  <div class='wrap'>
  <div class='contenedor-sin-relleno oculto-xs'>
    <?php the_breadcrumb(); ?>
  </div>
    <h1 class="entry-title especifico"><?php the_title(); ?></h1> <!-- título del post -->
    <aside class='entry-details blanco'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?> por <?php the_author(); ?></aside>    
    <aside class='categorias'>Categorías: <?php the_category(', ') ?></aside>
    <aside class='categorias'><?php the_tags(__('Tags: '), ', ', ' ') ?></aside>
 </div>
</div>

<div class='fondo-blanco'>
  <div class='wrap'>
    <div class='fila'>
      <div class='col-lg-9 col-md-9 col-sm-12'>
        <div class='fila'>
          <div class='col-lg-3 col-md-3 oculto-sm oculto-xs'>
            <div class='menu-affix' id='menu-fixed'>
              <div data-spy="affix" data-offset-top="270" data-offset-bottom='500'>
                <ul class="nav" id="title_list"></ul>
              </div>
            </div>
          </div>
          <div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
            <div class='bloque'>
              <article class="h-entry especifico">
                <?php if ( has_post_thumbnail() ) { ?>
                  <div class='prev-imagen franja'>
                    <?php the_post_thumbnail( 'medium', array( 'class' => "centrada-vertical") ); ?>
                  </div>
                <?php } ?>
                <h2 class='subtitulo rojo-claro'></h2>
                <div class="e-content p-summary p-name">
                  <div class='bloque' id="bloque_texto"><?php the_content(); ?></div>
                </div>
              </article> 
            </div>
          </div>
        </div>
      </div>    
      <?php get_sidebar(); ?>
  </div>
</div>
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<script>


// busco todos los titulos dentro de #bloque_texto
$( "#bloque_texto" ).find( "h3:not(:has(*)),h2:not(:has(*))" ).each(function() {
    console.log($(this).html());
    id = "title_"+randomNumberRange(1111, 9999);
    $(this).addClass("rojo-claro");
    $(this).attr("id",id);
    $("#title_list").append("<li><a class='ancla-fixed' data-scroll href='#"+id+"'>"+$(this).html()+"</a></li>")
});

function randomNumberRange(min, max)
{
  return Math.floor(Math.random() * (max - min + 1) + min);
}
$('.enunciado').scrollspy({ target: '#menu-fixed' })


</script>



<?php get_footer(); ?>
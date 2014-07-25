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
              <article class="h-entry enunciado">
                <?php if ( has_post_thumbnail() ) { ?>
                  <div class='prev-imagen franja'>
                    <?php the_post_thumbnail( 'full', array( 'class' => "centrada-vertical") ); ?>
                  </div>
                <?php } ?>
                <div class="e-content p-summary p-name enunciado">
                  <div class='bloque' id="bloque_texto"><?php the_content(); ?></div>

                  <?php if ($post->post_name === "bolsa-de-trabajo" || $post->post_name === "taller-de-amereida" || $post->post_name === "investigacion" || $post->post_name === "archivo" || $post->post_name === "magister-nautico-y-maritimo" || $post->post_name === "magister-en-diseno-nautico-y-maritimo" || $post->post_name === "magister-ciudad-y-territorio") { 
                    
                    switch ($post->post_name) {
                      case "bolsa-de-trabajo":
                        $cat_name = "trabajos";
                        break;
                      case "taller-de-amereida":
                        $cat_name = "taller-amereida";
                        break;
                      case "investigacion":
                        $cat_name = "investigacion";
                        break;
                      case "archivo":
                        $cat_name = "archivo";                        
                        break;
                      case "magister-nautico-y-maritimo":
                        $cat_name = "nautico-maritimo";                      
                        break;
                      case "magister-en-diseno-nautico-y-maritimo":
                        $cat_name = "nautico-maritimo";                      
                        break;                      
                      case "magister-ciudad-y-territorio":
                        $cat_name = "ciudad-y-territorio";                      
                        break;                      
                    }
                    $args = array( 'numberposts' => 10, 'category_name' => $cat_name, 'no_found_rows' => true, 'cache_results' => false );
                    $posts_publications = get_posts( $args ); ?>
                    
                    <div id='publicaciones' class='bloque'>
                      <h2 class='rojo-claro'>Publicaciones</h2>
                      <?php foreach( $posts_publications as $post ): setup_postdata($post);  ?>                      
                      <a href='<?php the_permalink() ?>' class='bloque-publicacion'>
                        <div class='pagina publicacion'>
                            <h6 class='rojo-claro'><?php the_title(); ?></h6> 
                            <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                            <p><?php echo the_excerpt_max_charlength(350); ?></p>
                        </div>
                      </a>
                      <?php endforeach; ?>
                    </div>
                  <?php } ?>
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
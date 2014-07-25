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
                <div class="e-content p-summary p-name enunciado">
                  <div class='bloque' id="bloque_texto">
                    <h2>e-mail</h2>
                    <form class='contacto'>
                        <legend>Envíanos un mail de contacto</legend>    
                        <div class='grupo obligatorio'>
                            <label><i class="icn icn-usuario icn-md"></i>Nombre</label>
                            <input type='text' class='relleno-formulario' required />
                            <label><i class="icn icn-email icn-md"></i> Correo electrónico</label>
                            <input type='email' class='relleno-formulario' required/>
                        </div>
                        <div class='grupo'>
                            <label><i class="icn icn-lapiz icn-md"></i> Mensaje</label>
                            <textarea></textarea>
                        </div>
                        <input type='submit' class='btn btn-md' value='Enviar'>
                    </form>
                    <h2>Teléfono</h2>
                    <p>Teléfono +56 32 2274401<br>
                    Fax +56 32 2274421</p>
                    <h2>Ubicación</h2>
                    <h4>Escuela de Arquitectura y Diseño</h4>
                    <h6>Pontificia Universidad Católica de Valparaíso</h6>
                    <p>Matta 12, Recreo, Viña del Mar, Chile.<br>
                    <iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v3/idar.im6c5nep/attribution,zoompan,geocoder.html'></iframe>
                  </div>
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

<script>
$('.enunciado').scrollspy({ target: '#menu-fixed' })
</script>


<?php get_footer(); ?>
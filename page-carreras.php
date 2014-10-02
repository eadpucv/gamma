<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>
<div class='fondo-blanco'>                           
  <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
    <div class="carousel-inner">
        <div class="item active">
          <div class='noticia grande'>
              <div class='noticia-imagen'>
                <img class='centrado-vertical' alt="First slide" title="carrera arquitectura" src='https://farm9.staticflickr.com/8027/7346648702_380e8c1d5f_h.jpg'>
                <div class='absoluto abajo transparente'>
                  <div class='wrap'>
                    <div class='fila'>
                      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class='fila'>
                          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 cf">
                            <div class='enlaces-postulante portada'> 
                              <h1 class="entry-title generico portada blanco">Menciones</h1>
                            </div>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                              <a href="<?php echo get_tag_link(7); ?>" class='btn btn-md portadas transparente-blanco'>Arquitectura</a>
                              <a href="<?php echo get_tag_link(8); ?>" class='btn btn-md portadas transparente-blanco'>Diseño Gráfico</a>
                              <a href="<?php echo get_tag_link(1803); ?>" class='btn btn-md portadas transparente-blanco'>Diseño de objetos</a>
                          </div>
                        </div> <!--fila-->
                      </div> <!--fin col-->
                    </div>
                  </div> <!--fin de wrap -->
                </div>
              </div>
          </div>
      </div>
      <div class="item">
          <div class='noticia grande'>
              <div class='noticia-imagen'>
                  <img class='centrado-vertical' alt="Second slide slide" title="carrera arquitectura" src='https://farm8.staticflickr.com/7104/7346696016_bed217c9f8_h.jpg'>
                  <div class='absoluto abajo transparente'>
                    <div class='wrap'>
                      <div class='fila'>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                          <div class='fila'>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 cf">
                              <div class='enlaces-postulante portada'> 
                                <h1 class="entry-title generico portada blanco">Estudiantes</h1>
                              </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                              <a href="<?php echo get_tag_link(63); ?>" class='btn btn-md portadas transparente-blanco'>Ver noticias</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="item">
        <div class='noticia grande'>
            <div class='noticia-imagen'>
                <img alt="Second slide slide" title="carrera arquitectura" src='https://farm8.staticflickr.com/7072/7161436697_71767cf424_h.jpg'>
                <div class='absoluto abajo transparente'>
                  <div class='wrap'>
                    <div class='fila'>
                      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class='fila'>
                          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 cf">
                            <div class='enlaces-postulante portada'> 
                              <h1 class="entry-title generico portada blanco">Publicaciones</h1>
                            </div>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <a href="<?php echo get_tag_link(7); ?>" class='btn btn-md portadas transparente-blanco'>Arquitectura</a>
                            <a href="<?php echo get_tag_link(8); ?>" class='btn btn-md portadas transparente-blanco'>Diseño Gráfico</a>
                            <a href="<?php echo get_tag_link(1803); ?>" class='btn btn-md portadas transparente-blanco'>Diseño de objetos</a>
                            <a class='btn btn-md portadas transparente-blanco'>Ver todas</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <a data-slide="prev" href="#carousel-example-generic" class="left carrera carousel-control"><i class="icn icn-nav-izq"></i></a>
    <a data-slide="next" href="#carousel-example-generic" class="right carrera carousel-control"><i class="icn icn-nav-der"></i></a>
  </div>
</div>

<div class='wrap'>
  <div class='fila'>
    <div class='col-lg-9 col-md-9 col-sm-12'>
      <div class='fila'>
        <div class='col-lg-3 col-md-3 oculto-sm oculto-xs'>
          <div class='menu-affix portada' id='menu-fixed'>
            <div id='nav-page'>
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
                <div class='bloque' id="bloque_texto">
                  <?php the_content(); ?>
                </div>
              </div>
            </article> 
          </div>
        </div>
      </div>
    </div>    
    <!-- Sidebar -->
    <div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
      <div class='aside'>
        <div class='bloque-aside'>
          <h6 class='gris'><i class="icn icn-marcador-lig icn-md"></i> Menciones </h6>
          <ul class='publicaciones-enlazadas'>
              <li><a href="<?php echo get_permalink(13); ?>">Arquitectura</a></li>
              <li><a href="<?php echo get_permalink(14); ?>">Diseño gráfico</a></li>
              <li><a href="<?php echo get_permalink(15); ?>">Diseño de objetos</a></li>
          </ul>
          <hr>
        </div>
        <?php 
          $lastest_estudiantes = new WP_Query( array('posts_per_page' => 5, 'category__in' => array(63), 'orderby' => 'date', 'order'=>'DESC'));
          $lastest_publicaciones = new WP_Query( array('posts_per_page' => 5, 'category__in' => array(7,8,9),  'orderby' => 'date', 'order'=>'DESC'));   
        ?>
        <div class='bloque-aside'>
          <h6 class='gris'><i class="icn icn-noticias icn-md"></i> Publicaciones</h6>
          <ul class='publicaciones-enlazadas'>      
              <?php while ($lastest_publicaciones->have_posts()) : $lastest_publicaciones->the_post(); ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
              <?php endwhile; ?>
          </ul>
          <hr>
        </div>
        <div class='bloque-aside'>
          <h6 class='gris'><i class="icn icn-noticias icn-md"></i> Estudiantes</h6>
          <ul class='publicaciones-enlazadas'>
              <?php while ($lastest_estudiantes->have_posts()) : $lastest_estudiantes->the_post(); ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
              <?php endwhile; ?>
          </ul>
          <hr>
        </div>      
        <div class='bloque-aside oculto-sm oculto-xs'>
          <h6 class='naranja-opuesto'><i class="icn icn-twitter icn-lg"></i> @eadpucv</h6>
          <a class="twitter-timeline"  href="https://twitter.com/eadpucv"  data-widget-id="451107933158244352">Tweets por @eadpucv</a>
          <script type="text/javascript">
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
          </script>
        </div>
      </div>
    </div>
    <!--fin de sidebar-->
  </div>
</div>
<?php endwhile; else: ?>
  <p>Lo siento, no hay post que coincidan con tu búsqueda.</p>
<?php endif; ?>

<script>
  // busco todos los titulos dentro de #bloque_texto
  $( "#bloque_texto" ).find( "h3:not(:has(*)),h2:not(:has(*))" ).each(function() {
      id = "title_"+randomNumberRange(1111, 9999);
      $(this).addClass("rojo-claro");
      $(this).attr("id",id);
      $("#title_list").append("<li><a class='ancla-fixed' data-scroll href='#"+id+"'>"+$(this).html()+"</a></li>")
  });

  // Imagenes por WikiAppend
  if ($('.wiki-embed').length > 0) {
    $(".wiki-embed").find("img").each(function(i) {
      url = "http://wiki.ead.pucv.cl" + $(this).attr("src");
      $(this).attr("src",url);
    });
  }

  function randomNumberRange(min, max)
  {
    return Math.floor(Math.random() * (max - min + 1) + min);
  }
  $('.enunciado').scrollspy({ target: '#menu-fixed' })
</script>

<?php get_footer(); ?>
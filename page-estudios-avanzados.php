<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>

<div class='fondo-blanco'>
                           
                <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
                   <!--<ol class="carousel-indicators"> 
                    <li data-slide-to="0" data-target="#carousel-example-generic" class="active"></li> 
                    <li data-slide-to="1" data-target="#carousel-example-generic"></li> 
                    <li data-slide-to="2" data-target="#carousel-example-generic"></li>
                    <li data-slide-to="3" data-target="#carousel-example-generic"></li>
                    <li data-slide-to="4" data-target="#carousel-example-generic"></li> 
                  </ol>-->

                <div class="carousel-inner">
                      <div class="item active">
                          <div class='noticia grande'>
                              <div class='noticia-imagen'>
                                  <img alt="First slide" title="carrera arquitectura" src='https://farm9.staticflickr.com/8167/7351688608_963bd41ec5_h.jpg'>
                                      <div class='absoluto abajo transparente'>
                                        <div class='wrap'>
                                          <div class='fila'>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                              <div class='fila'>
                                              <!--<h1 class="entry-title generico portada blanco">Menciones</h1>-->
                                                <div class="col-lg-3 col-md-3 oculto-sm oculto-xs">
                                                  <div class='enlaces-postulante portada'> 
                                                    <h1 class="entry-title generico portada blanco">Menciones</h1>
                                                  </div>
                                                </div>
                                            <!-- pages -->
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                  <a href="<?php echo get_permalink(16); ?>" class='btn btn-md transparente-blanco'>Mención Náutico & Marítimo</a>
                                                  <a href="<?php echo get_permalink(4759); ?>" class='btn btn-md transparente-blanco'>Mención Ciudad & Territorio</a>
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
                                  <img class='centrado-vertical' alt="First slide" title="carrera arquitectura" src='https://farm9.staticflickr.com/8014/7166496749_794607c47f_h.jpg'>
                                      <div class='absoluto abajo transparente'>
                                        <div class='wrap'>
                                          <div class='fila'>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                              <div class='fila'>
                                              <!--<h1 class="entry-title generico portada blanco">Menciones</h1>-->
                                                <div class="col-lg-3 col-md-3 oculto-sm oculto-xs">
                                                  <div class='enlaces-postulante portada'> 
                                                    <h1 class="entry-title generico portada blanco">Tesis</h1>
                                                  </div>
                                                </div>
                                            <!-- pages -->
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                  <a href="<?php echo get_permalink(35); ?>" class='btn btn-md transparente-blanco'>Mención Náutico & Marítimo</a>
                                                  <a href="<?php echo get_permalink(714); ?>" class='btn btn-md transparente-blanco'>Mención Ciudad & Territorio</a>
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
                                  <img alt="First slide" title="carrera arquitectura" src='https://farm8.staticflickr.com/7096/7351612024_94af406f40_h.jpg'>
                                      <div class='absoluto abajo transparente'>
                                        <div class='wrap'>
                                          <div class='fila'>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                              <div class='fila'>
                                              <!--<h1 class="entry-title generico portada blanco">Menciones</h1>-->
                                                <div class="col-lg-3 col-md-3 oculto-sm oculto-xs">
                                                  <div class='enlaces-postulante portada'> 
                                                    <h1 class="entry-title generico portada blanco">Publicaciones</h1>
                                                  </div>
                                                </div>
                                            <!-- pages -->
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                  <a href="<?php echo get_tag_link(1953); ?>" class='btn btn-md transparente-blanco'>Ver todas</a>
                                                </div>
                                              </div> <!--fila-->
                                            </div> <!--fin col-->
                                          </div>
                                        </div> <!--fin de wrap -->
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
              <div data-spy="affix" data-offset-top="780" data-offset-bottom='500'>
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
                  <div class='bloque' id="bloque_texto"><!--<?php the_content(); ?>-->
                      <h2 class='portada'>Presentación</h2>
                      <p>Los postgrados nacen en nuestra Escuela como la respuesta natural a las nuevas fronteras que el conocimiento, las ciencias, el arte y el estudio le plantean a nuestra propia visión. Es por ello que ya no sólo ofrecemos el pre grado, sino además el siguiente y necesario paso en la formación de la excelencia en nuestros profesionales.</p>
                      <h2>Programa de Magíster en Arquitectura y Diseño</h2>

                      <p>El Magister en Arquitectura y Diseño que nuestra Escuela quiere implementar, es fiel trasunto de su tradición, en cuanto que la concepción de la Arquitectura y del Diseño son oficios artísticos. Así, el diseñador y el arquitecto, abiertos a las necesidades del hombre, a las cuales deben dar respuesta eficaz apelando a toda sus capacidades y formación racional y lógica, buscan además que su obra adquiera sentido y trascienda las necesidades. La obra, así concebida, ha de manifestar esta capacidad inagotable propia del acto creativo, mostrando el esplendor del mundo y de la condición humana. Es nuestro propósito ofrecerle al postulante a Magister una experiencia fundamentalmente creativa que cuestione la relación que habitualmente el hombre establece con la naturaleza y con sus semejantes.</p>

                      <p>Por la naturaleza de los oficios en cuestión creemos que estos programas de magister colocarán a los estudiantes venidos de distintas áreas del saber y del producir, en condiciones tanto de incremento del potencial profesional como de la capacidad de llevar adelante investigaciones significativas a la realidad de nuestro país y desarrollar capacidades creativas e innovadoras.</p>

                      <p>Para proceder a implementarlos, nuestra Escuela cuenta con una gran cantidad de investigaciones y proyectos, todos reconocidos por otras entidades universitarias y profesionales tanto del país como del extranjero.</p>
                      <h3>Objetivos Generales</h3>
                      <p>Se quiere formar graduados que incrementen su capacidad creativa e innovadora, su capacidad teórica y de investigación y su capacidad de lenguaje técnico y científico. Capacidades que le permitan diseñar objetos náuticos y trabajar en la dimensión del territorio marítimo, a fin de lograr coordinar estas capacidades, con un pensamiento crítico sustentable, en el contexto de una visión de país.</p>

                      <h3>Travesía anual</h3>
                      <p>En el segundos semestre de cada año, se realiza una Travesía, como parte del taller de proyectos. Se viaja por Chile o el extranjero y su duración es de aproximadamente 15 días.</p>

                      <p>Los objetivos son los siguientes:</p>

                      <ul>
                        <li>Capacidad de emitir hipótesis, por vía de la observación, de los lugares visitados.</li>
                        <li>Capacidad de realización de modelos, náuticos y/o marítimos con extrapolación de sus resultados. Modelos que verifican las hipótesis que se enuncian.</li>
                        <li>Capacidad de verificar los conceptos constructivos y estructurales tratados teóricamente en el primer semestre, con visitas a astilleros y talleres, en la fabricación de embarcaciones de distintas magnitudes y distintos materiales. (Valparaíso, San Antonio, Talcahuano, Valdivia, Puerto Varas, Puerto Montt, Punta Arenas).</li>
                        <li>Adquirir experiencia de navegante a bordo de la Embarcación Amereida y deportivas: Kayak, catamarán, veleros, yates. Se trata de verificar los conceptos de hidrostática y de hidrodinámica, experimentando física y corpóreamente la navegación.</li>
                        <li>Visitas a puertos, marinas, bordes marítimos, lacustres y fluviales ligados a los proyectos náuticos y marítimos que se estudian y proyectan.</li>
                        <li>Visitas a canal de pruebas de la UA, a los laboratorios del Instituto de Hidráulica Nacional, al simulador de Puente de Mando del Cimar.</li>
                      </ul>
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
      <div class='bloque-aside sm'>
        <h6 class='gris'><i class="icn icn-marcador-lig icn-md"></i> Menciones </h6>
        <ul class='publicaciones-enlazadas'>
            <li><a href="<?php echo get_permalink(16); ?>">Magister Náutico & Marítimo</a></li>
            <li><a href="#">Magister Ciudad & Territorio</a></li>
        </ul>
        <hr>
      </div>
    <div class='bloque-aside sm'>
      <?php 
        $latest_carreras = new WP_Query( array('posts_per_page' => 5, 'category__in' => array(1951,1950)));
        $latest_publicaciones = new WP_Query( array('posts_per_page' => 5, 'category__in' => array(7,8,9)));      
      ?>
      <h6 class='gris'><i class="icn icn-noticias icn-md"></i> Tesis</h6>

      <ul class='publicaciones-enlazadas'>
          <?php foreach( $lastest_carreras as $post ): setup_postdata($post);  ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
          <?php endforeach; ?>
      </ul>

      <hr>
    </div>
    <div class='bloque-aside sm'>
      <h6 class='gris'><i class="icn icn-noticias icn-md"></i> Publicaciones</h6>
      <ul class='publicaciones-enlazadas'>      
          <?php foreach( $lastest_publicaciones as $post ): setup_postdata($post);  ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
          <?php endforeach; ?>
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
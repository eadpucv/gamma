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
      <div class='col-lg-12 col-md-12 col-sm-12'>
        <div class='fila'>
          <div class='col-lg-3 col-md-3 oculto-sm oculto-xs'>
            <div class='menu-affix' id='menu-fixed'>
              <div id='nav-page'>
                <ul class="nav" id="title_list"></ul>
              </div>
            </div>
          </div>
          <div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
          	<div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="First slide" title="carrera diseño industrial" src='<?php bloginfo('template_directory') ?>/img/diseno-industrial.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera diseño industrial" src='<?php bloginfo('template_directory') ?>/img/diseno-industrial2.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="Second slide" title="carrera diseño industrial" src='<?php bloginfo('template_directory') ?>/img/diseno-industrial3.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera diseño industrial" src='<?php bloginfo('template_directory') ?>/img/diseno-industrial4.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera diseño industrial" src='<?php bloginfo('template_directory') ?>/img/diseno-industrial5.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera diseño industrial" src='<?php bloginfo('template_directory') ?>/img/diseno-industrial8.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                </div>
                <!-- Controles -->
                <a data-slide="prev" href="#carousel-example-generic" class="left carrera carousel-control"><i class="icn icn-nav-izq"></i></a>
                <a data-slide="next" href="#carousel-example-generic" class="right carrera carousel-control"><i class="icn icn-nav-der"></i></a>
            </div> <!--carrousel -->
            <div class='bloque'>
              <article class="h-entry enunciado">
                <?php if ( has_post_thumbnail() ) { ?>
                  <div class='prev-imagen franja'>
                    <?php the_post_thumbnail( 'medium', array( 'class' => "centrada-vertical") ); ?>
                  </div>
                <?php } ?>
                <div class="e-content p-summary p-name carrera">
                  	<div class='bloque' id="bloque_texto"><?php the_content(); ?>
                      <!-- <h2>Estudiar diseño industrial en la e[ad]</h2>
                      <p>La misión de la Escuela de Arquitectura y Diseño es cultivar, el arte de la Arquitectura, del Diseño Gráfico y del Diseño Industrial por medio de la creación y transmisión del conocimiento del oficio de estas artes, formar Arquitectos y Diseñadores con la vocación de concebir obras que den cabida y expresión al habitar humano.</p>
                      <p>La Escuela afirma que tanto la Arquitectura como el Diseño son un Arte. Esto diferencia profundamente de otras orientaciones, disciplinas y saberes, e implica una manera peculiar de estudiar y de hacer.</p>
                      <h4>La Observación como fundamento</h4>
                      <p>En nuestra Escuela se accede a la Arquitectura y al Diseño a través de la observación. La observación es una actividad profundamente artística que permite penetrar la realidad de manera siempre nueva y original. A partir de esta postura de pensamiento tomada como fundamento se desarrollan los diferentes trabajos, estudios y proyectos.</p>
                      <h4>Compromiso de vida y ámbito</h4>
                      <p>Esta modalidad de estudiar y hacer exige de alumnos y profesores un real compromiso de vida. Este que le confiere a la Escuela una gran unidad y, a su vez establece un ámbito, y un ritmo de estudio que da cabida a actividades ordinarias y extraordinarias, en que participan creativamente todos los alumnos y profesores.</p>
                      <h4>El taller columna vertebral</h4>
                      <p>El taller es la columna vertebral de los estudios de cada disciplina impartida en nuestra Escuela. En él tiene lugar el proceso creativo de cada estudiante, y es donde se decantan los conocimientos humanísticos, matemáticos, científicos y tecnológicos que se imparten en las demás asignaturas de nuestro Plan de Estudios.</p>
                      <h2>Perfil de egreso</h2>
                      <p>El Diseñador Industrial de esta escuela formula y proyecta los objetos que acompañan el habitar del hombre construyéndole su temporalidad y acontecer tanto a sus actos cotidianos como extraordinarios. Tal capacidad es posible a partir de la observación como proceso originario y creativo.</p>
                      <p>Es capaz de ubicarse y responder con precisión ante solicitudes de variada índole, desde los objetos que son capaces de generar una macro habitabilidad (avión, barco, tren) hasta los objetos que participan de la micro habitabilidad (vaso, lápiz, silla); proyectos vinculados al espacio arquitectónico, al espacio urbano y a los objetos que pueblan tal espacio, ya sean estos efímeros o permanentes, únicos o seriados en cualquier sector de la productividad o en empresas de carácter social. Todo esto con creatividad, eficacia y justeza en la utilización de los recursos involucrados.</p>
                      <p>El diseñador concibe objetos que son la expresión de la vanguardia técnica de su tiempo; su capacidad técnica le permite extender, aumentar y proteger las capacidades físicas del hombre sin alterar su realidad fisiológica. Es por sobre todo un diseñador creativo, tanto en los aspectos artísticos como técnicos vinculados a su disciplina.</p>
                      <p>Nuestro Diseñador trabaja tanto de manera independiente como en equipo, sea este de pares o multidisciplinario, siendo capaz de crear, dirigir e integrar grupos, sean estos de trabajo profesional, investigación o formulación de planteamientos teóricos disciplinarios.</p>
                      <p>Tiene un gran conocimiento de la realidad y una experiencia sensible de su país y de su continente desde su oficio. Esto le permite abordar proyectos de complejidades y magnitudes vinculadas al territorio y su cultura.</p>
                      <p>Nuestros egresados, formados dentro del marco valórico que la Pontificia Universidad Católica de Valparaíso sostiene, poseen una postura ética fundada en la responsabilidad y compromiso con la obra que emprende.</p>
                      <h2>Malla Curricular</h2>
                      <a href="http://web.archive.org/web/20130512094250/http://www.ead.pucv.cl/wp-content/archivos/2008/05/malla-Dis_I.pdf">Descargar malla curricular Diseño industrial (pdf, 149kb) <i class="icn icn-mano-abajo icn-lg"></i></a>
                      <h2>Profesores de diseño industrial</h2>
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                      <div class="pagina docente indice">
                      <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/marcelo-araya.jpg" alt="" /></div>
                      <div class="datos-docente indice">
                      <h4 class="rojo-claro">Marcelo Araya</h4>
                      <h6>Diseñador Industrial</h6>
                      </div>
                      <div class="resena-docente indice">
                      <p>
                      Diseño industrial; P.U. Católica de Valparaíso, Chile.
                      Doctor©; Universidad Rey Juan Carlos de Madrid, España.
                      </p>
                      </div>
                      </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                      <div class="pagina docente indice">
                      <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/arturo-chicano.jpg" alt="" /></div>
                      <div class="datos-docente indice">
                      <h4 class="rojo-claro">Arturo Chicano</h4>
                      <h6>Diseñador Industrial</h6>
                      </div>
                      <div class="resena-docente indice">
                      <p>
                      Diseñador industrial; P.U. Católica de Valparaíso, Chile.
                      Doctor ©; PUC-Río, Río de Janeiro, Brasil.
                      Vicerector de Desarrollo PUCV
                      </p>
                      </div>
                      </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                      <div class="pagina docente indice">
                      <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/juan-carlos-jeldes.jpg" alt="" /></div>
                      <div class="datos-docente indice">
                      <h4 class="rojo-claro">Juan Carlos Jeldes</h4>
                      <h6>Diseñador Industrial</h6>
                      </div>
                      <div class="resena-docente indice">
                      <p>
                      Diseñador industrial; P.U. Católica de Valparaíso, Chile.
                      Doctor ©; PUC-Río, Río de Janeiro, Brasil.
                      </p>
                      </div>
                      </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                      <div class="pagina docente indice">
                      <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/ricardo-lang.jpg" alt="" /></div>
                      <div class="datos-docente indice">
                      <h4 class="rojo-claro">Ricardo Lang</h4>
                      <h6>Diseñador Industrial</h6>
                      </div>
                      <div class="resena-docente indice">
                      <p>
                      Diseñador industrial; P.U. Católica de Valparaíso, Chile.
                      </p>
                      </div>
                      </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                      <div class="pagina docente indice">
                      <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/jaime-reyes.jpg" alt="" /></div>
                      <div class="datos-docente indice">
                      <h4 class="rojo-claro">Jaime Reyes</h4>
                      <h6>Diseñador Industrial</h6>
                      </div>
                      <div class="resena-docente indice">
                      <p>
                      Diseñador industrial; P.U. Católica de Valparaíso, Chile.
                      Magíster en indice; P.U. Católica de Valparaíso, Chile.
                      Doctor ©; PUC-Río, Río de Janeiro, Brasil.
                      </p>
                      </div>
                      </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                      <div class="pagina docente indice">
                      <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/alfred-thiers.jpg" alt="" /></div>
                      <div class="datos-docente indice">
                      <h4 class="rojo-claro">Alfred Thiers</h4>
                      <h6>Diseñador Industrial</h6>
                      </div>
                      <div class="resena-docente indice">
                      <p>
                      Diseñador gráfico; P.U. Católica de Valparaíso, Chile.
                      MDes Interaction Design; Carnegie Mellon University, EE.UU.
                      Doctor ©; PUC-Río, Río de Janeiro, Brasil.
                      </p>
                      </div>
                      </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                      <div class="pagina docente indice">
                      <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/vanessa-siviero.jpg" alt="" /></div>
                      <div class="datos-docente indice">
                      <h4 class="rojo-claro">Vanessa Siviero</h4>
                      <h6>Diseñadora Industrial</h6>
                      </div>
                      <div class="resena-docente indice">
                      <p>
                      Diseñador Industrial; P.U. Católica de Valparaíso, Chile. Doctor ©; PUC-Río; Río de Janeiro, Brasil.
                      </p>
                      </div>
                      </div>
                      </div> -->
                    </div>
				        </div> <!-- e-content -->
				      </article> 
            </div>
          </div> 
        </div>	<!--aquí cierra fila-->
      </div>
    </div> 
  </div> <!--Wrap-->
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
      $("#title_list").append("<li><a class='ancla-fixed sin-aside' data-scroll href='#"+id+"'>"+$(this).html()+"</a></li>")
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
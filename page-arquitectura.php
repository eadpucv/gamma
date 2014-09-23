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
                                <img alt="First slide" title="carrera arquitectura" src='<?php bloginfo('template_directory') ?>/img/arq2.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="Second slide" title="carrera arquitectura" src='<?php bloginfo('template_directory') ?>/img/car-arq.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera arquitectura" src='<?php bloginfo('template_directory') ?>/img/car-arq3.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera arquitectura" src='<?php bloginfo('template_directory') ?>/img/car-arq4.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera arquitectura" src='<?php bloginfo('template_directory') ?>/img/car-arq5.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera arquitectura" src='<?php bloginfo('template_directory') ?>/img/car-arq6.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                </div>
                <!-- Controles -->
                <a data-slide="prev" href="#carousel-example-generic" class="left carrera carousel-control carrera"><i class="icn icn-nav-izq"></i></a>
                <a data-slide="next" href="#carousel-example-generic" class="right carrera carousel-control carrera"><i class="icn icn-nav-der"></i></a>
            </div>

            <div class='bloque'>
              <article class="h-entry enunciado">
                <?php if ( has_post_thumbnail() ) { ?>
                  <div class='prev-imagen franja'>
                    <?php the_post_thumbnail( 'medium', array( 'class' => "centrada-vertical") ); ?>
                  </div>
                <?php } ?>
                <div class="e-content p-summary p-name carrera">
                  <div class='bloque' id="bloque_texto"><?php the_content(); ?>
                    <!-- <h2>Estudiar arquitectura en la e[ad]</h2>
                    <p>La misión de la Escuela de Arquitectura y Diseño es cultivar, el arte de la Arquitectura, del Diseño Gráfico y del Diseño Industrial por medio de la creación y transmisión del conocimiento del oficio de estas artes, formar Arquitectos y Diseñadores con la vocación de concebir obras que den cabida y expresión al habitar humano.</p>
                    <h2>Perfil del egresado</h2>
                    <p>Un Arquitecto que conciba la arquitectura como un arte al servicio del hombre. Que desde una visión poética de su contexto y una alta capacidad de reflexión sean capaces con creatividad de proponer, proyectar y construir obras arquitectónicas y urbanas que de un modo innovador en el arte y en la técnica den cabida y expresión al habitar humano, satisfaciendo necesidades de la sociedad en las distintas escalas- Edificio, ciudad, continente- y magnitudes del proyecto arquitectónico y urbano.</p>
                    <p>Las competencias fundamentales, disciplinares y profesionales de este arquitecto son aquellas que permiten que sus proyectos sean un consecuente paso de la observación arquitectónica a la forma construida.</p>
                    <h2>Competencias fundamentales</h2>
                    <p>Se propicia una educación integral, que favorece el crecimiento armónico de todas las dimensiones que constituyen la persona humana, abordados tanto desde la perspectiva intelectual como vivencial, de modo de promover la coherencia entre el conocimiento, la verdad y la vida. Se privilegian valores que sustentan una integridad y competencias humanísticas que permiten acceder al método de estudio que propone la carrera basado principalmente en la “Observación” dibujada, medida y escrita que es el modo de comprender e interactuar con el entorno</p>
                    <ul>
                      <li>Valores de Apertura a la trascendencia; libertad; solidaridad; respeto y aceptación de la diversidad; y compromiso ético y de responsabilidad social.</li>
                      <li>Capacidad para observar la realidad circundante, la ciudad se origina y se desarrolla, a partir de la observación directa de su realidad.</li>
                    </ul>
                    <h4>Competencias disciplinares</h4>
                    <ul>
                      <li>Competencias que permiten al arquitecto a dar existencia física a la formulación del paso de la observación a la forma.</li>
                      <li>Capacidad para integrar los aspectos poéticos, sociales y físicos presentes en los lugares y casos a abordar.</li>
                      <li>Capacidad creativa y de maestría formal, que le permita innovar en la forma arquitectónica del espacio habitable y su contexto.</li>
                      <li>Capacidad analítica, de reflexión y de intervención social que le permita realizar planes y programas apropiados en una correcta relación lugar y contexto.</li>
                    </ul>
                    <h4>Competencias profesionales</h4>
                    <p>La misión de la Escuela de Arquitectura y Diseño es cultivar, el arte de la Arquitectura, del Diseño Gráfico y del Diseño Industrial por medio de la creación y transmisión del conocimiento del oficio de estas artes, formar Arquitectos y Diseñadores con la vocación de concebir obras que den cabida y expresión al habitar humano.</p>
                    <ul>
                      <li>Capacidad racional para coordinar, integrar y derivar las distintos aspectos científicos, técnicos y legales presentes en el desarrollo y la ejecución del Proyecto arquitectónico.</li>
                      <li>Capacidad para integrar equipos interdisciplinarios.</li>
                    </ul>
                    <h1>Concepción del Perfil de Egreso</h1>
                    <p>El perfil de egreso del Arquitecto de la PUCV se define brevemente como: Un arquitecto que concibe la arquitectura como un arte al servicio del hombre y que es un profesional activo en la sociedad.</p>
                    <p>Para lograr la construcción de dicho perfil el postulante a la carrera tiene un perfil de ingreso que se basa en una vocación artística.</p>
                    <p>Esta Escuela que se ubica en una concepción artística del oficio de la Arquitectura, tiene un estándar que está medido por la Obra, es decir, es cada vez inaugural. Cada obra quiere traer a presencia aquella dimensión del Arte que es única, que se puede formular como la poiesis, aquello que pasa del no ser al ser. Es por esto que se ubica en la vanguardia del obrar arquitectónico.</p>
                    <p>Es esta ubicación la que le abre el modo de estudio del Taller, donde se reune la teoría, palabra dicha con la proyección palabra hecha. Así, la trasmisión del conocimiento se imparte como una formación, en la cual se madura para adquirir autoridad, lo que sólo se logra accediendo a aquello que constituye el origen de una materia.</p>
                    <p>Esta Escuela forma Arquitectos con la vocación de concebir obras que den cabida y expresión al habitar humano.</p>
                    <h2>Objetivos educacionales</h2>
                    <p>Los objetivos educacionales que transmiten el oficio de dar cabida al habitar humano construyen simultáneamente tres magnitudes del arte arquitectónico:</p>
                    <ul>
                    <ul>
                      <li><b>Magnitud del Lenguaje</b></li>
                    </ul>
                    </ul>
                    <p>La magnitud de un lenguaje que funda la vocación desde la relación Poesía y Arquitectura. Es una experiencia de la Poesía de Amereida, de la Música de las Matemáticas, del Taller de América, los cursos de matemáticas y de Cultura Religiosa. Y que como experiencia de los Originales se ejerce en todo concebir de los talleres y de la Escuela en general.</p>
                    <ul>
                    <ul>
                      <li><b>Vida, Trabajo y Estudio</b></li>
                    </ul>
                    </ul>
                    <p>La magnitud de un régimen que funda la convergencia de la vida, el trabajo y el estudio. Es una experiencia del acto del habitar y que se lleva a cabo en el “Taller”, en la casa de la Escuela, en la Ciudad Abierta, en las Travesías: experiencia en su sentido histórico en el curso de “Presentación de la Arquitectura”, en su sentido corporal en el curso de “Cultura del Cuerpo” y en un sentido ejecutorio de las ciencias y las técnicas en los cursos de “Construcción” y que se ejerce en toda realización del alumno en la Escuela.</p>
                    <ul>
                    <ul>
                      <li><b>Magnitud de un Instrumento</b></li>
                    </ul>
                    </ul>
                    <p>La Observación. Ésta ubica todo concebir y realizar en un ahora y aquí. La experiencia de la Observación del entorno, tanto el de Valparaíso como el del continente, se acumula en una carpeta que acompaña, cual hábito, a profesores, alumnos y exalumnos. Ella se lleva a cabo en el taller, pero se llega hasta la manera de estudiar los Ramos Generales que imparte la Universidad.</p>
                    <p>Se trata de tres magnitudes que generan gratuitamente una cuarta: de celebración. Ella arma, para sí misma e invitados, lecturas poéticas, conciertos, exposiciones de esculturas, cine de vanguardia, comidas para dialogar y en donde se madura la fidelidad al origen de todas las magnitudes. Estos objetivos devienen en propósitos, que fueron planteados por primera vez en 1952, cuando la Escuela de Arquitectura se refunda. Momento inicial en que los Arquitectos exponen en formulación y el poeta abre el entusiasmo de la fidelidad. Desde el comienzo de la Escuela, hace ya 50 años, no ha habido modificaciones en cuanto a la formulación inicial y a tener conciencia de fidelidad. Sí ha habido en cuanto a su dilatarse en profundizaciones y ampliaciones. Así, específicamente en los talleres y en la Escuela en general.</p>
                    <p>Estudiar los cerros de Valparaíso al inicio, enseguida su plan, al gran Valparaíso bioceánico, Chile, América del Sur, es nuestra ancla según la poesía de Amereida. Las carpetas de observaciones se vuelven más reflexivas. Nuestra luz (Amereida), creciente acceder a Europa desde el “se principia latino” poético; en los cursos de Presentación de la Arquitectura y Construcción. Nuestra aventura (Amereida), atreverse a una hospitalidad de vida, trabajo y estudio en la Ciudad Abierta, incorporando huéspedes Arquitectos y artistas y de otros oficios a la ronda creativa que es el modo de concebir y realizar en común desde la carpeta de observaciones.</p>
                    <p>El modelo pedagógico sobre el cual se basa esta formación es el Taller el cual se estructura en torno a un tema que los profesores exponen en clases ubicatorias y de abertura, las que generan tareas y estudios que se llevan a cabo en la ciudad mediante observaciones que se fijan en croquis y anotaciones. Las tareas de Observación se exponen colectivamente al interior del Taller, donde los profesores las corrigen individualmente, así cada alumno va dando pasos de maduración que le permiten formular un fundamento, el que luego da origen a su proposición, la que es corregida un cierto número de veces dependiendo del caso, y termina en una proposición final la que es calificada.</p>
                    <blockquote><i>El Taller es así un ámbito de estudio colectivo en que cada alumno fructifica en su trabajo individual, por medio de un camino creativo en común que considera el desarrollo individual de cada cual.</i></blockquote></p>
                    <p>Este modelo conduce a ciertas capacidades que definen el perfil de un egresado de arquitectura en esta escuela este perfil se logra mediante la transmisión de los conocimientos y herramientas para el logro de un conjunto de competencias genéricas de formación fundamental, disciplinares y profesionales que se dan en la relación entre ciclos del proyecto formativo y las áreas de formación[1]. El concepto de ciclo corresponde a la estructura temporal de la carrera, seis años que se dividen en cuatro ciclos; Ciclo de inicio en primer año, ciclo de Formación; Segundo y tercer año; Tercer ciclo disciplinar; cuarto y quinto año; y cuarto ciclo profesionalizante; correspondiente a la Titulación. El concepto de área corresponde a las áreas formativas las que se constituyen en columnas vertebrales de la carrera estructurando los ciclos.</p>
                    <h2>Competencias Genéricas de formación fundamental</h2>
                    <p>Lo fundamental es tener presente las magnitudes del arte arquitectónico descritas anteriormente desde dichas magnitudes traducidas como competencias se vinculan más bien al concepto de área y se van logrando a lo largo de la carrera implícitas concretamente en el ámbito de estudio sostenido académicamente por aquellas dimensiones que construyen en los estudiantes el vinculo entre vida, trabajo y estudio. Dicho vinculo se da principalmente en las Travesías, en la Ciudad Abierta y en la posibilidad de construcción de obras que se da en el Taller Arquitectónico, es decir se dan mediante experiencias sensibles. Y la contextualización de esas experiencias se dan en ciertos ejes estructurales como lo son el Taller de Amereida, Cultura del Cuerpo, Matemáticas y estudios generales. Cabe mencionar que el conjunto de competencias genéricas de formación fundamental han sido estudiadas por un grupo de expertos de la PUCV para determinar ciertas competencias claves y transversales al perfil de un egresado de la PUCV.</p>
                    <p>Cada carrera considera estas competencias aportando una visión de transversalidad disciplinaria dentro de la Universidad. Estas competencias son las siguientes:</p>
                    <ol>
                      <li><b>Capacidad de observación:</b> Capacidad para observar la realidad circundante, la ciudad se origina y se desarrolla, a partir de esa observación directa de la realidad.</li>
                      <li><b>Conocer reflexivamente:</b> Reflexionar sobre los propios planes de acción, los propios conocimientos, y la relación de ambos con las demás personas que intervienen en la situación. Se trata de un metaconocimiento, es decir un conjunto de conocimientos que permiten la reflexión acerca de los propios conocimientos.</li>
                      <li><b>Capacidad crítica, autocrítica y propositiva:</b> Analizar, examinar y juzgar de manera consciente el objeto de estudio integrando las consideraciones relevantes y generando una opinión fundada (crítica) y de realizar esas acciones sobre sí mismo (autocrítica).</li>
                    </ol>
                    <h2>Malla Curricular</h2>
                    <a href="http://web.archive.org/web/20130507102015/http://www.ead.pucv.cl/wp-content/archivos/2009/08/malla-arq1.pdf">Descargar malla curricular Arquitectura (pdf, 149kb) <i class="icn icn-mano-abajo icn-lg"></i></a>
                    <h2>Profesores de arquitectura</h2>
                    <div class="fila">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/patricio-caraves.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">Patricio Cáraves</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    Doctor; UPC Barcelona, España.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/miguel-eyquem.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">Miguel Eyquem</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Chile, Chile.
                    Doctor Honoris Causa; P.U. Católica de Valparaíso, Chile.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/jorge-ferrada.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">Jorge Ferrada</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    Doctor; UPC Barcelona, España.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/andres-garces.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">Andrés Garcés</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    Doctor©; UPC Barcelona, España.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/ivan-ivelic.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">Iván Ivelic</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    Doctor; U. Rey Juan Carlos de Madrid, España.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/david-jolly.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">David Jolly</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    Doctor; UPC Barcelona, España.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/david-luza.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">David Luza</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    Doctor; UPC Barcelona, España.
                    Decano de la facultad
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/mauricio-puentes.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">Mauricio Puentes</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    Doctor; UPC Barcelona, España.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/isabel-margarita.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">Isabel Margarita Reyes</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/rodrigo-saavedra.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">Rodrigo Saavedra</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    Doctor; UPC Barcelona, España.
                    Director Escuela de Arquitectura y Diseño
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="pagina docente indice">
                    <div class="imagen-docente indice"><img class="ancho-maximo" src="<?php bloginfo('template_directory') ?>/img/salvador-zahr.jpg" alt="" /></div>
                    <div class="datos-docente indice">
                    <h4 class="rojo-claro h-sin-margen">Salvador Zahr</h4>
                    <h6>Arquitecto</h6>
                    </div>
                    <div class="resena-docente indice">
                    <p>
                    Arquitecto; P.U. Católica de Valparaíso, Chile.
                    Estudios de posgrado en Estructuras de Hormigón Armado; Politécnico de Milán, Italia.
                    </p>
                    </div>
                    </div>
                    </div>
                    </div> -->
                  </div>
                  
                  </div>
                 </article> 
               </div> <!-- bloque -->
            </div>
          </div>
        </div>
      </div>    
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
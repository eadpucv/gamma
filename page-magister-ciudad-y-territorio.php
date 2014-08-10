<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>
<?php 
  $cat_estudios_avanzados = 1953; // categoría genérica de estudios avanzados
  $cat_tesis_ciudad_territorio = 1951; //CATEGORÍA DE TÉSIS

  $latest_estudios_avanzados = new WP_Query( array('posts_per_page' => 6, 'category__in' => array($cat_estudios_avanzados)));
  $latest_tesis_ciudad_territorio  = new WP_Query( array('posts_per_page' => 6, 'category__in' => array($cat_tesis_ciudad_territorio))); //CATEGORÍA DE TÉSIS
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
              <div data-spy="affix" data-offset-top="270" data-offset-bottom='500'>
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
                                <img alt="First slide" title="posgrado ciudad y territorio" src='https://farm9.staticflickr.com/8156/7351693692_351b7339e0_h.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="Second slide" title="posgrado ciudad y territorio" src='https://farm8.staticflickr.com/7105/7351681078_dae73e97b6_h.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="posgrado ciudad y territorio" src='https://farm3.staticflickr.com/2351/3531788472_419cc0ed46_b.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="posgrado ciudad y territorio" src='https://farm5.staticflickr.com/4137/4777821696_3a6524bf14_b.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="posgrado ciudad y territorio" src='https://farm5.staticflickr.com/4076/4777187965_477b8df7b4_b.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="posgrado ciudad y territorio" src='https://farm3.staticflickr.com/2540/4010961697_48b528b4f8_b.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="posgrado ciudad y territorio" src='https://farm8.staticflickr.com/7081/7166447359_2a96aa6141_h.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                </div>
                <!-- Controles -->
                <a data-slide="prev" href="#carousel-example-generic" class="left carrera carousel-control"><i class="icn icn-nav-izq"></i></a>
                <a data-slide="next" href="#carousel-example-generic" class="right carrera carousel-control"><i class="icn icn-nav-der"></i></a>
            </div>
            <div class='bloque'>
              <article class="h-entry enunciado">
                <div class="e-content p-summary p-name carrera">
                  <div class='bloque' id="bloque_texto"><?php the_content(); ?>
                    <!-- contenido wp admin
                    <h2>Descripción del Magíster</h2>
                    <p>El propósito de este Magíster es transmitir a los alumnos el conocimiento generado en la Escuela de Arquitectura y Diseño desde su re-fundación en 1952 y desarrollado hasta hoy. Se trata entonces de transmitir una identidad construida en 60 años de observaciones y reflexiones desde un punto de vista original sobre la ciudad, la arquitectura y la vida.
                    Este conocimiento ha sido recogido por el magíster y formulado en tres módulos:</p>
                    <ol>
                      <li>El primer módulo trata el tema <strong>Ciudad</strong>, el orden urbano, su comprensión y fundamento. El estudio se hace sobre proposiciones y estudios realizados por la Escuela en Valparaíso, contextualizado con bibliografía y clases sobre temas urbanos, análisis urbano y apoyo metodológico.</li>
                      <li>El segundo módulo trata el tema <strong>Territorio</strong>, su construcción fundada en superposiciones de infraestructura sobre los mismos lugares, y su extensión en conformidad a los intereses culturales de las distintas épocas americanas: Indígena, colonial y colonial – republicana. Del mismo modo que en el módulo anterior, el estudio se hace sobre documentación original de las Travesías, contextualizada con bibliografía y clases sobre temas históricos, viales, económicos y poéticos, apoyados con metodología de análisis e información.</li>
                      <li>El tercer módulo es sobre el tema <strong>Habitación</strong>, sobre las transformaciones sociales y culturales y su repercusión en la ciudad y en la arquitectura. El estudio se hace también sobre documentación propia consistente en estudios urbanos y proposiciones urbanas y arquitectónicas, complementadas con bibliografía y clases sobre temas históricos, urbanos, arquitectónicos, sociológicos, antropológicos y poéticos.</li>
                    </ol>
                    <p>De este modo y bajo esta visión, se transmite a los alumnos del Magíster la identidad de la Escuela de Arquitectura y Diseño, manteniendo a la vez una interlocución con otros arquitectos y otras disciplinas para poder así ir más allá en la comprensión de la realidad del tiempo y espacio presente que hoy es que nos toca construir</p>
                    <h4>Perfil de Ingreso</h4>
                    <p>Los postulantes deben tener grado de licenciado o de estudios equivalentes, en universidades chilenas o extranjeras en las áreas de arquitectura, diseño, humanidades y geografía o áreas afines. Esta mención está orientada a investigadores, académicos y profesionales que se desempeñan o interesan en éstas áreas del sector público o privado.</p>
                    <h3>Requisitos de Postulación</h3>
                    <ul>
                      <li>Acreditar posesión de un grado académico de licenciado o título profesional equivalente relacionado con áreas de arquitectura, diseño, humanidades y geografía o áreas afines emitido por una universidad chilena o extranjera.</li>
                      <li>Entrevista con el fin de ponderar las aptitudes y conocimientos del postulante en relación con las exigencias del programa.</li>
                      <li>Entregar la siguiente documentación:</li>
                    </ul>
                    <ol>
                      <li>Copia del título profesional y/o grado académico o certificado de éstos, debidamente legalizados.</li>
                      <li>Carta de solicitud de ingreso.</li>
                      <li>Curriculum Vitae.</li>
                      <li>Formulario de postulación.</li>
                      <li>Certificado de Nacimiento.</li>
                    </ol>
                    <p>Certificados emitidos en el extranjero deben ser visados por el Consulado Chileno en el país de origen y posteriormente en el Ministerio de Relaciones Exteriores en Chile.</p>
                    <h4>Calendario de Postulación 2014</h4>
                    <h5>Primer Semestre 2014</h5>
                    <ul>
                      <li><strong>Diciembre 2013:</strong> Presentar copia del título profesional y/o grado académico, carta de solicitud de ingreso y curriculum vitae, hasta el viernes 20 de diciembre.</li>
                      <li><strong>Enero de 2014:</strong> Entrevista personal, segunda semana de enero (se comunicará oportunamente el día, hora y lugar).</li>
                      <li><strong>Marzo de 2014:</strong> Entrega de formulario de postulación y certificado de nacimiento, hasta el viernes 7 de marzo. Inicio de clases sábado 14 de marzo.</li>
                    </ul>
                    <h5>Segundo Semestre 2014</h5>
                    <ul>
                      <li><strong>Junio de 2014:</strong> Presentar copia del título profesional y/o grado académico, carta de solicitud de ingreso y curriculum vitae, hasta el viernes 27 de junio.</li>
                      <li><strong>Julio de 2014:</strong> Entrevista personal, segunda semana de julio (se comunicará oportunamente el día, hora y lugar). Entrega de formulario de postulación y certificado de nacimiento, hasta el viernes 25 de julio.</li>
                      <li><strong>Agosto de 2014:</strong> Inicio de clases sábado 8 de agosto.</li>
                    </ul>
                    <h2>Acerca del magíster</h2>
                    <h4>Duración del Magíster</h4>
                    Tres semestres más período de tesis.
                    <h4>Modalidad</h4>
                    <strong> </strong>Presencial. Viernes de 16:00 a 20:00 hrs. y sábado de 9:30 a 13:30 hrs.
                    <h4>Aranceles</h4>
                    <ul>
                      <li>Derecho Semestral de Inscripción: $79.000.-</li>
                      <li>Arancel de Matrícula del Programa, postulantes PUCV: U.F. 95</li>
                      <li>Arancel de Matrícula del Programa, postulantes otras Instituciones: U.F. 146</li>
                    </ul>
                    <h4>Entrega de documentación</h4>
                    Escuela de Arquitectura y Diseño, calle Matta 12, Recreo, Viña del Mar, Chile ó Magister Ciudad y Territorio, calle Latorre 65, Recreo, Viña del Mar, Chile. Dirigida a Magíster Ciudad y Territorio.

                    <strong>Para más información escribir a:<span style="color: #ff0000;"> jpurcell@ead.cl</span>
                    </strong>
                    <h2>Asignaturas</h2>
                    <h4>Primer Módulo: La Ciudad</h4>
                    <h6>ARQ700/02 Taller Ciudad-Territorio 1:</h6>
                    Tema A: Fundamento y comprensión del orden urbano
                    <ul>
                      <li>Proyecto Achupallas</li>
                    </ul>
                    Tema B: Crecimiento y extensión urbana
                    <ul>
                      <li>Una nota a los arquitectos</li>
                      <li>Crecimiento y extensión urbana</li>
                    </ul>
                    Tema C: Crecimiento y densificación urbana
                    <ul>
                      <li>El patrimonio de Valparaíso</li>
                      <li>Crecimiento y densificación urbana</li>
                    </ul>
                    Profesores: Juan Purcell y Mauricio Puentes
                    <h6>ARQ721/02 Introducción al análisis urbano:</h6>
                    Temas:
                    <ul>
                      <li>Metodologías que incorporen nuevas herramientas para el análisis urbano</li>
                      <li>Diagnósticos y análisis de contextos urbanos de transformación</li>
                      <li>Estudio y evaluación de las condiciones del metabolismo urbano</li>
                      <li>Análisis de la renta del suelo y el mercado del suelo</li>
                      <li>Evaluación de los equipamientos e infraestructuras como plusvalías</li>
                    </ul>
                    Profesor: Luis Álvarez
                    <h6>ARQ722/02 Temas de la Ciudad y Territorio:</h6>
                    Temas:
                    <ul>
                      <li>La periferia efímera de Valparaíso  | Profesor: Mauricio Puentes</li>
                      <li>Utopía del margen arquitectónico del Puerto de Valparaíso  |  Profesor: Jorge Ferrada</li>
                      <li>Las aguas de Valparaíso | Profesor: Marcelo Araya</li>
                      <li>El acto como contenido arquitectónico | Profesor: Claudio Villavicencio</li>
                      <li>Una aproximación al espacio desde “el afecto”  | Profesor: Fernando Espósito</li>
                      <li>La ciudad teatro | Profesor: Andrés Garcés</li>
                      <li>Los equipamientos culturales de Valparaíso  | Profesor: Iván Ivelic</li>
                      <li>Retazos Urbanos | Profesor: Juan Carlos Jeldez</li>
                      <li>Lectura en la Ciudad  | Profesora: Michèle Wilkomirsky</li>
                      <li>Comida en la Ciudad | Profesor: Ricardo Lang</li>
                      <li>Las redes virtuales | Profesor: Herbert Spencer</li>
                    </ul>
                    <h6>ARQ723/02 Métodos de investigación:</h6>
                    Temas:
                    <ul>
                      <li>Paradigmas de la creación del conocimiento</li>
                      <li>Principales temas, áreas o líneas de investigación</li>
                      <li>Capacidad de crear preguntas y problematizar el conocimiento</li>
                      <li>Formulación de proyectos de investigación</li>
                    </ul>
                    Profesora: Teresa Fernández
                    Profesor: Herbert Spencer
                    <h4>Segundo Módulo: El Territorio</h4>
                    <h6>ARQ704/02 Taller Ciudad-Territorio 2:</h6>
                    Tema A: Asentamientos y redes territoriales 1: Período indígena.
                    <ul>
                      <li>Travesías bajo la Cruz del Sur: Putre o el borde continental, 2001. Paraná o de los Bordes interiores 2003.</li>
                    </ul>
                    Tema B: Asentamientos territoriales y redes continentales 2: Período hispano.
                    <ul>
                      <li>Travesías bajo la Cruz del Sur: Chaco o del mar interior, 1986. Florianópolis o de los dos paralelos, 1987. La pampa y la cordillera o de los oficios, 1988. Usno o de las 7 luces del ancho de América, 1989.La mar chiquita o de los impedimentos y los pasos, 1991.</li>
                    </ul>
                    Tema C: Asentamientos territoriales y redes continentales 3: Período colonial-republicano.
                    <ul>
                      <li>Travesías bajo la Cruz del Sur: Los ferrocarriles o de lo tecnológico, 1996. Colchane o el corredor bi-oceánico, 1997. Iquitos o del Amazonas, 1998. San Pablo-Santa Cruz-Arica o el corredor tri-oceánico, 1999. Río de Janeiro-Brasilia o la recreación urbana, 2000.</li>
                    </ul>
                    Profesor: Juan Purcell
                    <ul>
                      <li>Metodología de comunicación</li>
                    </ul>
                    Profesora: Teresa Fernández
                    <h6>ARQ726/02 Análisis contextual:</h6>
                    Temas:
                    <ul>
                      <li>Manejo de escalas geográficas</li>
                      <li>Fundamentos de la Ciencia Regional</li>
                      <li>Conocimiento y aplicación de conceptos de sustentabilidad, desarrollo , ambiente y territorio</li>
                      <li>Conocer, aplicar y evaluar conceptos de integración, conectividad, accesibilidad en el territorio</li>
                    </ul>
                    Profesor: Luis Álvarez
                    <h6>ARQ727/02 Redes y Territorio:</h6>
                    Temas:
                    <ul>
                      <li>Las culturas originarias | Profesor: Virgilio Rodríguez</li>
                      <li>Los pueblos altiplánicos  | Profesora: Marcela Hurtado</li>
                      <li>El Capac Ñan  | Profesora: Marcela Hurtado</li>
                      <li>Los pueblos ribereños | Profesora: Ximena Urbina</li>
                      <li>La imagen de América | Profesora: Ximena Urbina</li>
                      <li>La expansión territorial y el sistema colonizador castellano | Profesora: Ximena Urbina</li>
                      <li>La fundación del territorio | Profesor: Santiago Lorenzo</li>
                      <li>América desde Amereida | Profesor: David Jolly</li>
                      <li>Arquitectura historicista | Profesor: José de Nordenflycht</li>
                      <li>El desarrollo del ferrocarril en América del Sur y su vinculación con el desarrollo de las ciudades                Profesor: Ian Thomson</li>
                      <li>Morfología continental  | Profesora: Consuelo Castro</li>
                      <li>Conectividad y desarrollo urbano | Profesora: Lorena Herrera</li>
                      <li>Los viajes, una forma de estudiar | Profesor: Rodrigo Saavedra</li>
                      <li>La Historia de Chile a través del PIB | Profesor: Rodrigo Navia</li>
                      <li>Estado, fronteras y conflictos siglo XIX y siglo XX  | Profesor: Eduardo Araya</li>
                      <li>Ejes de tratados latinoamericanos | Profesor: Eduardo Araya. Colaborador: Francisco Collado</li>
                    </ul>
                    <h6>ARQ728 Bases de datos:</h6>
                    Temas:
                    <ul>
                      <li>Sistemas de matrices de datos</li>
                      <li>La validación de los sistemas de matrices de datos disponibles</li>
                      <li>Manejo de matrices de datos a través de aplicaciones computacionales</li>
                    </ul>
                    Profesores: Luis Álvarez y Carlos Valdebenito
                    <h6>ARQ705/02 Poética Travesías:</h6>
                    Profesor: Manuel Sanfuentes
                    <h4>Tercer Módulo: La Habitación</h4>
                    <h6>ARQ709/02 Taller Ciudad-Territorio 3:</h6>
                    <ul>Tema A: Forma arquitectónica y orden urbano</ul>
                    <ul>
                      <li>Enfoque urbanístico a propósito del terminal de la carretera internacional Mendoza-Valpo</li>
                      <li>Antecedentes para ubicar obras arquitectónicas en el puerto</li>
                      <li>Un punto de vista para la orientación de las ciudades - puerto en Chile</li>
                      <li>Visión urbana del borde costero: el campo de dunas</li>
                    </ul>
                    Tema B: Habitación urbana y forma arquitectónica
                    <ul>
                      <li>La plaza larga del Mar</li>
                      <li>Una propuesta urbanística para el crecimiento de Valparaíso</li>
                      <li>Patrimonio arquitectónico de Valparaíso: estudio de la casa</li>
                    </ul>
                    Profesor: Juan Purcell<strong> </strong>
                    <ul>
                      <li>Metodología de comunicación</li>
                    </ul>
                    Profesora: Teresa Fernández
                    <h6>ARQ731/02 Teoría de la vivienda y el hábitat:</h6>
                    Temas:
                    <ul>
                      <li>Origen de la ciudad hispanoamericana | Profesora: Ximena Urbina</li>
                      <li>La vida rural en Chile</li>
                      <li>Etapa o ciclo rural centrado en la hacienda | Profesor: Rodolfo Urbina</li>
                      <li>La casa urbana y la casa rural</li>
                      <li>La ciudad y la casa | Profesor: Juan Purcell</li>
                      <li>Expansión de la frontera homínida en la construcción</li>
                      <li>Al margen de la ciudad  | Profesores: Leonardo Vera y Fernando Cosio</li>
                    </ul>
                    <h6>ARQ732/02 Sociología y antropología del habitar:</h6>
                    Temas:
                    <ul>
                      <li>Las transformaciones en la periferia de la ciudad | Profesor: Mauricio Puentes y Carolina Naranjo</li>
                      <li>Destinación e instrumental del arquitecto en la ciudad | Profesor: Jaime Márquez</li>
                      <li>Municipalidad de Providencia, Territorio y Ciudad  | Profesor: Jaime Márquez</li>
                      <li>El poder, la ley y la estructura administrativa | Profesor: Jaime Márquez</li>
                      <li>30 viviendas mínimas en Valparaíso, aproximaciones a una experiencia de investigación cualitativa y transdisciplinaria | Profesoras: Carolina Naranjo y Ana Rojas</li>
                      <li>Conceptos sobre Eficiencia Energética a Escala Urbana</li>
                      <li>Casos Emblemáticos del Reino Unido en Materia de Eficiencia Energética | Profesora: Alejandra Cortés</li>
                      <li>Habitar en territorios vulnerables; hacia una integración socioespacial con identidad | Profesora: Mabel Alarcón</li>
                      <li>Gestión urbana ecosistémica | Profesor: Pablo Andueza</li>
                      <li>La Ciudad Abierta de Amereida: Arquitectura desde la hospitalidad | Profesor: Patricio Cáraves</li>
                    </ul>
                    <h6>ARQ710/02 Poética Ciudad Abierta</h6>
                    Profesor: Manuel Sanfuentes
                    <h2>Contacto y formulario</h2>
                    [contact-form 5 "Formulario Ciudad y Territorio"]
                  <h2>Profesores</h2>
                <div class='fila'>
                  <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
                    <div class='pagina docente indice '>
                      <div class='imagen-docente indice'>
                       <img class='ancho-maximo' src='https://farm4.staticflickr.com/3582/3483598091_668e5cac6a_q.jpg'>
                      </div>
                      <div class='datos-docente indice'>
                       <h4 class='rojo-claro h-sin-margen'>Juan Purcell</h4>
                       <h6>Arquitecto</h6>
                      </div>
                      <div class='resena-docente indice'>
                       <p>Arquitecto Pontificia Universidad Católica de Valparaíso, Director del Programa.</p>
                      </div>
                    </div>
                  </div>
                  <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
                 <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='http://www.filosofiayeducacion.ucv.cl/wp-content/uploads/2012/03/urbina-web.jpg'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>María Ximena Urbina</h4>
                  <h6>Doctora en Historia</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Doctora en Historia de América por la Universidad de Sevilla, 2006 Diploma de Estudios Avanzados, Universidad de Sevilla, 2005 Magíster en Historia, mención Historia del Arte y de la Cultura, PUCV , 2001 Licenciada en Historia y Geografía, PUCV, 1995 Profesor de Historia y Geografía, PUCV, 1996. </p>
                </div>
              </div>
              </div>
              <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='https://farm8.staticflickr.com/7220/7171615052_2a29d54806_q.jpg'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Rodrigo Saavedra</h4>
                  <h6>Arquitecto</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Director de la Escuela de Arquitectura y Diseño. Licenciado en Arquitectura PUCV 1996, Título de Arquitecto PUCV 1996, Título Doctor-arquitecto 2007 UPC, Universidad Politécnica de Cataluña, España. Ganador de Investigaciones internas PUCV. Ha publicado en revistas de Chile y el extranjero.</p>
                </div>
              </div>
            </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='https://farm8.staticflickr.com/7223/7176564182_b19fd32326_q.jpg'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Mauricio Puentes</h4>
                  <h6>Arquitecto</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Secretario Académico de la Escuela de Arquitectura y Diseño. Licenciado en Arquitectura PUCV 1996, Título de Arquitecto PUCV 1996, Título Doctor-arquitecto 2008 UPC, Universidad Politécnica de Cataluña, España. Ganador de investigaciones internas PUCV. Ha publicado en revistas de Chile y el extranjero.</p>
                </div>
              </div>
            </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='http://prensa.ucv.cl/wp-content/uploads/2012/11/Luis-Alvarez.jpg'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Luis Álvarez</h4>
                  <h6>Geógrafo</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Magíster en Urbanismo, Universidad de Chile. 2006. Sistema de Información Geográfica, Departamento de Sensores Remotos y SIG. Pontificia Universidad Católica de Chile. 1992, Santiago Departamento de Censores Remotos y Sistemas de Información Geográfica. Centro de Estudios Espaciales, Universidad de Chile. 1989, Santiago. Pedagogo en Geografía e Historia, PUCV. Titulo Profesional: Profesor, 1990. </p>
                </div>
              </div>
            </div>
                  </div>

                     fin contenido wp-admin -->
                  <h2>Proyecto de tésis recientes</h2>
                    <div class='fila'>
                      <?php if( $latest_tesis_ciudad_territorio->have_posts() ) : while( $latest_tesis_ciudad_territorio->have_posts() ) : $latest_tesis_ciudad_territorio->the_post(); ?>
                    <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 5 --> <!-- <h5><a href='<?php echo get_category_link(35); ?>' class='categoria-titulo noticias'>Magister Náutico y Marítimo</a></h5>-->
                      <a href='<?php the_permalink() ?>' class='bloque-enlace portada magister'>
                        <div class='franja-seguir fija'>
                          <p>seguir leyendo <i class='icn icn-lentes-lig icn-md'></i></p>
                        </div>
                        <div class='seguir-leyendo-cuadro'>
                          <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
                        </div>
                        <div class='prev-imagen sm'>
                          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); 
                            if ($image) : ?>
                              <img src="<?php echo $image[0]; ?>" alt="" class="ancho-maximo" />
                          <?php endif; ?> 
                        </div>
                        <h6 class='h-sin-margen'><?php the_title(); ?></h6>
                        <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                        <p class='rojo-claro'><?php the_excerpt(); ?></p>
                      </a>
                    </div><!-- fin reciente nautico y maritimo -->
                    <?php endwhile; endif; ?>
                  </div>
                    <h2>Publicaciones recientes</h2>
                    <div class='fila'>
                      <?php if( $latest_estudios_avanzados->have_posts() ) : while( $latest_estudios_avanzados->have_posts() ) : $latest_estudios_avanzados->the_post(); ?>
                    <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 noticia-portada'><!-- noticia 5 --> <!-- <h5><a href='<?php echo get_category_link(35); ?>' class='categoria-titulo noticias'>Magister Náutico y Marítimo</a></h5>-->
                      <a href='<?php the_permalink() ?>' class='bloque-enlace portada magister'>
                        <div class='franja-seguir fija'>
                          <p>seguir leyendo <i class='icn icn-lentes-lig icn-md'></i></p>
                        </div>
                        <div class='seguir-leyendo-cuadro'>
                          <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
                        </div>
                        <div class='prev-imagen sm'>
                          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); 
                            if ($image) : ?>
                              <img src="<?php echo $image[0]; ?>" alt="" class="ancho-maximo" />
                          <?php endif; ?> 
                        </div>
                        <h6 class='h-sin-margen'><?php the_title(); ?></h6>
                        <aside class='entry-details'>Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?></aside>
                        <?php the_excerpt(); ?>
                      </a>
                    </div><!-- fin reciente nautico y maritimo -->
                    <?php endwhile; endif; ?>
                  </div>
                </div>
              </article> 
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
<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>
<?php 
  $cat_estudios_avanzados = 1953; // categoría genérica de estudios avanzados
  $cat_tesis_nautico_maritimo = 1950; //CATEGORÍA DE TÉSIS

  $latest_estudios_avanzados = new WP_Query( array('posts_per_page' => 6, 'category__in' => array($cat_estudios_avanzados)));
  $latest_tesis_nautico_maritimo  = new WP_Query( array('posts_per_page' => 6, 'category__in' => array($cat_tesis_nautico_maritimo))); //CATEGORÍA DE TÉSIS
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
                                <img alt="First slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-3.jpg'>
                            </div>
                        </div>
                    </div>
                    <!--<div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="Second slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-2.jpg'>
                            </div>
                        </div>
                    </div>-->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-6.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-4.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-5.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="posgrado nautico y maritimo" src='<?php bloginfo('template_directory') ?>/img/nautico-maritimo-1.jpg '>
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
                    <h2>Origen y fundamento</h2>
                    <p>El Pacífico ha sido el fundamento esencial de refundación de esta Escuela, desde el año 1952. Valparaíso y su destino marítimo es la materia de estudio y de obra, en la concepción de la arquitectura, el urbanismo y el diseño.</p>
                    <p>La obtención de dos proyectos Fondecyt 1993 y 1998, para el estudio y construcción de una Embarcación Experimental para la Patagonia, se constituyó en una experiencia fundamental para la creación de esta mención.</p>
                    <p>Este Magister se acoge al programa anual de Travesías de la Escuela, con experiencias de navegación y visitas a laboratorios, astilleros, marinas y puertos, tanto en Chile, como en el extranjero.</p>
                    <p>Para el País este es un campo esencial para su desarrollo y representa la mayor proyección y desafío. Los 4.500 Km. de litoral en el océano pacífico, que ocupa prácticamente la mitad del globo terráqueo, con mares abiertos y semi protegidos y con las mayores reservas de alimentos, minerales y energías. El 95% del transporte de carga en el mundo se realiza vía marítima. El desarrollo de la acuicultura en la X Región; los conceptos “corredor bi-oceánico”, “Asia-Pacífico”, son campos emergentes de grandes posibilidades.</p>
                    <p>No existen programas de postgrado en la mención Náutico y Marítimo en el país. Esto sitúa a la Universidad y a la región, pioneras en la formación, tanto académica como profesional, en la habitabilidad y desarrollo marítimo de Chile.</p>
                    <h4>Bibliografía esencial</h4>
                    <ul>
                      <li>A. 1952: “Achupallas”: Por primera vez se plantea que el destino de Valparaíso está en el mar. El proyecto y su tesis crea una estructura urbana de vías que conecten Achupallas con el borde marítimo.</li>
                      <li>B. 1964: “Amereida”: Proclamación de la épica americana en que el “OcéanoPacífico” y el “Mar Interior de América” (extensión deshabitada y sin fundacióndel interior de América del del sur) son los dos grandes desconocidos que nuestro continente no ha asumido como posible destino americano.</li>
                      <li>C. 1970: “Tesis del Pacífico”: Se fundamentan las carencias históricas de Chile y América de no haber asumido la realidad del Océano Pacífico.</li>
                      <li>D. 1970: “Teoría de Maritorio”: Plantea que la fundación de la Patagonia occidental (mar pacífico interior) tiene que ser visto como un territorio.</li>
                      <li>E. 1982: “Aysén Carta del mar nuevo”: Visión, de Aysén como tierra de la “Trapananda”, que según su etimología es trampa, engaño y cárcel y que aún no resuelve esta nominación, a pesar de haber entrado al siglo XXI.</li>
                      <li>F. 1984: “Nuestra Latitud Patagonia”: Visión de la Patagonia Occidental a partir de la teoría de maritorio y su posibilidad fundacional.</li>
                      <li>G. “Embarcación Amereida y la épica de fundar el mar patagónico”: suerte de bitácora del proyecto de una embarcación experimental, con la participación de alumnos y profesores, que va desde su concepción hasta su realización.</li>
                    </ul>
                    <h2>Sobre lo náutico</h2>
                    <p>A. Embarcaciones con sistema impulsor y capacidad de desplazamiento: monocascos, catamaranes, trimaranes, hidrofoils, yates, aerodeslizadores, lanchas.</p>
                    <p>B. Artefactos flotantes estáticos ubicados normalmente en el borde costero: muelles, diques, jaulas de cultivos, plataformas, boyas, etc.</p>
                    <h2>Sobre lo marítimo</h2>
                    <p>La dimensión regional, nacional e internacional del territorio marítimo: lagos, mares, ríos, océanos. El encuentro de mar, tierra y ciudad – el borde costero- y las obras e instalaciones que permiten hacer habitable este encuentro: puertos, marinas, balnearios, caletas, paseos, asentamientos ribereños, etc.</p>
                    <h2>Objetivos de la mención</h2>
                    <h4>Objetivo general</h4>
                    <p>Se quiere formar graduados que incrementen su capacidad creativa y teórica, adquiriendo además, competencias científicas y técnicas. Capacidades que le permitan diseñar objetos náuticos y proyectos marítimos, trabajando en la dimensión del territorio oceánico y del borde litoral, a fin de lograr coordinar estas capacidades, con un pensamiento crítico sustentable, en el contexto de una visión de país.</p>
                    <h4>Objetivos específicos</h4>
                    <ul>
                      <li>Capacidad creativa e innovadora realizando proyectos en la habitabilidad de los objetos náuticos y del territorio marítimo. Esto es la presencia del hombre desde su condición física y su trascendencia a través de la obra, para sostener una permanencia en un medio no natural a él y en un territorio complejo.</li>
                      <li>Competencia científica y de investigación con la adquisición de una visión de los mares y océanos, para generar planteamientos y proyectos de habitabilidad sustentable, en la extensión de los territorios conocidos y desconocidos (declarados inhóspitos) y tomar conciencia de su integración al país.</li>
                      <li>Competencia técnica y profesional con la adquisición de conocimientos de teoría de buque y teoría marítima, que le permita establecer instancias de diálogo, consultas y cálculo con todos los profesionales y técnicos en materias náuticas y marítimas: Arquitectos Navales, Ingenieros Navales, Armadores, Geógrafos, Oceanógrafos.</li>
                    </ul>
                    <h2>Postulación y aranceles</h2>
                    <h4>Requisitos de Postulación</h4>
                    <ol>
                      <li>Poseer un grado académico o un título profesional equivalente, relacionado con la arquitectura, el diseño o áreas afines.</li>
                      <li>Entrevista con el fin de ponderar las aptitudes y conocimientos del postulante en relación con las exigencias del <a href='http://www.ead.pucv.cl/magister/magister-nautico-y-maritimo/programa-de-estudios/'>programa.</a></li>
                    </ol>
                    <p>Primera postulación hasta el 20 de Enero de cada año, y segunda postulación hasta el 29 de Junio de cada año. Entregar, en la sede de le Escuela, los siguientes documentos:</p>
                    <ul>
                      <li>Solicitud de postulación.</li>
                      <li>Copia certificada de Grado y Título.</li>
                      <li>Certificado concentración de notas.</li>
                      <li>Certificado de Naciemiento.</li>
                    </ul>
                    <h4>Arancel</h4>
                    <ul>
                      <li>Derecho semestral de inscripción: UF 3,12 (semestral).</li>
                      <li>Arancel de matrícula del programa Postulantes PUCV: UF 95</li>
                      <li>Arancel de matrícula del programa Postulantes otras universidades: UF 146</li>
                    </ul>
                    <p>Mayores antecedentes e informaciones contactarse con el profesor Boris Ivelic K.</p>
                    <h4>Contacto y formularios</h4>
                    [contact-form-7 id="25867" title="Formulario Náutico y marítimo"]
                    <h2>Asignaturas</h2>
                    <p><a href='http://www.ead.pucv.cl/magister/magister-nautico-y-maritimo/programa-de-estudios/'>Programa de estudios</a></p>
                    <h4>Visión oceánica</h4>
                    <p><a href='http://www.ead.pucv.cl/?p=25860'>Enlace al curso</a></p>
                    <p>Este curso tiene por objetivo entregar al alumno una visión de los mares y océanos de la tierra y su incidencia humana, de habitabilidad; geográfica; climática; económica; estratégica; de transporte; de flora y fauna. Asimismo, entregar al alumno una visión del borde costero o litoral y su incidencia en el urbanismo y la ciudad. También cuidamos la capacidad del alumno de asimilar estas materias y llevarlas al fundamento de sus tesis y de sus proyectos. </p>
                    <h4>Poética general</h4>
                    <p><a href='http://www.ead.pucv.cl/?p=25856'>Enlace al curso</a></p>
                    <p>La poesía celebra el hecho de los oficios, su obrar, su presente y su posible trascendencia. Esa celebración nos ha sido esencial a la hora de hacer Escuela. Sin embargo, esta celebración no es materia de una asignatura, sino el presente al que se asiste libremente. El método con el que se imparte actualmente el Taller de Amereida, me parece, se inscribe en el ámbito de la celebración y de los actos comunes que realizamos para constituirnos como pueblo; pero este método no persigue ni el estudio ni la investigación. Una cosa es el ámbito universitario y otra cosa son las asignaturas. </p>
                    <h4>Área creativa</h4>
                    <h5>ARQ 700 Taller Náutico y Marítimo. 10 créditos</h5>
                    <h6>Objetivos</h6>
                    <ul>
                    <li>Aumentar la capacidad creativa, con la realización de proyectos y prototipos, náuticos y marítimos.</li>
                    <li>Capacidad de verificación de las hipótesis de los proyectos, mediante  realización de pruebas con modelos a escala reducida,  en canal de prueba,  canal de olas, túnel de viento, túnel hidrodinámico y  en plataforma marítima.</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <p>Al taller acompañan materias que se entregan en forma lectiva y en seminarios:</p>
                    <ul>
                    <li>Concepto de Macrohabitabilidad y Microhabitabilidad en la náutica.</li>
                    <li>Las cualidades intrínsecas o peculiares de los objetos náuticos y marítimos.</li>
                    <li>La observación, el acto y la forma.</li>
                    </ul>
                    <h5>ARQ 704 Taller de Proyectos 2 Náutico y Marítimo. 10 créditos</h5>
                    <h4>Objetivos</h4>
                    <p>El taller tiene una continuidad que abarca los tres semestres.  Luego, los  objetivos  tienen la misma descripción general de ARQ 700.
                    Realización de una travesía, cuyos objetivos son los siguientes:</p>
                    <ul>
                    <li>Visita a astilleros y talleres, en el proceso  constructivo  de  embarcaciones de distintos calados  y   materiales. (Valparaíso, Talcahuano, Valdivia, Puerto Montt, Puerto Varas).</li>
                    <li>Navegación a bordo embarcaciones lanchas,  veleros, catamaranes, etc.</li>
                    <li>Visitas a puertos, marinas, bordes marítimos y obras ligadas a los proyectos marítimos que se realizan.</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <p>Materias teóricas de reflexión, en forma lectiva y de seminarios:</p>
                    <ul>
                    <li>Conocimientos de la bibliografía esencial (ver1) 
                    <li>Obras del patrimonio internacional:
                    El  plan  Delta  en Holanda;  Puerto de Rótterdam;  Puerto de Hamburgo;  La  ciudad de Venecia; Las ciudades ribereñas del archipiélago Croata; El casco  antiguo  de Dubrovnik en Croacia; El puerto y litoral de Helsinki; Las ciudades del archipiélago Noruego; El canal de Panamá; el puerto de Barcelona.<li>
                    </ul>
                    <h5>ARQ 709 Taller de Proyectos 3 Náutico y Marítimo. 5 créditos</h5>
                    <h6>Objetivos</h6>
                    <p>Como  se  explicó   anteriormente,  el  taller y  los  proyectos  tienen  cotinuidad   durante  los  tres  semestres. 
                    En este semestre se  trata  de  profundizar    el  trabajo  de  modelos, ampliando el abanico a todas las formas de energía. Se realizan pruebas con equipos de laboratorio y modelos para cada una de las energías que se analiza en los proyectos: <p>
                    <ol>
                    <li>Modelos de simulación sísmica</li>
                    <li>Modelos de simulación luminosa</li>
                    <li>Modelos de simulación acústica</li>
                    <li>Modelos de simulación climática</li>
                    </ol>
                    <h6>Contenidos</h6>
                    <ul>
                    <li>Introducción a la teoría de modelos</li>
                    <li>Modelos que muestran  el comportamiento de las leyes físicas: Mecánica, hidráulica, neumática, Calor, Sonido, Luz.</li>
                    <li>Casos de obras ejemplares de la arquitectura, el diseño y la náutica que innovan en el tratamiento que toma cada una de las energías.</li>
                    </ul>
                    <h4>Área técnica</h4>
                    <h5>ARQ 702 Teoría Náutica 1. 3 créditos</h5>
                    <h6>Objetivos</h6>
                    <ul>
                    <li>Conocimientos específicos de Teoría de Buque en su aspecto hidrostático y
                    procedimientos de cálculo.</li>
                    <li>Lenguaje de comunicación con los especialistas, para la determinación de cálculos complejos.</li>
                    <li>Capacidad de aplicar los conceptos de estabilidad, a los proyectos de habitabilidad que realizan los alumnos, incorporándolos creativamente.</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <ul>
                    <li>Plano de líneas: sistema de representación de la forma del casco.</li>
                    <li>Flotabilidad.</li>
                    <li>Puntos notables de las naves.</li>
                    <li>Estabilidad Transversal.</li>
                    <li>Curvas hidrostáticas.</li>
                    <li>Experimento de inclinación.</li>
                    <li>Curvas cruzadas.</li>
                    <li>Estabilidad, Normas Omi.</li>
                    <li>Asiento, Estabilidad longitudinal.</li>
                    <li>Solución al caso real de carga de una nave</li>
                    </ul>

                    <h5>ARQ 703 Construcción y Estructura Náutica. 2 créditos</h5>
                    <h6>Objetivos</h6>
                    <ul>
                    <li>Adquisición de conocimientos teóricos de los procesos constructivos y productivos de los objetos flotantes, fabricados con distintos materiales.</li>
                    <li>Adquisición de conocimientos de teoría estructural de cascos.</li>
                    <li>Adquisición de conocimientos constructivos y de funcionamiento de los sistemas de gobierno (timones) y de la planta impulsora: motor, eje, hélice</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <ul>
                    <li>Construcción de embarcaciones en distintos materiales.</li>
                    <li>Esfuerzo estructural sobre el casco. El barco como viga y los esfuerzos mecánicos.</li>
                    <li>Entrada a dique y varada.</li>
                    <li>Inundación de compartimentos.</li>
                    <li>Timones.</li>
                    <li>Hélices y propulsión.</li>
                    </ul>

                    <h5>ARQ 706 Teoría Náutica 2. 3 créditos</h5>
                    <h6>Objetivos</h6>
                    <ul>
                    <li>Se trata de adquirir conocimientos de Teoría de Buque en el aspecto hidrodinámico y su aplicación empírica, que le permitan a los magísteres estudiar la habitabilidad, sin transgredir estas solicitaciones, sino que incorporarlas plenamente a los proyectos que realizan.</li>
                    <li>Lenguaje de comunicación con los especialistas, para la determinación de cálculos complejos.</li>
                    <li>Capacidad de realizar modelos a escala para su estudio, verificación y cálculo de potencia, en el canal de pruebas, túnel hidrodinámico, túnel de viento, túnel de olas y sus posteriores correcciones de perfeccionamiento</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <ul>
                    <li>Introducción a la Mecánica de los fluidos</li>
                    <li>Modelo y Prototipo. Leyes de semejanza</li>
                    <li>Arrastre y sustentación</li>
                    <li>Resistencia de arrastre de una embarcación</li>
                    <li>Potencia de una embarcación</li>
                    <li>Laboratorio de hidráulica naval</li>
                    <li>Teoría de Hélices. Números adimensionales</li>
                    <li>Rendimientos mecánicos de una embarcación</li>
                    </ul>

                    <h5>ARQ 707 Construcción y estructura náutica 2. 2 créditos</h5>
                    <h4>Objetivos</h4>
                    <ul>
                    <li>Verificar en terreno los conocimientos teóricos adquiridos en ARQ 703, visitando Astilleros y Talleres en la construcción de embarcaciones y artefactos flotantes.</li>
                    <li>Capacidad de registrar lo observado y aplicarlos a los proyectos que realizan.</li>
                    <li>Capacidad de establecer distingos entre las diferentes embarcaciones y su materialidad con sus cualidades comparativas: magnitudes, pesos, costos, procesos, tiempos, durabilidad.</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <p>Las visitas a Astilleros se realiza durante el segundo semestre y en el tiempo de travesía Se visitan astilleros de gran capacidad productiva, con embarcaciones de gran magnitud (Asmar Valparaíso y Talcahuano, Asenab de Valdivia, Detroit de Puerto Montt). Asimismo
                    se visitan talleres artesanales, con distintas capacidades productivas y en distintos materiales y magnitudes. (En Valparaíso, Valdivia, Puerto Montt, Chiloé).</p>

                    <h5>ARQ 711 Teoría marítima. 3 créditos</h5>
                    <h4>Objetivos</h4>
                    <ul>
                    <li>Adquirir conocimientos teóricos del comportamiento hidráulico, que inciden en proyectos específicos de puertos, ríos urbanos, marinas, balnearios, playas, paseos de borde, molos, muelles fijos y flotantes, represas, etc.</li>
                    <li>Adquisición de lenguaje técnico hidráulico, que permita comunicación con las distintas especialidades, en asesorías y cálculos específicos.</li>
                    <li>Dominio de análisis dimensional y leyes de semejanzas, para la simulación de modelos de pruebas, en los proyectos que se realizan.</li>
                    <li>Conocimientos de organización y mecanización portuaria e información de las tendencias actuales, en los principales puertos del mundo.</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <ul>
                    <li>Teoría de fluídos, planteamientos de Euler y Lagrange.</li>
                    <li>Ecuación de movimiento. Ecuación de continuidad. Ecuación de Bernoulli.</li>
                    <li>Cantidad de movimiento</li>
                    <li>Superficies libres</li>
                    <li>Análisis dimensional y semejanza. Números adimensionales: Reynolds, Froude.</li>
                    <li>Ecuaciones de Manning y Chezi. Teoría de flujos en canal abierto.</li>
                    <li>Teoría de oleaje.</li>
                    </ul>

                    <h5>ARQ 712 Construcción y Estructura Marítima. 3 créditos</h5>
                    <h6>Objetivos</h6>
                    <ul>
                    <li>Adquisición de conocimientos fundamentales, de los sistemas de defensa ante la interacción hidrodinámica con estructuras fijas y flotantes de océanos, mares y ríos en los bordes habitados.</li>
                    <li>Adquisición de lenguaje de comunicación con los especialistas para el cálculo y desarrollo de proyectos de protección del borde marítimo y su incidencia en los objetos flotantes.</li>
                    <li>Capacidad de realización de modelos a escala reducida para pruebas del comportamiento hidrodinámico de las obras propuestas y su resistencia al embate de olas, corrientes, erosiones, etc.</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <ul>
                    <li>Sistemas de muros de contención, en geotextil, gaviones, hormigón armado, tierra armada, etc.</li>
                    <li>Sistemas de defensas al oleaje, fijos y flotantes.</li>
                    <li>Sistemas constructivos de molos y muelles fijos y flotantes.</li>
                    <li>Sistemas de compuertas, inflables, de acero, flotantes, y con distintas geometrías de funcionamiento.</li>
                    <li>Sistemas y maquinarias de dragado.</li>
                    <li>Mecanización portuaria. Tecnología de los sitios de atraque.</li>
                    </ul>
                    <h4>Área teórica</h4>
                    <h5>ARQ 701 Introducción a los sistemas marítimos. 3 créditos</h5>
                    <h6>Objetivos</h6>
                    <ul>
                      <li>Conocimiento y dominio de los distintos aspectos que inciden en el diseño de un elemento flotante.</li>
                      <li>Capacidad de diseñar un artefacto flotante, planteando las coordenadas particulares para ese encargo específico (espiral de diseño).</li>
                      <li>Capacidad de asimilar los conceptos teóricos del curso, que contribuyan a la formulación de la Tesis</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <ul>
                      <li>Introducción a los sistemas marítimos.</li>
                      <li>Aproximación al diseño; requerimientos de alto nivel; espiral de diseño.</li>
                      <li>Objetos náuticos: presentación de un power-point con tipos y magnitudes de artefactos navales y sus características específicas.</li>
                      <li>Las coordenadas técnicas en el diseño de un elemento flotante.</li>
                      <li>Aproximación a los estudios paramétricos.</li>
                      <li>Cuadro comparativo entre embarcaciones, con sus características de resistencia velocidad, estabilidad, habitabilidad, tara, carga, función y costo: monocasco, catamarán, trimarán, hidroala, aerodeslizador,</li>
                      <li>Distingos entre lo náutico y lo marítimo.</li>
                      <li>Políticas de seguridad, legislación marítima y descontaminación.</li>
                      <li>La Industria de la construcción naval a nivel nacional e internacional.</li>
                    </ul>
                    <h5>ARQ 705 Poética General 1. 2 créditos</h5>
                    <h6>Objetivos</h6>
                    <ul>
                      <li>Concebir a Chile como un Archipiélago, desde una visión histórica y poética.</li>
                      <li>Conocer los textos fundamentales que dan sentido al mar, desde la visión de la poesía.</li>
                      <li>Definir el concepto de “épica marítima”. Esto es conocer las diferentes aventuras o empresas épicas llevadas adelante por la humanidad a través de su historia. Por ejemplo la épica de los grandes descubrimientos geográficos o la épica ballenera.</li>
                      <li>Conocer las grandes “ciudades de aguas” de la historia, desde una visión poética. Desde la Atlántida y Utopía hasta las ciudades modernas como Dubai o Venecia.</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <ul>
                      <li>La épica ballenera: análisis y estudio de las particularidades de “Moby Dick”.</li>
                      <li>Los poemas esenciales de obra a los mares: S.T. Coleridge, Ignacio Balcells, Friedrich Hölderlin, Derek Walcott, etc.</li>
                      <li>Las tesis y escritos poéticos fundamentales que han sido desarrolladas por nuestra Escuela durante los últimos 50 años.</li>
                      <li>La tesis “Chile es un Archipiélago”, de Jaime Reyes.</li>
                    </ul>
                    <h5>ARQ 710 Poética General 2. 2 créditos</h5>
                    <h6>Objetivos</h6>
                    <ul>
                      <li>Aprender a escribir una tesis de magister. Aprender todos los aspectos y las condiciones técnicas de la escritura de una tesis, desde el sistema de numeración de capítulos y acápites hasta el modo de presentar bibliografía.</li>
                    </ul>
                    <h6>Contenidos</h6>
                    <ul>
                      <li>El trato que el poema Amereida tiene con el mar.</li>
                      <li>La revisión de las tesis de los propios alumnos. Clase a clase los estudiantes exponen sus avances en la escritura de sus tesis.</li>
                    </ul>
                    <p>(se pueden ver los contenidos de esta asignatura en <a href="http://wiki.ead.pucv.cl/index.php/Poética_de_las_Aguas" target="_blank">Casiopea, Poética General</a>).</p>

                    <h5>ARQ 708 Visión oceánica. 3 créditos</h5>
                    <h6>Objetivos</h6>
                    <ul>
                      <li>Entregar al alumno una visión de los mares y océanos de la tierra y su incidencia humana, de habitabilidad, geográfica, climática, económica, estratégica, de transporte, de flora y fauna.</li>
                      <li>Entregar al alumno una visión del borde costero o litoral y su incidencia en el urbanismo y la ciudad.</li>
                      <li>Capacidad del alumno de asimilar estas materias y llevarlas al fundamento de sus tesis y de sus proyectos.</li>
                    </ul>
                    <h4>Contenidos</h4>
                    <ul>
                      <li>El planeta tierra</li>
                      <li>La exploración del océano</li>
                      <li>Tectónica de las placas</li>
                      <li>Los fondos marinos</li>
                      <li>Características y propiedades del océanoActuales usos del océano y sus consecuencias</li>
                      <li>La zona costera</li>
                      <li>Potencialidades energéticas del océano</li>
                      <li>Aspectos jurídicos del océano</li>
                      <li>La vida en el mar</li>
                    </ul>
                    <p>(Se pueden ver los contenidos de esta asignatura en <a href="http://wiki.ead.pucv.cl/index.php/Visión_Oceánica" target="_blank">Casiopea, Visión Oceánica</a>).</p>             
                      <h2>Enlaces relacionados</h2>
                    <h4>Embarcación Amereida</h4>
                    <p><a href='http://www.ead.pucv.cl/2005/embarcacion-amereida/'>Embarcación Amereida</a></p>
                    <p>Uno de los grandes proyectos que ha realizado la Escuela de Arquitectura y Diseño, es la embarcación Amereida. Este experimental barco, se distingue por su maniobrabilidad, utilidad e infraestructura.</p>
                    <h4>Laboratorios de modelos</h4>
                    <p><a href='http://www.ead.pucv.cl/magister/magister-nautico-y-maritimo/infraestructura/'>Infraestructura de laboratorios de modelos</a></p>
                  <h2>Profesores</h2>
                <div class='fila'>
                  <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
                    <div class='pagina docente indice '>
                      <div class='imagen-docente indice'>
                       <img class='ancho-maximo' src='https://farm8.staticflickr.com/7214/7176942181_a3d9e040fe_q.jpg'>
                      </div>
                      <div class='datos-docente indice'>
                       <h4 class='rojo-claro h-sin-margen'>Boris Ivelic</h4>
                       <h6>Arquitecto</h6>
                      </div>
                      <div class='resena-docente indice'>
                       <p>Director del Programa. Título de Arquitecto PUCV 1969. Co- fundador: de la carrera de Diseño Industrial; de la Ciudad Abierta y del Magister. Ganador de Proyectos Fondecyt, en la línea Náutico y Marítimo. Ha publicado en revistas de Chile y el extranjero. Ha expuesto su investigación a nivel nacional e internacional. </p>
                      </div>
                    </div>
                  </div>
                  <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
                 <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='http://ipark2012ephemeraltravesia.files.wordpress.com/2012/09/jorge-ferrada.jpg'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Jorge Ferrada</h4>
                  <h6>Arquitecto</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Licenciado en Arquitectura PUCV 1992. Titulo de Arquitecto PUCV 1989. Titulo Doctor-Arquitecto 2003 UPC Universidad Politécnica de Cataluña, España. Co-fundador del Magister mención Náutico y Marítimo. Ha publicado en revistas de Chile y el extranjero y participado en seminarios nacionales e internacionales. </p>
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
                  <img class='ancho-maximo' src='https://farm6.staticflickr.com/5104/5568079426_0a05617777_q.jpg'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Jaime Reyes</h4>
                  <h6>Diseñador de objetos</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Licenciado en Diseño de Objetos PUCV 1994. Título de Diseñador Industrial PUCV 1994. Magister en Historia PUCV 2009. Doctor © en Diseño en el Departamento de Artes & Design de la PUC de Rio de Janeiro. Titular de la cátedra de Taller de Amereida para todos los talleres de la Escuela. Jefe del Archivo Histórico José Vial Armstrong.</p>
                </div>
              </div>
            </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='https://farm4.staticflickr.com/3024/3046700076_fa49d24da3_q.jpg'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Edison Segura</h4>
                  <h6>Arquitecto</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Técnico en Mecánica Industrial 1993, Licenciado en Diseño de Objetos PUCV 1998, Título de Diseñador Industrial PUCV 1998, Licenciado en Arquitectura PUCV 2007, Título de Arquitecto PUCV 2007, Magister en Arquitectura y Diseño, mención Náutico y Marítimo PUCV 2008. Co-investigador Fondecyt. </p>
                </div>
              </div>
            </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='https://farm3.staticflickr.com/2535/4011990806_be53b7c19e_q.jpg'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Esteban Morales</h4>
                  <h6>Geógrafo</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Licenciado en Filosofia y Educación mención Geógrafo PUCV 1968. Doctorado tercer Ciclo. Universidad de la Sorbonna, París, Francia, Geomorfología Submarina 1969-1972. Magister en Historia PUCV 2006. Ganador de Proyectos Fondecyt, Fondef e internacionales. Publicaciones nacionales e internacionales. Expediciones en Chile y el extranjero.</p>
                </div>
              </div>
            </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='http://www.elturcofood.com/static/images/ItemMenu/small/no_image.png'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Ramiro Mege</h4>
                  <h6>Ingeniero Civil Mecánico</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Ingeniero en Ejecución Mecánica PUCV 1970. Ingeniero Civil Mecánico UTSM 1980. Jefe laboratorio de fluídos Escuela de Ingeniería Mecánica. Especialización e Investigación en Mecánica de Fluídos. Ganador de proyectos PUCV en la línea Náutica y Marítima. Publicaciones en revistas indexadas de Chile.</p>
                </div>
              </div>
            </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='http://www.elturcofood.com/static/images/ItemMenu/small/no_image.png'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Sergio Ostornol</h4>
                  <h6>Ingeniero Naval Electricista</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Graduado de la Escuela Naval 1961. Ingeniero Naval Electricista, Ingeniero de Buceo de Alta Profundidad y Salvataje. Master Construcción Naval MIT USA 1974, Ingeniero Arquitecto Naval e Ingeniero Oceánico MIT USA 1974. Ex gerente de Asmar. Actualmente Gerente de Distrito Pacifico Sur de ABS Consulting Inc. con asiento en Valparaíso.</p>
                </div>
              </div>
            </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='http://www.elturcofood.com/static/images/ItemMenu/small/no_image.png'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Boris Guerrero</h4>
                  <h6>Ingeniero Naval mecánico</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Ingeniero Naval Mecánico de la Escuela de Ingeniería Naval. Diplomado en Ingeniería Industrial PUCV. Ex Profesor de estabilidad y Mecánica racional de la Escuela Naval (‘72-‘98). Profesor de estabilidad Colegio de Ingenieros MMN. Desarrollos originales de programas computacionales para estabilidad y esfuerzos de barcos para distintas compañías navieras.</p>
                </div>
              </div>
            </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='http://www.elturcofood.com/static/images/ItemMenu/small/no_image.png'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Jorge Pastene</h4>
                  <h6>Ingeniero Civil</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Ingeniero Civil, Universidad Técnica Federico Santa María (1970). M.Sc. in Maritime Civil Eng., Universidad de Liverpool, U.K.1975/76. Ha sido docente de la USM, PUCV, Ing, Naval Armada de Chile, U.de Chile. Profesionalmente desarrolla y ejecuta proyectos preferentemente en el ámbito Marítimo. Tiene múltiples publicaciones y participación en seminarios de su especialidad.</p>
              </div>
                  </div>
                </div>
                <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
                  <div class='pagina docente indice'>
                <div class='imagen-docente indice'>
                  <img class='ancho-maximo' src='http://www.elturcofood.com/static/images/ItemMenu/small/no_image.png'>
                </div>
                <div class='datos-docente indice'>
                  <h4 class='rojo-claro h-sin-margen'>Octavio Döerr</h4>
                  <h6>Ingeniero Civil Mecánico</h6>
                </div>
                <div class='resena-docente indice'>
                  <p>Ingeniero Civil Mecánico UTSM 1981. Diplomado en Port Plannina, New Orleáns University 1992. Diplomado en Port Administration and Management, JICA, Tokio 1997. Ex gerente de Planificación y desarrollo empresa portuaria de San Antonio. Consultor independiente de Döerr & Asociados Ltda. Ports & Shippings consultants. </p>
              </div>
                  </div>
                </div>
                  </div>

                     fin contenido wp-admin -->
                  <h2>Proyecto de tésis recientes</h2>
                    <div class='fila'>
                      <?php if( $latest_tesis_nautico_maritimo->have_posts() ) : while( $latest_tesis_nautico_maritimo->have_posts() ) : $latest_tesis_nautico_maritimo->the_post(); ?>
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
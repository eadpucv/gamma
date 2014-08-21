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
                                <img alt="First slide" title="carrera arquitectura" src='<?php bloginfo('template_directory') ?>/img/arq2.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="Second slide" title="carrera arquitectura" src='https://farm6.staticflickr.com/5573/14444955434_5a5041f025_b.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera arquitectura" src='https://farm3.staticflickr.com/2896/14466255463_1b9760e8ca_b.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera arquitectura" src='<?php bloginfo('template_directory') ?>/img/arq3.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera arquitectura" src='https://farm4.staticflickr.com/3573/5703840667_8ba437e873_b.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera arquitectura" src='https://farm8.staticflickr.com/7460/13904220867_20b18e4650_b.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera arquitectura" src='https://farm4.staticflickr.com/3803/9509631443_56c1257eec_b.jpg'>
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
                <?php if ( has_post_thumbnail() ) { ?>
                  <div class='prev-imagen franja'>
                    <?php the_post_thumbnail( 'medium', array( 'class' => "centrada-vertical") ); ?>
                  </div>
                <?php } ?>
                <div class="e-content p-summary p-name carrera">
                  <div class='bloque' id="bloque_texto">
                  	<h2>Estudiar arquitectura en la e[ad]</h2>
                  	<p>La misión de la Escuela de Arquitectura y Diseño es cultivar, el arte de la Arquitectura, del Diseño Gráfico y del Diseño Industrial por medio de la creación y transmisión del conocimiento del oficio de estas artes, formar Arquitectos y Diseñadores con la vocación de concebir obras que den cabida y expresión al habitar humano.</p>
                  	<!-- este contenido está tomado de pucv.cl -->
                  	<h1>Perfil del egresado</h1>
 					<p>Un Arquitecto que conciba la arquitectura como un arte al servicio del hombre. Que desde una visión poética de su contexto y una alta capacidad de reflexión sean capaces con creatividad de proponer, proyectar y construir obras arquitectónicas y urbanas que de un modo innovador en el arte y en la técnica den cabida y expresión al habitar humano, satisfaciendo necesidades de la sociedad en las distintas escalas- Edificio, ciudad, continente- y magnitudes del proyecto arquitectónico y urbano.
					Las competencias fundamentales, disciplinares y profesionales de este arquitecto son aquellas que permiten que sus proyectos sean  un consecuente paso de la observación arquitectónica a la forma construida.</p>
                  	<h2>Competencias fundamentales</h2>
                  	<p>Se propicia una educación integral, que favorece el crecimiento armónico de todas las dimensiones que constituyen la persona humana, abordados tanto desde la perspectiva intelectual como vivencial, de modo de promover la coherencia entre el conocimiento, la verdad y la vida. Se privilegian valores que sustentan una integridad y competencias humanísticas que permiten acceder al método de estudio que propone la carrera basado principalmente en la “Observación” dibujada, medida y escrita que es el modo de comprender e interactuar con el entorn</p>
                  	<ol>
						<li>Valores de Apertura a la trascendencia; libertad; solidaridad; respeto y aceptación de la diversidad; y compromiso ético y de responsabilidad social.</li>
						<li>Capacidad para observar la realidad circundante, la ciudad se origina y se desarrolla, a partir de la observación directa de su realidad.</li>
					</ol>
					<h4>Competencias disciplinares</h4>
					<ol>
						<li>Competencias que permiten al arquitecto a dar existencia física a la formulación del paso de la observación a la forma.</li>
						<li>Capacidad para integrar los aspectos poéticos, sociales y físicos presentes en los lugares y casos a abordar.</li>
						<li>Capacidad creativa y de maestría formal, que le permita innovar en la forma arquitectónica del espacio habitable y su contexto.</li>
						<li>Capacidad analítica, de reflexión y de intervención social que le permita realizar planes y programas apropiados en una correcta relación lugar y contexto.</li>
					</ol>
					<h4>Competencias profesionales</h4>
					<p>La misión de la Escuela de Arquitectura y Diseño es cultivar, el arte de la Arquitectura, del Diseño Gráfico y del Diseño Industrial por medio de la creación y transmisión del conocimiento del oficio de estas artes, formar Arquitectos y Diseñadores con la vocación de concebir obras que den cabida y expresión al habitar humano.</p>
					<ul>
						<li>Capacidad racional para coordinar, integrar y derivar las distintos aspectos científicos, técnicos y legales presentes en el desarrollo y la ejecución del Proyecto arquitectónico.</li>
						<li>Capacidad para integrar equipos interdisciplinarios.</li>
					</ul>
                  	<h1>Concepción del Perfil de Egreso</h1>
                  	<p>El perfil de egreso del Arquitecto de la PUCV se define brevemente como: Un arquitecto que concibe la arquitectura como un arte al servicio del hombre y que es un profesional activo en la sociedad.
					Para lograr la construcción de dicho perfil el postulante a la carrera tiene un perfil de ingreso que se basa en una vocación artística.
					Esta Escuela que se ubica en una concepción artística del oficio de la Arquitectura, tiene un estándar que está medido por la Obra, es decir, es cada vez inaugural. Cada obra quiere traer a presencia aquella dimensión del Arte que es única, que se puede formular como la poiesis, aquello que pasa del no ser al ser. Es por esto que se ubica en la vanguardia del obrar arquitectónico.
					Es esta ubicación la que le abre el modo de estudio del Taller, donde se reune la teoría, palabra dicha con la proyección palabra hecha. Así, la trasmisión del conocimiento se imparte como una formación, en la cual se madura para adquirir autoridad, lo que sólo se logra accediendo a aquello que constituye el origen de una materia.
					Esta Escuela forma Arquitectos con la vocación de concebir obras que den cabida y expresión al habitar humano.</p>
					<h2>Objetivos educacionales</h2>
					<p>Los objetivos educacionales que transmiten el oficio de dar cabida al habitar humano construyen simultáneamente tres magnitudes del arte arquitectónico:</p>
					<ul>
					<li><b>Magnitud del Lenguaje</b></li>
					<p>La magnitud de un lenguaje que funda la vocación desde la relación Poesía y Arquitectura. Es una experiencia de la Poesía de Amereida, de la Música de las Matemáticas, del Taller de América, los cursos de matemáticas y de Cultura Religiosa. Y que como experiencia de los Originales se ejerce en todo concebir de los talleres y de la Escuela en general.</p>
					<li><b>Vida, Trabajo y Estudio</b></li>
					<p>La magnitud de un régimen que funda la convergencia de la vida, el trabajo y el estudio. Es una experiencia del acto del habitar y que se lleva a cabo en el “Taller”, en la casa de la Escuela, en la Ciudad Abierta, en las Travesías: experiencia en su sentido histórico en el curso de “Presentación de la Arquitectura”, en su sentido corporal en el curso de “Cultura del Cuerpo” y en un sentido ejecutorio de las ciencias y las técnicas en los cursos de “Construcción” y que se ejerce en toda realización del alumno en la Escuela.</p>
                  	<li><b>Magnitud de un Instrumento</b></li>
                  	<p>La Observación. Ésta ubica todo concebir y realizar en un ahora y aquí. La experiencia de la Observación del entorno, tanto el de Valparaíso como el del continente, se acumula en una carpeta que acompaña, cual hábito, a profesores, alumnos y exalumnos. Ella se lleva a cabo en el taller, pero se llega hasta la manera de estudiar los Ramos Generales que imparte la Universidad.
					Se trata de tres magnitudes que generan gratuitamente una cuarta: de celebración. Ella arma, para sí misma e invitados, lecturas poéticas, conciertos, exposiciones de esculturas, cine de vanguardia, comidas para dialogar y en donde se madura la fidelidad al origen de todas las magnitudes. Estos objetivos devienen en propósitos, que fueron planteados por primera vez en 1952, cuando la Escuela de Arquitectura se refunda. Momento inicial en que los Arquitectos exponen en formulación y el poeta abre el entusiasmo de la fidelidad. Desde el comienzo de la Escuela, hace ya 50 años, no ha habido modificaciones en cuanto a la formulación inicial y a tener conciencia de fidelidad. Sí ha habido en cuanto a su dilatarse en profundizaciones y ampliaciones. Así, específicamente en los talleres y en la Escuela en general.
					Estudiar los cerros de Valparaíso al inicio, enseguida su plan, al gran Valparaíso bioceánico, Chile, América del Sur, es nuestra ancla según la poesía de Amereida. Las carpetas de observaciones se vuelven más reflexivas. Nuestra luz (Amereida), creciente acceder a Europa desde el “se principia latino” poético; en los cursos de Presentación de la Arquitectura y Construcción. Nuestra aventura (Amereida), atreverse a una hospitalidad de vida, trabajo y estudio en la Ciudad Abierta, incorporando huéspedes Arquitectos y artistas y de otros oficios a la ronda creativa que es el modo de concebir y realizar en común desde la carpeta de observaciones.
					El modelo pedagógico sobre el cual se basa esta formación es el Taller el cual se estructura en torno a un tema que los profesores exponen en clases ubicatorias y de abertura, las que generan tareas y estudios que se llevan a cabo en la ciudad mediante observaciones que se fijan en croquis y anotaciones. Las tareas de Observación se exponen colectivamente al interior del Taller, donde los profesores las corrigen individualmente, así cada alumno va dando pasos de maduración que le permiten formular un fundamento, el que luego da origen a su proposición, la que es corregida un cierto número de veces dependiendo del caso, y termina en una proposición final la que es calificada.</p>
                  	<blockquote><i>El Taller es así un ámbito de estudio colectivo en que cada alumno fructifica en su trabajo individual, por medio de un camino creativo en común que considera el desarrollo individual de cada cual.</i></blockquote>
                  	<p>Este modelo conduce a ciertas capacidades que definen el perfil de un egresado de arquitectura en esta escuela este perfil se logra mediante la transmisión de los conocimientos y herramientas para el logro de un conjunto de competencias genéricas de formación fundamental, disciplinares y profesionales que se dan en la relación entre ciclos del proyecto formativo y las áreas de formación[1]. El concepto de ciclo corresponde a la estructura temporal de la carrera, seis años que se dividen en cuatro ciclos; Ciclo de inicio en primer año, ciclo de Formación; Segundo y tercer año; Tercer ciclo disciplinar; cuarto y quinto año; y cuarto ciclo profesionalizante; correspondiente a la Titulación. El concepto de área corresponde a las áreas formativas las que se constituyen en columnas vertebrales de la carrera estructurando los ciclos.</p>
                  	</ul>
                  	<h2>Competencias Genéricas de formación fundamental</h2>
                  	<p>Lo fundamental es tener presente las magnitudes del arte arquitectónico descritas anteriormente desde dichas magnitudes traducidas como competencias se vinculan más bien al concepto de área y se van logrando a lo largo de la carrera implícitas concretamente en el ámbito de estudio sostenido académicamente por aquellas dimensiones que construyen en los estudiantes el vinculo entre vida, trabajo y estudio. Dicho vinculo se da principalmente en las Travesías, en la Ciudad Abierta y en la posibilidad de construcción de obras que se da en el Taller Arquitectónico, es decir se dan mediante experiencias sensibles. Y la contextualización de esas experiencias se dan en ciertos ejes estructurales como lo son el Taller de Amereida, Cultura del Cuerpo, Matemáticas y estudios generales. Cabe mencionar que el conjunto de competencias genéricas de formación fundamental han sido estudiadas por un grupo de expertos de la PUCV para determinar ciertas competencias claves y transversales al perfil de un egresado de la PUCV.</p>
                  	<p>Cada carrera considera estas competencias aportando una visión de transversalidad disciplinaria dentro de la Universidad. Estas competencias son las siguientes:</p>
                  	<ol>
                  	<li><b>Capacidad de observación:</b> Capacidad para observar la realidad circundante, la ciudad se origina y se desarrolla, a partir de esa observación directa de la realidad.</li>
                  	<li><b>Conocer reflexivamente:</b> Reflexionar sobre los propios planes de acción, los propios conocimientos, y la relación de ambos con las demás personas que intervienen en la situación. Se trata de un metaconocimiento, es decir un conjunto de conocimientos que permiten la reflexión acerca de los propios conocimientos.</li>
                  	<li><b>Capacidad crítica, autocrítica y propositiva:</b> Analizar, examinar y juzgar de manera consciente el objeto de estudio integrando las consideraciones relevantes y generando una opinión fundada (crítica) y de realizar esas acciones sobre sí mismo (autocrítica).</li>
                  	</ol>
                  	<h2>Malla Curricular</h2>
                  	<a href='http://web.archive.org/web/20130507102015/http://www.ead.pucv.cl/wp-content/archivos/2009/08/malla-arq1.pdf'>Descargar malla curricular Arquitectura (pdf, 149kb) <i class="icn icn-mano-abajo icn-lg"></i></a>
						<p>Quisque luctus, metus quis volutpat varius, velit lorem egestas erat, vel lobortis libero nulla vitae est. Nam varius lectus ut molestie pharetra. Proin quis justo lectus. Nulla risus tellus, vehicula eget nulla vitae, rhoncus tristique neque. Duis vulputate metus a tellus sagittis facilisis. Maecenas non congue mauris. Suspendisse commodo quam id iaculis consequat. Proin quis lacus sodales, pellentesque sem sed, consequat nulla. Donec sed massa et lorem laoreet tristique. Proin viverra quam auctor urna dapibus, sit amet posuere arcu porta. </p>
						<!-- Se piensa que esto no debería ser una tabla, pero es un diseño que tendremos que volver a redefinirlo, por ahora queremos dejarlo así y luego pensarlo de una manera más coherente con la gráfica nueva -->
						<!--<table class='w100 malla-curricular'>
							<tbody>
								<tr>
									<td>
										<h4>Primer Año</h4>
										<h6>Ciclo básico</h6>
									</td>
								</tr>
								<tr>
									<th class='w33 fondo-gris'>periodo anual</th>
									<th class='w33 fondo-gris'></th>
									<th class='w33 fondo-gris'></th>
								</tr>
								<tr>
									<td> 
										<ul class='curso-malla'>
											<li>ARQ 150 – (37 Créditos)<br>
											 Primer Año Arquitectura Plan Común<br>
											<p><a href='#'>Taller Inicial Común 1ª y 2ª Etapa</a></p>
											<p><a href='#'>Taller de Construcción 1</a></p>
											<p><a href='#'>Presentación de la Arquitectura 0</a></p>
											<p><a href='#'>Fundamentos de Matemáticas 1</a></p>
											<p><a href='#'>Cultura Religiosa: Fundamentos de la Religión Cristiana</a></p>
											<p><a href='#'>Cultura Religiosa: Moral Profesional</a></p>
											<p><a href='#'>Cultura del Cuerpo 1 y 2</a></p>
											<p><a href='#'>Taller de Amereida 1, 2 y 3</a></p></li>
										</ul>
									</td>
									<td>
									</td>
									<td>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Segundo Año</h4>
										<h6>Ciclo superior</h6>
									</td>
								</tr>
								<tr>
									<th class='w33 fondo-gris'>primer periodo</th>
									<th class='w33 fondo-gris'>segundo periodo</th>
									<th class='w33 fondo-gris'>tercer periodo</th>
								</tr>
								<tr>
									<td> 
										<ul class='curso-malla'>
											<li>ARQ 250 – (10 Créditos)<br>
											<a href='#'>Taller Arquitectónico 3ª Etapa</a></li>
											<li>ARQ 266 – (1 Crédito)<br>
											<a href='#'>Taller de Amereida 4</a></li>
											<li>ARQ 251 – (1 Crédito)<br>
											<a href='#'>Cultura del Cuerpo 3</a></li>
											<li>ARQ 241 – (2 Créditos)<br>
											<a href='#'>Presentación de la Arquitectura 1 </a></li>
										</ul>
									</td>
									<td>
										<ul class='curso-malla'>
											<li>MAT 229 - (4 Créditos)<br>
											<a href='#'>Fundamentos de Matemáticas 2</a></li>
											<li>ARQ 266 – (1 Crédito)<br>
											<a href='#'>Taller de Amereida 5</a></li>
											<li>ARQ 252 – (1 Crédito)<br>
											<a href='#'>Cultura del Cuerpo 4</a></li>
											<li>ARQ 200 – (2 Créditos)<br>
											<a href='#'>Taller de Construcción 2</a></li>
											<li>ARQ 206 – (2 Créditos)<br>
											<a href='#'>Conceptos Físicos del Equilibrio en Sólidos y Fluídos</a></li>
											<li>ARQ 207 – (2 Créditos)<br>
											<a href='#'>Conceptos Físicos de Calor y Ondas</a></li>
										</ul>
									</td>
									<td>
										<ul class='curso-malla'>
											<li>ARQ 255 – (10 Créditos)<br>
											<a href='#'>Taller Arquitectónico 4ª Etapa </a></li>
											<li>ARQ 268 - (1 Crédito)<br>
											<a href='#'>Taller de Amereida 6</a></li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Tercer Año</h4>
										<h6>Ciclo superior</h6>
									</td>
								</tr>
								<tr>
									<th class='w33 fondo-gris'>primer periodo</th>
									<th class='w33 fondo-gris'>segundo periodo</th>
									<th class='w33 fondo-gris'>tercer periodo</th>
								</tr>
								<tr>
									<td> 
										<ul class='curso-malla'>
											<li>ARQ 380 – (10 Créditos)<br>
											<a href='#'>Taller de Diseño Gráfico 5ª Etapa</a></li>
											<li>MAT 329 - (4 Créditos)<br>
											<a href='#'>Fundamentos de Matemáticas 3</a></li>
											<li>ARQ 366 – (1 Crédito)<br>
											<a href='#'>Taller de Amereida 7</a></li>
											<li>ARQ 351 – (1 Crédito)<br>
											<a href='#'>Cultura del Cuerpo 5</a></li>
										</ul>
									</td>
									<td>
										<ul class='curso-malla'>
											<li>ARQ 361 - (2 Créditos)<br>
											<a href='#'>Presentación del Diseño Gráfico 2</a></li>
											<li>ARQ 367 – (1 Crédito)<br>
											<a href='#'>Taller de Amereida 8</a></li>
											<li>ARQ 352 – (1 Crédito)<br>
											<a href='#'>Cultura del Cuerpo 6</a></li>
											<li>ARQ 389 – (2 Créditos)<br>
											<a href='#'>Taller de Construcción 3</a></li>
											<li>ARQ 388 – (2 Créditos)<br>
											<a href='#'>Lenguaje Computacional 2</a></li>
											<li>ARQ 387 – (2 Créditos)<br>
											<a href='#'>Sistemas de Impresión</a></li>
										</ul>
									</td>
									<td>
										<ul class='curso-malla'>
											<li>ARQ 385 – (10 Créditos)<br>
											<a href='#'>Taller de Diseño Gráfico 6ª Etapa</a></li>
											<li>ARQ 368 – (1 Crédito)<br>
											<a href='#'>Taller de Amereida 9</a></li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Cuarto Año</h4>
										<h6>Ciclo superior</h6>
									</td>
								</tr>
								<tr>
									<th class='w33 fondo-gris'>primer periodo</th>
									<th class='w33 fondo-gris'>segundo periodo</th>
									<th class='w33 fondo-gris'></th>
								</tr>
								<tr>
									<td> 
										<ul class='curso-malla'>
											<li>ARQ 480 – (10 Créditos)<br>
											<a href='#'>Taller de Diseño Gráfico 7ª Etapa</a></li>
											<li>ARQ 466 – (1 Crédito)<br>
											<a href='#'>Taller de Amereida 10</a></li>
											<li>ARQ 451 – (1 Crédito)<br>
											<a href='#'>Cultura del Cuerpo 7</a></li>
											<li>ARQ 471 – (2 Créditos)<br>
											<a href='#'>Presentación del Diseño Gráfico 3</a></li>
										</ul>
									</td>
									<td>
										<ul class='curso-malla'>
											<li>ARQ 481 – (2 Créditos)<br>
											<a href='#'>Taller de Construcción 4</a></li>
											<li>ARQ 482 – (2 Créditos)<br>
											<a href='#'>Lenguaje Computacional 3</a></li>
											<li>ARQ 483 – (2 Créditos)<br>
											<a href='#'>Gráfica Digital</a></li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Cuarto año</h4>
										<h6>Ciclo de titulación</h6>
									</td>
								</tr>
								<tr>
									<th class='w33 fondo-gris'></th>
									<th class='w33 fondo-gris'></th>
									<th class='w33 fondo-gris'>tercer periodo</th>
								</tr>
								<tr>
									<td> 
									</td>
									<td> 
									</td>
									<td> 
										<ul class='curso-malla'>
											<li>ARQ 485 – (14 Créditos)<br>
											<a href='#'>Taller de Diseño Gráfico Titulación 1</a></li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Quinto Año</h4>
										<h6>Ciclo de titulación</h6>
									</td>
								</tr>
								<tr>
									<th class='w33 fondo-gris'>primer periodo</th>
									<th class='w33 fondo-gris'>segundo periodo</th>
									<th class='w33 fondo-gris'></th>
								</tr>
								<tr>
									<td> 
										<ul class='curso-malla'>
											<li>ARQ 580 - (14 Créditos)<br>
											<a href='#'>Taller de Diseño Gráfico Titulación 2</a></li>
										</ul>
									</td>
									<td>
										<ul class='curso-malla'>
											<li>ARQ 585 – (14 Créditos)<br>
											<a href='#'>Taller de Diseño Gráfico Titulación 3</a></li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>-->
            <h2>Profesores de arquitectura</h2>
              <div class='fila'>
                <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
                  <div class='pagina docente indice'>
  						      <div class='imagen-docente indice'>
  							     <img class='ancho-maximo' src='https://farm1.staticflickr.com/40/113495505_cfcbe72ac6_q.jpg'>
  						      </div>
  						      <div class='datos-docente indice'>
  							       <h4 class='rojo-claro h-sin-margen'>Patricio Cáraves</h4>
  							       <h6>Arquitecto</h6>
  						      </div>
  						      <div class='resena-docente indice'>
  							       <p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; UPC Barcelona, España.</p>
  						        </div>
  					       </div>
                </div>
              <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
    					<div class='pagina docente indice'>
    						<div class='imagen-docente indice'>
    							<img class='ancho-maximo' src='http://ipark2012ephemeraltravesia.files.wordpress.com/2012/09/miguel-eyquem.jpg?w=710'>
    						</div>
    						<div class='datos-docente indice'>
    							<h4 class='rojo-claro h-sin-margen'>Miguel Eyquem</h4>
    							<h6>Arquitecto</h6>
    						</div>
    						<div class='resena-docente indice'>
    							<p>Arquitecto; P.U. Católica de Chile, Chile. <br>Doctor Honoris Causa; P.U. Católica de Valparaíso, Chile.</p>
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
							     <p>Arquitecto; P.U. Católica de Valparaíso, Chile.<br>Doctor; UPC Barcelona, España.</p>
						    </div>
					       </div>
              </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
					     <div class='pagina docente indice'>
						      <div class='imagen-docente indice'>
							     <img class='ancho-maximo' src='https://farm4.staticflickr.com/3180/3076032024_36528d141a_q.jpg'>
						      </div>
						      <div class='datos-docente indice'>
							       <h4 class='rojo-claro h-sin-margen'>Andrés Garcés</h4>
							       <h6>Arquitecto</h6>
						      </div>
						    <div class='resena-docente indice'>
							   <p>Arquitecto; P.U. Católica de Valparaíso, Chile.<br>Doctor©; UPC Barcelona, España.</p>
						  </div>
					   </div>
            </div>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
					     <div class='pagina docente indice'>
						      <div class='imagen-docente indice'>
							     <img class='ancho-maximo' src='https://farm2.staticflickr.com/1208/547980377_33e5c40e28_q.jpg'>
						      </div>
						      <div class='datos-docente indice'>
							     <h4 class='rojo-claro h-sin-margen'>Iván Ivelic</h4>
							     <h6>Arquitecto</h6>
						      </div>
						      <div class='resena-docente indice'>
							       <p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; U. Rey Juan Carlos de Madrid, España.</p>
						      </div>
					     </div>
            </div>
          <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
					   <div class='pagina docente indice'>
						    <div class='imagen-docente indice'>
							     <img class='ancho-maximo' src='https://farm4.staticflickr.com/3551/3530547063_23a62dc53f_q.jpg'>
						    </div>
						    <div class='datos-docente indice'>
      						 <h4 class='rojo-claro h-sin-margen'>David Jolly</h4>
      						 <h6>Arquitecto</h6>
						    </div>
						<div class='resena-docente indice'>
							<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; UPC Barcelona, España.</p>
						</div>
					  </div>
          </div>
          <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
  					<div class='pagina docente indice'>
  						<div class='imagen-docente indice'>
  							<img class='ancho-maximo' src='https://farm1.staticflickr.com/63/181241286_74a22951ed_q.jpg'>
  						</div>
  						<div class='datos-docente indice'>
  							<h4 class='rojo-claro h-sin-margen'>David Luza</h4>
  							<h6>Arquitecto</h6>
  						</div>
  						<div class='resena-docente indice'>
  							<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; UPC Barcelona, España.<br>Decano de la facultad</p>
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
  							<p>Arquitecto; P.U. Católica de Valparaíso, Chile.<br>Doctor; UPC Barcelona, España.</p>
  						</div>
					   </div>
          </div>
          <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
  					<div class='pagina docente indice'>
  						<div class='imagen-docente indice'>
  							<img class='ancho-maximo' src='https://farm4.staticflickr.com/3060/3066658572_a3e561695c_q.jpg'>
  						</div>
  						<div class='datos-docente indice'>
  							<h4 class='rojo-claro h-sin-margen'>Isabel Margarita Reyes</h4>
  							<h6>Arquitecta</h6>
  						</div>
  						<div class='resena-docente indice'>
  							<p>Arquitecto; P.U. Católica de Valparaíso, Chile.</p>
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
  							<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; UPC Barcelona, España.<br>Director Escuela de Arquitectura y Diseño</p>
  						</div>
  					</div>
          </div>
          <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>  
  					<div class='pagina docente indice'>
  						<div class='imagen-docente indice'>
  							<img class='ancho-maximo' src='https://farm8.staticflickr.com/7083/7166400025_09461911ce_q.jpg'>
  						</div>
  						<div class='datos-docente indice'>
  							<h4 class='rojo-claro h-sin-margen'>Salvador Zahr</h4>
  							<h6>Arquitecto</h6>
  						</div>
  						<div class='resena-docente indice'>
  							<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Estudios de posgrado en Estructuras de Hormigón Armado; Politécnico de Milán, Italia.</p>
  						</div>
					 </div>
          </div>
        </div>

            <h2>Profesores ayudantes</h2>
            <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
              <div class='pagina docente indice'>
						  <div class='imagen-docente indice'>
							 <img class='ancho-maximo' src='http://oi59.tinypic.com/jsy51i.jpg'>
						  </div>
						  <div class='datos-docente indice'>
							   <h4 class='rojo-claro h-sin-margen'>Óscar Andrade</h4>
							   <h6>Arquitecto</h6>
						  </div>
  						<div class='resena-docente indice'>
  							<p>Ayudante de Arquitectura</p>
  						</div>
					   </div>
          </div>
          <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
					<div class='pagina docente indice'>
						<div class='imagen-docente indice'>
							<img class='ancho-maximo' src='http://oi59.tinypic.com/34ioivo.jpg'>
						</div>
						<div class='datos-docente indice'>
							<h4 class='rojo-claro h-sin-margen'>Erick Caro</h4>
							<h6>Arquitecto</h6>
						</div>
						<div class='resena-docente indice'>
							<p>Ayudante de Arquitectura</p>
						</div>
					</div>
        </div>
        <div class='col-lg-4 col-md-6 col-sm-6 col-xs-12'>
					<div class='pagina docente indice'>
						<div class='imagen-docente indice'>
							<img class='ancho-maximo' src='https://farm3.staticflickr.com/2493/4172133723_ffbc7e6c4d_q.jpg'>
						</div>
						<div class='datos-docente indice'>
							<h4 class='rojo-claro h-sin-margen'>Ursula Exss</h4>
							<h6>Arquitecta</h6>
						</div>
						<div class='resena-docente indice'>
							<p>Ayudante de Arquitectura</p>
						</div>
					</div>
        </div>
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
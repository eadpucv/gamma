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
                                <img alt="First slide" title="carrera diseño gráfico" src='<?php bloginfo('template_directory') ?>/img/diseno-grafico12.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="Second slide" title="carrera diseño gráfico" src='<?php bloginfo('template_directory') ?>/img/disenografico.jpg'>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera diseño gráfico" src='<?php bloginfo('template_directory') ?>/img/diseno-grafico2.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera diseño gráfico" src='<?php bloginfo('template_directory') ?>/img/diseno-grafico5.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                   <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera diseño gráfico" src='<?php bloginfo('template_directory') ?>/img/diseno-grafico6.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera diseño gráfico" src='<?php bloginfo('template_directory') ?>/img/diseno-grafico4.jpg'>
                            </div>
                        </div>
                    </div>  <!-- fin de item -->
                    <div class="item">
                        <div class='noticia grande'>
                            <div class='noticia-imagen'>
                                <img alt="third slide" title="carrera diseño gráfico" src='https://farm6.staticflickr.com/5506/14259419489_27e2afc82c_h.jpg'>
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
                <div class="e-content p-summary p-name enunciado">
                  <div class='bloque' id="bloque_texto">
                  	<h2>Estudiar diseño gráfico en la e[ad]</h2>
                  	<p>La misión de la Escuela de Arquitectura y Diseño es cultivar, el arte de la Arquitectura, del Diseño Gráfico y del Diseño Industrial por medio de la creación y transmisión del conocimiento del oficio de estas artes, formar Arquitectos y Diseñadores con la vocación de concebir obras que den cabida y expresión al habitar humano.</p>
                  	<p>La Escuela afirma que tanto la Arquitectura como el Diseño son un Arte. Esto diferencia profundamente de otras orientaciones, disciplinas y saberes, e implica una manera peculiar de estudiar y de hacer.</p>
                  	<h4>La Observación como fundamento</h4>
                  	<p>En nuestra Escuela se accede a la Arquitectura y al Diseño a través de la observación. La observación es una actividad profundamente artística que permite penetrar la realidad de manera siempre nueva y original. A partir de esta postura de pensamiento tomada como fundamento se desarrollan los diferentes trabajos, estudios y proyectos.</p>
					<h4>Compromiso de vida y ámbito</h4>
					<p>Esta modalidad de estudiar y hacer exige de alumnos y profesores un real compromiso de vida. Este que le confiere a la Escuela una gran unidad y, a su vez establece un ámbito, y un ritmo de estudio que da cabida a actividades ordinarias y extraordinarias, en que participan creativamente todos los alumnos y profesores.</p>
                  	<h4>El taller columna vertebral</h4>
                  	<p>El taller es la columna vertebral de los estudios de cada disciplina impartida en nuestra Escuela. En él tiene lugar el proceso creativo de cada estudiante, y es donde se decantan los conocimientos humanísticos, matemáticos, científicos y tecnológicos que se imparten en las demás asignaturas de nuestro Plan de Estudios.</p>
                  	<!-- este contenido está tomado de pucv.cl -->
                  	<h2>El diseñador de la Escuela</h2>
                  	<p>El Diseñador Gráfico de la Pontificia Universidad Católica de Valparaíso es capaz de ubicarse dentro de equipos multidisciplinarios proyectando y concretando trabajos de distintos grados de complejidad, de manera original y eficiente. </p>
                  	<p>Además, ha desarrollado un lenguaje teórico del oficio en constante resonancia con la Poesía, lo cual le permite interpretar y poseer una visión artística del mundo, permanece así en la abertura creativa del oficio; concibiendo y realizando obras y estudios de postítulos en el ámbito profesional; generando líneas de investigación y estudiando postgrados en el ámbito académico.</p>
                  	<h4>Sentido general de la formación</h4>
                  	<p>En esta Escuela, cuyo centro es el taller, la convergencia de todas las dimensiones formativas va en dirección a acotar el proceso de una obra, que se da en cinco dimensiones, ellas son:</p>
                  	<ol>
						<li>El Origen Común desde una misma Visión.</li>
						<li>El Ser en Completitud.</li>
						<li>Un Método de Estudio.</li>
						<li>La capacidad de contemplación.</li>
						<li>La Capacidad de Celebración.</li>
					</ol>
					<p>El método de trabajo del taller se basa en la “observación” dibujada, medida y escrita de la ciudad en que vivimos y lo que en ella acontece, para dar con el acto o lectura de su presente.</p>
					<p>Dichas experiencias, vividas por los alumnos en la ciudad, constituyen un suelo fecundo de relaciones las cuales son orientadas por el profesor comunicando a los alumnos su visión. La docencia impartida corresponde entonces a un acto creativo donde ningún taller es repetición de otro, procurando despertar la capacidad de observación en los alumnos y exteriorizar el modo peculiar en que ella se manifiesta para cada uno.</p>
					<p>La observación -acto de naturaleza artística- al situarse en el origen mismo de la forma no se opone ni se contradice con la formación técnica, ya que como acto creativo se le ubica como un medio y no como un fin, concretándose para cada caso y nivel específico.</p>
					<p>Todos los talleres realizan travesías, que son viajes en los que se recorre el continente americano, realizando obras junto a profesores y alumnos de Arquitectura y Diseño Industrial.</p>
                  	<h2>Concepción perfil del egresado</h2>
                  	<ul>
						<li>Un egresado de esta Escuela posee las competencias que le permiten ejercer el Diseño Gráfico desde la observación, como origen del proceso creativo. Este ha sido encarnado durante los estudios de lo urbano en los talleres de Valparaíso, de lo experimental en la Ciudad Abierta y de la visión de Continente en las Travesías.</li>
						<li>El origen de este proceso le otorga gran versatilidad para afrontar artísticamente el oficio en todas sus manifestaciones y magnitudes reconociendo y abstrayendo cualquier campo del Diseño Gráfico, tanto análogo como digital pudiendo actuar en ellos sea por autogestión o coparticipación.</li>
					</ul>
                  	<h2>Competencias fundamentales</h2>
                  	<p>El egresado de la Escuela de Arquitectura y Diseño de la Pontificia Universidad Católica de Valparaíso posee las competencias valóricas, disciplinares y profesionales que le permiten ejercer el Diseño Gráfico a partir de una visión poética del mundo, colocándolo de esta manera en el origen del oficio y proyectándolo creativamente en todos los campos de su desempeño.</p>
					<p>Esta virtud que se encarna a lo largo de los años de estudio, se hace posible a través del desarrollo de la observación; lenguaje complejo al que concurren el dibujo y el texto como medio eficaz para develar la realidad y proponer en ella las distintas escalas y campos del diseño.</p>
					<p>El egresado de la carrera de Diseño Gráfico ha desarrollado las siguientes competencias: </p>
					<h4>Competencias genéricas de formación fundamental</h4>
					<ul>
						<li>Posee una postura ética fundada en el compromiso con la obra que emprende y con la responsabilidad social implícita en toda creación humana, en concordancia con el marco valórico señalado en la misión de nuestra universidad.</li>
						<li>Posee un lenguaje teórico del oficio en constante resonancia con la poesía, lo cual le permite interpretar y manifestar a través del elogio y la celebración una visión artística del mundo.</li>
						<li>Posee un pensamiento crítico para abordar y generar proyectos, desarrollarse profesionalmente, y realizar estudios de postítulo y posgrado. </li>
					</ul>
					<h4>Competencias específicas disciplinares</h4>
					<ul>
						<li>Con capacidad de observación que le permite acceder a un sentido original de la realidad, orientado a la construcción de los fundamentos del trabajo creativo.</li>
						<li>Posee un lenguaje teórico del oficio en constante resonancia con la poesía y las distintas manifestaciones artísticas, lo cual le permite reinterpretar el mundo.</li>
						<li>Posee una abertura creativa del oficio que integra e interpreta la realidad de los requerimientos en formas visuales, espaciales e interactivas en concordancia y justeza al público que sirve.</li>
						<li>Posee gran versatilidad para afrontar artísticamente el oficio en todas sus manifestaciones y magnitudes: desde el diseño tipográfico al complejo editorial, desde la miniatura al gran formato, desde el afiche a la escenografía, desde el grabado a la página web, desde la infografía a la interfaz, desde el envase al packaging, desde el módulo a la exposición y finalmente desde todos ellos al espacio.</li>
						<li>Es capaz de formular un pensamiento previo a la idea, comprendiendo y analizando los actos, construcciones humanas y elementos naturales que lo circundan.</li>
						<li>Domina el lenguaje computacional específico del oficio, quedando acorde con las actuales dinámicas de búsqueda, creación, proyección necesarias para comprender las técnicas modernas de producción, pudiendo dialogar así con diferentes disciplinas.</li>
						<li>Domina un lenguaje de dibujo para develar la realidad y utilizarla además como elemento expresivo y proyectivo de las nuevas ideas hacia la realidad.</li>
					</ul>
					<h4>Competencias específicas profesionales</h4>
					<ul>
						<li>Lidera e integra equipos transdisciplinarios, ideando, proyectando y concretando trabajos en distintos grados de complejidad de manera original y eficiente.</li>
						<li>Domina las bases de los lenguajes técnicos y tecnológicos lo que le permiten interactuar con distintas especialidades.</li>
						<li>Reconoce y abstrae cualquier campo del diseño gráfico que le permite actuar con autonomía y eficiencia en ellos, sea por autogestión o coparticipación.</li>
						<li>Gestiona proyectos desde su diseño hasta la producción de la obra, respondiendo a los requerimientos del medio.</li>
						<li>Construye diálogos entre audiencias identificando territorios culturales, geográficos, sociales, económicos y tecnológicos para la innovación, dando respuestas y recreando los constantes cambios en el mundo.</li>
						<li>Escucha empáticamente para integrar e interpretar la realidad de los requerimientos de forma visual, espacial e interactiva en concordancia y justeza al público que sirve.</li>
					</ul>
                  	<h2>Objetivos educacionales</h2>
                  	<p>El ejercicio profesional se desarrolla en instituciones y empresas relacionadas con la comunicación, campo publicitario, editorial, la industria gráfica y multimedial. Ejercicio independiente de la profesión. Docencia universitaria y continuidad en estudios de post-grado.</p>
                  	<h2>Malla Curricular</h2>
                  	<a href='http://www.ead.pucv.cl/wp-content/archivos/2008/05/malla-Dis_G.pdf'>Descargar malla curricular Diseño Gráfico (pdf, 149kb) <i class="icn icn-mano-abajo icn-lg"></i></a>
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
											 Primer Año Diseño Plan Común<br>
											<p><a href='#'>Taller Inicial Común 1ª y 2ª Etapa</a></p>
											<p><a href='#'>Taller de Construcción 1</a></p>
											<p><a href='#'>Presentación del Diseño Común</a></p>
											<p><a href='#'>Fundamentos de Matemáticas 1</a></p>
											<p><a href='#'>Lenguaje Computacional 0 – Imagen Escrita</a></p>
											<p><a href='#'>Cultura Religiosa: Antropología Cristiana</a></p>
											<p><a href='#'>Cultura Religiosa: Moral Cristiana</a></p>
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
											<li>ARQ 280 – (10 Créditos)<br>
											<a href='#'>Taller de Diseño Gráfico 3ª Etapa</a></li>
											<li>MAT 229 - (4 Créditos)<br>
											<a href='#'>Fundamentos de Matemáticas 2</a></li>
											<li>ARQ 266 – (1 Crédito)<br>
											<a href='#'>Taller de Amereida 4</a></li>
											<li>ARQ 251 – (1 Crédito)<br>
											<a href='#'>Cultura del Cuerpo 3</a></li>
										</ul>
									</td>
									<td>
										<ul class='curso-malla'>
											<li>ARQ 271 - (2 Créditos)<br>
											<a href='#'>Presentación del Diseño Gráfico 1</a></li>
											<li>ARQ 267 – (1 Crédito)<br>
											<a href='#'>Taller de Amereida 5</a></li>
											<li>ARQ 252 – (1 Crédito)<br>
											<a href='#'>Cultura del Cuerpo 4</a></li>
											<li>ARQ 281 – (2 Créditos)<br>
											<a href='#'>Taller de Construcción 2</a></li>
											<li>ARQ 286 – (2 Créditos)<br>
											<a href='#'>Lenguaje Computacional 1</a></li>
											<li>ARQ 287 – (2 Créditos)<br>
											<a href='#'>Lenguaje Tipográfico</a></li>
										</ul>
									</td>
									<td>
										<ul class='curso-malla'>
											<li>ARQ 285 – (10 Créditos)<br>
											<a href='#'>Taller de Diseño Gráfico 4ª Etapa</a></li>
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
                  	<h2>Profesores de diseño gráfico</h2>
                  	<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='http://ipark2012ephemeraltravesia.files.wordpress.com/2012/09/silvia-arriagada.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>Sylvia Arriagada</h4>
							<h6>Diseñadora Gráfica</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile. <br> Doctor©; PUC-Río, Río de Janeiro, Brasil.</p>
						</div>
					</div>
					<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='http://ipark2012ephemeraltravesia.files.wordpress.com/2012/09/jose-balcells.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>José Balcells</h4>
							<h6>Diseñador Gráfico, escultor</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile.</p>
						</div>
					</div>
					<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='http://wiki.ead.pucv.cl/images/5/59/Katherine_exss_wiki.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>Katherine Exss</h4>
							<h6>Diseñadora Gráfica</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Diseñador Gráfico; P.U. Católica de Valparaíso, Chile.<br>MA Information Design, University of Reading, Reino Unido.</p>
						</div>
					</div>
					<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='https://farm4.staticflickr.com/3262/3483598559_d1c644fb76_q.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>Alejandro Garretón</h4>
							<h6>Diseñador Gráfico</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile.<br>Doctor ©; PUC-Río, Río de Janeiro, Brasil.</p>
						</div>
					</div>
					<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='https://farm4.staticflickr.com/3157/3082752662_1d39dde79b_q.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>Manuel Sanfuentes</h4>
							<h6>Diseñador Gráfico</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile.</p>
						</div>
					</div>
					<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='https://farm6.staticflickr.com/5194/7176578488_3c88076e53_q.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>Herbert Spencer</h4>
							<h6>Diseñador Gráfico</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile.<br>MDes Interaction Design; Carnegie Mellon University, EE.UU. <br>Doctor ©; PUC-Río, Río de Janeiro, Brasil.</p>
						</div>
					</div>
					<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='https://farm5.staticflickr.com/4004/4481267383_02353ef1ba_q.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>Michèle Wilkomirsky</h4>
							<h6>Diseñadora Gráfica</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile. <br>Doctor©; Universidad Rey Juan Carlos de Madrid, España.</p>
						</div>
					</div>
                  	<h2>Profesores ayudantes</h2>
                  	<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='https://farm8.staticflickr.com/7207/6979639313_f74d11b3cd_q.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>Karen Carrera</h4>
							<h6>Diseñadora Gráfica</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Ayudante de Diseño gráfico</p>
						</div>
					</div>
					<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='http://eadpucv.github.io/giornata/img/ayudante3.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>Jaime Pérez Moena</h4>
							<h6>Diseñador Gráfico</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Ayudante de Diseño Gráfico</p>
						</div>
					</div>
					<div class='pagina docente historia'>
						<div class='imagen-docente historia'>
							<img class='ancho-maximo' src='http://eadpucv.github.io/giornata/img/ayudante1.jpg'>
						</div>
						<div class='datos-docente historia'>
							<h4 class='rojo-claro'>Macarena Álamos</h4>
							<h6>Diseñadora Gráfica</h6>
						</div>
						<div class='resena-docente historia'>
							<p>Ayudante de Diseño Gráfico</p>
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
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
					<div class='col-lg-9 col-md-9 col-sm-12 col-xs-12'>
						<?php the_content(); ?>
					<!--<div class='fila'>
							<h5 class='rojo-claro cuerpo-docente margen-inferior'>Profesores de la Escuela</h5>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/marcelo-araya.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Marcelo Araya</h4>
										<h6>Diseñador Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseño industrial; P.U. Católica de Valparaíso, Chile. <br>Doctor©; Universidad Rey Juan Carlos de Madrid, España.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/silvia-arriagada.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Sylvia Arriagada</h4>
										<h6>Diseñadora Gráfica</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile. <br> Doctor©; PUC-Río, Río de Janeiro, Brasil.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/jose-balcells.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>José Balcells</h4>
										<h6>Diseñador Gráfico, escultor</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/patricio-caraves.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Patricio Cáraves</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; UPC Barcelona, España.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/arturo-chicano.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Arturo Chicano</h4>
										<h6>Diseñador Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador industrial; P.U. Católica de Valparaíso, Chile. <br>Doctor ©; PUC-Río, Río de Janeiro, Brasil.<br>Vicerector de Desarrollo PUCV</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/carlos-covarrubias.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Carlos Covarrubias</h4>
										<h6>Poeta</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Profesor del taller de amereida</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/katherine-exss.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Katherine Exss</h4>
										<h6>Diseñadora Gráfica</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador Gráfico; P.U. Católica de Valparaíso, Chile.<br>MA Information Design, University of Reading, Reino Unido.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/miguel-eyquem.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Miguel Eyquem</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Chile, Chile. <br>Doctor Honoris Causa; P.U. Católica de Valparaíso, Chile.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/jorge-ferrada.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Jorge Ferrada</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile.<br>Doctor; UPC Barcelona, España.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/andres-garces.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Andrés Garcés</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile.<br>Doctor©; UPC Barcelona, España.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/alejandro-garreton.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Alejandro Garretón</h4>
										<h6>Diseñador Gráfico</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile.<br>Doctor ©; PUC-Río, Río de Janeiro, Brasil.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/boris-ivelic.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Boris Ivelic</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/ivan-ivelic.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Iván Ivelic</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; U. Rey Juan Carlos de Madrid, España.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/juan-carlos-jeldes.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Juan Carlos Jeldes</h4>
										<h6>Diseñador Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador industrial; P.U. Católica de Valparaíso, Chile. <br>Doctor ©; PUC-Río, Río de Janeiro, Brasil.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/david-jolly.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>David Jolly</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; UPC Barcelona, España.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/ricardo-lang.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Ricardo Lang</h4>
										<h6>Diseñador Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador industrial; P.U. Católica de Valparaíso, Chile.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/david-luza.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>David Luza</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; UPC Barcelona, España.<br>Decano de la facultad</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/mauricio-puentes.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Mauricio Puentes</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile.<br>Doctor; UPC Barcelona, España.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/juan-purcell.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Juan Purcell</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/jaime-reyes.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Jaime Reyes</h4>
										<h6>Diseñador Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador industrial; P.U. Católica de Valparaíso, Chile. <br>Magíster en Historia; P.U. Católica de Valparaíso, Chile. <br>Doctor ©; PUC-Río, Río de Janeiro, Brasil.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/isabel-margarita.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Isabel Margarita Reyes</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/rodrigo-saavedra.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Rodrigo Saavedra</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Doctor; UPC Barcelona, España.<br>Director Escuela de Arquitectura y Diseño</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/floro.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Manuel Sanfuentes</h4>
										<h6>Diseñador Gráfico</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/herbert-spencer.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Herbert Spencer</h4>
										<h6>Diseñador Gráfico</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile.<br>MDes Interaction Design; Carnegie Mellon University, EE.UU. <br>Doctor ©; PUC-Río, Río de Janeiro, Brasil.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/michele-wilkomirsky.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Michèle Wilkomirsky</h4>
										<h6>Diseñadora Gráfica</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile. <br>Doctor©; Universidad Rey Juan Carlos de Madrid, España.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/salvador-zahr.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Salvador Zahr</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Arquitecto; P.U. Católica de Valparaíso, Chile. <br>Estudios de posgrado en Estructuras de Hormigón Armado; Politécnico de Milán, Italia.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="fila">
							<h5 class='rojo-claro cuerpo-docente margen-inferior'>Junto a un destacado equipo de profesores de dedicación parcial</h5>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/luis-alvarez.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Luis Álvarez</h4>
										<h6>Geógrafo</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Licenciado en Historia, PUCV<br>Magíster en Urbanismo, Universidad de Chile<br>Profesor de Posgrado y Geografía del Gran Valparaíso</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/maurice-alvarado.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Maurice Alvarado</h4>
										<h6>Sacerdote, Diócesis de Valparaíso</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Profesor de Cultura Religiosa PUCV<br>Bachiller en Ciencias Religiosas, Magíster en Teología PUCV<br>Doctor (C) en Teología Práctica, Universidad Pontificia de Salamanca</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/jorge-barahona.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Jorge Barahona</h4>
										<h6>Diseñador Gráfico</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador de Experiencia de Usuarios y Servicios<br>Arquitecto de Información<br>Profesor de Lenguaje Computacional</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/carlos-ceruti.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Carlos Ceruti</h4>
										<h6>Licenciado en Arte, PUCV</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Magíster en Ciudad y Territorio, Pontificia Universidad Católica de Valparaíso</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/peter-kroeger.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Peter Kroeger</h4>
										<h6>Artista Plástico</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Instituto de Arte</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/carlos-navarrete.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Carlos Navarrete</h4>
										<h6>Director Escuela de Educación Física</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Profesor Cultura del Cuerpo</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/baldomero-estrada.png'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Baldomero Estrada</h4>
										<h6>Licenciado en Historia, PUCV</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Master of Arts, University of Pittsburgh<br>Doctor en Historia, Universidad Complutense de Madrid<br>
										Profesor de Historia, Geografía y Ciencias Sociales, PUCV</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/raul-gonzalez.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Raúl González</h4>
										<h6>Diseñador Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Pontificia Universidad Católica de Valparaíso<br>Profesor de Visualización y Modelado 3D, MADLAB</p>
									</div>
								</div>
							</div>
						</div>
						<div class='fila'>
							<h5 class='rojo-claro cuerpo-docente margen-inferior'>Profesores asistentes</h5>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/no-image.png'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Álvaro Mercado</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Arquitectura</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/erick-caro.png'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Erick Caro</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Arquitectura</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/oscar-andrade.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Óscar Andrade</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Arquitectura</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/daniela-salgado.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Daniela Salgado</h4>
										<h6>Diseñadora Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Diseño Industrial</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/ursula-exss.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Ursula Exss</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Arquitectura</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/vanessa-siviero.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Vanessa Siviero</h4>
										<h6>Diseñadora Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador Industrial; P.U. Católica de Valparaíso, Chile. Doctor ©; PUC-Río; Río de Janeiro, Brasil.</p>
									</div>
								</div>
							</div>
						</div>
						<div class='fila'>
							<h5 class='rojo-claro cuerpo-docente margen-inferior'>Profesores agregados</h5>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/alfred-thiers.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Alfred Thiers</h4>
										<h6>Diseñador Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Diseñador gráfico; P.U. Católica de Valparaíso, Chile.<br>MDes Interaction Design; Carnegie Mellon University, EE.UU. <br>Doctor ©; PUC-Río, Río de Janeiro, Brasil.</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/belen-reed.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Belén Reed</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>-</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/ana-belen-oyarzun.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Ana Belén Oyarzún</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>-</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/manuel-toledo.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Manuel Toledo</h4>
										<h6>Diseñador Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Diseño Gráfico</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/camila-fuenzalida.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Camila Fuenzalida</h4>
										<h6>-</h6>
									</div>
									<div class='resena-docente listado'>
										<p>-</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/elisa-donoso.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Elisa Donoso</h4>
										<h6>-</h6>
									</div>
									<div class='resena-docente listado'>
										<p>-</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/catalina-bodelon.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Catalina Bodelón</h4>
										<h6>Arquitecto</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Pontificia Universidad Católica de Valparaíso<br>Master of Design Science (Sustainable Design), University of Sydney, Australia</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/karen-carrera.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Karen Carrera</h4>
										<h6>Diseñadora Gráfica</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Diseño gráfico</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/pedro-garreton.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Pedro Garretón</h4>
										<h6>Diseñador Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Diseño Industrial, MADLAB</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/jaime-perez.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Jaime Pérez Moena</h4>
										<h6>Diseñador Gráfico</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Diseño Gráfico</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/macarena-alamos.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Macarena Álamos</h4>
										<h6>Diseñadora Gráfica</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ayudante de Diseño Gráfico</p>
									</div>
								</div>
							</div>
						</div>
						<div class='fila'>
							<h5 class='rojo-claro cuerpo-docente margen-inferior'>Staff</h5>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/danisa-peric.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Danisa Peric</h4>
										<h6>Diseñadora Industrial</h6>
									</div>
									<div class='resena-docente listado'>
										<p>MADLAB</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/catalina-porzio.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Catalina Porzio</h4>
										<h6>Diseñadora Gráfica</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Taller de Investigaciones Gráficas</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/no-image.png'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Antonia Casali</h4>
										<h6>Diseñadora Gráfica</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Taller de Investigaciones Gráficas</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/francesca-cambiaso.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Francesca Cambiaso</h4>
										<h6>Periodista</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Vinculación con el medio</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/adolfo-espinoza.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Adolfo Espinoza</h4>
										<h6>Diseñador Gráfico</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Ediciones y Archivo Histórico José Vial Armstrong</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/rodrigo-moya.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Rodrigo Moya</h4>
										<h6>Ingeniero Informático</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Sistema back-end de plataformas digitales</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/helga-ponce.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Helga Ponce</h4>
										<h6>Secretaria</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Secretaria de docencia</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/sigris-cartagena.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Sigris Cartagena</h4>
										<h6>Secretaria</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Decanato</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='<?php bloginfo('template_directory') ?>/img/no-image.png'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Sonia Rodriguez</h4>
										<h6>Secretaria</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Secretaria Dirección</p>
									</div>
								</div>
							</div>
							<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
								<div class='pagina docente'>
									<div class='imagen-docente listado'>
										<img class='ancho-maximo' src='https://farm3.staticflickr.com/2405/1805010771_1cba4ce8f7_q.jpg'>
									</div>
									<div class='datos-docente listado'>
										<h4 class='rojo-claro'>Luis Romanque</h4>
										<h6>Diseñador Gráfico</h6>
									</div>
									<div class='resena-docente listado'>
										<p>Taller de investigaciones gráficas, diplomado en tipografia</p>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<?php get_sidebar(); ?>
			</div>
		</div>
	</div>	
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>
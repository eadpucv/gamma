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
                  <div class='bloque' id="bloque_texto"><?php the_content(); ?></div>

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
<?php get_header();
  if (have_posts()) : while (have_posts()) : the_post();
?>
    <div class='fondo-negro'>
        <div class='wrap'>
  <div class='contenedor-sin-relleno oculto-xs'>
    <?php the_breadcrumb(); ?>
  </div>
            <h1 class="entry-title especifico"><?php the_title(); ?></h1> <!-- título del post -->
        </div>
    </div>

    <!-- contenido -->
    <div class='fondo-blanco'>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class='fila'>
                <div class='fondo-blanco'>
                    <div class='wrap'>
                        <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class='noticia grande'>
                                        <div class='noticia-imagen'>
                                            <img class='marco-imagen carousel-historia' alt="First slide" title="Noticia Destacada" src='http://www.ead.pucv.cl/wp-content/archivos/2010/04/amereida2010_clase1_12.jpg'>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class='noticia grande'>
                                        <div class='noticia-imagen'>
                                            <img class='marco-imagen carousel-historia' alt="Second slide" title="Noticia Destacada" src='http://www.bitacoravirtual.cl/wp-content/uploads/2008/10/huinay.jpg'>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class='noticia grande'>
                                        <div class='noticia-imagen'>
                                            <img class='marco-imagen carousel-historia' alt="third slide" title="Noticia Destacada" src='http://ad010cdnd.archdaily.net/wp-content/uploads/2013/05/518430dbb3fc4b4d52000058_ciudad-abierta-de-ritoque-paisaje-habitado-44-a-os-despu-s_adsc_0176.jpg'>
                                        </div>
                                    </div>
                                </div>  <!-- fin de item -->
                            </div>

                            <!-- Controles -->
                            <a data-slide="prev" href="#carousel-example-generic" class="left carousel-control"><i class="icn icn-nav-izq"></i></a>
                            <a data-slide="next" href="#carousel-example-generic" class="right carousel-control"><i class="icn icn-nav-der"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='fila'>
    <div class='fondo-blanco'>
        <div class='wrap'>
            <div class='historia'>
                <h1 class='rojo-claro'>Amereida</h1>
                <div class='bloque'>
                    <article class="h-entry especifico">
                        <div class="e-content p-summary p-name">
                            <div class='bloque'>
                                
                                <p>Amereida es un poema que reune en su nombre el hallazgo de América y la épica latina del piadoso Eneas escrita en la Eneida. Dos años después de la Travesía del 65 se recolectaron textos diversos, anotaciones, poemas, cartas de los primeros cronistas americanos, blancos enteros, recortes y dibujos, y se realizó un trabajo de edición del material para darle forma a un libro titulado Amereida, sin firma de autor alguno, nada numerando sus páginas y ninguna mayúscula; la primera edición reza: <em>amereida</em>, volumen primero, colección poesía, Santiago, Chile; Editorial Cooperativa Lambda. Inscripción Nº 33306; el libro remata antes de la página de gracia con un <em>15 de mayo de 1967.</em></p>
                                <p>La lectura del texto nos adentra indistintamente en la pregunta permanente por el ser americano a partir del reconocimiento de la aparición de América vista como un hallazgo; desde el primer poema el encuentro con lo desconocido abre la posibilidad para comenzar a pensar el nuevo mundo tal un <em>regalo</em>, un don; su seña: la Cruz del Sur, ((Ver también: Reflexiones en torno a la Cruz del Sur.)) la luz que remonta el horizonte y guía en el septentrion.</p>
                                <p>En la página 147 del volumen segundo ((Publicado en 1986 por el <a title=".:Tig:." href="http://www.ead.pucv.cl/mundo/investigacion/tig/" target="_self">Taller de Investigaciones Gráficas</a>, Escuela de Arquitectura UCV.))- la pregunta <em>¿qué es amereida?</em> línea abajo sigue así:
<blockquote><em>y a caballo</em></p>
                                <p><em>un niño de allí
me prestó un caballo
por la playa y el pasto</em></blockquote>
El texto se abre siempre al verso siguiente y <em>equivoca la esperanza</em>, lo aguarda; bordea el sujeto –como Mallarmé– sin retenerle, y reposa nítidamente en una poética del blanco para recoger el silencio del habla, como el lapso que se da entre los actos de lo extraordinario. La Travesía de Amereida se constituyó como un tiempo extendido <em>en el acto</em> que atravieza América y le canta su aparecer.</p>
                            </div>
                        </div>
                    </article> 
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>

<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>
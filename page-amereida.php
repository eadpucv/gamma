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
            <?php the_content();  ?>
        </div>
    </div>
</div>

<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>
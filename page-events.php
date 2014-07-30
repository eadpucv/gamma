<?php get_header(); ?>
<?php if ($_GET["calendar_day"]) {
    $EM_Events =  EM_Events::get(array('scope'=>$_GET["calendar_day"], 'limit'=>20, 'orderby'=>'start_date')); 
  } else {
    $EM_Events =  EM_Events::get(array('scope'=>'all', 'limit'=>20, 'orderby'=>'start_date')); 
  } ?>
<div class='fondo-gris'>
  <div class='wrap'>
    <h1 class="entry-title especifico"><i class="icn icn-calendario icn-sm"></i> Eventos  <?php if ($_GET["calendar_day"]) { ?> | <?php echo date("d", strtotime($_GET["calendar_day"])); ?> de <?php echo date("F", strtotime($_GET["calendar_day"]));  } ?>  </h1> <!-- título del post -->
  </div>
</div>
<div class='fondo-gris'>
  <div class='wrap'>
    <div class='fila'>
      <div class='col-lg-9 col-md-9 col-sm-12'>
        <div class='fila'>
          <div class='col-lg-3 col-md-4 oculto-sm oculto-xs cf'>
            <div class='menu-affix'>
              <div data-spy="affix" data-offset-top="270" data-offset-bottom='500'>
                <div class="pagina calendario">
                  <?php echo EM_Calendar::output(array('full'=>0, 'long_events'=>5)) ?>
                </div>
              </div>
            </div>
          </div>
          <div class='col-lg-9 col-md-8 col-sm-12 col-xs-12'>
            <div class='fila'>
              <?php foreach ( $EM_Events as $EM_Event ) { ?>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                  <a href='<?php echo $EM_Event->guid; ?>' class='bloque-enlace portada evento'>
                    <div class='franja-seguir fija'>
                      <p>seguir leyendo <i class='icn icn-lentes icn-md'></i></p>
                    </div>
                    <div class='pagina evento portada'>
                        <div class='dato-evento portada'> 
                          <p class='dia centrado'>
                            <?php echo date("d", strtotime($EM_Event->start_date)); ?> <?php echo date("F", strtotime($EM_Event->start_date)); ?> <?php if ($EM_Event->end_date != $EM_Event->start_date) { ?>  - <?php } ?>
                            <?php if ($EM_Event->end_date != $EM_Event->start_date) { ?> <?php echo date("d", strtotime($EM_Event->end_date)); ?> <?php echo date("F", strtotime($EM_Event->end_date)); } ?> 
                          </p>
                        </div>  
                        <h4 class='rojo-claro'><?php echo $EM_Event->name;?></h4> 
                        <aside class='blanco entry-details'>Publicado el 22 de mayo, 2014</aside> 
                        <p class='extracto'><?php echo the_excerpt_of_text_max_charlength(250,strip_tags ( $EM_Event->post_content )); ?></p>
                    </div>
                  </a>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
  </body>
</html>
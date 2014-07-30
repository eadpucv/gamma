<?php $EM_Events =  EM_Events::get(array('scope'=>'all', 'limit'=>4, 'orderby'=>'start_date')); ?>
                   
<div class='seccion'>
    <a href='<?php echo get_permalink( get_page_by_title( 'Eventos' ) ); ?>'><h5><i class="icn icn-calendario icn-md"></i> Eventos</h5></a>
</div>
<div class='fila'>
  <?php foreach ( $EM_Events as $EM_Event ) { ?>
    <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 alto-sm'>
      <a href='<?php echo $EM_Event->guid; ?>' class='enlace-evento'>
        <div class='pagina sm evento'>
          <div class='franja-seguir'>
            <p>seguir leyendo <i class='icn icn-lentes icn-md'></i></p>
          </div>
            <div class='dato-evento'> 
              <p class='dia centrado'><?php echo date("d", strtotime($EM_Event->start_date)); ?> <?php echo date("M", strtotime($EM_Event->start_date)); ?></p> 
            </div>  
            <h6 class='rojo-claro'><?php echo $EM_Event->name;?></h6> 
            <p><?php echo the_excerpt_of_text_max_charlength(180,strip_tags ( $EM_Event->post_content )); ?></p>
        </div>
      </a>
    </div>   
  <?php } ?>
</div>
<?php wp_reset_query(); ?>

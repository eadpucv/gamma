<?php $EM_Events =  EM_Events::get(array('scope'=>'all', 'limit'=>4, 'orderby'=>'start_date')); ?>
                   
<div class='seccion'>
    <a href='<?php echo get_permalink(25432); ?>'><h5><i class="icn icn-calendario icn-md"></i> Eventos</h5></a>
</div>
<div class='fila'>
  <?php foreach ( $EM_Events as $EM_Event ) { ?>
    <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 alto-sm'>
      <a href='<?php echo $EM_Event->guid; ?>' class='enlace-evento'>
        <div class='pagina sm evento'>
          <div class='franja-seguir'>
            <p>seguir leyendo +</p>
          </div>
            <div class='dato-evento'> 
              <p class='dia centrado'><?php echo date("d", strtotime($EM_Event->start_date)); ?> <?php echo date("M", strtotime($EM_Event->start_date)); ?></p> 
            </div>  
            <h6 class='rojo-claro'><?php echo $EM_Event->name;?></h6> 
            <p><?php echo strip_tags(substr($EM_Event->post_content,0, 300)); ?></p> 
        </div>
      </a>
    </div>   
  <?php } ?>
</div>
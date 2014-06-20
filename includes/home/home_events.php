<?php $EM_Events =  EM_Events::get(array('scope'=>'all', 'limit'=>4, 'orderby'=>'start_date')); ?>
                   
<div class='seccion'>
    <h3><i class="icn icn-calendario icn-lg"></i> Eventos </h3>
</div>
<div class='fila'>
  <?php foreach ( $EM_Events as $EM_Event ) { ?>
    <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 alto-sm'>
      <a href='<?php echo $EM_Event->guid; ?>' class='bloque-enlace'>
        <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
        <div class='pagina sm evento'>
            <div class='dato-evento'> 
              <p class='dia centrado'><?php echo date("d", strtotime($EM_Event->start_date)); ?> <?php echo date("M", strtotime($EM_Event->start_date)); ?></p> 
            </div>  
            <h6 class='rojo-claro'><?php echo $EM_Event->name;?></h6> 
            <p><?php echo substr($EM_Event->post_content,0, 250) ;?></p> 
        </div>
      </a>
    </div>   
  <?php } ?>
</div>
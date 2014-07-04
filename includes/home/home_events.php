<?php $EM_Events =  EM_Events::get(array('scope'=>'all', 'limit'=>3, 'orderby'=>'start_date')); ?>
                   
<div class='seccion'>
    <h5><i class="icn icn-calendario icn-md"></i> Eventos </h5>
</div>
<div class='fila'>
  <?php foreach ( $EM_Events as $EM_Event ) { ?>
    <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 alto-sm'>
      <a href='<?php echo $EM_Event->guid; ?>' class='enlace-evento'>
        <p class='seguir-leyendo'>Seguir leyendo</p><p class='seguir-leyendo ver-mas'>+</p>
        <div class='pagina sm evento'>
            <div class='dato-evento'> 
              <p class='dia centrado'><?php echo date("d", strtotime($EM_Event->start_date)); ?> <?php echo date("M", strtotime($EM_Event->start_date)); ?></p> 
            </div>  
            <h6 class='rojo-claro'><?php echo $EM_Event->name;?></h6> 
            <p><?php  echo substr($EM_Event->post_content,0, 250) ?></p> 
        </div>
      </a>
    </div>   
  <?php } ?>
    <div class='col-lg-3 derecha col-md-4 oculto-sm oculto-xs alto-md'>
    <a class="twitter-timeline"  href="https://twitter.com/eadpucv"  data-widget-id="451107933158244352">Tweets por @eadpucv</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div>
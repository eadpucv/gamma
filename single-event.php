<?php get_header(); global $post; ?>
<div class='fondo-blanco'>
  <div class='wrap'>
  	    <div class='contenedor-sin-relleno oculto-xs'>
      <?php the_breadcrumb(); ?>
    </div>
  	<div class='numero-evento'>
		<?php echo date("d", strtotime($EM_Event->start_date)); ?> <?php if ($EM_Event->end_date != $EM_Event->start_date) { ?> - <?php } ?> <p class='dia-evento'><?php echo date("F", strtotime($EM_Event->start_date)); ?></p> 
	</div>
	<?php if ($EM_Event->end_date != $EM_Event->start_date) { ?>
		<div class='numero-evento'>
			<?php echo date("d", strtotime($EM_Event->end_date)); ?><p class='dia-evento'><?php echo date("F", strtotime($EM_Event->end_date)); ?></p> 
		</div>
	<?php } ?>
	<div class='datos-evento'>
		<h1 class="entry-title especifico"><?php echo $EM_Event->name;?></h1> <!-- título del post -->
		<aside class='entry-details blanco'>
			<?php if ( $EM_Event->output('#_24HSTARTTIME') === $EM_Event->output('#_24HENDTIME')) { ?>
				A las <?php echo $EM_Event->output('#_24HSTARTTIME'); ?>
			<?php } else { ?>
				Desde las <?php echo $EM_Event->output('#_24HSTARTTIME'); ?> a <?php echo $EM_Event->output('#_24HENDTIME'); ?>
			<?php } ?><br />
			Publicado el  <?php the_time("d")?> de <?php the_time("F, Y") ?>
		</aside>
	</div>
  </div>
</div>
<div class='fondo-blanco'>
	<div class='wrap'>
		<div class='fila'>
			<div class='col-lg-9 col-md-9 col-sm-12'>
			   <div class='bloque'>
    				<article class="h-entry">
        				<div class="e-content p-summary p-name">
            			<div class='bloque'>
            				<?php echo $EM_Event->post_content?>
            			</div>
        				</div>
						<div class='keywords'>
						   <p class='palabras'><?php the_tags(__('Tags: '), ', ', ' ') ?></p>
						</div>        				
    				</article> 
				</div>
				<div class='bloque mapa'>
					<?php echo $EM_Event->output('#_MAP'); ?>
				</div>
      	</div>
      	<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
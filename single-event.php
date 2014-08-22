<?php get_header(); global $post; ?>
<div class='fondo-negro'>
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
		<aside class='entry-details evento'>
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
<div class='fondo-gris'>
	<div class='wrap'>
		<div class='fila'>
			<div class='col-lg-12 col-md-12 col-sm-12'>
			   <div class='bloque'>
    				<article class="h-entry">
        				<div class="e-content p-summary p-name">
            			<div class='bloque'>
            				<?php echo $EM_Event->output('#_NOTES'); ?>
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
		</div>
	</div>
	<!--<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
  <div class='wrap'>
    <div class='fila'>
      <div class="e-content p-summary p-name">
        <div class='bloque'>
            <?php

      if (is_single()) {
        $tags = wp_get_post_tags($post->ID);
        $args=array('tag__in' => array($tags[0]->term_id,$tags[1]->term_id,$tags[2]->term_id ),'post__not_in' => array($post->ID),'posts_per_page'=>7,'caller_get_posts'=>1);
        $related_posts = new WP_Query($args);
      } else if (is_page( 'diseno-grafico' ) ) {
        $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(8)));
      } else if (is_page( 'arquitectura' ) ) {
        $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(7)));
      } else if (is_page( 'diseno-industrial' ) ) {
        $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(9)));
      } else if (is_category()) {
        $category = get_category(get_query_var('cat'));
        $cat_id = $category->cat_ID;
        if (is_category( 'docencia' ) ) {
          $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array(123)));
        } else {
          $related_posts = new WP_Query( array('posts_per_page' => 7, 'category__in' => array($cat_id)));
        }

      }

      // Noticias
      $latest_cat_post = new WP_Query( array('posts_per_page' => 7, 'post__not_in' => array($post->ID), 'category__in' => array(1)));
    ?>

        <?php if ($related_posts && $related_posts->have_posts()) { ?>
          <div class='bloque-aside noticia'>
            <h6 class='gris'><i class="icn icn-enlace-hor icn-md"></i> Articulos relacionados </h6>
            <ul class='publicaciones-enlazadas'>
              <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; wp_reset_query(); ?>
            </ul>
          </div>
        <?php } ?>
        <div class='bloque-aside noticia'>
          <h6 class='gris'><i class="icn icn-noticias icn-md"></i> Más noticias</h6>
          <ul class='publicaciones-enlazadas'>
            <?php if ( $latest_cat_post->have_posts() ) { ?>
              <?php while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post(); ?>
                <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; } wp_reset_query(); ?>
          </ul>
          </div>
        </div>
      </div>
    </div> 
  </div>
    </div>-->
</div>
<?php get_footer(); ?>
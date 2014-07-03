<div class='fondo-comentarios'>
	<div class='wrap cf'>
		<div class='col-lg-7 col-md-6 col-sm-12 col-xs-12'>
			<?php if ( $comments ) : ?>
				<?php foreach ($comments as $comment) : ?>
				<div class='contenido-comentario'>
					<div class='imagen-usuario'></div>
				 	<div class='bloque-comentario'>
				   	<h3 class='usuario'><i class="icn icn-acto icn-md"></i> <?php comment_author_link() ?></h3>
				   	<p class='contacto'><i class="icn icn-email icn-md"></i> <?php comment_author_email() ?></p>				 		
				   	<div class='comentario'>
				     		<?php comment_text() ?>
				   	</div>
				 	</div>
				</div>									
				<?php endforeach; ?>
			<?php else : // If there are no comments yet ?>
				<p><?php _e('Aun no hay comentarios en esta publicación'); ?></p>
			<?php endif; ?>
		</div>
		<?php if ( comments_open() ) : ?>

		<div class='col-lg-5 col-md-6 col-sm-12 col-xs-12'>
			<div class='comentar'>
				<?php comment_form(array('title_reply'=>'Deja un comentario.','comment_notes_before' => ' ','comment_notes_after' => ' ',)); ?>
			</div>
		</div>
		<?php endif; ?>
<div class='fondo-comentarios'>
	<div class='wrap cf'>
		<div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>
			<?php if ( $comments ) : ?>
				<?php foreach ($comments as $comment) : ?>
				<div class='contenido-comentario'>
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
				<p><?php _e('Aún no hay comentarios en esta publicación'); ?></p>
			<?php endif; ?>
		</div>
		<?php if ( comments_open() ) : ?>
			<div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>
				<?php 
					$fields =  array(
					  'author' =>
					    '<div class="grupo"><label for="author">' . __( 'Nombre', 'domainreference' ) . '</label> '.
					    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					    '" size="30"' . $aria_req . ' /></div>',

					  'email' =>
					    '<div class="grupo"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
					    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
					    '" size="30"' . $aria_req . ' /></div>'
					);
				?>				
				<div class='comentar'>
					<?php comment_form(array(
						'fields'=> $fields,'title_reply'=>'',
						'comment_notes_before' => ' ',
						'comment_notes_after' => ' ',
						'label_submit' => __( 'Comentar' ), 
						'comment_field' =>  	'<p class="comment-form-comment"><label for="comment">' . _x( 'Comentario', 'noun' ) .
    												'</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    												'</textarea></p>',
    					'label_submit' => __( 'Comentar' ),
						'must_log_in' => '<p class="must-log-in">' .
						 sprintf(
						   __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
						   wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
						 ) . '</p>',

						'logged_in_as' => '<p class="logged-in-as">' .
						 sprintf(
						 __( '<leyend>Comentaras como : <a href="%1$s">%2$s</a>.</leyend>' ),
						   admin_url( 'profile.php' ),
						   $user_identity,
						   wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
						 ) . '</p>',    					

    					)); ?>
				</div>

			</div>
		<?php endif; ?>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($) { //noconflict wrapper
	    $('#commentform').addClass('md');
	    $('#commentform').prepend("<legend>Deja un comentario en esta noticia.</legend>");
	    $('input#submit').addClass('btn btn-md gris');
	});
</script>
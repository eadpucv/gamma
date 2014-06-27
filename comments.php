<div class='fondo-comentarios'>
	<div class='wrap cf'>
		<div class='col-lg-7 col-md-6 col-sm-12 col-xs-12'>
			<?php if ( $comments ) : ?>
				<?php foreach ($comments as $comment) : ?>
				<div class='contenido-comentario'>
					<div class='imagen-usuario'></div>
				 	<div class='bloque-comentario'>
				   	<h3 class='usuario'><i class="icn icn-acto icn-md"></i> <?php comment_author_link() ?></h3>
				   	<div class='comentario'>
				     		<?php comment_text() ?>
				   	</div>
				 	</div>
				</div>									
				<?php endforeach; ?>
			<?php else : // If there are no comments yet ?>
				<p><?php _e('No comments yet.'); ?></p>
			<?php endif; ?>
		</div>
		<?php if ( comments_open() ) : ?>
		<div class='col-lg-5 col-md-6 col-sm-12 col-xs-12'>
			<div class='comentar'>
				<form class='md' action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
					<legend>Deja un comentario en esta noticia</legend>
					<div class='grupo'>
						<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
						<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

						<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
						<label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label></p>

						<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
						<label for="url"><small><?php _e('Website'); ?></small></label></p>      	
					  	<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
					</div>
					<input type='submit' class='btn btn-md gris' value='Comentar'>
				</form>
			</div>
		</div>
		<?php endif; ?>
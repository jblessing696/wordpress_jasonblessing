<?php
register_nav_menus(array(
	'primary' => 'Primary Navigation'
));

function jason_comment_form() {
	global $post;
	?>
	<div class="my-form"><h3>Add a Comment</h3>
	<form method="post" action="<?php bloginfo('url');?>/wp-comments-post.php">
		<input type="hidden" name="comment_post_ID" value=<?php echo $post->ID ?>/>
		<input type="hidden" name="comment_parent" id="comment_partent" value="0"/>
		
		<input name="author" type="text" placeholder="Author"/>
		<input name="email" type="text" placeholder="E-mail"/>
		<input name="website" type="text" placeholder="Website"/>
		<textarea class="span8" rows="10" name="comment" placeholder="Comment"></textarea>
		<input class="btn btn-success" name="submit" type="submit" value="Post Comment"/>
	</form>
	</div>
	<?php
}


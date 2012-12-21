<!DOCTYPE html>
<html>
	<head>
		<?php get_header() ?>
	</head>
	<body>
		<div id="wrapper">
		<header>
			<h1><?php bloginfo('name')?></h1>
		</header>
			<nav id="primary-nav">
				<?php get_template_part('nav')?>
			</nav>
			<div id="main">
				<div class="row">
					
					<div class="span9">
						<?php 
						/**
						 * check to see if the current request
						 * is_category()
						 * is_front_page()
						 * is_home()
						 * is_404()
						 * is_archieve()
						 * is_page()
						 * is_single() --> e.g. a single post
						 * is_tag()
						 * is_search() --> a page display search results
						 */
						if(is_home()) {
							get_template_part('content','home');
							
						} elseif (is_page()  || is_single()) {
							get_template_part('content','single');
						
						} elseif(is_search()) {
							get_template_part('content','search');
							
						} else{
							get_templete_part('content','blog');
						}
						
						?>
					</div>
				
		
				<div class="span3">
					<?php get_sidebar()?>
				</div>
			</div>
		</div>
		<div>
			<footer>
				<?php get_footer() ?>
			</footer>
		</div>
	</body>
	</html>
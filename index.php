<html>
	<!DOCTYPE html>
	<head>
		<?php wp_head(); ?>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		</head>
	<body>
		<?php get_header();?>
		<div class="main">
			<?php the_content() ?>
		</div>
		<?php get_footer();?>
		<?php wp_footer();?>
	</body>
</html>
<style>
	.main{
		--margin:1%;
		margin-left:var(--margin);
		margin-right:var(--margin);
	}
</style>
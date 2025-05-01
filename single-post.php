<html>
<!DOCTYPE html>

<head>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
	<?php get_header("blog"); ?>
	<div class="main">
		<div class="content"><?php the_content() ?></div>
		<?php
		if (comments_open()){
			comments_template();
		}else{};
		?>
	</div>
	</div>
	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>

</html>
<style>
	.main {
		border: 3px solid var(--dark);
		border-top: none;
		border-bottom: none;
		padding: 1%;
	}

	.main>hr {
		color: var(--secondary);
		border: none;
		border-top: 0.6vh double var(--secondary);
		text-align: center;
		overflow: visible;
		--antimargin: -0.5vw;
		margin-left: var(--antimargin);
		margin-left: var(--antimargin);
	}

	.main>hr::after {
		content: '§';
		background-color: var(--bgc);
		padding: 0 4px;
		position: relative;
		top: -13px;
	}
</style>
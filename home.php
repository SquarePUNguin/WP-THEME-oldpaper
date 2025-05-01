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
		<?php if (have_posts()):
			while (have_posts()):
				the_post(); ?>
				<div class="post">
					<div title="<?php the_title() ?>">
						<H3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></H3>
						<p>
							<?php the_excerpt() ?>
						</p>

					</div>
				</div>
			<?php endwhile; else: ?>
			Записей нет.
		<?php endif; ?>
	</div>
	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>

</html>
<style>
	.main {
		margin: 0px 1.5vw 0px 1.5vw;
		display: grid;
		grid-template-rows: repeat(<?php echo ceil((wp_count_posts()->publish) / 3) ?>, minmax(0, 40vh));
		grid-template-columns: 1fr 1fr 1fr;
		gap: 5vw;
		justify-content: center;
	}

	@media (width <=800px) {
		.main {
			grid-template-columns: 1fr 1fr;
		}

	}
</style>
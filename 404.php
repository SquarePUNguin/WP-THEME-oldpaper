<html disabled>
<!DOCTYPE html>

<head>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

	<div class="BG">
		<?php get_header(); ?>
		<div class="main">
			<div class="post">
				<div>
					<h3><a>TITLE</a></h3>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus diam leo, sit amet
						efficitur leo blandit ac. Aliquam commodo mi non ornare luctus. Ut eu dui eu sapien elementum
						volutpat eu aliquam diam. Pellentesque mattis aliquam justo, sed ullamcorper eros porta eu.
						Vivamus
						eget fermentum urna, eu eleifend tortor. Praesent tempor mi non elit eleifend, sit amet sagittis
						ligula venenatis. Maecenas laoreet tellus tellus, sit amet malesuada nisl varius ac. Nunc
						finibus
						odio metus, et aliquam justo pulvinar a. Sed vitae massa nunc. Donec euismod ex sit amet velit
						iaculis venenatis. Integer condimentum metus nec mi fermentum, nec euismod turpis sollicitudin.
						Donec ornare lorem quis massa ullamcorper rhoncus.

						Sed et risus id enim consequat pretium sit amet vel risus. Praesent sit amet imperdiet sem, in
						rhoncus magna. Integer ultrices enim quis arcu ornare finibus. Suspendisse tempor augue lectus.
						Mauris ac efficitur mi, in accumsan nisi. Praesent sit amet massa eu dui consectetur varius.
						Donec
						iaculis ut nibh nec feugiat. Duis elementum, erat nec semper blandit, eros odio maximus quam, ut
						vehicula ligula ligula eu mi. Ut consectetur condimentum tellus id scelerisque. Morbi porttitor
						condimentum nisi, in semper magna sodales eu. Vivamus sit amet purus nulla. Vestibulum ornare
						scelerisque leo, in interdum sapien semper eget. Cras nec elit ac est finibus laoreet. </p>

				</div>
			</div>
			<div class="post">
				<div>
					<h3><a>TITLE</a></h3>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus diam leo, sit amet
						efficitur leo blandit ac. Aliquam commodo mi non ornare luctus. Ut eu dui eu sapien elementum
						volutpat eu aliquam diam. Pellentesque mattis aliquam justo, sed ullamcorper eros porta eu.
						Vivamus
						eget fermentum urna, eu eleifend tortor. Praesent tempor mi non elit eleifend, sit amet sagittis
						ligula venenatis. Maecenas laoreet tellus tellus, sit amet malesuada nisl varius ac. Nunc
						finibus
						odio metus, et aliquam justo pulvinar a. Sed vitae massa nunc. Donec euismod ex sit amet velit
						iaculis venenatis. Integer condimentum metus nec mi fermentum, nec euismod turpis sollicitudin.
						Donec ornare lorem quis massa ullamcorper rhoncus.

						Sed et risus id enim consequat pretium sit amet vel risus. Praesent sit amet imperdiet sem, in
						rhoncus magna. Integer ultrices enim quis arcu ornare finibus. Suspendisse tempor augue lectus.
						Mauris ac efficitur mi, in accumsan nisi. Praesent sit amet massa eu dui consectetur varius.
						Donec
						iaculis ut nibh nec feugiat. Duis elementum, erat nec semper blandit, eros odio maximus quam, ut
						vehicula ligula ligula eu mi. Ut consectetur condimentum tellus id scelerisque. Morbi porttitor
						condimentum nisi, in semper magna sodales eu. Vivamus sit amet purus nulla. Vestibulum ornare
						scelerisque leo, in interdum sapien semper eget. Cras nec elit ac est finibus laoreet. </p>

				</div>
			</div>

		</div>
		<?php get_footer(); ?>
	</div>
	<div class="deathscreen">
		<div>
			<?php $Ermassage=get_page_by_path("404-error");?>
			<h1><?php echo $Ermassage->post_title;?></h1>
			<div>
				<?php
					echo $Ermassage->post_content;
				?>
			</div>
			<?php echo "<button class='GO_HOME' href=" . home_url('/') . ">На домашнюю страницу</button>" ?>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>

</html>

<style>
	/*COOL BG OF OUR 'BROKEN' PAGE :)*/
	html {
		overflow-y: hidden;
	}

	.BG {
		width: 100vw;
		height: 100vh;
		display: grid;
		grid-template-columns: 1fr;
		grid-template-rows: 1fr 10fr 1fr;
	}
	.BG header h1{
		transform: rotate(-5deg);
	}
	.BG footer{
		margin-top:5%;
		transform: rotate(5deg);
	}
	.main {
		margin: 0px 1.5vw 0px 1.5vw;
		display: grid;
		grid-template-rows: repeat(1, 40vh);
		grid-template-columns: 1fr 1fr 1fr;
		gap: 5vw;
		justify-content: center;
	}

	.post {
		text-align: center;
		margin-top: 5vh;
		height: auto;
		max-height: 300px;
		width: 90%;
		transform: rotate(10deg);
	}

	.post:nth-child(2){
		margin-left:30vw;
		transform:rotate(-13deg);
	}

	.BG {
		transform: rotateX(180deg);
		filter: blur(8.7px);
	}

	/*our 404 message div*/
	.deathscreen {
		position: absolute;
		width: 100vw;
		height: 100vh;
		font-family: "SourceSerif";
		overflow-y: scroll;
	}

	.deathscreen h1 {
		font-size: clamp(15rem, 15vw, 40rem);
		color: red;
		text-align: left;
		line-height: 1;
	}

	.deathscreen>div {
		margin-left: 5vw;
	}

	.deathscreen>* p {
		color: var(--secondarybrighter);
		margin-right: 5px;
		width: 75vw;
		font-weight: 900;
		font-size: clamp(0.5rem, 200%, 1.3rem);
	}

	.deathscreen div:nth-child(2) {
		
		margin-bottom: 3vh;
		overflow-y: scroll;
	}

	.deathscreen button {
		background-color: red;
		border-radius: 10px;
		width:  40vw;
		height: 8vh;
		border: none;
		font-size: clamp(0.9rem, 2vw, 5rem);
		font-weight: 800;
		-webkit-text-stroke: 1px white;
	}

	.deathscreen h1:hover {
		cursor: default;
	}

	.deathscreen button:hover {
		cursor: pointer;
	}
</style>
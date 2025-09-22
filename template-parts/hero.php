<?php 
$hero = get_field('hero');
// echo '<pre>';
// print_r($hero);
// echo '</pre>';
?>
<section class="hero">
	<div class="container">
		<div class="hero__content">
			<h1 class="hero__title"><?= $hero['title']?></h1>
			<div class="hero__description">
				<p><?= $hero['text']?></p>
				<a href="<?= $hero['button']['url']?>" target="<?= $hero['button']['target']?>" class="btn--primary"><?= $hero['button']['title']?></a>
			</div>
		</div>

		<div class="hero__background">
			<img src="<?= $hero['background']?>" alt="Dental care background">
		</div>
	</div>
</section>


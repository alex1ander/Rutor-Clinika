<?php 
$steps = get_field('steps');
// echo '<pre>';
// print_r($steps);
// echo '</pre>';
?>


<section class="about" id="about">
	<div class="container">
		<div class="about__text">
			<h2 class="about__title"><?= $steps['title'] ?></h2>
			<p class="about__description"><?= $steps['text'] ?></p>
		</div>

		<div class="about__content">
			<div class="about__image">
				<img src="<?= $steps['image'] ?>" alt="Dental care approach">
			</div>
			<div class="about__steps">
				<?php foreach($steps['steps'] as $index => $step): ?>
					<div class="step">
						<div class="step__number">
							<?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
						</div>
						<div class="step__content">
							<p><?php echo $step['text']; ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>


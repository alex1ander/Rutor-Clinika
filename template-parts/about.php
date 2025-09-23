<?php 
$steps = get_field('steps');
$steps = is_array($steps) ? $steps : null;
?>


<section class="about" id="about">
	<div class="container">
		<div class="about__text">
			<?php if ($steps && !empty($steps['title'])): ?>
			<h2 class="about__title"><?= esc_html($steps['title']) ?></h2>
			<?php endif; ?>
			<?php if ($steps && !empty($steps['text'])): ?>
			<p class="about__description"><?= esc_html($steps['text']) ?></p>
			<?php endif; ?>
		</div>

		<div class="about__content">
			<div class="about__image">
				<?php if ($steps && !empty($steps['image'])): ?>
				<img src="<?= esc_url($steps['image']) ?>" alt="Dental care approach">
				<?php endif; ?>
			</div>
			<div class="about__steps">
				<?php if ($steps && !empty($steps['steps']) && is_array($steps['steps'])): ?>
				<?php foreach($steps['steps'] as $index => $step): ?>
					<div class="step">
						<div class="step__number">
							<?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
						</div>
						<div class="step__content">
						<p><?php echo !empty($step['text']) ? esc_html($step['text']) : ''; ?></p>
						</div>
					</div>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


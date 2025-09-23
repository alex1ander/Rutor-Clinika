<?php 
$our_numbers = get_field('our_numbers');
$our_numbers = is_array($our_numbers) ? $our_numbers : [];
?>

<section class="statistics">
	<div class="container">
		<div class="statistics__content">



			<?php foreach($our_numbers as $block): ?>
			<div class="statistics__item">
				<?php if (!empty($block['title'])): ?>
				<div class="statistics__label"><?= esc_html($block['title']) ?></div>
				<?php endif; ?>
				<div class="statistics__number"><?= !empty($block['number_plus']) ? '+' : ''?><?= isset($block['number']) ? esc_html($block['number']) : ''?></div>
				<?php if (!empty($block['text'])): ?>
				<div class="statistics__description"><?= esc_html($block['text']) ?></div>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>


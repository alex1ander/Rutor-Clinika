<?php 
$our_numbers = get_field('our_numbers');
// echo '<pre>';
// print_r($our_numbers);
// echo '</pre>';
?>

<section class="statistics">
	<div class="container">
		<div class="statistics__content">



			<?php foreach($our_numbers as $block): ?>
			<div class="statistics__item">
				<div class="statistics__label"><?= $block['title'] ?></div>
				<div class="statistics__number"><?= $block['number_plus'] == true  ? '+' : ''?><?= $block['number']?></div>
				<div class="statistics__description"><?= $block['text'] ?></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>


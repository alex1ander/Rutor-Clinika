<?php 
$hero = get_field('hero');
$hero = is_array($hero) ? $hero : null;
?>
<section class="hero">
	<div class="container">
		<div class="hero__content">
			<?php if ($hero && !empty($hero['title'])): ?>
			<h1 class="hero__title"><?= esc_html($hero['title'])?></h1>
			<?php endif; ?>
			<div class="hero__description">
				<?php if ($hero && !empty($hero['text'])): ?>
				<p><?= esc_html($hero['text'])?></p>
				<?php endif; ?>
				<?php if ($hero && !empty($hero['button']) && is_array($hero['button'])): ?>
					<?php $btn = $hero['button']; ?>
					<?php if (!empty($btn['url']) && !empty($btn['title'])): ?>
					<a href="<?= esc_url($btn['url'])?>" target="<?= !empty($btn['target']) ? esc_attr($btn['target']) : '_self' ?>" class="btn--primary"><?= esc_html($btn['title'])?></a>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="hero__background">
			<?php if ($hero && !empty($hero['background'])): ?>
			<img src="<?= esc_url($hero['background'])?>" alt="Dental care background">
			<?php endif; ?>
		</div>
	</div>
</section>


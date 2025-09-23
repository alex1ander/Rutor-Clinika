<?php 
$our_trusted_partners = get_field('our_trusted_partners');
$our_trusted_partners = is_array($our_trusted_partners) ? $our_trusted_partners : null;
?>
<section class="partners">
	<div class="container">
		<?php if ($our_trusted_partners && !empty($our_trusted_partners['title'])): ?>
		<h2 class="partners__title"><?= esc_html($our_trusted_partners['title']) ?></h2>
		<?php endif; ?>
			
		<div class="swiper brand-swiper">
			<div class="swiper-wrapper">
				<?php if ($our_trusted_partners && !empty($our_trusted_partners['partners']) && is_array($our_trusted_partners['partners'])): ?>
				<?php foreach($our_trusted_partners['partners'] as $partner): ?>
				<div class="swiper-slide">
					<div class="partner">
						<?php if (!empty($partner['image'])): ?>
						<img src="<?= esc_url($partner['image']) ?>" alt="">
						<?php endif; ?>
					</div>
				</div>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


<script>
	var swiper = new Swiper(".brand-swiper", {
		slidesPerView: 2.5,
		breakpoints: {
			640: {
				slidesPerView: 2.5,
			},
			768: {
				slidesPerView: 4,
			},
			1024: {
				slidesPerView: 6,
			},
		},
	});
</script>

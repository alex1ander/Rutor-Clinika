<?php 
$our_trusted_partners = get_field('our_trusted_partners');
// echo '<pre>';
// print_r($our_trusted_partners);
// echo '</pre>';
?>
<section class="partners">
	<div class="container">
		<h2 class="partners__title"><?= $our_trusted_partners['title'] ?></h2>
			
		<div class="swiper brand-swiper">
			<div class="swiper-wrapper">
				<?php foreach($our_trusted_partners['partners'] as $partner): ?>
				<div class="swiper-slide">
					<div class="partner">
						<img src="<?= $partner['image'] ?>" alt="">
					</div>
				</div>
				<?php endforeach; ?>
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

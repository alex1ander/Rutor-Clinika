<?php 
$services = get_field('services');
// echo '<pre>';
// print_r($services);
// echo '</pre>';
?>

<section class="services" id="services">
	<div class="container">
		<div class="services__header">
			<h2 class="services__title"><?= $services['title'] ?></h2>
			<a href="<?php echo get_category_link(get_category_by_slug('services')); ?>" target="<?= $services['link']['target'] ?>" class="services__link">
				<?= $services['link']['title'] ?>
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>

		<div class="swiper services-swiper">
			<div class="swiper-wrapper">
				<?php
				$args = array(
					'posts_per_page' => 10, // все посты
					'category_name'  => 'services', // категория по slug
					'post_type'      => 'post'
				);
				$query = new WP_Query($args);

				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="swiper-slide">
							<div class="service-card">
								<div class="service-card__image">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail('medium'); ?>
									<?php endif; ?>
								</div>
								<div class="service-card__content">
									<h3 class="service-card__title"><?php the_title(); ?></h3>
									<svg class="service-card__arrow" width="20" height="20" viewBox="0 0 20 20" fill="none">
										<path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</div>
</section>

<script>
	var swiper = new Swiper(".services-swiper", {
		slidesPerView: 2.2,
		breakpoints: {
			640: {
				slidesPerView: 2.2,
			},
			768: {
				slidesPerView: 3,
			},
			1024: {
				slidesPerView: 4,
			},
		},
	});
</script>

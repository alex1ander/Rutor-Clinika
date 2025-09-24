<?php
$socialLinks = get_field('social_links','options');
$contctForm = get_field('contact_form','options');
// echo '<pre>';
// print_r($socialLinks);
// print_r($contctForm);
// echo '</pre>';
?>


<section class="contact" id="contact">
	<div class="container">
		<div class="contact__content">
			<div class="contact__info">
				<h2 class="contact__title"><?= $contctForm['title'] ?></h2>
				<p class="contact__description"><?= $contctForm['text'] ?></p>
				<div class="contact__details">
					<div class="contact__detail">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M2.5 6.25L10 10.625L17.5 6.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M2.5 6.25L10 10.625L17.5 6.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<a href="mailto:<?= $socialLinks['email'] ?>"><?= $socialLinks['email'] ?></a>
					</div>
					<div class="contact__detail">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M2 3C2 2.44772 2.44772 2 3 2H5.15287C5.64171 2 6.0589 2.35341 6.13927 2.83560L6.87868 7.27147C6.95075 7.70451 6.73206 8.13397 6.33940 8.33030L4.79126 9.10437C5.90756 11.8783 8.12168 14.0924 10.8956 15.2087L11.6697 13.6606C11.866 13.2679 12.2955 13.0492 12.7285 13.1213L17.1644 13.8607C17.6466 13.9411 18 14.3583 18 14.8471V17C18 17.5523 17.5523 18 17 18H15C7.8203 18 2 12.1797 2 5V3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<a href="tel:<?= $socialLinks['phone'] ?>"><?= $socialLinks['phone'] ?></a>
					</div>
				</div>
			</div>
			<?php get_template_part('template-parts/contact-form'); ?>
		</div>
	</div>
</section>


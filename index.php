<?php 
/* Template Name: Contact */
get_header(); ?>

    <!-- Main Content -->
    <main class="main">

        <section class="gallery-slider">
        <div class="container">
			 <div class="contact-page">
                <h1 class="contact-page__title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
        </section>
    </main>

<?php get_footer(); ?>
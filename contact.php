<?php 
/* Template Name: Contact */
get_header(); ?>

    <!-- Main Content -->
    <main class="main">

        <section class="gallery-slider">
        <div class="container">
            <div class="contact-page">
                <h1 class="contact-page__title"><?php the_title(); ?></h1>
                <?php
                $themeOptions = get_field('social_links','options');
                $themeOptions = is_array($themeOptions) ? $themeOptions : [];
                $address = isset($themeOptions['address']) && is_array($themeOptions['address']) ? $themeOptions['address'] : [];
                $working = isset($themeOptions['working_time']) && is_array($themeOptions['working_time']) ? $themeOptions['working_time'] : [];
                $email = !empty($themeOptions['email']) ? $themeOptions['email'] : '';
                $phone = !empty($themeOptions['phone']) ? $themeOptions['phone'] : '';
                ?>
                
                <div class="contact-page__info">
                    <div class="contact-page__info-row">
                        <div class="contact-page__info-item">
                            <div class="contact-page__info-header">
                                <h3 class="contact-page__info-title">Clinic Address:</h3>
                            </div>
                            <div class="contact-page__info-content">
                                <?php if (!empty($address['text']) || !empty($address['link'])): ?>
                                <p class="contact-page__info-text">
                                    <?php if (!empty($address['link']) && !empty($address['text'])): ?>
                                        <a href="<?= esc_url($address['link']) ?>"><?= esc_html($address['text']) ?></a>
                                    <?php else: ?>
                                        <?= !empty($address['text']) ? esc_html($address['text']) : '' ?>
                                    <?php endif; ?>
                                </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="contact-page__info-item">
                            <div class="contact-page__info-header">
                                <h3 class="contact-page__info-title">Phone and Email</h3>
                            </div>
                            <div class="contact-page__info-content">
                                <?php if ($phone || $email): ?>
                                <p class="contact-page__info-text">
                                    <?php if ($phone): ?>
                                        <a href="tel:<?= esc_attr($phone) ?>"><?= esc_html($phone) ?></a><br>
                                    <?php endif; ?>
                                    <?php if ($email): ?>
                                        <a href="mailto:<?= esc_attr($email) ?>"><?= esc_html($email) ?></a>
                                    <?php endif; ?>
                                </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="contact-page__info-item">
                            <div class="contact-page__info-header">
                                <h3 class="contact-page__info-title">Work schedule</h3>
                            </div>
                            <div class="contact-page__info-content">
                                <?php if (!empty($working['days']) || !empty($working['times'])): ?>
                                <p class="contact-page__info-text">
                                    <?= !empty($working['days']) ? esc_html($working['days']) : '' ?><br>
                                    <?= !empty($working['times']) ? esc_html($working['times']) : '' ?>
                                </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-page__map">
                    <iframe style="width:100%; height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d166542.42022097675!2d23.964269702069824!3d56.97182042775431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2z0KDQuNCz0LAsINCb0LDRgtCy0LjRjw!5e1!3m2!1sru!2sde!4v1758639670520!5m2!1sru!2sde" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        </section>
    </main>

<?php get_footer(); ?>
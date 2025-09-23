<?php 
/* Template Name: Contact */
get_header(); ?>

    <!-- Main Content -->
    <main class="main">

        <section class="gallery-slider">
        <div class="container">
            <div class="contact-page">
                <h1 class="contact-page__title"><?php the_title(); ?></h1>
                
                <div class="contact-page__info">
                    <div class="contact-page__info-row">
                        <div class="contact-page__info-item">
                            <div class="contact-page__info-header">
                                <h3 class="contact-page__info-title">Clinic Address:</h3>
                            </div>
                            <div class="contact-page__info-content">
                                <p class="contact-page__info-text">Liudiškių g. 8, Anykščiai</p>
                            </div>
                        </div>
                        
                        <div class="contact-page__info-item">
                            <div class="contact-page__info-header">
                                <h3 class="contact-page__info-title">Phone and Email</h3>
                            </div>
                            <div class="contact-page__info-content">
                                <p class="contact-page__info-text">
                                    +370 (616) 222 27<br>
                                    info@rutosklinika.lt
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-page__info-item">
                            <div class="contact-page__info-header">
                                <h3 class="contact-page__info-title">Work schedule</h3>
                            </div>
                            <div class="contact-page__info-content">
                                <p class="contact-page__info-text">
                                    Monday – Friday<br>
                                    8:00 – 17:00
                                </p>
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
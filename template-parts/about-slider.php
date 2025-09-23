<?php 
$slider = get_field('slider');
// echo '<pre>';
// print_r($slider);
// echo '</pre>';
?>

<section class="gallery-slider">
        <div class="container">
            <div class="gallery-slider__content">
                <div class="gallery-slider__header">
                    <h2 class="gallery-slider__title"><?= $slider['title']?></h2>
                    <div class="gallery-slider__navigation">
                        <button class="gallery-slider__btn gallery-slider__btn--prev" aria-label="Previous slide">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="gallery-slider__btn gallery-slider__btn--next" aria-label="Next slide">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="swiper gallery-swiper">
                    <div class="swiper-wrapper">
                    <?php foreach($slider['slider'] as $slider): ?>
                        <div class="swiper-slide">
                            <div class="gallery-slide">
                                <img src="<?= $slider['image']?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Initialize Gallery Swiper
        const gallerySwiper = new Swiper(".gallery-swiper", {
            slidesPerView: 2.2,
            spaceBetween: 16,
            navigation: {
                nextEl: ".gallery-slider__btn--next",
                prevEl: ".gallery-slider__btn--prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2.2,
                },
                768: {
                    slidesPerView: 2.4,
                },
                1024: {
                    slidesPerView: 2.8,
                },
                1200: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
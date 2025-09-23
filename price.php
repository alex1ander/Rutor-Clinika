<?php get_header(); 
/* Template Name: Price */
?>


<!-- Main Content -->
<main class="main">
    <section class="gallery-slider">
        <div class="container">
        <div class="prices">
            <h1 class="prices__title"><?php the_title()?></h1>
            
            <div class="prices__accordions">

                <?php $pricesAccordions = get_field('price_accordion'); ?>
                <?php 
                // echo '<pre>';
                // print_r($pricesAccordions);
                // echo '</pre>';
                ?>

                <?php foreach ($pricesAccordions as $index => $accordion): ?>
                    <?php if ($index % 2 === 0): ?>
                        <div class="prices__row"><!-- открываем ряд -->
                    <?php endif; ?>

                    <div class="prices__accordion">
                        <button class="prices__accordion-header" data-accordion="<?= $index ?>">
                            <span class="prices__accordion-title"><?php echo esc_html($accordion['title']); ?></span>
                            <svg class="prices__accordion-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="prices__accordion-content" id="<?= $index ?>">
                            <div class="prices__services">
                                <?php foreach ($accordion['content'] as $service): ?>
                                    <div class="prices__service">
                                        <span class="prices__service-name"><?php echo esc_html($service['service_name']); ?></span>
                                        <span class="prices__service-price"><?php echo esc_html($service['price']); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <?php if ($index % 2 === 1 || $index === count($pricesAccordions) - 1): ?>
                        </div><!-- закрываем ряд -->
                    <?php endif; ?>
                <?php endforeach; ?>

                
                
            </div>
        </div>
    </div>
</section>
    
</main>

<script>
    // Burger Menu Functionality
    document.addEventListener('DOMContentLoaded', function() {

        // Prices Accordion Functionality
        const accordionHeaders = document.querySelectorAll('.prices__accordion-header');
        
        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const accordionId = this.getAttribute('data-accordion');
                const accordion = this.closest('.prices__accordion');
                const content = document.getElementById(accordionId);
                const icon = this.querySelector('.prices__accordion-icon');
                
                // Toggle active class
                accordion.classList.toggle('prices__accordion--active');
                
                // Toggle content visibility
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });

    });
</script>


<?php get_footer(); ?>
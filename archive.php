<?php get_header(); ?>

<?php 
$category = get_queried_object();
?>
<!-- Services Section -->
<section class="services-page">
    <div class="container">
        <div class="services-page__content">
            <!-- Header Section -->
            <div class="services-header">
                <h1 class="services-header__title"><?= single_cat_title('', false) ?></h1>
                <?php if (!empty($category->description)): ?>
                    <?= category_description() ?>
                <?php endif;?>
            </div>

            <!-- Services Accordion -->
            <div class="services-accordion">
                <?php if ( have_posts() ) : ?>
                    <?php 
                    $i = 1; // счётчик для нумерации
                    while ( have_posts() ) : the_post(); ?>
                        <div class="services-accordion__item" data-service="<?php echo $i; ?>">
                            <div class="services-accordion__header">
                                <div class="services-accordion__number">
                                    <?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>
                                </div>
                                <div class="services-accordion__title"><?php the_title(); ?></div>
                                <div class="services-accordion__content">
                                    <div class="services-accordion__description">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="services-accordion__actions">
                                        <button class="btn btn--primary">Request Consultation</button>
                                        <a href="<?php the_permalink(); ?>" class="btn  btn--secondary">View prices</a>
                                    </div>
                                    
                                </div>
                                <button class="services-accordion__toggle" aria-label="Toggle service details">
                                    <svg class="services-accordion__icon" xmlns="http://www.w3.org/2000/svg" width="23" height="2" viewBox="0 0 23 2" fill="none">
                                        <path d="M1 1H22" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <svg class="services-accordion__icon rotate" xmlns="http://www.w3.org/2000/svg" width="23" height="2" viewBox="0 0 23 2" fill="none">
                                        <path d="M1 1H22" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    <?php 
                    $i++;
                    endwhile; 
                    ?>
                <?php else: ?>
                    <p>No posts found in this category.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionItems = document.querySelectorAll('.services-accordion__item');
    
    accordionItems.forEach(item => {
        const toggle = item.querySelector('.services-accordion__toggle');
        const content = item.querySelector('.services-accordion__content');
        
        if (toggle && content) {
            content.addEventListener('transitionend', function() {
                if (item.classList.contains('is-open')) {
                    content.style.maxHeight = 'none';
                } else {
                    content.style.maxHeight = null;
                }
            });
            
            toggle.addEventListener('click', function() {
                const isOpen = item.classList.contains('is-open');
                
                accordionItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('is-open');
                        const otherContent = otherItem.querySelector('.services-accordion__content');
                        if (otherContent) {
                            otherContent.style.maxHeight = null;
                        }
                    }
                });
                
                if (isOpen) {
                    item.classList.remove('is-open');
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.offsetHeight;
                    content.style.maxHeight = '0px';
                } else {
                    item.classList.add('is-open');
                    content.style.maxHeight = content.scrollHeight + 'px';
                }
            });
        }
    });
});
</script>

<?php get_footer(); ?>

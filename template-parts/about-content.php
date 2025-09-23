<?php 
$content = get_field('content');
$content = is_array($content) ? $content : null;
?>

<section class="about" id="about">
    <div class="container">
        <div class="about__content">
            <div class="about__image">
                <?php if ($content && !empty($content['image'])): ?>
                <img src="<?= esc_url($content['image']) ?>" alt="Dental care approach">
                <?php endif; ?>
            </div>
            <div class="about__text flex-column">
                <?php if ($content && !empty($content['title'])): ?>
                <h2 class="about__title"><?= esc_html($content['title']) ?></h2>
                <?php endif; ?>
                <?php if ($content && !empty($content['text'])): ?>
                <p class="about__description"><?= esc_html($content['text']) ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php 
$content = get_field('content');
// echo '<pre>';
// print_r($content);
// echo '</pre>';
?>

<section class="about" id="about">
    <div class="container">
        <div class="about__content">
            <div class="about__image">
                <img src="<?= $content['image'] ?>" alt="Dental care approach">
            </div>
            <div class="about__text flex-column">
                <h2 class="about__title"><?= $content['title'] ?></h2>
                <p class="about__description"><?= $content['text'] ?></p>
            </div>
        </div>
    </div>
</section>
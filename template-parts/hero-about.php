<?php 
$hero = get_field('hero');
// echo '<pre>';
// print_r($hero);
// echo '</pre>';
?>
<!-- Hero Section -->
    <section class="about pb-0" id="about">
        <div class="container">
            <div class="about__text">
                <h2 class="about__title"><?= $hero['title']?></h2>
                <p class="about__description"><?= $hero['text']?></p>
            </div>

            <div class="about__content">
                <div class="about__image">
                    <img src="<?= $hero['background']?>" alt="Dental care approach">
                </div>
            </div>
        </div>
    </section>
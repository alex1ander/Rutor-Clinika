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
                    <!-- Service 1: Check-ups -->
                    <div class="services-accordion__item" data-service="1">
                        <div class="services-accordion__header">
                            <div class="services-accordion__number">01</div>
                            <div class="services-accordion__title">Check-ups</div>
                            <div class="services-accordion__content">
                                <div class="services-accordion__description">
                                    <p>At Rūtos klinika, we're pleased to be able to offer our clients comprehensive general dental care. From regular check-ups to preventive services, our goal is to ensure your long-term oral health with care and attention to detail.</p>
                                </div>
                                <div class="services-accordion__actions">
                                    <button class="btn btn--primary">Request Consultation</button>
                                    <button class="btn btn--secondary">View prices</button>
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

                    <!-- Service 2: Cleaning and Exams -->
                    <div class="services-accordion__item" data-service="2">
                        <div class="services-accordion__header">
                            <div class="services-accordion__number">02</div>
                            <div class="services-accordion__title">Cleaning and Exams</div>
                            <div class="services-accordion__content">
                                <div class="services-accordion__description">
                                    <p>To have a healthy and beautiful smile, you must maintain good oral hygiene. Our dental cleaning procedures remove plaque and tartar, help prevent gum disease, and ensure fresh breath and bright teeth.</p>
                                </div>
                                <div class="services-accordion__actions">
                                    <button class="btn btn--primary">Request Consultation</button>
                                    <button class="btn btn--secondary">View prices</button>
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

                    <!-- Service 3: Dental Extractions -->
                    <div class="services-accordion__item" data-service="3">
                        <div class="services-accordion__header">
                            <div class="services-accordion__number">03</div>
                            <div class="services-accordion__title">Dental Extractions</div>
                            <div class="services-accordion__content">
                                <div class="services-accordion__description">
                                    <p>Tooth extraction is usually a short procedure that relieves pain and prevents further complications. Our team ensures it's done with maximum comfort and precision, whether it's a simple or complex extraction.</p>
                                </div>
                                <div class="services-accordion__actions">
                                    <button class="btn btn--primary">Request Consultation</button>
                                    <button class="btn btn--secondary">View prices</button>
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

                    <!-- Service 4: Root Canal Treatments -->
                    <div class="services-accordion__item" data-service="4">
                        <div class="services-accordion__header">
                            <div class="services-accordion__number">04</div>
                            <div class="services-accordion__title">Root Canal Treatments</div>
                            <div class="services-accordion__content">
                                <div class="services-accordion__description">
                                    <p>Treatment of dental canals is a process during which infected or damaged pulp is removed. This allows the tooth to be preserved and pain relieved. Our modern techniques ensure the procedure is effective and comfortable.</p>
                                </div>
                                <div class="services-accordion__actions">
                                    <button class="btn btn--primary">Request Consultation</button>
                                    <button class="btn btn--secondary">View prices</button>
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

                    <!-- Service 5: Dental Implants -->
                    <div class="services-accordion__item" data-service="5">
                        <div class="services-accordion__header">
                            <div class="services-accordion__number">05</div>
                            <div class="services-accordion__title">Dental Implants</div>
                            <div class="services-accordion__content">
                                <div class="services-accordion__description">
                                    <p>Dental implants are a long-term solution used to replace missing teeth. They look and function like natural teeth and help maintain jaw structure. We use high-quality materials for lasting results.</p>
                                </div>
                                <div class="services-accordion__actions">
                                    <button class="btn btn--primary">Request Consultation</button>
                                    <button class="btn btn--secondary">View prices</button>
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

                    <!-- Service 6: Restorative and Cosmetic Dentistry -->
                    <div class="services-accordion__item" data-service="6">
                        <div class="services-accordion__header">
                            <div class="services-accordion__number">06</div>
                            <div class="services-accordion__title">Restorative and<br>Cosmetic Dentistry</div>
                            <div class="services-accordion__content">
                                <div class="services-accordion__description">
                                    <p>The dental filling procedure is performed to fill cavities and restore damaged teeth. We use aesthetic materials and precise techniques to ensure beautiful, long-lasting results for both restorative and cosmetic needs.</p>
                                </div>
                                <div class="services-accordion__actions">
                                    <button class="btn btn--primary">Request Consultation</button>
                                    <button class="btn btn--secondary">View prices</button>
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

                    <!-- Service 7: Crowns, Bridges and Dentures -->
                    <div class="services-accordion__item" data-service="7">
                        <div class="services-accordion__header">
                            <div class="services-accordion__number">07</div>
                            <div class="services-accordion__title">Crowns, Bridges<br>and Dentures</div>
                            <div class="services-accordion__content">
                                <div class="services-accordion__description">
                                    <p>Various injuries, dental caries, tissue diseases, or congenital conditions can cause tooth loss. Our prosthetic solutions — crowns, bridges, and dentures — restore function, aesthetics, and confidence to your smile.</p>
                                </div>
                                <div class="services-accordion__actions">
                                    <button class="btn btn--primary">Request Consultation</button>
                                    <button class="btn btn--secondary">View prices</button>
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
                </div>
            </div>
        </div>
    </section>



    <script>
        // Burger Menu Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.querySelector('.header__burger');
            const mobileMenu = document.querySelector('.header__mobile-menu');
            const body = document.body;


            // Services Accordion Functionality
            const accordionItems = document.querySelectorAll('.services-accordion__item');
            
            accordionItems.forEach(item => {
                const toggle = item.querySelector('.services-accordion__toggle');
                const content = item.querySelector('.services-accordion__content');
                const icon = item.querySelector('.services-accordion__icon.rotate');
                
                if (toggle && content && icon) {
                    // Add transition end listener to clean up styles
                    content.addEventListener('transitionend', function() {
                        if (item.classList.contains('is-open')) {
                            content.style.maxHeight = 'none';
                        } else {
                            content.style.maxHeight = null;
                        }
                    });
                    
                    toggle.addEventListener('click', function() {
                        const isOpen = item.classList.contains('is-open');
                        
                        // Close all other accordion items
                        accordionItems.forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.classList.remove('is-open');
                                const otherContent = otherItem.querySelector('.services-accordion__content');
                                const otherIcon = otherItem.querySelector('.services-accordion__icon.rotate');
                                if (otherContent && otherIcon) {
                                    otherContent.style.maxHeight = null;
                                }
                            }
                        });
                        
                        // Toggle current item
                        if (isOpen) {
                            item.classList.remove('is-open');
                            // Animate closing
                            content.style.maxHeight = content.scrollHeight + 'px';
                            // Force reflow
                            content.offsetHeight;
                            content.style.maxHeight = '0px';
                        } else {
                            item.classList.add('is-open');
                            // Set maxHeight to show content
                            content.style.maxHeight = content.scrollHeight + 'px';
                        }
                    });
                }
            });

    
        });
    </script>

    <?php get_footer(); ?>

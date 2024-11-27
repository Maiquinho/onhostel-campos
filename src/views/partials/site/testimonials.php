<?php

use src\handlers\TestimonialHandler;

$testimonials = TestimonialHandler::getAll();

if (!empty($testimonials)) : ?>
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary font-heading text-uppercase text-light py-1 px-4 border">Depoimentos</p>
                <h2 class="text-uppercase mb-4">O que dizem nossos hospedes?</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php foreach ($testimonials as $testimonial) : ?>
                    <blockquote class="testimonial-item bg-secondary py-2 px-4 border">
                        <em>"<?= $testimonial->text ?>"</em>
                        <h3 class="text-uppercase h6 mt-4">- <?= $testimonial->name ?></h3>
                    </blockquote>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
<?php endif; ?>
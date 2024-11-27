<?php

use src\handlers\HighlightHandler;

$highlightCards = HighlightHandler::getAll();

?>

<?php if (!empty($highlightCards)) : ?>
    <!-- Service Desktop Start -->
    <div id="desktop-service-carousel" class="container-xxl py-4 d-none d-lg-block">
        <div class="container">
            <div class="row g-4">

                <div class="owl-carousel services-carousel">

                    <?php foreach ($highlightCards as $highlightCard) : ?>
                        <div class="service-item position-relative overflow-hidden bg-secondary d-flex align-items-center h-100 p-2 ps-0 border">
                            <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="<?= $highlightCard->icon ?> fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <strong class="text-uppercase mb-3 text-light"><?= $highlightCard->name ?></strong>
                                <p><?= $highlightCard->description ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </div>
    <!-- Service Desktop End -->
    <!-- Service Mobile Start -->
    <div id="mobile-service-carousel" class="container-xxl py-4 d-block d-lg-none">
        <div class="container">
            <div class="row g-4">

                <div class="owl-carousel services-carousel">

                    <?php foreach ($highlightCards as $highlightCard) : ?>
                        <div class="service-item position-relative overflow-hidden bg-secondary d-flex flex-column justify-content-around align-items-start h-100 p-3 border">

                            <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="<?= $highlightCard->icon ?> fa-2x text-primary"></i>
                            </div>
                            <div>
                                <strong class="text-uppercase mb-3 text-light"><?= $highlightCard->name ?></strong>
                                <p><?= $highlightCard->description ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </div>
    <!-- Service Mobile End -->
<?php endif; ?>
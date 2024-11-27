<?php

$branchOneGalleryList = strpos($title, 'Aluguel') !== false ? glob('assets/site/img/uploads/2024/11/passeio-de-quadriciclo/*.jpg') : glob('assets/site/img/uploads/2024/11/quartos/*.jpeg');

?>


<!-- Gallery Start -->

<div class="grid d-none d-lg-block">
    <div class="grid-sizer"></div>
    <?php foreach ($branchOneGalleryList as $branchOneGalleryItem) : ?>
        <div class="grid-item unidade-1">
            <div class="overlay">
                <a href="<?= $base . $branchOneGalleryItem ?>" title="<?= $title ?>"><i class="fas fa-search"></i></a>
            </div>
            <img class="lazy" src="<?= $base . $branchOneGalleryItem ?>" loading="lazy" alt="<?= $title ?>" title="<?= $title ?>" />
        </div>
    <?php endforeach; ?>
</div>

<div class="grid owl-carousel gallery-carousel d-block d-lg-none">
    <?php foreach ($branchOneGalleryList as $branchOneGalleryItem) : ?>
        <div class="grid-item unidade-1">
            <div class="overlay">
                <a href="<?= $base . $branchOneGalleryItem ?>" title="<?= $title ?>"><i class="fas fa-search"></i></a>
            </div>
            <img class="lazy" src="<?= $base . $branchOneGalleryItem ?>" loading="lazy" alt="<?= $title ?>" title="<?= $title ?>" />
        </div>
    <?php endforeach; ?>
</div>

<!-- Gallery End -->
<?php

$branchOneGalleryList = ($pageId != 'gallery') ? glob('assets/site/img/uploads/2024/11/home/*.jpg') : glob('assets/site/img/uploads/2024/11/galeria/*.jpg');
natsort($branchOneGalleryList);
// $branchTwoGalleryList = ($pageId != 'gallery') ? glob('assets/site/img/unidade-2/home/*.jpg') : glob('assets/site/img/unidade-2/*.jpg');

?>

<!-- Gallery Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary font-heading text-uppercase text-light py-1 px-4 border">Galeria</p>
            <h2 class="text-uppercase">Veja nosso espaço</h2>
            <small>Clique em <i class="fas fa-search"></i> para ampliar</small>
        </div>
        <!-- <div class="row py-3 d-flex justify-content-center d-none d-lg-block">
            <ul class="tabs portfolio-filter">
                <li class="tab active">
                    <a href="#" data-filter="*">Todas</a>
                </li>
                <li class="tab">
                    <a href="#" data-filter=".unidade-1">Unidade 1</a>
                </li>
                <li class="tab">
                    <a href="javascript:void(0)" data-filter=".unidade-2">Unidade 2</a>
                </li>
            </ul>
        </div> -->
        <div class="grid d-none d-lg-block">
            <div class="grid-sizer"></div>
            <?php foreach ($branchOneGalleryList as $branchOneGalleryItem) : ?>
                <div class="grid-item unidade-1">
                    <div class="overlay">
                        <a href="<?= $branchOneGalleryItem ?>" title="ON Hostel Campos do Jordão"><i class="fas fa-search"></i></a>
                    </div>
                    <img class="lazy" src="<?= $branchOneGalleryItem ?>" loading="lazy" alt="ON Hostel Campos do Jordão" title="ON Hostel Campos do Jordão" />
                </div>
            <?php endforeach; ?>
        </div>

        <div class="grid owl-carousel gallery-carousel d-block d-lg-none">
            <?php foreach ($branchOneGalleryList as $branchOneGalleryItem) : ?>
                <div class="grid-item unidade-1">
                    <div class="overlay">
                        <a href="<?= $branchOneGalleryItem ?>" title="ON Hostel Campos do Jordão"><i class="fas fa-search"></i></a>
                    </div>
                    <img class="lazy" src="<?= $branchOneGalleryItem ?>" loading="lazy" alt="ON Hostel Campos do Jordão" title="ON Hostel Campos do Jordão" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Gallery End -->
<?php

use src\handlers\BannerHandler;
use src\helpers\Company;
use src\helpers\Phone;
use src\helpers\WhatsappMessage;

$banners = BannerHandler::getAll();

if (count($banners) > 0) : ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($banners as $bannerKey => $banner) : 
                    
                    $imagePath = explode('.', $banner->image);
                    $image = $imagePath[0];
                    $imageExtension = $imagePath[1];
                    
                    ?>
                    <div class="carousel-item<?= $bannerKey == 0 ? ' active' : '' ?>">
                        <a href="<?= !empty($banner->url && strpos($banner->url, 'https') === false) ? $base : '' ?><?= !empty($banner->url) ? $banner->url : 'javascript:void(0)' ?>" <?= !empty($banner->url && strpos($banner->url, 'https') !== false) ? 'target="_blank"' : '' ?>>
                            <img class="w-100 d-block d-lg-none" src="<?= $base . "$image-mobile.$imageExtension" ?>" alt="<?= $banner->altTitle ?>" title="<?= $banner->altTitle ?>" />
                            <img class="w-100 d-none d-lg-block" src="<?= $base . "$image.$imageExtension" ?>" alt="<?= $banner->altTitle ?>" title="<?= $banner->altTitle ?>" />
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <?php if(count($banners) > 1): ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <?php endif; ?>
        </div>
    </div>
    <!-- Carousel End -->

<?php endif; ?>
<?php

use src\helpers\Company;
use src\helpers\Social;

list($title, $description, $breadcrumbTitle, $breadcrumbSchema) = array_values($metadata);

$pageData = [
    'title'         => $title,
    'description'   => $description,
    'pageId'        => $pageId
];

$render('partials/site', 'head', $pageData);
$render('partials/site', 'header');
$render('partials/site', 'breadcrumbs', [
    'title'             => $breadcrumbTitle,
    'breadcrumbSchema'  => $breadcrumbSchema,
    'pageId'            => $pageId,
]);

?>


<main>
    <!-- Contact Start -->
    <div class="container-xxl py-4 py-lg-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <div class="tab-content border border-top-0 p-4" id="myTabContent"> -->
                        <!-- <div class="tab-pane fade show active" id="unidade-i" role="tabpanel" aria-labelledby="unidade-i-tab"> -->
                            <div class="row justify-content-center gap-2 g-0 mb-3">
                                <a href="<?= Company::getFirstAddress()->google_maps ?>" class="btn btn-primary w-fit" title="Abrir endereço no Google Maps" target="_blank">Abrir no Google Maps <i class="fas fa-map-marker-alt"></i></a>
                                <a href="<?= Company::getFirstAddress()->waze ?>" class="btn btn-primary w-fit" title="Abrir endereço no Waze" target="_blank">Abrir no Waze <i class="fas fa-map-marker-alt"></i></a>
                            </div>
                            <div class="row g-0">
                                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="h-100">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d920.0724526323562!2d-45.5737321!3d-22.7174671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc89006471641f%3A0x9918e98029bc3cb8!2sOn%20Hostel%20Capivari%20Campos%20do%20Jord%C3%A3o%20passeio%20quadriciclo!5e0!3m2!1spt-BR!2sbr!4v1735854320742!5m2!1spt-BR!2sbr" width="100%" height="450" style="filter: invert(100%) contrast(100%); border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="tab-pane fade" id="unidade-ii" role="tabpanel" aria-labelledby="unidade-ii-tab"> -->
                            
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <!-- Contact End -->
</main>


<?php
$render('partials/site', 'footer', [
    'pageId' => $pageId
]);
?>
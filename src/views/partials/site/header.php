<?php

use core\Request;
use src\Config;
use src\handlers\PageHandler;
use src\helpers\Company;
use src\helpers\Phone;
use src\helpers\Social;
use src\helpers\UrlValidator;
use src\helpers\WhatsappMessage;

$dropdownServices = PageHandler::getAll();

$filterActiveDropdownServices = array_values(array_filter($dropdownServices, fn ($dropdownService) => (strpos(Request::getUri(), $dropdownService->fullUrl) !== false)));
$dropdownActiveService = (!empty($filterActiveDropdownServices)) ? $filterActiveDropdownServices[0]->fullUrl : null;

?>


<!-- Spinner Start -->
<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<div class="top-header bg-secondary py-2 px-lg-5">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-auto col-lg-4">
                <span><a href="<?= Company::getFirstAddress()->google_maps ?>" class="text-light" title="Endereço da <?= Company::getFullName() ?>. Clique para abrir o Google Maps." target="_blank"><i class="fa fa-map-marker-alt"></i> <?= Company::getFirstAddress()->address . " - " . Company::getFirstAddress()->city ?></a></span>
            </div>
            <div class="col-auto col-lg-4">
                <ul class="social-list">
                    <?php

                    $socialDataArraySortedByNameDesc = Social::getAll();

                    array_multisort(array_map(function ($element) {
                        return $element->name;
                    }, $socialDataArraySortedByNameDesc), SORT_DESC, $socialDataArraySortedByNameDesc);

                    foreach ($socialDataArraySortedByNameDesc as $socialData) : ?>
                        <li>
                            <a href="<?= $socialData->url ?>" class="text-light" target="_blank" title="<?= ucfirst($socialData->name) . ": " . Company::getShortName() ?>. Clique para abrir o <?= ucfirst($socialData->name) . " da " . Company::getShortName() ?>.">
                                <i class="fab fa-<?= $socialData->name ?>"></i>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <li><a href="<?= WhatsappMessage::generatePlural(Phone::getFirst()->unmaskedPhone, "", "Olá, vi seu site e gostaria de fazer uma reserva na " . Company::getShortName() . "!") ?>" class="text-light" title="Clique e fale conosco pelo WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <div class="col-12 d-lg-none mt-2">
                <a href="<?= Config::BOOKING_URL ?>" target="_blank" class="d-block d-lg-none w-100 btn btn-transparent text-light text-uppercase border-primary border-2 rounded-0 text-uppercase text-left py-2 px-lg-4" title="Faça uma reserva agora mesmo!">Reserve agora<i class="fa fa-angle-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top py-2 px-lg-5">

    <a href="<?= $base ?>" class="navbar-brand ms-4 ms-lg-0">
        <img src="<?= $base ?>assets/site/img/logo.png" class="img-fluid" alt="logotipo da marca: <?= Company::getShortName() ?>" title="Logo - <?= Company::getFullName() ?>" />
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?= $base ?>" class="nav-item nav-link<?= UrlValidator::isCurrentUrlValid($base . Request::getUri(), $base . '') ? ' active' : '' ?>" title="Página home">Home</a>


            <a href="<?= $base . 'o-hostel' ?>" class="nav-item nav-link<?= UrlValidator::isCurrentUrlValid($base . Request::getUri(), $base . 'o-hostel') ? ' active' : '' ?>" title="Página de sobre nós">Sobre Nós</a>
            <div class="nav-item dropdown d-none d-lg-block">
                <a href="<?= $base . 'informacoes' ?>" class="nav-link dropdown-toggle<?= UrlValidator::isCurrentUrlValid($base . Request::getUri(), $base . 'informacoes') ? ' active' : '' ?><?= !empty($dropdownActiveService) && UrlValidator::isCurrentUrlValid($base . Request::getUri(), $base . $dropdownActiveService) ? ' active' : '' ?>" data-bs-toggle="dropdown" title="Página de informações" onclick="window.open('<?= $base . 'informacoes' ?>', '_self')">Informações</a>
                <div class="dropdown-menu m-0">
                    <?php foreach ($dropdownServices as $dropdownService) : ?>
                        <a href="<?= $base . $dropdownService->fullUrl ?>" class="dropdown-item<?= UrlValidator::isCurrentUrlValid($base . Request::getUri(), $base . $dropdownService->fullUrl) ? ' active' : '' ?>" title="Página <?= $dropdownService->h1 ?>"><?= $dropdownService->h1 ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <a href="<?= $base . 'informacoes' ?>" class="nav-item nav-link d-block d-lg-none<?= UrlValidator::isCurrentUrlValid($base . Request::getUri(), $base . 'informacoes') ? ' active' : '' ?>" title="Página de informações">Informações</a>
            <a href="<?= $base . 'galeria' ?>" class="nav-item nav-link<?= UrlValidator::isCurrentUrlValid($base . Request::getUri(), $base . 'galeria') ? ' active' : '' ?>" title="Página de Galeria">Galeria</a>
            <a href="<?= $base . 'como-chegar-no-hostel' ?>" class="nav-item nav-link<?= UrlValidator::isCurrentUrlValid($base . Request::getUri(), $base . 'como-chegar-no-hostel') ? ' active' : '' ?>" title="Página como chegar no ON Hostel">Como chegar</a>
            <a href="<?= $base . 'contato' ?>" class="nav-item nav-link<?= UrlValidator::isCurrentUrlValid($base . Request::getUri(), $base . 'contato') ? ' active' : '' ?>" title="Página de contato">Contato</a>
        </div>
        <a href="<?= Config::BOOKING_URL ?>" target="_blank" class="d-none d-lg-block btn btn-transparent text-light text-uppercase border-primary border-2 rounded-0 py-2 px-lg-4" title="Faça uma reserva agora mesmo!">Reserve agora<i class="fa fa-angle-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
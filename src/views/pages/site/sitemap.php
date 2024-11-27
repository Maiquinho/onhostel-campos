<?php

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
    <!-- Sitemap Start -->
    <div class="container-xxl pt-5 pb-4">
        <div class="container">
            <div class="row flex-column flex-lg-row g-5">
                <div class="col-12 col-lg-12 d-flex flex-column justify-content-center mt-0 mt-lg-4">
                    <ul class="sitemap-list list-unstyled">
                        <li><a href="<?= $base ?>" class="btn btn-link text-light d-inline" title="Página Home"><i class="fas fa-link"></i> Home</a></li>
                        <li><a href="<?= $base . 'o-hostel' ?>" class="btn btn-link text-light d-inline" title="Página o Hostel"><i class="fas fa-link"></i> O Hostel</a></li>
                        <li>
                            <a href="<?= $base . 'informacoes' ?>" class="btn btn-link text-light d-inline" title="Página de informações"><i class="fas fa-link"></i> Informações</a>
                            <ul class="list-unstyled ms-4">
                                <?php foreach ($articles as $article) : ?>
                                    <li><a href="<?= $base . $article->fullUrl ?>" class="btn btn-link text-light d-inline" title="Página <?= $article->h1 ?>" class="btn btn-link text-light d-inline"><i class="fas fa-link"></i> <?= $article->h1 ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="<?= $base . 'como-chegar-no-hostel' ?>" class="btn btn-link text-light d-inline" title="Página como chegar no ON Hostel"><i class="fas fa-link"></i> Como chegar</a></li>
                        <li><a href="<?= $base . 'termos-e-condicoes' ?>" class="btn btn-link text-light d-inline" title="Página Termos e Condições"><i class="fas fa-link"></i> Termos e Condições</a></li>
                        <li><a href="<?= $base . 'politica-de-privacidade' ?>" class="btn btn-link text-light d-inline" title="Página Política de Privacidade"><i class="fas fa-link"></i> Política de Privacidade</a></li>
                        <li><a href="<?= $base . 'mapa-do-site' ?>" class="btn btn-link text-light d-inline" title="Página Mapa do Site"><i class="fas fa-link"></i> Mapa do Site</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sitemap End -->
</main>


<?php
$render('partials/site', 'footer', [
    'pageId' => $pageId
]);
?>
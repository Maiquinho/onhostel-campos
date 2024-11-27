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
    <!-- Service Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="mb-4" style="max-width: 600px;">
                <h2 class="text-uppercase">Nossos serviços</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($articles as $article) : ?>
                    <div class="col-12 col-lg-4">
                        <div class="service-item position-relative overflow-hidden bg-secondary d-flex align-items-center h-100 p-2 ps-0">
                            <a href="<?= $base . $article->fullUrl ?>" class="d-flex align-items-center" title="Página <?= $article->h1 ?>">
                                <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-hotel fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <strong class="text-uppercase mb-3 text-light"><?= $article->h1 ?></strong>
                                    <!-- <p><?= substr(strip_tags($article->content), 0, 60) ?>...</p> -->
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Service End -->
</main>


<?php
$render('partials/site', 'footer', [
    'pageId' => $pageId
]);
?>
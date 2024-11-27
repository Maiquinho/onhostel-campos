<?php

use src\helpers\Company;

$pageData = [
    'title' => 'Obrigado pelo contato',
    'description' => 'Página de obrigado - ' . Company::getShortName(),
    'pageId' => $pageId
];

$render('partials/site', 'head', $pageData);
$render('partials/site', 'header');
?>

<main>
    <!-- About Start -->
    <div class="container-xxl pt-5 pb-4">
        <div class="container">
            <div class="row flex-column flex-lg-row g-5">
                <div class="col-12 col-lg-12 d-flex flex-column justify-content-center mt-0 mt-lg-4">
                    <div class="empty-cart text-center">
                        <div class="empty-cart-img mb-2">
                            <i class="fa fa-paper-plane fa-5x"></i>
                        </div>
                        <div class="themesflat-headings style-1 text-center clearfix mb-4">
                            <h1 class="heading"><?= $formMessageSuccess ?></h1>
                            <p class="m-0">Agradecemos pelo seu contato</p>
                            <small class="d-block">Faremos o possível para retorná-lo o mais breve possível.</small>
                        </div>

                        <a href="<?= $base ?>" class="btn btn-primary rounded-0"><i class="fa fa-angle-left"></i> Voltar à página home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</main>

<?php
$render('partials/site', 'footer', [
    'pageId' => $pageId
]);
?>
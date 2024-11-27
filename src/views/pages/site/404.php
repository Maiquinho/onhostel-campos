<?php

$pageData = [
    'title' => 'Essa página não existe',
    'description' => 'Erro 404. A página que você está procurando não existe.',
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
                        <h1 class="display-1">404</h1>
                        <div class="my-4">
                            <p class="m-0">Página não encontrada</p>
                            <small class="d-block">Desculpe, a página que você está procurando não existe!</small>
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
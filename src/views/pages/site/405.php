<?php

$pageData = [
    'title' => 'Método não permitido!',
    'description' => 'Erro 405. O método que você utilizou não é permitido.',
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
                        <div class="empty-cart-img">
                            <i class="fa fa-alert fa-xl"></i>
                        </div>
                        <h1 class="display-1">405</h1>
                        <div class="my-4">
                            <p class="m-0">Método não permitido</p>
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
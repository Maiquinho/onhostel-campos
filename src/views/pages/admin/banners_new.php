<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Novo banner (página home) - ' . Company::getFullName(),
    'description' => 'Página de cadastro de banners - ' . Company::getShortName(),
    'pageId' => $pageId
]);

?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php
    $render('partials/admin', 'header', ['loggedUser' => $loggedUser]);
    $render('partials/admin', 'aside', [
        'activeMenu', 'banners',
        'loggedUser' => $loggedUser
    ]);
    ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <?php $render('partials/admin', 'breadcrumbs', [
                            'title' => 'Novo banner',
                            'breadcrumbItem' => [
                                'Banners' => 'banners',
                                'Novo' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= $base . 'admin/banners/new' ?>" method="POST" enctype="multipart/form-data">

                                    <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                    <div class="row mb-3">
                                        <label for="banner-alt-title" class="col-sm-2 col-form-label">Alt Title do banner</label>
                                        <div class="col-sm-10">
                                            <input id="banner-alt-title" class="form-control" type="text" placeholder="" name="alt_title" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="order_position" class="col-sm-2 col-form-label">Posição do banner</label>
                                        <div class="col-sm-10">
                                            <input id="order_position" class="form-control" type="number" placeholder="Digite a posição do banner começando pelo 0, exemplo (0, 1, 2...). Obs: Verifique as posições pré-existentes para não gerar nenhum conflito." name="order_position" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="url" class="col-sm-2 col-form-label">Url do banner</label>
                                        <div class="col-sm-10">
                                            <input id="url" class="form-control" type="text" placeholder="Digite a url do banner, exemplo: sacolas (sem o prefixo: https://dominio.com.br/)" name="url" />
                                        </div>
                                    </div>

                                    <input type="hidden" name="added_by" value="<?= $loggedUser->username ?>" />
                                    <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />

                                    <div class="row mb-3">
                                        <label for="banner-image" class="col-sm-2 col-form-label">Imagem</label>
                                        <div class="col-sm-10">
                                            <input id="banner-image" type="file" name="image" class="filestyle" data-input="true" data-buttonname="btn-secondary" accept="image/png,image/jpg,image/jpeg">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Ativo</label>
                                        <div class="col-sm-10">

                                            <div class="d-flex gap-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="able" id="bannerAble" value="1" checked>
                                                    <label class="form-check-label" for="bannerAble">
                                                        Sim
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="able" id="bannerDisable" value="0">
                                                    <label class="form-check-label" for="bannerDisable">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button id="submit-form" type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Salvar <i class="mdi mdi-content-save"></i>
                                            </button>
                                            <a href="<?= $base . 'admin/banners' ?>" class="btn btn-secondary waves-effect">
                                                Cancelar
                                            </a>
                                        </div>
                                    </div>

                                </form>
                                <!-- end form -->
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php $render('partials/admin', 'footer'); ?>


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php $render('partials/admin', 'end', ['pageId' => $pageId]); ?>
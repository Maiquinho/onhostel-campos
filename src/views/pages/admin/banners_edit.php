<?php

use src\helpers\Company;

$render('partials/admin', 'head', [
    'title' => 'Editar banner ' . $banner->id . ' (página home) - ' . Company::getFullName(),
    'description' => 'Página de edição do banner ' . $banner->id . ' - ' . Company::getShortName(),
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
                            'title' => 'Editar banner ' . $banner->id,
                            'breadcrumbItem' => [
                                'Banners' => 'banners',
                                $banner->id => 'banners/' . $banner->id . '/',
                                'Editar' => '',
                            ]
                        ]) ?>
                    </div>
                </div>
                <!-- end page title -->


                <form action="<?= $base . 'admin/banners/' . $banner->id . '/edit' ?>" class="row" method="POST" enctype="multipart/form-data">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Prévia banner <?= $banner->id ?></h4>

                                <div class="row">
                                    <div class="col-lg-9">
                                        <img src="<?= $base . $banner->image ?>" class="img-thumbnail rounded me-2 img-fluid" alt="" />
                                    </div>
                                </div>

                                <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                <div class="row mb-3">
                                    <label for="banner-alt-title" class="col-sm-2 col-form-label">Alt Title do banner</label>
                                    <div class="col-sm-10">
                                        <input id="banner-alt-title" class="form-control" type="text" placeholder="<?= (empty($banner->altTitle)) ? 'Banner sem alt title' : '' ?>" name="alt_title" value="<?= $banner->altTitle ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="order_position" class="col-sm-2 col-form-label">Posição do banner</label>
                                    <div class="col-sm-10">
                                        <input id="order_position" class="form-control" type="number" placeholder="Digite a posição do banner começando pelo 0, exemplo (0, 1, 2...)" name="order_position" value="<?= $banner->orderPosition ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="url" class="col-sm-2 col-form-label">Url do banner</label>
                                    <div class="col-sm-10">
                                        <input id="url" class="form-control" type="text" placeholder="Digite a url do banner, exemplo: sacolas (sem o prefixo: https://dominio.com.br/)" name="url" value="<?= $banner->url ?>" />
                                    </div>
                                </div>

                                <input type="hidden" name="last_update" value="<?= $loggedUser->username ?>" />
                                <input type="hidden" name="default_image" value="<?= $banner->image ?>" />

                                <div class="row mb-3">
                                    <label for="banner-image" class="col-sm-2 col-form-label">Alterar imagem</label>
                                    <div class="col-sm-10">
                                        <input id="banner-image" type="file" name="image" class="filestyle" data-input="true" data-buttonname="btn-secondary" accept="image/png,image/jpg,image/jpeg">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Ativo</label>
                                    <div class="col-sm-10">

                                        <div class="d-flex gap-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="bannerAble" <?= $banner->able == 1 ? 'checked' : '' ?> value="1">
                                                <label class="form-check-label" for="bannerAble">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="able" id="bannerDisable" <?= $banner->able == 0 ? 'checked' : '' ?> value="0">
                                                <label class="form-check-label" for="bannerDisable">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- end form -->
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">

                                <p class="card-title-desc pt-4">Para continuar preencha os campos abaixo.</p>

                                <div class="row">
                                    <div class="col-sm-12 d-flex flex-column gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1 w-100">
                                            Salvar Banner <i class="mdi mdi-content-save"></i>
                                        </button>
                                        <a href="<?= $base . 'admin/banners/' . $banner->id . '/delete' ?>" class="btn btn-danger waves-effect w-100" onclick="return confirm('Deseja continuar com a exclusão do banner <?= $banner->id ?>?\nClique em OK para continuar ou em Cancelar para desistir.')">
                                            Deletar Banner <i class="mdi mdi-trash-can"></i>
                                        </a>
                                        <a href="<?= $base . 'admin/banners' ?>" class="btn btn-secondary waves-effect w-100">
                                            Cancelar Modificações <i class="mdi mdi-cancel"></i>
                                        </a>
                                    </div>
                                </div>

                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                </form> <!-- end row -->


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php $render('partials/admin', 'footer'); ?>


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php $render('partials/admin', 'end', ['pageId' => $pageId]); ?>